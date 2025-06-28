<?php
/**
 * Template Name: Board Proposals
 */



if ( ! is_user_logged_in() ) {
    wp_safe_redirect( site_url() );
    exit;
}

get_header( 'bod' );
?>
        <div class="page-board-proposals container-md mt-4 mb-5">
            <h1 class="pt-4 mb-4">Board Proposals</h1>

            <?php echo do_shortcode('[list-active-proposals]');?>
        </div>
<?php
get_footer();