<?php
/**
 * Homepage 9 - Product Category 3 Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<section class="section-box pt-50 bg-home9">
    <div class="container">
        <div class="box-product-category">
            <div class="d-flex">
                <div class="box-category-left">
                    <div class="box-menu-category bg-white">
                        <h5 class="title-border-bottom mb-20"><?php _e('Tools, Equipment', 'conbonus'); ?></h5>
                        <ul class="list-nav-arrow">
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Gardening Hand Tools', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Power Tool Parts', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Tool Organizers', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop Wet Dry Vacuums', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Air Tools & Compressors', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Safety & Security', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Measuring & Layout Tools', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Storage & Organization', 'conbonus'); ?></a></li>
                            <li><a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Wet Dry Vacuums', 'conbonus'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-category-right">
                    <div class="row">
                        <?php
                        $products = get_posts(array(
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'orderby' => 'rand'
                        ));
                        
                        $product_images = array('sp23.png', 'sp24.png', 'sp25.png', 'sp26.png');
                        $labels = array('Hot', 'Deal', 'Hot');
                        
                        foreach ($products as $index => $product) :
                            $product_obj = wc_get_product($product->ID);
                            $image = isset($product_images[$index]) ? $product_images[$index] : 'sp23.png';
                            $label = isset($labels[$index]) ? $labels[$index] : '';
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="<?php _e('Trend', 'conbonus'); ?>"></a>
                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" aria-label="<?php _e('Add To Wishlist', 'conbonus'); ?>"></a>
                                        <a class="btn btn-compare btn-tooltip mb-10" href="<?php echo esc_url(home_url('/compare')); ?>" aria-label="<?php _e('Compare', 'conbonus'); ?>"></a>
                                        <a class="btn btn-quickview btn-tooltip" aria-label="<?php _e('Quick view', 'conbonus'); ?>" href="#ModalQuickview" data-bs-toggle="modal"></a>
                                    </div>
                                    <div class="image-box">
                                        <?php if ($label) : ?>
                                        <span class="label bg-<?php echo $label === 'Hot' ? 'danger' : 'info'; ?>"><?php echo esc_html($label); ?></span>
                                        <?php endif; ?>
                                        <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                        </a>
                                    </div>
                                    <div class="info-right">
                                        <span class="font-xs color-gray-500"><?php _e('Apple', 'conbonus'); ?></span>
                                        <br>
                                        <a class="color-brand-3 font-sm-bold" href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                            <?php echo wp_trim_words($product->post_title, 6); ?>
                                        </a>
                                        <div class="rating">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                            <span class="font-xs color-gray-500">(65)</span>
                                        </div>
                                        <div class="price-info">
                                            <strong class="font-lg-bold color-brand-3 price-main"><?php echo $product_obj->get_price_html(); ?></strong>
                                            <?php if ($product_obj->get_regular_price() && $product_obj->get_sale_price()) : ?>
                                            <span class="color-gray-500 price-line"><?php echo wc_price($product_obj->get_regular_price()); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <ul class="list-features">
                                            <li><?php echo wp_trim_words($product_obj->get_short_description(), 8); ?></li>
                                        </ul>
                                        <div class="mt-20 box-btn-cart">
                                            <a class="btn btn-cart" href="<?php echo esc_url($product_obj->add_to_cart_url()); ?>"><?php _e('Add To Cart', 'conbonus'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
