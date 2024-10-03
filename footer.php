<footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="site-branding">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            $logo_footer_id = get_field('logo_footer', 'option');
            $logo_footer_mobile_id = get_field('logo_footer_mobile', 'option');

            if ($logo_footer_id) :
              echo wp_get_attachment_image($logo_footer_id, 'full', false, array('class' => 'logo-footer'));
            endif;

            if ($logo_footer_mobile_id) :
              echo wp_get_attachment_image($logo_footer_mobile_id, 'full', false, array('class' => 'logo-footer-mobile'));
            endif;
            ?>
          </a>
        </div>
        <div class="address">
          <?php the_field('address', 'option') ?>
        </div>
      </div>
      <div class="col" id="footer_nav">
        <nav>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'footer-menu',
          )); 
          wp_nav_menu(array(
            'theme_location' => 'footer_mobile',
            'menu_class' => 'footer-menu-mobile',
          )); 
          ?>
        </nav>
      </div>
      <div class="col" id="social_footer_nav">
        <?php wp_nav_menu(array(
          'theme_location' => 'social-footer',
          'menu_class' => 'footer-social-menu',
        ));
        ?>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col copyright">
        <?php the_field('copyright', 'option') ?>
      </div>
      <hr class="mobile-only">
      <div class="col dev">
        <?php the_field('dev', 'option') ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>