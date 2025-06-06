<?php if ( have_comments() ) : ?>

  <ol class="comment-list">
    <?php wp_list_comments( array(
      'avatar_size'       => 48,
      'reverse_top_level' => false,
      'style'             => 'ol',
      'short_ping'        => true,
    ) ); ?>
  </ol>

  <?php the_comments_pagination(); ?>

<?php endif; ?>

<div id="a_respond" class="respond-container">
  <?php comment_form(
    array(
      'logged_in_as'       => null,
      'title_reply'        => esc_html__( 'Leave a Comment' ),
      'title_reply_before' => '<div class="comment-reply-title">',
      'title_reply_after'  => '</div>',
    )
  ); ?>
</div>
