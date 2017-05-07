<?php
/**
 * @package 	WordPress
 * @subpackage 	Center_Valley_Animal_Rescue
 * @version		1.0.0
 */

function pet_rescue_child_enqueue_styles() {
    $parent_style = 'theme-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}

add_action( 'wp_enqueue_scripts', 'pet_rescue_child_enqueue_styles' );
?>
