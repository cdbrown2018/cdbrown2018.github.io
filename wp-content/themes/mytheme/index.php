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
<style>
	a {
		color: white;
	}
	a:visited, a:hover {
		color: white;
	}
</style>
			<div id="primary intro" class="content-area">
				<img class = "intro-img" src="<?php echo site_url();?>/wp-content/uploads/2018/06/IMG_0107-e1527997235976.jpg" id="feature_img">
				<div id = "intro-text">christopher brown</div>
				<div id="down-arrow">
					<a href ="#bio-summary" id="down-svg"><i class="fas fa-chevron-circle-down fa-5x"></i></a>
				</div>
			</div><!-- #primary -->

			<script>
				function myMove() {
					var elem = document.getElementById("down-svg");
					var up = true;
					var pos = -1;
					var id = setInterval(frame, 15);
					function frame() {
							if (up && pos > -35) {
									elem.style.top = pos-- - 50 + 'px';
							} else if (!up && pos < 0) {
								elem.style.top = pos++ - 50 + 'px';
							}
							else {
								up = !up;
							}
					}
				}
				myMove();
			</script>

			<!-- About me summary -->
			<section id = "bio-summary">
				<a name="bio-summary"></a>
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
						<li><a href="<?php echo site_url(); ?>/project/test-project">ginghamsburg application</a></li>
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
