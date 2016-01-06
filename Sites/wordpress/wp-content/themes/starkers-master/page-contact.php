<?php
/**
 * Template Name: contact
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


				<div id="content-contact">

						

								<div id="contact">

												<?php query_posts( 'post_type=contact'); ?>
										<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
												

										<h1><?php the_title(); ?></h1> 
														<div class="contactline"></div>


										<?php the_content(); ?>
										<?php comments_template( '', true ); ?>
										<?php endwhile; ?>

												
											
												<script type="text/javascript">
													 var RecaptchaOptions = {
													    theme : 'theme_name'
													 };
												 </script>
									
								</div>


								<div id="rightcontact">
 
										<div id="rightbanner">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.8585735389015!2d55.30690300000002!3d25.24168799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42d6cdd392a3%3A0x92b616bb6bfa1852!2sFour+Seasons+Ramesh+Gallery!5e0!3m2!1sen!2s!4v1402312842407" width="705" height="930" frameborder="0" style="border:0"></iframe>

										</div>


					            </div>
                     					<div style="clear:both"></div>

						


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

