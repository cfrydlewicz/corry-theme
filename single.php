<?php get_header(); ?>

<main id="a_skip-to-content">
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : ?>
  		<?php
  			the_post();
  			$postId = get_the_ID();
  			$postTitle = get_the_title();
  		?>

	    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    	<div class="inner-wrapper">
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
				</div>
      </article>

      <section class="post-footer">
	    	<div class="inner-wrapper--at-md">

      	<div class="thanks-container">
		    	<div class="inner-wrapper--sm-only">
		      	<div class="f_large">Thanks for reading!</div>
					</div>
				</div>

	      <div class="discussion-container">
		    	<div class="inner-wrapper--sm-only">
		      	<div class="post-footer_header">Discuss</div>
		      	<ul>
							<?php if ( comments_open() && get_comments_number() ) : ?>
								<li><a href="#a_comments_top">Comments</a></li>
							<?php endif; ?>
							<li><a class="i_twitter" href="https://twitter.com/intent/tweet?text=%40cfrydlewicz%20Re%3A%20https://corry.us/?p=<?php echo $postId; ?>" target="_blank">Discuss on Twitter</a>
							<li><a class="i_facebook2" href="https://www.facebook.com/groups/4912504758808432/?ref=share" target="_blank">Facebook Group</a></li>
						</ul>
					</li>
				</div>

				<div class="share-container">
		    	<div class="inner-wrapper--sm-only">
						<div class="post-footer_header">Share</div>
						<ul>
							<li>Short URL: <a href="https://corry.us/?p=<?php echo $postId; ?>" class="u_break-line">https://corry.us/?p=<?php echo $postId; ?></a></li>
							<li><a href="mailto:?subject=<?php echo $postTitle; ?>&body=https%3A//corry.us/?p=<?php echo $postId; ?>" target="_blank">Send Email</a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//corry.us/?p=<?php echo $postId; ?>" target="_blank">Share on Facebook</a></li>
							<li><a class="i_twitter" href="https://twitter.com/intent/tweet?text=%40cfrydlewicz%20Re%3A%20https://corry.us/?p=<?php echo $postId; ?>" target="_blank">Tweet This Post</a></li>
						</ul>
					</div>
				</div>

				<div class="read-more-container">
		    	<div class="inner-wrapper--sm-only">
						<?php if ( is_active_sidebar( 'widget_single-post-footer1' ) ) : ?>
							<div class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'widget_single-post-footer1' ); ?>
							</div>
						<?php else : ?>
							<div class="widget-title">Read More</div>
							<div><a href="/tag/favorite-post/">My Favorite Posts</a></div>
						<?php endif; ?>
					</div>
				</div>

				<?php if ( comments_open() ) : ?>
		      <div id="a_comments_top" class="comments-container">
			    	<div class="inner-wrapper--sm-only">
			      	<div class="post-footer_header">Comments</div>
							<?php
								if ( get_comments_number() ) {
									comments_template();
								}
							?>
						</div>
					</div>
				<?php endif; ?>

      </section>

		<?php endwhile; ?>
	<?php else : ?>
		<!--Single Post Not Found-->
	<?php endif; ?>
</main>

<?php get_footer(); ?>
