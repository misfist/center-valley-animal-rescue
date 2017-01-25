<?php
/**
 * Loop Name: Board Member Grid
 */
?>
<?php if( have_posts() ) : $i = 0; ?>

	<div id="vantage-grid-loop" class="vantage-grid-loop grid-loop-columns-<?php echo siteorigin_setting('blog_grid_column_count') ?>">
		<?php while( have_posts() ): the_post(); $i++; ?>
			<article <?php post_class(array('grid-post')) ?>>

				<?php if( has_post_thumbnail() ) : ?>
					<a class="grid-thumbnail" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('vantage-grid-loop') ?>
					</a>
				<?php elseif( 'attachment' == get_post_type() && wp_get_attachment_image_src(get_post_thumbnail_id(), 'vantage-grid-loop') ) : ?>
					<a class="grid-thumbnail" href="<?php the_permalink() ?>">
						<?php echo wp_get_attachment_image( get_the_ID(), 'vantage-grid-loop' ); ?>
					</a>
				<?php endif; ?>

				<h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
				<div class="excerpt">
					<?php $terms = get_the_terms( get_the_ID(), 'role' ); ?>
					<?php echo ( !empty( $terms ) ) ? '<div class="board-member-role">' . $terms[0]->name . '</div>' : ''; ?>
				</div>
			</article>
			<?php if($i % siteorigin_setting( 'blog_grid_column_count' ) == 0) : ?><div class="clear"></div><?php endif; ?>
		<?php endwhile; ?>
	</div>

	<?php vantage_content_nav( 'nav-below' ); ?>

<?php endif; ?>
