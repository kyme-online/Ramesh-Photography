<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ramesh_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> <!-- For full background effect -->
<script src="http://malsup.github.com/jquery.tcycle.js"></script>

<script src="js/dropdown/jquery.js"></script>
<script src="js/dropdown/jquery-ui.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Js script for menu dropdown -->
<script> 
$( document ).click(function() {
$( "#dropdownmenu" ).toggle( "slide" );
});
</script>
	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ramesh_theme' ); ?></a>

<div class="fixmenu"></div>

<div class="upperbar"> <!-- Controls the Left bar -->

	<div id="upperbar-content">
			<div id="logo">
				<a href="<?php echo home_url(); ?>"></a><p class="mobile-logo">FOUR SEASONS RAMESH GALLERY</p>
			</div>
                            	

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<!--h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1-->
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="btn menu-toggle"><?php _e( '', 'ramesh_theme' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary','container' => '' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		 
 	</div>
 					
</div><!-- End of Lupp bar -->

 

	<div id="content" class="site-content">


