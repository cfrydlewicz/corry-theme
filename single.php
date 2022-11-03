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
        <div class="stretched-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
        <div class="inner-wrapper--at-lg">
          <a href="<?php the_post_thumbnail_url(); ?>">
            <?php post_thumbnail(); ?>
          </a>
          <div class="title-container">
            <h1 id="sticky-title" class="entry-title"><?php the_title(); ?></h1>
            <div class="post-meta"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
          </div>
        </div>
      </header>

      <section class="entry-content">
        <div class="inner-wrapper">

          <?php if ( has_tag('old-post') ) : ?>
            <div class="disclaimer_old-posts disclaimer">
              <div>
                <p><strong>This post is old and contains outdated information.</strong> I make a point to <em>only remove harmful content</em>, and I try to keep old posts visible &mdash; even if they're embarrassing or no longer accurate. I want to look back and see my growth over the years, and I don't want to hide that growth from others either. Thanks for considering this as you read.</p>
                <p>If you'd like to see an update for this content, <a href="#a_respond" class="i_chat">leave a comment</a> saying so.</p>
              </div>
            </div>
          <?php endif; ?>

          <?php the_content(); ?>
        </div>
      </section>

      <footer id="a_end-of-article" class="entry-footer t_slides-up">
        <div class="inner-wrapper">
          <div class="thanks-header">Thanks for reading!</div>
          <p class="post-categories">Categories: <?php the_category(', '); ?></p>
          <p class="post-tags"><?php the_tags(); ?></p>
        </div>
      </footer>

    </article>

    <?php get_template_part('template-parts/post-footer', '', $thisPostId) ?>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
