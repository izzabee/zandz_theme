(function( $ ) {
  // Only run on product detail page
  if (!$('.woocommerce-product-gallery').length) return;

  $(document).ready(function() {
    $('.flex-viewport').flexslider();
    $('.woocommerce-product-gallery__image a').zoom({
      magnify: 2
    });
  });

})( jQuery );
