<?php
get_header();
echo '<div class="container my-4">';

if (have_posts()): while (have_posts()): the_post();
    $status = get_field('status');
    $cost = get_field('estimated_cost');
    $timeline = get_field('proposed_timeline');
    $vendors = get_field('vendors');
    $recommendation = get_field('recommendation');
    $docs = get_field('support_docs');
    $final = get_field('final_decision');

    echo '<h1>' . get_the_title() . '</h1>';
    echo "<p><strong>Status:</strong> {$status}</p>";
    if ($final) echo "<p><strong>Final Decision:</strong> {$final}</p>";
    echo '<hr>';

    echo '<h5>Description</h5>';
    the_field('description');

    echo "<p><strong>Estimated Cost:</strong> \${$cost}</p>";
    echo "<p><strong>Timeline:</strong> {$timeline}</p>";
    if ($vendors) echo "<p><strong>Vendors:</strong> <br>" . nl2br($vendors) . '</p>';
    if ($recommendation) echo "<p><strong>Board Recommendation:</strong> <br>{$recommendation}</p>";

    if ($docs) {
        echo "<p><strong>Supporting Documents:</strong><ul>";
        foreach ($docs as $file_url) {
            echo '<li><a href="' . esc_url($file_url) . '" target="_blank">' . basename($file_url) . '</a></li>';
        }
        echo '</ul></p>';
    }

    echo do_shortcode('[hoa_vote_table]');
endwhile; endif;

echo '</div>';
get_footer();
