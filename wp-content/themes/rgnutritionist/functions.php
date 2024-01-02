<?php

/**
 * RG Nutritionist functions and definitions
 *
 * @package RG Nutritionist
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$rg_nutritionist_inc_dir = get_template_directory() . '/inc';

// Array of files to include
$rg_nutritionist_includes = array(
	'/setup.php',
	'/widgets.php',
	'/enqueue.php',
	'/menus.php',
	'/blocks.php',
);

// Include files
foreach ($rg_nutritionist_includes as $file) {
	require_once $rg_nutritionist_inc_dir . $file;
}
