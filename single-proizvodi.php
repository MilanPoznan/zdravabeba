<?php
get_header();
?>
<section class="proizvod">
  <div class="proizvod__hero">
    CaO
  </div>
  <div class="proizvod__single-proizvod">
    <?php  include 'template-parts/one-product.php'; ?>
  </div>
<div class="proizvod__single-proizvod">
  <?php  include 'template-parts/single-product-tab-section.php'; ?>
</div>
<div class="proizvod__proizvodi-section">
  <?php  include 'template-parts/products-section.php'; ?>
</div>
<div class="proizvod__preporucujemo">
  <h2>PREPORUCUJEMO</h2>
  <?php get_last_articles('planiranje',  array(8, 9, 10), array('purple', 'yellow', 'orange') ); ?>
</div>
</section>
<?php
get_footer();
?>
