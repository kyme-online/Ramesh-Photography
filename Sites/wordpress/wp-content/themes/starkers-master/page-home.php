<?php
/**
 * Template Name: home  
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


<div class="tcycle" data-fx=scroll data-timeout=3000>
    <img src="<?php bloginfo('template_directory'); ?>/images/bg1.png"/>
   	<img src="<?php bloginfo('template_directory'); ?>/images/bg2.png"/>
  	<img src="<?php bloginfo('template_directory'); ?>/images/bg3.png"/>
  	<img src="<?php bloginfo('template_directory'); ?>/images/bg4.png"/>
</div>
	
	

				<div id="homecontent">
					
						<div id="homebodycontent">
										
									<div class="ipadmenus">
										<div id="livingroom-mobile">
											<a href="/livingroom/"></a>
										</div>
										<div id="accentfurniture-mobile">
											<a href="/accentfurniture/"></a>
										</div>
										<div id="vases-mobile">
											<a href="/vase/"></a>
										</div>
										<div id="sculpture-mobile">
											<a href="/sculpture/"></a>
										</div>
										<div id="candleholder-mobile">
											<a href="/candleholder/"></a>
										</div>
										<div id="artistic-mobile">
											<a href="/artistic/"></a>
										</div>
										<div id="historical-mobile">
											<a href="/historical/"></a>
										</div>

									</div>


								<div id="homeleft">

												<?php query_posts( 'post_type=home'); ?>
										<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
												

										<h1><?php the_title(); ?></h1> 
														<div class="line1"></div>


										<?php the_content(); ?>
										<?php comments_template( '', true ); ?>
										<?php endwhile; ?> 

										
								</div>

								<div id="homeright">
 
               						<div id="homerightbanner">
										
               						
               						</div>


                        	</div>

								
                     					<div style="clear:both"></div>

						</div>
				

				</div>



				<div class="home-footer"><?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?> </div>



