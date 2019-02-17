<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zdravabeba
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			include 'template-parts/general-template';
			// include 'template-parts/products-section';

			?>

			<?php
		endwhile; // End of the loop.
		?>
		<div class="single-post__other-posts">
			<div class="single-post__proizvodi">
				<h2>PROIZVODI</h2>

			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
