<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zdravabeba
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-overlay js-overlay"></div>
	<header id="masthead" class="header">
		<div class="header__wrapp">
			<!-- Hamburger menu -->
			<div class="header__hamburger-wrapper js-open-nav">
				<button class="hamburger hamburger--spin" type="button">
					<span class="hamburger-box">
					<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<!-- Logo Site  -->
			<div class="header__logo">
				<?php the_custom_logo(); ?>
			</div>
			<!-- Site Menu -->
			<div class="header__menu js-menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				<div class="menu__folow-us">
					<div class="menu__folow-text">
						Pratite Nas
					</div>
					<div class="menu__folow-socials">
						<a href="#" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="#" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="#" target="_blank">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
						<a href="#" target="_blank">
							<i class="fa fa-youtube-play" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- Site Search -->
			<div class="header__search-icon js-search">
				<i class="fa fa-search"></i>
			</div>
			<div class="header__search-form">
				<?php get_search_form() ?>
			</div>
		</div>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
