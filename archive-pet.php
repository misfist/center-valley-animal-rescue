<?php
/**
 * The template for displaying Pet pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cvar
 * @since cvar 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<header class="page-header">
			<h1 id="page-title">
				<?php if( siteorigin_page_setting( 'page_title' ) ) : ?>
					<?php _e( 'Our Pets', 'cvar' ); ?>
				<?php endif; ?>
			</h1>
		</header><!-- .page-header -->

		<?php get_template_part( 'loops/loop', get_post_type() ); ?>

	</div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
