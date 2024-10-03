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
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php if (function_exists('the_custom_logo')) :
            the_custom_logo();
          endif; ?>
        </a>
      </div>

      <nav aria-label="Navegação principal">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary', // Nome da localização do menu registrado
          'menu_class' => 'main-menu', // Classe CSS para o menu
        ));

        wp_nav_menu(array(
          'theme_location' => 'social', // Nome da localização do menu registrado
          'menu_class' => 'social-menu', // Classe CSS para o menu
        ));
        ?>


      </nav>
    </div>
  </header>