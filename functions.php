<?php
/**
 * zdravabeba functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zdravabeba
 */

if ( ! function_exists( 'zdravabeba_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zdravabeba_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zdravabeba, use a find and replace
		 * to change 'zdravabeba' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zdravabeba', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'zdravabeba' ),
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
		add_theme_support( 'custom-background', apply_filters( 'zdravabeba_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'zdravabeba_setup' );


/**
* Register custom post types for Zdravabeba theme
*
* @since 1.0.0
* @access public
*/
function register_custom_post_types() {

### Markers Custom Post Type ###

  $planiranjeLabels = array(
    'name'               => 'Planiranje',
    'singular_name'      => 'Planiranje',
    'menu_name'          => 'Planiranje',
    'name_admin_bar'     => 'Planiranje',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Planiranje',
    'new_item'           => 'New Planiranje',
    'edit_item'          => 'Edit Planiranje',
    'view_item'          => 'View Planiranje',
    'all_items'          => 'All Planiranje',
    'search_items'       => 'Search Planiranje',
    'parent_item_colon'  => 'Parent Planiranje:',
    'not_found'          => 'No Planiranje found.',
    'not_found_in_trash' => 'No Planiranje found in Trash.',
  );

  $planiranjeArgs = array(
    'labels'             => $planiranjeLabels,
    'public'             => true,
		'show_in_rest'			 => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-palmtree',
    // 'supports'           => array( 'title' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

	$trudnocaLabels = array(
    'name'               => 'Trudnoca',
    'singular_name'      => 'Trudnoca',
    'menu_name'          => 'Trudnoca',
    'name_admin_bar'     => 'Trudnoca',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Trudnoca',
    'new_item'           => 'New Trudnoca',
    'edit_item'          => 'Edit Trudnoca',
    'view_item'          => 'View Trudnoca',
    'all_items'          => 'All Trudnoca',
    'search_items'       => 'Search Trudnoca',
    'parent_item_colon'  => 'Parent Trudnoca:',
    'not_found'          => 'No Trudnoca found.',
    'not_found_in_trash' => 'No Trudnoca found in Trash.',
  );

  $trudnocaArgs = array(
    'labels'             => $trudnocaLabels,
    'public'             => true,
		'show_in_rest'			 => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-universal-access',
    // 'supports'           => array( 'title' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

	$materinstvoLabels = array(
    'name'               => 'Materistvo',
    'singular_name'      => 'Materistvo',
    'menu_name'          => 'Materistvo',
    'name_admin_bar'     => 'Materistvo',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Materistvo',
    'new_item'           => 'New Materistvo',
    'edit_item'          => 'Edit Materistvo',
    'view_item'          => 'View Materistvo',
    'all_items'          => 'All Materistvo',
    'search_items'       => 'Search Materistvo',
    'parent_item_colon'  => 'Parent Materistvo:',
    'not_found'          => 'No Materistvo found.',
    'not_found_in_trash' => 'No Materistvo found in Trash.',
  );

  $materinstvoArgs = array(
    'labels'             => $materinstvoLabels,
    'public'             => true,
		'show_in_rest'			 => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-heart',
    // 'supports'           => array( 'title' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

	$savetiLabels = array(
    'name'               => 'Saveti',
    'singular_name'      => 'Saveti',
    'menu_name'          => 'Saveti',
    'name_admin_bar'     => 'Saveti',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Saveti',
    'new_item'           => 'New Saveti',
    'edit_item'          => 'Edit Saveti',
    'view_item'          => 'View Saveti',
    'all_items'          => 'All Saveti',
    'search_items'       => 'Search Saveti',
    'parent_item_colon'  => 'Parent Saveti:',
    'not_found'          => 'No Saveti found.',
    'not_found_in_trash' => 'No Saveti found in Trash.',
  );

  $savetiArgs = array(
    'labels'             => $savetiLabels,
    'public'             => true,
		'show_in_rest'			 => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    // 'supports'           => array( 'title' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

	$proizvodiLabels = array(
    'name'               => 'Proizvodi',
    'singular_name'      => 'Proizvod',
    'menu_name'          => 'Proizvodi',
    'name_admin_bar'     => 'Proizvodi',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Proizvod',
    'new_item'           => 'New Proizvod',
    'edit_item'          => 'Edit Proizvod',
    'view_item'          => 'Pogledaj Proizvod',
    'all_items'          => 'Svi Proizvodi',
    'search_items'       => 'Search Proizvodi',
    'parent_item_colon'  => 'Parent Proizvodi:',
    'not_found'          => 'No Proizvod found.',
    'not_found_in_trash' => 'No Proizvod found in Trash.',
  );

  $proizvodArgs = array(
    'labels'             => $proizvodiLabels,
    'public'             => true,
		'show_in_rest'			 => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-awards',
    // 'supports'           => array( 'title' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

	register_post_type( 'planiranje', $planiranjeArgs );
	register_post_type( 'trudnoca', $trudnocaArgs );
	register_post_type( 'materinstvo', $materinstvoArgs );
	register_post_type( 'saveti', $savetiArgs );
  register_post_type( 'proizvodi', $proizvodArgs );
}

add_action( 'init', 'register_custom_post_types' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zdravabeba_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'zdravabeba_content_width', 640 );
}
add_action( 'after_setup_theme', 'zdravabeba_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zdravabeba_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zdravabeba' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zdravabeba' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zdravabeba_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zdravabeba_scripts() {
	wp_enqueue_style( 'zdravabeba-style', get_stylesheet_uri() );

	wp_enqueue_script( 'zdravabeba-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zdravabeba-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zdravabeba_scripts' );

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
