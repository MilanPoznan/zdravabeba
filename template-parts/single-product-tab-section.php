<section class="single-tab">
  <?php if( have_rows('repeater_tab') ): ?>
  <div class="single-tab__mob">
    <?php while ( have_rows('repeater_tab') ) : the_row(); ?>
    <div class="single-tab__mob-section-title js-drop-down-table-title">
        <?php the_sub_field('title'); ?>
    </div>
    <?php if (get_sub_field('has_table')) {  ?>
      <?php if (have_rows('table_repeater')) {  ?>
        <!-- TABLE INFORMTION -->
      <div class="single-tab__table">
        <?php while( have_rows('table_repeater') ): the_row(); ?>
          <div class="single-tab__table-row">
            <div class="single-tab__table-title">
              <?php the_sub_field('table_title'); ?>
            </div>
            <div class="single-tab__table-desc">
              <?php the_sub_field('table_desc'); ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <!-- END OF TABLE -->
    <?php } ?>
    <?php } else { ?>
      <!-- DESCRIPTION  -->
      <div class="single-tab__description">
        <?php the_sub_field('table_description'); ?>
      </div>
    <?php } ?>

  <?php endwhile; ?>
  </div>
  <div class="single-tab__desktop">
    <div class="single-tab__wrapper">
      <h2>Saznaj Vise</h2>
      <div class="single-tab__header">
        <?php while ( have_rows('repeater_tab') ) : the_row(); ?>
          <div class="single-tab__header-column" value="<?php echo get_row_index(); ?>">
              <?php the_sub_field('title'); ?>
          </div>
        <?php endwhile; ?>


      </div>
      <div class="single-tab__content">

      <?php while ( have_rows('repeater_tab') ) : the_row(); ?>
        <div class="single-tab__content-field">
          <?php if (get_sub_field('has_table')) {  ?>
            <?php if (have_rows('table_repeater')) {  ?>
              <!-- TABLE INFORMTION -->
            <div class="single-tab__table js-product-row" value="<?php echo get_row_index(); ?>">
              <?php while( have_rows('table_repeater') ): the_row(); ?>
                <div class="single-tab__table-row" >
                  <div class="single-tab__table-title">
                    <?php the_sub_field('table_title'); ?>
                  </div>
                  <div class="single-tab__table-desc">
                    <?php the_sub_field('table_desc'); ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
            <!-- END OF TABLE -->
          <?php } ?>
          <?php } else { ?>
            <!-- DESCRIPTION  -->
            <div class="single-tab__description js-product-row" value="<?php echo get_row_index(); ?>">
              <?php the_sub_field('table_description'); ?>
            </div>
          <?php } ?>
        </div>
      <?php endwhile; ?>
    </div>

    </div>
  </div>
<?php endif; ?>


</section>
