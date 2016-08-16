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
