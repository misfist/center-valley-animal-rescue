<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cvar
 * @since 0.0.5
 * @license GPL 2.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<header class="page-header">
			<h1 id="page-title"><?php if( siteorigin_page_setting( 'page_title' ) ) { echo vantage_get_archive_title(); } ?></h1>
		</header><!-- .page-header -->

		<?php get_template_part( 'loops/loop', get_post_type() ); ?>

	</div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
