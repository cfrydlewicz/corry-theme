<?php /* Template Name: Campaign */ ?>

<?php get_header(); ?>
<?php while ( have_posts() ) : ?>
  <?php
    the_post();
    // store data for the post footer widgets
    $thisPostId = get_the_ID();
    echo $thisPostId[0];
    $thisPostTitle = get_the_title($thisPostId);
    $thisPostShortUrl = "https://corry.us/?p=".get_the_ID($thisPostId);
    $thisPostShortDescUrl = "https://corry.us/emeryville/".$post->post_name;
    $thisPostShortPrettyUrl = "corry.us/emeryville/".$post->post_name;
    $thisPostCommentNum = get_comments_number($thisPostId);
  ?>

  <main id="a_skip-to-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>

      <header class="entry-header">
        <div class="inner-wrapper">
          <div class="title-container">
            <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
          </div>
          <a href="<?php the_post_thumbnail_url(); ?>">
            <?php post_thumbnail(); ?>
          </a>
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
              <div class="label">Share this page:</div>
              <ul>
                <li><a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortDescUrl; ?>" target="_blank" title="Share via Email">Email</a></li>
                <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortDescUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" title="Share on Bluesky">Bluesky</a></li>
                <li><a class="i_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $thisPostShortDescUrl; ?>" target="_blank">Facebook</a></li>
                <li><a class="i_twitter" href="https://twitter.com/intent/tweet?url=<?php echo $thisPostShortDescUrl; ?>" target="_blank">Twitter</a></li>
                <li><a class="i_linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $thisPostShortDescUrl; ?>" target="_blank">LinkedIn</a></li>
                <li><a class="f_small" href="<?php echo $thisPostShortDescUrl; ?>"><?php echo $thisPostShortPrettyUrl; ?></a></li>
              </ul>
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
