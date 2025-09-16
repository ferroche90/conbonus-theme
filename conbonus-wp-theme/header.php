<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<?php get_template_part('template-parts/preloader'); ?>

<!-- Top Bar -->
<div class="topbar">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('About Us', 'conbonus'); ?></a></li>
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/careers')); ?>"><?php _e('Careers', 'conbonus'); ?></a></li>
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/become-vendor')); ?>"><?php _e('Open a shop', 'conbonus'); ?></a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block">
            <span class="font-xs color-brand-3"><?php _e('Free shipping for all orders over', 'conbonus'); ?></span>
            <span class="font-sm-bold color-success">$75.00</span>
        </div>
        <div class="menu-topbar-right">
            <span class="font-xs color-brand-3"><?php _e('Need help? Call Us:', 'conbonus'); ?></span>
            <span class="font-sm-bold color-success">+ 1800 900</span>
            
            <!-- Language Dropdown -->
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                    <span class="dropdown-right font-xs color-brand-3">
                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/en.svg" alt="Ecom">
                        <?php _e('English', 'conbonus'); ?>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-en.svg" alt="Ecom"> <?php _e('English', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-fr.svg" alt="Ecom"> <?php _e('Français', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-es.svg" alt="Ecom"> <?php _e('Español', 'conbonus'); ?></a></li>
                </ul>
            </div>
            
            <!-- Currency Dropdown -->
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                    <span class="dropdown-right font-xs color-brand-3">USD</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2" data-bs-popper="static">
                    <li><a class="dropdown-item active" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">AUD</a></li>
                    <li><a class="dropdown-item" href="#">SGP</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="d-flex" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        if ($custom_logo_id) {
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            echo '<img alt="' . get_bloginfo('name') . '" src="' . esc_url($logo[0]) . '">';
                        } else {
                            echo '<img alt="' . get_bloginfo('name') . '" src="' . CONBONUS_THEME_URL . '/assets/imgs/template/logo.svg">';
                        }
                        ?>
                    </a>
                </div>
                
                <!-- Search Form -->
                <div class="header-search">
                    <div class="box-header-search">
                        <form class="form-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible" name="product_cat">
                                    <option value=""><?php _e('All categories', 'conbonus'); ?></option>
                                    <?php
                                    $product_categories = get_terms(array(
                                        'taxonomy' => 'product_cat',
                                        'hide_empty' => false,
                                    ));
                                    foreach ($product_categories as $category) {
                                        echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input type="hidden" name="post_type" value="product">
                                <input class="form-control font-xs" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search for items', 'conbonus'); ?>">
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="header-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'main-menu',
                        'container' => false,
                        'fallback_cb' => false,
                    ));
                    ?>
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
            </div>
            
            <!-- Header Shop Actions -->
            <div class="header-shop">
                <!-- Account Dropdown -->
                <div class="d-inline-block box-dropdown-cart">
                    <span class="font-lg icon-list icon-account">
                        <span><?php _e('Account', 'conbonus'); ?></span>
                    </span>
                    <div class="dropdown-account">
                        <ul>
                            <?php if (is_user_logged_in()) : ?>
                                <li><a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>"><?php _e('My Account', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php _e('Order Tracking', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php _e('My Orders', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php _e('My Wishlist', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php _e('Setting', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><?php _e('Sign out', 'conbonus'); ?></a></li>
                            <?php else : ?>
                                <li><a href="<?php echo esc_url(wp_login_url()); ?>"><?php _e('Login', 'conbonus'); ?></a></li>
                                <li><a href="<?php echo esc_url(wp_registration_url()); ?>"><?php _e('Register', 'conbonus'); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
                <!-- Wishlist -->
                <a class="font-lg icon-list icon-wishlist" href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">
                    <span><?php _e('Wishlist', 'conbonus'); ?></span>
                    <span class="number-item font-xs"><?php echo WC()->session ? WC()->session->get('wishlist_count', 0) : 0; ?></span>
                </a>
                
                <!-- Cart -->
                <div class="d-inline-block box-dropdown-cart">
                    <span class="font-lg icon-list icon-cart">
                        <span><?php _e('Cart', 'conbonus'); ?></span>
                        <span class="number-item font-xs"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </span>
                    <div class="dropdown-cart">
                        <?php
                        $cart_items = WC()->cart->get_cart();
                        if (!empty($cart_items)) :
                            foreach ($cart_items as $cart_item_key => $cart_item) :
                                $product = $cart_item['data'];
                                $product_id = $cart_item['product_id'];
                                $quantity = $cart_item['quantity'];
                                $price = $product->get_price();
                        ?>
                        <div class="item-cart mb-20">
                            <div class="cart-image">
                                <?php echo $product->get_image('thumbnail'); ?>
                            </div>
                            <div class="cart-info">
                                <a class="font-sm-bold color-brand-3" href="<?php echo esc_url($product->get_permalink()); ?>">
                                    <?php echo wp_trim_words($product->get_name(), 8); ?>
                                </a>
                                <p>
                                    <span class="color-brand-2 font-sm-bold"><?php echo $quantity; ?> x <?php echo wc_price($price); ?></span>
                                </p>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        else :
                        ?>
                        <div class="item-cart mb-20">
                            <p><?php _e('Your cart is empty', 'conbonus'); ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <div class="border-bottom pt-0 mb-15"></div>
                        <div class="cart-total">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <span class="font-md-bold color-brand-3"><?php _e('Total', 'conbonus'); ?></span>
                                </div>
                                <div class="col-6">
                                    <span class="font-md-bold color-brand-1"><?php echo WC()->cart->get_cart_total(); ?></span>
                                </div>
                            </div>
                            <div class="row mt-15">
                                <div class="col-6 text-start">
                                    <a class="btn btn-cart w-auto" href="<?php echo esc_url(wc_get_cart_url()); ?>"><?php _e('View cart', 'conbonus'); ?></a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-buy w-auto" href="<?php echo esc_url(wc_get_checkout_url()); ?>"><?php _e('Checkout', 'conbonus'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Compare -->
                <a class="font-lg icon-list icon-compare" href="<?php echo esc_url(home_url('/compare')); ?>">
                    <span><?php _e('Compare', 'conbonus'); ?></span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<?php get_template_part('template-parts/mobile-menu'); ?>

<!-- Menu Left -->
<?php get_template_part('template-parts/menu-left'); ?>
