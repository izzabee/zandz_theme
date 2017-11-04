(function( $ ) {
  // Only run on product index page
  if (!$('.woocommerce-products-header').length) return;

  // Variables and DOM Caching
  var $body = $('body'),
    $cartegoryList = $body.find('ul.products'),
    $categories = $cartegoryList.find('.product-category')

  function setBackgroundImage() {
    $categories.each(function() {
      var imageUrl = $(this).find('img').attr('src')
      $(this).find('a').css('background-image', `url(${imageUrl})`)
    })
  }

  $(document).ready(function() {
    // add functions here
  });

})( jQuery );
