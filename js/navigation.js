(function( $ ) {
  // Variables and DOM Caching
  var $body = $('body'),
    $nav    = $body.find('.site-header')
    $btn    = $nav.find('.menu-toggle')
    $navlist= $nav.find('.primary-navigation')
    $form   = $nav.find('.woocommerce-product-search')
    $search = $nav.find('.search-submit')
    $input  = $nav.find('.search-field')

  // Make top nav sticky on scroll
  // desktop only
  function stickyNav() {
    if ('none' === $btn.css( 'display' )) {
      if ($( window ).scrollTop() >= 103) {
        $nav.addClass('is-sticky');
        $form.removeClass('is-active')
      } else {
        $nav.removeClass('is-sticky');
      }

    } else {
      $nav.removeClass('is-sticky');
    }
    return;
  };

  function toggleMobileNav() {
    $navlist.toggleClass('is-closed');

    return;
  };

  // Submit form on search click if filled out
  function toggleSearchbar() {
    if ($form.hasClass('is-active') && !!$input.val().length) {
      $form.submit()
    } else {
      $form.toggleClass('is-active')
    }

    return;
  }

  // On scroll, we want to stick/unstick the navigation.
  $(window).on('scroll', function() {
    stickyNav();
  });

  $(window).on('resize', function() {
    stickyNav();
  })

  $(window).on('load', function() {
    stickyNav();
  })

  // On click reveal mobile nav
  $btn.on('click', function() {
    toggleMobileNav();
  });

  // On hover reveal search
  $search.on('click', function() {
    toggleSearchbar();
  });
})(jQuery);
