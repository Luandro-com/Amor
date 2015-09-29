<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Header uploader
 */
// function m1_customize_register( $wp_customize ) {
//     $wp_customize->add_setting( 'm1_header' ); // Add setting for Header uploader

//     // Add control for Header uploader (actual uploader)
//     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_header', array(
//         'label'    => __( 'Upload Header Image', 'm1' ),
//         'section'  => 'title_tagline',
//         'settings' => 'm1_header',
//     ) ) );
// }
// add_action( 'customize_register', 'm1_customize_register' );
