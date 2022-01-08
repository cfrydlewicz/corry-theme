<?php

function theme_setup() {

  // Enable support for Post Thumbnails
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1024, 9999 ); // Unlimited height, soft crop

  // Add RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
    'primary' => __( 'Top primary menu' )
  ) );

  // Switch default core markup to HTML5
  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
      'navigation-widgets',
    )
  );

  // Widgets
  add_theme_support( 'widgets' );
  add_theme_support( 'widgets-block-editor' );

}
add_action( 'after_setup_theme', 'theme_setup' );

function post_thumbnail() {

  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } else {
    echo '<img alt="null" src="'.bloginfo('template_url').'/assets/thumbnail-default.jpg">';
  }

}

function get_post_thumbnail_url() { // requires $post to be initialized
  $thumbnail = '';
  if (function_exists('has_post_thumbnail')) {
    if ( has_post_thumbnail() ) {
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      echo $thumbnail[0];
    }
  }
}

function word_count() {
  $content = get_post_field( 'post_content', $post->ID );
  $decode_content = html_entity_decode( $content );
  $filter_shortcode = do_shortcode( $decode_content );
  $strip_tags = wp_strip_all_tags( $filter_shortcode, true );
  $count = str_word_count( $strip_tags );
  echo $count;
}

// SEO Population
function corry_head_meta() {
  global $post;
  // assume homepage
  $metaDesc = "A blog for both personal and professional content.";
  $metaKeys = "Corry Frydlewicz, Corry, Frydlewicz, Corry Blog, CorryArt";
/*
  if ( $is_singular() ) {
    // Articles and Pages
    $metaDesc = $the_excerpt;
    $metaKeys = esc_html( get_the_terms('','','',', ') );
  } elseif ( $is_category() ) {
  if ( $is_category() ) {
    $metaDesc = "Posts labeled "."[CATEGORY]"." from Corry Frydlewicz";
    $metaKeys = "[CATEGORY]".", Corry Frydlewicz, Corry, Frydlewicz";
  } elseif ( $is_tag() ) {
    $metaDesc = "Posts tagged ".single_tag_title()." from Corry Frydlewicz";
    $metaKeys = single_tag_title().", Corry Frydlewicz, Corry, Frydlewicz";
  } elseif ( $is_search() ) {
    $metaDesc = "Search results for ".esc_html($_GET['s'])." from Corry Frydlewicz";
    $metaKeys = esc_html($_GET['s']).", Corry Frydlewicz, Corry, Frydlewicz";
  }
*/
  echo '<meta name="description" content="'.$metaDesc.'"><meta name="keywords" content="'.$metaKeys.'">';
}

function corry_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Single Post Footer', 'corry' ),
    'id'            => 'widget_single-post-footer1',
    'description'   => __( 'Appears beneath single posts.', 'corry' ),
    'before_title'  => '<div class="post-footer_header widget-title">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'corry_widgets_init' );

function corry_comment_reply_text( $link ) {
  $commentAuthor = get_comment_author();
  $link = str_replace( 'Reply', 'Reply to '.$commentAuthor, $link );
  return $link;
}
add_filter( 'comment_reply_link', 'corry_comment_reply_text' );

?>
