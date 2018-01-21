<?php
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


		<div class="grid">
			<div>
				<h2>Contact Us</h2>
				<!-- Maybe use: WPForms -->
				<form>
					<input type="" name="" placeholder="">
				</form>
			</div>
			<div>
				<h4>Director of Strategic</h4>
				<ul>
					<li>D Thompson</li>
					<li>(512) 568-5035</li>
					<li>dthompson@e3alliance.org</li>
				</ul>
			</div>
		</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
