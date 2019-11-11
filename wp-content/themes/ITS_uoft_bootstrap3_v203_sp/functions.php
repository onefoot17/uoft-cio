<?php
/**
 * uoft_bootstrap3 functions and definitions
 * @package uoft_bootstrap3
 */

require_once 'wp_bootstrap_navwalker.php';

function show_menu($atts){
	$atts = shortcode_atts( array(
		'name' => NULL,
	), $atts, 'menu' );
	$defaults = array(
		'menu'            => $atts['name'],
		'container'       => 'nav',
		'menu_class'      => 'cards',
		'echo'            => false,
		'link_before'     => '<div class="card">',
		'link_after'      => '</div>',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	);
	return wp_nav_menu($defaults);
}
add_shortcode('menu', 'show_menu');

function footag_func(  ) {
}
add_shortcode( 'footag', 'footag_func' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	//$content_width = 640; /* pixels */

if ( ! function_exists( 'uoft_bootstrap3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function uoft_bootstrap3_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on uoft_bootstrap3, use a find and replace
	 * to change 'uoft_bootstrap3' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'uoft_bootstrap3', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'uoft_bootstrap3' ),
		'utility' => __( 'Toolbar Menu', 'uoft_bootstrap3' ),
		'footer' => __( 'Footer Menu', 'uoft_bootstrap3' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'uoft_bootstrap3_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // uoft_bootstrap3_setup
add_action( 'after_setup_theme', 'uoft_bootstrap3_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function uoft_bootstrap3_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'uoft_bootstrap3' ),
		'id'            => 'sidebar-global',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Features', 'uoft_bootstrap3' ),
		'id'            => 'sidebar-features',
		'before_widget' => '<aside id="%1$s" class="col-md-4 home-widget-container"><div class="widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Subpage Sidebar', 'uoft_bootstrap3' ),
		'id'            => 'sidebar-subpage',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	// register_sidebar( array(
	// 	'name'          => __( 'CBC Sidebar', 'uoft_bootstrap3' ),
	// 	'id'            => 'sidebar-cbc',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h3 class="widget-title">',
	// 	'after_title'   => '</h3>',
	// ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'uoft_bootstrap3' ),
        'id'            => 'sidebar-footer',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'uoft_bootstrap3_widgets_init' );


/**
 * Enqueue scripts and styles
 */
function uoft_bootstrap3_scripts() {

  // Load latest version of jQuery
  if ( !is_admin() ) {
      wp_enqueue_script('jquery');
  }

  // Load a specific version of jQuery
  // To use a specifice jQuery version, comment above code and uncomment below code.
  /*
  if (!is_admin()) {
  	wp_deregister_script('jquery');
  	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
  	wp_enqueue_script('jquery');
  }*/

	wp_enqueue_style( 'uoft_bootstrap3-style', get_stylesheet_uri() );
	wp_enqueue_script( 'uoft_bootstrap3-navigation', get_template_directory_uri() . '/_inc/js/bootstrap.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'uoft_bootstrap3-function', get_template_directory_uri() . '/_inc/js/functions.min.js', array(),
        '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'uoft_bootstrap3-keyboard-image-navigation', get_template_directory_uri() . '/_inc/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'uoft_bootstrap3_scripts' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/_inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/_inc/extras.php';


/**
 * Breadcrumb
 */

function get_breadcrumb_navigation() {
    $home = get_bloginfo('name');
    $before = '<li class="active">';
    $after = '</li>';
    echo '<ol class="breadcrumb"><!-- Bloglow breadcrumb navigation -->';
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<li><a href="' . $homeLink . '">Home</a></li>';
    if ( is_category() ) {
        global $wp_query;
        $delimiter = '';
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0) echo('<li>'.get_category_parents($parentCat, TRUE, '</li>'));
        echo $before . single_cat_title('', false) . $after;
    } elseif ( is_day() ) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
        echo $before . 'Archive by date "' . get_the_time('d') . '"' . $after;
    } elseif ( is_month() ) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo $before . 'Archive by month "' . get_the_time('F') . '"' . $after;
    } elseif ( is_year() ) {
        echo $before . 'Archive by year "' . get_the_time('Y') . '"' . $after;
    } elseif ( is_single() && !is_attachment() ) {
        if ( get_post_type() != 'post' ) {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name .
                '</a></li>' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $delimiter = ' &gt; ';
            $cat = get_the_category(); $cat = $cat[0];
            echo($delimiter.get_category_parents($cat, TRUE, $delimiter ));

            //echo(get_category_parents($cat, TRUE, 'ddddd</li><li>'));
            //echo ' / ' . get_category_parents($cat, TRUE, ' ' . ' / ' . ' ') . ' ';
            echo $before . get_the_title() . $after;
        }
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
    } elseif ( is_attachment() ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id    = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif ( is_page() && !$post->post_parent ) {
        echo $before . get_the_title() . $after;
    } elseif ( is_page() && $post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id    = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . '"' . $after;
    } elseif ( is_search() ) {
        echo $before . 'Search results for "' . get_search_query() . '"' . $after;
    } elseif ( is_tag() ) {
        echo $before . 'Archive by tag "' . single_tag_title('', false) . '"' . $after;
    } elseif ( is_author() ) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . 'Articles posted by "' . $userdata->display_name . '"' . $after;
    } elseif ( is_404() ) {
        echo $before . 'You got it "' . 'Error 404 not Found' . '"&nbsp;' . $after;
    }
    if ( get_query_var('paged') ) {
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
        echo ('Page') . ' ' . get_query_var('paged');
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
    echo '</ol><!-- / Breadcrumb navigation -->';
}



/**
 * Pagination
 */

if ( ! function_exists( 'uoft_bootstrap3_paging_nav' ) ) :
    /**
     * Displays navigation to next/previous set of posts when applicable.
     */
    function uoft_bootstrap3_paging_nav() {

        global $wp_query;

        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1){

            $current_page = max(1, get_query_var('paged'));

            echo '<div class="pagination-container">';

            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '/page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
                'type' => 'list'
            ));

            echo '</div>';

        }
    }
endif;


/**
 * Excerpt
 */
function new_excerpt_more( $more ) {
    return ' ... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
 * Allow SVG through Media Uploader
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 100, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
add_image_size( 'news-thumb', 300, 200 ); //300 * 200 pixels
}
