<?php
    add_action( 'after_setup_theme', 'cio_2019_setup' );
    function cio_2019_setup() {
        load_theme_textdomain( 'cio_2019', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form' ) );

        global $content_width;

        if ( ! isset( $content_width ) ) {
            $content_width = 1920;
        }
    }

    // Footer Navigation Menu
    add_action( 'init', 'register_menu_footer' );
    function register_menu_footer() {
        register_nav_menu( 'footer',__( 'Footer' ) );
    }

    // Enqueue Scripts
    add_action( 'wp_enqueue_scripts', 'cio_2019_load_scripts' );
    function cio_2019_load_scripts() {
        // CSS
        wp_enqueue_style( 'cio_2019-style', get_template_directory_uri() . '/build/css/styles.css' );
    }

    // Remove auto tags on Index page    
    function removeP(){
        if ( is_front_page() ) {
            remove_filter ('the_excerpt', 'wpautop');
            
            remove_filter('the_content', 'wpautop');
        }
    }
    
    add_action( 'template_redirect', 'removeP' );
    
    // SVG Upload
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter('upload_mimes', 'cc_mime_types');

      //Page Slug Body Class
      function add_slug_body_class( $classes ) {
          global $post;

          if ( isset( $post ) ) {
              $classes[] = $post->post_type . '-' . $post->post_name;
            }

            return $classes;
        }
        add_filter( 'body_class', 'add_slug_body_class' );
?>