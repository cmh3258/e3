<?php 

/* Template Name: CustomPageT1 */

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
					<img src="assets/1Artboard 14 copy 2.jpg" class="banner-img">
					<div class="row-2 banner-info-container">
						<div class="banner-info">
						<div class="col-4">
							<!-- logo -->
							<img src="assets/1Artboard 24 copy 2.png" alt="None" class="service-logo">
							<h3 class="service-description">
								<?php 
									if(get_field('service_description')){ 
										the_field('service_description');
									}; 
								?>
							</h3>
						</div>
						
						<?php if (get_field('service_stats')): ?>
							<div class="">
								<h5 class="service-secondary-description"><?php the_field('service_stat_header') ?></h5>
								CHANGE BELOW
								<!-- this will loop -->
								<h4 class="service-stat">
									<span class="large-number">9</span> Districts
								</h4>
								<h4 class="service-stat">
									<span class="large-number">27</span> Schools
								</h4>
								<h4 class="service-stat">
									<span class="large-number">28,000</span> Students
								</h4>
							</div>
						<?php endif; ?> 

						</div>
					</div>
				</div>

				
				<?php if (get_field('description_header') && get_field('description')): ?>
					<section>
						<div>
							<h5 class="info-title">
								<?php the_field('description_header'); ?>
							</h5>
							<div class="row-3">
								<div class="">
									<p>
										Recognized by the White House Initiative on Educational Excellence for Hispanics, E3 ExcELL is a roadmap for systems change to increase achievement for English Language Learners. It utilizes a research-based tool to evaluate school practices and empowers campuses to better support ELL students.
									</p>
								</div>
								<div class="">
									<p>
										To develop action plans, E3 ExcELL also provides training for campus teams that include strengthening community engagement, aligning systems that support teacher effectiveness, and embracing the cultures of ELLs to enhance school climate.
									</p>
								</div>
								<div class="">
									<!-- This should be some sort of navigation??? -->
									<h4>Downloads</h4>
									<div class="gray-nav-box">
										<ul>
											<li><span class="download-icon"></span> Introduction</li>
											<li><span class="download-icon"></span> FAQ</li>
											<li><span class="download-icon"></span> Service Details</li>
											<li><span class="download-icon"></span> Whitepaper</li>
										</ul>
									</div>
								</div>
								<?php if (get_field('quote')): ?>
									<div class="quote">
										<h3>
											<?php the_field('quote'); ?>
										</h3>
										<?php if(get_field('quote_source')): ?>
											<h5><?php { the_field('quote_source'); } ?></h5>
										<?php endif; ?>
									</div>
								<?php endif; ?>

							</div>
						</div>
					</section>

				<?php endif; ?>

				<hr>

				<?php if(get_field('insights_main_header')): ?>
					<section>
						<h5 class="info-title"><?php the_field('insights_main_header'); ?></h5>
						<div class="row-3">
							<!-- Loop through these - texts, colors, icons, etc -->
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_icon_a')): ?>
										<img src="<?php the_field('insights_icon_a'); ?>" alt="" class="info-icon"/>
									<?php endif; ?>
									<h4 class="green-text"><?php the_field('insights_header_a'); ?></h4>
								</div>
								<p class="info-text">
									<?php the_field('insights_description_a'); ?>
								</p>
							</div>
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_icon_b')): ?>
										<img src="<?php the_field('insights_icon_b'); ?>" alt="" class="info-icon"/>
									<?php endif; ?>
									<h4 class="purple-text"><?php the_field('insights_header_b'); ?></h4>
								</div>
								<p class="info-text">
									<?php the_field('insights_description_b'); ?>
								</p>
							</div>
							<div class="">
								<div class="info-header">
									<?php if (get_field('insights_icon_c')): ?>
										<img src="<?php the_field('insights_icon_c'); ?>" alt="" class="info-icon"/>
									<?php endif; ?>
									<h4 class="orange-text"><?php the_field('insights_header_c'); ?></h4>
								</div>
								<p class="info-text">
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
get_sidebar();
get_footer();
