<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package KGHOA
 * 
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title mb-3">
			<?php
			printf(
				_nx(
					'One comment on "%2$s"',
					'%1$s comments on "%2$s"',
					get_comments_number(),
					'comments title',
					'kghoa'
				),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h3>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 48,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'kghoa' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'kghoa' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'kghoa' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		

	<?php endif; // have_comments() ?>

	<?php 
		$status = get_field('status');
		$status_array = array('Canceled','Completed');
		if ( ! comments_open() && get_comments_number() || (in_array($status,$status_array) ) ) : ?>
			
			<h4 class="no-comments mb-5"><?php _e( 'New comments are closed.', 'kghoa' ); ?></h4>

		<?php else: ?>
		
			<section class="pt-5">
				<?php comment_form(); ?>
			</section>

		<?php endif; ?>
</div><!-- #comments -->
