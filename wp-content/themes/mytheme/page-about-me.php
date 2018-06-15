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
 * @package MyTheme
 */

get_header('about');
?>
<div class="container" id="about-me-container">
	<div class="row" id="about-me-row">
		<div class="col-sm-7">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<img id="profile-pic" src="<?php echo get_home_url();?>/wp-content/uploads/2018/06/headerPic-1-e1527987487854.jpg">

					<h2>Christopher Brown - University of Dayton Research Institute</h2>
					<p>I am currently employed by the University of Dayton Research Institute (UDRI), and a proud student of the University of Dayton.
					I have worked on both the front-end and back-end of several major websites. Examples of my work include the website for
					<a href="http://www.ginghamsburg.org">Ginghamsburg Church</a> and the Customer Relationship Manager (CRM) for
					<a href="http://www.ohiochristian.edu">Ohio Chistian University</a>. Websites, however are not my only area of expertise. I have
					worked on the development and redesign of Ginghamsburg's app, and was one of the only students at my high school to complete all 3 years
				  Computer Science courses. I am currently majoring in Computer Science, and hope to continue on this fascinating career path!</p>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div id="side" class="col-sm-5">
			<?php
			get_sidebar('about'); ?>
		</div>
	</div><!-- row -->
</div><!-- container -->

<?php
get_footer();
