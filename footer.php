<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zdravabeba
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="footer">
			<a class="back-to-top" href="#">Povratak na vrh</a>
			
			<div class="footer__wrapper">
			<div class="footer__description">
        Dobrodošli na uzbudljiv put ka materinstvu. Mislite o Femibion-u kao o svom partneru u trudnoći koji Vam daje inspiraciju i stručne savete koji su Vam potrebni tokom ovog posebnog perioda. Ovde smo da Vam pomognemo ne samo da postanete sjajna mama već i da ostanete sjajna žena, kakva jeste. U čast avanture koja je pred Vama…
			</div>

			<div class="footer__links">
				<div class="footer__box">
					<p class="footer__links--title">Faze</p>
					<ul>
						<li><a href="<?php echo get_category_link( 4 ); ?> ">Planiranje</a></li>
						<li><a href="<?php echo get_category_link( 11 ); ?>">Trudnoća</a></li>
						<li><a href="<?php echo get_category_link( 7 ); ?>">Materinstvo</a></li>
					</ul>
				</div><!-- .footer__box -->
				<div class="footer__box">
					<p class="footer__links--title">BREND</p>
					<ul>
						<li><a href="<?php echo site_url() . '/o-nama'; ?>">O nama</a></li>
					</ul>
				</div><!-- .footer__box -->
				<div class="footer__box">
					<p class="footer__links--title">Proizvođač</p>
					<ul>
						<li><a href="https://www.merckgroup.com/en">Merck</a></li>
						<li><a href="http://www.elpharma.com/">El Pharma</a></li>
					</ul>
				</div><!-- .footer__box -->
			</div><!-- .footer__links -->
		</div><!-- .footer__wrapper -->

			<div class="footer__socials">
				<div class="footer__social">
					<p class="footer__social--title">Pratite nas na:</p>
					<div class="footer__social-icons">
						<a href="https://www.facebook.com/FemibionRS/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					  <!-- <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-play"></i></a> -->
					</div>
				</div><!-- .footer__social-->			
				<div class="footer__copy">&copy; <?php echo date("Y"); ?> Copyright | EL Pharma.</div>
			</div><!-- .footer__social -->

		</div><!-- .footer -->
	</footer><!-- #colophon -->

	<div class="footer__container">
	<div class="footer__privacy-policy">
		<div class="footer__terms">
			<a href="<?php echo site_url() . '/politika-privatnosti'; ?>">Politika privatnosti</a>
			<!-- <a href="#">Mapa strony</a>  -->
			<a href="<?php echo site_url() . '/uslovi-koriscenja'; ?>">Uslovi korišćenja</a>
		</div>
		<div class="footer__logo">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-logo.jpg" alt="Footer Logo Image">
		</div>
	</div><!-- .footer__privacy-policy -->
	</div><!-- .footer__container -->
</div><!-- #page -->
<?php get_template_part('template-parts/cookie-popup'); ?>
<?php wp_footer(); ?>

</body>
</html>
