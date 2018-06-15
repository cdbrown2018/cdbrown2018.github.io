<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

get_header('main');
?>
			<div id="primary" class="content-area">
				<img class = "intro-img" src="<?php echo site_url();?>/wp-content/uploads/2018/06/IMG_0107-e1527997235976.jpg" id="feature_img">
				<div id = "intro-text">Christopher Brown</div>
			</div><!-- #primary -->
<?php
get_footer();
