<?php
/**
 * Template Name: vases
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
											<h1>VASE</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>	
 
									<div id="paging_container3" class="container">
											
												<ul class="alt_content">
														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/vasepost-1/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8354-small.png'; ?>"/></a><p><a href="/vasepost-1/">JRA-8354</a></p></div>
																	<div class="item"><a href="/vasepost-2/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8666S3-small.png'; ?>"/></a><p><a href="/vasepost-2/">JRA-8666S3</a></p></div>
																	<div class="item"><a href="/vasepost-3/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8743-small.png'; ?>"/></a><p><a href="/vasepost-3/">JRA-8743</a></p></div>
																	<div class="item"><a href="/vasepost-4/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8815-small.png'; ?>"/></a><p><a href="/vasepost-4/">JRA-8815</a></p></div>
																	<div class="item"><a href="/vasepost-5/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8817S2-small.png'; ?>"/></a><p><a href="/vasepost-5/">JRA-8817S2</a></p></div>
																	<div class="item"><a href="/vasepost-6/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8823-small.png'; ?>"/></a><p><a href="/vasepost-6/">JRA-8823</a></p></div>
																</div>
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/vasepost-7/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8826S3-small.png'; ?>"/></a><p><a href="/vasepost-7/">JRA-8826S3</a></p></div>
																	<div class="item"><a href="/vasepost-8/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8889-small.png'; ?>"/></a><p><a href="/vasepost-8/">JRA-8889</a></p></div>
																	<div class="item"><a href="/vasepost-9/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8904-small.png'; ?>"/></a><p><a href="/vasepost-9/">JRA-8904</a></p></div>
																	<div class="item"><a href="/vasepost-10/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-8964-small.png'; ?>"/></a><p><a href="/vasepost-10/">JRA-8964</a></p></div>
																	<div class="item"><a href="/vasepost-11/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9211-small.png'; ?>"/></a><p><a href="/vasepost-11/">JRA-9211</a></p></div>
																	<div class="item"><a href="/vasepost-12/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9220S2-small.png'; ?>"/></a><p><a href="/vasepost-12/">JRA-9220S2</a></p></div>
																</div>
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/vasepost-13/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9263-small.png'; ?>"/></a><p><a href="/vasepost-13">JRA-9263</p></div>
																	<div class="item"><a href="/vasepost-14/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9286-small.png'; ?>"/></a><p><a href="/vasepost-14/">JRA-9286</a></p></div>
																	<div class="item"><a href="/vasepost-15/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9299-small.png'; ?>"/></a><p><a href="/vasepost-15/">JRA-9299</a></p></div>
																	<div class="item"><a href="/vasepost-16/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9345-small.png'; ?>"/></a><p><a href="/vasepost-16/">JRA-9345</a></p></div>
																	<div class="item"><a href="/vasepost-17/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9458-small.png'; ?>"/></a><p><a href="/vasepost-17/">JRA-9458</a></p></div>
																	<div class="item"><a href="/vasepost-18/" ><img src="<?php echo get_template_directory_uri().'/images/vases/JRA-9537-small.png'; ?>"/></a><p><a href="/vasepost-18/">JRA-9537</a></p></div>
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

			

