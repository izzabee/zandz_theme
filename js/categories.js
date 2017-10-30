(function( $ ) {
  // Only run on product index page
  if (!$('.woocommerce-products-header').length) return;

  // Variables and DOM Caching
  var $body = $('body'),
    $cartegoryList = $body.find('ul.products'),
    $categories = $cartegoryList.find('.product-category')

  // Check for # of categories to update product widths
  function dynamicCategoryWidth () {
    if ($categories.length === 4) {
      $cartegoryList.addClass('products--shrink')
    }
  }

  $(document).ready(function() {
    dynamicCategoryWidth();
  });

})( jQuery );
