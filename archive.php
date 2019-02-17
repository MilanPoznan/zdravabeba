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
  <div class="archive"></div>
	
    <?php if ( have_posts() ) : ?>
      <!-- Section Archive Hero -->
      <section class="archive__hero">
        <h2 class="archive__hero-title"><?php single_cat_title(); ?></h2>
        <div class="archive__hero-dropdown">
          <button class="archive__hero-dropdown-btn">Filter</button>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'category_menu',
              'menu_id'        => 'cat-menu',
              'container'      => '',
              'menu_class'     => 'archive__hero-dropdown-content'
            ) );
          ?>
        </div>
      </section>
      <!-- Section Archive Hero End-->
      <!-- Section Archive Content -->      
      <section class="archive__content">
        <div class="archive__content-inner-wrapper">
        <!-- Top Pagination -->
        <div class="archive__pagination archive__pagination--top">
            <?php echo paginate_links(array(
              'prev_next'          => true,
              'prev_text'          => __('<span class="prev-inner"></span>'),
              'next_text'          => __('<span class="next-inner"></span>'),
            )); ?>
        </div>
        <!-- Top Pagination End -->   
        <!-- Content -->        
        <?php
          while ( have_posts() ) :
            the_post(); ?>
            <div class="archive__content-single">
              <div class="archive__content-single-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>
              <div class="archive__content-single-content">
                <h3 class="archive__content-single-title"><?php the_title(); ?></h3>
                <div class="archive__content-single-excerpt"><?php echo wp_trim_words(get_the_content(), 14);?></div>
                <a href="<?php the_permalink(); ?>" class="archive__content-single-link">Read More</a>
              </div>
            </div>
          <?php endwhile; ?>
          <!-- Content End -->        
          <!-- Bottom Pagination -->          
          <div class="archive__pagination archive__pagination--bottom">
            <?php echo paginate_links(array(
              'prev_next'          => true,
              'prev_text'          => __('<span class="prev-inner"></span>'),
              'next_text'          => __('<span class="next-inner"></span>'),
            )); ?>
          </div>
          <!-- Bottom Pagination End-->          
        </div>
      </section>
      <!-- Section Archive Content End -->            
		<?php endif;
    ?>
    

	</div>

<?php
get_footer();
