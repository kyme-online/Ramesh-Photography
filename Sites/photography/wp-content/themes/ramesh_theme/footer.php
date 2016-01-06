<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ramesh_theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info footer-detail"> 
		&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.<!--
		
			<?php// echo date("Y"); ?><a href="<?php// echo esc_url( __( 'http://wordpress.org/', 'ramesh_theme' ) ); ?>"><?php// printf( __( 'Proudly powered by %s', 'ramesh_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php// printf( __( 'Theme: %1$s by %2$s.', 'ramesh_theme' ), 'Ramesh_theme', '<a href="http://kymestudio.com" rel="designer">RockyMendez</a>' ); ?> -->
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div> <!-- END OF CONTAINER  --->

</body>
</html>
