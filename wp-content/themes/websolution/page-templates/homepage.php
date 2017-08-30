<?php
/*
*Template Name: Homepage Template
*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<section id="homepage-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span id="typed"></span>
						<p>Ideas for the Internet</p>
						<a href=""><button>Learn More</button></a>
					</div>
				</div>
			</div>
		</section>
		
		<section id="what-we-offer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="offer-title">What we Offer</h1>
						<span>High Quality Web Development at Affordable Rates</span>
						<p>Have an idea that you’re trying to bring to life online? We bring a wide array of professional services in web development, design, and project management to the work we’re involved with. We can manage it all while maintaining high standards of quality. Call today and let us transform your online presence into something exceptional.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="services">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-5">
						<div class="service-container">
							<h2>Web Development</h2>
							<p>Exceeding Expectations</p>
							<a href=""><button>Get in Touch</button></a>
						</div>
					</div>
					<div class="col-md-5 img-svc-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/web-development.jpg">
					</div>
					<div class="col-md-5 img-svc-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/web-design.jpg">
					</div>
					<div class="col-md-5">
						<div class="service-container">
							<h2>Web Design</h2>
							<p>Committed to Quality</p>
							<a href=""><button>Get in Touch</button></a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="service-container">
							<h2>Cross-Browser Supported</h2>
							<p>Loads of Experience</p>
							<a href=""><button>Get in Touch</button></a>
						</div>
					</div>
					<div class="col-md-5 img-svc-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cross-browser.jpg">
					</div>
				</div>
			</div>
		</section>

		<section id="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Clients Testimonials</h2>
						<div class="owl-carousel owl-theme">
						    <div class="item">
						    	<div class="testimonial-wrap">
						    		<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia"
						    		</p>
						    	</div>
						    </div>
						   <div class="item">
						    	<div class="testimonial-wrap">
						    		<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia"
						    		</p>
						    	</div>
						    </div>
						    <div class="item">
						    	<div class="testimonial-wrap">
						    		<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia"
						    		</p>
						    	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="recent-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Check Our Recent Projects</h2>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<ul id="recent-proj" class="lightSlider">
								    	<li><p></p></li>
								    	<li><p></p></li>
								    	<li><p></p></li>
								    </ul>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary-->
<?php get_footer(); ?>