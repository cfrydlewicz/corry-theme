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

  <?php if ( is_home() ) {
    $pageTitle = get_bloginfo('name');
  } else if ( !empty(wp_title('', false)) ) {
    $pageTitle = wp_title('', false);
  } else {
    $pageTitle = get_bloginfo('name');
  } ?>
  <title><?php echo $pageTitle; ?></title>
  <meta name="og:title" property="og:title" content="<?php echo $pageTitle; ?>">
  <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
  <meta name="twitter:site" content="@cfrydlewicz">

  <?php if ( is_singular() ) : ?>
    <meta name="og:description" property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="og:type" property="og:type" content="article">
    <meta name="twitter:card" content="summary">
    <?php if ( has_post_thumbnail() ) : ?>
      <meta name="og:image" property="og:image" content="<?php the_post_thumbnail_url(); ?>">
      <meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>">
      <meta name="twitter:image:alt" content="<?php echo get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); ?>">
    <?php else : ?>
      <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_opengraph.jpg">
      <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_twittercard.jpg">
      <meta name="twitter:image:alt" content="Cute illustration of Corry Frydlewicz.">
    <?php endif; ?>
  <?php elseif ( is_category() ) : ?>
    <meta name="og:description" property="og:description" content="Posts labeled <?php echo single_cat_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_tag() ) : ?>
    <meta name="description" content="Posts labeled <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:description" content="Posts tagged <?php echo single_tag_title('', false); ?> from Corry Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php elseif ( is_search() ) : ?>
    <meta name="description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="og:description" property="og:description" content="Search results for <?php echo esc_html($_GET['s']); ?> from Corry Frydlewicz">
    <meta name="og:type" property="og:type" content="website">
  <?php else : ?>
    <meta name="description" content="Personal history, philosophy, reviews, game guides, advice, and petty rants. I've been blogging since my teen years, so a little bit of everything about me."><!-- 150-160 ch -->
    <meta name="og:description" property="og:description" content="Philosophy, reviews, personal drama, advice, rants, and more."><!-- 55-60 ch -->
    <meta name="og:type" property="og:type" content="website">
  <?php endif; ?>

  <?php if ( !is_singular() ) : ?>
    <meta name="og:image" property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_opengraph.jpg">
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/corry_twittercard.jpg">
    <meta name="twitter:image:alt" content="Cute illustration of Corry.">
  <?php endif; ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Press+Start+2P&display=swap" rel="stylesheet">

  <style>/* critical inline CSS 26.06.26 */
*{box-sizing:border-box;max-width:100%}a,abbr,acronym,address,applet,b,big,blockquote,body,caption,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,form,h1,h2,h3,h4,h5,h6,html,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,ul,var{background-repeat:no-repeat;border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{scroll-behavior:smooth}body{line-height:1}embed,iframe,img,video{display:block}table{border-collapse:separate;border-spacing:0}caption,td,th{text-align:left;font-weight:400}button{border-width:0;padding:0}blockquote::after,blockquote::before,q::after,q::before{content:none}blockquote,q{quotes:"" ""}:root{--c_primary:oklch(90.78% 0.153 180.5);--c_secondary:oklch(71.2% 0.346 336.4);--c_accent:oklch(71.5% 0.234 40.6);--c_accent2:oklch(0.93 0.2442 122.83);--c_dark-base:#2e3c41;--c_light-base:#d6f3f0;--c_basetext:#eaecec;--c_link:oklch(90.78% 0.153 180.5);--c_link-dark:oklch(73.24% 0.15 180.5);--c_hover:oklch(71.5% 0.234 40.6);--c_hover-dark:oklch(51.36% 0.169 43.84);--c_active:oklch(71.2% 0.346 336.4);--c_active-dark:oklch(73.24% 0.15 336.4);--c_visited:oklch(73.24% 0.15 180.5);--cmpn_teal:#0e6d5d;--cmpn_darkteal:color-mix(in lab, var(--cmpn_teal) 100%, #000 100%);--cmpn_lightteal:color-mix(in lab, var(--cmpn_teal) 100%, #fff 100%);--cmpn_paleteal:color-mix(in lab, var(--cmpn_teal) 25%, #fff 100%);--cmpn_palerteal:color-mix(in lab, var(--cmpn_teal) 12.5%, #fff 100%);--cmpn_aqua:#46b6a6;--cmpn_seafoam:#cee3dd;--cmpn_orange:#f0874c;--cmpn_darkorange:#9f5d20;--cmpn_lightorange:#f5ab82;--cmpn_purple:#9222ae;--cmpn_darkpurple:#2c2552;--cmpn_link:var(--cmpn_teal);--cmpn_link-dark:var(--cmpn_darkteal);--cmpn_hover:var(--cmpn_aqua);--cmpn_hover-dark:color-mix(in lab, var(--cmpn_aqua) 100%, #000 60%);--cmpn_active:var(--cmpn_orange);--cmpn_active-dark:var(--cmpn_darkorange)}.header-nav>button .nav-menu-text:not(:focus):not(:focus-within),.u_visually-hidden:not(:focus):not(:focus-within){height:1px;left:-10000px;overflow:hidden;position:absolute;top:auto;width:1px}.u_hidden{display:none!important}.f_small{font-size:.875rem!important}.f_smaller{font-size:.75rem!important}.f_smallest{font-size:12px!important}.sp_right_sm{margin-right:.5rem}.sp_right_md{margin-right:1rem}.sp_right_lg{margin-right:1.5rem}.sp_horizontal-padding,.sp_padding{padding-left:16px;padding-right:16px}.sp_padding,.sp_vertical-padding{padding-bottom:16px;padding-top:16px}.u_nowrap{white-space:nowrap}.u_uppercase{text-transform:uppercase}.separator{margin-left:.375em;margin-right:.375em;opacity:.5}.separator:empty::before{content:'•';font-size:1.125;font-weight:500}@font-face{font-display:swap;font-family:icomoon;font-style:normal;font-weight:400;src:url("/wp-content/themes/corry/assets/fonts/icomoon/icomoon.ttf") format("truetype"),url("/wp-content/themes/corry/assets/fonts/icomoon/icomoon.woff") format("woff"),url("/wp-content/themes/corry/assets/fonts/icomoon/icomoon.svg") format("svg")}body{font-family:Montserrat,helvetica,sans-serif;font-size:16px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;position:relative;text-wrap:balance;text-wrap:pretty}.inner-wrapper{margin-left:auto;margin-right:auto;max-width:1336px;position:relative;width:100%}.total-wrapper{min-height:100vh;position:relative}.total-wrapper>main{padding-top:41px}body.wp-singular .total-wrapper>footer{min-height:calc(100vh - 40px)}.site-header{backface-visibility:hidden;left:0;position:fixed;right:0;top:0;z-index:5}.site-header .inner-wrapper{-ms-flex-align:stretch;align-items:stretch;display:-ms-flexbox;display:flex;max-width:1336px;padding-left:0;padding-right:0}.site-header-primary,.site-header-secondary{background-color:#2e3c41}.site-header-primary{background:radial-gradient(ellipse at right top,#2e3c41 0,#253034 100%)}.site-header-primary .inner-wrapper{height:40px}.site-header-secondary{background:linear-gradient(180deg,#171e21,rgba(23,30,33,.75));display:none}.site-header-secondary .inner-wrapper{font-size:.75rem!important;display:-ms-flexbox;display:flex;height:30px;-ms-flex-pack:justify;justify-content:space-between}.site-header-secondary a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;min-width:40px;padding:4px 16px}.site-header-secondary .title{overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.site-header-secondary .title strong{font-weight:600}.header-logo{-ms-flex-positive:1;flex-grow:1}.header-logo a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:100%;padding:4px}.header-logo a:focus{outline-offset:4px;outline-width:2px}.header-logo svg{-ms-flex-item-align:baseline;align-self:baseline;height:150%;max-height:48px}.header-nav,.screen-reader-nav{position:relative}.header-nav ul,.screen-reader-nav ul{display:-ms-flexbox;display:flex;-ms-flex-flow:column wrap;flex-flow:column wrap;height:100%;list-style:none}.header-nav li,.screen-reader-nav li{margin:0}.header-nav li:not(:last-child),.screen-reader-nav li:not(:last-child){margin:0}.header-nav a,.screen-reader-nav a{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:.875rem;font-weight:500;padding-left:8px;padding-right:8px;width:100%}.header-nav>nav,.screen-reader-nav>nav{background-color:#253034;padding:4px 0;z-index:4}.header-nav>nav a,.screen-reader-nav>nav a{border-color:oklch(46.6% .111 180.5);border-left-color:oklch(90.78% .153 180.5);border-style:solid;border-width:0 0 0 4px;padding:8px 16px}.header-nav>nav a:not(:hover):not(:active):not(:focus),.screen-reader-nav>nav a:not(:hover):not(:active):not(:focus){color:#eaecec}.header-nav>nav a:focus,.header-nav>nav a:hover,.screen-reader-nav>nav a:focus,.screen-reader-nav>nav a:hover{border-left-color:oklch(71.5% .234 40.6);color:oklch(71.5% .234 40.6)}.header-nav>nav li li a,.screen-reader-nav>nav li li a{padding-left:32px}.header-nav>nav li li a::before,.screen-reader-nav>nav li li a::before{content:'▸'}.screen-reader-nav>nav{z-index:5}.exposed-nav button,.header-nav>button{border-radius:0;border-width:2px;color:var(--c_link);height:40px;padding:0 12px}.exposed-nav button:not(:hover):not(:active):not(:focus),.header-nav>button:not(:hover):not(:active):not(:focus){background-color:transparent;border-color:transparent;color:var(--c_link)}.exposed-nav button:hover,.header-nav>button:hover{background-color:var(--c_hover);border-color:var(--c_hover-dark);color:#fdfdfd}.exposed-nav{display:none}.exposed-nav ul{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;height:40px}.exposed-nav li{display:none}.exposed-nav li:not(:last-child){margin-bottom:0}.exposed-nav button{border-left-width:2px;border-right-width:2px}.exposed-nav li.emeryville button{background-color:var(--cmpn_paleteal);background:linear-gradient(180deg,var(--cmpn_paleteal) 0,var(--cmpn_lightteal) 100%);border-color:var(--cmpn_paleteal)}.exposed-nav li.emeryville button:not(:hover):not(:active):not(:focus){color:var(--cmpn_link)}.exposed-nav li.emeryville button:focus,.exposed-nav li.emeryville button:hover{background:0 0;background-color:var(--c_hover);border-color:var(--c_hover-dark)}.header-nav>button.nav-trigger{border-left-width:2px;border-right-width:2px}.header-nav>button .nav-menu-icon{font-size:20px;font-weight:700}.header-nav>button .nav-menu-text{font-size:16px;font-weight:200;margin-left:6px}.header-nav>nav{max-width:90vw;opacity:0;position:absolute;right:-320px;top:40px;transition-duration:.25s;transition-property:opacity,right,visibility;transition-timing-function:ease-in;visibility:hidden;width:320px}.header-nav[aria-expanded=true]>button:not(:hover):not(:active):not(:focus){background-color:oklch(71.2% .346 336.4);border-color:oklch(73.24% .15 336.4);color:#fdfdfd}.header-nav[aria-expanded=true]>nav{opacity:1;right:0;visibility:visible}.header-search .search-container{height:100%}.header-search .search-container label{display:inline-block;padding-bottom:6px;padding-top:6px}.header-search .search-container label:first-of-type{padding-left:8px}.header-search .search-container label:last-of-type{padding-right:8px}.main-columns-wrapper{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;gap:16px;-ms-flex-pack:justify;justify-content:space-between;padding-top:42px}.main-columns-wrapper>aside,body.archive .main-columns-wrapper,body.search .main-columns-wrapper,body:not(.wp-singular) .main-columns-wrapper>main{padding-top:16px}.main-columns-wrapper>main{-ms-flex-positive:1;flex-grow:1}.main-columns-wrapper>aside{display:none;width:25%}.main-columns-wrapper>aside .sidebar-inner{background-color:rgba(0,0,0,.25);border-color:oklch(46.6% .111 180.5);border-style:solid;border-width:1px;border-radius:.5em;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:16px 16px 32px}.main-columns-wrapper>aside section:not(:last-child){margin-bottom:2rem}.main-columns-wrapper>aside hr,.main-columns-wrapper>aside section:not(:first-child){border-color:oklch(71.5% .234 40.6);border-image-slice:1;border-image-source:linear-gradient(90deg,rgba(67,80,84,0) 0%,#435054 50%,rgba(67,80,84,0) 100%);border-style:solid;border-width:1px 0 0;padding-top:1rem}.main-columns-wrapper>aside hr{margin-top:3rem}.main-columns-wrapper>aside .sidebar_header,.main-columns-wrapper>aside h3{font-size:1.25em;line-height:1.375;font-weight:400;margin-top:1.625em;margin-bottom:.5em}.main-columns-wrapper>aside p.tags{height:5.5em;max-height:max-content;min-height:2.5em;overflow-y:auto;resize:vertical}.main-columns-wrapper>aside li{list-style:none}.main-columns-wrapper>aside>:first-child .sidebar_header,.main-columns-wrapper>aside>:first-child h3{margin-top:0}.main-columns-wrapper>aside .sidebar_read-more a::after{content:"\edbb";display:inline-block;font-family:icomoon;font-style:normal;font-variant:normal;font-weight:400;margin-left:.375em;text-transform:none;speak:none}.main-columns-wrapper>aside .more-link{margin-top:1rem;text-align:right}.main-columns-wrapper>aside .wp-block-latest-posts li{margin-bottom:2rem}.main-columns-wrapper>aside.sticky .sidebar-inner{-ms-flex-wrap:nowrap;flex-wrap:nowrap;max-height:calc(100vh - 72px - 34px);overflow-y:auto;position:sticky;top:90px}#shadow{background-color:rgba(0,0,0,0);bottom:0;left:0;pointer-events:none;position:absolute;right:0;top:0;transition-duration:.25s;transition-property:background-color;transition-timing-function:ease-in;visibility:hidden;z-index:2}body.shadow-on{overflow:hidden}body.shadow-on footer,body.shadow-on main{filter:blur(2px)}body.shadow-on #shadow{background-color:rgba(0,0,0,.5);cursor:pointer;pointer-events:all;visibility:visible}.listing-page-header{padding-top:58px;width:100%}.listing-page-header .page-title{font-size:1.25rem!important}.listing-page-header .page-title:not(:last-child){margin-bottom:.25em}.listing-page-header .page-title span{font-size:12px!important;color:#979ea0;display:block;font-family:monospace;margin-bottom:.125em}.listing-page-header .page-title strong{display:block;font-weight:500;text-transform:capitalize}.listing-page-header p{font-size:.75rem!important;max-width:75ch}body.error404 .main-columns-wrapper{padding-bottom:48px}.article-card{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;position:relative;width:100%}@media only screen and (pointer:fine){.single .main-columns-wrapper>aside .sidebar-inner{background-color:rgba(0,0,0,.5);opacity:.5;transition-duration:.2s;transition-property:opacity}.single .main-columns-wrapper>aside .sidebar-inner:focus,.single .main-columns-wrapper>aside .sidebar-inner:focus-within,.single .main-columns-wrapper>aside .sidebar-inner:hover{opacity:1}}@media only screen and (min-width:412px){.header-logo a{padding-left:16px;padding-right:16px}.header-search .search-container label:first-of-type{padding-left:16px}.header-search .search-container label:last-of-type{padding-right:16px}}@media only screen and (min-width:480px){.header-nav a,.screen-reader-nav a{font-size:1rem;padding:0 16px}.exposed-nav{display:block}.exposed-nav li:first-child{display:block}}@media only screen and (min-width:640px){.exposed-nav li:nth-child(2){display:block}}@media only screen and (min-width:768px){.exposed-nav li:nth-child(3){display:block}}@media only screen and (min-width:1024px){body{font-size:18px}.inner-wrapper--at-lg{margin-left:auto;margin-right:auto;max-width:1336px;position:relative;width:100%}.total-wrapper>main{padding-top:41px}.exposed-nav li{display:block}.main-columns-wrapper{gap:24px;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding-left:16px;padding-right:16px}.main-columns-wrapper>main{width:75%}.main-columns-wrapper>aside{display:initial}}@media only screen and (min-width:1072px){.sp_horizontal-padding,.sp_padding{padding-left:24px;padding-right:24px}.sp_padding,.sp_vertical-padding{padding-bottom:24px;padding-top:24px}.site-header-secondary a{padding-left:24px;padding-right:24px}.header-logo a{padding-left:24px;padding-right:24px}.header-nav a,.screen-reader-nav a{padding-left:24px;padding-right:24px}.header-search .search-container label:first-of-type{padding-left:24px}.header-search .search-container label:last-of-type{padding-right:24px}.main-columns-wrapper{padding-left:24px;padding-right:24px}}
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
              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Layer_1" x="0" y="0" viewBox="178.48 319.2 255.71 152.57">
                <title>Corry Frydlewicz for Emeryville City Council</title>
                <path d="M283.59 333.76c-13.67 1.51-35.8.16-49.18-3l-35.5-8.39c-13.38-3.16-22.41 5.33-20.06 18.88l18.05 104.06c2.35 13.55 15.47 23.58 29.16 22.3l70.75-6.63c13.69-1.28 35.9-.02 49.36 2.81l35.38 7.44c13.46 2.83 26.72-5.88 29.48-19.35l22.66-110.78c2.76-13.47-6.17-23.26-19.84-21.75z" class="badge"></path>
                <path d="M203.55 363.99h202.64v1H203.55zm0 65.67h202.64v1H203.55z" class="accent"></path>
                <path d="M234.76 421.9c-5.51 0-10.15-1.96-13.99-5.73-3.84-3.84-5.8-8.48-5.8-13.99v-10.22c0-5.44 1.96-10.15 5.8-13.99s8.55-5.73 13.99-5.73c5.51 0 10.15 1.96 13.99 5.8 3.7 3.7 5.58 8.05 5.8 13.19h-9.28c-.15-2.54-1.16-4.78-3.04-6.67-2.03-2.03-4.49-3.04-7.47-3.04-2.9 0-5.44 1.01-7.47 3.04s-3.04 4.49-3.04 7.39v10.22c0 2.9 1.01 5.36 3.04 7.39s4.49 3.04 7.47 3.04c2.9 0 5.36-1.09 7.47-3.19 1.81-1.88 2.83-4.2 3.04-6.96h9.28c-.22 5.36-2.1 9.86-5.73 13.56-3.91 3.93-8.55 5.89-14.06 5.89m43.42 0c-5.51 0-10.15-1.96-13.99-5.73-3.84-3.84-5.8-8.48-5.8-13.99v-10.23c0-5.36 1.96-10 5.8-13.85 3.84-3.91 8.48-5.87 13.99-5.87s10.15 1.96 13.99 5.87 5.8 8.55 5.8 13.85v10.23c0 5.51-1.96 10.15-5.8 13.99s-8.56 5.73-13.99 5.73m10.51-29.96c0-2.75-1.01-5.22-3.04-7.32s-4.49-3.12-7.47-3.12c-2.9 0-5.44 1.01-7.47 3.12-2.03 2.1-3.04 4.57-3.04 7.32v10.23c0 2.75 1.01 5.22 3.04 7.32s4.49 3.12 7.47 3.12c2.9 0 5.36-1.01 7.47-3.12 2.03-2.1 3.04-4.57 3.04-7.32zm32.9-10.06c-2.9 0-5.44 1.01-7.47 3.04s-3.04 4.49-3.04 7.47v29.14h-9.28v-29c0-5.44 1.96-10.15 5.8-14.06s8.48-5.87 13.99-5.87h6.67v9.28zm27.04 0c-2.9 0-5.36 1.01-7.47 3.04-2.03 2.03-3.04 4.49-3.04 7.47v29.14h-9.28v-29c0-5.44 1.96-10.15 5.8-14.06s8.55-5.87 13.99-5.87h6.67v9.28zm46.04 44.08c0 5.51-1.96 10.15-5.94 13.99s-8.84 5.8-14.72 5.8v-9.28c3.26 0 6.02-1.01 8.12-3.12 2.17-2.03 3.26-4.57 3.26-7.54v-4.28h-6.31c-5.51 0-10.15-1.96-13.99-5.87s-5.8-8.55-5.8-13.92V372.6h9.28v29.43c0 2.83 1.01 5.22 3.04 7.25s4.49 3.04 7.47 3.04h6.31V372.6h9.28z" class="name"></path>
                <path d="M215.07 356.6v-10.29h8.06v2.26h-5.14v8.03zm2.69-3.53v-2.25h4.75v2.25zm14.01 3.73c-.81 0-1.57-.13-2.27-.4-.7-.26-1.31-.64-1.82-1.12a5.3 5.3 0 0 1-1.2-1.71c-.29-.65-.43-1.36-.43-2.14 0-.76.14-1.47.43-2.12s.69-1.21 1.2-1.7 1.11-.86 1.81-1.12 1.46-.4 2.28-.4 1.58.13 2.28.4c.7.26 1.3.64 1.81 1.12s.91 1.04 1.2 1.69.43 1.36.43 2.13c0 .78-.14 1.5-.43 2.15-.28.65-.68 1.22-1.2 1.7-.51.48-1.12.85-1.82 1.12-.68.27-1.44.4-2.27.4m0-2.41c.39 0 .76-.07 1.09-.21.34-.14.63-.34.88-.6s.45-.57.59-.93.21-.76.21-1.21-.07-.85-.21-1.21-.34-.67-.59-.93-.54-.46-.88-.6-.7-.21-1.09-.21-.76.07-1.09.21c-.34.14-.63.34-.89.6s-.45.57-.59.93-.21.76-.21 1.21.07.85.21 1.21.33.67.59.93c.25.26.55.46.89.6s.7.21 1.09.21m9.51 2.21v-10.29h4.59c1.51 0 2.67.34 3.47 1.01.8.68 1.21 1.6 1.21 2.78 0 .79-.18 1.47-.55 2.03s-.89.99-1.58 1.29-1.5.45-2.44.45h-3.09l1.31-1.23v3.97h-2.92zm2.91-3.64-1.31-1.35h2.91c.61 0 1.06-.13 1.37-.4.3-.26.46-.64.46-1.12 0-.46-.15-.83-.46-1.09-.3-.27-.76-.4-1.37-.4h-2.91l1.31-1.34zm3.44 3.64-2.56-3.75h3.1l2.57 3.75zm18.42.2q-1.215 0-2.25-.39c-.69-.26-1.28-.63-1.79-1.1-.51-.48-.91-1.04-1.19-1.7s-.43-1.38-.43-2.16.14-1.5.43-2.16.68-1.22 1.19-1.7 1.11-.84 1.79-1.1a6.3 6.3 0 0 1 2.25-.39c.95 0 1.8.16 2.55.49s1.38.81 1.88 1.45l-1.85 1.68c-.33-.39-.7-.69-1.1-.9s-.84-.31-1.32-.31c-.42 0-.81.07-1.16.21s-.65.34-.9.6-.45.57-.59.93-.21.76-.21 1.21.07.84.21 1.21c.14.36.34.67.59.93q.375.39.9.6c.525.21.74.21 1.16.21.48 0 .92-.1 1.32-.31s.77-.51 1.1-.91l1.85 1.68c-.5.64-1.12 1.12-1.88 1.46-.75.3-1.6.47-2.55.47m7.87-.2v-10.29h2.91v10.29zm9.4 0v-7.98h-3.16v-2.31h9.22v2.31h-3.15v7.98zm12 0v-4.35L296 354l-4.62-7.69h3.09l3.31 5.57h-1.76l3.34-5.57h2.82l-4.57 7.69.63-1.75v4.35zm21.49.2q-1.215 0-2.25-.39c-.69-.26-1.28-.63-1.79-1.1-.51-.48-.91-1.04-1.19-1.7s-.43-1.38-.43-2.16.14-1.5.43-2.16.68-1.22 1.19-1.7 1.11-.84 1.79-1.1a6.3 6.3 0 0 1 2.25-.39c.95 0 1.8.16 2.55.49s1.38.81 1.88 1.45l-1.85 1.68c-.33-.39-.7-.69-1.1-.9s-.84-.31-1.32-.31c-.42 0-.81.07-1.16.21s-.65.34-.9.6-.45.57-.59.93-.21.76-.21 1.21.07.84.21 1.21c.14.36.34.67.59.93q.375.39.9.6c.525.21.74.21 1.16.21.48 0 .92-.1 1.32-.31s.77-.51 1.1-.91l1.85 1.68c-.5.64-1.12 1.12-1.88 1.46-.75.3-1.6.47-2.55.47m12.52 0c-.81 0-1.57-.13-2.27-.4-.7-.26-1.31-.64-1.82-1.12a5.3 5.3 0 0 1-1.2-1.71c-.29-.65-.43-1.36-.43-2.14 0-.76.14-1.47.43-2.12s.69-1.21 1.2-1.7 1.11-.86 1.81-1.12 1.46-.4 2.28-.4 1.58.13 2.28.4c.7.26 1.3.64 1.81 1.12s.91 1.04 1.2 1.69.43 1.36.43 2.13c0 .78-.14 1.5-.43 2.15-.28.65-.68 1.22-1.2 1.7-.51.48-1.12.85-1.82 1.12-.68.27-1.44.4-2.27.4m0-2.41c.39 0 .76-.07 1.09-.21.34-.14.63-.34.88-.6s.45-.57.59-.93.21-.76.21-1.21-.07-.85-.21-1.21-.34-.67-.59-.93-.54-.46-.88-.6-.7-.21-1.09-.21-.76.07-1.09.21c-.34.14-.63.34-.89.6s-.45.57-.59.93-.21.76-.21 1.21.07.85.21 1.21.33.67.59.93c.25.26.55.46.89.6s.7.21 1.09.21m14.25 2.41c-1.52 0-2.7-.42-3.55-1.25s-1.27-2.01-1.27-3.53v-5.72h2.91v5.63c0 .87.17 1.5.51 1.88s.82.57 1.43.57 1.08-.19 1.42-.57.51-1.01.51-1.88v-5.63h2.88v5.72c0 1.52-.43 2.7-1.29 3.53s-2.04 1.25-3.55 1.25m9.07-.2v-10.29h2.4l5.66 6.85h-1.13v-6.85h2.85v10.29h-2.4l-5.67-6.85h1.13v6.85zm19.21.2q-1.215 0-2.25-.39c-.69-.26-1.28-.63-1.79-1.1-.51-.48-.91-1.04-1.19-1.7s-.43-1.38-.43-2.16.14-1.5.43-2.16.68-1.22 1.19-1.7 1.11-.84 1.79-1.1a6.3 6.3 0 0 1 2.25-.39c.95 0 1.8.16 2.55.49s1.38.81 1.88 1.45l-1.85 1.68c-.33-.39-.7-.69-1.1-.9s-.84-.31-1.32-.31c-.42 0-.81.07-1.16.21s-.65.34-.9.6-.45.57-.59.93-.21.76-.21 1.21.07.84.21 1.21c.14.36.34.67.59.93q.375.39.9.6c.525.21.74.21 1.16.21.48 0 .92-.1 1.32-.31s.77-.51 1.1-.91l1.85 1.68c-.5.64-1.12 1.12-1.88 1.46-.75.3-1.6.47-2.55.47m7.87-.2v-10.29h2.91v10.29zm7.23 0v-10.29h2.91v7.98h4.9v2.31zm-168.71 87.85c-.48 0-.92-.08-1.33-.23a3.1 3.1 0 0 1-1.77-1.65c-.17-.39-.25-.81-.25-1.28s.08-.89.25-1.28.4-.72.71-1c.3-.28.66-.5 1.06-.65.41-.15.85-.23 1.33-.23.56 0 1.07.1 1.51.29s.81.48 1.11.86l-1.1.99c-.2-.23-.41-.41-.65-.53q-.36-.18-.78-.18-.375 0-.69.12c-.315.12-.39.2-.54.35s-.26.34-.35.55c-.08.21-.13.45-.13.71s.04.5.13.71a1.53 1.53 0 0 0 .89.9q.315.12.69.12.42 0 .78-.18c.24-.12.46-.3.65-.54l1.1.99c-.3.38-.67.66-1.11.86-.45.2-.95.3-1.51.3m7.73 0c-.48 0-.93-.08-1.34-.23-.41-.16-.77-.38-1.07-.67s-.54-.62-.71-1.01-.26-.81-.26-1.27c0-.45.09-.87.26-1.25s.41-.72.71-1c.3-.29.66-.51 1.07-.67s.86-.23 1.35-.23.94.08 1.35.23c.41.16.77.38 1.07.66s.54.62.71 1 .26.8.26 1.26-.08.89-.25 1.27c-.17.39-.4.72-.71 1-.3.28-.66.5-1.07.66-.43.17-.88.25-1.37.25m0-1.43c.23 0 .45-.04.65-.12s.37-.2.52-.35.26-.34.35-.55.13-.45.13-.72-.04-.51-.13-.72c-.08-.21-.2-.39-.35-.55-.15-.15-.32-.27-.52-.35s-.42-.12-.65-.12-.45.04-.65.12-.38.2-.53.35-.27.34-.35.55q-.12.315-.12.72c0 .405.04.51.12.72s.2.39.35.55c.15.15.33.27.53.35s.42.12.65.12m5.95 1.31v-6.09h2.71c.89 0 1.58.2 2.05.6.48.4.71.95.71 1.64q0 .705-.33 1.2c-.22.33-.53.58-.94.76q-.615.27-1.44.27h-1.83l.77-.73v2.35zm1.73-2.15-.77-.8h1.72c.36 0 .63-.08.81-.23s.27-.38.27-.66c0-.27-.09-.49-.27-.65q-.27-.24-.81-.24h-1.72l.77-.79zm2.03 2.15-1.51-2.22h1.84l1.52 2.22zm4.33 0v-6.09h2.71c.89 0 1.58.2 2.05.6.48.4.71.95.71 1.64q0 .705-.33 1.2c-.22.33-.53.58-.94.76q-.615.27-1.44.27h-1.83l.77-.73v2.35zm1.73-2.15-.77-.8h1.72c.36 0 .63-.08.81-.23s.27-.38.27-.66c0-.27-.09-.49-.27-.65q-.27-.24-.81-.24h-1.72l.77-.79zm2.03 2.15-1.51-2.22h1.84l1.52 2.22zm5.78 0v-2.58l.4 1.04-2.73-4.55h1.83l1.96 3.3h-1.04l1.98-3.3h1.67l-2.71 4.55.37-1.04v2.58zm4.98-1.17v-1.11l2.73-3.81h1.79l-2.66 3.81-.82-.24h4.76v1.36h-5.8zm3.22 1.17v-1.17l.05-1.36v-1.04h1.63v3.57zm4.91 0v-6.09h4.77v1.34h-3.07v3.41h3.18v1.34zm1.57-2.46v-1.28h2.83v1.28zm5.93 2.46v-6.09h1.42l2.51 4.14h-.75l2.46-4.14h1.42l.01 6.09h-1.58l-.02-3.68h.27l-1.84 3.08h-.77l-1.89-3.08h.33v3.68zm9.96 0v-6.09h4.77v1.34h-3.07v3.41h3.18v1.34zm1.58-2.46v-1.28h2.83v1.28zm5.92 2.46v-6.09h2.71c.89 0 1.58.2 2.05.6.48.4.71.95.71 1.64q0 .705-.33 1.2c-.22.33-.53.58-.94.76q-.615.27-1.44.27h-1.83l.77-.73v2.35zm1.72-2.15-.77-.8h1.72c.36 0 .63-.08.81-.23s.27-.38.27-.66c0-.27-.09-.49-.27-.65q-.27-.24-.81-.24h-1.72l.77-.79zm2.04 2.15-1.51-2.22h1.84l1.52 2.22zm5.77 0v-2.58l.4 1.04-2.73-4.55h1.83l1.96 3.3h-1.04l1.98-3.3h1.67l-2.71 4.55.37-1.04v2.58zm7.89 0-2.6-6.09h1.85l2.2 5.27h-1.1l2.24-5.27h1.71l-2.61 6.09zm6.32 0v-6.09h1.72v6.09zm4.6 0v-6.09h1.72v4.72h2.9v1.37zm6.97 0v-6.09h1.72v4.72h2.9v1.37zm6.97 0v-6.09h4.77v1.34h-3.07v3.41h3.18v1.34zm1.58-2.46v-1.28h2.83v1.28zm6.62 2.53c-.28 0-.51-.09-.7-.27s-.29-.42-.29-.72c0-.29.1-.52.29-.7s.43-.27.7-.27.51.09.7.27.29.41.29.7c0 .3-.1.54-.29.72s-.43.27-.7.27m6.35.05c-.48 0-.92-.08-1.33-.23a3.1 3.1 0 0 1-1.77-1.65c-.17-.39-.25-.81-.25-1.28s.08-.89.25-1.28.4-.72.71-1c.3-.28.66-.5 1.06-.65.41-.15.85-.23 1.33-.23.56 0 1.07.1 1.51.29s.81.48 1.11.86l-1.1.99c-.2-.23-.41-.41-.65-.53q-.36-.18-.78-.18-.375 0-.69.12c-.315.12-.39.2-.54.35s-.26.34-.35.55c-.08.21-.13.45-.13.71s.04.5.13.71a1.53 1.53 0 0 0 .89.9q.315.12.69.12.42 0 .78-.18c.24-.12.46-.3.65-.54l1.1.99c-.3.38-.67.66-1.11.86-.45.2-.95.3-1.51.3m7.73 0c-.48 0-.93-.08-1.34-.23-.41-.16-.77-.38-1.07-.67s-.54-.62-.71-1.01-.26-.81-.26-1.27c0-.45.09-.87.26-1.25s.41-.72.71-1c.3-.29.66-.51 1.07-.67s.86-.23 1.35-.23.94.08 1.35.23c.41.16.77.38 1.07.66s.54.62.71 1 .26.8.26 1.26-.08.89-.25 1.27c-.17.39-.4.72-.71 1-.3.28-.66.5-1.07.66-.43.17-.88.25-1.37.25m0-1.43c.23 0 .45-.04.65-.12s.37-.2.52-.35.26-.34.35-.55.13-.45.13-.72-.04-.51-.13-.72c-.08-.21-.2-.39-.35-.55-.15-.15-.32-.27-.52-.35s-.42-.12-.65-.12-.45.04-.65.12-.38.2-.53.35-.27.34-.35.55q-.12.315-.12.72c0 .405.04.51.12.72s.2.39.35.55c.15.15.33.27.53.35s.42.12.65.12m5.95 1.31v-6.09h1.42l2.51 4.14h-.75l2.46-4.14h1.42l.01 6.09h-1.58l-.02-3.68h.27l-1.84 3.08h-.77l-1.89-3.08h.33v3.68z" class="text"></path>
              </svg>
              <div class="u_visually-hidden">Corry Frydlewicz for Emeryville City Council</div>
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
                <li class="issues"><a href="/emeryville/issues/" tabindex="-1"><button>Issues</button></a></li>
                <li class="donate"><a href="/emeryville/join/" title="If you're broke too, help in other ways" tabindex="-1"><button>Donate</button></a></li>
                <li class="join"><a href="/emeryville/join/" tabindex="-1"><button>Join Me</button></a></li>
                <li class="about"><a href="/emeryville/about/" tabindex="-1"><button>About Corry</button></a></li>
                <li class="endorse"><a href="/emeryville/endorsements/" tabindex="-1"><button>Endorsements</button></a></li>
                <li class="press"><a href="/emeryville/press-kit/" tabindex="-1"><button>Press Kit</button></a></li>
              </ul>
            </nav>
          </section>

          <section class="header-nav">
            <button class="nav-trigger"><span class="nav-menu-icon">☰</span> <span class="nav-menu-text"> Menu</span></button>
            <nav>
              <ul>
                <li><a href="/emeryville">Home</a></li>
                <li><a href="/emeryville/issues/">Issues</a></li>
                <li><a href="/emeryville/join/">Join Me</a></li>
                <li><a href="/emeryville/about/">About Corry</a></li>
                <li><a href="/emeryville/endorsements/">Endorsements</a></li>
                <li><a href="/emeryville/press-kit/">Press Kit</a></li>
              </ul>
            </nav>
          </section>

        <?php else : ?>

          <section class="header-logo">
            <a href="/" title="Go to the top of the homepage." role="link">
              <?php if ( is_home() ) : ?>
                <h1 class="u_visually-hidden">Corry Frydlewicz's Blog</h1>
              <?php endif; ?>
              <svg xmlns="https://www.w3.org/2000/svg" xml:space="preserve" viewBox="1 1.3 249.3 100.9">
                <title>Corry</title>
                <path d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3a26.3 26.3 0 0 1 19.3-7.9c7.6 0 14 2.7 19.3 8a26.3 26.3 0 0 1 8 18.2H42.8c-.2-3.5-1.6-6.6-4.2-9.2a14 14 0 0 0-10.3-4.2c-4 0-7.5 1.4-10.3 4.2a13.9 13.9 0 0 0-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2A14 14 0 0 0 28.3 56c4 0 7.4-1.5 10.3-4.4 2.5-2.6 3.9-5.8 4.2-9.6h12.8a27.3 27.3 0 0 1-27.3 26.8zm60.6 0c-7.6 0-14-2.7-19.3-7.9-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1a26 26 0 0 1 19.3-8.1 26 26 0 0 1 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3a26.3 26.3 0 0 1-19.3 7.9zm14.5-40.3c0-3.8-1.4-7.2-4.2-10.1a13.7 13.7 0 0 0-10.3-4.3c-4 0-7.5 1.4-10.3 4.3a14.2 14.2 0 0 0-4.2 10.1v13.1c0 3.8 1.4 7.2 4.2 10.1 2.8 2.9 6.2 4.3 10.3 4.3 4 0 7.4-1.4 10.3-4.3 2.8-2.9 4.2-6.3 4.2-10.1V28.5zm46.1-14.4c-4 0-7.5 1.4-10.3 4.2a14 14 0 0 0-4.2 10.3v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26 26 0 0 1 19.3-8.1h9.2v12.8h-9.2zm37.3 0a14.3 14.3 0 0 0-14.5 14.5v40.2h-12.8v-40c0-7.5 2.7-14 8-19.4a26.1 26.1 0 0 1 19.3-8.1h9.2v12.8h-9.2zm63.5 60.8c0 7.6-2.7 14-8.2 19.3a28 28 0 0 1-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 3-2.8 4.5-6.3 4.5-10.4v-6h-8.7a26 26 0 0 1-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10a14 14 0 0 0 10.3 4.2h8.7V1.3h12.8v73.6z"/>
              </svg>
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
