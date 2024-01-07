<?php
function load_tailwind(){
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/tailwind_output.css', array(), "1.0" );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
}

add_action('wp_enqueue_scripts','load_tailwind');

add_theme_support('menus');


register_nav_menus(
	array(
		'header' => 'Header Location',
		'footer' => 'Footer Location',
	)
);
