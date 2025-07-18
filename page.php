<?php get_header(); ?>
<?php while ( have_posts() ) : ?>
  <?php
    the_post();
    // store data for the post footer widgets
    $thisPostId = get_the_ID();
    echo $thisPostId[0];
    $thisPostTitle = get_the_title($thisPostId);
    $thisPostShortUrl = "https://corry.us/?p=".get_the_ID($thisPostId);
    $thisPostShortDescUrl = "https://corry.us/".$post->post_name;
    $thisPostShortPrettyUrl = "corry.us/".$post->post_name;
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

  <footer>

    <div id="a_end-of-article" class="post-footer inner-wrapper">

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
            <a class="i_bluesky" href="https://bsky.app/intent/compose?text=@corry.us%0A<?php echo $thisPostShortDescUrl; ?>" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" title="Discuss on Bluesky"><span class="u_visually-hidden">Discuss on Bluesky</span></a>
          </div>
          <?php if ( !empty($thisPostShortDescUrl) ) : ?>
            <div class="share">
              <span class="label">Share: </span>
              <a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortDescUrl; ?>" target="_blank" title="Share via Email"><span class="u_visually-hidden">Share via Email</span></a>
              <a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortDescUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" title="Share on Bluesky"><span class="u_visually-hidden">Share on Bluesky</span></a><br>
              <a class="f_small" href="<?php echo $thisPostShortDescUrl; ?>"><?php echo $thisPostShortPrettyUrl; ?></a>
            </div>
          <?php endif; ?>
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

    </div>

<?php endwhile; wp_reset_postdata(); ?>
<?php // <footer> ENDs in footer.php
  get_footer(); ?>
