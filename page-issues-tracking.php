<?php
/**
 * Template Name: Issues Tracking
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>
        <div class="page-issues-tracking container-md mt-4 mb-5">
            <h1 class="pt-4 mb-4">Issues Tracking</h1>

            <?php echo do_shortcode('[list-issues]');?>
          
        </div>

<?php get_footer();