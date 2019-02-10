<?php get_header(); ?>
<div class="archive-page">
  <div class="archive-page__hero"> Hero </div>
  <div class="archive-page__content">
    <?php the_content(); ?>
  </div>
  <div class="archive-page__tabs">
    <?php include 'tab-archive.php'; ?>
  </div>
  <div class="archive-page__last-posts">
    <?php get_last_articles('planiranje', 8 ); ?>
  </div>
</div>

<?php get_footer(); ?>
