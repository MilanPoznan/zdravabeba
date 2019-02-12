<?php get_header(); ?>
<div class="archive-page">
  <div class="archive-page__hero"> Hero </div>
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

</div>

<?php get_footer(); ?>
