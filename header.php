<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title("-"); ?></title>
 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a href="#content" class="skip-link">Pular para o conteúdo principal</a>

  <header>
    <div class="container">
      <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          $logo_id = get_field('logo', 'option');
          $logo_mobile_id = get_field('logo_mobile', 'option');

          if( $logo_id ) :
            echo wp_get_attachment_image( $logo_id, 'full', false, array('class' => 'logo', 'alt' => 'Ir para a página inicial') );  
          endif;

          if( $logo_mobile_id ) :
            echo wp_get_attachment_image( $logo_mobile_id, 'full', false, array('class' => 'logo-mobile', 'alt' => 'Ir para a página inicial') );  
          endif;
          ?>
        </a>
      </div>

      <nav aria-label="Navegação principal">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class' => 'main-menu',
        ));

        wp_nav_menu(array(
          'theme_location' => 'social',
          'menu_class' => 'social-menu',
        ));
        ?>

        <button type="button" class="menu-mobile-toggle">
          <span class="icon hamburger"></span>
          <span>Menu</span>
        </button>

      </nav>

      <nav id="nav_mobile" style="display: none;">
        <div class="nav-mobile-container">
            <div class="header">
              <div class="nav-mobile-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php if( $logo_mobile_id ) :
                    echo wp_get_attachment_image( $logo_mobile_id, 'full', false, array('class' => 'logo-mobile') );  
                  endif; ?>
                </a>
              </div>
              <div class="close-container" role="button">
                <span class="icon close"></span>
                <span>Fechar</span>
              </div>
            </div>
            <div class="content">
              <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'main-menu',
              )); ?>
            </div>
            <div class="footer">
              <?php wp_nav_menu(array(
                'theme_location' => 'social',
                'menu_class' => 'social-menu',
              )); ?>
            </div>
          </div>
      </nav>
    </div>
  </header>