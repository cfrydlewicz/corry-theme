<?php get_header(); ?>

<main id="a_skip-to-content" class="listing-page">

  <?php if ( ! is_home() ) : ?>
    <header class="listing-page-header">
      <div class="inner-wrapper">
        <?php if ( is_category() ) : ?>
          <h1 id="sticky-title" class="page-title"><span>Category:</span> <strong><?php single_cat_title(); ?></strong></h1>
          <?php echo category_description(); ?>
        <?php elseif ( is_tag() ) : ?>
          <h1 id="sticky-title" class="page-title"><span>Tag:</span> <strong><?php single_tag_title(); ?></strong></h1>
        <?php elseif ( is_search() ) : ?>
          <h1 id="sticky-title" class="page-title"><span>Search Results for</span> <strong><?php echo esc_html($_GET['s']); ?></strong></h1>
        <?php else : ?>
          <div class="page-title"><strong>Oops!</strong></div>
          <p>Sorry, I couldn't find what you were looking for. Try a search maybe?</p>
        <?php endif; ?>
      </div>
    </header>
  <?php endif; ?>

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>

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
          <div class="inner-wrapper--at-lg" data-thumbnail="<?php the_post_thumbnail_url(); ?>">
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
            <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> <span class="published-on">published on</span> <span class="post-date"><?php the_date(); ?></span></div>
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
        <div class="stretched-bg" style="background-image: url('<?php bloginfo('template_url');?>/assets/images/404_1024x512.jpg');"></div>
        <div class="inner-wrapper--at-lg" data-thumbnail="<?php the_post_thumbnail_url(); ?>">
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
          <div class="post-stats"><span class="word-count">0 words</span> <span class="published-on">published in</span> <span class="post-date">20XX</span></div>
          <div class="post-categories"><span class="u_visually-hidden">Categories:&nbsp;</span>404 Page</div>
        </div>
      </footer>
    </article>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
