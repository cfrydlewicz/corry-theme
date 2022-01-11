<?php get_header(); ?>

<main id="a_skip-to-content" class="single-post">
  <?php while ( have_posts() ) : ?>
    <?php
      the_post();
      // store data for the post footer widgets
      $thisPostId = get_the_ID();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="entry-header">
        <?php post_thumbnail(); ?>
        <div class="thumbnail-overlay">
          <h1 id="single-post-title" class="entry-title"><?php the_title(); ?></h1>
          <div class="post-meta">
            <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
          </div>
        </div>
      </header>

      <section class="entry-content">
        <div class="inner-wrapper">

          <div class=" TODO disclaimer-container u_hidden">
            <div>
              <h2>PHP Sandbox</h2>
              <p><?php

echo get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);

              ?></p>
            </div>
          </div>

          <?php if ( has_tag('old-post') ) : ?>
            <div class="disclaimer_old-posts disclaimer-container">
              <div>
                <p><strong>This post is old and contains outdated information.</strong> I make a point to <em>only remove harmful content</em>, and I try to keep old posts visible &mdash; even if they're embarrassing or no longer accurate. I want to look back and see my growth over the years, and I don't want to hide that growth from others either. Thanks for considering this as you read.</p>
                <p>If you'd like to see an update for this content, <a href="#a_respond" class="i_chat u_nowrap">leave a comment</a> saying so.</p>
              </div>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        </div>
      </section>

      <footer id="a_end-of-article" class="entry-footer">
        <div class="inner-wrapper">
          <p class="post-categories">Categories: <?php the_category(', '); ?></p>
          <p class="post-tags"><?php the_tags(); ?></p>
        </div>
      </footer>

    </article>

    <?php get_template_part('template-parts/post-footer', '', $thisPostId) ?>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
