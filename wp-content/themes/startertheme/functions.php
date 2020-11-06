<?php
/**
 * startertheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package startertheme
 */



if ( ! function_exists( 'startertheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function startertheme_setup() {
        /*
         * Add web fonts for editor here
         */
        add_theme_support( 'editor-styles' );
        add_editor_style( array( 'css/editor-styles.css', str_replace( ',', '%2C', 'https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;700&family=Lato:ital,wght@0,300;0,700;1,300;1,700&display=swap' ) ));
        
        
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on startertheme, use a find and replace
		 * to change 'startertheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'startertheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

        
        
        
        /* enable wide blocks */
        add_theme_support('align-wide');
        
        
        
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        
        /*
        add_image_size('leaderboard', 728, 90, true); 
        add_image_size('rectangle', 300, 250, true); */
        
        
        
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'startertheme' ),
            'menu-social' => esc_html__( 'Social Menu', 'startertheme' ),
            'menu-footer' => esc_html__( 'Footer Menu', 'startertheme' ),
            'menu-footer-social' => esc_html__( 'Footer Social Menu', 'startertheme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		/*add_theme_support( 'custom-background', apply_filters( 'startertheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );*/

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		/*add_theme_support( 'custom-logo', array(
			
			'flex-width'  => true,
			'flex-height' => true,
		) );*/
	}
endif;
add_action( 'after_setup_theme', 'startertheme_setup' );

    




/**
 * Load Gutenberg stylesheet.
 */
function startertheme_add_gutenberg_assets() {
	// Load the theme styles within Gutenberg.
	//wp_enqueue_style( 'startertheme-gutenberg', get_theme_file_uri( '/css/editor-styles.css' ), false );
    
    //wp_enqueue_style('startertheme-admin-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Roboto+Slab:500&display=swap' );
    
  
}
add_action( 'enqueue_block_editor_assets', 'startertheme_add_gutenberg_assets' );
    



/**
 *  Post Types and Taxonomies
 */
// Register custom posttypes
function create_posttypes() {
   /* register_post_type( 'startertheme-podcasts',
		array(
			'labels' => array(
				'name' => __( 'Podcasts' ),
				'singular_name' => __( 'Podcast' ),
			),
			'public' => true, //May change to false
			'has_archive' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-audio',
            'supports' => array( 'title', 'revisions', 'editor', 'thumbnail', 'excerpt', 'slug' , 'author'),
			'rewrite' => array('slug' => 'podcasts'), 
            'taxonomies' => array('category', 'post_tag'),
            'menu_position'   => 5,
		)
	);*/
   
}
add_action( 'init', 'create_posttypes' );



// create custom taxonomies
function creative_taxonomies() {

   /* register_taxonomy(
		'communities',
		array( 'post', 'startertheme-news', 'startertheme-podcasts', 'mec-events' ),
		array(
			'label' => __( 'Communities' ),
            'show_in_rest'      => true,
		)
	);
 */
}
add_action( 'init', 'creative_taxonomies' );



//make custom post types appear in archive pages
add_filter( 'pre_get_posts', 'startertheme_add_custom_post_types_to_query' );
function startertheme_add_custom_post_types_to_query( $query ) {
	/*if( 
		(is_tag() || is_category() || (is_archive() && !is_archive())
		$query->is_main_query() &&
        !is_admin() &&
		empty( $query->query_vars['suppress_filters'] )
	) {
		$query->set( 'post_type', array( 
			'post',
			'mec-events',
            'startertheme-news',
            'startertheme-podcasts',
		) );
        return $query;
	}*/
}




/**
 * Register blocks
 */

function register_acf_block_types() {

    // register a testimonial block.
    /*acf_register_block_type(array(
        'name'              => 'startertheme-simple-ddas',
        'title'             => __('Digital Display Ad'),
        'description'       => __('Display a digital display ad.'),
        'render_template'   => 'template-parts/blocks/block-ddas.php',
        'category'          => 'common',
        'icon'              => 'admin-customizer',
        'keywords'          => array( 'digital display ad', 'dda', 'ddas' , 'ad','advertisement','leaderboard','300x250','728x90','rectangle' ),
    ));*/
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function startertheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'startertheme_content_width', 1140 );
}
add_action( 'after_setup_theme', 'startertheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function startertheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Widget Area', 'startertheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'startertheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
     register_sidebar( array(
		'name'          => esc_html__( 'Footer Area One', 'startertheme' ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
     register_sidebar( array(
		'name'          => esc_html__( 'Footer Area Two', 'startertheme' ),
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'startertheme_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function startertheme_scripts() {
    wp_enqueue_style( 'startertheme-theme-setup', get_stylesheet_uri() );
    
    /*
     * Add web fonts here
     */
    wp_enqueue_style('startertheme-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Roboto+Slab:500&display=swap' );
     
    
    /*
     * Load jquery and bootstrap 
     */
    wp_enqueue_style('startertheme-bootstrap4-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'startertheme-jquery','https://code.jquery.com/jquery-3.5.1.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'startertheme-jquery-easing','https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'startertheme-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'startertheme-bootstrap4-js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    
     
     /*
     * Slick Slider (uncomment out if using)
     */
    //wp_enqueue_style( 'startertheme-slick-styles' , get_template_directory_uri() . '/inc/slick/slick.css');
    //wp_enqueue_script( 'startertheme-slick-js', get_template_directory_uri() . '/inc/slick/slick.min.js', array('jquery'), '20201016', true );
    
    
    
    /*
     * Load nav js and other
     */
	wp_enqueue_script( 'startertheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'startertheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'startertheme-skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), '20160310', true );
    
     /* 
     * Load main stylesheet  
     */
    wp_enqueue_style( 'startertheme-styles', get_template_directory_uri() . '/css/style.css' );
    
    /* 
     * Load main JS
     */
    wp_enqueue_script( 'startertheme-main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );
    
    
    
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'startertheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Hide Advanced Custom Fields
 */
//add_filter('acf/settings/show_admin', '__return_false');
