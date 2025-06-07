<!doctype html>
<?php // Detect Save-Data Headers
$saveData = (isset($_SERVER["HTTP_SAVE_DATA"]) && stristr($_SERVER["HTTP_SAVE_DATA"], "on") !== false) ? true : false; ?>
<html lang="en" class="<?php if ($saveData === true) : ?>save-data<?php endif; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
      <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_opengraph.jpg">
      <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_twittercard.jpg">
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
    <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_opengraph.jpg">
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_twittercard.jpg">
    <meta name="twitter:image:alt" content="Cute illustration of Corry with their dog Kalbi on their head, made by Iris Malang">
  <?php endif; ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">

  <style>/* critical inline CSS 25.06.06 */
*{box-sizing:border-box;max-width:100%}a,abbr,acronym,address,applet,b,big,blockquote,body,caption,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,form,h1,h2,h3,h4,h5,h6,html,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,ul,var{background-repeat:no-repeat;border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{scroll-behavior:smooth}body{line-height:1}embed,iframe,img,video{display:block}table{border-collapse:separate;border-spacing:0}caption,td,th{text-align:left;font-weight:400}button{border-width:0;padding:0}blockquote::after,blockquote::before,q::after,q::before{content:none}blockquote,q{quotes:"" ""}:root{--c_primary:oklch(90.78% 0.153 180.5);--c_secondary:oklch(71.2% 0.346 336.4);--c_accent:oklch(71.5% 0.234 40.6);--c_accent2:oklch(0.93 0.2442 122.83);--c_dark-base:#2e3c41;--c_light-base:#d6f3f0;--c_basetext:#eaecec;--c_link:oklch(90.78% 0.153 180.5);--c_link-dark:oklch(73.24% 0.15 180.5);--c_hover:oklch(71.5% 0.234 40.6);--c_hover-dark:oklch(51.36% 0.169 43.84);--c_active:oklch(71.2% 0.346 336.4);--c_active-dark:oklch(73.24% 0.15 336.4);--c_visited:oklch(73.24% 0.15 180.5);--cmpn_teal:oklch(46.6% 0.111 180.5);--cmpn_lightteal:color-mix(in lab, oklch(46.6% 0.111 180.5) 100%, #fff 100%);--cmpn_paleteal:color-mix(in lab, oklch(46.6% 0.111 180.5) 25%, #fff 100%);--cmpn_palerteal:color-mix(in lab, oklch(46.6% 0.111 180.5) 12.5%, #fff 100%);--cmpn_orange:oklch(71.5% 0.234 40.6);--cmpn_darkorange:oklch(28.8% 0.089 47);--cmpn_link:oklch(46.6% 0.111 180.5);--cmpn_link-dark:oklch(25% 0.111 180.5);--cmpn_hover:oklch(71.5% 0.234 40.6);--cmpn_hover-dark:color-mix(in lab, oklch(71.5% 0.234 40.6) 100%, #000 60%);--cmpn_active:oklch(46.6% 0.111 336.4);--cmpn_active-dark:oklch(46.6% 0.111 336.4)}.header-nav>button .nav-menu-text:not(:focus):not(:focus-within),.u_visually-hidden:not(:focus):not(:focus-within){height:1px;left:-10000px;overflow:hidden;position:absolute;top:auto;width:1px}.f_small{font-size:.875rem!important}.f_smaller{font-size:.75rem!important}.f_smallest{font-size:12px!important}.sp_right_sm{margin-right:.5rem}.sp_right_md{margin-right:1rem}.sp_right_lg{margin-right:1.5rem}.sp_horizontal-padding,.sp_padding{padding-left:16px;padding-right:16px}.sp_padding,.sp_vertical-padding{padding-bottom:16px;padding-top:16px}.u_nowrap{white-space:nowrap}.separator{margin-left:.375em;margin-right:.375em;opacity:.5}.separator:empty::before{content:'•';font-size:1.125;font-weight:500}@font-face{font-display:swap;font-family:icomoon;font-style:normal;font-weight:400;src:url("assets/fonts/icomoon/icomoon.ttf?byte2f") format("truetype"),url("assets/fonts/icomoon/icomoon.woff?byte2f") format("woff"),url("assets/fonts/icomoon/icomoon.svg?byte2f#icomoon") format("svg")}body{font-family:Montserrat,helvetica,sans-serif;font-size:16px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;position:relative;text-wrap:balance;text-wrap:pretty}.inner-wrapper{margin-left:auto;margin-right:auto;max-width:1336px;position:relative;width:100%}.total-wrapper{min-height:100vh;position:relative}.total-wrapper>main{padding-top:41px}body.wp-singular .total-wrapper>footer{min-height:calc(100vh - 40px)}.site-header{backface-visibility:hidden;left:0;position:fixed;right:0;top:0;z-index:5}.site-header .inner-wrapper{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;max-width:1336px;padding-left:0;padding-right:0}.site-header-primary,.site-header-secondary{background-color:#2e3c41}.site-header-primary{background:radial-gradient(ellipse at right top,#2e3c41 0,#253034 100%)}.site-header-primary .inner-wrapper{height:40px}.site-header-secondary{background:linear-gradient(180deg,#171e21,rgba(23,30,33,.75));display:none}.site-header-secondary .inner-wrapper{font-size:.75rem!important;display:-ms-flexbox;display:flex;height:30px;-ms-flex-pack:justify;justify-content:space-between}.site-header-secondary a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;min-width:40px;padding:4px 16px}.site-header-secondary .title{overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.site-header-secondary .title strong{font-weight:600}.header-logo{-ms-flex-positive:1;flex-grow:1}.header-logo a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;padding:4px}.header-logo a:focus{outline-offset:4px;outline-width:2px}.header-logo svg{-ms-flex-item-align:baseline;align-self:baseline;height:150%;max-height:48px}.header-nav,.screen-reader-nav{position:relative}.header-nav ul,.screen-reader-nav ul{display:-ms-flexbox;display:flex;-ms-flex-flow:column wrap;flex-flow:column wrap;height:100%;list-style:none}.header-nav li,.screen-reader-nav li{margin:0}.header-nav li:not(:last-child),.screen-reader-nav li:not(:last-child){margin:0}.header-nav a,.screen-reader-nav a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:.875rem;font-weight:500;padding-left:8px;padding-right:8px;width:100%}.header-nav>nav,.screen-reader-nav>nav{background-color:#253034;padding:4px 0;z-index:4}.header-nav>nav a,.screen-reader-nav>nav a{border-color:oklch(46.6% .111 180.5);border-left-color:oklch(90.78% .153 180.5);border-style:solid;border-width:0 0 0 4px;padding:8px 16px}.header-nav>nav a:not(:hover):not(:active):not(:focus),.screen-reader-nav>nav a:not(:hover):not(:active):not(:focus){color:#eaecec}.header-nav>nav a:focus,.header-nav>nav a:hover,.screen-reader-nav>nav a:focus,.screen-reader-nav>nav a:hover{border-left-color:oklch(71.5% .234 40.6);color:oklch(71.5% .234 40.6)}.header-nav>nav li li a,.screen-reader-nav>nav li li a{padding-left:32px}.screen-reader-nav>nav{z-index:5}.exposed-nav button,.header-nav>button{border-radius:0;border-left-width:2px!important;border-right-width:2px!important;color:var(--c_link);height:40px;padding:0 12px}.exposed-nav button:not(:hover):not(:active):not(:focus),.header-nav>button:not(:hover):not(:active):not(:focus){background-color:transparent;color:var(--c_link)}.exposed-nav button:hover,.header-nav>button:hover{background-color:var(--c_hover);border-color:var(--c_hover-dark)!important;border-width:2px!important;color:#fdfdfd}.exposed-nav{display:none}.exposed-nav ul{display:-ms-flexbox;display:flex}.exposed-nav li{display:none}.exposed-nav li:not(:last-child){margin-bottom:0}.exposed-nav li.emeryville button{background-color:var(--cmpn_paleteal);background:linear-gradient(180deg,var(--cmpn_paleteal) 0,var(--cmpn_lightteal) 100%);border-color:var(--cmpn_paleteal)}.exposed-nav li.emeryville button:not(:hover):not(:active):not(:focus){color:var(--cmpn_link)}.exposed-nav li.emeryville button:focus,.exposed-nav li.emeryville button:hover{background:0 0;background-color:var(--c_hover);border-color:var(--c_hover-dark)}.header-nav>button .nav-menu-icon{font-size:20px;font-weight:700}.header-nav>button .nav-menu-text{font-size:16px;font-weight:200;margin-left:6px}.header-nav>nav{max-width:90vw;opacity:0;position:absolute;right:-320px;top:40px;transition-duration:.25s;transition-property:opacity,right,visibility;transition-timing-function:ease-in;visibility:hidden;width:320px}.header-nav[aria-expanded=true]>button:not(:hover):not(:active):not(:focus){background-color:oklch(71.2% .346 336.4);border-color:oklch(73.24% .15 336.4);color:#fdfdfd}.header-nav[aria-expanded=true]>nav{opacity:1;right:0;visibility:visible}.header-search .search-container{height:100%}.header-search .search-container label{display:inline-block;padding-bottom:6px;padding-top:6px}.header-search .search-container label:first-of-type{padding-left:8px}.header-search .search-container label:last-of-type{padding-right:8px}.main-columns-wrapper{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;gap:16px;-ms-flex-pack:justify;justify-content:space-between;padding-top:42px}.main-columns-wrapper>aside,body.archive .main-columns-wrapper,body.search .main-columns-wrapper,body:not(.wp-singular) .main-columns-wrapper>main{padding-top:16px}.main-columns-wrapper>main{-ms-flex-positive:1;flex-grow:1}.main-columns-wrapper>aside{display:none;width:25%}.main-columns-wrapper>aside.sticky .sidebar-inner{max-height:calc(100vh - 72px - 34px);position:sticky;top:90px}.main-columns-wrapper>aside .sidebar-inner{background-color:rgba(0,0,0,.25);border-color:oklch(46.6% .111 180.5);border-style:solid;border-width:1px;border-radius:.5em;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:16px 16px 32px}.main-columns-wrapper>aside section:not(:last-child){margin-bottom:3rem}.main-columns-wrapper>aside section:not(:first-child){border-color:oklch(71.5% .234 40.6);border-image-slice:1;border-image-source:linear-gradient(90deg,rgba(67,80,84,0) 0%,#435054 50%,rgba(67,80,84,0) 100%);border-style:solid;border-width:1px 0 0;padding-top:1rem}.main-columns-wrapper>aside .sidebar_header,.main-columns-wrapper>aside h3{font-size:1.25em;line-height:1.375;font-weight:400;margin-top:1.625em;margin-bottom:.5em}.main-columns-wrapper>aside li{list-style:none}.main-columns-wrapper>aside>:first-child .sidebar_header,.main-columns-wrapper>aside>:first-child h3{margin-top:0}.main-columns-wrapper>aside .sidebar_read-more a::after{content:"\edbb";display:inline-block;font-family:icomoon;font-style:normal;font-variant:normal;font-weight:400;margin-left:.375em;text-transform:none;speak:none}.main-columns-wrapper>aside .more-link{margin-top:1rem;text-align:right}.main-columns-wrapper>aside .wp-block-latest-posts li{margin-bottom:2rem}#shadow{background-color:rgba(0,0,0,0);bottom:0;left:0;pointer-events:none;position:absolute;right:0;top:0;transition-duration:.25s;transition-property:background-color;transition-timing-function:ease-in;visibility:hidden;z-index:2}body.shadow-on{overflow:hidden}body.shadow-on footer,body.shadow-on main{filter:blur(2px)}body.shadow-on #shadow{background-color:rgba(0,0,0,.5);cursor:pointer;pointer-events:all;visibility:visible}.listing-page-header{padding-top:58px;width:100%}.listing-page-header .page-title{font-size:1.25rem!important}.listing-page-header .page-title:not(:last-child){margin-bottom:.25em}.listing-page-header .page-title span{font-size:12px!important;color:#979ea0;display:block;font-family:monospace;margin-bottom:.125em}.listing-page-header .page-title strong{display:block;font-weight:500}.listing-page-header p{font-size:.75rem!important}body.error404 .main-columns-wrapper{padding-bottom:48px}.article-card{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;position:relative}@media only screen and (pointer:fine){.main-columns-wrapper>aside .sidebar-inner{background-color:rgba(0,0,0,.5);opacity:.5;transition-duration:.2s;transition-property:opacity}.main-columns-wrapper>aside .sidebar-inner:focus,.main-columns-wrapper>aside .sidebar-inner:focus-within,.main-columns-wrapper>aside .sidebar-inner:hover{opacity:1}}@media only screen and (min-width:412px){.header-logo a{padding-left:16px;padding-right:16px}.header-search .search-container label:first-of-type{padding-left:16px}.header-search .search-container label:last-of-type{padding-right:16px}}@media only screen and (min-width:480px){.header-nav a,.screen-reader-nav a{font-size:1rem;padding:0 16px}.exposed-nav{display:block}.exposed-nav li:first-child{display:block}}@media only screen and (min-width:768px){.exposed-nav li:nth-child(2){display:block}}@media only screen and (min-width:1024px){body{font-size:18px}.inner-wrapper--at-lg{margin-left:auto;margin-right:auto;max-width:1336px;position:relative;width:100%}.total-wrapper>main{padding-top:41px}.exposed-nav li{display:block}.main-columns-wrapper{gap:24px;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding-left:16px;padding-right:16px}.main-columns-wrapper>main{width:75%}.main-columns-wrapper>aside{display:initial}}@media only screen and (min-width:1072px){.sp_horizontal-padding,.sp_padding{padding-left:24px;padding-right:24px}.sp_padding,.sp_vertical-padding{padding-bottom:24px;padding-top:24px}.site-header-secondary a{padding-left:24px;padding-right:24px}.header-logo a{padding-left:24px;padding-right:24px}.header-nav a,.screen-reader-nav a{padding-left:24px;padding-right:24px}.header-search .search-container label:first-of-type{padding-left:24px}.header-search .search-container label:last-of-type{padding-right:24px}.main-columns-wrapper{padding-left:24px;padding-right:24px}}
  </style>

  <link rel="preload" as="style" onload="this.rel='stylesheet'" type="text/css" href="<?php bloginfo('template_url');?>/critical.min.css">
  <noscript>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/critical.min.css">
  </noscript>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!--script async src="https://www.googletagmanager.com/gtag/js?id=G-9NLMGBMZWT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-9NLMGBMZWT');
  </script-->

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="total-wrapper">
  <header class="site-header">

    <section id="site-header-primary" class="site-header-primary">
      <div class="inner-wrapper">

        <?php if ( is_page_template( 'page_campaign-template.php' ) ) : ?>

          <section class="header-logo">
            <a href="/emeryville/" title="Go to the top of the homepage." role="link">
              <svg xmlns="https://www.w3.org/2000/svg" xml:space="preserve" viewBox="1 1.3 249.3 100.9"><title>Corry</title><path d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3a26.3 26.3 0 0 1 19.3-7.9c7.6 0 14 2.7 19.3 8a26.3 26.3 0 0 1 8 18.2H42.8c-.2-3.5-1.6-6.6-4.2-9.2a14 14 0 0 0-10.3-4.2c-4 0-7.5 1.4-10.3 4.2a13.9 13.9 0 0 0-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2A14 14 0 0 0 28.3 56c4 0 7.4-1.5 10.3-4.4 2.5-2.6 3.9-5.8 4.2-9.6h12.8a27.3 27.3 0 0 1-27.3 26.8zm60.6 0c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1a26 26 0 0 1 19.3-8.1 26 26 0 0 1 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3a26.3 26.3 0 0 1-19.3 7.9zm14.5-40.3c0-3.8-1.4-7.2-4.2-10.1a13.7 13.7 0 0 0-10.3-4.3c-4 0-7.5 1.4-10.3 4.3a14.2 14.2 0 0 0-4.2 10.1v13.1c0 3.8 1.4 7.2 4.2 10.1 2.8 2.9 6.2 4.3 10.3 4.3 4 0 7.4-1.4 10.3-4.3 2.8-2.9 4.2-6.3 4.2-10.1V28.5zm46.1-14.4c-4 0-7.5 1.4-10.3 4.2a14 14 0 0 0-4.2 10.3v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26 26 0 0 1 19.3-8.1h9.2v12.8h-9.2zm37.3 0a14.3 14.3 0 0 0-14.5 14.5v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26.1 26.1 0 0 1 19.3-8.1h9.2v12.8h-9.2zm63.5 60.8c0 7.6-2.7 14-8.2 19.3a28 28 0 0 1-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 3-2.8 4.5-6.3 4.5-10.4v-6h-8.7a26 26 0 0 1-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10a14 14 0 0 0 10.3 4.2h8.7V1.3h12.8v73.6z"/></svg>
              <div class="logo-supplement-header"><span class="u_visually-hidden">Corry Frydlewicz</span> for Emeryville<span class="u_visually-hidden"> City Council</span></div>
            </a>
          </section>

          <section class="screen-reader-nav u_visually-hidden">
            <nav>
              <ul>
                <li><a href="#a_skip-to-content">Jump to content</a></li>
                <?php if ( is_singular() ) : ?>
                  <li><a href="#a_end-of-article">Jump to the end of the article</a></li>
                  <?php if ( comments_open() ) : ?>
                    <li><a href="#a_comments_top">Jump to the comments</a></li>
                  <?php endif; ?>
                <?php endif; ?>
                <li><a href="#a_footer">Jump to footer</a></li>
              </ul>
            </nav>
          </section>

          <section class="exposed-nav">
            <nav>
              <ul>
                <li class="issues"><a href="/emeryville/join" tabindex="-1"><button>Issues</button></a></li>
                <li class="donate"><a href="/emeryville/join" title="I will not take your money." tabindex="-1"><button>Donate</button></a></li>
                <li class="join"><a href="/emeryville/join" tabindex="-1"><button>Join Me</button></a></li>
              </ul>
            </nav>
          </section>

          <section class="header-nav">
            <button class="nav-trigger"><span class="nav-menu-icon">☰</span> <span class="nav-menu-text"> Menu</span></button>
            <nav>
              <ul>
                <li><a href="/emeryville">Home</a></li>
                <li><a href="/emeryville/issues">Issues</a></li>
                <li><a href="/emeryville/join">Join Me</a></li>
                <li><a href="/emeryville/about">About Corry</a></li>
                <li><a href="/emeryville/endorsements">Endorsements</a></li>
                <li><a href="/emeryville/press-kit">Press Kit</a></li>
              </ul>
            </nav>
          </section>

        <?php else : ?>

          <section class="header-logo">
            <a href="/" title="Go to the top of the homepage." role="link">
              <?php if ( is_home() ) : ?>
                <h1 class="u_visually-hidden">Corry Frydlewicz's Blog</h1>
              <?php endif; ?>
              <svg xmlns="https://www.w3.org/2000/svg" xml:space="preserve" viewBox="1 1.3 249.3 100.9"><title>Corry</title><path d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3a26.3 26.3 0 0 1 19.3-7.9c7.6 0 14 2.7 19.3 8a26.3 26.3 0 0 1 8 18.2H42.8c-.2-3.5-1.6-6.6-4.2-9.2a14 14 0 0 0-10.3-4.2c-4 0-7.5 1.4-10.3 4.2a13.9 13.9 0 0 0-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2A14 14 0 0 0 28.3 56c4 0 7.4-1.5 10.3-4.4 2.5-2.6 3.9-5.8 4.2-9.6h12.8a27.3 27.3 0 0 1-27.3 26.8zm60.6 0c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1a26 26 0 0 1 19.3-8.1 26 26 0 0 1 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3a26.3 26.3 0 0 1-19.3 7.9zm14.5-40.3c0-3.8-1.4-7.2-4.2-10.1a13.7 13.7 0 0 0-10.3-4.3c-4 0-7.5 1.4-10.3 4.3a14.2 14.2 0 0 0-4.2 10.1v13.1c0 3.8 1.4 7.2 4.2 10.1 2.8 2.9 6.2 4.3 10.3 4.3 4 0 7.4-1.4 10.3-4.3 2.8-2.9 4.2-6.3 4.2-10.1V28.5zm46.1-14.4c-4 0-7.5 1.4-10.3 4.2a14 14 0 0 0-4.2 10.3v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26 26 0 0 1 19.3-8.1h9.2v12.8h-9.2zm37.3 0a14.3 14.3 0 0 0-14.5 14.5v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26.1 26.1 0 0 1 19.3-8.1h9.2v12.8h-9.2zm63.5 60.8c0 7.6-2.7 14-8.2 19.3a28 28 0 0 1-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 3-2.8 4.5-6.3 4.5-10.4v-6h-8.7a26 26 0 0 1-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10a14 14 0 0 0 10.3 4.2h8.7V1.3h12.8v73.6z"/></svg>
            </a>
          </section>

          <section class="screen-reader-nav u_visually-hidden">
            <nav>
              <ul>
                <li><a href="#a_skip-to-content">Jump to content</a></li>
                <?php if ( is_singular() ) : ?>
                  <li><a href="#a_end-of-article">Jump to the end of the article</a></li>
                  <?php if ( comments_open() ) : ?>
                    <li><a href="#a_comments_top">Jump to the comments</a></li>
                  <?php endif; ?>
                <?php endif; ?>
                <li><a href="#a_footer">Jump to footer</a></li>
              </ul>
            <nav>
          </section>

          <section class="exposed-nav">
            <nav>
              <ul>
                <li class="microblog"><a href="/category/microblog/" tabindex="-1"><button>Microblog</button></a></li>
                <li class="emeryville"><a href="/emeryville/" tabindex="-1"><button>for Emeryville</button></a></li>
              </ul>
            </nav>
          </section>

          <section class="header-search">
            <div class="search-container"><?php get_search_form(); ?></div>
          </section>

          <section class="header-nav">
            <button class="nav-trigger"><span class="nav-menu-icon">☰</span> <span class="nav-menu-text"> Menu</span></button>
            <nav><?php wp_nav_menu( array( 'theme-location' => 'primary-site-nav' ) ); ?>
          </section>

        <?php endif; ?>
      </div>
    </section>

    <section id="site-header-secondary" class="site-header-secondary">
      <div class="inner-wrapper">
        <?php if ( is_singular() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up"><?php the_title(); ?></a>
          <?php if ( !empty(get_comments_number()) ) : ?>
            <a id="jump-to-footer" title="Jump to the end of the content" class="i_chat i_arrow-down--after" href="#a_comments_top"><?php echo get_comments_number(); ?><span class="u_visually-hidden">&nbsp;Comments</span></a>
          <?php else : ?>
            <a id="jump-to-footer" title="Jump to the end of the content" class="i_arrow-down" href="#a_end-of-article"><span class="u_visually-hidden">End of Article</span></a>
          <?php endif; ?>
          <div id="article-progress-bar" class="article-progress-bar"></div>
        <?php elseif ( is_category() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up"><span>Category:&nbsp;</span><strong><?php single_cat_title(); ?></strong></a>
        <?php elseif ( is_tag() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up"><span>Tag:&nbsp;</span><strong><?php single_tag_title(); ?></strong></a>
        <?php elseif ( is_search() ) : ?>
          <a title="Jump to the beginning of the page" href="#a_skip-to-content" class="title i_arrow-up"><span>Search:&nbsp;</span><strong><?php echo esc_html($_GET['s']); ?></strong></a>
        <?php else : ?>
          <div class="page-title"><strong>Oops!</strong></div>
          <p>Sorry, I couldn't find what you were looking for. Try a search maybe?</p>
        <?php endif; ?>
      </div>
    </section>

  </header>
<?php // .total-wrapper ends in footer.php ?>
