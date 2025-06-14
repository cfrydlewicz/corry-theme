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

  <style>/* critical inline CSS <!--THEME VERSION--> */
<!--INJECT CRITICAL INLINE CSS HERE -->
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
                <li class="issues"><a href="/emeryville/issues/" tabindex="-1"><button>Issues</button></a></li>
                <li class="donate"><a href="/emeryville/join/" title="I will not take your money." tabindex="-1"><button>Donate</button></a></li>
                <li class="join"><a href="/emeryville/join/" tabindex="-1"><button>Join Me</button></a></li>
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
