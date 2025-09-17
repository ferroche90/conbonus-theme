<?php
/**
 * Vendor System
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create vendor custom post type
 */
function conbonus_create_vendor_post_type() {
    $labels = array(
        'name' => __('Vendors', 'conbonus'),
        'singular_name' => __('Vendor', 'conbonus'),
        'menu_name' => __('Vendors', 'conbonus'),
        'add_new' => __('Add New Vendor', 'conbonus'),
        'add_new_item' => __('Add New Vendor', 'conbonus'),
        'edit_item' => __('Edit Vendor', 'conbonus'),
        'new_item' => __('New Vendor', 'conbonus'),
        'view_item' => __('View Vendor', 'conbonus'),
        'search_items' => __('Search Vendors', 'conbonus'),
        'not_found' => __('No vendors found', 'conbonus'),
        'not_found_in_trash' => __('No vendors found in trash', 'conbonus'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'vendor'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-store',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );

    register_post_type('vendor', $args);
}
add_action('init', 'conbonus_create_vendor_post_type');

/**
 * Create vendor taxonomy
 */
function conbonus_create_vendor_taxonomy() {
    $labels = array(
        'name' => __('Vendor Categories', 'conbonus'),
        'singular_name' => __('Vendor Category', 'conbonus'),
        'search_items' => __('Search Vendor Categories', 'conbonus'),
        'all_items' => __('All Vendor Categories', 'conbonus'),
        'parent_item' => __('Parent Vendor Category', 'conbonus'),
        'parent_item_colon' => __('Parent Vendor Category:', 'conbonus'),
        'edit_item' => __('Edit Vendor Category', 'conbonus'),
        'update_item' => __('Update Vendor Category', 'conbonus'),
        'add_new_item' => __('Add New Vendor Category', 'conbonus'),
        'new_item_name' => __('New Vendor Category Name', 'conbonus'),
        'menu_name' => __('Vendor Categories', 'conbonus'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'vendor-category'),
        'show_in_rest' => true,
    );

    register_taxonomy('vendor_category', array('vendor'), $args);
}
add_action('init', 'conbonus_create_vendor_taxonomy');

/**
 * Add vendor meta boxes
 */
function conbonus_add_vendor_meta_boxes() {
    add_meta_box(
        'vendor_details',
        __('Vendor Details', 'conbonus'),
        'conbonus_vendor_details_callback',
        'vendor',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'conbonus_add_vendor_meta_boxes');

/**
 * Vendor details meta box callback
 */
function conbonus_vendor_details_callback($post) {
    wp_nonce_field('conbonus_vendor_details', 'conbonus_vendor_details_nonce');
    
    $vendor_email = get_post_meta($post->ID, '_vendor_email', true);
    $vendor_phone = get_post_meta($post->ID, '_vendor_phone', true);
    $vendor_address = get_post_meta($post->ID, '_vendor_address', true);
    $vendor_website = get_post_meta($post->ID, '_vendor_website', true);
    $vendor_rating = get_post_meta($post->ID, '_vendor_rating', true);
    $vendor_products_count = get_post_meta($post->ID, '_vendor_products_count', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="vendor_email"><?php _e('Email', 'conbonus'); ?></label></th>
            <td><input type="email" id="vendor_email" name="vendor_email" value="<?php echo esc_attr($vendor_email); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="vendor_phone"><?php _e('Phone', 'conbonus'); ?></label></th>
            <td><input type="text" id="vendor_phone" name="vendor_phone" value="<?php echo esc_attr($vendor_phone); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="vendor_address"><?php _e('Address', 'conbonus'); ?></label></th>
            <td><textarea id="vendor_address" name="vendor_address" rows="3" cols="50"><?php echo esc_textarea($vendor_address); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="vendor_website"><?php _e('Website', 'conbonus'); ?></label></th>
            <td><input type="url" id="vendor_website" name="vendor_website" value="<?php echo esc_attr($vendor_website); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="vendor_rating"><?php _e('Rating', 'conbonus'); ?></label></th>
            <td><input type="number" id="vendor_rating" name="vendor_rating" value="<?php echo esc_attr($vendor_rating); ?>" min="0" max="5" step="0.1" /></td>
        </tr>
        <tr>
            <th><label for="vendor_products_count"><?php _e('Products Count', 'conbonus'); ?></label></th>
            <td><input type="number" id="vendor_products_count" name="vendor_products_count" value="<?php echo esc_attr($vendor_products_count); ?>" min="0" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save vendor meta data
 */
function conbonus_save_vendor_meta($post_id) {
    if (!isset($_POST['conbonus_vendor_details_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['conbonus_vendor_details_nonce'], 'conbonus_vendor_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'vendor' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    $fields = array('vendor_email', 'vendor_phone', 'vendor_address', 'vendor_website', 'vendor_rating', 'vendor_products_count');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'conbonus_save_vendor_meta');

/**
 * Get vendor products
 */
function conbonus_get_vendor_products($vendor_id, $limit = -1) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'meta_query' => array(
            array(
                'key' => '_vendor_id',
                'value' => $vendor_id,
                'compare' => '='
            )
        )
    );
    
    return get_posts($args);
}

/**
 * Get vendor by product
 */
function conbonus_get_vendor_by_product($product_id) {
    $vendor_id = get_post_meta($product_id, '_vendor_id', true);
    if ($vendor_id) {
        return get_post($vendor_id);
    }
    return false;
}

/**
 * Add vendor field to product
 */
function conbonus_add_vendor_to_product() {
    global $post;
    
    if ($post->post_type !== 'product') {
        return;
    }
    
    wp_nonce_field('conbonus_product_vendor', 'conbonus_product_vendor_nonce');
    
    $vendor_id = get_post_meta($post->ID, '_vendor_id', true);
    $vendors = get_posts(array(
        'post_type' => 'vendor',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    ?>
    <div class="product_vendor">
        <label for="product_vendor"><?php _e('Vendor', 'conbonus'); ?></label>
        <select id="product_vendor" name="product_vendor">
            <option value=""><?php _e('Select Vendor', 'conbonus'); ?></option>
            <?php foreach ($vendors as $vendor) : ?>
            <option value="<?php echo $vendor->ID; ?>" <?php selected($vendor_id, $vendor->ID); ?>>
                <?php echo $vendor->post_title; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php
}
add_action('woocommerce_product_options_general_product_data', 'conbonus_add_vendor_to_product');

/**
 * Save vendor for product
 */
function conbonus_save_product_vendor($post_id) {
    if (!isset($_POST['conbonus_product_vendor_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['conbonus_product_vendor_nonce'], 'conbonus_product_vendor')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['product_vendor'])) {
        update_post_meta($post_id, '_vendor_id', sanitize_text_field($_POST['product_vendor']));
    }
}
add_action('woocommerce_process_product_meta', 'conbonus_save_product_vendor');

/**
 * Display vendor info on product page
 */
function conbonus_display_vendor_info() {
    global $product;
    
    $vendor = conbonus_get_vendor_by_product($product->get_id());
    
    if ($vendor) {
        $vendor_email = get_post_meta($vendor->ID, '_vendor_email', true);
        $vendor_phone = get_post_meta($vendor->ID, '_vendor_phone', true);
        $vendor_website = get_post_meta($vendor->ID, '_vendor_website', true);
        $vendor_rating = get_post_meta($vendor->ID, '_vendor_rating', true);
        ?>
        <div class="vendor-info">
            <h3><?php _e('Vendor Information', 'conbonus'); ?></h3>
            <div class="vendor-details">
                <h4><a href="<?php echo get_permalink($vendor->ID); ?>"><?php echo $vendor->post_title; ?></a></h4>
                <?php if ($vendor_email) : ?>
                <p><strong><?php _e('Email:', 'conbonus'); ?></strong> <a href="mailto:<?php echo esc_attr($vendor_email); ?>"><?php echo esc_html($vendor_email); ?></a></p>
                <?php endif; ?>
                <?php if ($vendor_phone) : ?>
                <p><strong><?php _e('Phone:', 'conbonus'); ?></strong> <?php echo esc_html($vendor_phone); ?></p>
                <?php endif; ?>
                <?php if ($vendor_website) : ?>
                <p><strong><?php _e('Website:', 'conbonus'); ?></strong> <a href="<?php echo esc_url($vendor_website); ?>" target="_blank"><?php echo esc_html($vendor_website); ?></a></p>
                <?php endif; ?>
                <?php if ($vendor_rating) : ?>
                <p><strong><?php _e('Rating:', 'conbonus'); ?></strong> 
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $vendor_rating) {
                            echo '<span class="star filled">★</span>';
                        } else {
                            echo '<span class="star">☆</span>';
                        }
                    }
                    ?>
                    (<?php echo $vendor_rating; ?>/5)
                </p>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}
add_action('woocommerce_single_product_summary', 'conbonus_display_vendor_info', 25);
