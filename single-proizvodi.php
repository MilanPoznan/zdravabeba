<?php
get_header();
?>
<section class="proizvod">
  <div class="proizvod__single-proizvod">
    <?php  include 'template-parts/one-product.php'; ?>
  </div>
<div class="proizvod__single-proizvod">
  <?php  include 'template-parts/single-product-tab-section.php'; ?>
</div>
<div class="proizvod__single-description">
  <?php the_field('item_description') ?>
</div>
<div class="proizvod__proizvodi-section">
  <?php  include 'template-parts/products-section.php'; ?>
</div>
<div class="proizvod__preporucujemo">
  <h2 class="proizvod__preporucujemo-title">PREPORUČUJEMO</h2>
  <?php get_last_articles('planiranje',  array(8, 9, 10), array('purple', 'yellow', 'orange') ); ?>
</div>
<div class="proizvod__lista-apoteka">
  <?php  include 'template-parts/lista-apoteka.php'; ?>

</div>
</section>
<?php
get_footer();
?>
