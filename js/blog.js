(function( $ ) {

  // Only run on shows page
  if (!$('.entry-content.Shows').length) return;

  // Variables and DOM Caching
  var $body = $('body'),
    $parent = $body.find('.entry-content')
    $h3     = $parent.find('h3'),
    $p1     = $h3.next(),
    $p2     = $h3.next().next()

  // Create wrappering element and append data
  function wrapElements() {
    $h3.before('<div class="entry-section">');
    loopWrapEls($h3)
    loopWrapEls($p1)
    loopWrapEls($p2)

    // If there are an odd number of sections, add an emptry
    // section to the end to complete the grid look
    if ($('.entry-section').length % 2 !== 0) {
      $parent.append('<div class="entry-section">')
    }
  }

  // Loop over elemnts and mount them inside wrapper
  function loopWrapEls(el) {
    el.each(function(){
      var $wrapper = $(this).context.previousElementSibling;
      $(this).appendTo($wrapper)
    })
  }

  $(document).ready(function(){
    wrapElements();
  });

})(jQuery);
