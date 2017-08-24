<?php
/**
 * Template Name: Adoptable Pets Listing
 *
 * @package 	Pet Rescue
 * @subpackage 	Center_Valley_Animal_Rescue
 * @version 	1.0.1
 *
 *
 */
 get_header();


 list($cmsms_layout) = cmsms_theme_page_layout_scheme();


 echo '<!--_________________________ Start Content _________________________ -->' . "\n";


 if ($cmsms_layout == 'r_sidebar') {
 	echo '<div class="content entry" role="main">' . "\n\t";
 } elseif ($cmsms_layout == 'l_sidebar') {
 	echo '<div class="content entry fr" role="main">' . "\n\t";
 } else {
 	echo '<div class="middle_content entry" role="main">' . "\n\t";
 }


 if (have_posts()) : the_post();
 	$content_start = substr(get_post_field('post_content', get_the_ID()), 0, 10);


 	if ($cmsms_layout == 'fullwidth' && $content_start === '[cmsms_row') {
 		echo '</div>' .
 		'</section>';
 	}


 	the_content(); ?>

	<!-- <div data-petfinder="aside"></div> -->

	<!-- Container that "main" content will be added to. The text in here will be replaced when the script loads. -->
	<div data-petfinder="main" class="cmsms_profile horizontal">
		<a href="https://awos.petfinder.com/shelters/WA142.html" class="button"><?php _e( 'View All Adoptable Pets', 'cvar' ); ?></a>
	</div>

	<?php

 	echo '<div class="cl"></div>';


 	if ($cmsms_layout == 'fullwidth' && $content_start === '[cmsms_row') {
 		echo '<section class="content_wrap ' . $cmsms_layout .
 		((is_singular('project')) ? ' project_page' : '') .
 		((is_singular('profile')) ? ' profile_page' : '') .
 		'">' . "\n\n" .
 			'<div class="middle_content entry" role="main">' . "\n\t";
 	}


 	wp_link_pages(array(
 		'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'pet-rescue') . ':</strong>',
 		'after' => '</div>' . "\n",
 		'link_before' => ' [ ',
 		'link_after' => ' ] '
 	));


 	comments_template();
 endif;


 echo '</div>' . "\n" .
 '<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


 if ($cmsms_layout == 'r_sidebar') {
 	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" .
 	'<div class="sidebar" role="complementary">' . "\n";

	?>
	<aside data-petfinder="aside" class="pet-filter widget"></aside>
	<?php

 	get_sidebar();

 	echo "\n" . '</div>' . "\n" .
 	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
 } elseif ($cmsms_layout == 'l_sidebar') {
 	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" .
 	'<div class="sidebar fl" role="complementary">' . "\n";

	?>
	<aside data-petfinder="aside" class="pet-filter widget"></aside>
	<?php

 	get_sidebar();

 	echo "\n" . '</div>' . "\n" .
 	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
 }
 ?>

 <script>
	;(function (window, document, undefined) {

		'use strict';

		// Templates
		var allPets =
			'<article class="{{classes}} one_third profile pet-profile" id="pet-{{id}}">'
			+ '<figure class="entry-thumbnail">'
				+ '<img src="{{photo.1.medium}}" class="attachment-blog-masonry-thumb">'
			+ '</figure>'
			+ '<div class="pl_content">'
				+ '<h2 class="entry-title"><a href="{{url.pet}}">{{name}}</a></h2>'
				+ '<div class="pl_subtitle">'
					+ '<strong>{{animal}}</strong> - {{age}}, {{gender}}, {{size}}'
				+ '</div>'
				+ ( typeof description !== 'undefined' ? '<div class="entry-content">{{description}}</div>' : '' )
				+ '<div class="actions"><a href="{{url.pet}}" class="cmsms_button"><?php _e( 'View Full Profile', 'cvar' ); ?></a></div>'
			+ '</div>'
		+ '</article>';

		var onePet =
			'<div class="pet-profile">'
				+ '<div class="actions"><a href="{{url.all}}" class="button">&larr; <?php _e( 'Back to Full List', 'cvar' ); ?></a></div>'
				+ '<article class="{{classes}}" id="pet-{{id}}">'
					+ '<div class="gallery">'
						+ '<a target="_blank" href="{{photo.1.large}}"><img src="{{photo.1.thumbnail.large}}"></a>&nbsp;'
						+ '<a target="_blank" href="{{photo.1.large}}"><img src="{{photo.2.thumbnail.large}}"></a>&nbsp;'
						+ '<a target="_blank" href="{{photo.1.large}}"><img src="{{photo.3.thumbnail.large}}"></a>'
					+ '</div>'
					+ '<div class="entry-content">'
						+ '<h2 class="pet-title">{{name}}</h2>'
						+ '<div class="pl_subtitle">'
							+ '<strong>{{animal}}</strong> - {{age}}, {{gender}}, {{size}}'
						+ '</div>'
						+ '<div>{{options.multi}}</div>'
						+ ( typeof description !== 'undefined' ? '<div class="entry-content">{{description}}</div>' : '' )
					+ '<div class="actions"><a href="/adoption-application/" class="cmsms_button"><?php _e( 'Adoption Application', 'cvar' ); ?></a></div>'
					+ '<div class="actions"><a href="{{url.petfinder}}" class="button cmsms_button" target="_black"><?php _e( 'View Full Profile', 'cvar' ); ?></a></div>'
				+ '</article>'
			+ '</div>'

		var asideAllPets =
		'<h4 class="widget-title"><?php _e( 'Filter by Type', 'cvar' ); ?></h4>' +
		'{{checkbox.animals.toggle}}';

		petfinderAPI.init({
			key: '07b2fb336e04cf44324020aeacfb867a', // Learn more: https://www.petfinder.com/developers/api-key
			shelter: 'WA142',
			templates: {
				allPets: allPets,
				onePet: onePet,
				asideAllPets: asideAllPets,
			},
			callback: function () {
				petfinderSort.init(); // If you want to use the filtering plugin
			}
		});

	})(window, document);
</script>


 <?php
 get_footer();
