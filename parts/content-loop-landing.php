<?php?>

<li id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink() ?>" rel="bookmark">

		<?php if( has_post_thumbnail() ) : ?>
			<div class="entry-image">
				<?php the_post_thumbnail( 'large' ) ?>
			</div>
		<?php endif; ?>

		<div class="entry-text">
			<div class="entry-excerpt"><?php the_excerpt(); ?></div>
		</div>
		<h3 class="entry-title"><?php echo $post->post_title; ?></h3>

	</a>

</li><!-- #post-<?php the_ID(); ?> -->
