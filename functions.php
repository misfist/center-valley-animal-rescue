<?php

add_action( 'wp_enqueue_scripts', 'karuna_parent_theme_enqueue_styles' );

function karuna_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'karuna-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'centervalley-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'karuna-style' )
    );

}
