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
				Femibion powstał po to, by pomóc
Ci w szczególnym okresie planowania dziecka, ciąży oraz macierzyństwa. Wiemy, że to niesamowite wyzwanie, ale również wielka przygoda. Pamiętaj, że jesteśmy tu dla Ciebie
i możesz na nas liczyć.
			</div>

			<div class="footer__links">
				<div class="footer__box">
					<p class="footer__links--title">Etapy</p>
					<ul>
						<li><a href="#">Planowanie</a></li>
						<li><a href="#">Ciąża</a></li>
						<li><a href="#">Macierzyństwo</a></li>
					</ul>
				</div><!-- .footer__box -->
				<div class="footer__box">
					<p class="footer__links--title">O FEMIBION</p>
					<ul>
						<li><a href="#">O NAS</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div><!-- .footer__box -->
				<div class="footer__box">
					<p class="footer__links--title">PRZYDATNE INFORMACJE</p>
					<ul>
						<li><a href="#">Kalendarz dni płodnych</a></li>
						<li><a href="#">Wybierz imię dla swojego dziecka</a></li>
					</ul>
				</div><!-- .footer__box -->
			</div><!-- .footer__links -->
		</div><!-- .footer__wrapper -->

			<div class="footer__socials">
				<div class="footer__social">
					<p class="footer__social--title">Znajdź nas na:</p>
					<div class="footer__social-icons">
						<a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div><!-- .footer__social-->			
				<div class="footer__copy">&copy; <?php echo date("Y"); ?> Copyright | EL Pharma.</div>
			</div><!-- .footer__social -->

		</div><!-- .footer -->
	</footer><!-- #colophon -->

	<div class="footer__privacy-policy">
		<div class="footer__terms">
			<a href="#">Polityka prywatności</a>
			<a href="#">Mapa strony</a>
			<a href="#">Warunki korzystania z aplikacji</a>
		</div>
		<div class="footer__logo">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-logo.jpg" alt="Footer Logo Image">
		</div>
	</div><!-- .footer__privacy-policy -->
</div><!-- #page -->
<?php get_template_part('template-parts/cookie-popup'); ?>
<?php wp_footer(); ?>

</body>
</html>
