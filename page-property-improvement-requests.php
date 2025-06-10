<?php
/**
 * Template Name: Property Improvement Requests
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-property-improvement-requests container-md mt-4 mb-5">
            <h1 class="my-4 pt-4">Property Improvement Requests</h1>

            <?php echo do_shortcode('[hoa_current_projects]');?>
        </div>

<?php get_footer();