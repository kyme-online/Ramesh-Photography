<?php
/**
 * Template Name: furniture
 *
 * Selectable from a dropdown menu on the edit page screen.
 *
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


				<div id="content">

						

								<div id="left">

												<?php query_posts( 'post_type=furniture'); ?>
										<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
												

										<h1><?php the_title(); ?></h1> 
														<div class="furniture-line"></div>


										<?php the_content(); ?>
										<?php comments_template( '', true ); ?>
										<?php endwhile; ?>



								</div>
								

								<div id="right">
 
										<div id="rightbanner">
											
											<img src="<?php bloginfo('template_directory'); ?>/images/furniture.png" />

										</div>


					            </div>
                     					<div style="clear:both"></div>

						</div>


				

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

