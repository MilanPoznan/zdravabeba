<?php
/**
 *Site Map template
 */

  get_header();
?>
  <div class="site-map">
    <div class="site-map__inner-wrapper">

      <h1 class="site-map__title">Mapa Sajta</h1>

      <!-- Home Page -->
      <div class="site-map__homepage">
        <h2 class="site-map__homepage-title">POČETNA STRANA</h2>
        <a href="<?php echo get_home_url(); ?>" class="site-map__homepage-link">Početna</a>
      </div>
      <!-- Home Page End -->

      <!-- Faze -->
      <div class="site-map__faze">
        <h2 class="site-map__faze-title">FAZE</h2>

        <!-- Planiranje -->
        <div class="site-map__faze-planiranje">
          <h3 class="site-map__faze-planiranje-title">PLANIRANJE</h3>
          <div class="site-map__faze-planiranje-pages">
            <h3 class="site-map__faze-planiranje-pages-title">STRANE (<span>1</span>)</h3>
            <a href="<?php echo the_permalink('74'); ?>" class="site-map__faze-planiranje-pages-link"><?php echo get_the_title(74); ?></a>
          </div>
          <div class="site-map__faze-planiranje-articles">
            <?php 
              $planiranje_category = get_category('7');
              $planiranje_count = $planiranje_category->category_count;
              $plan_args = array(
                'posts_per_page' => -1,
                'cat' => 7,
                'orderby' => 'title',
                'order' => 'ASC'
              );
              $planiranje_posts = new WP_Query($plan_args);
            ?>
            <h3>ARTIKLI (<span><?php echo $planiranje_count; ?></span>)</h3>
            <ul>
            <?php while($planiranje_posts->have_posts()) : $planiranje_posts->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
              </li>
            <?php endwhile; ?>
            </ul>
          </div>
        </div>
        <!-- Planiranje End -->

        <!-- Trudnoca -->
        <div class="site-map__faze-trudnoca">
          <h3 class="site-map__faze-trudnoca-title">TRUDNOĆA</h3>
          <div class="site-map__faze-trudnoca-pages">
            <h3 class="site-map__faze-trudnoca-pages-title">STRANE (<span>1</span>)</h3>
            <a href="<?php echo the_permalink(251); ?>" class="site-map__faze-trudnoca-pages-link"><?php echo get_the_title(251); ?></a>
          </div>
          <div class="site-map__faze-trudnoca-articles">
            <?php 
              $trudnoca_category = get_category('8');
              $trudnoca_count = $trudnoca_category->category_count;
              $trud_args = array(
                'posts_per_page' => -1,
                'cat' => 8,
                'orderby' => 'title',
                'order' => 'ASC'
              );
              $trudnoca_posts = new WP_Query($trud_args);
            ?>
            <h3>ARTIKLI (<span><?php echo $trudnoca_count; ?></span>)</h3>
            <ul>
            <?php while($trudnoca_posts->have_posts()) : $trudnoca_posts->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
              </li>
            <?php endwhile; ?>
            </ul>
          </div>
        </div>
        <!-- Trudnoca End -->
        
        <!-- Materinstvo -->
        <div class="site-map__faze-materinstvo">
          <h3 class="site-map__faze-materinstvo-title">MATERINSTVO</h3>
          <div class="site-map__faze-materinstvo-pages">
            <h3 class="site-map__faze-materinstvo-pages-title">STRANE (<span>1</span>)</h3>
            <a href="<?php echo the_permalink(253); ?>" class="site-map__faze-materinstvo-pages-link"><?php echo get_the_title(253); ?></a>
          </div>
          <div class="site-map__faze-materinstvo-articles">
            <?php 
              $materinstvo_category = get_category('9');
              $materinstvo_count = $materinstvo_category->category_count;
              $mat_args = array(
                'posts_per_page' => -1,
                'cat' => 9,
                'orderby' => 'title',
                'order' => 'ASC'
              );
              $materinstvo_posts = new WP_Query($mat_args);
            ?>
            <h3>ARTIKLI (<span><?php echo $materinstvo_count; ?></span>)</h3>
            <ul>
            <?php while($materinstvo_posts->have_posts()) : $materinstvo_posts->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
              </li>
            <?php endwhile; ?>
            </ul>
          </div>
        </div>
        <!-- Materinstvo End -->
        
      </div>
      <!-- Faze End-->
      
      <!-- Proizvodi -->
      <div class="site-map__proizvodi">
        <h2 class="site-map__proizvodi-title">PROIZVODI</h2>
        <?php 
          $prod_args = array(
            'posts_per_page' => -1,
            'post_type' => 'proizvodi',
            'order' => 'ASC'
          );
          $products = new WP_Query($prod_args);
        ?>
        <div class="site-map__proizvodi-list">
          <?php while($products->have_posts()) : $products->the_post(); ?> 
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
          <?php endwhile; ?>
        </div>
      </div>
      <!-- Proizvodi End -->
      
      <!-- Kontakt -->
      <div class="site-map__kontakt">
        <h2 class="site-map__kontakt-title">O NAMA</h2>
        <div class="site-map__kontakt-list">
          <a href="<?php echo the_permalink(284); ?>"><?php echo get_the_title(284); ?></a>
          <a href="<?php echo the_permalink(342); ?>"><?php echo get_the_title(342); ?></a>
        </div>
      </div>
      <!-- Kontakt End -->

      <!-- Ostalo -->
      <div class="site-map__ostalo">
      <h2 class="site-map__ostalo-title">OSTALO</h2>
        <div class="site-map__ostalo-list">
          <a href="<?php echo the_permalink(3); ?>"><?php echo get_the_title(3); ?></a>
          <a href="<?php echo the_permalink(344); ?>"><?php echo get_the_title(344); ?></a>
        </div>
      </div>
      <!-- Ostalo End -->

    </div><!-- Inner Wrapper End -->

  </div><!-- Site Map End -->

<?php
  get_footer();