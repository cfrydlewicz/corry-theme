<?php /* Template Name: Campaign */ ?>

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

    <?php
      echo $thisPostId[0];
      $thisPostTitle = get_the_title($thisPostId);
      $thisPostShortUrl = "https://corry.us/?p=".get_the_ID($thisPostId);
      $thisPostCommentNum = get_comments_number($thisPostId);
    ?>

    <footer class="post-footer t_slides-up">
      <div class="inner-wrapper">

        <?php if ( comments_open() ) : ?>
          <section id="a_comments_top" class="comments-container t_slides-up">
            <?php if ( $thisPostCommentNum > 0 ) : ?>
              <div class="post-footer_header">Comments <span class="comments-count">(<?php echo $thisPostCommentNum; ?>)</span></div>
            <?php endif; ?>
            <?php comments_template(); ?>
          </section>

          <section class="discussion-container">
            <div class="post-footer_header">Discuss</div>
            <ul>
              <?php if ( $thisPostCommentNum > 0 ) : ?>
                <li><a class="i_arrow-up" href="#a_comments_top">View Comments (<?php echo $thisPostCommentNum; ?>)</a></li>
              <?php endif; ?>
              <li><a class="i_chat" href="#a_respond">Leave a Comment</a></li>
              <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=@corry.us%0A<?php echo $thisPostShortUrl; ?>" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);" style="white-space: nowrap;">Discuss on Bluesky</a></li>
              <li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a> for anyone who'd like to support my content and help me decide what to focus on!</li>
            </ul>
          </section>
        <?php endif; ?>

        <?php if ( !empty($thisPostShortUrl) ) : ?>
          <section class="share-container">
            <div class="post-footer_header">Share</div>
            <ul>
              <li><a class="i_mail" href="mailto:%20?subject=<?php echo $thisPostTitle; ?>&body=<?php echo $thisPostShortUrl; ?>" target="_blank">Share via Email</a></li>
              <li><a class="i_bluesky" href="https://bsky.app/intent/compose?text=<?php echo $thisPostShortUrl; ?>" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Share on Bluesky</a></li>
              <li>URL: <a href="https://corry.us/<?php echo $post->post_name; ?>/" class="f_small">https://corry.us/<?php echo $post->post_name; ?>/</a></li>
            </ul>
          </section>
        <?php endif; ?>

      </div>
    </footer>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
