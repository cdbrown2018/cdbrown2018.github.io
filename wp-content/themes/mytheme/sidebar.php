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
	<h4>Site Links</h5>
	<a href="<?php echo site_url(); ?>/about-me">&emsp;About Me</a>
</aside><!-- #secondary -->
