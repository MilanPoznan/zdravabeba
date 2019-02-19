<section class="archive-tab">
  <div class="archive-tab__wrapper">
  <?php if( have_rows('archive_tab_title_repeater') ): ?>
    <div class="archive-tab__header-wrap">
      <ul class="archive-tab__header archive-tab__header--desktop js-desktop-archive-header">
          <?php while( have_rows('archive_tab_title_repeater') ): the_row(); ?>
            <a class="js-header-tab-link" href="#category_<?php echo get_row_index(); ?>">
              <li data-row="<?php echo get_row_index(); ?>" class="archive-tab__header-tab"><?php the_sub_field('archive_tab_title') ?></li>
            </a>
          <?php endwhile; ?>
      </ul>

      <div class="archive-tab__mask-select js-tab-select">
        Dobro je znati
      </div>
      <div class="archive-tab__mask-select-wrapp js-select-mask-wrap">
        <?php while( have_rows('archive_tab_repeater') ): the_row(); ?>
          <a href="#category_<?php echo get_row_index(); ?>" class="js-mobile-header-tab-link" value="<?php the_sub_field('archive_tab_title') ?>"><?php the_sub_field('archive_tab_title') ?></a>
        <?php endwhile; ?>
      </div>
    </div>

  <?php endif; ?>
  <?php if( have_rows('archive_tab_content_repeater') ): ?>
    <div class="archive-tab__content">
      <?php while( have_rows('archive_tab_content_repeater') ): the_row(); ?>
        <div class="archive-tab__single-content" id="category_<?php echo get_row_index(); ?>">
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
                $my_post_content = $single_post[0]->post_content;;
                echo wp_trim_words($my_post_content, 30);
                  $post_link = get_permalink($single_post[0]->ID);
                ?>
                <a href="<?php echo $post_link ?>"  class="archive-tab__post-cta general-cta general-cta--purple"><span>Pročitajte više</span></a>
              </div>
            </div>

          </div>
        </div>

        <div class="archive-page__last-posts">
          <?php $category_id = get_sub_field('category_id');?>
          <?php get_last_articles('planiranje',  $category_id, 'purple' ); ?>
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>


  </div>
</section>
