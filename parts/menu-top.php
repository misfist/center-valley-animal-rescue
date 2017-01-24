<?php
/**
 * Part Name: Header Menu
 */
?>
<div class="top-nav-container">
	<div class="full-container">
		<?php wp_nav_menu( array(
			'theme_location' 	=> 'header',
			'container'			=> 'nav',
			'link_before'		=> '<i class="icon" aria-hidden="true"></i><span class="link-text">',
			'link_after'		=> '</span>',
			'fallback_cb'		=> false,
			'depth'				=> 1
		) ); ?>
	</div>
</div>
