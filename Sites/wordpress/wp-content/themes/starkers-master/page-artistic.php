<?php
/**
 * Template Name: artistic
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
			$('a.back').live('click', function() { 
      		$('#paging_container3').find('a.previous_link').trigger('click'); 
	      return false;
	    </script>

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
											<h1>ARTISTIC PHOTOGRAPHS</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="/artistic/" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>
 
									<div id="paging_container3" class="container">
											
												<ul class="alt_content">

														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/artisticpost-1/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/1-small.png'; ?>"/></a><p><a href="/artisticpost-1/">FS14_100</a></p></div>
																	<div class="item"><a href="/artisticpost-2/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/2-small.png'; ?>"/></a><p><a href="/artisticpost-2/">FS14_101</a></p></div>        
																	<div class="item"><a href="/artisticpost-3/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/3-small.png'; ?>"/></a><p><a href="/artisticpost-3/">FS14_102</a></p></div>
																	<div class="item"><a href="/artisticpost-4/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/4-small.png'; ?>"/></a><p><a href="/artisticpost-4/">FS14_103</a></p></div>
																	<div class="item"><a href="/artisticpost-5/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/5-small.png'; ?>"/></a><p><a href="/artisticpost-5/">FS14_104</a></p></div>
																	<div class="item"><a href="/artisticpost-6/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/6-small.png'; ?>"/></a><p><a href="/artisticpost-6/">FS14_105</a></p></div>
																</div>
														</p></li>

															<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																 	<div class="item"><a href="/artisticpost-7/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/7-small.png'; ?>"/></a><p><a href="/artisticpost-7/">FS14_106</a></p></div>
																	<div class="item"><a href="/artisticpost-8/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/8-small.png'; ?>"/></a><p><a href="/artisticpost-8/">FS14_107</a></p></div>        
																	<div class="item"><a href="/artisticpost-9/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/9-small.png'; ?>"/></a><p><a href="/artisticpost-9/">FS14_108</a></p></div>
																	<div class="item"><a href="/artisticpost-10/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/10-small.png'; ?>"/></a><p><a href="/artisticpost-10/">FS14_109</a></p></div>        
																	<div class="item"><a href="/artisticpost-11/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/11-small.png'; ?>"/></a><p><a href="/artisticpost-11/">FS14_110</a></p></div>
																	<div class="item"><a href="/artisticpost-12/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/12-small.png'; ?>"/></a><p><a href="/artisticpost-12/">FS14_111</a></p></div>
																</div>
														</p></li>

														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/artisticpost-13/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/13-small.png'; ?>"/></a><p><a href="/artisticpost-13/">FS14_112</a></p></div>
																	<div class="item"><a href="/artisticpost-14/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/14-small.png'; ?>"/></a><p><a href="/artisticpost-14/">FS14_113</a></p></div>
																	<div class="item"><a href="/artisticpost-15/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/15-small.png'; ?>"/></a><p><a href="/artisticpost-15/">FS14_114</a></p></div>
																	<div class="item"><a href="/artisticpost-16/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/16-small.png'; ?>"/></a><p><a href="/artisticpost-16/">FS14_115</a></p></div>
																	<div class="item"><a href="/artisticpost-17/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/17-small.png'; ?>"/></a><p><a href="/artisticpost-17/">FS14_116</a></p></div>
																	<div class="item"><a href="/artisticpost-18/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/18-small.png'; ?>"/></a><p><a href="/artisticpost-18/">FS14_117</a></p></div>
																</div>
														</p></li>

															<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/artisticpost-19/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/19-small.png'; ?>"/></a><p><a href="/artisticpost-19/">FS14_118</a></p></div>        
																	<div class="item"><a href="/artisticpost-20/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/20-small.png'; ?>"/></a><p><a href="/artisticpost-20/">FS14_119</a></p></div>
																	<div class="item"><a href="/artisticpost-21/" ><img src="<?php echo get_template_directory_uri().'/images/artistic/21-small.png'; ?>"/></a><p><a href="/artisticpost-21/">FS14_120</a></p></div>
																	
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

			

