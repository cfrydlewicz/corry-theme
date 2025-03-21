<?php
  echo $thisPostId[0];
  $thisPostTitle = get_the_title($thisPostId);
  $thisPostShortUrl = "https://corry.us/?p=".get_the_ID($thisPostId);
  $thisPostCommentNum = get_comments_number($thisPostId);
?>

<footer class="post-footer t_slides-up">

  <?php if ( comments_open() ) : ?>
    <section id="a_comments_top" class="comments-container t_slides-up">
      <?php if ( $thisPostCommentNum > 0 ) : ?>
        <div class="post-footer_header">Comments <span class="comments-count">(<?php echo $thisPostCommentNum; ?>)</span></div>
      <?php endif; ?>
      <?php comments_template(); ?>
    </section>
  <?php endif; ?>

  <section class="discussion-container">
    <div class="post-footer_header">Discuss</div>
    <ul>
      <?php if ( comments_open() ) : ?>
        <?php if ( $thisPostCommentNum > 0 ) : ?>
          <li><a class="i_arrow-up" href="#a_comments_top">View Comments (<?php echo $thisPostCommentNum; ?>)</a></li>
        <?php endif; ?>
        <li><a class="i_chat" href="#a_respond">Leave a Comment</a></li>
      <?php endif; ?>
      <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=@corry.us%0A<?php echo $thisPostShortUrl; ?>" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" style="white-space: nowrap;">Discuss on Bluesky</a></li>
      <li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a> for anyone who'd like to support my content and help me decide what to focus on!</li>
    </ul>
  </section>

  <?php if ( !empty($thisPostShortUrl) ) : ?>
    <section class="share-container">
      <div class="post-footer_header">Share</div>
      <ul>
        <li><a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortUrl; ?>" target="_blank">Share via Email</a></li>
        <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Share on Bluesky</a></li>
        <li>URL: <a href="https://corry.us/<?php echo $post->post_name; ?>/" class="f_small">https://corry.us/<?php echo $post->post_name; ?>/</a></li>
        <li>Short: <a href="<?php echo $thisPostShortUrl; ?>" class="f_small"><?php echo $thisPostShortUrl; ?></a></li>
      </ul>
    </section>
  <?php endif; ?>

  <section class="follow-container">
    <div class="post-footer_header">Follow This Blog</div>
    <ul>
      <li><a class="i_mail" href="/emailsubscribe?utm_source=post-footer" target="_blank">Email me</a> at <a href="mailto:cfrydlewicz@gmail.com" target="_blank">cfrydlewicz@gmail.com</a> to be notified when I post a new article.</li>
      <li><a class="i_rss" href="/subscribe-to-corrys-blog-with-rss/" target="_blank">My RSS Feed</a> is the next best way to follow <em>new blog posts</em>.</li>
      <li>I also share them on <a class="i_bluesky" href="/bluesky" rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Bluesky</a>.</li>
      <!--li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a> is where I'll share more once I have a few subscribers.</li-->
    </ul>
  </section>

  <section class="read-more-container">
    <?php if ( is_active_sidebar( 'widget_single-post-footer1' ) ) : ?>
      <div class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'widget_single-post-footer1' ); ?>
      </div>
    <?php else : ?>
      <div class="widget-title">Read More</div>
      <div><a href="/tag/favorite-post/">My Favorite Posts</a></div>
    <?php endif; ?>
  </section>

</footer>
