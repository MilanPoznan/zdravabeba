<?php
/**
 *Homepage template
 */

  get_header();
?>
  <div class="home" >

    <!-- Hero Section Start -->
  <?php
    if( have_rows('hero_repeater') ):

  ?>
    <section class="home__hero">
      <!-- <div class="home__hero-slider"> -->
      <div class="home__hero-arrow home__hero-arrow-prev js-home-arr js-prev-hero-arr" value='prev'></div>
      <div class="home__hero-arrow home__hero-arrow-next js-home-arr js-next-hero-arr" value='next'></div>
      <?php
          while ( have_rows('hero_repeater') ) : the_row();
      ?>
      <div class="home__hero-inner-wrapper js-home-slider" style="background-image: url(<?php echo the_sub_field('hero_image');?>)">
        <?php if (get_sub_field('hero_title') || get_sub_field('hero_subtitle') ): ?>
          <div class="home__hero-overlay"></div>
        <?php endif; ?>
        <div class="home__hero-content-wrapper">
          <h1 class="home__hero-title"><?php the_sub_field('hero_title')?></h1>
          <p class="home__hero-subtitle"><?php the_sub_field('hero_subtitle')?></p>
          <?php
            $link = get_sub_field('cta_button');
            if( $link ) {
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';

          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="home__hero-link" target="<?php echo esc_attr($link_target); ?>">
              <span class="home__hero-link-title"><?php echo esc_html($link_title); ?></span>
              <span class="home__hero-link-arrow-right"></span>
            </a>
          <?php } //endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
      <!-- </div> -->
      <ul class="home__hero-dots"></ul>
    </section>
    <?php endif; ?>
    <!-- Hero Section End -->

    <!-- Info Section Start -->
    <section class="home__info">
      <div class="home__info-inner-wrapper">
        <p class="home__info-subtitle"><?php echo get_field('info_subtitle')?></p>
        <h2 class="home__info-title"><?php echo get_field('info_title')?></h2>
        <div class="home__info-text"><?php echo get_field('info_content')?></div>
      </div>
    </section>
    <!-- Info Section End -->

    <!-- Category Section Start -->
    <?php get_template_part('template-parts/categories-section'); ?>
    <!-- Category Section End -->

    <!-- Gray Section Start -->
    <div class="home__gray-section">

      <!-- Product Section Start -->
      <?php get_template_part('template-parts/products-section'); ?>
      <!-- Peoduct Section End -->

      <!-- 3-articles Section Start -->
      <div class="home__three-articles">
        <h2 class="home__three-articles-title">Preporučujemo</h2>
        <?php get_last_articles('class', array(8, 9, 10), array('purple', 'yellow', 'orange')); ?>
      </div>
      <!-- 3-articles Section End -->

    </div>
    <!-- Gray Section End -->
  </div>

<?php
// get_sidebar();
get_footer();
