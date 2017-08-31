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
					<div class="col-md-12 text-center">
						<h3>Have an Exciting Idea? Let's Talk and Have Some Coffee</h3>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-nav">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<?php dynamic_sidebar('footer'); ?>
						</div>
						<div class="col-md-3">
							<?php dynamic_sidebar('footer-two'); ?>
						</div>
						<div class="col-md-3">
							<?php dynamic_sidebar('footer-three'); ?>
						</div>
						<div class="col-md-3">
							<?php dynamic_sidebar('footer-four'); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
