<?php
/**
 * Homepage 9 - Hero Banner Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<section class="section-box bg-home9">
    <div class="banner-hero banner-home9">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 mb-20">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-1 home-9">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="banner-big-home9 bg-2">
                                        <div class="info-banner">
                                            <span class="font-sm text-uppercase label-green"><?php _e('New arrival', 'conbonus'); ?></span>
                                            <h4 class="mt-10 color-gray-1000">
                                                <?php _e('Super discount for', 'conbonus'); ?>
                                                <br class="d-none d-lg-block">
                                                <?php _e('your first purchase', 'conbonus'); ?>
                                            </h4>
                                            <p class="font-nd color-brand-1"><?php _e('Use discount code in checkout page.', 'conbonus'); ?></p>
                                            <div class="mt-30">
                                                <a class="btn btn-brand-2 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                            </div>
                                        </div>
                                        <div class="box-img-banner">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/banner.png" alt="<?php bloginfo('name'); ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="banner-big-home9 bg-2">
                                        <div class="info-banner">
                                            <span class="font-sm text-uppercase label-green"><?php _e('New arrival', 'conbonus'); ?></span>
                                            <h4 class="mt-10 color-gray-1000">
                                                <?php _e('Super discount for', 'conbonus'); ?>
                                                <br class="d-none d-lg-block">
                                                <?php _e('your first purchase', 'conbonus'); ?>
                                            </h4>
                                            <p class="font-md color-brand-1"><?php _e('Use discount code in checkout page.', 'conbonus'); ?></p>
                                            <div class="mt-30">
                                                <a class="btn btn-brand-2 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                            </div>
                                        </div>
                                        <div class="box-img-banner">
                                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/banner.png" alt="<?php bloginfo('name'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-1"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Side Banner 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-20">
                    <div class="banner-small bg-5 text-center">
                        <span class="color-brand-3 font-sm"><?php _e('New Arrivals', 'conbonus'); ?></span>
                        <h4 class="mb-5 mt-5 color-gray-1000"><?php _e('Weekly Deal', 'conbonus'); ?></h4>
                        <span class="color-brand-1 font-md">
                            <?php _e('Up to', 'conbonus'); ?>
                            <span class="color-brand-2 font-md font-bold">$252.00</span>
                            <span class="color-brand-3 font-md"><?php _e('OFF', 'conbonus'); ?></span>
                        </span>
                        <div class="mt-20">
                            <a class="btn btn-brand-3 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop Now', 'conbonus'); ?></a>
                        </div>
                        <div class="mt-30">
                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/weekly.png" alt="<?php _e('Weekly Deal', 'conbonus'); ?>">
                        </div>
                    </div>
                </div>
                
                <!-- Side Banner 2 -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-20">
                    <div class="banner-small bg-30 text-center">
                        <span class="color-brand-3 font-sm"><?php _e('New Arrivals', 'conbonus'); ?></span>
                        <h4 class="mt-5 mb-10 color-gray-1000"><?php _e('Certified Deals On Surface Pro 2022', 'conbonus'); ?></h4>
                        <div class="mt-15">
                            <a class="btn btn-brand-2 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop Now', 'conbonus'); ?></a>
                        </div>
                        <div class="mt-10">
                            <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage9/certify.png" alt="<?php _e('Certified Deals', 'conbonus'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
