<?php

function rg_nutritionist_widgets_init(){
	register_sidebar(array(
		'name'				=> 'Header Widget',
		'id'				=> 'header_widget',
		'before_widget'		=> '<div class="widget_wrap">',
		'after_widget'		=> '</div>',
		'before_title'		=> '<h3 class="widget_title">',
		'after_title'		=> '</h3>',
	));
}
add_action('widgets_init', 'rg_nutritionist_widgets_init');

?>
