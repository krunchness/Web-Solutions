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

<!-- 		<section id="recent-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Check Our Recent Projects</h2>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<ul id="recent-proj" class="lightSlider">
								    	<li><img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png"></li>
								    	<li><img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png"></li>
								    	<li><img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png"></li>
								    </ul>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

<!-- 		<div class="wrapper">
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
</div>

 -->
 	<div id="recent-projects">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Check Our Recent Projects</h2>
				</div>
				<div class="col-md-12">
					<div class="da-container">
					<ul id="da-thumbs" class="da-thumbs">
						<li>
							<a href="http://dribbble.com/shots/505046-Menu">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Menu by Simon Jensen</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/504336-TN-Aquarium">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>TN Aquarium by Charlie Gann</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/504197-Mr-Crabs">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Mr. Crabs by John Generalov</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
							</a>
						</li>
						<li>	
							<a href="http://dribbble.com/shots/503058-Ice-Cream-nom-nom">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Ice Cream - nom nom by Eight Hour Day</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/502927-My-Muse">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>My Muse by Zachary Horst</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/502538-Natalie-Justin-Cleaning">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Natalie & Justin Cleaning by Justin Younger</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/502523-App-Preview">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>App Preview by Ryan Deshler</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/501695-Cornwall-Map">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Cornwall Map by Katharina Maria Zimmermann</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/500861-final-AD-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>final AD logo by Annette Diana</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/500369-Land-Those-Planes">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
								<div><span>Land Those Planes by Lee Ann Marcel</span></div>
							</a>
						</li>
						<li>
							<a href="http://dribbble.com/shots/497795-Seahorse">
								<img class="grayscale-filter" src="<?php echo get_template_directory_uri(); ?>/inc/directionhover/images/12.jpg" />
								<div><span>Seahorse by Trevor Basset</span></div>
							</a>
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</main><!-- #main -->
</div><!-- #primary-->
<?php get_footer(); ?>