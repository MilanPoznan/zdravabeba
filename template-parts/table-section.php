<section class="table general">
  <div class="table__title-container">
    <?php if( have_rows('table_title_repeater') ):

      while( have_rows('table_title_repeater') ): the_row();

        $test =  get_sub_field('table_title');

      ?>

        <div class="table__title"><?php echo $test; ?></div>

      <?php endwhile; ?>

    <?php endif; ?>
  </div>

  <div class="table__box-container">
    <?php if( have_rows('table_box_repeater') ): 

      while( have_rows('table_box_repeater') ): the_row();

        $box_1 =  get_sub_field('table_text_row_1');
        $box_2 = get_sub_field('table_text_row_2');
        $box_3 = get_sub_field('table_text_row_3');

      ?>
      
      <div class="table__row">
        <div class="table__box"><?php echo $box_1; ?></div>
        <div class="table__box"><?php echo $box_2; ?></div>
        <div class="table__box"><?php echo $box_3; ?></div>
      </div>
      <?php endwhile; ?>

    <?php endif; ?>
  </div>
</section>