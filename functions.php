<?php 

if ( ! function_exists( 'bodkghoa_enqueue_files' ) ):
    function bodkghoa_enqueue_files() {
        wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@100..700&display=swap');
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css');
        wp_enqueue_style('bodkghoa_main', get_theme_file_uri('/build/style-index.css'));
        //wp_enqueue_style('bodkghoa_style', get_theme_file_uri('/build/index.css'));
        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js', array(), '5.3.6', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }   
    }
endif;
    
add_action('wp_enqueue_scripts','bodkghoa_enqueue_files');

function bodkghoa_login_redirect( $redirect_to, $request, $user ) {
    // $user is a WP_User on success, or WP_Error on failure
    if ( ! is_wp_error( $user ) && $user instanceof WP_User ) {
        // optionally check role: e.g. only subscribers
        // if ( in_array( 'subscriber', (array) $user->roles ) ) { … }
        return home_url( '/bod-dashboard/' );
    }
    return $redirect_to;
}
add_filter( 'login_redirect', 'bodkghoa_login_redirect', 10, 3 );

function bodkghoa_login_logout_button(){
    if ( is_user_logged_in() ) {
        return '<a href="'. wp_logout_url() .'" class="btn btn-primary ms-auto me-5" role="button" type="button">Log Out</a>';
    } else {
        return '<a href="'. wp_login_url() .'" class="btn btn-primary ms-auto me-5" role="button" type="button">Log In</a>';
    }
}

function bodkghoa_logout_redirect(){
  wp_redirect( site_url() );
  exit();
}
add_action('wp_logout','bodkghoa_logout_redirect');

function bodkghoa_logo() { ?>
    <style type="text/css">
        #login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/kghoa-site-logo.png);
		height: 72px;
		width: 72px;
		background-size: 72px 72px;
		background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'bodkghoa_logo' );

function bodkghoa_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'bodkghoa_login_logo_url' );

function bodkghoa_login_logo_url_title() {
    return 'Kensington Grove Board of Directors';
}
add_filter( 'login_headertext', 'bodkghoa_login_logo_url_title' );

function bodkghoa_comment_reply_text( $link ) {
$link = str_replace( 'Reply', 'Comment on this entry', $link );
return $link;
}
add_filter( 'comment_reply_link', 'bodkghoa_comment_reply_text' );

function kghoa_comment_form_defaults( $defaults ) {
    global $user_identity;
    $required_text      = ' ' . wp_required_field_message();
    $defaults['logged_in_as'] = sprintf(
        '<p class="logged-in-as">%s%s</p>',
        sprintf(
            __( 'Logged in as %1$s.' ),
            $user_identity
        ),
        $required_text
    );
    return $defaults;
}
add_filter( 'comment_form_defaults', 'kghoa_comment_form_defaults' );

add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    

require get_theme_file_path('/includes/bod-contact-functions.php');