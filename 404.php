<?php
get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

          <div class="general-text wrapper">

            <div class="general-text__box">
              <h1 class="general-text__title">Izvinite, stranica nije pronađena!
              </h1>
            </div><!-- .general-text -->
          </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
$has_table = get_field('has_table');
if( $has_table):
  get_template_part('template-parts/table-section');
endif;
?>

<?php
$has_testimonial = get_field('has_testimonial');
if( $has_testimonial):
  get_template_part('template-parts/testimonial-section');
endif; ?>
  <div class="single-post__other-posts">
    <div class="single-post__proizvodi">
      <?php
      if (is_single()) {
        get_template_part('template-parts/products-section');
        get_template_part('template-parts/saveti-section');
      }
      ?>
    </div>
    <div class="single-post__saveti">

    </div>
    <div class="single-post__artikli">
      <h2 class="single-post__artikli-title">Preporučujemo</h2>
      <?php get_last_articles('single-artikli', array( 8, 9, 10 ), array('purple', 'yellow', 'orange') ); ?>
    </div>
  </div>
<?php
get_footer();
