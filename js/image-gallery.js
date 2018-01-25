(function( $ ) {
  // Only run on product detail page
  if (!$('.woocommerce-product-gallery').length) return;

  // Variables and DOM Caching
  var $body = $('body'),
    $galleryImgs   = $body.find('.woocommerce-product-gallery__image'),
    $imageLinks    = $galleryImgs.find('a'),
    $galleryLength = $galleryImgs.length;


  function setImgWidth() {
    // Do not run if there is only one product image
    if ($galleryLength < 2) return;

    // Filter out first (main) product image
    var $imgs = $galleryImgs.filter(function(x){ return x !== 0 })

    // Set width of gallery images to either 50% or 33% depending on how many there are
    if ($imgs.length % 3 === 0) {
      $imgs.css('width', '33%')
    } else {
      $imgs.css('width', '50%')
    }

    return;
  }

  function openModal(e) {
    e.preventDefault();
    var imgUrl = $(e.currentTarget).attr('href')

    $('body').toggleClass('modal-open')
    $('body').append(modalHtml(imgUrl))

    $('.modal__close').on('click', closeModal)

    return;
  }

  function modalHtml(url) {
    return(
      `<div class='modal js-modal'>
        <img src="${url}" class='modal__img'>
        <span class='modal__close'>CLOSE</span>
      </div>`
    );
  }

  function closeModal(e) {
    $('body').removeClass('modal-open')
    $('.js-modal').remove()

    return;
  }

  $(document).ready(function() {
    setImgWidth()
    $imageLinks.on('click', openModal)
  });

})( jQuery );
