<?php
/**
 * Homepage 1 - Featured Categories Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<section class="section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3><?php _e('Featured Categories', 'conbonus'); ?></h3>
                <p class="font-base"><?php _e('Choose your necessary products from this feature categories.', 'conbonus'); ?></p>
            </div>
            <div class="col-lg-7">
                <div class="list-brands">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-7">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/acer.svg" alt="Acer">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/nokia.svg" alt="Nokia">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/assus.svg" alt="ASUS">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/casio.svg" alt="Casio">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/dell.svg" alt="Dell">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/panasonic.svg" alt="Panasonic">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/slider/logo/vaio.svg" alt="VAIO">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Category Cards -->
        <div class="mt-50">
            <div class="row">
                <?php
                // Get product categories
                $product_categories = get_terms(array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'number' => 8,
                ));
                
                $category_images = array(
                    'smartphone.png',
                    'television.png',
                    'computer.png',
                    'electric.png',
                    'laptop.png',
                    'smartwatches.png',
                    'gaming.png',
                    'outdoor.png'
                );
                
                $category_names = array(
                    'Smart Phone',
                    'Television',
                    'Computers',
                    'Electronics',
                    'Laptop & Tablet',
                    'Smartwatches',
                    'Gaming',
                    'Outdoor Camera'
                );
                
                $category_links = array(
                    'Phone Accessories,Phone Cases,Postpaid Phones,Refurbished Phones',
                    'HD DVD Players,Projection Screens,Television Accessories,TV-DVD Combos',
                    'Computer Components,Computer Accessories,Desktops,Monitors',
                    'Office Electronics,Portable Audio & Video,Washing Machine,Accessories & Supplies',
                    'Office laptop,Gaming laptop,Laptop accessories,Tablet',
                    'Sport Watches,Chronograph Watches,Kids Watches,Luxury Watches',
                    'Game Controllers,Gaming Keyboards,PC Gaming Mice,PC Game Headsets',
                    'Security & Surveillance,Surveillance DVR Kits,Surveillance NVR Kits,Smart Outdoor Lighting'
                );
                
                for ($i = 0; $i < 8; $i++) :
                    $category = isset($product_categories[$i]) ? $product_categories[$i] : null;
                    $image = $category_images[$i];
                    $name = $category_names[$i];
                    $links = explode(',', $category_links[$i]);
                    $category_url = $category ? get_term_link($category) : wc_get_page_permalink('shop');
                ?>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-style-2 card-grid-style-2-small hover-up">
                        <div class="image-box">
                            <a href="<?php echo esc_url($category_url); ?>">
                                <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage1/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            </a>
                        </div>
                        <div class="info-right">
                            <a class="color-brand-3 font-sm-bold" href="<?php echo esc_url($category_url); ?>">
                                <h6><?php echo esc_html($name); ?></h6>
                            </a>
                            <ul class="list-links-disc">
                                <?php foreach ($links as $link) : ?>
                                <li>
                                    <a class="font-sm" href="<?php echo esc_url($category_url); ?>"><?php echo esc_html($link); ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="btn btn-gray-abs" href="<?php echo esc_url($category_url); ?>"><?php _e('View all', 'conbonus'); ?></a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
