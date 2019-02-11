<section class="archive-tab">
  <div class="archive-tab__wrapper">
  <?php if( have_rows('archive_tab_repeater') ): ?>
    <div class="archive-tab__header-wrap">
      <ul class="archive-tab__header">
          <?php while( have_rows('archive_tab_repeater') ): the_row(); ?>
            <li class="archive-tab__header-tab"><?php the_sub_field('archive_tab_title') ?></li>
          <?php endwhile; ?>
      </ul>
    </div>

  <?php endif; ?>
  <?php if( have_rows('archive_tab_content_repeater') ): ?>
    <div class="archive-tab__content">
      <?php while( have_rows('archive_tab_content_repeater') ): the_row(); ?>
        <div class="archive-tab__single-content">
          <div class="archive-tab__content-title">
            <h2><?php the_sub_field('content_title') ?></h2>
          </div>
          <div class="archive-tab__content-description">
            <?php the_sub_field('content_description') ?>
          </div>
          <div class="archive-tab__post">
            <?php
            $catId = get_sub_field('content_group');
            $args = array(
             'posts_per_page' => 1,
             'cat' => $catId
            );
            $single_post = get_posts($args);
            wp_reset_query();
            $featuredImageUrl = get_the_post_thumbnail_url($single_post[0]->ID);
             ?>
            <div class="archive-tab__post-image" style="background-image: url('<?php echo $featuredImageUrl ?>')"></div>
            <div class="archive-tab__post-content">
              <div class="archive-tab__post-title">
                <?php echo $single_post[0]->post_title ?>
              </div>
              <div class="archive-tab__post-description">
                <?php
                  echo $single_post[0]->post_content;
                  $post_link = get_permalink($single_post[0]->ID);
                ?>
                <a href="<?php echo $post_link ?>"  class="archive-tab__post-cta genertal-cta">Procitajte vise</a>
              </div>
            </div>

          </div>
        </div>

        <div class="archive-page__last-posts">
          <?php get_last_articles('planiranje',  array($catId,$catId,$catId) ,'purple' ); ?>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>


  </div>
</section>
