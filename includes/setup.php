<?php
/**
 * Setup Functions
 *
 * @package Karuna
 * @subpackage 	Center_Valley_Animal_Rescue
 */

/**
 * Register Menus
 *
 * @since 2.0.0
 */
function cvar_custom_navigation_menus() {

  $locations = array(
    'site-info' => __( 'Site Information Menu', 'cvar' ),
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
  $width = 1020;
  return $width;
}
add_filter( 'karuna_content_width', 'cvar_content_width' );
