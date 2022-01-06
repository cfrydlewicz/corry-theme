<?php $comment_count = get_comments_number(); ?>

<?php if ( have_comments() ) : ?>
  <div class="comments_title f_small">
    <?php if ( '1' === $comment_count ) : ?>
      <?php esc_html_e( '1 Comment' ); ?>
    <?php else : ?>
      <?php printf(
        /* translators: %s: Comment count number. */
        esc_html( _nx( '%s Comment', '%s Comments', $comment_count, 'Comments title' ) ),
        esc_html( number_format_i18n( $comment_count ) )
      ); ?>
    <?php endif; ?>
  </div><!-- .comments-title -->

  <ol class="comment-list">
    <?php wp_list_comments( array(
      'avatar_size' => 48,
      'style'       => 'ol',
      'short_ping'  => true,
    ) ); ?>
  </ol><!-- .comment-list -->

  <?php the_comments_pagination(); ?>

<?php endif; ?>

<div id="a_respond">
  <?php comment_form(
    array(
      'logged_in_as'       => null,
      'title_reply'        => esc_html__( 'Leave a Comment' ),
      'title_reply_before' => '<div class="comment-reply-title">',
      'title_reply_after'  => '</div>',
    )
  ); ?>
</div>
