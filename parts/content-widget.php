<?php
/**
 * Loop Name: Widget
 *
 * @package cvar
 * @since 0.0.4
 */
?>

<article id="#post-<?php the_ID(); ?>" <?php body_class(); ?>>

	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cvar' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"  class="entry-title"><?php the_title(); ?></a>

</article><!-- #post-<?php the_ID(); ?> -->
