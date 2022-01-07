<?php get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
  <header class="page-header">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
  </header>
<?php endif; ?>

<main id="a_skip-to-content" class="inner-wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php post_thumbnail(); ?>
          <div class="thumbnail-overlay">
            <?php if ( is_singular() ) : ?>
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php else : ?>
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php endif; ?>

            <section class="post-meta">
              <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
              <div class="post-categories"><?php the_category(); ?></div>
            </section>

          </div>
        </header>

        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div><!--.entry-content-->

        <footer class="entry-footer">
          <a href="<?php echo str_replace(home_url(), '', get_permalink()); ?>" class="button">Read it Now!</a>
        </footer>

      </article>

    <?php endwhile; ?>
    <?php posts_nav_link(); ?>

  <?php else : ?>

    <section class="post error404">
      <img src="<?php bloginfo('template_url');?>/assets/404.jpg">
      <div class="entry-content">
        <h2 class="entry-title">No Results Found</h2>
        <div class="entry-summary">
          <p>Sorry! Please <a href="#a_search">try another search</a> or <a href="/">return to the home page</a>.</p>
        </div><!--.entry-summary-->
      </div><!--.entry-content-->
    </section>

  <?php endif; ?>
</main>

<?php get_footer(); ?>
