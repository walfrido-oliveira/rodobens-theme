<?php

function rodobems_theme_setup()
{
  register_nav_menus(array(
    'primary' => __('Menu Principal'),
    'footer' => __('Menu do Rodapé'),
    'footer_mobile' => __('Menu do Rodapé Mobile'),
    'social'  => __('Redes Sociais'),
    'social-footer'  => __('Redes Sociais Rodapé'),
  ));

  add_theme_support('custom-logo', array(
    'height'      => 48,
    'width'       => 154,
    'flex-height' => true,
    'flex-width'  => true,
  ));

  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'rodobems_theme_setup');

function rodobems_theme_script()
{
  wp_register_script('main-script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);

  wp_enqueue_script('main-script');
}
add_action('wp_enqueue_scripts', 'rodobems_theme_script');


function rodobems_theme_enqueue_styles()
{
  $theme_version = wp_get_theme()->get('Version');
  $url = defined('WP_DEBUG') && WP_DEBUG ? get_template_directory_uri() . '/assets/css/style.css' : get_template_directory_uri() . '/assets/css/style.min.css';

  $version_string = is_string($theme_version) ? $theme_version : false;
  wp_register_style('main-style', $url, array(), $version_string);

  wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'rodobems_theme_enqueue_styles');

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Configurações do Tema',
    'menu_title'    => 'Configurações do Tema',
    'menu_slug'     => 'configuracoes-do-tema',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}

function permitir_svg_no_upload($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'permitir_svg_no_upload');

function permitir_svg_no_editor($data, $file, $filename, $mimes)
{
  if (strpos($filename, '.svg') !== false) {
    $data['ext']  = 'svg';
    $data['type'] = 'image/svg+xml';
  }
  return $data;
}
add_filter('wp_check_filetype_and_ext', 'permitir_svg_no_editor', 10, 4);

function get_breadcrumbs()
{
  global $post;

  echo '<div class="container"><nav class="breadcrumb" aria-label="Breadcrumb"><div class="bg"></div><ol>';

  echo '<li><a href="' . home_url() . '">Home</a></li>';

  if (is_category() || is_single()) {
    if (is_category()) {
      echo '<li>' . single_cat_title('', false) . '</li>';
    }

    if (is_single()) {
      $categories = get_the_category();
      if (!empty($categories)) {
        echo '<li><a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a></li>';
      }
      echo '<li class="current-page" aria-current="page">' . get_the_title() . '</li>';
    }
  }
  elseif (is_page()) {
    if ($post->post_parent) {
      $ancestors = get_post_ancestors($post->ID);
      $ancestors = array_reverse($ancestors);

      foreach ($ancestors as $ancestor) {
        echo '<li><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
      }
    }
    echo '<li class="current-page" aria-current="page">' . get_the_title() . '</li>';
  }
  elseif (is_archive()) {
    echo '<li>' . post_type_archive_title('', false) . '</li>';
  }
  elseif (is_search()) {
    echo '<li>Resultados da pesquisa por: "' . get_search_query() . '"</li>';
  }
  elseif (is_home()) {
    echo '<li>Blog</li>';
  }

  echo '</ol></nav></div>';
}
