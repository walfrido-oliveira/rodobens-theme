<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a href="#conteudo" class="skip-link">Pular para o conteúdo principal</a>

  <header>
    <div class="container">
      <div class="site-branding">
        <h1 class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
      </div>

      <nav aria-label="Navegação principal">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary', // Nome da localização do menu registrado
          'menu_class' => 'main-menu', // Classe CSS para o menu
        ));
        ?>
      </nav>
    </div>
  </header>