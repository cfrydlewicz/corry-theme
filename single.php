<?php get_header(); ?>

<main id="skip-to-content" class="inner-wrapper">
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : ?>
  		<?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php post_thumbnail(); ?>
          <div class="thumbnail-overlay">

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <section class="post-meta">
            </section>

          </div>
        </header>

        <section class="entry-content">
        	<?php the_content(); ?>
        </section>

        <footer class="entry-footer">
	        <div class="post-categories">Categories: <?php get_the_category_list(); ?></div>
	        <div class="post-tags">Tags: <?php get_the_tags(); ?></div>
	      </footer>

      </article>

      <section class="entry-footer">
      	<div class="f_large">Thank you for reading!</div>

				<?php if ( comments_open() ) : ?>
		      <div class="comments-container">
		      	<div class="post-footer_header">Discuss</div>
						<?php
							if ( get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
				<?php endif; ?>

				<div class="share-container">
					<div class="post-footer_header">Share</div>
					<div>Copy Post URL</div>
					<div>Share to Facebook</div>
					<div>Tweet this Post</div>
				</div>

				<div class="read-more-container">
					<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
						<div id="single-post-footer_widget" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'widget_single-post-footer1' ); ?>
						</div>
					<?php else : ?>
						<a href="/tag/favorite-post/">My Favorite Posts</a>
					<?php endif; ?>
				</div>

      </section>

		<?php endwhile; ?>
	<?php else : ?>
		<!--Single Post Not Found-->
	<?php endif; ?>
</main>

<?php get_footer(); ?>
