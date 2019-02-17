<section class="page-hero">

  <?php if(get_field('page_hero_title')): ?>
  <div class="page-hero__gray-top">
    <h1 class="page-hero__gray-top-title"><?php echo get_field('page_hero_title');?></h1>
  </div>
  <?php endif?>

  <div class="page-hero__background" style="background-image: url(<?php echo get_field('page_hero_background');?>)">

    <div class="page-hero__inner-wrapper">
      <?php
        if(get_field('page_hero_title')): ?>
          <h1 class="page-hero__title"><?php echo get_field('page_hero_title');?></h1>
      <?php endif?>

      <?php
        if(get_field('page_hero_overlay_image')): ?>
          <div class="page-hero__overlay">
            <img src="<?php echo get_field('page_hero_overlay_image'); ?>" alt="overlay image">
          </div>
      <?php endif?>

    </div>

  </div>

</section>
