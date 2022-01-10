<?php get_header(); ?>

<main id="a_skip-to-content">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
      <?php
        the_post();
        // store data for the post footer widgets
        $postId = get_the_ID();
        $postTitle = get_the_title();
        $postShortUrl = "https://corry.us/?p=".$postId;
        $commentNum = get_comments_number();
      ?>

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

      <?php get_template_part('post-footer') ?>

    <?php endwhile; ?>
  <?php else : ?>
    <!--Page Not Found-->
  <?php endif; ?>
</main>

<?php get_footer(); ?>
