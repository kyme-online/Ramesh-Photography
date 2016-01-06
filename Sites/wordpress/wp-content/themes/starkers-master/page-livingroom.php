<?php
/**
 * Template Name: livingroom  
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
											<h1>LIVINGROOM</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>

										<div id="paging_container3" class="container">
											
												<ul class="alt_content"> 

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG /PNG -->
																 <div class="gallery-content">
																	<div class="item"><a href="/livingroompost-1/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/F2202-XM0321-small.png'; ?>"/></a><p><a href="/livingroompost-1/">F2202-XM0321</a></p></div>
																	<div class="item"><a href="/livingroompost-2/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/F2204-XM0108-small.png'; ?>"/></a><p><a href="/livingroompost-2/">F2204-XM0108</a></p></div>
																	<div class="item"><a href="/livingroompost-3/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/F2304-XM0317-small.png'; ?>"/></a><p><a href="/livingroompost-3">F2304-XM0317</a></p></div>
																	<div class="item"><a href="/livingroompost-4/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/F2311A-XM0328-small.png'; ?>"/></a><p><a href="/livingroompost-4">F2311A-XM0328</a></p></div>
																	<div class="item"><a href="/livingroompost-5/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/F2320-XM0174-small.png'; ?>"/></a><p><a href="/livingroompost-5">F2320-XM0174</a></p></div>
																	<div class="item"><a href="/livingroompost-6/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11000-small.png'; ?>"/></a><p><a href="/livingroompost-6">FS-11000</a></p></div>
																<div style="clear:both"></div>
																</div> 
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG /PNG -->
																 <div class="gallery-content">
																	<div class="item"><a href="/livingroompost-7/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11060-small.png'; ?>"/></a><p><a href="/livingroompost-7/">FS-11060</a></p></div>
																	<div class="item"><a href="/livingroompost-8/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11080-small.png'; ?>"/></a><p><a href="/livingroompost-8/">FS-11080</a></p></div>
																	<div class="item"><a href="/livingroompost-9/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11110-small.png'; ?>"/></a><p><a href="/livingroompost-9">FS-11110</a></p></div>
																	<div class="item"><a href="/livingroompost-10/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11120-small.png'; ?>"/></a><p><a href="/livingroompost-10">FS-11120</a></p></div>
																	<div class="item"><a href="/livingroompost-11/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2206-XM0169-small.png'; ?>"/></a><p><a href="/livingroompost-11">W2206-XM0169</a></p></div>
																	<div class="item"><a href="/livingroompost-12/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2208-XM0055-small.png'; ?>"/></a><p><a href="/livingroompost-12">W2208-XM0055</a></p></div>
																</div>
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG /PNG -->
																 <div class="gallery-content">
																	<div class="item"><a href="/livingroompost-13/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2208-XM0169-small.png'; ?>"/></a><p><a href="/livingroompost-13/">W2208-XM0169</a></p></div>
																	<div class="item"><a href="/livingroompost-14/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2210-XM0220-small.png'; ?>"/></a><p><a href="/livingroompost-14/">W2210-XM0220</a></p></div>
																	<div class="item"><a href="/livingroompost-15/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2210A-XM0005C-small.png'; ?>"/></a><p><a href="/livingroompost-15">W2210A-XM0005C</a></p></div>
																	<div class="item"><a href="/livingroompost-16/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2306-XM0317-small.png'; ?>"/></a><p><a href="/livingroompost-16">W2306-XM0317</a></p></div>
																	<div class="item"><a href="/livingroompost-17/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2323A-XM0193A-small.png'; ?>"/></a><p><a href="/livingroompost-17">W2323A-XM0193A</a></p></div>
																	<div class="item"><a href="/livingroompost-18/" ><img src="<?php echo get_template_directory_uri().'/images/livingroom/W2408-XM0319-small.png'; ?>"/></a><p><a href="/livingroompost-18">W2408-XM0319</a></p></div>
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

			

