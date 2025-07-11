<?php
/**
 * Template Name: Lot Owners
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-lot-owners container-md mt-4 mb-5">
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h1 class="mt-4 mb-0"><?php the_title(); ?></h1>
                    <div class="fs-6 fw-normal fst-italic mb-3">Last updated 5/5/2024</div>
                </div>

                <?php echo do_shortcode('[hoa-lot-owners]');
/*
                global $wpdb;

                // Setup
                $table = 'kghdd_lots'; 
                $per_page = 40;
                $paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);
                $offset = ($paged - 1) * $per_page;

                // Sanitize search term
                $search = isset($_GET['lot_search']) ? sanitize_text_field($_GET['lot_search']) : '';
                $search_sql = '';
                $search_args = [];

                // Define base query
                $base_query = "SELECT lot_number, section, is_rental, address, owner,
                    CONCAT_WS(' ', mailing_address, mailing_address2, mailing_city, mailing_state, mailing_zip) AS mailing
                    FROM `$table`";
                $count_query = "SELECT COUNT(*) FROM `$table`";

                if ($search !== '') {
                    $like = '%' . $wpdb->esc_like($search) . '%';

                    if (ctype_digit($search)) {
                        $where = "WHERE lot_number LIKE %s OR address LIKE %s OR mailing_address LIKE %s OR mailing_address2 LIKE %s";
                        $search_sql = $wpdb->prepare($where, $like, $like, $like, $like);
                    } else {
                        $where = "WHERE section LIKE %s OR owner LIKE %s OR address LIKE %s OR alt_address LIKE %s OR mailing_address LIKE %s OR mailing_city LIKE %s OR mailing_state LIKE %s";
                        $search_sql = $wpdb->prepare($where, $like, $like, $like, $like, $like, $like, $like);
                    }

                    $base_query .= ' ' . $search_sql;
                    $count_query .= ' ' . $search_sql;
                }

                // Get total and results
                $total = $wpdb->get_var($count_query);
                $results = $wpdb->get_results($base_query . $wpdb->prepare(" ORDER BY lot_number ASC LIMIT %d OFFSET %d", $per_page, $offset), ARRAY_A);

                // Output
                echo '<div class="wrap">';

                // Search form
                echo '
                <form method="get" action="" class="lot-search">
                    <input type="text" name="lot_search" value="'. esc_attr($search) .'" placeholder="Search lots..." />
                    <input type="submit" class="button" value="Search" />';
                    if ($search): 
                        echo '<a href="'. esc_url( get_permalink() ).'"><input type="button" class="ms-1" value="Reset" /></a>';
                    endif;
                echo '</form>';

                $total_pages = ceil($total / $per_page);
                if ($total_pages > 1) {
                    echo '<div class="pagination">';
                    echo paginate_links([
                        'base'      => get_permalink() . '?lot_search=' . urlencode($search) . '&paged=%#%',
                        'format'    => '',
                        'current'   => $paged,
                        'total'     => $total_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    ]);

                    echo '</div>';
                }

                echo '<table class="lot-table"><thead><tr>';
                echo '<th>Lot #</th><th>Section</th><th>Rental</th><th>Address</th><th>Owner</th><th>Mailing Address</th>';
                echo '</tr></thead><tbody>';

                if ($results) {
                    foreach ($results as $row) {
                        echo '<tr>';
                        echo '<td>' . esc_html($row['lot_number']) . '</td>';
                        echo '<td>' . esc_html($row['section']) . '</td>';
                        echo '<td style="width:66px" class="text-center">' . ($row['is_rental'] ? 'Yes' : '') . '</td>';
                        echo '<td style="width:200px">' . esc_html($row['address']) . '</td>';
                        echo '<td>' . esc_html($row['owner']) . '</td>';
                        echo '<td>' . esc_html($row['mailing']) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No matching lots found.</td></tr>';
                }
                echo '</tbody></table></div>';

                // Pagination
                $total_pages = ceil($total / $per_page);
                if ($total_pages > 1) {
                    echo '<div class="pagination">';
                    echo paginate_links([
                        'base'      => get_permalink() . '?lot_search=' . urlencode($search) . '&paged=%#%',
                        'format'    => '',
                        'current'   => $paged,
                        'total'     => $total_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    ]);

                    echo '</div>';
                }
               */ ?>

            </div>
        </div>

<?php get_footer(); 