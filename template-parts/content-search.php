<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zdravabeba
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

		$the_post_id = get_the_ID();
		$featured_image_url = get_the_post_thumbnail_url($the_post_id);

	 ?>

	<div class="result-item__image" style="background-image: url('<?php  the_field('product_image'); ?>')">
	</div>
	<div class="result-item__content">
		<p class="result-item__content-title"><?php the_title(); ?></p>
		<div class="result-item__content-description">
			<?php
				$product_subtitle = get_field('product_subtitle');
				if ($product_subtitle) {
					echo $product_subtitle;
				} else {
					the_content();
				}
			 ?>

		</div>
		<a href="<?php the_permalink() ?>" class="result-item__button"><span>Detaljnije</span></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
