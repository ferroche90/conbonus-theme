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
        'style',
        'script',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
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
        'category' => __('Category Menu', 'conbonus'),
    ));
    
    // Add image sizes
    add_image_size('conbonus-product-thumb', 300, 300, true);
    add_image_size('conbonus-product-large', 600, 600, true);
    add_image_size('conbonus-blog-thumb', 400, 250, true);
    add_image_size('conbonus-banner', 1200, 400, true);
    add_image_size('conbonus-featured', 800, 600, true);
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
    wp_enqueue_style('conbonus-select2', CONBONUS_THEME_URL . '/assets/css/plugins/select2.min.css', array(), CONBONUS_VERSION);
    wp_enqueue_style('conbonus-magnific', CONBONUS_THEME_URL . '/assets/css/plugins/magnific-popup.css', array(), CONBONUS_VERSION);
    
    // Main JavaScript
    wp_enqueue_script('conbonus-main-js', CONBONUS_THEME_URL . '/assets/js/main.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-shop-js', CONBONUS_THEME_URL . '/assets/js/shop.js', array('jquery'), CONBONUS_VERSION, true);
    
    // Vendor JavaScript
    wp_enqueue_script('conbonus-bootstrap', CONBONUS_THEME_URL . '/assets/js/vendors/bootstrap.bundle.min.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-swiper', CONBONUS_THEME_URL . '/assets/js/vendors/swiper-bundle.min.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-select2', CONBONUS_THEME_URL . '/assets/js/vendors/select2.min.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-magnific', CONBONUS_THEME_URL . '/assets/js/vendors/jquery.magnific-popup.min.js', array('jquery'), CONBONUS_VERSION, true);
    wp_enqueue_script('conbonus-perfect-scrollbar', CONBONUS_THEME_URL . '/assets/js/vendors/perfect-scrollbar.min.js', array('jquery'), CONBONUS_VERSION, true);
    
    // Localize script for AJAX
    wp_localize_script('conbonus-main-js', 'conbonus_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('conbonus_nonce'),
        'home_url' => home_url('/'),
        'theme_url' => CONBONUS_THEME_URL,
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
        'name' => __('Blog Sidebar', 'conbonus'),
        'id' => 'blog-sidebar',
        'description' => __('Add widgets here for blog pages.', 'conbonus'),
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
    
    register_sidebar(array(
        'name' => __('Vendor Sidebar', 'conbonus'),
        'id' => 'vendor-sidebar',
        'description' => __('Add widgets here for vendor pages.', 'conbonus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
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
    
    if (is_product()) {
        $classes[] = 'single-product-page';
    }
    
    // Add homepage layout class
    $homepage_layout = get_theme_mod('conbonus_homepage_layout', 'homepage1');
    if (is_front_page()) {
        $classes[] = 'homepage-' . $homepage_layout;
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
    
    // Homepage Layout section
    $wp_customize->add_section('conbonus_homepage', array(
        'title' => __('Homepage Layout', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 5,
    ));
    
    // Homepage layout selection
    $wp_customize->add_setting('conbonus_homepage_layout', array(
        'default' => 'homepage1',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('conbonus_homepage_layout', array(
        'label' => __('Homepage Layout', 'conbonus'),
        'section' => 'conbonus_homepage',
        'type' => 'select',
        'choices' => array(
            'homepage1' => __('Homepage 1 - Default', 'conbonus'),
            'homepage2' => __('Homepage 2 - Electronics', 'conbonus'),
            'homepage3' => __('Homepage 3 - Fashion', 'conbonus'),
            'homepage4' => __('Homepage 4 - Furniture', 'conbonus'),
            'homepage5' => __('Homepage 5 - Grocery', 'conbonus'),
            'homepage6' => __('Homepage 6 - Garden', 'conbonus'),
            'homepage7' => __('Homepage 7 - Kids', 'conbonus'),
            'homepage8' => __('Homepage 8 - Books', 'conbonus'),
            'homepage9' => __('Homepage 9 - Sports', 'conbonus'),
            'homepage10' => __('Homepage 10 - Plants', 'conbonus'),
        ),
    ));
    
    // Header section
    $wp_customize->add_section('conbonus_header', array(
        'title' => __('Header Options', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 10,
    ));
    
    // Header layout selection
    $wp_customize->add_setting('conbonus_header_layout', array(
        'default' => 'header1',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('conbonus_header_layout', array(
        'label' => __('Header Layout', 'conbonus'),
        'section' => 'conbonus_header',
        'type' => 'select',
        'choices' => array(
            'header1' => __('Header 1 - Default', 'conbonus'),
            'header2' => __('Header 2', 'conbonus'),
            'header3' => __('Header 3', 'conbonus'),
            'header4' => __('Header 4', 'conbonus'),
            'header5' => __('Header 5', 'conbonus'),
            'header6' => __('Header 6', 'conbonus'),
            'header7' => __('Header 7', 'conbonus'),
            'header8' => __('Header 8', 'conbonus'),
        ),
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
    
    // Footer section
    $wp_customize->add_section('conbonus_footer', array(
        'title' => __('Footer Options', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 20,
    ));
    
    // Footer logo
    $wp_customize->add_setting('conbonus_footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'conbonus_footer_logo', array(
        'label' => __('Footer Logo', 'conbonus'),
        'section' => 'conbonus_footer',
        'settings' => 'conbonus_footer_logo',
    )));
    
    // Contact section
    $wp_customize->add_section('conbonus_contact', array(
        'title' => __('Contact Information', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 30,
    ));
    
    // Address
    $wp_customize->add_setting('conbonus_address', array(
        'default' => '502 New Design Str, Melbourne, San Francisco, CA 94110, United States',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('conbonus_address', array(
        'label' => __('Address', 'conbonus'),
        'section' => 'conbonus_contact',
        'type' => 'textarea',
    ));
    
    // Phone
    $wp_customize->add_setting('conbonus_phone', array(
        'default' => '(+01) 123-456-789',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('conbonus_phone', array(
        'label' => __('Phone', 'conbonus'),
        'section' => 'conbonus_contact',
        'type' => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('conbonus_email', array(
        'default' => 'contact@ecom-market.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('conbonus_email', array(
        'label' => __('Email', 'conbonus'),
        'section' => 'conbonus_contact',
        'type' => 'email',
    ));
    
    // Hours
    $wp_customize->add_setting('conbonus_hours', array(
        'default' => '8:00 - 17:00, Mon - Sat',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('conbonus_hours', array(
        'label' => __('Business Hours', 'conbonus'),
        'section' => 'conbonus_contact',
        'type' => 'text',
    ));
    
    // Social Media section
    $wp_customize->add_section('conbonus_social', array(
        'title' => __('Social Media', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 40,
    ));
    
    // Facebook
    $wp_customize->add_setting('conbonus_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_facebook', array(
        'label' => __('Facebook URL', 'conbonus'),
        'section' => 'conbonus_social',
        'type' => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('conbonus_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_instagram', array(
        'label' => __('Instagram URL', 'conbonus'),
        'section' => 'conbonus_social',
        'type' => 'url',
    ));
    
    // Twitter
    $wp_customize->add_setting('conbonus_twitter', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_twitter', array(
        'label' => __('Twitter URL', 'conbonus'),
        'section' => 'conbonus_social',
        'type' => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('conbonus_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_linkedin', array(
        'label' => __('LinkedIn URL', 'conbonus'),
        'section' => 'conbonus_social',
        'type' => 'url',
    ));
    
    // App Store section
    $wp_customize->add_section('conbonus_apps', array(
        'title' => __('Mobile Apps', 'conbonus'),
        'panel' => 'conbonus_options',
        'priority' => 50,
    ));
    
    // App Store URL
    $wp_customize->add_setting('conbonus_appstore_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_appstore_url', array(
        'label' => __('App Store URL', 'conbonus'),
        'section' => 'conbonus_apps',
        'type' => 'url',
    ));
    
    // Google Play URL
    $wp_customize->add_setting('conbonus_googleplay_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('conbonus_googleplay_url', array(
        'label' => __('Google Play URL', 'conbonus'),
        'section' => 'conbonus_apps',
        'type' => 'url',
    ));
}
add_action('customize_register', 'conbonus_customize_register');

/**
 * Include additional files
 */
require_once CONBONUS_THEME_DIR . '/inc/woocommerce.php';
require_once CONBONUS_THEME_DIR . '/inc/customizer.php';
require_once CONBONUS_THEME_DIR . '/inc/template-functions.php';
require_once CONBONUS_THEME_DIR . '/inc/advanced-features.php';
require_once CONBONUS_THEME_DIR . '/inc/vendor-system.php';