<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="preload" href="<?php bloginfo('template_url');?>/critical.css" as="style" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic|Oxygen:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- BEGIN Facebook SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=660789187350450";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END Facebook SDK -->

<div class="total-wrapper">

	<header>

		<section class="header-logo">
			<div class="main-logo">
				<a href="/" title="Go to the homepage.">
					<?php if ( is_front_page() ) : ?>
						<h1 class="u_visually-hidden">Corry Frydlewicz's Blog</h1>
					<?php endif; ?>
					<svg alt="[logo] Click to go to the homepage." xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 251 103" enable-background="new 0 0 251 103" xml:space="preserve"><g><path class="corry-c" d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3 c5.3-5.3 11.8-7.9 19.3-7.9c7.6 0 14 2.7 19.3 8c5.1 5.1 7.7 11.1 8 18.2c-4 0-8.8 0-12.8 0c-0.2-3.5-1.6-6.6-4.2-9.2 c-2.8-2.8-6.2-4.2-10.3-4.2c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2c2.8 2.8 6.2 4.2 10.3 4.2 c4 0 7.4-1.5 10.3-4.4c2.5-2.6 3.9-5.8 4.2-9.6c2.9 0 10.1 0 12.8 0c-0.3 7.4-2.9 13.6-7.9 18.7C42.3 66.1 35.9 68.8 28.3 68.8z" /><path class="corry-o" d="M88.9 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1 C74.9 4 81.3 1.3 88.9 1.3c7.6 0 14 2.7 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3C102.9 66.2 96.4 68.8 88.9 68.8z M103.4 28.5c0-3.8-1.4-7.2-4.2-10.1c-2.8-2.9-6.2-4.3-10.3-4.3c-4 0-7.5 1.4-10.3 4.3c-2.8 2.9-4.2 6.3-4.2 10.1v13.1 c0 3.8 1.4 7.2 4.2 10.1c2.8 2.9 6.2 4.3 10.3 4.3c4 0 7.4-1.4 10.3-4.3c2.8-2.9 4.2-6.3 4.2-10.1V28.5z" /><path class="corry-r1" d="M149.5 14.1c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.7-8.1 19.3-8.1h9.2v12.8H149.5z"/><path class="corry-r2" d="M186.8 14.1c-4 0-7.4 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.8-8.1 19.3-8.1h9.2v12.8H186.8z"/><path class="corry-y" d="M250.3 74.9c0 7.6-2.7 14-8.2 19.3c-5.5 5.3-12.2 8-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 c3-2.8 4.5-6.3 4.5-10.4v-6h-8.7c-7.6 0-14-2.7-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10 c2.8 2.8 6.2 4.2 10.3 4.2h8.7V1.3h12.8V74.9z"/></g></svg>
					<img alt="[logo] Click to go to the homepage." src="<?php bloginfo('template_url');?>/images/logo-header.png" />
				</a>
			</div>
			<div class="u_visually-hidden"><a href="#skip-to-content">Skip to the page content &gt;</a></div>
		</section><!-- /.header-logo -->

		<section class="header-search">
			<div class="search-container icon-search"><?php get_search_form(); ?></div>
		</section><!-- /.header-search -->

	</header>

	<section class="navigation-container">

			<!-- On home page, display the two top-level categories only -->
			<?php if ( is_front_page() ) : ?>

				<nav class="navigation-parent">
					<ul>
						<li><a href="/category/pro/">Professional</a></li>
						<li><a href="/category/personal/">Personal</a></li>
					</ul>
				</nav>

			<?php else : ?>

				<nav class="navigation-parent u_flex u_flex--space-between">

					<!-- TODO: Write script for selecting current page Type -->
					<select>
						<option value="/" selected="selected">Home</option>
						<option value="/category/pro/">Professional</option>
						<option value="/category/personal/">Personal</option>
						<option value="/about/">About Me</option>
					</select>

					<!-- TODO: Write script for selecting current page Category (if it has only one) -->
					<select>
						<option value="" selected="selected">Categories</option>
					</select>

				</nav>
	
			<?php endif; ?>

	</section><!-- /.navigation-container -->

<!--/div .total-wrapper expands beyond this file and ends in footer.php -->
