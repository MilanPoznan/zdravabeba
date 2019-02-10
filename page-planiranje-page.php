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
    <?php get_last_articles('planiranje', array(8, 9, 10 ), array('purple', 'yellow', 'orange') ); ?>
  </div>
</div>

<?php get_footer(); ?>
