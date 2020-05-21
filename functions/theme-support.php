<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form'
	         ) 
	);

	// Add Excerpt to pages
	add_post_type_support( 'page', 'excerpt' );

	// Add Categories for pages
	function add_category_to_pages() {   
		// Add category metabox to page
		register_taxonomy_for_object_type('category', 'page');  
	}
	// Add to the admin_init hook of your theme functions.php file 
	add_action( 'init', 'add_category_to_pages' );
	

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	

	// Gutenberg theme support

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'editor-color-palette', array(
	    array(
	        'name' => __( 'strong magenta', 'themeLangDomain' ),
	        'slug' => 'strong-magenta',
	        'color' => '#a156b4',
	    ),
	    array(
	        'name' => __( 'light grayish magenta', 'themeLangDomain' ),
	        'slug' => 'light-grayish-magenta',
	        'color' => '#d0a5db',
	    ),
	    array(
	        'name' => __( 'very light gray', 'themeLangDomain' ),
	        'slug' => 'very-light-gray',
	        'color' => '#eee',
	    ),
	    array(
	        'name' => __( 'very dark gray', 'themeLangDomain' ),
	        'slug' => 'very-dark-gray',
	        'color' => '#444',
	    ),
	) );


	add_theme_support( 'editor-font-sizes', array(
	    array(
	        'name' => __( 'Small', 'themeLangDomain' ),
	        'size' => 12,
	        'slug' => 'small'
	    ),
	    array(
	        'name' => __( 'Regular', 'themeLangDomain' ),
	        'size' => 16,
	        'slug' => 'regular'
	    ),
	    array(
	        'name' => __( 'Large', 'themeLangDomain' ),
	        'size' => 36,
	        'slug' => 'large'
	    ),
	    array(
	        'name' => __( 'Huge', 'themeLangDomain' ),
	        'size' => 50,
	        'slug' => 'huge'
	    )
	) );

	add_theme_support('editor-styles');

	add_editor_style( 'style-editor.css' );
	

} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );