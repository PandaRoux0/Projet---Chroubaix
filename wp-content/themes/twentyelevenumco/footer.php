<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<ul id="lien-information">
					<?php do_action( 'twentyeleven_credits' ); ?>
					<li><a href="http://localhost/wordpress/mentions-legales/">Mentions légales</a></li>
					<li><a href="http://localhost/wordpress/liens-utiles/">Liens utiles</a></li>
					<li><a href="http://localhost/wordpress/plan-du-site/">Plan su site</a></li>
					<li><a href="http://localhost/wordpress/contact/">Contact</a></li>
				</ul>
				<ul id="lien-site">
					<li><a href="">Site de la cancérologie</a></li>
					<li><a href="">Site de la néonatologie</a></li>
					<li><a href="">Site de l'IFSI / l'IFAS</a></li>
					<li><a href="">Site du ch-Roubaix</a></li>
				</ul>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>