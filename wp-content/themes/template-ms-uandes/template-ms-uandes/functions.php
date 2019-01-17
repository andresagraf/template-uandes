<?php
/**
 * Template-ms-uandes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Template-ms-uandes
 */

if ( ! function_exists( 'template_ms_uandes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function template_ms_uandes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Template-ms-uandes, use a find and replace
		 * to change 'template-ms-uandes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'template-ms-uandes', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'template-ms-uandes' ),
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
		add_theme_support( 'custom-background', apply_filters( 'template_ms_uandes_custom_background_args', array(
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
add_action( 'after_setup_theme', 'template_ms_uandes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function template_ms_uandes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'template_ms_uandes_content_width', 640 );
}
add_action( 'after_setup_theme', 'template_ms_uandes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function template_ms_uandes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'template-ms-uandes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'template-ms-uandes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'template_ms_uandes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function template_ms_uandes_scripts() {
	wp_enqueue_style( 'template-ms-uandes-style', get_stylesheet_uri() );

	wp_enqueue_script( 'template-ms-uandes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'template-ms-uandes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'template_ms_uandes_scripts' );

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
 * Enqueue scripts and styles.
 */
function uandes_scripts() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main-min.js', array('jquery'), '20180427', true );

}
add_action( 'wp_enqueue_scripts', 'uandes_scripts' );


/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */

/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo 'Inicio';
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
			    echo '<a href="';
        		echo get_permalink( get_option( 'page_for_posts' ) );
        		echo '">';
            	echo 'Noticias';
			    echo '</a>';
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
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
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
/*
// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init' );
/* Here's how to create your customized labels */

/*add_action( 'init', 'my_reportajes_init' );

function my_reportajes_init() {
	$labels = array(
	'name' => _x( 'Reportajes', 'post type general name' ),
        'singular_name' => _x( 'Reportaje', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo Reportaje' ),
        'edit_item' => __( 'Editar Reportaje' ),
        'new_item' => __( 'Nuevo Reportaje' ),
        'view_item' => __( 'Ver Reportaje' ),
        'search_items' => __( 'Buscar Reportaje' ),
        'not_found' =>  __( 'No se han encontrado Reportaje' ),
        'not_found_in_trash' => __( 'No se han encontrado Reportajes en la papelera' ),
        'parent_item_colon' => ''
    );
 */
    // Creamos un array para $args
 /*   $args = array( 'labels' => $labels,
		'labels'            => $tax_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        /*'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )*/
      /*  'supports' => array( 'title', 'editor', 'author', 'thumbnail'),				  
		'show_in_rest'=>true,		  
    );*/
 
 /*   register_post_type( 'reportajes', $args ); /* Registramos y a funcionar */
//};

//add_action( 'init', 'create_book_taxonomies', 0 );	 
 
// Creamos dos taxonomías, género y autor para el custom post type "libro"
//function create_book_taxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
/*	$labels = array(
	'name' => _x( 'Tipo reportaje', 'taxonomy general name' ),
	'singular_name' => _x( 'tipo', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por tipos' ),
	'all_items' => __( 'Todos los Tipos' ),
	'parent_item' => __( 'tipo padre' ),
	'parent_item_colon' => __( 'Género tipo:' ),
	'edit_item' => __( 'Editar Tipo' ),
	'update_item' => __( 'Actualizar Tipo' ),
	'add_new_item' => __( 'Añadir nuevo Tipo' ),
	'new_item_name' => __( 'Nombre del nuevo tipo' ),
	'show_in_rest'=>true,	
); 
register_taxonomy( 'Tipo', array( 'reportajes' ), array(
	'hierarchical' => true,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
/*	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'Tipo de Reportaje' ),
	'show_in_rest'=>true,	
));
}*/

/*add_action( 'init', 'my_slider_home_init' );

function my_slider_home_init() {
	$labels = array(
	'name' => _x( 'Slider Home', 'post type general name' ),
        'singular_name' => _x( 'Slider Home', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'Slider Home' ),
        'add_new_item' => __( 'Añadir nuevo Slider' ),
        'edit_item' => __( 'Editar Slider' ),
        'new_item' => __( 'Nuevo Slider' ),
        'view_item' => __( 'Ver Slider' ),
        'search_items' => __( 'Buscar Slider' ),
        'not_found' =>  __( 'No se han encontrado Slider' ),
        'not_found_in_trash' => __( 'No se han encontrado Slider en la papelera' ),
        'parent_item_colon' => ''
    );
 
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title' ),
		'show_in_rest'=>false,		  
    );
	
 
    register_post_type( 'sliderhome', $args );
};*/

