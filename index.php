<?php get_header(); ?>

<main id="a_skip-to-content" class="listing-page">

  <?php if ( ! is_home() ) : ?>
    <header class="listing-page-header">
      <div class="inner-wrapper">
        <?php if ( is_category() ) : ?>
          <h1 id="sticky-title" class="page-title">Category: <strong><?php single_cat_title(); ?></strong></h1>
          <?php echo category_description(); ?>
        <?php elseif ( is_tag() ) : ?>
          <h1 id="sticky-title" class="page-title">Tag <strong><?php single_tag_title(); ?></strong></h1>
        <?php elseif ( is_search() ) : ?>
          <h1 id="sticky-title" class="page-title">Search Results for <strong><?php echo esc_html($_GET['s']); ?></strong></h1>
        <?php else : ?>
          <div class="page-title">Oops!</div>
        <?php endif; ?>
      </div>
    </header>
  <?php else : ?>
    <?php query_posts('cat=-700'); // exclude microblogs from homepage ?>
  <?php endif; ?>

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>

        <header class="entry-header">
          <div class="stretched-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
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
            <div class="post-stats"><span class="word-count"><?php word_count(); ?> words</span> published on <span class="post-date"><?php the_date(); ?></span></div>
            <?php the_category(); ?>
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
        <img src="<?php bloginfo('template_url');?>/assets/404.jpg">
        <div class="title-container">
          <h1 class="entry-title">No Results Found</h1>
        </div>
      </header>

      <div class="entry-content">
        <div class="inner-wrapper">
          <div class="excerpt-container">
            <p>I couldn't find what you're looking for. Please try another search or <span style="white-space: nowrap;">return to the ...</span></p>
            <a href="/" class="i_arrow-right--after">Homepage</a>
          </div>
        </div>
      </div><!--.entry-content-->

    </article>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
