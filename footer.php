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
					<?php
						$page_id = get_page_by_title( 'Contact' );
						if (get_field('address', $page_id)) {
								echo '<div class="">';
								the_field('address', $page_id);
								echo '</div>';
						}
					?>
				</div>
				<div class="">
					<h4 class="title white">Our Services</h4>
					<ul>
						<?php
							$menuLocations = get_nav_menu_locations();
							$menuID = $menuLocations['menu-1'];
							$primaryNav = wp_get_nav_menu_items($menuID);
							foreach ( $primaryNav as $navItem ) {
							    //if has a parent, then add to Ourservices array
							    if ($navItem->menu_item_parent) {
							    	echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
							    }
							}
						?>
						<!-- <li><a href="<?php echo get_permalink(get_page_by_title('E3 Excel')) ?>">E3 Excell</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_title('3D Growth')) ?>">3D Growth</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_title('RaiseUp Texas')) ?>">Raiseup Texas</a></li> -->
					</ul>
				</div>
				<div class="">
					<h4 class="title white">Contact</h4>
					<?php
						$page_id = get_page_by_title( 'Contact' );
						if (get_field('contact_info', $page_id)) {
								echo '<div class="">';
								the_field('contact_info', $page_id);
								echo '</div>';
						}
					?>
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
