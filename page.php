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

    <?php get_template_part('template-parts/post-footer', '', $thisPostId) ?>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
