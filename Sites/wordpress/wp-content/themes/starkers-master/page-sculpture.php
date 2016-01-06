<?php
/**
 * Template Name: sculpture
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
											<h1>SCULPTURE</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>
 
									<div id="paging_container3" class="container">
											
												<ul class="alt_content">
														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/sculpturepost-1/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8398-small.png'; ?>"/></a><p><a href="/sculpturepost-1">JRA-8398</a></p></div>
																	<div class="item"><a href="/sculpturepost-2/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8545-small.png'; ?>"/></a><p><a href="/sculpturepost-2">JRA-8545</a></p></div>
																	<div class="item"><a href="/sculpturepost-3/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8765-small.png'; ?>"/></a><p><a href="/sculpturepost-3">JRA-8765</a></p></div>
																	<div class="item"><a href="/sculpturepost-4/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8769-small.png'; ?>"/></a><p><a href="/sculpturepost-4">JRA-8769</a></p></div>
																	<div class="item"><a href="/sculpturepost-5/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9069-small.png'; ?>"/></a><p><a href="/sculpturepost-5">JRA-9069</a></p></div>
																	<div class="item"><a href="/sculpturepost-6/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9099-small.png'; ?>"/></a><p><a href="/sculpturepost-6">JRA-9099</a></p></div>
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/sculpturepost-7/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9217-small.png'; ?>"/></a><p><a href="/sculpturepost-7">JRA-9217</a></p></div>
																	<div class="item"><a href="/sculpturepost-8/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9262-small.png'; ?>"/></a><p><a href="/sculpturepost-8">JRA-9262</a></p></div>
																	<div class="item"><a href="/sculpturepost-9/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9313S3-small.png'; ?>"/></a><p><a href="/sculpturepost-9">JRA-9313S3</a></p></div>
																	<div class="item"><a href="/sculpturepost-10/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9314-small.png'; ?>"/></a><p><a href="/sculpturepost-10">JRA-9314</a></p></div>
																	<div class="item"><a href="/sculpturepost-11/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9397-small.png'; ?>"/></a><p><a href="/sculpturepost-11">JRA-9397</a></p></div>
																	<div class="item"><a href="/sculpturepost-12/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9483-small.png'; ?>"/></a><p><a href="/sculpturepost-12">JRA-9483</a></p></div>
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/sculpturepost-13/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9545S2-small.png'; ?>"/></a><p><a href="/sculpturepost-13">JRA-9545S2</a></p></div>
																	<div class="item"><a href="/sculpturepost-14/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9562-small.png'; ?>"/></a><p><a href="/sculpturepost-14">JRA-9562</a></p></div>
																	<div class="item"><a href="/sculpturepost-15/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9565-small.png'; ?>"/></a><p><a href="/sculpturepost-15">JRA-9565</a></p></div>
																	<div class="item"><a href="/sculpturepost-16/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9575-small.png'; ?>"/></a><p><a href="/sculpturepost-16">JRA-9575</a></p></div>
																	<div class="item"><a href="/sculpturepost-17/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9585-small.png'; ?>"/></a><p><a href="/sculpturepost-17">JRA-9585</a></p></div>
																	<div class="item"><a href="/sculpturepost-18/" ><img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9702-small.png'; ?>"/></a><p><a href="/sculpturepost-18">JRA-9702</a></p></div>
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

			

