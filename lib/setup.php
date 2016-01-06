<?php

namespace SixCpa\Setup;

use SixCpa\Assets;

/**
 * Theme setup
 */
function setup() {
    // Make theme available for translation
    load_theme_textdomain('sixcpa', get_template_directory() . '/lang');
    
    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support('title-tag');
    
    // Register wp_nav_menu() menus
    // http://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sixcpa')
    ]); 
    
    // Enable post thumbnails
    // http://codex.wordpress.org/Post_Thumbnails
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    add_theme_support('post-thumbnails');

    // Enable post formats
    // http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

    // Enable HTML5 markup support
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
    
    // Allow shortcodes to be rendered in text widgets
    add_filter('widget_text', 'shortcode_unautop');
    add_filter('widget_text', 'do_shortcode');
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');


/**
 * Register sidebars
 */
function widgets_init() {
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init'); 

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
    static $display;
    
    isset($display) || $display = !in_array(true, [
        // The sidebar will NOT be displayed if ANY of the following return true.
        // @link https://codex.wordpress.org/Conditional_Tags
        is_404(),
        is_front_page(),
        is_page_template('template-custom.php'),
        is_search(),
        is_archive()
    ]);
    
    return apply_filters('sixcpa/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
    
    if(!is_admin()) {
        wp_enqueue_style('sixcpa/normalize', Assets\asset_path('css/normalize.min.css'), false, null);
        wp_enqueue_style('sixcpa/css', Assets\asset_path('css/main.css'), false, null);
        wp_enqueue_style('googlefont-open-sans', '//fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans', false, null);;
    }
    
    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    wp_enqueue_script('sixcpa/mdrnzr', Assets\asset_path('js/vendor/modernizr-2.8.3.min.js'));
    
    wp_enqueue_script('sixcpa/plugins', Assets\asset_path('js/plugins.js'), ['jquery'], null, true);
    wp_enqueue_script('sixcpa/js', Assets\asset_path('js/main.js'), ['sixcpa/plugins'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);