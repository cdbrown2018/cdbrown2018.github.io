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
	<div id="information">
		<h5>Site Links</h5>
		<a href="<?php echo site_url(); ?>">&emsp;Home</a>

		<br><br>
		<h6>Contact Me</h6>
		<p>&emsp;Email: <a href="mailto:Christopher.Brown@udri.udayton.edu">Christopher.Brown@udri.udayton.edu</a>
		<br>&emsp;Telephone: <a href="tel:3522634236">352.263.4236</a></p>
	</div>
	<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="cdbrown2018"><a class="LI-simple-link" href='https://www.linkedin.com/in/cdbrown2018?trk=profile-badge'>Christopher Brown</a></div>
</aside><!-- #secondary -->
