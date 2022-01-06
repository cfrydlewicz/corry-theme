<?php get_header(); ?>

<main id="a_skip-to-content" class="inner-wrapper">
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

      	<div class="thanks-container">
	      	<div class="f_large">Thank you for reading!</div>
	      </div>

	      <div class="discussion-container">
	      	<div class="post-footer_header">Discuss</div>
	      	<ul>
						<?php if ( comments_open() && get_comments_number() ) : ?>
							<li><a href="#a_comments_top">Comments</a></li>
						<?php endif; ?>
						<li><a class="i_twitter" href="https://twitter.com/intent/tweet?text=%40cfrydlewicz%20Re%3A%20https://corry.us/<?php wp_get_shortlink(); ?>" target="_blank">Discuss on Twitter</a>
						<li><a class="i_facebook2" href="https://www.facebook.com/groups/4912504758808432/?ref=share" target="_blank">Facebook Group</a></li>
					</ul>
				</div>

				<div class="share-container">
					<div class="post-footer_header">Share</div>
					<div>Copy Post URL</div>
					<div>
						<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//corry.us/<?php wp_get_shortlink(); ?>" target="_blank">Share on Facebook</a>
					</div>
					<div>Tweet this Post</div>
				</div>

				<div class="read-more-container">
					<?php if ( is_active_sidebar( 'widget_single-post-footer1' ) ) : ?>
						<div id="single-post-footer_widget" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'widget_single-post-footer1' ); ?>
						</div>
					<?php else : ?>
						<div class="widget-title">Read More</div>
						<div><a href="/tag/favorite-post/">My Favorite Posts</a></div>
					<?php endif; ?>
				</div>

				<?php if ( comments_open() ) : ?>
		      <div id="a_comments_top" class="comments-container">
		      	<div class="post-footer_header">Comments</div>
						<?php
							if ( get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
				<?php endif; ?>

      </section>

		<?php endwhile; ?>
	<?php else : ?>
		<!--Single Post Not Found-->
	<?php endif; ?>
</main>

<?php get_footer(); ?>
