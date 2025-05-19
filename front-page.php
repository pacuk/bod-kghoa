<?php 
if (  is_user_logged_in() ) {
    wp_safe_redirect( '/bod-dashboard/' );
    exit;
}

get_header(); ?>
<div class="login-prompt container text-center my-5 py-5">
  <h2>This is a restricted site. Please log in.</h2>
</div>
<?php get_footer();
