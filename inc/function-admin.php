<?php

/*
*
* @package hypnagogia
*
* THEME SETTINGS PAGE IN ADMIN
*
*/

function hypna_add_admin_page() {
	
	//Generate Admin Page
	add_menu_page( 'Hypnagogia Theme Options', 'Hypnagogia', 'manage_options', 'hypna', 'hypna_theme_create_page', 'dashicons-visibility', 1 );
	
	//Generate Admin Sub Pages
	add_submenu_page( 'hypna', 'Hypnagogia Theme Options', 'General', 'manage_options', 'hypna', 'hypna_theme_create_page' );
	add_submenu_page( 'hypna', 'Hypnagogia CSS Options', 'Custom CSS', 'manage_options', 'hypna_css', 'hypna_theme_settings_page' );

  // Activate Custom Settings
  add_action( 'admin_init', 'hypna_custom_settings' );
	
}
add_action( 'admin_menu', 'hypna_add_admin_page' );

function hypna_theme_create_page() {
	require_once( get_template_directory() . '/templates/hypna-admin.php' );
}

function hypna_theme_settings_page() {
	echo '<h1>Custom CSS</h1>';
}

function hypna_custom_settings() {
  register_setting( 'hypna-settings-group', 'first_name' );
  add_settings_section( 'hypna-sidebar-options', 'Sidebar Options', 'hypna_sidebar_options', 'hypna' );
  add_settings_field( 'sidebar-name', 'First Name', 'hypna_sidebar_name', 'hypna', 'hypna-sidebar-options');
}

function hypna_sidebar_options() {
  echo 'Customize Your Sidebar';
}

function hypna_sidebar_name() {
  $firstName = esc_attr( get_option('first_name') );
  echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name" />';
}