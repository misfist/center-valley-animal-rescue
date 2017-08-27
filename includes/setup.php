<?php
/**
 * Setup Functions
 *
 * @package Understrap
 * @subpackage 	Center_Valley_Animal_Rescue
 */

/**
 * Register Menus
 *
 * @since 2.0.0
 */
function cvar_custom_navigation_menus() {

  $locations = array(
    'site-info'   => __( 'Site Information Menu', 'cvar' ),
    // 'social-menu' => __( 'Social Navigation Menu', 'cvar' ),
  );
  register_nav_menus( $locations );

}
add_action( 'init', 'cvar_custom_navigation_menus' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cvar_content_width() {
  $width = 1040;
  return $width;
}
add_filter( 'understrap_content_width', 'cvar_content_width' );

add_image_size( 'slider', 1200, 480, true );


/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function cvar_body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;

}
add_filter( 'body_class', 'cvar_body_class_for_pages' );