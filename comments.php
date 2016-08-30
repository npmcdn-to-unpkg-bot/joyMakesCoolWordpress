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

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			printf(
				number_format_i18n( get_comments_number() )
				)
		?>
		<span>comments</span>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<div class="comment-list">
		<?php
		 	wp_list_comments( 'type=comment&callback=mytheme_comment' );
		?>
	</div><!-- .comment-list -->

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

     $fields =  array(
       'author' =>
         '<p class="comment-form-author clearfix"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
         '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
         '" size="30"/></p>',
       'email' =>
         '<p class="comment-form-email clearfix"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
         '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
         '" size="30"/></p>'
     );
	 $comments_args = array(
	         // Change the title of send button
	         'label_submit' => __( 'comment', 'textdomain' ),
	         'logged_in_as' => ' ',
	         // Change the title of the reply section
	         'title_reply' => 'WRITE A COMMENT',
	         'comment_notes_before' => ' ',
	         // Remove "Text or HTML to be displayed after the set of comment fields".
	         'comment_notes_after' => ' ',
	         // Redefine your own textarea (the comment body).
	         'comment_field' => '<p class="comment-form-comment clearfix"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
	         'fields' => $fields
	 );
	 comment_form( $comments_args );
	 ?>

	<?php //comment_form($args); ?>

</div><!-- #comments -->
