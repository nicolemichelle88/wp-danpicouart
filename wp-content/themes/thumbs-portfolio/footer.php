<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thumbs_portfolio
 */

?>

	</div><!-- #content -->
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="grid">
		<div class="site-info">
			<?php if( get_theme_mod('footer_text') ):

			echo get_theme_mod('footer_text');

			 else: ?>

			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' %1$s by %2$s.', 'thumbs-portfolio' ), 'thumbs-portfolio', '<a href="https://thepixeltribe.com/">Pixel Tribe</a>' );
			endif;?>
		</div><!-- .site-info -->
</div><!-- #page -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
