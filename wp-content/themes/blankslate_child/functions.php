<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'	);
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    
	}
	
	register_nav_menus(array(
		'header'=> __('En tete du menu'),
		'footer'=> __('bas de page'),
		
	)
	);

	
/* HOOK FILTER */


add_filter('wp_nav_menu_items', 'add_admin_button', 10, 2);


function add_admin_button($items, $args){
	if (is_user_logged_in() && $args->theme_location == 'header') {
	$admin_link = '<li class="menu-item"><a href="'.site_url().'/wp-admin/">Admin</a></li>';
	$menu_items = explode('</li>', $items);
	$insert_index = 1;
	array_splice($menu_items, $insert_index, 0, $admin_link);
	$items = implode('</li>', $menu_items);
	}
return $items;
}
	
	
	
	
	
	
	
	
	