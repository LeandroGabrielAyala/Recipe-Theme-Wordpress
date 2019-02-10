<?php

function lg_enqueue(){
	wp_register_style( 'lg_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
	wp_register_style( 'lg_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_register_style( 'lg_style', get_template_directory_uri() . '/assets/style.css' );
	wp_register_style( 'lg_dark', get_template_directory_uri() . '/assets/css/dark.css' );
	wp_register_style( 'lg_font_icons', get_template_directory_uri() . '/assets/css/font-icons.css' );
	wp_register_style( 'lg_animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_register_style( 'lg_magnific_popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_register_style( 'lg_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_register_style( 'lg_custom', get_template_directory_uri() . '/assets/css/custom.css' );

	// RTL
	wp_register_style( 'lg_bootstrap_rtl' , get_template_directory_uri() . '/assets/css/bootstrap-rtl.css' );
	wp_register_style( 'lg_style_rtl' , get_template_directory_uri() . '/assets/style-rtl.css' );
	wp_register_style( 'lg_dark_rtl', get_template_directory_uri() . '/assets/css/dark-rtl.css' );
	wp_register_style( 'lg_font_icons_rtl', get_template_directory_uri() . '/assets/css/font-icons-rtl.css' );
	wp_register_style( 'lg_responsive_rtl', get_template_directory_uri() . '/assets/css/responsive-rtl.css' );

	wp_enqueue_style( 'lg_google_fonts' );
	wp_enqueue_style( 'lg_bootstrap' );
	wp_enqueue_style( 'lg_style' );
	wp_enqueue_style( 'lg_dark' );
	wp_enqueue_style( 'lg_font_icons' );
	wp_enqueue_style( 'lg_animate' );
	wp_enqueue_style( 'lg_magnific_popup' );
	wp_enqueue_style( 'lg_responsive' );
	wp_enqueue_style( 'lg_custom' );

	if( is_rtl() ){
		wp_enqueue_style( 'lg_bootstrap_rtl' );
		wp_enqueue_style( 'lg_style_rtl' );
		wp_enqueue_style( 'lg_dark_rtl' );
		wp_enqueue_style( 'lg_font_icons_rtl' );
		wp_enqueue_style( 'lg_responsive_rtl' );
	}

	wp_register_script( 'lg_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true );
	wp_register_script( 'lg_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );

	wp_enqueue_script('jquery' );
	wp_enqueue_script( 'lg_plugins' );
	wp_enqueue_script( 'lg_functions' );

	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}