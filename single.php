<?php get_header(); ?>

<main id="a_skip-to-content"> 
  <?php while ( have_posts() ) : ?>
    <?php
      the_post();
      // store data for the post footer widgets
      $thisPostId = get_the_ID();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>

      <header class="entry-header">
        <div class="stretched-bg" style="background-image: url('<?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail_url();
          } else if ( is_category(700) ) {
            echo "/wp-content/themes/corry/assets/images/thumbnail-microblog.jpg";
          } else {
            echo "/wp-content/themes/corry/assets/images/thumbnail-default.jpg";
          }
        ?>');"></div>
        <div class="inner-wrapper--at-lg">
          <a href="<?php the_post_thumbnail_url(); ?>">
            <?php post_thumbnail(); ?>
          </a>
          <div class="title-container">
            <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
            <div class="post-meta"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
          </div>
        </div>
      </header>

      <section class="entry-content">
        <div class="inner-wrapper">

          <?php if ( has_tag('old-post') ) : ?>
            <div class="disclaimer_old-posts alert warning">
              <div>
                <p class="f_small"><strong>This post contains outdated information.</strong> I only remove <em>harmful</em> content and try to keep old posts visible &mdash; even if they're embarrassing. I want to look back and see my growth over the years, and don't want to hide it from others. Thanks for considering this as you read. (<a href="#a_respond" class="i_chat">comment</a> or <a href="mailto:cfrydlewicz@gmail.com" class="i_mail">contact me</a> to request an update about its subject matter)</p>
              </div>
            </div>
          <?php else if ( has_tag('unfinished') ) : ?>
            <div class="disclaimer_unfinished alert warning">
              <div>
                <p class="f_small"><strong>This post is unfinished.</strong> I published it anyway because I believe it still has <em>some</em> value. On the bright side, it'll probably be short! 😇 (<a href="#a_respond" class="i_chat">comment</a> or <a href="mailto:cfrydlewicz@gmail.com" class="i_mail">contact me</a> to request an update about its subject matter)</p>
              </div>
            </div>
          <?php endif; ?>

          <?php the_content(); ?>
        </div>
      </section>

      <footer id="a_end-of-article" class="entry-footer t_slides-up">
        <div class="inner-wrapper">
          <div class="thanks-header">Thanks for reading!</div>
          <p class="post-categories">Categories: <?php the_category(', '); ?></p>
          <p class="post-tags"><?php the_tags(); ?></p>
          <p class="reverse-canary f_smallest">I have not been required to disclose data to the government under duress. If that changes and I'm able, I will remove this text. (last update: 2025-03-22)</p>
        </div>
      </footer>

    </article>

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

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
