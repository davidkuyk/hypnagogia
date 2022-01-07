<?php
/**
 *
 * @package hypnagogia
 * 
 */
?>

<!DOCTYPE html>
<html>
<head>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php
	if ( function_exists('wp_body_open();')) {
		wp_body_open();
	}
?>
<header>
  <div class="site-title-container">
    <a class="site-title" href="/">
      <?php echo get_bloginfo('name'); ?>
    </a>
	  <img class="site-logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="logo" >
  </div>
  <div class="nav-wrapper">
    <nav>
      <?php wp_nav_menu (
        array(
          'menu' => 'primary',
          'theme-location' => 'header-menu',
          'menu_class' => 'navigation',
          'items_wrap' => '<ul class="menu-items">%3$s</ul>'
        )
      );?>
    </nav>
  </div>
</header>