<?php  

namespace HOAProjects;

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );

echo 'you made it this far';

get_footer();