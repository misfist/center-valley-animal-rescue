<?php
/**
 * Template Name: Pet Listing
 *
 * The template for displaying pet listing
 *
 * @package cvar
 * @since 	0.0.4
 * @license GPL 2.0
 */

get_header(); ?>

<?php
$format = 'json';
$key = '07b2fb336e04cf44324020aeacfb867a';
$shelter = 'WA142';

$base_url = 'https://api.petfinder.com/shelter.getPets?';
$params = http_build_query(
	array(
		'format'    => 'json',
		'key'       => '07b2fb336e04cf44324020aeacfb867a',
		'id'        => 'WA142',
		//'count'     => $options['count'],
		'status'    => 'A',
		'output'    => 'full',
	)
);

// Get API data
$request = wp_remote_get( $base_url . $params );
$response = wp_remote_retrieve_body( $request );
$data = json_decode( $response, true );

echo '<pre>';
var_dump( $data['petfinder']['pets'] );
echo '</pre>';

?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
				<?php comments_template( '', true ); ?>
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
