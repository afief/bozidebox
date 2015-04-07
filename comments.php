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

$comment_args = array(
	'id_form'           => 'commentform',
	'id_submit'         => 'submit',
	'title_reply'       => __( 'Tinggalkan Komentar?' ),
	'title_reply_to'    => __( 'Beri komentar ke %s' ),
	'cancel_reply_link' => __( 'Cancel Reply' ),
	'label_submit'      => __( 'Post Comment' ),

	'comment_field' =>  '<p class="comment-form-comment"><label for="comment"><textarea id="comment" placeholder="Berikan komentarmu disini" name="comment" cols="45" rows="8" aria-required="true">' .
	'</textarea></p>',

	'must_log_in' => '<p class="must-log-in">' .
	sprintf(
		__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
		wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',

	'logged_in_as' => '<p class="logged-in-as">' .
	sprintf(
		__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
		admin_url( 'profile.php' ),
		$user_identity,
		wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		) . '</p>',

	'comment_notes_before' => '<p class="comment-notes">' .
	__( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
	'</p>',

	'comment_notes_after' => '',

	'fields' => apply_filters( 'comment_form_default_fields', array(

		'author' =>
		'<p class="comment-form-author">' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="author" name="author" type="text" placeholder="Nama" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></p>',

		'email' =>
		'<p class="comment-form-email">' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="email" name="email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></p>',

		'url' =>
		'<p class="comment-form-url">' .
		'<input id="url" name="url" placeholder="URL" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></p>'
		)
	),
	);

	?>

	<div id="comments" class="comments-area">

		<?php if ( have_comments() ) : ?>

			<h2 class="comments-title">
				<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyfourteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
					?>
				</h2>

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
						'walker'	=> new comment_walker(),
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size'=> 34,
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

				<?php comment_form($comment_args); ?>

			</div><!-- #comments -->
