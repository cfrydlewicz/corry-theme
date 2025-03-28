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
            echo "/wp-content/themes/corry/assets/thumbnail-microblog.jpg";
          } else {
            echo "/wp-content/themes/corry/assets/thumbnail-default.jpg";
          }
        ?>');"></div>
        <div class="inner-wrapper--at-lg">
          <a href="<?php the_post_thumbnail_url(); ?>">
            <?php post_thumbnail(); ?>
          </a>
          <div class="title-container">
            <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </header>

      <section class="entry-content">
        <div class="inner-wrapper">
          <?php the_content(); ?>
        </div>
      </section>

      <footer id="a_end-of-article" class="entry-footer t_slides-up">
        <div class="inner-wrapper">
          <div class="thanks-header">Thanks for reading!</div>
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

      <section class="follow-container">
        <div class="post-footer_header">Follow Me</div>
        <ul>
          <li><a class="i_mail" href="/emailsubscribe?utm_source=post-footer" target="_blank">Email me</a> at <a href="mailto:cfrydlewicz@gmail.com" target="_blank">cfrydlewicz@gmail.com</a> to be notified when I post a new article.</li>
          <li><a class="i_rss" href="/subscribe-to-corrys-blog-with-rss/" target="_blank">My RSS Feed</a> is the next best way to follow <em>new blog posts</em>.</li>
          <li>I also share them on <a class="i_bluesky" href="/bluesky" rel="noreferrer" target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://bsky.app']);">Bluesky</a>.</li>
          <!--li><a class="i_heart" href="https://www.patreon.com/CorryFrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','https://www.patreon.com']);">Patreon</a> is where I'll share more once I have a few subscribers.</li-->
        </ul>
      </section>

      <section class="read-more-container">
        <div class="post-footer_header">Read More</div>
        <ul>
          <li><a href="/about/">About Me</a></li>
          <li><a href="/tag/favorite-post/">My Favorite Posts</a></li>
          <li><a href="/">All Blog Posts</a></li>
          <li><a href="/category/microblog/">Microblog</a></li>
        </ul>
      </section>

    </footer>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
