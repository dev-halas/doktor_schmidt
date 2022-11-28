<?php

	if(!defined('THEME_DIR')) {
		define('THEME_DIR',get_theme_root().'/'.get_template().'/');
	}

	if(!defined('THEME_URL')) {
		define('THEME_URL',WP_CONTENT_URL.'/themes/'.get_template().'/');
	}
	
	require_once THEME_DIR.'libs/post-types.php';
	require_once THEME_DIR.'libs/utils.php';
	
	//--------------Register menus--------------//
	if(function_exists('register_nav_menus')) { 
		register_nav_menus (array(
			'main_nav' => 'Menu glowne'
		));
	}

	
	/* -- ACF REGISTER MENU ---*/
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}


?>