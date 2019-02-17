<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zdravabeba
 */

get_header();
?>
  <div class="archive-product"></div>
	
    <?php if ( have_posts() ) : ?>
      <!-- Section Archive-Product Hero -->
      <section class="archive-product__hero">
        <h2 class="archive-product__hero-title">Proizvodi</h2>
      </section>
      <!-- Section Archive-Product Hero End-->
      <!-- Section Archive-Product Content -->      
      <section class="archive-product__content">
        <div class="archive-product__content-inner-wrapper">       
        <?php
          while ( have_posts() ) :
            the_post(); ?>
            <div class="archive-product__content-single">
              <a href="<?php the_permalink(); ?>" class="archive-product__content-single-image-container">
                <img src="<?php echo get_field('product_image'); ?>" alt="product" class="archive-product__content-single-image">
              </a>
              <div class="archive-product__content-single-content">
                <h3 class="archive-product__content-single-title"><?php echo get_field('product_title')?></h3>
                <div class="archive-product__content-single-description"><?php echo get_field('product_subtitle')?></div>
                <a href="<?php the_permalink(); ?>" class="archive-product__content-single-link"><span>Read More</span></a> 
              </div>
            </div>
          <?php endwhile; ?>            
        </div>
      </section>
      <!-- Section Archive Content End -->            
		<?php endif;
    ?>
    

	</div>

<?php
get_footer();
