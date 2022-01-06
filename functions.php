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
    echo '<img alt="null" src="'.bloginfo('template_url').'/assets/static/thumbnail-default.jpg">';
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

function corry_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Single Post Footer', 'corry' ),
    'id'            => 'widget_single-post-footer1',
    'description'   => __( 'Appears beneath single posts.', 'corry' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'corry_widgets_init' );

?>
