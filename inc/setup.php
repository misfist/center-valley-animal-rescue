<?php

/**
 * Enqueue child styles
 * @return void
 */
function cvar_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'vantage-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'center-valley-animal-rescue-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'vantage-style' )
    );
}
add_action( 'wp_enqueue_scripts', 'cvar_parent_theme_enqueue_styles' );

/**
 * Register sidebars
 * @return void
 */
function cvar_register_sidebars() {
    register_sidebar( array(
        'name' => __( 'Home', 'cvar' ),
        'id' => 'sidebar-home',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cvar_register_sidebars' );
