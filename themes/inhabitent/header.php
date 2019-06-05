<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php home_url('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php home_url('pingback_url');?>">
	<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="nav-container">
					<div class="site-branding">
						<div class="site-logo">
							<a href="<?php echo home_url('/'); ?>" rel="home">
								<img class="logo-green" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent.svg">
								<img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent-white.svg">
							</a>
						</div>

						<h1 class="site-title screen-reader-text"> 
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php home_url('name');?></a>
						</h1>
						<p class="site-description"><?php home_url('description');?></p>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>

						<div class="header-search">
							<?php get_search_form();?>
						</div>
					</nav><!--end of #site-navigation -->
				</div><!-- end of .nav-container -->
			</header><!-- #masthead -->
		<div id="content" class="site-content">