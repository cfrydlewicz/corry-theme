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

  <main id="a_skip-to-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>

      <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php post_thumbnail(); ?>
        <?php else : ?>
          <img alt="default thumbnail" src="/wp-content/themes/corry/assets/images/thumbnail-default.jpg" class="u_attn">
        <?php endif; ?>
        <div class="title-container">
          <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
        </div>
      </header>

      <section class="entry-content">
        <div class="inner-wrapper">
          <?php the_content(); ?>
        </div>
      </section>

    </article>
  </main>

  <footer id="a_end-of-article" class="post-footer inner-wrapper">

    <section class="thanks-for-reading">
      <div class="thanks-main">
        <div class="thanks-header">Thanks for reading!</div>
        <div class="discuss">
          <span class="label">Discuss: </span>
          <?php if ( comments_open() ) : ?>
            <a class="i_chat" href="#a_end-of-article" title="Leave a Comment"><span class="u_visually-hidden">Leave a Comment</span></a>
            <?php if ( $thisPostCommentNum > 0 ) : ?>
              <span class="comments-count"><?php echo $thisPostCommentNum; ?><span class="u_visually-hidden"> Comments</span></span>
            <?php endif; ?>
          <?php endif; ?>
          <a class="i_bluesky" href="https://bsky.app/intent/compose?text=@corry.us%0A<?php echo $thisPostShortUrl; ?>" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" title="Discuss on Bluesky"><span class="u_visually-hidden">Discuss on Bluesky</span></a>
        </div>
        <?php if ( !empty($thisPostShortUrl) ) : ?>
          <div class="share">
            <span class="label">Share: </span>
            <a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortUrl; ?>" target="_blank" title="Share via Email"><span class="u_visually-hidden">Share via Email</span></a>
            <a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" title="Share on Bluesky"><span class="u_visually-hidden">Share on Bluesky</span></a><br>
            <a class="f_small" href="https://corry.us/<?php echo $post->post_name; ?>">corry.us/<?php echo $post->post_name; ?></a>
          </div>
        <?php endif; ?>
      </div>
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

    <section class="read-more-container" role="complementary">
      <?php if ( is_active_sidebar( 'widget_single-post-footer1' ) ) : ?>
        <ul class="widget-area">
          <?php dynamic_sidebar( 'widget_single-post-footer1' ); ?>
        </ul>
      <?php else : ?>
        <ul class="u_attn">
          <li>
            <div class="post-footer_header widget-title">Continue Reading</div>
            <div>
              <ul>
                <li><a href="/tag/favorite-post/">My Favorite Posts</a></li>
                <li><a href="/top-tens/">My Top Ten <em>Everything</em></a></li>
              </ul>
            </div>
          </li>
        </ul>
      <?php endif; ?>
    </section>

  </footer>

<?php endwhile; wp_reset_postdata(); ?>
<?php get_footer(); ?>
