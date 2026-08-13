<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">LUMINA CLINIC<small>BEAUTY & WELLNESS</small></a>
  <nav class="global-nav">
    <?php wp_nav_menu(array('theme_location'=>'global','container'=>false,'fallback_cb'=>false)); ?>
  </nav>
  <button class="menu-toggle" aria-label="メニュー"><span></span><span></span><span></span></button>
</header>
