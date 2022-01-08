<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="apple-mobile-web-app-title" content="Corry">
  <meta name="application-name" content="Corry">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
  <meta name="og:title" property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?>">
  <?php if ( is_singular() ) : ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="og:description" property="og:type" content="<?php echo get_the_excerpt(); ?>">
    <meta name="keywords" content="<?php
      $postcats = get_the_category();
      if ($postcats) {
        foreach($postcats as $cat) {
          echo $cat->name . ', ';
        }
      } ?><?php
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) {
          echo $tag->name . ', ';
        }
      } ?>">
    <meta name="og:type" property="og:type" content="article">
  <?php elseif ( is_category() ) : ?>
    <meta name="description" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:type" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo single_cat_title('', false); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_tag() ) : ?>
    <meta name="description" content="Posts labeled <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:type" content="Posts tagged <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo single_tag_title('', false); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_search() ) : ?>
    <meta name="description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:type" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo esc_html($_GET['s']); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php else : ?>
    <meta name="description" content="A blog for both personal and professional content.">
    <meta name="og:description" property="og:type" content="A blog for both personal and professional content.">
    <meta name="keywords" content="Corry Frydlewicz, Corry, Frydlewicz, Corry Blog, CorryArt">
    <meta name="og:type" property="og:type" content="website">
  <?php endif; ?>

  <?php if ( has_post_thumbnail() ) : ?>
    <meta name="og:image" property="og:type" content="<?php the_post_thumbnail_url(); ?>">
  <?php else : ?>
    <meta name="og:image" property="og:type" content="<?php bloginfo('template_url'); ?>/assets/corry_opengraph.jpg">
  <?php endif; ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <style>/* critical css */body{font-family:Arimo,helvetica,sans-serif}</style>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />

  <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic|Oxygen:300' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="total-wrapper">
  <header class="site-header">

    <section id="site-header-primary" class="site-header-primary">
      <div class="inner-wrapper">

        <section class="header-logo">
          <a href="/" title="Go to the homepage." role="link">
            <?php if ( is_front_page() ) : ?>
              <h1 class="u_visually-hidden">Corry Frydlewicz's Blog</h1>
            <?php endif; ?>
            <svg alt="Corry logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 251 103" enable-background="new 0 0 251 103" xml:space="preserve"><g><path class="corry-c" d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3 c5.3-5.3 11.8-7.9 19.3-7.9c7.6 0 14 2.7 19.3 8c5.1 5.1 7.7 11.1 8 18.2c-4 0-8.8 0-12.8 0c-0.2-3.5-1.6-6.6-4.2-9.2 c-2.8-2.8-6.2-4.2-10.3-4.2c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2c2.8 2.8 6.2 4.2 10.3 4.2 c4 0 7.4-1.5 10.3-4.4c2.5-2.6 3.9-5.8 4.2-9.6c2.9 0 10.1 0 12.8 0c-0.3 7.4-2.9 13.6-7.9 18.7C42.3 66.1 35.9 68.8 28.3 68.8z" /><path class="corry-o" d="M88.9 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1 C74.9 4 81.3 1.3 88.9 1.3c7.6 0 14 2.7 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3C102.9 66.2 96.4 68.8 88.9 68.8z M103.4 28.5c0-3.8-1.4-7.2-4.2-10.1c-2.8-2.9-6.2-4.3-10.3-4.3c-4 0-7.5 1.4-10.3 4.3c-2.8 2.9-4.2 6.3-4.2 10.1v13.1 c0 3.8 1.4 7.2 4.2 10.1c2.8 2.9 6.2 4.3 10.3 4.3c4 0 7.4-1.4 10.3-4.3c2.8-2.9 4.2-6.3 4.2-10.1V28.5z" /><path class="corry-r1" d="M149.5 14.1c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.7-8.1 19.3-8.1h9.2v12.8H149.5z"/><path class="corry-r2" d="M186.8 14.1c-4 0-7.4 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.8-8.1 19.3-8.1h9.2v12.8H186.8z"/><path class="corry-y" d="M250.3 74.9c0 7.6-2.7 14-8.2 19.3c-5.5 5.3-12.2 8-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 c3-2.8 4.5-6.3 4.5-10.4v-6h-8.7c-7.6 0-14-2.7-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10 c2.8 2.8 6.2 4.2 10.3 4.2h8.7V1.3h12.8V74.9z"/></g></svg>
          </a>
          <div class="screen-reader-nav u_visually-hidden">
            <ul>
              <li><a href="#a_skip-to-content">Jump to content</a></li>
              <?php if ( is_single() ) : ?>
                <li><a href="#a_end-of-article">Jump to end of article</a></li>
                <li><a href="#a_comments_top">Jump to comments</a></li>
              <?php endif; ?>
              <li><a href="#a_footer">Jump to footer</a></li>
            </ul>
          </div><!--.screen-reader-nav-->
        </section><!--.header-logo-->

        <section class="header-nav">
          <?php wp_nav_menu('primary'); ?>
        </section>

        <section class="header-search">
          <div class="search-container"><?php get_search_form(); ?></div>
        </section><!--.header-search-->

      </div>
    </section>

    <?php if ( is_single() ) : ?>
      <section id="site-header-secondary" class="site-header-single site-header-secondary">
        <div class="inner-wrapper">
          <a href="#" class="title i_arrow-up"><?php the_title(); ?></a>
        </div>
      </section>
    <?php endif; ?>

  </header>

<!--.total-wrapper ends in footer.php -->
