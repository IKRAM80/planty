<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'	);
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    
	}
	
	register_nav_menus(array(
		'header'=> __('En tete du menu'),
		'footer'=> __('bas de page'),
		'header1'
	)
	);

	function wpc_customize_register($wp_customize) {
		$wp_customize->add_section('wpc_logo_section', array(
				'title'          => __('Logo', 'textdomain'),
				'priority'       => 30,
				'description'    => __('Upload a logo to replace the default site name and description in the header', 'textdomain')
			)
		);
		$wp_customize->add_setting('wpc_logo');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wpc_logo', array(
				'label'      => __('Logo', 'textdomain'),
				'section'    => 'wpc_logo_section',
				'settings'   => 'wpc_logo')
			)
		);
	}
	add_action('customize_register', 'wpc_customize_register');
	
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
		
/* HOOK FILTER */

add_filter('show_admin_bar', '__return_false');

add_filter('wp_nav_menu_items', 'admin_link', 10, 2);


function admin_link($items, $args)
{

    if (is_user_logged_in()) {
        $adminlink = admin_url();
        $siteurl = site_url();
        $items .= '<li class="menu-item"><a href="' . site_url('/nous-rencontrer') . '">Nous rencontrer</a></li>';
        $items .= '<li class="menu-item"><a href="' . $adminlink . '">Admin</a></li>';
        $items .= '<li class="menu-commander"><a href="' . site_url('/commander') . '">Commander</a></li>';
        return $items;

    } else {
        $items .= '<li class="menu-item"><a href="' . site_url('/nous-rencontrer') . '">Nous rencontrer</a></li>';
        $items .= '<li class="menu-commander"><a href="' . site_url('/commander') . '">Commander</a></li>';
        return $items;
    }
}


	
	
	
	
	
	
	
	
	