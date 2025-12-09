<?php
// Override the Core Widgets API in wp-includes/widgets.php

function register_sidebar( $args = array() ) {
  global $wp_registered_sidebars;
  $i = count( $wp_registered_sidebars ) + 1;
  $id_is_empty = empty( $args['id'] );
  $defaults = array(
    /* translators: %d: Sidebar number. */
    'name'           => sprintf( __( 'Sidebar %d' ), $i ),
    'id'             => "sidebar-$i",
    'description'    => '',
    'class'          => '',
    'before_widget'  => '<div class="widget %2$s">',
    'after_widget'   => "</div>\n",
    'before_title'   => '<div class="widgettitle">',
    'after_title'    => "</div>\n",
    'before_sidebar' => '',
    'after_sidebar'  => '',
  );

  $sidebar = wp_parse_args( $args, apply_filters( 'register_sidebar_defaults', $defaults ) );

  if ( $id_is_empty ) {
    _doing_it_wrong(
      __FUNCTION__,
      sprintf(
        /* translators: 1: The 'id' argument, 2: Sidebar name, 3: Recommended 'id' value. */
        __( 'No %1$s was set in the arguments array for the "%2$s" sidebar. Defaulting to "%3$s". Manually set the %1$s to "%3$s" to silence this notice and keep existing sidebar content.' ),
        '<code>id</code>',
        $sidebar['name'],
        $sidebar['id']
      ),
      '4.2.0'
    );
  }

  $wp_registered_sidebars[ $sidebar['id'] ] = $sidebar;
  add_theme_support( 'widgets' );
  do_action( 'register_sidebar', $sidebar );
  return $sidebar['id'];
}
