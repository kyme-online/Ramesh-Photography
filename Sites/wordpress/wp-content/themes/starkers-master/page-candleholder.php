<?php
/**
 * Template Name: candleholder
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
											<h1>CANDLE HOLDER</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>
 
									<div id="paging_container3" class="container">
											
												<ul class="alt_content">
														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/candleholderpost-1/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8218-small.png'; ?>"/></a><p><a href="/candleholderpost-1/">JRA-8218</a></p></div>
																	<div class="item"><a href="/candleholderpost-2/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8449S2-small.png'; ?>"/></a><p><a href="/candleholderpost-2/">JRA-8449S2</a></p></div>
																	<div class="item"><a href="/candleholderpost-3/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8456-small.png'; ?>"/></a><p><a href="/candleholderpost-3/">JRA-8456</a></p></div>
																	<div class="item"><a href="/candleholderpost-4/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8515S3-small.png'; ?>"/></a><p><a href="/candleholderpost-4/">JRA-8515S3</a></p></div>
																	<div class="item"><a href="/candleholderpost-5/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8581-small.png'; ?>"/></a><p><a href="/candleholderpost-5/">JRA-8581</a></p></div>
																	<div class="item"><a href="/candleholderpost-6/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8597-small.png'; ?>"/></a><p><a href="/candleholderpost-6/">JRA-8597</a></p></div>
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/candleholderpost-7/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8646-small.png'; ?>"/></a><p><a href="/candleholderpost-7/">JRA-8646</a></p></div>
																	<div class="item"><a href="/candleholderpost-8/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8649-small.png'; ?>"/></a><p><a href="/candleholderpost-8/">JRA-8649</a></p></div>
																	<div class="item"><a href="/candleholderpost-9/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8833S2-small.png'; ?>"/></a><p><a href="/candleholderpost-9/">JRA-8833S2</a></p></div>
																	<div class="item"><a href="/candleholderpost-10/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8860S2-small.png'; ?>"/></a><p><a href="/candleholderpost-10/">JRA-8860S2</a></p></div>
																	<div class="item"><a href="/candleholderpost-11/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8878-small.png'; ?>"/></a><p><a href="/candleholderpost-11/">JRA-8878</a></p></div>
																	<div class="item"><a href="/candleholderpost-12/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9256-small.png'; ?>"/></a><p><a href="/candleholderpost-12/">JRA-9256</a></p></div>
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/candleholderpost-13/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9378-small.png'; ?>"/></a><p><a href="/candleholderpost-13/">JRA-9378</a></p></div>
																	<div class="item"><a href="/candleholderpost-14/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9381-small.png'; ?>"/></a><p><a href="/candleholderpost-14/">JRA-9381</a></p></div>
																	<div class="item"><a href="/candleholderpost-15/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9382-small.png'; ?>"/></a><p><a href="/candleholderpost-15/">JRA-9382</a></p></div>
																	<div class="item"><a href="/candleholderpost-16/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9536-small.png'; ?>"/></a><p><a href="/candleholderpost-16/">JRA-9536</a></p></div>
																	<div class="item"><a href="/candleholderpost-17/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9560-small.png'; ?>"/></a><p><a href="/candleholderpost-17/">JRA-9560</a></p></div>
																	<div class="item"><a href="/candleholderpost-18/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9621-small.png'; ?>"/></a><p><a href="/candleholderpost-18/">JRA-9621</a></p></div>
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/candleholderpost-19/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9622-small.png'; ?>"/></a><p><a href="/candleholderpost-19/">JRA-9622</a></p></div>
																	<div class="item"><a href="/candleholderpost-20/" ><img src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9649S3-small.png'; ?>"/></a><p><a href="/candleholderpost-20/">JRA-9649S3</a></p></div>
																	
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

			

