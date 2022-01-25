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
*{box-sizing:border-box;max-width:100%}a,abbr,acronym,address,applet,big,blockquote,body,caption,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,form,h1,h2,h3,h4,h5,h6,html,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,ul,var{background-repeat:no-repeat;border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{scroll-behavior:smooth}body{line-height:1}embed,iframe,img,video{display:block;height:auto}ol,ul{list-style:none}table{border-collapse:separate;border-spacing:0}caption,td,th{text-align:left;font-weight:400}button{border-width:0;padding:0}blockquote::after,blockquote::before,q::after,q::before{content:none}blockquote,q{quotes:"" ""}.u_visually-hidden{height:1px;left:-10000px;overflow:hidden;position:absolute;top:auto;width:1px}@font-face{font-display:swap;font-family:icomoon;font-style:normal;font-weight:400;src:url(data:application/x-font-woff;charset=utf-8;base64,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)}body{font-family:Montserrat,helvetica,sans-serif;font-size:16px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}@media only screen and (min-width:1024px){body{font-size:18px}}.inner-wrapper{padding:0 16px;width:100%}@media only screen and (min-width:1024px){.inner-wrapper,.inner-wrapper--at-lg{margin:0 auto;max-width:1072px;padding:0 24px;width:100%}}.total-wrapper{min-height:100vh;min-width:360px;position:relative}.site-header{backface-visibility:hidden;position:fixed;width:100vw;z-index:1}.site-header .inner-wrapper{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;padding-left:0;padding-right:0}@media only screen and (min-width:1024px){.site-header .inner-wrapper{max-width:1024px}}.site-header-primary .inner-wrapper{height:40px}.site-header-secondary{display:none}.site-header-secondary .inner-wrapper{font-size:.75rem;display:-ms-flexbox;display:flex;height:30px;-ms-flex-pack:justify;justify-content:space-between}.site-header-secondary a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;min-width:40px;padding:4px 16px}@media only screen and (min-width:1024px){.site-header-secondary a{padding-left:24px;padding-right:24px}}.site-header-secondary .title{-ms-flex-positive:1;flex-grow:1;overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.header-logo{-ms-flex-positive:1;flex-grow:1}.header-logo svg{height:150%;max-height:48px;z-index:2}.header-logo a{display:block;height:100%;padding:4px}@media only screen and (min-width:412px){.header-logo a{padding-left:16px;padding-right:16px}}@media only screen and (min-width:1024px){.header-logo a{padding-left:24px;padding-right:24px}}.header-nav>div{height:100%}.header-nav ul{display:-ms-flexbox;display:flex;height:100%;list-style:none}.header-nav li{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;margin:0}.header-nav a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:1rem;font-weight:500;padding:0 8px}@media only screen and (min-width:412px){.header-nav a{padding:0 16px}}@media only screen and (min-width:1024px){.header-nav a{padding:0 24px}}.header-search .search-container{height:100%}.header-search .search-container label{display:inline-block;padding-bottom:6px;padding-top:6px}.header-search .search-container label:first-of-type{padding-left:8px}@media only screen and (min-width:412px){.header-search .search-container label:first-of-type{padding-left:16px}}@media only screen and (min-width:1024px){.header-search .search-container label:first-of-type{padding-left:24px}}.header-search .search-container label:last-of-type{padding-right:4px}@media only screen and (min-width:412px){.header-search .search-container label:last-of-type{padding-right:16px}}@media only screen and (min-width:1024px){.header-search .search-container label:last-of-type{padding-right:24px}}body:not(.home) main.listing-page{padding-top:48px}.listing-page-header{padding:8px 0;width:100%}.listing-page-header .page-title{font-size:1.25rem}body.error404 main{padding-bottom:48px}body.error404 .article-card:first-of-type img{height:auto;max-width:1024px;padding-bottom:40px;width:100%}body.error404 .site-footer{bottom:0;position:absolute;width:100%}.article-card{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;margin-bottom:48px;position:relative}
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
