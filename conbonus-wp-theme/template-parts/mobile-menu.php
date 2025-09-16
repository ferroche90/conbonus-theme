<?php
/**
 * Mobile menu template part
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
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile',
                    'menu_class' => 'mobile-menu',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>
            
            <div class="mobile-header-info-wrap">
                <div class="mobile-header-info">
                    <div class="mobile-header-info-item">
                        <i class="icon-phone"></i>
                        <span><?php echo get_theme_mod('conbonus_phone', '(+01) 123-456-789'); ?></span>
                    </div>
                    <div class="mobile-header-info-item">
                        <i class="icon-envelope"></i>
                        <span><?php echo get_theme_mod('conbonus_email', 'contact@ecom-market.com'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
