<?php

// Theme support
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Remove Wordpres Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove default image sizes
add_image_size('thumbnail', false);
add_image_size('medium', false);
add_image_size('medium_large', false);
add_image_size('large', false);
remove_image_size('1536x1536');
remove_image_size('2048x2048');
// Add custom image sizes
add_image_size('blog-featured', 920, 550, true);
add_image_size('services-listing', 240, 240, true);
add_image_size('portfolio-listing', 330, 185, true);
add_image_size('cv-listing', 90, 90, true);
add_image_size('service-image', 460, 460, true);
// Cropped JPG quality 100%
add_filter('jpeg_quality', function ($arg) {
	return 100;
});
add_filter('big_image_size_threshold', '__return_false');

// Excerpt length
function rg_nutritionist_custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'rg_nutritionist_custom_excerpt_length', 999);
function rg_nutritionist_excerpt_more($more)
{
	return '';
}
add_filter('excerpt_more', 'rg_nutritionist_excerpt_more');

// Pagination
function pagination_bar($custom_query)
{
	$total_pages = $custom_query->max_num_pages;
	$big = 999999999;
	if ($total_pages > 1) {
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'		=> '?paged=%#%',
			'current'		=> $current_page,
			'total'			=> $total_pages,
			'prev_text'		=> __('<em class="fal fa-angle-left"></em>'),
			'next_text'		=> __('<em class="fal fa-angle-right"></em>')
		));
	}
}

// SVG support
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
