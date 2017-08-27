<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper" id="wrapper-static-hero">

		<?php dynamic_sidebar( 'statichero' ); ?>

	</div><!-- #wrapper-static-hero -->

<?php endif; ?>
