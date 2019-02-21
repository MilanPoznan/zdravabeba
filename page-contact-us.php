<?php get_header(); ?>
<section class="contact">
  <h2><?php the_field('contact_title'); ?></h2>

  <div class="contact__content">
    <div class="contact__wrapper">
      <img src="<?php echo get_field('contact_icon'); ?>" alt="Image">
      <div class="contact__text">
        <h4><?php echo get_field('contact_text'); ?></h4>
      </div>
      <div class="contact__details">
      <?php if( have_rows('contact_details') ): 

        while( have_rows('contact_details') ): the_row(); 

          $phone = get_sub_field('contact_phone');
          $email = get_sub_field('contact_email');
          $address = get_sub_field('contact_address');
          
        ?>
        
        <div class="contact__info">
          <div class="contact__box-title">Telefon: </div>
          <div class="contact__box-content"><?php echo $phone; ?></div>
        </div>
        <div class="contact__info">
          <div class="contact__box-title">Email: </div>
          <div class="contact__box-content"><?php echo $email; ?></div>
        </div>
        <div class="contact__info">
          <div class="contact__box-title">Adresa: </div>
          <div class="contact__box-content"><?php echo $address; ?></div>
        </div>
          
        <?php endwhile; ?>

      <?php endif; ?>

      </div><!-- .contact__details -->
      <div class="contact__social">
        <div class="contact__social-title">Pratite nas:</div>
        <div class="contact__social-icons">
          <?php if( have_rows('contact_social_repeater') ):
        
            while( have_rows('contact_social_repeater') ): the_row();

              $icon =  get_sub_field('contact_social_icon');
              $link = get_sub_field('contact_social_url');

            ?>
            
              <a href="<?php echo $link; ?>" target="_blank"><?php echo $icon ?></a>
            
            <?php endwhile; ?>

          <?php endif; ?>
        </div><!-- .contact__social-title -->
      </div><!-- .contact__social --> 
    </div><!-- .contact__wrapper -->
  </div><!-- .contact__content -->
  <div class="contact-form">
    <?php the_field('contact_form_content'); ?>
  </div>
</section>
<?php 
get_footer();