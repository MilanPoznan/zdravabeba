<section class="one-product">
  <div class="one-product__wrapp">
    <div class="one-product__content one-product__content--second">
      <div class="one-product__image-wrapp">
        <div class="one-product__image" style="background-image: url('<?php the_field('product_two_image'); ?>')"></div>
      </div>
      <div class="one-product__info one-product__info--second">
        <div class="one-product__title">
          <?php the_field('product_two_title'); ?>
        </div>
        <div class="one-product__subtitle">
          <?php the_field('product_two_subtitle'); ?>
        </div>
        <div class="one-product__text">
          <?php the_field('product_two_description'); ?>
        </div>
        <a href="<?php the_field('product_two_cta_link'); ?>" class="one-product__cta general-cta general-cta--purple">
          <span><?php the_field('product_two_cta_text'); ?></span>
        </a>
      </div>
    </div>
  </div>
</section>