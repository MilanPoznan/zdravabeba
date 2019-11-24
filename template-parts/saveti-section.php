<section class="products-section saveti-section">
  <h2 class="products-section__title saveti-section__title">Saveti</h2>
  <div class="products-section__inner-wrapper saveti-section__inner-wrapper">
    <?php
      $proizvodi = new WP_Query(array(
        'post_type' => 'saveti',
        'posts_per_page' => 3
      ));
      $post_ID = $proizvodi->post->ID;
      $featuredImageUrl = get_the_post_thumbnail_url($post_ID);
      $colors = array( 'purple', 'yellow', 'orange');
      $count = -1;
      if($proizvodi->have_posts()):
        while($proizvodi->have_posts()): $proizvodi->the_post(); $count++;
    ?>
    <div class="category-articles__post single-post category-articles__post--<?php echo $colors[$count]; ?>">
      <div class="category-articles__post-img" style="background-image: url('<?php echo $featuredImageUrl; ?>')"></div>
      <div class="category-articles__post-content">
        <div class="category-articles__post-title post-title post-title--<?php echo $colors[$count]; ?>"> <!-- Ide Promenjliva $colors -->
          <?php echo $proizvodi->post->post_title; ?>
        </div>
        <div class="category-articles__post-desc post-desc">
          TESTIRANJE
          <?php
           echo $proizvodi->post->post_content;
          $post_link = get_permalink();
           ?>
        </div>
        <a href="<?php echo $post_link; ?>"  class="category-articles__post-cta general-cta general-cta--<?php echo $colors[$count]; ?>"><span>Pročitajte više</span></a>
      </div>
      <div class="single-post-hover single-post-hover--<?php echo $colors[$count]; ?>"></div>
    </div>

      <?php
        endwhile;
      endif;
      ?>
  </div>
</section>
