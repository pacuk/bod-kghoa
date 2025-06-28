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
    if(isset($user->roles) && is_array($user->roles)){
        if(in_array('administrator',$user->roles)){
            $redirect_to = '/bod-dashboard/';

        } elseif(in_array('board_member',$user->roles)){
            $redirect_to = '/bod-dashboard/';

        } else {
            return site_url();
        }
    }
    return $redirect_to;
}
add_filter( 'login_redirect', 'bodkghoa_login_redirect', 10, 3 );

function bodkghoa_login_logout_button(){
    if ( is_user_logged_in() ) {
        return '<a href="'. wp_logout_url() .'" class="btn btn-primary ms-auto me-1 me-md-5" role="button" type="button">Log Out</a>';
    } else {
        return '<a href="'. wp_login_url() .'" class="btn btn-primary ms-auto me-1 me-md-5" role="button" type="button">Log In</a>';
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

function kghoa_send_message_to_board($subj,$message){
    $to = 'board@kensingtongrovehoa.org';
    wp_mail($to,$subj,$message);
    return;
}

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

function kghoa_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'kghoa_remove_admin_bar');

function kghoa_notify_new_project($new_status,$old_status,$post){
    if('publish' !== $new_status) { return; }
    $status = ('publish' === $old_status)?'edited':'new';
    if($status === 'new' && $post->post_type === 'project'){
        $subj = 'FOR REVIEW: '.$post->post_title.' (ID: '.$post->ID.')';
        $message = "\r\n\r\n".'The captioned homeowner request has just been posted and is ready for your review, comments and/or decision. Please log in at '.site_url() . "\r\n\r\n";
        kghoa_send_message_to_board($subj,$message);
    }
}
add_action('transition_post_status','kghoa_notify_new_project',10,3);

/* Function kghoa_get_latest_comment
 * $paramDate:  False - returns the last comment regardless of date; True - returns last comment from Today (date match) only
 * 
*/
function kghoa_get_latest_comment($projectid, $paramDate = false){
        $projectid = intval($projectid);
        $comments = get_post_meta( $projectid, 'comments', true );
        if($comments) {
            $i = $comments - 1;
            $full_comment = esc_html( get_post_meta( $projectid, 'comments_' . $i . '_comment', true ) );
            if($paramDate) {
                $latestCommentDate = get_post_meta($projectid, 'comments_'. $i . '_date',true);
                if(!$latestCommentDate == date('Ymd')) {
                    return;
                }
            }
            return wp_trim_words($full_comment, 60, '...');
        } 
        return;
    }

function kghoa_status_change_notification($value, $post_id, $field){
    $old_value = get_post_meta($post_id,'status',true);
    if($old_value !== '' && $value !== $old_value) {
        $postObj = get_post($post_id);
        $subj = strtoupper($value) . ': '.$postObj->post_title;
        $addComments = kghoa_get_latest_comment($post_id, true);
        if($addComments){
            $addToMessage = 'The following administrative comments were added:'."\r\n\r\n".'================================================================================='."\r\n\r\n\t".$addComments."\r\n\r\n".'================================================================================='."\r\n\r\n";
        } else {
            $addToMessage = null;
        }
        $message = "\r\n\r\n".'The status of this homeowner request has been changed to '. strtoupper($value) . '. '.$addToMessage."\r\n\r\n";
        switch (strtoupper($value)) {
            case 'UNDER REVIEW':
                $message .= 'The captioned homeowner request is ready for your review and vote. Please log in at '.site_url().'/bodportal/'.' as soon as it is convenient.';
                break;
            case 'PENDING':
                $message .= 'The captioned homeowner request is pending input from the homeowner. If you wish to revisit the request and comments, log in at '.site_url().'/bodportal/';
                break;
            case 'ON HOLD':
                $message .= 'The captioned homeowner request is on hold until further notice.';
                break;
            case 'CANCELED':
                $message .= 'The captioned homeowner request has been terminated. If you wish to revisit the request and reason for the cancellation, log in at '.site_url().'/bodportal/';
                break;
            default:
                $message .= 'If you wish to revisit the request and comments, log in at '.site_url().'/bodportal/';
        }

        kghoa_send_message_to_board($subj,$message);
    }
    return $value;
}
add_filter('acf/update_value/key=field_6304e57e3b4f4', 'kghoa_status_change_notification', 10, 4);

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