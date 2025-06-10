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
                <!-- Title: takes half the width on md+ screens, full width (stacked) on smaller -->
                <div class="col-md-6">
                    <h1 class="mt-4 mb-0">Lot Owners</h1>
                    <div class="fs-6 fw-normal fst-italic mb-3">Last updated 5/5/2024</div>
                </div>

                <?php 

                global $wpdb;

                // Setup
                $table = 'kghdd_lots'; 
                $per_page = 56;
                $paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);
                $offset = ($paged - 1) * $per_page;

                // Get total for pagination
                $total = $wpdb->get_var("SELECT COUNT(*) FROM `$table`");

                // Fetch records with just needed fields, with inline mailing address
                $results = $wpdb->get_results(
                    $wpdb->prepare(
                        "SELECT lot_number, section, is_rental, address, owner,
                            CONCAT_WS(' ', mailing_address, mailing_address2, mailing_city, mailing_state, mailing_zip) AS mailing
                        FROM `$table`
                        ORDER BY lot_number ASC
                        LIMIT %d OFFSET %d",
                        $per_page, $offset
                    ),
                    ARRAY_A
                );

                // Table Output
                echo '<table class="lot-table"><thead><tr>';
                echo '<th>Lot #</th><th>Section</th><th>Rental</th><th>Address</th><th>Owner</th><th>Mailing Address</th>';
                echo '</tr></thead><tbody>';

                if ($results) {
                    foreach ($results as $row) {
                        echo '<tr>';
                        echo '<td>' . esc_html($row['lot_number']) . '</td>';
                        echo '<td>' . esc_html($row['section']) . '</td>';
                        echo '<td>' . ($row['is_rental'] ? 'Yes' : '') . '</td>';
                        echo '<td>' . esc_html($row['address']) . '</td>';
                        echo '<td>' . esc_html($row['owner']) . '</td>';
                        echo '<td>' . esc_html($row['mailing']) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan=\"6\">No lots found.</td></tr>';
                }

                echo '</tbody></table></div>';

                // Pagination
                $total_pages = ceil($total / $per_page);
                if ($total_pages > 1) {
                    echo '<div class=\"pagination\">';
                    echo paginate_links([
                        'base'      => get_permalink() . '%_%',
                        'format'    => 'page/%#%/',
                        'current'   => $paged,
                        'total'     => $total_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    ]);
                    echo '</div>';
                }

                ?>


            </div>
        </div>

<?php get_footer(); 