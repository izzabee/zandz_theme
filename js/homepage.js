(function( $ ) {

  // Only run on homepage
  if (!$('.home-scroll-helper').length) return;

  // Variables and DOM Caching
  var $body = $('body'),
    $scrollHelp = $body.find('.js-scroll-helper')

  // Toggle visible class on scroll
  function hideScrollHelper() {
    if ($( window ).scrollTop() >= 10) {
      $scrollHelp.addClass('is-invisible')
    } else {
      $scrollHelp.removeClass('is-invisible')
    }

    return;
  }

  // Scroll listener
  $(window).on('scroll', function() {
    hideScrollHelper();
  });

})(jQuery);
