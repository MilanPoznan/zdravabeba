<section class="categories">
  <div class="categories__bottom-gray"></div>
  <div class="categories__inner-wrapper">
  <?php
    if(have_rows('overlays')):
      while(have_rows('overlays')): the_row(); 

        $backg_img = get_sub_field('background_image');
        $icon_url = get_sub_field('overlay_icon');
        $title = get_sub_field('overlay_title');
        $text = get_sub_field('overlay_text');
        $text_small = get_sub_field('overlay_text_small');
        $link = get_sub_field('overlay_link');
      ?>
        <div class="categories__single categories__background" style="background-image: url(<?php echo $backg_img; ?>)">
        <div class="categories__overlay"></div>
          <div class="categories__content">
            <div class="categories__icon">
              <img src="<?php echo $icon_url; ?>" alt="">
            </div>
            <p class="categories__title"><?php echo $title; ?></p>
            <p class="categories__text"><?php echo $text; ?></p>
            <p class="categories__small"><?php echo $text_small; ?></p>
            <?php 
              if($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="categories__button" target="<?php echo esc_attr($link_target); ?>">
                <span class="categories__button-title"><?php echo esc_html($link_title); ?></span>
                <span class="categories__button-arrow"></span>
              </a>
            <?php endif; ?>     
          </div>
          <a href="#" class="categories__show-link">
            <span class="categories__show-link-title"><?php echo esc_html($link_title); ?></span>
            <span class="categories__show-link-arrow"></span>
          </a>
        </div>
        
      
    <?php endwhile;
  endif;
  ?>
  </div>
</section>