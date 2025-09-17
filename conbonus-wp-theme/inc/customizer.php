<?php
/**
 * Theme Customizer
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function conbonus_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'conbonus_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'conbonus_customize_partial_blogdescription',
        ));
    }

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
 * Render the site title for the selective refresh partial.
 */
function conbonus_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function conbonus_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function conbonus_customize_preview_js() {
    wp_enqueue_script('conbonus-customizer', CONBONUS_THEME_URL . '/assets/js/customizer.js', array('customize-preview'), CONBONUS_VERSION, true);
}
add_action('customize_preview_init', 'conbonus_customize_preview_js');