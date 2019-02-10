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
			<div class="general-text wrapper">
				<div class="general-text__box">
					<h1 class="general-text__title"><?php echo get_field('text_title'); ?></h1>
					<div class="general-text__content">
						<?php echo get_field('text_content'); ?>

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
					</div><!-- .general-text__content -->
				</div><!-- .general-text__box-->
			</div><!-- .general-text -->

			<div class="purple-box wrapper">
				<h2 class="purple-box__title"><?php echo get_field('box_title'); ?></h2>
				<div class="purple-box__text"><?php echo get_field('box_content'); ?></div>
			</div>
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();