<section class="products-section">
  <div class="products-section__inner-wrapper">
    <h2 class="products-section__title">Proizvodi</h2>
    <div class="products-section__slider">
    <?php 
      $proizvodi = new WP_Query(array(
        'post_type' => 'proizvodi',
        'posts_per_page' => 3
      )); 

      if($proizvodi->have_posts()):
        while($proizvodi->have_posts()): $proizvodi->the_post(); 
    ?>
      <div class="products-section__slider-single">
        <a href="<?php the_permalink(); ?>" class="products-section__image-container">
          <div class="products-section__image" style="background-image: url('<?php  the_field('product_image'); ?>')"></div>          
        </a>
        
        <div class="products-section__content">
          <p class="products-section__content-title"><?php the_field('product_title')?></p>
          <div class="products-section__content-description"><?php the_field('product_subtitle')?></div>
          <a href="<?php echo the_permalink(); ?>" class="products-section__button"><span><?php the_field('product_cta_text')?></span></a>
        </div>
      </div>

      <?php 
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>