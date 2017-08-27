<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php wp_nav_menu(
							array(
								'theme_location'  => 'site-info',
								'fallback_cb'     => '',
								'menu_id'         => 'site-info',
							)
						); ?>

						<?php if ( is_active_sidebar( 'site-info' ) ) : ?>

							<div class="site-info-widgets">

								<!-- ******************* The Site Info Widget Area ******************* -->

									<?php dynamic_sidebar( 'site-info' ); ?>

							</div>

						<?php endif; ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
