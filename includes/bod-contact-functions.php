<?php 

/**
 * Retrieve all users except administrators along with specified ACF/custom meta fields.
 *
 * @param array $fields List of user meta keys (ACF field names) to retrieve.
 * @return array Array of associative arrays, each representing one user.
 */
function bodkghoa_get_users_with_meta( $fields = array() ) {
    // Query all users except role=Administrator and user ID 1
    $args = array(
        'orderby'      => 'display_name',
        'order'        => 'ASC',
        'exclude'      => array( 1 ),                       // exclude the first admin
        'role__not_in' => array( 'Administrator' ),         // exclude any other admins
    );
    $user_query = new WP_User_Query( $args );
    $users_data = array();

    if ( ! empty( $user_query->get_results() ) ) {
        foreach ( $user_query->get_results() as $user ) {
            $data = array(
                'ID'           => $user->ID,
                'display_name' => $user->display_name,
                'user_email'   => $user->user_email,
            );

            // grab each custom field (falling back to get_user_meta if ACF isn't active)
            foreach ( $fields as $field_key ) {
                if ( function_exists( 'get_field' ) ) {
                    // ACF way: pass “user_{$ID}” as the context
                    $value = get_field( $field_key, 'user_' . $user->ID );
                } else {
                    // core WP fallback
                    $value = get_user_meta( $user->ID, $field_key, true );
                }
                $data[ $field_key ] = $value;
            }

            $users_data[] = $data;
        }
    }

    return $users_data;
}

/**
 * Echo out an HTML table of users + meta, sorted by a custom 'office' position sequence.
 *
 * @param array $fields List of user meta keys to display as columns.
 */
function bodkghoa_display_users_table( $fields = array() ) {
    // 1) grab everyone (except admins) with their meta
    $users = bodkghoa_get_users_with_meta( $fields );

    if ( !isset($users) || empty( $users ) ) {
        echo '<p>No users found.</p>';
        return;
    }

    // 2) if we're showing a 'office' column, sort by our explicit sequence
    if ( in_array( 'office', $fields, true ) ) {
        // map normalized office → order index
        $order_map = array(
            'president'     => 0,
            'vicepresident' => 1,
            'secretary'     => 2,
            'treasurer'     => 3,
            'director1'     => 4,
            'director2'     => 5,
            'director3'     => 6,
        );

        usort( $users, function( $a, $b ) use ( $order_map ) {
            $normalize = function( $pos ) {
                // lowercase, strip everything but letters+numbers
                $n = strtolower( $pos );
                return preg_replace( '/[^a-z0-9]/', '', $n );
            };

            $iA = $normalize( isset( $a['office'] ) ? $a['office'] : '' );
            $iB = $normalize( isset( $b['office'] ) ? $b['office'] : '' );

            $rankA = isset( $order_map[ $iA ] ) ? $order_map[ $iA ] : PHP_INT_MAX;
            $rankB = isset( $order_map[ $iB ] ) ? $order_map[ $iB ] : PHP_INT_MAX;

            // if same office, fallback to alphabetical display_name
            if ( $rankA === $rankB ) {
                return strcasecmp( $a['display_name'], $b['display_name'] );
            }

            return $rankA - $rankB;
        } );
    }

    // 3) output the table

    echo '
        <div class="board-members-wrap table-responsive">
            <table id="bod-contact-info" class="table table-striped table-bordered">
                <thead class="table-secondary border-top border-secondary-subtle">
                    <tr>
                        ';
    echo '<th>Name</th>';
      foreach ( $fields as $key ) {
          $label = ucwords( str_replace( '_', ' ', $key ) );
          echo '<th>' . esc_html( $label ) . '</th>';
      }
    echo '</tr></thead><tbody>';

      foreach ( $users as $u ) {

          echo '<tr>';
            echo '<td>' . esc_html( $u['display_name'] ) . '</td>';
            foreach ( $fields as $key ) {
                if($u[$key] == 'Member') $u[$key] = 'Director';
                if($key == 'personal_email'){
                    echo '<td><a href="mailto:' . esc_html( $u[ $key ] ) . '">' . esc_html( $u[ $key ] ) . '</a></td>';
                } else {
                    echo '<td>' . esc_html( $u[ $key ] ) . '</td>';
                }
                
            }
          echo '</tr>';
      }

    echo '</tbody></table>';
}