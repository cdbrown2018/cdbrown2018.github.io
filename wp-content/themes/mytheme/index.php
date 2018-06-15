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
				<div id = "intro-text">christopher brown</div>
			</div><!-- #primary -->

			<!-- About me summary -->
			<section id = "bio-summary">
				<div id="bio-text">
					<h1>who am i?</h1>
					<ul>
						<li>avid programmer</li>
						<li>proud employee of the university of dayton research institute</li>
						<li>computer science major</li>
					</ul>
				</div>
			</section>
			<!-- end About me summary -->

			<!-- Projects -->
			<section id = "projects">
				<div id = "projects-text">
					<h1>noteable projects</h1>
					<ul>
						<li>this website</li>
						<li>ginghamsburg application</li>
						<li>ohio christian university crm</li>
					</ul>
				</div>
			</section>
			<!-- end Projects -->

			<!-- More -->
			<section id="more">
				<div id="more-text">
					<h1>want more?</h1>
					<ul>
						<li><a id="about-me-link" href="<?php echo site_url(); ?>/about-me">about me</a></li>
					</ul>
				</div>
			</section>
			<!-- end More -->
<?php
get_footer();
