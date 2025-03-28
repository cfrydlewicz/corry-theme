<?php

function theme_setup() {

  // Enable support for Post Thumbnails
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'featured-large', 1024, 9999, false );
  add_image_size( 'featured-small', 768, 768, true );

  // Let Pages use excerpts
  add_post_type_support( 'page', 'excerpt' );

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


// Exclude Microblogs from Main Loop
add_action( 'pre_get_posts', 'exclude_microblogs' );
function exclude_microblogs( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '-700' );
  }
}


// Remove spaces from front of title
add_filter( 'wp_title', function($title) {
  return trim( $title );
} );

function post_thumbnail() {
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } elseif ( has_category('microblog') ) {
    echo '<img alt="null" src="/wp-content/themes/corry/assets/thumbnail-microblog.jpg">';
  } else {
    echo '<img alt="null" src="/wp-content/themes/corry/assets/thumbnail-default.jpg">';
  }
}

function get_post_thumbnail_url() { // requires $post to be initialized
  $thumbnail = '';
  if (function_exists('has_post_thumbnail')) {
    if ( has_post_thumbnail() ) {
      $post_id = get_queried_object_id();
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), array( 5600,1000 ), false, '' );
      echo $thumbnail[0];
    }
  }
}

function word_count() {
  $post_id = get_queried_object_id();
  $content = get_post_field( 'post_content', $post_id );
  $decode_content = html_entity_decode( $content );
  $filter_shortcode = do_shortcode( $decode_content );
  $strip_tags = wp_strip_all_tags( $filter_shortcode, true );
  $count = str_word_count( $strip_tags );
  echo $count;
}

function list_categories_tags() {
  // list them together, unlinked
  $postcategories = get_the_category();
  if ($postcategories) {
    foreach($posttags as $cat) {
      $list .= $cat->name . ', ';
    }
  }
  $posttags = get_the_tags();
  if ($posttags) {
    foreach($posttags as $tag) {
      $list .= $tag->name . ', ';
    }
  }
  if ($list) {
    // strip off last separator
    $list = preg_replace('/(, (?!.*, ))/', '', $list);
    echo $list;
  }
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
