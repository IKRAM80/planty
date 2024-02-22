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
		
		function add_admin_link_to_menu( $items, $args ) {
			// Vérifie si l'utilisateur est connecté
			if ( is_user_logged_in() ) {
				// Ajoute le lien "Admin" à la fin du menu
				$items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
			}
			return $items;
		}
		add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
		
	
	
	
	
	
	
	
	