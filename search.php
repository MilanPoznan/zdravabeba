<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package zdravabeba
 */

get_header();
$postArray = [];
$productArray = [];
$allPosts = [];
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="search-page__header">

				<div class="search-page__title">
					<h2>Rezultati pretrage</h2>
					<h3>Za ljubav novog zivota</h3>
				</div>
				<div class="search-page__search-form">
					<?php get_search_form() ?>
				</div>
				<div class="search-page__submenu">

				</div>
			</div>


			<header class="search-page__main-header">
				<h1 class="page-title search-page__search-result">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Rezultat pretrage za: %s', 'zdravabeba' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			  <section class="archive__hero">
				<div class="archive__hero-dropdown">
          <button class="archive__hero-dropdown-btn">Filter</button>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'search_menu',
              'menu_id'        => 'search-menu',
              'container'      => '',
              'menu_class'     => 'archive__hero-dropdown-content'
            ) );
          ?>
        </div>
			</section>
			</header><!-- .page-header -->
			<div class="search-result-all">
				<?php if ( have_posts() ) :
					$types = array('proizvodi', 'post', 'saveti');
					foreach( $types as $key => $type ){
						echo '<div id="search-res-'. $key . '" class="search-res post-type-group-'. $type .'" style="text-align: center">';
						?>
						<div class="search-results-counter search-results-counter-<?php echo $key ?>">
						</div>
						<?php
		        while( have_posts() ){
		            the_post();

		            if( $type == get_post_type() ){
										get_template_part( 'template-parts/content', 'search' );
		            }
		        }
						?>
						<div class="show-more show-more-<?php echo $key ?>">
							Prikazi jos
						</div>
						<?php
						echo '</div>';
		        rewind_posts();
					}
					?>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
