<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e3
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info"> -->
			<div class="container grid-footer">
				<!-- This can be static -->
				<div class="">
					<h4 class="title white">E3 Alliance</h4>
					<ul>
						<li>5930 Middle Fiskville Rd.</li>
						<li>Suite 507</li>
						<li>Austin, TX 78752</li>
					</ul>
				</div>
				<div class="">
					<h4 class="title white">Our Services</h4>
					<ul>
						<li><a href="<?php echo get_permalink(get_page_by_title('E3 Excel')) ?>">E3 Excell</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_title('3D Growth')) ?>">3D Growth</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_title('RaiseUp Texas')) ?>">Raiseup Texas</a></li>
					</ul>
				</div>
				<div class="">
					<h4 class="title white">Contact</h4>
					<ul>
						<li>D Thompson</li>
						<li>(512) 568-5035</li>
						<li><a href="mailto:dthompson@e3alliance.org?Subject=E3%20Question" class="email-link">dthompson@e3alliance.org</a></li>
					</ul>
				</div>
				
			</div>

			<div class="container">
					<p class="copyright">Copyright &#x24B8; 2017 E3 Alliance. All Rights Reserved.</p>
				</div>

		<!-- </div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
