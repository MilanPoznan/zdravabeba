<?php
/**
* Template Name: General Template
* Template Post Type: page, post
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<?php if(get_field('page_hero_background')): ?>
			<div class="general-text__hero">
				<?php include 'general-hero.php'; ?>
			</div>
		<?php endif; ?>
			<div class="general">
        <?php
          if (is_single()) { 
            $cat = get_the_category();
            $first_cat_id = $cat[0]->cat_ID;
            $parent_cat_id = $cat[0]->parent;

            ?>
            <div class="single__breadcrumb">
              <a href="<?php echo get_category_link( $parent_cat_id );?>" class="single__breadcrumb-home"><?php echo get_cat_name( $parent_cat_id )?></a>
              <a href="<?php echo get_category_link( $first_cat_id ); ?>" class="single__breadcrumb-archive"><?php echo get_cat_name($first_cat_id)?></a>
              <span class="single__breadcrumb-post-title"><?php the_title()?></span>
            </div>
        <?php }
        ?>
			<div class="general-text wrapper">

				<div class="general-text__box">
					<h1 class="general-text__title"><?php the_title(); ?></h1>
					<div class="general-text__content">
						<?php the_content(); ?>


							<div class="general-text__social-share">Podeli:
								<span class=“facebook-share” data-js=“facebook-share-single”><i class="fa fa-facebook-f"></i></span>
								<span class=“twitter-share” data-js=“twitter-share-single”><i class="fa fa-twitter"></i></span>
							</div>
					</div><!-- .general-text__content -->
				</div><!-- .general-text__box-->
			</div><!-- .general-text -->


			<?php
			$has_purple_box = get_field('has_purple_box');
			if( $has_purple_box): ?>
			<div class="purple-box wrapper">
				<div class="purple-box__title">
					<h3><?php the_field('box_title'); ?></h3>
				</div>
				<div class="purple-box__text">
					<?php echo get_field('box_content'); ?>
				</div>
			</div><!-- .purple-box -->
			<?php endif; ?>
		</div><!-- .general -->
		<?php
		endwhile; // End of the loop.
		?>
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
