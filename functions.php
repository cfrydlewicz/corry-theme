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

  /* Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'gallery', 'caption'
  ) );

}
add_action( 'after_setup_theme', 'theme_setup' );

function post_thumbnail() {

  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } else {
    echo '<img alt="null" src="'.bloginfo('template_url').'/assets/static/thumbnail-default.jpg">';
  }

}

function get_top_parent($cat){
  $curr_cat = get_category_parents($cat, false, '/' ,true);
  $curr_cat = explode('/',$curr_cat);
  $idObj = get_category_by_slug($curr_cat[0]);
  echo $id = $idObj->term_id;
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

add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
  if (is_single() ) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      $classes[] = 'category-'.$category->category_nicename;
        $parent = $category->category_parent;
        if ( $parent != '' ) {
          $category = &get_category( $parent );
          $classes[] = 'category-'.$category->category_nicename;
          $parent = $category->category_parent;
          if ( $parent != '' ) {
              $category = &get_category( $parent );
              $classes[] = 'category-'.$category->category_nicename;
          }
        }
    }
  }
  return $classes;
}

function word_count() {
  $content = get_post_field( 'post_content', $post->ID );
  $decode_content = html_entity_decode( $content );
  $filter_shortcode = do_shortcode( $decode_content );
  $strip_tags = wp_strip_all_tags( $filter_shortcode, true );
  $count = str_word_count( $strip_tags );
  echo $count;
}

?>
