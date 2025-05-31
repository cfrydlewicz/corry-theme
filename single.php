<?php get_header(); ?>

<?php while ( have_posts() ) : ?>
  <?php
    the_post();
    // store data for the post footer widgets
    $thisPostId = get_the_ID();
    echo $thisPostId[0];
    $thisPostTitle = get_the_title($thisPostId);
    $thisPostShortUrl = "https://corry.us/?p=".get_the_ID($thisPostId);
    $thisPostCommentNum = get_comments_number($thisPostId);
  ?>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="stretched-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"><?php post_thumbnail(); ?></div>
  <?php endif; ?>

  <div class="main-columns-wrapper inner-wrapper">

    <main id="a_skip-to-content"> 
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>

        <header class="entry-header">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php post_thumbnail(); ?>
          <?php elseif ( is_category(700) ) : ?>
            <img alt="default microblog thumbnail" src="/wp-content/themes/corry/assets/images/thumbnail-microblog.jpg">
          <?php else : ?>
            <img alt="default thumbnail" src="/wp-content/themes/corry/assets/images/thumbnail-default.jpg">
          <?php endif; ?>
          <div class="title-container">
            <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
          </div>
        </header>

        <section class="entry-content">
          <div class="inner-wrapper">

            <?php if ( has_tag('old-post') ) : ?>
              <div class="disclaimer_old-posts alert warning">
                <div>
                  <p class="f_small"><strong>This post contains outdated information.</strong> I only remove <em>harmful</em> content and try to keep old posts visible, even if they're <em>embarrassing</em>. Thanks for considering this as you read.<br>
                    (<a href="#a_respond" class="i_chat">comment</a> or <a href="mailto:cfrydlewicz@gmail.com" class="i_mail">contact me</a> to request an update about its subject matter)</p>
                </div>
              </div>
            <?php elseif ( has_tag('unfinished') ) : ?>
              <div class="disclaimer_unfinished alert warning">
                <div>
                  <p class="f_small"><strong>This post is unfinished.</strong> I published it anyway because I believe it still has <em>some</em> value. On the bright side, it'll probably be short! 😇<br>
                    (<a href="#a_respond" class="i_chat">comment</a> or <a href="mailto:cfrydlewicz@gmail.com" class="i_mail">contact me</a> to request an update about its subject matter)</p>
                </div>
              </div>
            <?php endif; ?>

            <?php the_content(); ?>
          </div>
        </section>

      </article>
    </main>

    <aside class="sidebar sticky">
      <div class="sidebar-inner">

        <section class="post-meta">
          <p class="post-date f_small"><?php the_date(); ?></p>
          <p class="word-count f_small"><?php word_count(); ?> words</p>
        </section>

        <?php if ( !empty($thisPostShortUrl) ) : ?>
          <section class="share-container">
            <ul>
              <li><a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortUrl; ?>" target="_blank">Share via Email</a></li>
              <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Share on Bluesky</a></li>
              <li>URL: <a href="https://corry.us/<?php echo $post->post_name; ?>/" class="f_small">https://corry.us/<?php echo $post->post_name; ?>/</a></li>
              <li>Short: <a href="<?php echo $thisPostShortUrl; ?>" class="f_small"><?php echo $thisPostShortUrl; ?></a></li>
            </ul>
          </section>
        <?php endif; ?>

        <section class="follow-container">
          <div class="sidebar_header">Follow</div>
          <ul>
            <li><a class="i_mail" href="/emailsubscribe?utm_source=post-footer" target="_blank">Email Newsletter</a></li>
            <li><a class="i_rss" href="/subscribe-to-corrys-blog-with-rss/" target="_blank">RSS Feed</a></li>
            <li><a class="i_bluesky" href="/bluesky" rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Bluesky</a></li>
            <!--li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a></li-->
          </ul>
        </section>

        <?php if ( is_active_sidebar( 'widget_post-sidebar1' ) ) : ?>
          <ul class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'widget_post-sidebar1' ); ?>
          </ul>
        <?php endif; ?>

      </div>
    </aside>

  </div><!--.main-columns-wrapper-->

  <footer id="a_end-of-article" class="post-footer inner-wrapper">

    <section class="thanks-for-reading">
      <div class="thanks-header">Thanks for reading!</div>
      <div class="post-stats f_small">
        <p class="post-categories">Categories: <?php the_category(', '); ?></p>
        <p class="post-tags"><?php the_tags(); ?></p>
      </div>
    </section>

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

<?php get_footer(); ?>
