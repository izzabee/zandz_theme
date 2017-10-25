<?php
/**
 * The main template file
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

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <aside class="home-scroll-helper">
          <span>Scroll To Explore</span>
          <figure>
            <svg class="animated-svg arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 72 72" enable-background="new 0 0 72 72" xml:space="preserve">
              <g>
                <line fill="none" stroke="#231F20" stroke-width="2.4409" stroke-linecap="round" stroke-miterlimit="10" x1="2.5" y1="5.5" x2="35.8" y2="37.7"/>
                <line fill="none" stroke="#231F20" stroke-width="2.4409" stroke-linecap="round" stroke-miterlimit="10" x1="69.2" y1="5.5" x2="35.8" y2="37.7"/>
              </g>
              <g>
                <line fill="none" stroke="#231F20" stroke-width="2.4409" stroke-linecap="round" stroke-miterlimit="10" x1="2.5" y1="27.6" x2="35.9" y2="59.8"/>
                <line fill="none" stroke="#231F20" stroke-width="2.4409" stroke-linecap="round" stroke-miterlimit="10" x1="69.2" y1="27.6" x2="35.9" y2="59.8"/>
              </g>
            </svg>
          </figure>
        </aside>
        <section class="home-section">
          <div class="home-section__wrapper">
          <a class="large-link link--no-underline" href="/product-category/zzcollection/" title="Go to the Z&Z Collection"><span>Our</span><br /><span>Collection</span></a>
          </div>
        </section>
        <section class="home-section">
          <div class="home-section__wrapper">
            <a class="large-link link--no-underline" href="/our-services" title="Go to Z&Z's Services"><span>Our</span><br /><span>Services</span></a>
          </div>
        </section>
        <section class="home-section">
          <div class="home-section__wrapper">
            <a class="large-link link--no-underline" href="/our-story" title="Go to Z&Z's story"><span>Our</span><br /><span>Story</span></a>
          </div>
        </section>
        <div class="home-social">
          <h2 class="page-title">We're Social at Z&amp;Z!</h2>
          <p>Follow us on <a target="_blank" href="https://www.instagram.com/zwikkerandzacher/" title="Go to Z&Z instagram page">instagram</a> and <a target="_blank" href="https://www.facebook.com/zwikkerandzacher" title="Go to Z&Z facebook page">facebook</a></p>
          <div class="insta-feed" id="insta-feed">
            <!-- Instagram feed here -->
          </div>
        </div>
      <?php endif; ?>

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      // End the loop.
      endwhile;

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>
