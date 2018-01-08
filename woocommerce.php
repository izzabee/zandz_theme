<?php
/**
 * The main template file for product pages
 *
 * This is a custom theme for Z&Z
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ZandZ
 * @since ZandZ 1.0
 */

get_header(); ?>

<main id="main" class="site-main product-detail" role="main">
  <?php woocommerce_content(); ?>
</main><!-- #main -->

<?php get_footer(); ?>
