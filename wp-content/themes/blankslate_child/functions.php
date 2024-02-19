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

	
	function your_theme_new_customizer_settings($wp_customize) {
		$wp_customize->add_setting('your_theme_logo');
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
		array(
		'label' => 'Upload Logo',
		'section' => 'title_tagline',
		'settings' => 'your_theme_logo',
		) ) );
		}
		add_action('customize_register', 'your_theme_new_customizer_settings');
	
	
	
	
	
	
	
	
	
	
	
	
	