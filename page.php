<?php get_header(); ?>

<main id="a_skip-to-content">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
    	<?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <div class="inner-wrapper--at-lg">
            <?php post_thumbnail(); ?>
            <div class="thumbnail-overlay">
              <h1 id="single-post-title" class="entry-title"><?php the_title(); ?></h1>
            </div>
          </div>
        </header>

        <section class="entry-content">
          <div class="inner-wrapper">
            <?php the_content(); ?>
          </div>
        </section>

      </article>

      <footer class="post-footer t_slides-up">
        <div class="inner-wrapper--at-md">

          <section class="thanks-container">
            <div class="f_large">Thanks for reading!</div>
          </section>

          <section class="discussion-container">
            <div class="post-footer_header">Discuss</div>
            <ul>
              <?php if ( comments_open() ) : ?>
                <?php if ( $commentNum > 0 ) : ?>
                  <li><a class="i_arrow-down" href="#a_comments_top">View Comments (<?php echo $commentNum; ?>)</a></li>
                <?php endif; ?>
                <li><a class="i_chat" href="#a_respond">Leave a Comment</a></li>
              <?php endif; ?>
              <li><a class="i_twitter" href="https://twitter.com/intent/tweet?text=%40cfrydlewicz%20Re%3A%20https://corry.us/?p=<?php echo $postId; ?>" target="_blank">Discuss on Twitter</a>
              <li><a class="i_facebook" href="https://www.facebook.com/groups/4912504758808432/?ref=share" target="_blank">Facebook Group</a></li>
            </ul>
          </section>

          <section class="share-container">
            <div class="post-footer_header">Share</div>
            <ul>
              <li>Short URL: <a href="<?php echo $postShortUrl; ?>" class="u_break-line"><?php echo $postShortUrl; ?></a></li>
              <li><a class="i_mail" href="mailto:?subject=<?php echo $postTitle; ?>&body=<?php echo $postShortUrl; ?>" target="_blank">Send Email</a></li>
              <li><a class="i_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postShortUrl; ?>" target="_blank">Share on Facebook</a></li>
              <li><a class="i_twitter" href="https://twitter.com/intent/tweet?text=%40cfrydlewicz%20Re%3A%20<?php echo $postShortUrl; ?>" target="_blank">Tweet This Post</a></li>
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

          <section class="follow-container">
            <div class="post-footer_header">Follow This Blog</div>
            <ul>
              <li><a class="i_rss" href="<?php bloginfo('rss2_url'); ?>" target="_blank">My RSS Feed</a> is an easy way to follow <em>only new articles</em>.</li>
              <li><a class="i_facebook" href="https://www.facebook.com/groups/4912504758808432/?ref=share" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);">My Facebook Group</a> is where I share <em>all content I create</em> and host discussions about it.</li>
              <li>If you don't have those, I share links to new posts on <a class="i_twitter"  href="http://www.twitter.com/cfrydlewicz" target="_blank" rel="noreferrer" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);">Twitter</a> as well.</li>
            </ul>
          </section>

          <?php if ( comments_open() ) : ?>
            <section id="a_comments_top" class="comments-container t_slides-up">
              <div class="post-footer_header">
                <span>Comments</span><?php
                  if ( $commentNum > 0 ) {
                    echo ' <span class="comments-count">('.$commentNum.')</span>';
                  }
                ?>
              </div>
              <?php comments_template(); ?>
            </section>
          <?php endif; ?>

        </div>
      </footer>
    <?php endwhile; ?>
  <?php else : ?>
    <!--Page Not Found-->
  <?php endif; ?>
</main>

<?php get_footer(); ?>
