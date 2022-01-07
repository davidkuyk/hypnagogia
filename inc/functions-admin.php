<?php

/*

@package hypnagogia
==================================
    THEME SETTINGS PAGE IN ADMIN
==================================
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
  register_setting( 'hypna-settings-group', 'profile_pic' );
  register_setting( 'hypna-settings-group', 'first_name' );
  register_setting( 'hypna-settings-group', 'last_name' );
  register_setting( 'hypna-settings-group', 'user_description' );

  add_settings_section( 'hypna-sidebar-options', 'Sidebar Options', 'hypna_sidebar_options', 'hypna' );

  add_settings_field( 'sidebar-profile-pic', 'Profile Pic', 'hypna_sidebar_profile_pic', 'hypna', 'hypna-sidebar-options');
  add_settings_field( 'sidebar-name', 'Full Name', 'hypna_sidebar_name', 'hypna', 'hypna-sidebar-options');
  add_settings_field( 'sidebar-description', 'Description', 'hypna_sidebar_description', 'hypna', 'hypna-sidebar-options');
}

function hypna_sidebar_options() {
  echo 'Customize Your Sidebar';
}

function hypna_sidebar_profile_pic() {
  $profilePic = esc_attr( get_option('profile_pic') );
  echo '<div class="profile-pic-container">
  <div id="profile-pic-preview" class="profile-pic" style="background-image: url(' . $profilePic . ');"></div>
</div><input type="button" class="button button-secondary" value="Upload Profile Pic" id="upload-button"><input type="hidden" id="profile-pic" name="profile_pic" value="Picture' . $firstName . '" />';
}

function hypna_sidebar_name() {
  $firstName = esc_attr( get_option('first_name') );
  $lastName = esc_attr( get_option('last_name') );
  echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name" /> <input type="text" name="last_name" value="' . $lastName . '" placeholder="Last Name" />';
}

function hypna_sidebar_description() {
  $description = esc_attr( get_option('user_description') );
  echo '<input type="text" name="user_description" value="' . $description . '" placeholder="Description" /><p class="description">Write something about yourself.</p>';
}