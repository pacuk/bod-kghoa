<?php
/**
 * Template Name: Page
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

    get_header( 'bod' );
    while ( have_posts() ) :
			the_post();
?>

        <div class="container-md mt-4 mb-5">
                    
            <h1 class="my-4"><?php the_title(); ?></h1>

            <?php the_content(); ?>

        </div>

        <?php endwhile; 

    get_footer();