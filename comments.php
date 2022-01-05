<?php
if ( post_password_required() ) {
	return;
}
$comment_count = get_comments_number();
?>

<div id="comments" class="comments-area <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php if ( have_comments() ) : ?>
		<div class="comments-title f_larger">
			<?php if ( '1' === $comment_count ) : ?>
				<?php esc_html_e( '1 Comment' ); ?>
			<?php else : ?>
				<?php printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $comment_count, 'Comments title' ) ),
					esc_html( number_format_i18n( $comment_count ) )
				); ?>
			<?php endif; ?>
		</div><!-- .comments-title -->

		<ol class="comment-list">
			<?php wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			); ?>
		</ol><!-- .comment-list -->

		<?php the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments' ),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		); ?>

	<?php endif; ?>

	<?php comment_form(
		array(
			'logged_in_as'       => null,
			'title_reply'        => esc_html__( 'Leave a Comment' ),
			'title_reply_before' => '<div id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</div>',
		)
	); ?>

</div><!-- #comments -->
