<?php
/**
 * The template for home page
 *
 * @package WordPress
 * @subpackage ZandZ
 * @since Z and Z 1.0
 */

get_header(); ?>


<section class="home-section">
  <div class="home-section__wrapper">
  <a class="large-link" href="/product-category/zzcollection/" title="Go to the Z&Z Collection"><span>Our</span><br /><span>Collection</span></a>
  </div>
</section>
<section class="home-section">
  <div class="home-section__wrapper">
    <a class="large-link" href="/our-services" title="Go to Z&Z's Services"><span>Our</span><br /><span>Services</span></a>
  </div>
</section>
<section class="home-section">
  <div class="home-section__wrapper">
    <a class="large-link" href="/our-story" title="Go to Z&Z's story"><span>Our</span><br /><span>Story</span></a>
  </div>
</section>
<div class="home-social">
  <h2 class="page-title">We're Social at Z&amp;Z!</h2>
  <p>Follow us on <a target="_blank" href="https://www.instagram.com/zwikkerandzacher/" title="Go to Z&Z instagram page">instagram</a> and <a target="_blank" href="https://www.facebook.com/zwikkerandzacher" title="Go to Z&Z facebook page">facebook</a></p>
  <div class="insta-feed" id="insta-feed">
    <!-- Instagram feed here -->
  </div>
</div>

<?php get_footer(); ?>
