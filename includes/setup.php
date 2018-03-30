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
 * Register Sidebar
 *
 * @since 3.0.0
 *
 * @return void
 */
function cvar_widgets_init() {
  $class = cvar_widget_class( 'site-info' );
  register_sidebar( array(
    'name'          => __( 'Site Info (footer)', 'cvar' ),
    'id'            => 'site-info',
    'description'   => 'Widget area below footer',
    'before_widget'  => '<div id="%1$s" class="footer-widget %2$s ' . $class . '">',
    'after_widget'   => '</div><!-- .footer-widget -->',
    'before_title'   => '<h3 class="widget-title">',
    'after_title'    => '</h3>',
    ) );
  }
  add_action( 'widgets_init', 'cvar_widgets_init' );

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

update_option( 'thumbnail_size_w', 300 );
update_option( 'thumbnail_size_h', 200 );
update_option( 'thumbnail_crop', 1 );


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

/**
 * Count Widgets
 *
 * @param  string $sidebar_name
 * @return string $class
 */
function cvar_widget_class( $sidebar_name ) {
	global $sidebars_widgets;
	$count = count( $sidebars_widgets[$sidebar_name] );

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
		case '4':
			$class = 'four';
			break;
		case '5':
			$class = 'five';
			break;
		case '6':
			$class = 'six';
			break;
		case '7':
			$class = 'seven';
			break;
		case '8':
			$class = 'eight';
			break;
		case '9':
			$class = 'nine';
			break;
		case '10':
			$class = 'ten';
			break;
		default:
			$class = '';
			break;
	}
	return $class;

}
