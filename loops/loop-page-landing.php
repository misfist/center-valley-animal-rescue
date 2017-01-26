<?php
/**
 * Displays
 *
 * @package cvar
 * @since 0.0.4
 * @license GPL 2.0
 */
?>

<?php
/**
 * Loop Name: Landing Page Grid
 */
?>
<?php if( have_posts() ) : $i = 0; ?>

	<div id="vantage-grid-loop" class="vantage-grid-loop grid-loop-columns-<?php echo siteorigin_setting('blog_grid_column_count') ?>">
		<?php while( have_posts() ): the_post(); $i++; ?>
			<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(array('grid-post')) ?>>

				<?php if( has_post_thumbnail() ) : ?>
					<a class="grid-thumbnail" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'thumbnail' ) ?>
					</a>
				<?php elseif( 'attachment' == get_post_type() && wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail') ) : ?>
					<a class="grid-thumbnail" href="<?php the_permalink() ?>">
						<?php echo wp_get_attachment_image( get_the_ID(), 'thumbnail' ); ?>
					</a>
				<?php endif; ?>

				<h3 class="entry-title"><a href="<?php the_permalink() ?>" ref="bookmark">
					<?php echo $post->post_title; ?></a>
				</h3>

			</article><!-- #post-<?php the_ID(); ?> -->
			<?php if($i % siteorigin_setting( 'blog_grid_column_count' ) == 0) : ?><div class="clear"></div><?php endif; ?>
		<?php endwhile; ?>
	</div>

	<?php vantage_content_nav( 'nav-below' ); ?>

<?php endif; ?>
