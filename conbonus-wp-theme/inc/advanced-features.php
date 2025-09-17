<?php
/**
 * Advanced Features
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Quick View functionality
 */
function conbonus_quickview_ajax() {
    if (!wp_verify_nonce($_POST['nonce'], 'conbonus_nonce')) {
        wp_die('Security check failed');
    }
    
    $product_id = intval($_POST['product_id']);
    $product = wc_get_product($product_id);
    
    if (!$product) {
        wp_die('Product not found');
    }
    
    ob_start();
    ?>
    <div class="quickview-modal">
        <div class="quickview-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-images">
                        <?php echo $product->get_image('large'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2><?php echo $product->get_name(); ?></h2>
                        <div class="price">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                        <div class="description">
                            <?php echo $product->get_short_description(); ?>
                        </div>
                        <div class="add-to-cart">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    $output = ob_get_clean();
    wp_send_json_success($output);
}
add_action('wp_ajax_conbonus_quickview', 'conbonus_quickview_ajax');
add_action('wp_ajax_nopriv_conbonus_quickview', 'conbonus_quickview_ajax');

/**
 * Wishlist functionality
 */
function conbonus_wishlist_ajax() {
    if (!wp_verify_nonce($_POST['nonce'], 'conbonus_nonce')) {
        wp_die('Security check failed');
    }
    
    $product_id = intval($_POST['product_id']);
    $user_id = get_current_user_id();
    
    if (!$user_id) {
        wp_send_json_error('Please login to add to wishlist');
    }
    
    $wishlist = get_user_meta($user_id, 'conbonus_wishlist', true);
    if (!is_array($wishlist)) {
        $wishlist = array();
    }
    
    if (in_array($product_id, $wishlist)) {
        // Remove from wishlist
        $wishlist = array_diff($wishlist, array($product_id));
        $message = 'Removed from wishlist';
    } else {
        // Add to wishlist
        $wishlist[] = $product_id;
        $message = 'Added to wishlist';
    }
    
    update_user_meta($user_id, 'conbonus_wishlist', $wishlist);
    
    wp_send_json_success(array(
        'message' => $message,
        'count' => count($wishlist)
    ));
}
add_action('wp_ajax_conbonus_wishlist', 'conbonus_wishlist_ajax');
add_action('wp_ajax_nopriv_conbonus_wishlist', 'conbonus_wishlist_ajax');

/**
 * Compare functionality
 */
function conbonus_compare_ajax() {
    if (!wp_verify_nonce($_POST['nonce'], 'conbonus_nonce')) {
        wp_die('Security check failed');
    }
    
    $product_id = intval($_POST['product_id']);
    
    if (!isset($_SESSION['conbonus_compare'])) {
        $_SESSION['conbonus_compare'] = array();
    }
    
    $compare = $_SESSION['conbonus_compare'];
    
    if (in_array($product_id, $compare)) {
        // Remove from compare
        $compare = array_diff($compare, array($product_id));
        $message = 'Removed from compare';
    } else {
        // Add to compare (max 4 products)
        if (count($compare) >= 4) {
            wp_send_json_error('Maximum 4 products can be compared');
        }
        $compare[] = $product_id;
        $message = 'Added to compare';
    }
    
    $_SESSION['conbonus_compare'] = $compare;
    
    wp_send_json_success(array(
        'message' => $message,
        'count' => count($compare)
    ));
}
add_action('wp_ajax_conbonus_compare', 'conbonus_compare_ajax');
add_action('wp_ajax_nopriv_conbonus_compare', 'conbonus_compare_ajax');

/**
 * Get wishlist count
 */
function conbonus_get_wishlist_count() {
    $user_id = get_current_user_id();
    if (!$user_id) {
        return 0;
    }
    
    $wishlist = get_user_meta($user_id, 'conbonus_wishlist', true);
    return is_array($wishlist) ? count($wishlist) : 0;
}

/**
 * Get compare count
 */
function conbonus_get_compare_count() {
    if (!isset($_SESSION['conbonus_compare'])) {
        return 0;
    }
    return count($_SESSION['conbonus_compare']);
}

/**
 * Newsletter subscription
 */
function conbonus_newsletter_subscription() {
    if (!wp_verify_nonce($_POST['nonce'], 'conbonus_nonce')) {
        wp_die('Security check failed');
    }
    
    $email = sanitize_email($_POST['email']);
    
    if (!is_email($email)) {
        wp_send_json_error('Invalid email address');
    }
    
    // Here you can integrate with your email service provider
    // For now, we'll just store it in the database
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'conbonus_newsletter';
    
    // Create table if it doesn't exist
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(100) NOT NULL,
        date_added datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY email (email)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
    // Check if email already exists
    $existing = $wpdb->get_var($wpdb->prepare(
        "SELECT id FROM $table_name WHERE email = %s",
        $email
    ));
    
    if ($existing) {
        wp_send_json_error('Email already subscribed');
    }
    
    // Insert new subscription
    $result = $wpdb->insert(
        $table_name,
        array('email' => $email),
        array('%s')
    );
    
    if ($result) {
        wp_send_json_success('Successfully subscribed to newsletter');
    } else {
        wp_send_json_error('Failed to subscribe');
    }
}
add_action('wp_ajax_conbonus_newsletter', 'conbonus_newsletter_subscription');
add_action('wp_ajax_nopriv_conbonus_newsletter', 'conbonus_newsletter_subscription');

/**
 * Product search suggestions
 */
function conbonus_product_search_suggestions() {
    if (!wp_verify_nonce($_POST['nonce'], 'conbonus_nonce')) {
        wp_die('Security check failed');
    }
    
    $query = sanitize_text_field($_POST['query']);
    
    if (strlen($query) < 2) {
        wp_send_json_success(array());
    }
    
    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        's' => $query,
        'meta_query' => array(
            array(
                'key' => '_visibility',
                'value' => array('catalog', 'visible'),
                'compare' => 'IN'
            )
        )
    );
    
    $products = get_posts($args);
    $suggestions = array();
    
    foreach ($products as $product) {
        $product_obj = wc_get_product($product->ID);
        $suggestions[] = array(
            'id' => $product->ID,
            'title' => $product->post_title,
            'price' => $product_obj->get_price_html(),
            'image' => get_the_post_thumbnail_url($product->ID, 'thumbnail'),
            'url' => get_permalink($product->ID)
        );
    }
    
    wp_send_json_success($suggestions);
}
add_action('wp_ajax_conbonus_search_suggestions', 'conbonus_product_search_suggestions');
add_action('wp_ajax_nopriv_conbonus_search_suggestions', 'conbonus_product_search_suggestions');

/**
 * Initialize session for compare functionality
 */
function conbonus_init_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'conbonus_init_session');
