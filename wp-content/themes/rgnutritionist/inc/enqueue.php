<?php

// Styles
function load_styles()
{
	wp_register_style('main-style', get_template_directory_uri() . '/scripts/css/main.css', array(), false, 'all');
	wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'load_styles');
