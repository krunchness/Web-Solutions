<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php global $redux_data; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="top-header">
				<div class="container">
					<div class="d-flex flex-row justify-content-end">
						<div class="col-md-2 text-right">
							<span class="social-top"><i class="fa fa-facebook" aria-hidden="true"></i></span>
							<span class="social-top"><i class="fa fa-twitter" aria-hidden="true"></i></span>
							<span class="social-top"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
			</div>
			<hr class="header-hr">
			<!-- Mid Header -->
			<div class="mid-header">
				<div class="container">
					<div class="row">
						<!-- Site Logo -->
						<div class="col-md-6">
							<!-- <h1 class="site-logo">380 x 80</h1> -->
							<!-- redux site-logo -->
							<!-- <img src="<?php echo get_template_directory_uri().'/images/site-logo.png'; ?>" class="site-logo"> -->
							<h1 class="site-logo-txt"><a href="">Websolution</a></h1>
						</div>

						<!-- site-navigation menu -->

						<div class="col-md-6 site-navigation">
							<nav id="site-navigation" class="main-navigation navbar" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscore' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
