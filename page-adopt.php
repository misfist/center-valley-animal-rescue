<?php
/**
 * Template Name: Adoptable Pets Listing
 * The template for displaying adoptable pets.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Karuna
 * @subpackage 	Center_Valley_Animal_Rescue
 */

get_header(); ?>

	<aside data-petfinder="aside" class="pet-filter widget"></aside>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<div data-petfinder="main" class="grid">
				<!-- Required -->
				<!-- Main pet content will be generated here -->
				<a href="https://awos.petfinder.com/shelters/WA142.html"><?php _e( 'View our adoptable pets on Petfinder.', 'cvar' ); ?></a>
			</div>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
?>
