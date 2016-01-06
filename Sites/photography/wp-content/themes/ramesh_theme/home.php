<?php
/**
 * Template Name: staticpage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ramesh_theme
 */

get_header(); ?>



<div class="tcycle" data-fx=scroll data-timeout=3000>
    <img src="<?php bloginfo('template_directory'); ?>/images/bg1.png"/>
   	<img src="<?php bloginfo('template_directory'); ?>/images/bg2.png"/>
	<img src="<?php bloginfo('template_directory'); ?>/images/bg3.png"/>  
	<img src="<?php bloginfo('template_directory'); ?>/images/bg4.png"/>
</div>

<div class="home-body">
  <div id="primary-static" class="content-area">

		<main id="main-static" class="site-main-static hide-footer" role="main">

				
				<div id="home-content" >

					


				</div>

				
		
	
			<?php get_template_part( '', true ); ?>

		

		</main><!-- #main -->
	</div><!-- #primary -->

 </div>  
	
 
   
<?php get_sidebar(); ?> 
<?php get_footer(); ?>

 <div class="static-footer"> &copy;<?=date("Y", time());?> Ramesh-Photography. All right reserved. </div>

<style type=”text/css”>
.footer-detail{
	display: none !important;
}
</style> 





