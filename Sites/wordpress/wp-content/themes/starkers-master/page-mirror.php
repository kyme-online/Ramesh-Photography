<?php
/**
 * Template Name: mirror
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


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.pajinate.js'; ?>"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#paging_container3').pajinate({
					items_per_page : 3,
					item_container_id : '.alt_content',
					nav_panel_id : '.alt_page_navigation'
					
				});
			});	
			
		</script>

				<div id="content-image">

						<div id="bodycontent">


								<div id="gallery">
 
									<div class="headertitle">

										<div id="subpage-content">
											<h1>MIRROR</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>


										<div id="paging_container3" class="container">
											
												<ul class="alt_content">

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-1/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/bliss-m-11010-small.png'; ?>"/></a><p><a href="/mirrorpost-1/">Bliss-m-11010</a></p></div>           
																	<div class="item"><a href="/mirrorpost-2/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/regattaII-M-11041-small.png'; ?>"/></a><p><a href="/mirrorpost-2/">Regatta II-M-11041</a></p></div> 
																	<div class="item"><a href="/mirrorpost-3/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/fusion-m-11050-small.png'; ?>"/></a><p><a href="/mirrorpost-3/">Fusion-m-11050</a></p></div> 
																	<div class="item"><a href="/mirrorpost-4/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/vera-m-11151-small.png'; ?>"/></a><p><a href="/mirrorpost-4/">Vera-m-11151</a></p></div> 
																	<div class="item"><a href="/mirrorpost-5/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/tori-l-m-11190-small.png'; ?>"/></a><p><a href="/mirrorpost-5/">Tori l-m-11190</a></p></div>           
																	<div class="item"><a href="/mirrorepost-6/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/sienna-m-11231-small.png'; ?>"/></a><p><a href="/mirrorpost-6/">Sienna-m-11231</a></p></div> 
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-7/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/pompeii-m-11350-small.png'; ?>"/></a><p><a href="/mirrorpost-7/">Pompeii-m-11350</a></p></div>           
																	<div class="item"><a href="/mirrorpost-8/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/mesa-ll-m-13112-small.png'; ?>"/></a><p><a href="/accentfurniturepost-8/">Mesa-ll-m-13112</a></p></div> 
																	<div class="item"><a href="/mirrorpost-9/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/soleil-m-14380-small.png'; ?>"/></a><p><a href="/mirrorpost-9/">Soleil-m-14380</a></p></div> 
																	<div class="item"><a href="/mirrorpost-10/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/bacall-m-14391-small.png'; ?>"/></a><p><a href="/mirrorpost-10/">Bacall-m-14391</a></p></div> 
																	<div class="item"><a href="/mirrorpost-11/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/miranda-m-14401-small.png'; ?>"/></a><p><a href="/mirrorpost-11/">Miranda-m-14401</a></p></div>           
																	<div class="item"><a href="/mirrorpost-12/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/casablanca-m-14405-small.png'; ?>"/></a><p><a href="/mirrorpost-12/">Casablanca-m-14405</a></p></div> 
																</div>
													</p></li>
												
													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-13/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/dubai-m-14407-small.png'; ?>"/></a><p><a href="/accentfurniturepost-13/">Dubai-m-14407</a></p></div>           
																	<div class="item"><a href="/mirrorpost-14/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/empress-m-15060-small.png'; ?>"/></a><p><a href="/mirrorpost-14/">Empress-m-15060</a></p></div> 
																	<div class="item"><a href="/mirrorpost-15/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/birlliant-m-15230-small.png'; ?>"/></a><p><a href="/mirrorpost-15/">Birlliant-m-15230</a></p></div> 
																	<div class="item"><a href="/mirrorpost-16/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/random-m-15250-small.png'; ?>"/></a><p><a href="/mirrorpost-16/">Random-m-15250</a></p></div> 
																	<div class="item"><a href="/mirrorpost-17/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/diana-m-15470-small.png'; ?>"/></a><p><a href="/mirrorpost-17/">Diana-m-15470</a></p></div>           
																	<div class="item"><a href="/mirrorpost-18/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/renaissance-m-14150-small.png'; ?>"/></a><p><a href="/mirrorpost-18/">Renaissance-m-14150</a></p></div> 
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-19/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/Lorna-m-11065-small.png'; ?>"/></a><p><a href="/mirrorpost-19/">Lorna-m-11065</a></p></div>           
																	<div class="item"><a href="/mirrorpost-20/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/Blane-m-11085-small.png'; ?>"/></a><p><a href="/mirrorpost-20/">Blane-m-11085</a></p></div> 
																	<div class="item"><a href="/mirrorpost-21/" ><img src="<?php echo get_template_directory_uri().'/images/mirror/Zoey-l-m-12052-small.png'; ?>"/></a><p><a href="/mirrorpost-21/">Zoey-l-m-12052</a></p></div> 
																	
																</div>
													</p></li>
												
												</ul>

											<div class="alt_page_navigation"></div>
										</div>


					            </div>
                     					<div style="clear:both"></div>

						</div>


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

