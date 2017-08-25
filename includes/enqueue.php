<?php
/**
 * Enqueue Functions
 *
 * @package Karuna
 * @subpackage 	Center_Valley_Animal_Rescue
 */

add_action( 'wp_enqueue_scripts', 'karuna_parent_theme_enqueue_styles' );

/**
 * Enqueue Styles and Scripts
 *
 * @since 2.0.0
 *
 * @uses wp_localize_script()
 *
 * @return void
 */
function karuna_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'karuna-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cvar-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'karuna-style' )
    );

		wp_register_script( 'petfinder-config', get_stylesheet_directory_uri() . '/assets/js/petfinder-config.js', array( 'petfinder-api' ), null, true );

    $petfinder_vars = array(
      'key'       => '07b2fb336e04cf44324020aeacfb867a',
      'shelter'   => 'WA142'
    );

		if( is_page( 'adopt' ) ) {
			wp_enqueue_script( 'petfinder-config' );
      wp_localize_script( 'petfinder-config', 'petfinder_vars', $petfinder_vars );
		}

}
