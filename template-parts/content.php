<?php
/**
 * The template for content pages
 *
 * @package WordPress
 * @subpackage ZandZ
 * @since Z and Z 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" class="site-content site-content--post" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  <div class="entry-content <?php str_replace('/\s+/', '-', the_title()); ?>">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="zandz-content">' . __( 'Pages:', 'zandz' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article>

<?php get_footer(); ?>
