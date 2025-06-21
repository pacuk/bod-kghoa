<?php
get_header();
echo '<div class="container my-4">';
echo '<h1 class="mb-4">Board Proposals</h1>';

// Status filter
$status_filter = $_GET['status'] ?? null;
$meta_query = [];

if ($status_filter === 'active') {
    $meta_query[] = [
        'key' => 'status',
        'value' => ['draft', 'under_review'],
        'compare' => 'IN'
    ];
} elseif ($status_filter === 'inactive') {
    $meta_query[] = [
        'key' => 'status',
        'value' => ['approved', 'rejected'],
        'compare' => 'IN'
    ];
}

// Filter buttons
echo '<div class="mb-3">';
echo '<a href="?status=active" class="btn btn-sm btn-primary me-2">Active</a>';
echo '<a href="?status=inactive" class="btn btn-sm btn-secondary me-2">Inactive</a>';
echo '<a href="' . get_post_type_archive_link('board_proposal') . '" class="btn btn-sm btn-outline-dark">All</a>';
echo '</div>';

// Pagination setup
$paged = get_query_var('paged') ?: 1;
$query = new WP_Query([
    'post_type' => 'board_proposal',
    'posts_per_page' => 10,
    'paged' => $paged,
    'post_status' => 'publish',
    'meta_query' => $meta_query
]);

if ($query->have_posts()):
    echo '<div class="row row-cols-1 g-4">';
    while ($query->have_posts()): $query->the_post();
        $cost = get_field('estimated_cost');
        $status = get_field('status');
        $desc = wp_trim_words(get_field('description'), 30);
        echo '<div class="col"><div class="card p-3">';
        echo '<h4>' . get_the_title() . '</h4>';
        echo "<p><strong>Status:</strong> {$status} | <strong>Estimated Cost:</strong> \${$cost}</p>";
        echo "<p>{$desc}</p>";
        echo '<a href="' . get_permalink() . '" class="btn btn-outline-primary">View Details</a>';
        echo '</div></div>';
    endwhile;
    echo '</div>';

    // Pagination links
    echo '<div class="mt-4">';
    echo paginate_links([
        'total' => $query->max_num_pages,
        'current' => $paged,
        'prev_text' => '« Prev',
        'next_text' => 'Next »'
    ]);
    echo '</div>';

    wp_reset_postdata();
else:
    echo '<p>No board proposals found.</p>';
endif;

echo '</div>';
get_footer();
