<?php

/*
*
* @package hypnagogia
*
* THEME SETTINGS PAGE IN ADMIN
*
*/

function hypna_add_admin_page() {
  add_menu_page( 'Hypnagogia Theme Options', 'Hypnagogia', 'manage_options', 'hypnagogia', 'hypna_create_admin_page', 'dashicons-visibility', 110);
}

add_action('admin_menu', 'hypna_add_admin_page');

function hypna_create_admin_page() {
  // GENERATE THEME SETTINGS PAGE IN ADMIN
  echo '<h1>Hypnagogia Theme Settings</h1>';
}