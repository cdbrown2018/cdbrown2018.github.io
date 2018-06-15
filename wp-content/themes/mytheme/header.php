<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mytheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 float-left"></div>
				<div id="name" class="col-sm-8">
					<h1 id="name-text" class=""><span>Website Development</span></h1>
				</div>
				<div class="col-sm-2 float-right"></div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
