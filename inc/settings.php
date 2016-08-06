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
