<?php
/**
 * Template Name: Inactive Issues
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>
        <div class="page-inactive-issues container-md mt-4 mb-5">
            <h1 class="pt-4 mb-4"><?php the_title(); ?></h1>

            <?php echo do_shortcode('[list-inactive-issues]');?>
          
        </div>

<?php get_footer();