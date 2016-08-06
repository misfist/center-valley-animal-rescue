<?php
/**
 * Remove parent theme admin menus
 */
function cvar_remove_parent_admin_menus() {
    remove_submenu_page( 'themes.php', 'siteorigin-theme-about' );
    remove_submenu_page( 'themes.php', 'vantage-legacy-settings' );
    remove_submenu_page( 'themes.php', 'tgmpa-install-plugins' );
    remove_submenu_page( 'themes.php', 'so_panels_home_page' );
}
add_action( 'admin_init', 'cvar_remove_parent_admin_menus', 999 );

/**
 * Remove parent theme settings
 * Theme Settings > Logo is duplicative of the native WP `custom-logo`, added in 4.5
 *
 * @uses customize_register
 * @uses remove_section
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/customize_register
 */
function cvar_remove_parent_theme_settings( $wp_customize ) {
    $wp_customize->remove_section( 'theme_settings_logo' );
}
add_action( 'customize_register', 'cvar_remove_parent_theme_settings', 20 );
