<?php
/**
 * Loop Name: Widget Loop
 */
?>

<li id="post-<?php the_ID(); ?>" <?php post_class( 'post widget-item' ); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cvar' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"  class="entry-title"><?php the_title(); ?></a>
</li><!-- #post-<?php the_ID(); ?> -->
