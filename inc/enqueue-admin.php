<?php

/*

@package hypnagogia

================================
    ADMIN ENQUEUE FUNCTIONS
================================

*/

function hypna_load_admin_scripts( $hook ){

  if ($hook != 'toplevel_page_hypna') { return; };

  wp_register_style( 'hypna_admin', get_template_directory_uri() . '/assets/css/hypna.admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'hypna_admin' );

  wp_enqueue_media();

  wp_register_script('hypna_admin_script', get_template_directory_uri() . '/assets/js/hypna.admin.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'hypna_admin_script' );
}

add_action( 'admin_enqueue_scripts', 'hypna_load_admin_scripts');