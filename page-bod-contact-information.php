<?php
/**
 * Template Name: Contact Information
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-bod-contact-information container-md mt-4 mb-5">
            
            <h1 class="pt-4 mb-4"><?php the_title(); ?></h1>
            <a href="<?php echo admin_url( 'profile.php' );?>" target="_blank" class="btn btn-secondary mb-3" role="button" type="button">Edit My Info</a>
                 
            <?php             
            bodkghoa_display_users_table( array(
                'office',
                'phone_number',
                'address',
                'hoa_email',
                'personal_email',
                'term_expiration'
            ));
        ?>

        </div>

<?php get_footer();