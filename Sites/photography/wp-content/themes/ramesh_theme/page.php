<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ramesh_theme
 */

get_header(); ?>


 	
 		<div id="container">

				<div id="primary" class="content-area">

						<div id="banner"></div>


					<main id="main" class="site-main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // end of the loop. ?>


						<?php $args = array(
									'post_type' => 'attachment',
									'post_status' => 'any',
									'tax_query' => array(
										array(
											'taxonomy' => 'media_category', // your taxonomy
											'field' => 'id',
											'terms' => 7 // term id (id of the media category)
										)
									)
								);
								$the_query = new WP_Query( $args );

								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
										echo wp_get_attachment_image( get_the_ID(), 'full' );
									}
								} else {
									// no attachments found
								}

								wp_reset_postdata();

									?>



					</main><!-- #main -->
				</div><!-- #primary -->

	

<?php get_sidebar(); ?>
<?php get_footer(); ?>

 
 		</div>


