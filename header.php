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
  <meta name="theme-color" content="#2e3c41">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#fff">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#2e3c41">

  <?php if ( !empty(wp_title('', false)) ) { $pageTitle = wp_title('', false).' | '.get_bloginfo('name'); } else { $pageTitle = get_bloginfo('name'); } ?>
  <title><?php echo $pageTitle; ?></title>
  <meta name="og:title" property="og:title" content="<?php echo $pageTitle; ?>">
  <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
  <meta name="twitter:site" content="@cfrydlewicz">

  <?php if ( is_singular() ) : ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="og:description" property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="keywords" content="<?php list_categories_tags(); ?>">
    <meta name="og:type" property="og:type" content="article">
    <meta name="twitter:card" content="summary">
    <?php if ( has_post_thumbnail() ) : ?>
      <meta name="og:image" property="og:image" content="<?php the_post_thumbnail_url(); ?>">
      <meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>">
      <meta name="twitter:image:alt" content="<?php echo get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); ?>">
    <?php else : ?>
      <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/corry_opengraph.jpg">
      <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/corry_twittercard.jpg">
      <meta name="twitter:image:alt" content="Cute illustration of Corry with their dog Kalbi on their head, made by Iris Malang">
    <?php endif; ?>
  <?php elseif ( is_category() ) : ?>
    <meta name="description" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:description" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="twitter:description" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo single_cat_title('', false); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_tag() ) : ?>
    <meta name="description" content="Posts labeled <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:description" content="Posts tagged <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="twitter:description" content="Posts tagged <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo single_tag_title('', false); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_search() ) : ?>
    <meta name="description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="twitter:description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="keywords" content="<?php echo esc_html($_GET['s']); ?>, Corry Frydlewicz, Corry, Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php else : ?>
    <meta name="description" content="A blog for both personal and professional content.">
    <meta name="og:description" property="og:description" content="A blog for both personal and professional content.">
    <meta name="twitter:description" content="A blog for both personal and professional content.">
    <meta name="keywords" content="Corry Frydlewicz, Corry, Frydlewicz, Corry Blog, CorryArt">
    <meta name="og:type" property="og:type" content="website">
  <?php endif; ?>

  <?php if ( !is_singular() ) : ?>
    <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/corry_opengraph.jpg">
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/corry_twittercard.jpg">
    <meta name="twitter:image:alt" content="Cute illustration of Corry with their dog Kalbi on their head, made by Iris Malang">
  <?php endif; ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">

  <style>/* critical inline CSS */
*{box-sizing:border-box;max-width:100%}a,abbr,acronym,address,applet,big,blockquote,body,caption,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,form,h1,h2,h3,h4,h5,h6,html,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,ul,var{background-repeat:no-repeat;border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{scroll-behavior:smooth}body{line-height:1}embed,iframe,img,video{display:block;height:auto;max-width:100%}ol,ul{list-style:none}table{border-collapse:separate;border-spacing:0}caption,td,th{text-align:left;font-weight:400}button{border-width:0;padding:0}blockquote::after,blockquote::before,q::after,q::before{content:none}blockquote,q{quotes:"" ""}input,select,textarea{max-width:100%}@font-face{font-display:swap;font-family:icomoon;font-style:normal;font-weight:400;src:url("assets/fonts/icomoon.eot?byte2f");src:url("assets/fonts/icomoon.eot?byte2f#iefix") format("embedded-opentype"),url("assets/fonts/icomoon.ttf?byte2f") format("truetype"),url("assets/fonts/icomoon.woff?byte2f") format("woff"),url("assets/fonts/icomoon.svg?byte2f#icomoon") format("svg")}.u_visually-hidden{height:1px;left:-10000px;overflow:hidden;position:absolute;top:auto;width:1px}body{font-family:Montserrat,helvetica,sans-serif;font-size:16px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}@media only screen and (min-width:768px){body{font-size:16px}}@media only screen and (min-width:1024px){body{font-size:18px}}.inner-wrapper{padding:0 16px;width:100%}@media only screen and (min-width:768px){.inner-wrapper--at-md{padding:0 16px;width:100%}}@media only screen and (min-width:1024px){.inner-wrapper,.inner-wrapper--at-lg,.inner-wrapper--at-md{margin:0 auto;max-width:1072px;padding:0 24px}.inner-wrapper--at-lg{width:100%}}.total-wrapper{min-width:360px;position:relative}.site-header{backface-visibility:hidden;position:fixed;width:100vw;z-index:1}.site-header .inner-wrapper{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;padding-left:0;padding-right:0}@media only screen and (min-width:1024px){.site-header .inner-wrapper{max-width:1024px}}.site-header-primary .inner-wrapper{height:40px}.site-header-secondary{display:none}.site-header-secondary .inner-wrapper{font-size:.75rem;display:-ms-flexbox;display:flex;height:30px;-ms-flex-pack:justify;justify-content:space-between}.site-header-secondary a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;min-width:40px;padding:4px 16px}@media only screen and (min-width:1024px){.site-header-secondary a{padding-left:24px;padding-right:24px}}.site-header-secondary .title{-ms-flex-positive:1;flex-grow:1;overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.header-logo{-ms-flex-positive:1;flex-grow:1}.header-logo svg{height:150%;max-height:48px;z-index:2}.header-logo a{display:block;height:100%;padding:4px}@media only screen and (min-width:412px){.header-logo a{padding-left:16px;padding-right:16px}}@media only screen and (min-width:1024px){.header-logo a{padding-left:24px;padding-right:24px}}.header-nav>div{height:100%}.header-nav ul{display:-ms-flexbox;display:flex;height:100%;list-style:none}.header-nav li{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;margin:0}.header-nav a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:1rem;font-weight:500;padding:0 8px}@media only screen and (min-width:412px){.header-nav a{padding:0 16px}}@media only screen and (min-width:1024px){.header-nav a{padding:0 24px}}.header-search .search-container{height:100%}.header-search .search-container label{display:inline-block;padding-bottom:6px;padding-top:6px}.header-search .search-container label:first-of-type{padding-left:8px}@media only screen and (min-width:412px){.header-search .search-container label:first-of-type{padding-left:16px}}@media only screen and (min-width:1024px){.header-search .search-container label:first-of-type{padding-left:24px}}.header-search .search-container label:last-of-type{padding-right:4px}@media only screen and (min-width:412px){.header-search .search-container label:last-of-type{padding-right:16px}}@media only screen and (min-width:1024px){.header-search .search-container label:last-of-type{padding-right:24px}}.article-card{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;margin-bottom:48px;position:relative}
  </style>
  <link rel="preload" as="style" onload="this.rel='stylesheet'" type="text/css" href="<?php bloginfo('template_url');?>/critical.min.css">
  <noscript>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/critical.min.css">
  </noscript>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">

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
          <a href="/" title="Go to the top of the homepage." role="link">
            <?php if ( is_home() ) : ?>
              <h1 class="u_visually-hidden">Corry Frydlewicz's Blog</h1>
            <?php endif; ?>
            <svg alt="Corry logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 103" xml:space="preserve"><path class="corry-c" d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3 5.3-5.3 11.8-7.9 19.3-7.9 7.6 0 14 2.7 19.3 8 5.1 5.1 7.7 11.1 8 18.2H42.8c-.2-3.5-1.6-6.6-4.2-9.2-2.8-2.8-6.2-4.2-10.3-4.2-4 0-7.5 1.4-10.3 4.2-2.8 2.8-4.2 6.2-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2 2.8 2.8 6.2 4.2 10.3 4.2 4 0 7.4-1.5 10.3-4.4 2.5-2.6 3.9-5.8 4.2-9.6h12.8c-.3 7.4-2.9 13.6-7.9 18.7-5.4 5.4-11.8 8.1-19.4 8.1z"/><path class="corry-o" d="M88.9 68.8c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1C74.9 4 81.3 1.3 88.9 1.3c7.6 0 14 2.7 19.3 8.1 5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3-5.3 5.3-11.8 7.9-19.3 7.9zm14.5-40.3c0-3.8-1.4-7.2-4.2-10.1-2.8-2.9-6.2-4.3-10.3-4.3-4 0-7.5 1.4-10.3 4.3-2.8 2.9-4.2 6.3-4.2 10.1v13.1c0 3.8 1.4 7.2 4.2 10.1 2.8 2.9 6.2 4.3 10.3 4.3 4 0 7.4-1.4 10.3-4.3 2.8-2.9 4.2-6.3 4.2-10.1V28.5z"/><path class="corry-r1" d="M149.5 14.1c-4 0-7.5 1.4-10.3 4.2-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4 5.3-5.4 11.7-8.1 19.3-8.1h9.2v12.8h-9.2z"/><path class="corry-r2" d="M186.8 14.1c-4 0-7.4 1.4-10.3 4.2-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4 5.3-5.4 11.8-8.1 19.3-8.1h9.2v12.8h-9.2z"/><path class="corry-y" d="M250.3 74.9c0 7.6-2.7 14-8.2 19.3-5.5 5.3-12.2 8-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 3-2.8 4.5-6.3 4.5-10.4v-6h-8.7c-7.6 0-14-2.7-19.3-8.1-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10 2.8 2.8 6.2 4.2 10.3 4.2h8.7V1.3h12.8v73.6z"/></svg>
          </a>
          <div class="screen-reader-nav u_visually-hidden">
            <ul>
              <li><a href="#a_skip-to-content">Jump to content</a></li>
              <?php if ( is_singular() ) : ?>
                <li><a href="#a_end-of-article">Jump to the end of the article</a></li>
                <li><a href="#a_comments_top">Jump to the comments</a></li>
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

    <section id="site-header-secondary" class="site-header-secondary">
      <div class="inner-wrapper">
        <?php if ( is_singular() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up"><?php the_title(); ?></a>
          <?php if ( !empty(get_comments_number()) ) : ?>
            <a title="Jump to the comments" class="i_chat i_arrow-down--after" href="#a_comments_top"><span>Comments:&nbsp;</span><?php echo get_comments_number(); ?></a>
          <?php else : ?>
            <a title="Jump to the end of the page" class="i_chat i_arrow-down--after" href="#a_end-of-article"><span>End of Article</a>
          <?php endif; ?>
        <?php elseif ( is_category() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up">Category: <strong><?php single_cat_title(); ?></strong></a>
        <?php elseif ( is_tag() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up">Tag: <strong><?php single_tag_title(); ?></strong></a>
        <?php elseif ( is_search() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up">Search: <strong><?php echo esc_html($_GET['s']); ?></strong></a>
        <?php endif; ?>
      </div>
    </section>

  </header>
<!--.total-wrapper ends in footer.php -->
