<section class="products-section">
  <div class="products-section__inner-wrapper">
    <h2 class="products-section__title">Products</h2>
    <div class="products-section__slider">
    <?php 
      $proizvodi = new WP_Query(array(
        'post_type' => 'proizvodi',
        'posts_per_page' => 2
      )); 

      if($proizvodi->have_posts()):
        while($proizvodi->have_posts()): $proizvodi->the_post(); 
    ?>
      <div class="products-section__slider-single">
        <a href="<?php the_permalink(); ?>" class="products-section__image-container">
          <img src="<?php echo get_field('product_image'); ?>" alt="product" class="products-section__image">
        </a>
        
        <div class="products-section__content">
          <p class="products-section__content-title"><?php echo get_field('product_title')?></p>
          <div class="products-section__content-description"><?php echo get_field('product_subtitle')?></div>
          <a href="<?php echo the_permalink(); ?>" class="products-section__button"><span><?php echo get_field('product_cta_text')?></span></a>
        </div>
      </div>

      <?php 
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>