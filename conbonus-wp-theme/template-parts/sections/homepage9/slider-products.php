<?php
/**
 * Homepage 9 - Slider Products Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<section class="section-box bg-home9">
    <div class="container">
        <div class="row">
            <!-- New Arrivals -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('New arrivals', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-newarrival"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-newarrival"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-newarrival">
                                <div class="swiper-wrapper">
                                    <?php
                                    $new_arrivals = conbonus_get_new_arrival_products(3);
                                    $product_images = array('sp1.png', 'sp2.png', 'sp3.png');
                                    
                                    foreach ($new_arrivals as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp1.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
            
            <!-- Best Selling -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('Best selling', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-bestselling"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-bestselling"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-bestselling">
                                <div class="swiper-wrapper">
                                    <?php
                                    $best_selling = conbonus_get_best_selling_products(3);
                                    $product_images = array('sp4.png', 'sp5.png', 'sp6.png');
                                    
                                    foreach ($best_selling as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp4.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
            
            <!-- Hot Deals -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('Hot Deals', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-hotdeal"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-hotdeal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-hotdeal">
                                <div class="swiper-wrapper">
                                    <?php
                                    $hot_deals = conbonus_get_sale_products(3);
                                    $product_images = array('sp7.png', 'sp8.png', 'sp9.png');
                                    
                                    foreach ($hot_deals as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp7.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
            
            <!-- Top Ranking -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('Top Ranking', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-topranking"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-topranking"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-topranking">
                                <div class="swiper-wrapper">
                                    <?php
                                    $top_ranking = conbonus_get_featured_products(3);
                                    $product_images = array('sp10.png', 'sp11.png', 'sp12.png');
                                    
                                    foreach ($top_ranking as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp10.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
            
            <!-- Dropshipping -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('Dropshipping', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-dropshipping"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-dropshipping"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-dropshipping">
                                <div class="swiper-wrapper">
                                    <?php
                                    $dropshipping = get_posts(array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand'
                                    ));
                                    $product_images = array('sp13.png', 'sp14.png', 'sp15.png');
                                    
                                    foreach ($dropshipping as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp13.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
            
            <!-- Upcoming Deals -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="box-slider-product">
                    <div class="head-slider">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5><?php _e('Upcoming deals', 'conbonus'); ?></h5>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-button-slider-2">
                                    <div class="swiper-button-prev swiper-button-prev-style-top swiper-button-prev-upcoming"></div>
                                    <div class="swiper-button-next swiper-button-next-style-top swiper-button-next-upcoming"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-products">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-3-upcoming">
                                <div class="swiper-wrapper">
                                    <?php
                                    $upcoming = get_posts(array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 3,
                                        'orderby' => 'date',
                                        'order' => 'ASC'
                                    ));
                                    $product_images = array('sp16.png', 'sp17.png', 'sp18.png');
                                    
                                    foreach ($upcoming as $index => $product) :
                                        $product_obj = wc_get_product($product->ID);
                                        $image = isset($product_images[$index]) ? $product_images[$index] : 'sp16.png';
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="card-product-small">
                                            <div class="card-image">
                                                <a href="<?php echo esc_url(get_permalink($product->ID)); ?>">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($product->post_title); ?>">
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <div class="rating">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/icons/star.svg" alt="Star">
                                                    <span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="box-prices">
                                                    <div class="price-bold color-brand-3"><?php echo $product_obj->get_price_html(); ?></div>
                                                    <div class="price-line text-end color-gray-500"><?php echo $product_obj->get_regular_price() ? wc_price($product_obj->get_regular_price()) : ''; ?></div>
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
            </div>
        </div>
    </div>
</section>
