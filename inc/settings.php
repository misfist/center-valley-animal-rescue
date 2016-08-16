<?php
/**
 * Remove parent theme admin menus
 *
 * @uses admin_init
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_init
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

/**
 * Remove parent theme plugin recommendations
 */
function cvar_remove_parent_plugin_recommendations() {
    remove_action( 'tgmpa_register', 'vantage_recommended_plugins' );
}
add_action( 'init', 'cvar_remove_parent_plugin_recommendations' );

/**
 * Remove parent theme attribution
 *
 * @uses vantage_footer_attribution
 * @link https://developer.wordpress.org/reference/functions/add_filter/
 */
function remove_parent_footer_attribution() {
    return '<div id="theme-attribution">Center Valley Animal Rescue is a 501(c)(3) non-profit organization.</div>';
}
add_filter( 'vantage_footer_attribution', '__return_null' );

/**
 * Add Theme Support for Gallery Post Format
 */
function cvar_theme_support() {
    add_theme_support( 'post-formats', array( 'gallery' ) );
}
add_action( 'after_setup_theme', 'cvar_theme_support' );

/**
 * Modify WEN CTA Markup
 *
 * @since 1.0.0
 */
function cvar_modify_default_cta_theme() {

    $output = '';

    $output .= '<div id="{{custom_id}}" class="{{custom_class}} promo">';
    $output .= '<h4 class="promo-subhead">';
    $output .= '{{title}}';
    $output .= '</h4>';
    $output .= '<div class="promo-image">';
    $output .= '{{description}}';
    $output .= '</div>';
    $output .= '<div class="promo-button">';
    $output .= '{{button}}';
    $output .= '</div>';
    $output .= '</div>';

    return $output;

}
add_filter( 'wen_call_to_action_filter_default_cta_theme', 'cvar_modify_default_cta_theme' );
