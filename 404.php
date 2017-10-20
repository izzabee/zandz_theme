<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage ZandZ
 * @since Z and Z 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <section class="error-404 not-found">
        <header class="page-header">
          <h1 class="page-title"><?php _e( 'Oops! That page cannot be found.', 'zandz' ); ?></h1>
        </header>

        <div class="page-content">
          <p><?php _e( 'It looks like nothing was found at this location. Try one of the following links:', 'zandz' ); ?></p>
          <a class="btn type--serif type--large" href="/product-category/zzcollection/" title="Go to the Z&Z Collection">Our Collection</span></a>
          <a class="btn type--serif type--large" href="/our-services" title="Go to Z&Z's Services">Our Services</span></a>
          <a class="btn type--serif type--large" href="/our-story" title="Go to Z&Z's story">Our Story</span></a>
          <br />
          <br />
          <br />
          <p><?php _e( 'Or try searching for a product', 'zandz' ); ?></p>
          <?php get_search_form(); ?>
        </div>
      </section>

    </main>
  </div>


<?php get_footer(); ?>
