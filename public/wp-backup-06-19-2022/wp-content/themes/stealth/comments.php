<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<style>
#comment{position: relative;display: block;width: 100%;font-family: 'Poppins';padding: 18px;}
.crunchify-text{position: relative;}
.crunchify-text h5{color: #ffbf27;font-size: 18px;font-weight: 500;overflow: hidden;margin:0 0 14px 0;text-align: center;text-transform: uppercase;}
.comment-form-comment{margin:0 0 20px 0;}
#email-notes, .comment-notes, .logged-in-as{color:#dbdbdb;font-size: 16px;overflow: hidden;margin: 0 0 8px 0;display: block;}
.comment-notes .required{color:#ffbf27;}
.comment-form-author, .comment-form-url, .comment-form-email{float: left;width: 33.33%;padding: 0 10px;margin:0 0 20px 0;}
.comment-form-author{padding: 0 10px 0 0;}
.comment-form-url{padding: 0 0 0 10px;}
.comment-form-author label, .comment-form-url label, .comment-form-email label{display: block;color:#dbdbdb;font-size: 16px;overflow: hidden;margin:0 0 6px 0;}
.comment-form-author input, .comment-form-url input, .comment-form-email input{position: relative;display: block;width: 100%;padding: 14px 24px;color: #060606;font-size: 18px;overflow: hidden;appearance:none;-web-kit-appearance:none;}
.comment-form-cookies-consent{float: left;width: 100%;clear: both;margin:0 0 14px 0;}
.form-submit{float: left;width: 100%;clear: both;}
#submit{float: right;padding: 6px 30px;color: #dbdbdb;font-size: 16px;font-weight: 600;text-transform: uppercase;overflow: hidden;border:1px solid #ffc906;background-color: #000000;border:1px solid #ffc906;cursor: pointer;}
.comment-form-cookies-consent label{color:#dbdbdb;font-size: 16px;overflow: hidden;margin:0 0 6px 0;}
</style>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<span class="comment_num"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
		<div class="clearfix"></div>
	<!-- <h2 class="comments-title">
		<?php
			//printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyfourteen' ),number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2> -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 51,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php
		$args = array(
			'fields' => apply_filters(
				'comment_form_default_fields', array(
					'author' =>'<div class="comment-form-author c_input_wrap c_input_wrap_1">' . '<label for="author">' . __( 'Your Name' ) .
					( $req ? '<span class="required">*</span>' : '' ) . '</label> '  . '<input id="author" placeholder="Name (required)" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.'</div>',
					'email'  => '<div class="comment-form-email c_input_wrap c_input_wrap_3">' . '<label for="email">' . __( 'Email (will not be shared)' ) .
					( $req ? '<span class="required">*</span>' : '' )  . '</label> '
					 .'<input id="email" placeholder="Email (required)" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' />'  . '</div>',
					'url'    => '<div class="comment-form-url c_input_wrap c_input_wrap_2">' . '<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
					 '<input id="url" name="url" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
					'</div>'
				)
			),
			'comment_field' => '<div class="comment-form-comment c_input_wrap">' .
				'<textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="8" aria-required="true"></textarea>' .
				'</div>',
				'label_submit' => 'Post Comment',
			'comment_notes_after' => '',
			'title_reply' => '<div class="crunchify-text"> <h5>Leave <span class="content_title_1">a Comment</span></h5></div>'
		);
	comment_form($args);
	 ?>

</div><!-- #comments -->
