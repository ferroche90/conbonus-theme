<?php
/**
 * Template Functions
 *
 * @package ConBonus
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Display the site logo
 */
function conbonus_site_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<img alt="' . get_bloginfo('name') . '" src="' . esc_url($logo[0]) . '">';
    } else {
        echo '<img alt="' . get_bloginfo('name') . '" src="' . CONBONUS_THEME_URL . '/assets/imgs/template/logo.svg">';
    }
}

/**
 * Display the footer logo
 */
function conbonus_footer_logo() {
    $footer_logo = get_theme_mod('conbonus_footer_logo');
    if ($footer_logo) {
        echo '<img alt="' . get_bloginfo('name') . '" src="' . esc_url($footer_logo) . '">';
    } else {
        echo '<img alt="' . get_bloginfo('name') . '" src="' . CONBONUS_THEME_URL . '/assets/imgs/template/logo-2.svg">';
    }
}

/**
 * Get social media links
 */
function conbonus_get_social_links() {
    return array(
        'facebook' => get_theme_mod('conbonus_facebook', ''),
        'instagram' => get_theme_mod('conbonus_instagram', ''),
        'twitter' => get_theme_mod('conbonus_twitter', ''),
        'linkedin' => get_theme_mod('conbonus_linkedin', ''),
    );
}

/**
 * Display social media links
 */
function conbonus_social_links() {
    $social_links = conbonus_get_social_links();
    
    foreach ($social_links as $platform => $url) {
        if ($url && $url !== '#') {
            echo '<a class="icon-socials icon-' . esc_attr($platform) . '" href="' . esc_url($url) . '" target="_blank" rel="noopener"></a>';
        }
    }
}

/**
 * Get contact information
 */
function conbonus_get_contact_info() {
    return array(
        'address' => get_theme_mod('conbonus_address', '502 New Design Str, Melbourne, San Francisco, CA 94110, United States'),
        'phone' => get_theme_mod('conbonus_phone', '(+01) 123-456-789'),
        'email' => get_theme_mod('conbonus_email', 'contact@ecom-market.com'),
        'hours' => get_theme_mod('conbonus_hours', '8:00 - 17:00, Mon - Sat'),
    );
}

/**
 * Display breadcrumbs
 */
function conbonus_breadcrumbs() {
    if (is_home() || is_front_page()) {
        return;
    }
    
    echo '<nav class="breadcrumb-nav">';
    echo '<div class="container">';
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'conbonus') . '</a></li>';
    
    if (is_category() || is_single()) {
        if (is_single()) {
            $category = get_the_category();
            if ($category) {
                echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a></li>';
            }
            echo '<li class="breadcrumb-item active">' . get_the_title() . '</li>';
        } else {
            echo '<li class="breadcrumb-item active">' . single_cat_title('', false) . '</li>';
        }
    } elseif (is_page()) {
        if ($post->post_parent) {
            $ancestors = get_post_ancestors($post->ID);
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                echo '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($ancestor)) . '">' . get_the_title($ancestor) . '</a></li>';
            }
        }
        echo '<li class="breadcrumb-item active">' . get_the_title() . '</li>';
    } elseif (is_tag()) {
        echo '<li class="breadcrumb-item active">' . single_tag_title('', false) . '</li>';
    } elseif (is_day()) {
        echo '<li class="breadcrumb-item active">' . get_the_date() . '</li>';
    } elseif (is_month()) {
        echo '<li class="breadcrumb-item active">' . get_the_date('F Y') . '</li>';
    } elseif (is_year()) {
        echo '<li class="breadcrumb-item active">' . get_the_date('Y') . '</li>';
    } elseif (is_author()) {
        echo '<li class="breadcrumb-item active">' . get_the_author() . '</li>';
    } elseif (is_search()) {
        echo '<li class="breadcrumb-item active">' . __('Search Results for: ', 'conbonus') . get_search_query() . '</li>';
    } elseif (is_404()) {
        echo '<li class="breadcrumb-item active">' . __('404 Error', 'conbonus') . '</li>';
    }
    
    echo '</ol>';
    echo '</div>';
    echo '</nav>';
}

/**
 * Display pagination
 */
function conbonus_pagination() {
    global $wp_query;
    
    $total_pages = $wp_query->max_num_pages;
    
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        
        echo '<nav class="pagination-wrapper">';
        echo '<ul class="pagination">';
        
        // Previous page
        if ($current_page > 1) {
            echo '<li class="page-item">';
            echo '<a class="page-link" href="' . esc_url(get_pagenum_link($current_page - 1)) . '">' . __('Previous', 'conbonus') . '</a>';
            echo '</li>';
        }
        
        // Page numbers
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $current_page) {
                echo '<li class="page-item active">';
                echo '<span class="page-link">' . $i . '</span>';
                echo '</li>';
            } else {
                echo '<li class="page-item">';
                echo '<a class="page-link" href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a>';
                echo '</li>';
            }
        }
        
        // Next page
        if ($current_page < $total_pages) {
            echo '<li class="page-item">';
            echo '<a class="page-link" href="' . esc_url(get_pagenum_link($current_page + 1)) . '">' . __('Next', 'conbonus') . '</a>';
            echo '</li>';
        }
        
        echo '</ul>';
        echo '</nav>';
    }
}

/**
 * Get post excerpt with custom length
 */
function conbonus_get_excerpt($length = 20, $post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $excerpt = get_the_excerpt($post_id);
    
    if (strlen($excerpt) > $length) {
        $excerpt = substr($excerpt, 0, $length);
        $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
        $excerpt .= '...';
    }
    
    return $excerpt;
}

/**
 * Display post meta
 */
function conbonus_post_meta() {
    echo '<div class="post-meta">';
    echo '<span class="post-date"><i class="icon-calendar"></i> ' . get_the_date() . '</span>';
    echo '<span class="post-author"><i class="icon-user"></i> ' . get_the_author() . '</span>';
    echo '<span class="post-comments"><i class="icon-comment"></i> ' . get_comments_number() . ' ' . __('Comments', 'conbonus') . '</span>';
    echo '</div>';
}

/**
 * Display related posts
 */
function conbonus_related_posts($post_id = null, $limit = 3) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $categories = wp_get_post_categories($post_id);
    
    if (empty($categories)) {
        return;
    }
    
    $related_posts = get_posts(array(
        'category__in' => $categories,
        'post__not_in' => array($post_id),
        'posts_per_page' => $limit,
        'orderby' => 'rand',
    ));
    
    if (!empty($related_posts)) {
        echo '<div class="related-posts">';
        echo '<h3>' . __('Related Posts', 'conbonus') . '</h3>';
        echo '<div class="row">';
        
        foreach ($related_posts as $post) {
            setup_postdata($post);
            echo '<div class="col-md-4">';
            echo '<div class="related-post">';
            
            if (has_post_thumbnail()) {
                echo '<div class="post-thumbnail">';
                echo '<a href="' . esc_url(get_permalink()) . '">';
                the_post_thumbnail('conbonus-blog-thumb');
                echo '</a>';
                echo '</div>';
            }
            
            echo '<h4><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h4>';
            echo '<p>' . conbonus_get_excerpt(15) . '</p>';
            echo '</div>';
            echo '</div>';
        }
        
        echo '</div>';
        echo '</div>';
        
        wp_reset_postdata();
    }
}
