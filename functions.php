<?php
/**
 * packagingx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package packagingx
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'packagingx_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function packagingx_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on packagingx, use a find and replace
		 * to change 'packagingx' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'packagingx', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-header' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'product', 193, 180, true );
        add_image_size( 'blog-list', 350, 300, true );
		add_image_size( 'blog', 1170, 466, true );
		add_image_size( 'product-cat', 310, 310, true );
		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'menu-1' => esc_html__( 'Primary', 'packagingx' ),
		// 	)
		// );
			function register_my_menus() {
			  register_nav_menus(
			    array(
			      'header-menu' => __( 'Header Menu' ),
			      //'extra-menu' => __( 'Extra Menu' )
			    )
			  );
			}
			add_action( 'init', 'register_my_menus' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'packagingx_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'packagingx_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function packagingx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'packagingx_content_width', 640 );
}
add_action( 'after_setup_theme', 'packagingx_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function packagingx_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'packagingx' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'packagingx' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'packagingx_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function packagingx_scripts() {
	//wp_enqueue_style( 'packagingx-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'packagingx-style', 'rtl', 'replace' );
	wp_enqueue_script( 'packagingx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'packagingx_scripts' );

function packagingx_name_styles() {
    
   // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),  true );
    //wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), true );
    //wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'packagingx_name_styles' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/custom-post.php';

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

function product_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => esc_html__( 'Product', 'packagingx' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types'  => 'product',
        'fields' => array(
        	
			array(
				'name'    => 'Specification Text',
				'desc'    => 'Enter a Specification Table Data.',
				'id'      => 'specific',
				'type'    => 'wysiwyg',
				'options' => array(	'textarea_rows' => 5, ),
			),
			array(
				'name'    => 'Description Text',
				'desc'    => 'Enter a Description Text.',
				'id'      => 'des',
				'type'    => 'wysiwyg',
				'options' => array(	'textarea_rows' => 7, ),
			),
			
		),
    ];

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'product_register_meta_boxes' );

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
         
    global $wp_query;

    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    if ( $paged >= 1 )
        $links[] = $paged;
 
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigations"><ul class="pagination">' . "\n"; 
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
         printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}

 function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
    // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="'.esc_url(home_url('/')).'">'.esc_html__('Home', 'packagingx').'</a>' . $sep;
    // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(',');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'packagingx' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'packagingx' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'packagingx' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'packagingx' ), get_the_date( _x( 'Y', 'yearly archives date format', 'packagingx' ) ) );
            } else {
                _e( 'Blog Archives', 'packagingx' );
            }
        }
    // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
    // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
    // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}