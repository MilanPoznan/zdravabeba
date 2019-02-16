<section class="testimonials wrapper general">
  <div class="testimonial">
    <div class="testimonial__image">
      <img src="<?php echo get_field('testimonial_image'); ?>" alt="Testimonial img">
    </div>

    <div class="testimonial__content">
      <h5 class="testimonial__title"><?php echo get_field('testimonial_title'); ?></h5>
      <a class="testimonial__link" href="<?php echo get_field('testimonial_link'); ?>"><?php echo get_field('testimonial_link'); ?></a>
      <div class="testimonial__text">
        <?php echo get_field('testimonial_text'); ?>
      </div>
    </div>
  </div>  
</section>