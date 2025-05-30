<?php get_header(); ?>

<div class="main-columns-wrapper inner-wrapper">

  <main id="a_skip-to-content" class="listing-page">
    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>

          <header class="entry-header">
            <div class="inner-wrapper--at-lg">
              <a href="<?php the_permalink(); ?>"><?php post_thumbnail(); ?></a>
              <div class="title-container">
                <?php if ( is_singular() ) : ?>
                  <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
                <?php else : ?>
                  <h2 class="entry-title"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
                <?php endif; ?>
              </div>
            </div>
          </header>

          <div class="entry-content">
            <div class="inner-wrapper">
              <div class="excerpt-container">
                <?php the_excerpt(); ?>
                <a href="<?php echo str_replace(home_url(), '', get_permalink()); ?>" class="i_arrow-right--after">Read it Now!</a>
              </div>
            </div>
          </div><!--.entry-content-->

          <footer class="entry-footer">
            <div class="inner-wrapper">
              <div class="post-stats"><span class="post-date"><?php the_date(); ?></span> <span class="separator">|</span> <span class="word-count"><?php word_count(); ?> words</span></div>
              <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span><?php the_category(',&nbsp;'); ?></div>
            </div>
          </footer>

        </article>

      <?php endwhile; ?>

      <div class="pagination-container">
        <div class="inner-wrapper">
          <?php posts_nav_link('', 'Previous Page', 'Next Page'); ?>
        </div>
      </div>

    <?php else : ?>

      <article id="error404" class="article-card">
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
            <div class="post-stats"><span class="post-date">20XX</span> <span class="separator">|</span> <span class="word-count">0 words</span></div>
            <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span>404 Page</div>
          </div>
        </footer>
      </article>

    <?php endif; ?>

  </main>

  <aside class="sidebar">
  </aside>

</div><!--.main-columns-wrapper-->
<?php get_footer(); ?>
