<?php
/**
 * Template Name: Dashboard
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' ); ?>

        <div class="page-bod-dashboard container-md mt-4 mb-5">                    
            <h1 class="pt-4 mb-4">Dashboard</h1>

<?php echo do_shortcode('[hoa_dashboard]'); ?>
    
        </div>


<?php get_footer();
