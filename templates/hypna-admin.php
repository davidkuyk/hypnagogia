<?php
/*
*
* GENERAL OPTIONS PAGE IN ADMIN THEME SETTINGS
*
*/
?>

<h1>Hypnagogia Theme General Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
  <?php settings_fields( 'hypna-settings-group'); ?>
  <?php do_settings_sections('hypna'); ?>
  <?php submit_button(); ?>
</form>