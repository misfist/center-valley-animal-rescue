<?php

function cvar_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'vantage-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'center-valley-animal-rescue-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'vantage-style' )
    );
}
add_action( 'wp_enqueue_scripts', 'cvar_parent_theme_enqueue_styles' );