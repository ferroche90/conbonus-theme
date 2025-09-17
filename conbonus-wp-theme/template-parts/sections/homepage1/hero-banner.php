<?php
/**
 * Homepage 1 - Hero Banner Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<section class="section-box">
    <div class="banner-hero banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-1">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="banner-big bg-11" style="background-image: url(<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage1/banner.png)">
                                        <span class="font-sm text-uppercase"><?php _e('Hot Right Now', 'conbonus'); ?></span>
                                        <h2 class="mt-10"><?php _e('Sale Up to 50% Off', 'conbonus'); ?></h2>
                                        <h1><?php _e('Mobile Devices', 'conbonus'); ?></h1>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-7 col-sm-12">
                                                <p class="font-sm color-brand-3">
                                                    <?php _e('Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.', 'conbonus'); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-30">
                                            <a class="btn btn-brand-2" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                            <a class="btn btn-link" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Learn more', 'conbonus'); ?></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="banner-big bg-11-2" style="background-image: url(<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage1/banner-hero-2.png)">
                                        <span class="font-sm text-uppercase"><?php _e('Trending Now', 'conbonus'); ?></span>
                                        <h2 class="mt-10"><?php _e('Big Sale 25%', 'conbonus'); ?></h2>
                                        <h1><?php _e('Laptop & PC', 'conbonus'); ?></h1>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-7 col-sm-12">
                                                <p class="font-sm color-brand-3">
                                                    <?php _e('Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.', 'conbonus'); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-30">
                                            <a class="btn btn-brand-2" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                            <a class="btn btn-link" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Learn more', 'conbonus'); ?></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="banner-big bg-11-3" style="background-image: url(<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage1/banner-hero-3.png)">
                                        <span class="font-sm text-uppercase"><?php _e('Top Sale This Month', 'conbonus'); ?></span>
                                        <h2 class="mt-10"><?php _e('Hot Collection', 'conbonus'); ?></h2>
                                        <h1><?php _e('Virtual glasses', 'conbonus'); ?></h1>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-7 col-sm-12">
                                                <p class="font-sm color-brand-3">
                                                    <?php _e('Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.', 'conbonus'); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-30">
                                            <a class="btn btn-brand-2" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                            <a class="btn btn-link" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Learn more', 'conbonus'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-1"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Side Banners -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="banner-small banner-small-1 bg-13">
                                <span class="color-danger text-uppercase font-sm-lh32">
                                    <?php _e('10%', 'conbonus'); ?>
                                    <span class="color-brand-3"><?php _e('Sale Off', 'conbonus'); ?></span>
                                </span>
                                <h4 class="mb-10"><?php _e('Apple Watch Serial 7', 'conbonus'); ?></h4>
                                <p class="color-brand-3 font-desc">
                                    <?php _e('Don\'t miss the last', 'conbonus'); ?>
                                    <br class="d-none d-lg-block">
                                    <?php _e('opportunity.', 'conbonus'); ?>
                                </p>
                                <div class="mt-20">
                                    <a class="btn btn-brand-3 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="banner-small banner-small-2 bg-14">
                                <span class="color-danger text-uppercase font-sm-lh32"><?php _e('LATEST COLLECTION', 'conbonus'); ?></span>
                                <h4 class="mb-10"><?php _e('Apple Devices & Software', 'conbonus'); ?></h4>
                                <p class="color-brand-3 font-md">
                                    <?php _e('Don\'t miss the last', 'conbonus'); ?>
                                    <br class="d-none d-lg-block">
                                    <?php _e('opportunity.', 'conbonus'); ?>
                                </p>
                                <div class="mt-20">
                                    <a class="btn btn-brand-2 btn-arrow-right" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"><?php _e('Shop now', 'conbonus'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
