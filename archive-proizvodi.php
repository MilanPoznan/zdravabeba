<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zdravabeba
 */

get_header();
?>
  <div class="archive-product"></div>

    <?php if ( have_posts() ) : ?>
      <!-- Section Archive-Product Hero -->
      <section class="archive-product__hero">
        <h1 class="archive-product__hero-title">Proizvodi</h1>
      </section>
      <!-- Section Archive-Product Hero End-->
      <!-- Section Archive-Product Content -->
      <section class="archive-product__content">
        <div class="archive-product__content-inner-wrapper">
        <?php
          while ( have_posts() ) :
            the_post(); ?>
            <div class="archive-product__content-single">
              <a href="<?php the_permalink(); ?>" class="archive-product__content-single-image-container">
                <div class="archive-product__content-single-image" style="background-image: url('<?php  the_field('product_image'); ?>')"></div>
              </a>
              <div class="archive-product__content-single-content">
                <h3 class="archive-product__content-single-title"><?php the_field('product_title')?></h3>
                <div class="archive-product__content-single-description"><?php the_field('product_subtitle')?></div>
                <a href="<?php the_permalink(); ?>" class="archive-product__content-single-link"><span>Detaljnije</span></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
      <!-- Section Archive Content End -->
      <!-- Section Archive Description -->
      <section class="archive-product__description general-text">
        <div class="archive-product__description-inner-wrapper general-text__content">
          <p>Pomenuti FEMIBION proizvodi su dodaci ishrani koji bi trebalo da se koriste kao dopuna a ne kao zamena za raznovrsnu, izbalansiranu ishranu i zdrav način života.</p>
          <p>*Folat (folna kiselina i Metafolin®) doprinosi normalnoj proizvodnji krvi i procesu ćelijske deobe kao i razvoju majčinih tkiva tokom trudnoće, uključujući i formiranje posteljice. Posteljica nerođenoj bebi obezbeđuje esencijalne hranljive sastojke koji su joj potrebni.</p>
          <p>Dopunski unos folne kiseline povećava nivo folata u trudnoći. Nizak nivo folata u trudnoći je jedan od faktora rizika za razvoj oštećenja neuralne cevi kod fetusa. Stoga se za žene preporučuje dopunski unos od 400µg folne kiseline dnevno u periodu od bar jedan mesec pre i do tri meseca posle začeća. Naučno je dokazano da nizak nivo folata u trudnoći predstavlja važan faktor rizika od oštećenja neuralne cevi. Pored toga, i drugi faktori (poput naslednih) mogu da povećaju rizik od oštećenja neuralne cevi.</p>
          <p>** Unos DHA tokom trudnoće doprinosi normalnom razvoju mozga i očiju kod fetusa i odojčeta. Efekat se postiže sa dnevnim unosom od 200 DHA pored preporučenog dnevnog unosa za odrasle od 250 mg omega 3 masnih kiselina (DHA i EPA).</p>
        </div>
      </section>
      <!-- Section Archive Description End -->

      
		<?php endif;
    ?>


	</div>

<?php
get_footer();
