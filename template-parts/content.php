<?php
/**
 * The template for home page
 *
 * @package WordPress
 * @subpackage ZandZ
 * @since Z and Z 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" class="site-content--post" <?php post_class(); ?>>
  <?php
    /* translators: %s: Name of current post */
    the_content( sprintf(
      __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zandz' ),
      get_the_title()
    ) );
  ?>
</article>

<?php get_footer(); ?>
