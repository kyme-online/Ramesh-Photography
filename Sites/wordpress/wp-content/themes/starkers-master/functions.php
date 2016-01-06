<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {		
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

        wp_register_script( 'jquery-1.11.0.min', get_template_directory_uri().'/js/jquery-1.11.0.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'jquery-1.11.0.min' );

        wp_register_script( 'jquery.bcat.bgswitcher', get_template_directory_uri().'/js/jquery.bcat.bgswitcher.js', array( 'jquery' ) );
		wp_enqueue_script( 'jquery.bcat.bgswitcher' );

		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		
	}	


	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}



	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {

		register_sidebar( array(
			'name' => 'Home right sidebar',
			'id' => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	


		// Creates home post type
	register_post_type('home', array(
	'label' => 'home',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'home'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );

		// Creates furniture post type
	register_post_type('furniture', array(
	'label' => 'Furniture',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'furniture'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );

	// Creates Accessories post type
	register_post_type('accessories', array(
	'label' => 'Accessories',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'accessories'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates Photography post type
	register_post_type('photography', array(
	'label' => 'Photography',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'photography'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );



// Creates Services post type
	register_post_type('services', array(
	'label' => 'Services',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'services'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates About post type
	register_post_type('about', array(
	'label' => 'About',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'about'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates contact post type
	register_post_type('contact', array(
	'label' => 'Contact',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'contact'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );



// Creates living room post type
	register_post_type('livingroom', array(
	'label' => 'Livingroom',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'livingroom'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );



// Creates Accent Furniture post type
	register_post_type('accentfurniture', array(
	'label' => 'Accent Furniture',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'accentfurniture'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates Vase post type
	register_post_type('vases', array(
	'label' => 'Vases',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'vases'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates Sculpture post type
	register_post_type('sculpture', array(
	'label' => 'Sculpture',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'sculpture'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates candle holder post type
	register_post_type('candleholder', array(
	'label' => 'CandleHolder',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'candleholder'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );

// Creates candle holder post type
	register_post_type('mirror', array(
	'label' => 'Mirror',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'mirror'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


// Creates Artistic post type
	register_post_type('artistic', array(
	'label' => 'Artistic',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'artistic'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );

// Creates Historical post type
	register_post_type('historical', array(
	'label' => 'Historical',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'historical'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'comments',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


























