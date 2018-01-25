<?php

function zandz_scripts() {
  wp_enqueue_script( 'zandz-flexslider', get_theme_file_uri( '/js/vendor/jquery.flexslider.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-zoom', get_theme_file_uri( '/js/vendor/jquery.zoom.js' ), array( 'jquery' ), '1.0', true );
  // wp_enqueue_script( 'zandz-woocommerce', get_theme_file_uri( '/js/vendor/woocommerce.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-products', get_theme_file_uri( '/js/products.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-gallery', get_theme_file_uri( '/js/image-gallery.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-categories', get_theme_file_uri( '/js/categories.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-homepage', get_theme_file_uri( '/js/homepage.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-blog', get_theme_file_uri( '/js/blog.js' ), array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'zandz_scripts' );

// Woocommerce wishlist button override
function skyverge_change_empty_cart_button_url() {
  // return get_site_url();
  return '/product-category/zzcollection/';
}

add_image_size( 'zandz-featured-image', 2000, 1200, false );

add_filter( 'woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url' );

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() { add_theme_support( 'woocommerce' ); }

?>
