<?php

/* Template Name: Contact Page Template */

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
				<div>
					<!-- <h2>Contact Us</h2> -->
					<!-- Maybe use: WPForms -->
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
				</div>
				<div>
					<h4 class="title gray-header">Director of Strategic</h4>
					<ul>
						<li class="title-condensed e3-blue">D Thompson</li>
						<li class="title-condensed e3-blue">(512) 568-5035</li>
						<li class="title-condensed e3-blue">dthompson@e3alliance.org</li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
