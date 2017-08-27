<?php
/**
 * Enqueue Functions
 *
 * @package Understrap
 * @subpackage 	Center_Valley_Animal_Rescue
 */


 add_action( 'wp_enqueue_scripts', 'understrap_parent_theme_enqueue_styles' );

 /**
  * Enqueue Styles and Scripts
  *
  * @since 3.0.0
  *
  * @uses wp_localize_script()
  *
  * @return void
  */
 function understrap_parent_theme_enqueue_styles() {
   wp_dequeue_style( 'understrap-styles' );
   wp_deregister_style( 'understrap-styles' );

   wp_dequeue_script( 'understrap-scripts' );
   wp_deregister_script( 'understrap-scripts' );

   $the_theme = wp_get_theme();

   wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
   wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,70', array(), '' );
   wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), false);
   wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

   wp_register_script( 'petfinder-config', get_stylesheet_directory_uri() . '/js/petfinder-config.js', array( 'petfinder-api' ), null, true );

   $petfinder_vars = array(
     'key'       => '07b2fb336e04cf44324020aeacfb867a',
     'shelter'   => 'WA142'
   );

   if( is_page( 'adopt' ) ) {
     wp_enqueue_script( 'petfinder-config' );
     wp_localize_script( 'petfinder-config', 'petfinder_vars', $petfinder_vars );
   }

 }
