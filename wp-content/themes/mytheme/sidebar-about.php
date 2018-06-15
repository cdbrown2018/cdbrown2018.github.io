<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<h5>Site Links</h5>
	<a href="<?php echo site_url(); ?>">&emsp;Home</a>

	<br><br>
	<h6>Contact Me</h6>
	<p>&emsp;Email: <a href="mailto:Christopher.Brown@udri.udayton.edu">Christopher.Brown@udri.udayton.edu</a>
	<br>&emsp;Telephone: <a href="tel:3522634236">352.263.4236</a></p>
</aside><!-- #secondary -->
