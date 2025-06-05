<?php get_header(); ?>

<?php if ( !is_home() ) : ?>
  <div class="listing-page-header inner-wrapper sp_horizontal-padding">
    <?php if ( is_category() ) : ?>
      <h1 id="sticky-title" class="page-title"><span>Category:&nbsp;</span><strong><?php single_cat_title(); ?></strong></h1>
    <?php elseif ( is_tag() ) : ?>
      <h1 id="sticky-title" class="page-title"><span>Tag:&nbsp;</span><strong><?php single_tag_title(); ?></strong></h1>
    <?php elseif ( is_search() ) : ?>
      <h1 id="sticky-title" class="page-title"><span>Search:&nbsp;</span><strong><?php echo esc_html($_GET['s']); ?></strong></h1>
    <?php endif; ?>
  </div>
<?php endif; ?>

<div class="main-columns-wrapper inner-wrapper">

  <main id="a_skip-to-content" class="listing-page">
    <?php if ( have_posts() ) : ?>
      <div class="article-list">
        <?php while ( have_posts() ) : ?>
          <?php the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
            <header class="entry-header">
              <a href="<?php the_permalink(); ?>"><?php post_thumbnail(); ?></a>
              <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span><?php the_category('<span class="separator"></span>'); ?></div>
            </header>
            <div class="entry-content sp_horizontal-padding">
              <div class="title-container">
                <?php if ( is_singular() ) : ?>
                  <h1 id="sticky-title" class="entry-title u_attn"><?php the_title(); ?></h1>
                <?php else : ?>
                  <h2 class="entry-title"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
                <?php endif; ?>
              </div>
              <div class="excerpt-container">
                <?php the_excerpt(); ?>
              </div>
              <div class="cta-container">
                <a href="<?php echo str_replace(home_url(), '', get_permalink()); ?>">
                  <button class="i_arrow-right--after">Read it Now!</button>
                </a>
              </div>
            </div><!--.entry-content-->
            <footer class="entry-footer sp_horizontal-padding">
              <div class="post-stats"><span class="post-date"><?php the_date(); ?></span> <span class="separator"></span> <span class="word-count"><?php word_count(); ?> words</span></div>
            </footer>
          </article>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="pagination-container inner-wrapper">
        <?php posts_nav_link('', 'Previous Page', 'Next Page'); ?>
      </div>

    <?php else : ?>

      <article id="error404" class="article-card u_attn">
        <header class="entry-header">
          <div class="inner-wrapper--at-lg">
            <a href="/">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php bloginfo('template_url');?>/assets/images/404_1024x512.jpg">
                <img src="<?php bloginfo('template_url');?>/assets/images/404_512x512.jpg" alt="Mega Man enters a boss stage only to find a 404 Boss Not found instead">
              </picture>
            </a>
            <div class="title-container">
              <?php if ( is_search() ) : ?>
                <h1 id="sticky-title" class="entry-title">Sorry, No Results Found</h1>
              <?php else : ?>
                <h2 class="entry-title"><a href="/">Oops! Wrong turn!</a></h2>
              <?php endif; ?>
            </div>
          </div>
        </header>
        <div class="entry-content">
          <div class="inner-wrapper">
            <div class="excerpt-container">
              <p>I couldn't find what you're looking for. Please try searching in another way or check out my homepage. If you think something's broken and have a minute to <a href="mailto:cfrydlewicz@gmail.com">let me know</a>, I'd appreciate it.</p>
              <a href="/" class="i_arrow-right--after">Latest Posts</a>
            </div>
          </div>
        </div><!--.entry-content-->
        <footer class="entry-footer">
          <div class="inner-wrapper">
            <div class="post-stats"><span class="post-date">20XX</span> <span class="separator"></span> <span class="word-count">0 words</span></div>
            <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span>404 Page</div>
          </div>
        </footer>
      </article>

    <?php endif; ?>

  </main>

  <aside class="sidebar" role="complementary">
    <div class="sidebar-inner">

      <?php if ( !is_category(700) ) : ?>
        <?php wp_reset_query();
        $args = array(
          // latest Microblog posts
          'post_type' => 'post',
          'post_status' => 'publish',
          'cat' => '700',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderby' => 'date'
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) : ?>
          <section class="latest-articles">
            <h3>Latest Microblogs</h3>
            <div class="article-list">
              <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
                  <header class="entry-header">
                    <a href="<?php the_permalink(); ?>"><?php post_thumbnail(); ?></a>
                    <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span><?php the_category('<span class="separator"></span>'); ?></div>
                  </header>
                  <div class="entry-content">
                    <div class="title-container">
                      <div class="entry-title"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></div>
                    </div>
                    <div class="excerpt-container"><?php the_excerpt(); ?></div>
                    <div class="cta-container">
                      <a href="<?php the_permalink(); ?>"><button class="i_arrow-right--after">Read it Now!</button></a>
                    </div>
                  </div><!--.entry-content-->
                  <footer class="entry-footer">
                    <div class="post-stats"><span class="post-date"><?php the_date(); ?></span> <span class="separator"></span> <span class="word-count"><?php word_count(); ?> words</span></div>
                  </footer>
                </article>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="more-link">
              <a class="i_arrow-right--after" href="/category/microblog/">More Microblogs</a>
            </div>
          </section>
        <?php endif; ?>

      <?php else : ?>
        <?php $args = array(
          // latest non-Microblog posts
          'post_type' => 'post',
          'cat' => '-700',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderby' => 'date'
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) : ?>
          <section class="latest-articles">
            <h3>Latest Articles</h3>
            <div class="article-list">
              <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
                  <header class="entry-header">
                    <a href="<?php the_permalink(); ?>"><?php post_thumbnail(); ?></a>
                    <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span><?php the_category('<span class="separator"></span>'); ?></div>
                  </header>
                  <div class="entry-content">
                    <div class="title-container">
                      <div class="entry-title"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></div>
                    </div>
                    <div class="excerpt-container"><?php the_excerpt(); ?></div>
                    <div class="cta-container">
                      <a href="<?php the_permalink(); ?>"><button class="i_arrow-right--after">Read it Now!</button></a>
                    </div>
                  </div><!--.entry-content-->
                  <footer class="entry-footer">
                    <div class="post-stats"><span class="post-date"><?php the_date(); ?></span> <span class="separator"></span> <span class="word-count"><?php word_count(); ?> words</span></div>
                  </footer>
                </article>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </section>
        <?php else : ?>
          <section class="latest-articles u_attn">
            <h3>Links</h3>
            <ul>
              <li><a href="/tag/favorite-post/">My Favorite Posts</a></li>
            </ul>
          </section>
        <?php endif; // have_posts ?>
      <?php endif; // Microblog or not ?>

      <?php if ( is_active_sidebar( 'widget_listing-sidebar1' ) ) : ?>
        <ul class="widget-area">
          <?php dynamic_sidebar( 'widget_listing-sidebar1' ); ?>
        </ul>
      <?php endif; ?>

    </div>
  </aside>

</div><!--.main-columns-wrapper-->
<?php get_footer(); ?>
