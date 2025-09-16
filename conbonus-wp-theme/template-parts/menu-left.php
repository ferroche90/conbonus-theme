<?php
/**
 * Left menu template part
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php conbonus_site_logo(); ?>
                </a>
            </div>
            <div class="mobile-menu-close">
                <button class="mobile-header-close">
                    <span class="mobile-header-close-line"></span>
                    <span class="mobile-header-close-line"></span>
                </button>
            </div>
        </div>
        
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                    <input type="hidden" name="post_type" value="product">
                    <input type="text" name="s" placeholder="<?php _e('Search for items...', 'conbonus'); ?>" value="<?php echo get_search_query(); ?>">
                    <button type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <div class="mobile-menu-wrap mobile-header-border">
                <nav class="mobile-menu">
                    <ul class="mobile-menu-list">
                        <li class="menu-item-has-children">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'conbonus'); ?></a>
                        </li>
                        
                        <?php if (class_exists('WooCommerce')) : ?>
                        <li class="menu-item-has-children">
                            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop', 'conbonus'); ?></a>
                            <ul class="sub-menu">
                                <?php
                                $product_categories = get_terms(array(
                                    'taxonomy' => 'product_cat',
                                    'hide_empty' => false,
                                    'number' => 10,
                                ));
                                
                                if (!empty($product_categories)) :
                                    foreach ($product_categories as $category) :
                                ?>
                                <li><a href="<?php echo esc_url(get_term_link($category)); ?>"><?php echo esc_html($category->name); ?></a></li>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                        
                        <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e('Blog', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('About', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact', 'conbonus'); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
