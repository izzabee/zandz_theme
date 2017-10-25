<?php

function zandz_scripts() {
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/jquery.flexslider.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/jquery.prettyPhoto.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/jquery.zoom.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/photoswipe-ui-default.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/photoswipe-ui.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-vendor', get_theme_file_uri( '/js/vendor/woocommerce.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'zandz-homepage', get_theme_file_uri( '/js/homepage.js' ), array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'zandz_scripts' );

?>
