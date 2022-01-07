<?php
/**
 * 
 * @package hypnagogia
 * 
 */


require get_template_directory() . '/inc/functions-admin.php';
require get_template_directory() . '/inc/enqueue-admin.php';

// REGISTER MENUS

function hypna_register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'hypna_register_my_menus' );

// ENQUEUE STYLES AND SCRIPTS

 function hypna_my_assets() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'hypna_my_assets' );

// REGISTER THEME FEATURES

function hypna_theme_features() {

}

add_action( 'after_setup_theme', 'hypna_theme_features' );