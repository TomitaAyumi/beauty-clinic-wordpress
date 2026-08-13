<?php
if (!defined('ABSPATH')) exit;

function ayumi_clinic_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
  register_nav_menus(array('global' => 'グローバルメニュー', 'footer' => 'フッターメニュー'));
}
add_action('after_setup_theme', 'ayumi_clinic_setup');

function ayumi_clinic_assets() {
  wp_enqueue_style('ayumi-clinic-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
  wp_enqueue_script('ayumi-clinic-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ayumi_clinic_assets');

function ayumi_clinic_register_case_cpt() {
  register_post_type('case', array(
    'labels' => array('name'=>'症例','singular_name'=>'症例','add_new_item'=>'症例を追加','edit_item'=>'症例を編集'),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug'=>'case'),
    'menu_icon' => 'dashicons-clipboard',
    'supports' => array('title','editor','thumbnail','excerpt'),
    'show_in_rest' => true,
  ));
  register_taxonomy('case_category','case',array(
    'labels'=>array('name'=>'症例カテゴリー'),
    'public'=>true,'hierarchical'=>true,'show_in_rest'=>true,
    'rewrite'=>array('slug'=>'case-category')
  ));
}
add_action('init','ayumi_clinic_register_case_cpt');

function ayumi_clinic_field($key, $fallback='') {
  if (function_exists('get_field')) {
    $value = get_field($key);
    if ($value !== null && $value !== false && $value !== '') return $value;
  }
  $value = get_post_meta(get_the_ID(), $key, true);
  return $value !== '' ? $value : $fallback;
}
