<?php
/**
 * ConBonus Theme Functions
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('CONBONUS_VERSION', '1.0.0');
define('CONBONUS_THEME_DIR', get_template_directory());
define('CONBONUS_THEME_URL', get_template_directory_uri());

/**
 * Theme setup
 */
function conbonus_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    
    // WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'conbonus'),
        'footer' => __('Footer Menu', 'conbonus'),
        'mobile' => __('Mobile Menu', 'conbonus'),
    ));
    
    // Add image sizes
    add_image_size('conbonus-product-thumb', 300, 300, true);
    add_image_size('conbonus-product-large', 600, 600, true);
    add_image_size('conbonus-blog-thumb', 400, 250, true);
}
add_action('after_setup_theme', 'conbonus_setup');

/**
 * Enqueue scripts and styles
 */
function conbonus_scripts() {
    // Main stylesheet
    wp_enqueue_style('conbonus-style', get_stylesheet_uri(), array(), CONBONUS_VERSION);
    
    // Theme assets
    wp_enqueue_style('conbonus-main-style', CONBONUS_THEME_URL . '/assets/css/style.css', array(), CONBONUS_VERSION);
    
    // Vendor CSS
    wp_enqueue_style('conbonus-bootstrap', CONBONUS_THEME_URL . '/assets/css/plugins/bootstrap.css', array(), CONBONUS_VERSION);
    wp_enqueue_style('conbonus-swiper', CONBONUS_THEME_URL . '/assets/css/plugins/swiper-bundle.min.css', array(), CONBONUS_VERSION);
    wp_enqueue_style('conbonus-animate', CONBONUS_THEME_URL . '/assets/css/plugins/animate.min.css', array(), CONBONUS_VERSION);
    
    // Main JavaScript
    wp_enqueue_script('conbonus-main-js', CONBONUS_THEME_URL . '/assets/js/main.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-shop-js', CONBONUS_THEME_URL . '/assets/js/shop.js', array('jquery'), CONBONUS_VERSION, true);
    
    // Vendor JavaScript
    wp_enqueue_script('conbonus-bootstrap', CONBONUS_THEME_URL . '/assets/js/vendors/bootstrap.bundle.min.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-swiper', CONBONUS_THEME_URL . '/assets/js/vendors/swiper-bundle.min.js', array('jquery'), CONBONUS_VERSION, true);
    
    // Localize script for AJAX
    wp_localize_script('conbonus-main-js', 'conbonus_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('conbonus_nonce'),
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'conbonus_scripts');

/**
 * Register widget areas
 */
function conbonus_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'conbonus'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'conbonus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Shop Sidebar', 'conbonus'),
        'id' => 'shop-sidebar',
        'description' => __('Add widgets here for shop pages.', 'conbonus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widgets', 'conbonus'),
        'id' => 'footer-widgets',
        'description' => __('Add widgets here for footer.', 'conbonus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-3 col-md-6 col-sm-6">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'conbonus_widgets_init');

/**
 * Customize WooCommerce
 */
function conbonus_woocommerce_setup() {
    // Remove default WooCommerce styles
    add_filter('woocommerce_enqueue_styles', '__return_empty_array');
    
    // Change number of products per row
    add_filter('loop_shop_columns', function() {
        return 4;
    });
    
    // Change number of products per page
    add_filter('loop_shop_per_page', function() {
        return 12;
    });
}
add_action('after_setup_theme', 'conbonus_woocommerce_setup');

/**
 * Add custom body classes
 */
function conbonus_body_classes($classes) {
    if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        $classes[] = 'woocommerce-page';
    }
    
    if (is_shop()) {
        $classes[] = 'shop-page';
    }
    
    return $classes;
}
add_filter('body_class', 'conbonus_body_classes');

/**
 * Custom excerpt length
 */
function conbonus_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'conbonus_excerpt_length');

/**
 * Custom excerpt more
 */
function conbonus_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'conbonus_excerpt_more');

/**
 * Add theme customizer options
 */
function conbonus_customize_register($wp_customize) {
    // Add theme options panel
    $wp_customize->add_panel('conbonus_options', array(
        'title' => __('ConBonus Options', 'conbonus'),
        'priority' => 30,
    ));
    
    // Header section
    $wp_customize->add_section('conbonus_header', array(
        'title' => __('Header Options', 'conbonus'),
        'panel' => 'conbonus_options',
    ));
    
    // Logo upload
    $wp_customize->add_setting('conbonus_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'conbonus_logo', array(
        'label' => __('Upload Logo', 'conbonus'),
        'section' => 'conbonus_header',
        'settings' => 'conbonus_logo',
    )));
}
add_action('customize_register', 'conbonus_customize_register');

/**
 * Include additional files
 */
require_once CONBONUS_THEME_DIR . '/inc/woocommerce.php';
require_once CONBONUS_THEME_DIR . '/inc/customizer.php';
require_once CONBONUS_THEME_DIR . '/inc/template-functions.php';
