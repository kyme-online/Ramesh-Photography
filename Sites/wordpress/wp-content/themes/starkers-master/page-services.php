<?php
/**
 * Template Name: services
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


				<div id="content-service">

					
								<div class="frame">

										<div id="service">

														<?php query_posts( 'post_type=services'); ?>
												<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
														

												<h1><?php the_title(); ?></h1> 
																<div class="service-line"></div>


												<?php the_content(); ?>
												<?php comments_template( '', true ); ?>
												<?php endwhile; ?>

										</div>
								</div>

										<div class="rightframe">
				 
														<div class="rightcontent">
															
																		<div class="service-img1">
																			<img src="<?php echo get_template_directory_uri().'/images/service-img1.png'; ?>" />

																		</div>

																		<div class="service-img2">
																			<img src="<?php echo get_template_directory_uri().'/images/service-img2.png'; ?>" />

																		</div>

																		<div class="service-img3">
																			<img src="<?php echo get_template_directory_uri().'/images/service-img3.png'; ?>" />

																		</div>

																		<div class="service-img4">
																			<img src="<?php echo get_template_directory_uri().'/images/service-img4.png'; ?>" />

																		</div>

																<div style="clear:both"></div>
														</div>


									     </div>

							     		<div style="clear:both"></div>

						


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

