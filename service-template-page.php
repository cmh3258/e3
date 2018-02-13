<?php 

/* Template Name: Services Template */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package e3
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="grid-main container">
				<div class="banner">
					<?php if (get_field('service_banner_image')): ?>
						<img src="<?php the_field('service_banner_image'); ?>" class="banner-img">
					<?php endif; ?>
					<div class="row-2 banner-info-container">
						<div class="banner-info">
						<div class="col-4">
							<!-- logo -->
							<?php if (get_field('service_logo')): ?>
								<img src="<?php the_field('service_logo'); ?>" alt="None" class="service-logo">
							<?php else: ?>
								<div class="banner-top-42"></div>
							<?php endif; ?>
							<h2 class="white sentence">
								<?php 
									if(get_field('service_description')){ 
										the_field('service_description');
									}; 
								?>
							</h2>
						</div>
						
						<?php if (get_field('service_stats')): ?>
							<div class="col-1">
								<h4 class="title-condensed gray-header-light"><?php the_field('service_stat_header') ?></h4>
								
								<?php 
									// Split the list and display properly
									$stats = get_field('service_stats'); 
									$list = explode('<li>', $stats);
									foreach ($list as $key) {
										$values = explode(' ', $key);
										$remaining = implode(' ' , array_slice($values, 1));
										if (strpos($values[0], "\n") == 0) {
											echo "<h4 class='service-stat title-condensed'>
												<span class='large-number'>$values[0]</span> $remaining
											</h4>";
										}
									}
								?>

							</div>
						<?php endif; ?> 

						</div>
					</div>
				</div>

				
				<?php if (get_field('description_header')): ?>
					<section>
						<div>
							<!-- <h5 class="info-title">
								
							</h5> -->
							<div class="row-3">
								<div class="">
									<h4 class="title gray-header">
										<?php the_field('description_header'); ?>
									</h4>
									<p>
										<?php the_field('description_1st_half'); ?>
									</p>
								</div>
								<div class="top26">
									<p>
										<?php the_field('description_2nd_half'); ?>
									</p>
								</div>
								<?php if (get_field('introduction_file') || 
									get_field('faq_file') || 
									get_field('service_details_file') ||
									get_field('Whitepaper_file')
									): ?>
								<div class="">
									<!-- This should be some sort of navigation??? -->
									<h4 class="title gray-header">Downloads</h4>
									<div class="gray-nav-box">
										<ul>

											<?php if (get_field('introduction_file')): ?>
												<li class="title-condensed">
													<a href="<?php the_field('introduction_file'); ?>" download>
														<span class="download-icon"></span> Introduction
													</a>
												</li>
											<?php endif; ?>

											<?php if (get_field('faq_file')): ?>
												<li class="title-condensed">
													<a href="<?php the_field('faq_file'); ?>" download>
														<span class="download-icon"></span> Introduction
													</a>
												</li>
											<?php endif; ?>

											<?php if (get_field('service_details_file')): ?>
												<li class="title-condensed">
													<a href="<?php the_field('service_details_file'); ?>" download>
														<span class="download-icon"></span> Introduction
													</a>
												</li>
											<?php endif; ?>

											<?php if (get_field('Whitepaper_file')): ?>
												<li class="title-condensed">
													<a href="<?php the_field('Whitepaper_file'); ?>" download>
														<span class="download-icon"></span> Introduction
													</a>
												</li>
											<?php endif; ?>
										</ul>
									</div>
								</div>
								<?php endif; ?>

								<?php if (get_field('quote')): ?>
									<div class="quote">
										<h3 class="title-condensed e3-blue">
											<?php the_field('quote'); ?>
										</h3>
										<?php if(get_field('quote_source')): ?>
											<h5 class="title e3-blue"><?php { the_field('quote_source'); } ?></h5>
										<?php endif; ?>
									</div>
								<?php endif; ?>

							</div>
						</div>
					</section>

				<hr>

				<?php endif; ?>


				<?php if(get_field('insights_main_header')): ?>
					<section>
						<h4 class="title gray-header"><?php the_field('insights_main_header'); ?></h4>
						<div class="row-3">
							<!-- Loop through these - texts, colors, icons, etc -->
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_header_a')): ?>
										<?php if (get_field('insights_icon_a')): ?>
											<img src="<?php the_field('insights_icon_a'); ?>" alt="" class="info-icon"/>
										<?php endif; ?>
										<h4 class="e3-green"><?php the_field('insights_header_a'); ?></h4>
									<?php else: ?>
										<?php if (get_field('insights_icon_a')): ?>
											<a href="<?php the_field('insights_link_a'); ?>">
												<img src="<?php the_field('insights_icon_a'); ?>" alt="" class="info-large-icon"/>
											</a>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<p>
									<?php the_field('insights_description_a'); ?>
								</p>
							</div>
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_header_b')): ?>
										<?php if (get_field('insights_icon_b')): ?>
											<img src="<?php the_field('insights_icon_b'); ?>" alt="" class="info-icon"/>
										<?php endif; ?>
										<h4 class="purple-text"><?php the_field('insights_header_b'); ?></h4>
									<?php else: ?>
										<?php if (get_field('insights_icon_b')): ?>
											<a href="<?php the_field('insights_link_b'); ?>">
												<img src="<?php the_field('insights_icon_b'); ?>" alt="" class="info-large-icon"/>
											</a>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<p>
									<?php the_field('insights_description_b'); ?>
								</p>
							</div>
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_header_c')): ?>
										<?php if (get_field('insights_icon_c')): ?>
											<img src="<?php the_field('insights_icon_c'); ?>" alt="" class="info-icon"/>
										<?php endif; ?>
										<h4 class="orange-text"><?php the_field('insights_header_c'); ?></h4>
									<?php else: ?>
										<?php if (get_field('insights_icon_c')): ?>
											<a href="<?php the_field('insights_link_c'); ?>">
												<img src="<?php the_field('insights_icon_c'); ?>" alt="" class="info-large-icon"/>
											</a>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<p>
									<?php the_field('insights_description_c'); ?>
								</p>
							</div>
						</div>
					</section>
				<?php endif; ?>

			</div>


		</main><!-- #main -->
	</div><!-- #primary -->





<?php
// get_sidebar();
get_footer();
