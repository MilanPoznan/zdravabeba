<section class="one-product">
  <div class="one-product__wrapp">
    <div class="one-product__content">
      <div class="one-product__image-wrapp">
        <div class="one-product__image" style="background-image: url('<?php the_field('product_image'); ?>')"></div>
      </div>
      <div class="one-product__info">
        <div class="one-product__title">
          <?php the_field('product_title'); ?>
        </div>
        <div class="one-product__subtitle">
          <?php the_field('product_subtitle'); ?>
        </div>
        <div class="one-product__text">
          <?php the_field('product_description'); ?>
        </div>
        <div class="one-product__cta general-cta general-cta--purple">
          <span><?php the_field('product_cta_text'); ?></span>
        </div>
        <?php  include 'lista-apoteka.php'; ?>

      </div>
    </div>
  </div>
</section>
