jQuery(document).ready(function($) {
  $('body').on('click', '.menu-mobile-toggle', function(e) {
    e.preventDefault();
    toggleMobileMenu();
  });

  $('body').on('click', '.close-container', function(e) {
    e.preventDefault();
    toggleMobileMenu();
  });

  function toggleMobileMenu() {
    $('#nav_mobile').toggle();
    $('#nav_mobile .nav-mobile-container').toggleClass('open');
  }
});
