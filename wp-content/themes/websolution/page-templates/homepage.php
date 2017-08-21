<?php
/*
*Template Name: Homepage Template
*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php if ($redux_data['opt-switch']): ?>
			<?php get_template_part( 'template-parts/home', 'slider' ); ?>
		<?php endif ?>
		
		<section id="welcome-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/responsive-design.png" class="img-responsive">
					</div>
					<div class="col-md-6">
						<h2 class="welcome-head">Welcome!</h2>
						<a href="#"><button class="possib-btn">The Possibilities Are Unlimited</button></a>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet</span>
					<div class="row class welccontent-container">
						<div class="col-md-6">
							<span class="what-we-do">What We Do</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
						<div class="col-md-6">
							<span class="who-we-are">Who We Are</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<section id="services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-one.png">
									</div>
									
								</div>
								<div class="col-md-12">
									<h2>Windows Applications</h2>
									<p>With Windows being the most popular desktop (and in a close race in the tablets market) operating system in the world. it's imperative for a software development</p>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-two.png">
									</div>
								</div>
								<div class="col-md-12">
									<h2>Database Management</h2>
									<p>Working with your websites or your application's backend architecture is just as important as making sure that the wheelbase of your car is ok, before driving it</p>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-three.png">
									</div>
								</div>
								<div class="col-md-12">
									<h2>UX and Design</h2>
									<p>As the websites, desktop applications and mobile websites are now offering more functionality to end users, that they can either need or apprehend, the UI/UX became..</p>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-four.png">
									</div>
								</div>
								<div class="col-md-12">
									<h2>Cross-Browser and OS Supported</h2>
									<p>The world of iOS and MacOS applications is front and center of the most of our projects. Basically, working on crafting apps that run on Apple devices is the..</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-five.png">
									</div>
								</div>
								<div class="col-md-12">
									<h2>Web Development</h2>
									<p>With even the smallest applications (whatever the platform) or a web service having thousands of lines of codes and involving hundreds of algorithms in order to work..</p>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="row">
								<div class="col-md-12">
									<div class="img-container">
										<img src="<?php echo get_template_directory_uri(); ?>/images/service-six.png">
									</div>
								</div>
								<div class="col-md-12">
									<h2>Mobile Friendly Websites</h2>
									<p>Mobile devices are by far the most dynamic of all enterprise platforms in IT. with custome software development companies like our crafting , coding , designing and..</p>
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
		</section>

		<section id="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Clients Testimonials</h2>
						<div class="container">
							<div class="row">
								<ul id="testimonial" class="lightSlider">
							    	<li>
							    		<div class="testimonial-wrap">
							    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							    			</p>
							    		</div>
							    	</li>
							    	<li>
							    		<div class="testimonial-wrap">
							    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							    			</p>
							    		</div>
							    	</li>
							    	<li>
							    		<div class="testimonial-wrap">
							    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							    			</p>
							    		</div>
							    	</li>
							    </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary-->
<?php get_footer(); ?>