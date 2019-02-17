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
      'category_menu' => esc_html__( 'Categories', 'zdravabeba' ),
			'search_menu' => esc_html__( 'Search', 'zdravabeba' ),
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
	 * Prepare template for inserting og tags
	 *
	 * @since 1.0.0
	 * @access public
	 */
	function insert_social_in_head() {
		$og_description = 'Predivan je osećaj znati da se vaša beba razvija dobro i da ste oboje zdravi i srećni.';
		if (is_singular()) {
			$og_description = wp_trim_words(the_content(), 15);
		}
		$og_type = get_post_type();
		$og_url = get_permalink();
		$og_image = 'https://www.femibion.com/content/dam/web/health-care/consumer-health/web/Femibion/en_INT/Pillars/baner/Pregnancy_Femibion_2_ENG_packshot_d_1600x725.jpg';
		?>
		 <meta property="og:title"         content="<?php the_title(); ?>"/>
		 <meta name="twitter:title"        content="<?php the_title(); ?>" />

		 <meta property="og:description"   content="<?php echo $og_description ?>" />
		 <meta name="twitter:description"  content="<?php echo $og_description ?>" />

		 <meta property="og:type"          content="<?php echo $og_type ?>"/>
		 <meta property="og:url"           content="<?php echo $og_url ?>"/>
		 <meta property="og:site_name"     content="AUSTURHÖFN"/>
		 <meta property="og:image"         content="<?php echo $og_image ?>"/>
		 <meta property="og:image:width"   content="300" />
		 <meta property="og:image:height"  content="300" />
		 <meta name="twitter:image"        content="<?php echo $og_image ?>" />

		<?php

	}
	add_action('wp_head', 'insert_social_in_head');

	function add_cf_to_page() {
		echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' );
	}

//if => return 3 latest articles from one category if you set $categories as number
//else => return 1 latest article from 3 categories if you set $categories as array -> example get_last_articles('class', array(8, 9, 10), array('purple', 'yellow', 'orange'))
function get_last_articles($class, $categories, $colors) {

	// If parameter is array
	if (is_array($categories)) { ?>
		<div class="category-articles category-articles--<?php echo $class ?> category-articles--<?php echo $colors[$key] ?>">
			<div class="category-articles__overlay"></div>
			<div class="category-articles__wrapper">
				<?php
				foreach ($categories as $key=>$value) {
					$args = array(
					 'posts_per_page' => 1,
					 'cat' => $value
					);
					$single_post = get_posts($args);
					wp_reset_query();
					$featuredImageUrl = get_the_post_thumbnail_url($single_post[0]->ID);
					?>
					<div class="category-articles__post single-post category-articles__post--<?php echo $colors[$key]; ?>">
						<div class="category-articles__post-img" style="background-image: url('<?php echo $featuredImageUrl; ?>')"></div>
						<div class="category-articles__post-content">
							<div class="category-articles__post-title post-title post-title--<?php echo $colors[$key]; ?>">
								<?php echo $single_post[0]->post_title; ?>
							</div>
							<div class="category-articles__post-desc post-desc">
								<?php
								 echo $single_post[0]->post_content;
								$post_link = get_permalink($single_post[0]->ID);
								 ?>
							</div>
							<a href="<?php echo $post_link; ?>"  class="category-articles__post-cta general-cta general-cta--<?php echo $color ?>">Procitajte vise</a>
						</div>
						<div class="single-post-hover single-post-hover--<?php echo $colors[$key]; ?>"></div>
					</div>
					<?php } ?>
			</div>
		</div>
		<?php
	} else {
		$args = array( 'posts_per_page' => 3,'offset' => 1, 'category' => $categories );
		$myposts = get_posts( $args );

		// $category_post = new WP_Query( 'cat='.$categories.'&posts_per_page=3' );
		?>
		<div class="category-articles category-articles--<?php echo $class; ?>">
			<div class="category-articles__overlay"></div>
			<div class="category-articles__wrapper">
				<?php
					foreach ( $myposts as $post ) : setup_postdata( $post );
					// echo '<pre>';
					// var_dump($post);
					$category_url = get_category_link($categories);
					// var_dump($category_url);
					$post_ID = $post->ID;
					$post_link = get_permalink($post_ID);
					$featuredImageUrl = get_the_post_thumbnail_url($post_ID);
					?>
					<div class="category-articles__post single-post category-articles__post--<?php echo $class; ?> category-articles__post--<?php echo $colors; ?>">
						<div class="category-articles__post-img" style="background-image: url('<?php echo $featuredImageUrl; ?>')">
						</div>
						<div class="category-articles__post-content">
							<div class="category-articles__post-title post-title">
								<?php echo $post->post_title; ?>
							</div>
							<div class="category-articles__post-desc post-desc">
								<?php the_content(); ?>
							</div>
							<a href="<?php echo $post_link; ?>"  class="category-articles__post-cta general-cta general-cta--<?php echo $colors; ?>">Procitajte vise</a>
						</div>
						<div class="single-post-hover single-post-hover--<?php echo $colors; ?>"></div>
					</div>
				<?php endforeach;
				wp_reset_postdata();?>
				<a href="<?php echo $category_url; ?>" class="category-articles__archive-link">Pogledaj sve artikle</a>
			</div>
		</div>
		<?php
	}

}


/**
* Register custom post types for Zdravabeba theme
*
* @since 1.0.0
* @access public
*/
function register_custom_post_types() {

### Markers Custom Post Type ###



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
    'supports'           => array( 'title', 'editor' ,'thumbnail' ),
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
    'supports'           => array( 'title', 'thumbnail' ),
    'taxonomies'         => array( 'category', 'post_tag' )
  );

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

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,500,600,700,800,900' );
	wp_enqueue_style( 'font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

  wp_enqueue_script( 'example-scripts', get_template_directory_uri() . '/assets/js/example.js', array( 'jquery' ), 1.0, true );
  wp_enqueue_script( 'archive-menu', get_template_directory_uri() . '/assets/js/archiveMenu.js', NULL, 1.0, true );


  // Slick Slider styles
  wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css', false, '1.8.0' );
  // Slick Slider
  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', false, '1.8.1', true );
	wp_enqueue_script( 'example-scripts', get_template_directory_uri() . '/assets/js/example.js', array( 'jquery' ), 1.0, true );
  wp_enqueue_script( 'tab-script', get_template_directory_uri() . '/assets/js/tab-script.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'single-product', get_template_directory_uri() . '/assets/js/single-product.js', array( 'jquery' ), 1.0, true );
  wp_enqueue_script( 'search', get_template_directory_uri() . '/assets/js/search.js', array( 'jquery' ), 1.0, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

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


// uncomment to test pagination on category archive pages

// function testing_pagination($query) {
//   if (!is_admin() && is_category() && $query->is_main_query()) {
//     $query->set('posts_per_page', 1);
//   }
// };

// add_action( 'pre_get_posts', 'testing_pagination');
