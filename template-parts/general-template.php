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
		<h2 class="general-text__title"><?php echo get_field('text_title'); ?></h2>
		<div class="general-text__content">
      <?php echo get_field('text_content'); ?>

      <div class="general-text__social-share">Udostępnij:
				<!-- To Do-->
			</div>

			<div class="general-text__purple-box">
				<h3 class="general-text__purple-box-title"><?php echo get_field('box_title'); ?></h3>
				<p class="general-text__purple-box-text"><?php echo get_field('box_content'); ?></p>
			</div>
    </div>
		</div>
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();