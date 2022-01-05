<?php get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header>
<?php endif; ?>

<main id="skip-to-content" class="inner-wrapper">
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
              <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> posted on <span class="post-date"><?php the_date(); ?></span></div>
              <div class="post-categories"><?php get_the_category_list(); ?></div>
            </section>

          </div>
        </header>

        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div><!--.entry-content-->

        <footer class="entry-footer">
          <a href="<?php esc_url(get_permalink()); ?>"><button>Read it Now!</button></a>
        </footer>

      </article>

    <?php endwhile; ?>
    <?php	posts_nav_link(); ?>

  <?php else : ?>

    <section class="post error404">
      <img src="<?php bloginfo('template_url');?>/assets/static/404.jpg">
      <div class="entry-content">
        <h2 class="entry-title">No Results Found</h2>
        <div class="entry-summary">
          <p>Sorry! Please <a href="#search">try another search</a> or <a href="/">return to the home page</a>.</p>
        </div><!-- .entry-summary -->
      </div><!--.entry-content-->
    </section>

  <?php endif; ?>
</main>

<?php get_footer(); ?>
