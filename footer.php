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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zdravabeba' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'zdravabeba' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'zdravabeba' ), 'zdravabeba', '<a href="http://underscores.me/">MIlan Poznan</a>' );
				?>
		</div><!-- .site-info -->
		<div class="footer">
			<div class="footer__description">
			<p>Femibion powstał po to, by pomóc
Ci w szczególnym okresie planowania dziecka, ciąży oraz macierzyństwa. Wiemy, że to niesamowite wyzwanie, ale również wielka przygoda. Pamiętaj, że jesteśmy tu dla Ciebie
i możesz na nas liczyć.</p>
</div>
			<div class="footer__nav">
			<h3 class="footer__nav-title">Etapy</h3>
			<ul>
				<li>Planowanie</li>
				<li>Ciąża</li>
				<li>Macierzyństwo</li>
			</ul>
			<h3 class="footer__nav-title">O FEMIBION</h3>
			<ul>
				<li>O NAS</li>
				<li>FAQ</li>
			</ul>
			</div>
			<div class="footer__social"></div>
			<div class="footer__copy"></div>
			<div class="footer__policy-privacy"></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
