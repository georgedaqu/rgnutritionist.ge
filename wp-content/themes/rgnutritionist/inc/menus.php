<?php

// Register menus
function rg_nutritionist_register_nav_menu(){
	register_nav_menu('header_menu', 'Header Menu');
}
add_action('after_setup_theme', 'rg_nutritionist_register_nav_menu');

?>
