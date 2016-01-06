<?php
/**
 * Template Name: about
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


				<div id="content-about">

						

								<div class="frame">

									<div id="about">

													<?php query_posts( 'post_type=about'); ?>
											<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
													

											<h1><?php the_title(); ?> </h1>
															<div class="about-line"></div>


											<?php the_content(); ?>
											<?php comments_template( '', true ); ?>
											<?php endwhile; ?>

									</div>
											<a class="download download-1" type="button" value="Company Profile" href="http://fsrg.com/downloadfiles/CompanyProfile.pdf" target="_blank">Download Company Profile</a>
								</div>

									<div class="rightframe">
				 
														<div class="rightcontent">

															<div class="about-img1">
																<img class="about-img1" src="<?php echo get_template_directory_uri().'/images/about-img1.png'; ?>" />
															</div>

															<div class="about-img2">
																<img class="about-img1" src="<?php echo get_template_directory_uri().'/images/about-img2.png'; ?>" />
															</div>

															<div class="about-img3">
																<img class="about-img1" src="<?php echo get_template_directory_uri().'/images/about-img3.png'; ?>" />
															</div>

															
														</div>


									     </div>

							     		<div style="clear:both"></div>

								
 
						


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

