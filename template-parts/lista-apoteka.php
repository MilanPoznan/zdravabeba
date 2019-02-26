
<?php if( have_rows('apoteke') ):  ?>
<section class="farmacy-list general" id="farmacy-list">
  <div class="farmacy-list__wrapper">
    <div class="farmacy-list__list">
      <?php while ( have_rows('apoteke') ) : the_row(); ?>
      <a href="<?php the_sub_field('url_apoteke'); ?>" target="_blank"><?php the_sub_field('ime_apoteke'); ?></a>
    <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif;  ?>
