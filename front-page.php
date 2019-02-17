<?php
/**
 *Homepage template
 */

  get_header();
?>
  <div class="home" >

    <!-- Hero Section Start -->
    <section class="home__hero">
      <div class="home__hero-inner-wrapper">
        <div class="home__hero-image" style="background-image: url(<?php echo get_field('hero_image');?>)"></div>

        <div class="home__hero-content-wrapper">
          <h1 class="home__hero-title"><?php echo get_field('hero_title')?></h1>
          <p class="home__hero-subtitle"><?php echo get_field('hero_subtitle')?></p>
          <div class="home__hero-text"><?php echo get_field('hero_text')?></div>
          <?php
            $link = get_field('cta_button');

            if($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="home__hero-link" target="<?php echo esc_attr($link_target); ?>">
              <span class="home__hero-link-title"><?php echo esc_html($link_title); ?></span>
              <span class="home__hero-link-arrow-right"></span>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </section>
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

    <!-- Info Section Start -->
    <div class="home__gray-section">

      <!-- Category Section Start -->
      <?php get_template_part('template-parts/products-section'); ?>
      <!-- Category Section End -->

      <p>test</p>
    </div>
    <!-- Info Section E -->
  </div>

<?php
// get_sidebar();
get_footer();
