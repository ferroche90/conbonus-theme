<?php
/**
 * WooCommerce Integration
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * WooCommerce setup function
 */
function conbonus_woocommerce_setup() {
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width' => 600,
        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 2,
            'max_rows' => 8,
            'default_columns' => 4,
            'min_columns' => 2,
            'max_columns' => 5,
        ),
    ));
    
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'conbonus_woocommerce_setup');

/**
 * Remove default WooCommerce styles
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Change number of products per row
 */
function conbonus_loop_columns() {
    return 4;
}
add_filter('loop_shop_columns', 'conbonus_loop_columns');

/**
 * Change number of products per page
 */
function conbonus_products_per_page() {
    return 12;
}
add_filter('loop_shop_per_page', 'conbonus_products_per_page');

/**
 * Remove WooCommerce breadcrumbs
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Remove WooCommerce sidebar
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * Customize WooCommerce product loop
 */
function conbonus_woocommerce_product_loop_start() {
    echo '<div class="row">';
}
add_action('woocommerce_before_shop_loop', 'conbonus_woocommerce_product_loop_start', 5);

function conbonus_woocommerce_product_loop_end() {
    echo '</div>';
}
add_action('woocommerce_after_shop_loop', 'conbonus_woocommerce_product_loop_end', 25);

/**
 * Customize product card wrapper
 */
function conbonus_product_card_start() {
    echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-30">';
    echo '<div class="card-grid-style-3">';
}
add_action('woocommerce_before_shop_loop_item', 'conbonus_product_card_start', 5);

function conbonus_product_card_end() {
    echo '</div>';
    echo '</div>';
}
add_action('woocommerce_after_shop_loop_item', 'conbonus_product_card_end', 25);

/**
 * Customize product image
 */
function conbonus_product_image() {
    global $product;
    
    echo '<div class="card-grid-style-3">';
    echo '<div class="card-grid-inner">';
    echo '<div class="box-image">';
    echo '<a href="' . esc_url(get_permalink()) . '">';
    
    if (has_post_thumbnail()) {
        echo get_the_post_thumbnail(get_the_ID(), 'conbonus-product-thumb', array('class' => 'img-responsive'));
    } else {
        echo '<img src="' . wc_placeholder_img_src() . '" alt="' . get_the_title() . '" class="img-responsive">';
    }
    
    echo '</a>';
    
    // Sale badge
    if ($product->is_on_sale()) {
        echo '<span class="label-best-seller">' . __('Sale', 'conbonus') . '</span>';
    }
    
    // Quick view button
    echo '<div class="box-btn-cart">';
    echo '<a class="btn btn-cart" href="' . esc_url($product->add_to_cart_url()) . '">' . __('Add to Cart', 'conbonus') . '</a>';
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'conbonus_product_image', 10);

/**
 * Customize product title
 */
function conbonus_product_title() {
    echo '<div class="info-right">';
    echo '<a class="color-brand-3 font-sm-bold" href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>';
    echo '<div class="mt-5">';
    echo '<span class="color-brand-2 font-sm-bold">' . wc_price(wc_get_price_to_display()) . '</span>';
    echo '</div>';
    echo '</div>';
}
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item_title', 'conbonus_product_title', 10);

/**
 * Remove default price display
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

/**
 * Remove default add to cart button
 */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

/**
 * Customize single product page
 */
function conbonus_single_product_wrapper_start() {
    echo '<div class="container">';
    echo '<div class="row">';
}
add_action('woocommerce_before_single_product_summary', 'conbonus_single_product_wrapper_start', 5);

function conbonus_single_product_wrapper_end() {
    echo '</div>';
    echo '</div>';
}
add_action('woocommerce_after_single_product_summary', 'conbonus_single_product_wrapper_end', 25);

/**
 * Customize cart page
 */
function conbonus_cart_wrapper_start() {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12">';
}
add_action('woocommerce_before_cart', 'conbonus_cart_wrapper_start', 5);

function conbonus_cart_wrapper_end() {
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
add_action('woocommerce_after_cart', 'conbonus_cart_wrapper_end', 25);

/**
 * Customize checkout page
 */
function conbonus_checkout_wrapper_start() {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12">';
}
add_action('woocommerce_before_checkout_form', 'conbonus_checkout_wrapper_start', 5);

function conbonus_checkout_wrapper_end() {
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
add_action('woocommerce_after_checkout_form', 'conbonus_checkout_wrapper_end', 25);

/**
 * Add custom WooCommerce body classes
 */
function conbonus_woocommerce_body_classes($classes) {
    if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        $classes[] = 'woocommerce-page';
    }
    
    if (is_shop()) {
        $classes[] = 'shop-page';
    }
    
    if (is_product()) {
        $classes[] = 'single-product-page';
    }
    
    return $classes;
}
add_filter('body_class', 'conbonus_woocommerce_body_classes');

/**
 * Customize WooCommerce messages
 */
function conbonus_woocommerce_messages() {
    if (function_exists('wc_print_notices')) {
        wc_print_notices();
    }
}
add_action('woocommerce_before_shop_loop', 'conbonus_woocommerce_messages', 5);
add_action('woocommerce_before_single_product', 'conbonus_woocommerce_messages', 5);

/**
 * Add AJAX cart update
 */
function conbonus_add_to_cart_fragments($fragments) {
    $fragments['.number-item'] = '<span class="number-item font-xs">' . WC()->cart->get_cart_contents_count() . '</span>';
    $fragments['.cart-total'] = '<span class="font-md-bold color-brand-1">' . WC()->cart->get_cart_total() . '</span>';
    
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'conbonus_add_to_cart_fragments');