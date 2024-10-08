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

  $('.projeto-item button').on('click', function () {
    var $button = $(this);
    var expanded = $button.attr('aria-expanded') === 'true';
    var $content = $('#' + $button.attr('aria-controls'));
    var text = expanded ? 'Expandir' : 'Recolher';
    var $text = $button.find('.text');
    $($text).text(text);

    $('.projeto-item button').attr('aria-expanded', 'false');
    $('.projeto-item .projeto-content').css('max-height', 0);
  
    if (!expanded) {
      $button.attr('aria-expanded', 'true');
      $content.css('max-height', ($content[0].scrollHeight + 48) + 'px');
    } else {
      $button.attr('aria-expanded', 'false');
      $content.css('max-height', 0);
    }


  });
  
});
