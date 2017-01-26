<?php
/**
 * Part Name: Default Masthead
 */
?>
<header id="masthead" class="site-header" role="banner">

	<?php if( is_active_sidebar( 'header-banner') ) : ?>
		<?php dynamic_sidebar( 'header-banner' ); ?>
	<?php endif; ?>

	<?php get_template_part( 'parts/menu', 'top' ); ?>

	<div class="hgroup full-container">

		<div class="site-branding">
			<?php vantage_display_logo(); ?>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<h1 class="site-name"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</a>

		<?php if( is_active_sidebar('sidebar-header') ) : ?>

			<div id="header-sidebar" <?php if( siteorigin_setting('logo_no_widget_overlay') ) echo 'class="no-logo-overlay"' ?>>
				<?php
				// Display the header area sidebar, and tell mobile navigation that we can use menus in here
				add_filter('siteorigin_mobilenav_is_valid', '__return_true');
				dynamic_sidebar( 'sidebar-header' );
				remove_filter('siteorigin_mobilenav_is_valid', '__return_true');
				?>
			</div>

		<?php endif; ?>

	</div><!-- .hgroup.full-container -->

	<?php get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?>

</header><!-- #masthead .site-header -->
