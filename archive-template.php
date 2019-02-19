<?php
/**
* Template Name: Archive Template
* Template Post Type: page, post, saveti
*/
 get_header(); ?>
<div class="archive-page">
    <?php  include 'template-parts/general-hero.php'; ?>
  <div class="archive-page__content-wrapper">
    <div class="archive-page__content">
      <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
        ?>
    </div>
    <div class="archive-page__content-overlay"></div>
  </div>
  <div class="archive-page__tabs">
    <?php include 'tab-archive.php'; ?>
  </div>
  <div class="archive-page__single-proizvod">
    <div class="archive-page__title-section">
      <h1>PROIZVODI</h1>
    </div>
    <?php  include 'template-parts/one-product.php'; ?>
  </div>
</div>

<?php get_footer(); ?>
