<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
		<div class="footer-cta">
			<div class="container">
				<div class="row">
					<h3>Not Sure where to start? Let's talk websites</h3>
				</div>
			</div>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-nav">
				<div class="row">
					<div class="large-3 columns">
						<?php dynamic_sidebar('footer'); ?>
					</div>
					<div class="large-3 columns">
						<?php dynamic_sidebar('footer-two'); ?>
					</div>
					<div class="large-3 columns"></div>
					<div class="large-3 columns"></div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
