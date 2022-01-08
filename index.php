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
          <div class="inner-wrapper--at-md">
            <?php post_thumbnail(); ?>
            <div class="title-container thumbnail-overlay">
              <?php if ( is_singular() ) : ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php else : ?>
                <h2 class="entry-title"><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
              <?php endif; ?>
            </div>
            <div class="post-meta thumbnail-overlay">
              <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
              <div class="post-categories"><?php the_category(); ?></div>
            </div>
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
        <div class="inner-wrapper">
          <p>Sorry! Please <a href="#a_search" onclick="$('#header-search-field').focus();">try another search</a> or <a href="/">return to the home page</a>.</p>
        </div>
      </div><!--.entry-content-->
    </section>

  <?php endif; ?>
</main>

<?php get_footer(); ?>
