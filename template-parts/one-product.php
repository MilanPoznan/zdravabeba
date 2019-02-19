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
        <a href="<?php the_field('product_cta_link'); ?>" class="one-product__cta general-cta general-cta--purple">
          <?php the_field('product_cta_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>
