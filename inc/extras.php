<?php
/**
 * Filter the except length to 25 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function cvar_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'cvar_custom_excerpt_length', 999 );

/**
 * Add Class to Nav Items
 *
 * @since 0.0.2
 *
 * @param  array $classes
 * @param  string $item
 * @return array $classes
 */
function cvar_nav_class( $classes, $item ){
    $item_post_name = $item->post_name;
    if( !empty( $item_post_name ) ) {
        $classes[] = $item_post_name;
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'cvar_nav_class' , 10 , 2 );
