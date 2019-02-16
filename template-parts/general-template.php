<?php
/**
* Template Name: General Template
* Template Post Type: page
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="general">
			<div class="general-text wrapper">
				<div class="general-text__box">
					<h2 class="general-text__title"><?php echo get_field('text_title'); ?></h2>
					<div class="general-text__content">
						<?php echo get_field('text_content'); ?>

						<?php 
						$has_social = get_field('has_social');
						if($has_social): ?>
							<div class="general-text__social-share">Udostępnij:
								<?php if( have_rows('social_repeater') ):
		
								while( have_rows('social_repeater') ): the_row();

									$icon =  get_sub_field('social_icon');
									$link = get_sub_field('social_url');

								?>
								
								<a href="<?php echo $link; ?>"><?php echo $icon ?></a>
							
								<?php endwhile; ?>
							<?php endif; ?>
							</div>
						<?php endif; ?>
					</div><!-- .general-text__content -->
				</div><!-- .general-text__box-->
			</div><!-- .general-text -->

		
			<?php 
			$has_purple_box = get_field('has_purple_box');
			if( $has_purple_box): ?>
			<div class="purple-box wrapper">
				<div class="purple-box__title">
					<h2><?php echo get_field('box_title'); ?></h2>
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
		endif;
	?>
<?php
get_footer();