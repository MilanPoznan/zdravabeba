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

    <section class="home__info">
      <p class="home__info-subtitile"></p>
      <h2 class="home__info-title"></h2>
      <div class="home__info-text"></div>
    </section>
  </div>
  






  
  <?php
  if(have_posts()):
    while(have_posts()): the_post();?>
      <h1><?php the_title();?></h1>
      <div><?php the_content();?></div>
    <?php endwhile;
  endif;
  ?>



<?php
// get_sidebar();
get_footer();
