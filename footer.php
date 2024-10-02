<footer>
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>

    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer', // Nome da localização do menu, se você tiver um menu no rodapé
        'menu_class' => 'footer-menu', // Classe CSS para o menu do rodapé
      ));
      ?>
    </nav>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>