<?php
/**
 * Template Name: Section Landing
 *
 * @package cvar
 * @since 	0.0.4
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
				<?php comments_template( '', true ); ?>
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

		<?php

		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => 20,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'title'
		 );

		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : ?>

			<ul class="section-index page-list">

		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

		        <?php get_template_part( 'parts/content-loop', 'landing' ); ?>

		    <?php endwhile; ?>

			</ul>

		<?php endif; wp_reset_query(); ?>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>
