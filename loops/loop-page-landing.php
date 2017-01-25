<?php
/**
 * Displays
 *
 * @package cvar
 * @since 0.0.4
 * @license GPL 2.0
 */
?>

<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink() ?>" rel="bookmark">

		<?php if( has_post_thumbnail() ) : ?>
			<div class="entry-image">
				<?php the_post_thumbnail( 'large' ) ?>
			</div>
		<?php endif; ?>
		<h3 class="entry-title"><?php echo $post->post_title; ?></h3>

	</a>

</article><!-- #post-<?php the_ID(); ?> -->
