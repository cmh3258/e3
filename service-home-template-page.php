<?php

/* Template Name: Services Home Template Page */

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
	
	ob_clean();
	ob_start();

	$url = get_permalink(get_page_by_title('E3 Excel'));
	echo $url;
	wp_redirect($url);
	exit();

 ?>



