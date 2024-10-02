<?php

function rodobems_theme_setup()
{
  register_nav_menus(array(
    'primary' => __('Menu Principal'),
    'footer' => __('Menu do Rodapé'),
  ));
}
add_action('after_setup_theme', 'rodobems_theme_setup');


function rodobems_theme_enqueue_styles()
{
  $theme_version = wp_get_theme()->get('Version');
  $url = defined('WP_DEBUG') && WP_DEBUG ? get_template_directory_uri() . '/assets/css/style.css' : get_template_directory_uri() . '/assets/css/style.min.css';

  $version_string = is_string($theme_version) ? $theme_version : false;
  wp_register_style('main-style-min', $url, array(), $version_string);

  wp_enqueue_style('main-style-min');
}
add_action('wp_enqueue_scripts', 'rodobems_theme_enqueue_styles');
