<?php
/**
 * The template for displaying the footer
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<!-- Footer -->
<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-lg-3 width-25 mb-30">
                    <h4 class="mb-30 color-gray-1000"><?php _e('Contact', 'conbonus'); ?></h4>
                    <div class="font-md mb-20 color-gray-900">
                        <strong class="font-md-bold"><?php _e('Address:', 'conbonus'); ?></strong>
                        <?php echo get_theme_mod('conbonus_address', '502 New Design Str, Melbourne, San Francisco, CA 94110, United States'); ?>
                    </div>
                    <div class="font-md mb-20 color-gray-900">
                        <strong class="font-md-bold"><?php _e('Phone:', 'conbonus'); ?></strong>
                        <?php echo get_theme_mod('conbonus_phone', '(+01) 123-456-789'); ?>
                    </div>
                    <div class="font-md mb-20 color-gray-900">
                        <strong class="font-md-bold"><?php _e('E-mail:', 'conbonus'); ?></strong>
                        <?php echo get_theme_mod('conbonus_email', 'contact@ecom-market.com'); ?>
                    </div>
                    <div class="font-md mb-20 color-gray-900">
                        <strong class="font-md-bold"><?php _e('Hours:', 'conbonus'); ?></strong>
                        <?php echo get_theme_mod('conbonus_hours', '8:00 - 17:00, Mon - Sat'); ?>
                    </div>
                    <div class="mt-30">
                        <?php
                        $social_links = array(
                            'facebook' => get_theme_mod('conbonus_facebook', ''),
                            'instagram' => get_theme_mod('conbonus_instagram', ''),
                            'twitter' => get_theme_mod('conbonus_twitter', ''),
                            'linkedin' => get_theme_mod('conbonus_linkedin', ''),
                        );
                        
                        foreach ($social_links as $platform => $url) :
                            if ($url && $url !== '') :
                        ?>
                        <a class="icon-socials icon-<?php echo esc_attr($platform); ?>" href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener"></a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
                
                <!-- Make Money with Us -->
                <div class="col-lg-3 width-20 mb-30">
                    <h4 class="mb-30 color-gray-1000"><?php _e('Make Money with Us', 'conbonus'); ?></h4>
                    <ul class="menu-footer">
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('Mission & Vision', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('Our Team', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><?php _e('Careers', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Press & Media', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Advertising', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Testimonials', 'conbonus'); ?></a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div class="col-lg-3 width-16 mb-30">
                    <h4 class="mb-30 color-gray-1000"><?php _e('Company', 'conbonus'); ?></h4>
                    <ul class="menu-footer">
                        <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e('Our Blog', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Plans & Pricing', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Knowledge Base', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Cookie Policy', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Office Center', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e('News & Events', 'conbonus'); ?></a></li>
                    </ul>
                </div>
                
                <!-- My Account -->
                <div class="col-lg-3 width-16 mb-30">
                    <h4 class="mb-30 color-gray-1000"><?php _e('My account', 'conbonus'); ?></h4>
                    <ul class="menu-footer">
                        <li><a href="#"><?php _e('FAQs', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Editor Help', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Community', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Live Chatting', 'conbonus'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact Us', 'conbonus'); ?></a></li>
                        <li><a href="#"><?php _e('Support Center', 'conbonus'); ?></a></li>
                    </ul>
                </div>
                
                <!-- App & Payment -->
                <div class="col-lg-3 width-23">
                    <h4 class="mb-30 color-gray-1000"><?php _e('App & Payment', 'conbonus'); ?></h4>
                    <div>
                        <p class="font-md color-gray-900">
                            <?php _e('Download our Apps and get extra 15% Discount on your first Order…!', 'conbonus'); ?>
                        </p>
                        <div class="mt-20">
                            <a class="mr-10" href="<?php echo esc_url(get_theme_mod('conbonus_appstore_url', '#')); ?>">
                                <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/appstore.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                            <a href="<?php echo esc_url(get_theme_mod('conbonus_googleplay_url', '#')); ?>">
                                <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/google-play.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                        <p class="font-md color-gray-900 mt-20 mb-10"><?php _e('Secured Payment Gateways', 'conbonus'); ?></p>
                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/payment-method.png" alt="<?php _e('Payment Methods', 'conbonus'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-2">
        <div class="footer-bottom-1">
            <div class="container">
                <div class="footer-2-top mb-20">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        $footer_logo = get_theme_mod('conbonus_footer_logo');
                        if ($footer_logo) {
                            echo '<img alt="' . get_bloginfo('name') . '" src="' . esc_url($footer_logo) . '">';
                        } else {
                            echo '<img alt="' . get_bloginfo('name') . '" src="' . CONBONUS_THEME_URL . '/assets/imgs/template/logo-2.svg">';
                        }
                        ?>
                    </a>
                    <a class="font-xs color-gray-1000" href="#"><?php bloginfo('name'); ?>.com</a>
                    <a class="font-xs color-gray-1000" href="#"><?php bloginfo('name'); ?> Partners</a>
                    <a class="font-xs color-gray-1000" href="#"><?php bloginfo('name'); ?> Business</a>
                    <a class="font-xs color-gray-1000" href="#"><?php bloginfo('name'); ?> Factory</a>
                </div>
                
                <!-- Product Categories -->
                <div class="footer-2-bottom">
                    <div class="head-left-footer">
                        <h6 class="color-gray-1000"><?php _e('Electronic:', 'conbonus'); ?></h6>
                    </div>
                    <div class="tags-footer">
                        <?php
                        $product_categories = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => true,
                            'number' => 20,
                        ));
                        
                        if (!empty($product_categories)) :
                            foreach ($product_categories as $category) :
                        ?>
                        <a href="<?php echo esc_url(get_term_link($category)); ?>"><?php echo esc_html($category->name); ?></a>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="footer-bottom mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start">
                        <span class="color-gray-900 font-sm">
                            <?php
                            printf(
                                __('Copyright &copy; %s %s. All rights reserved.', 'conbonus'),
                                date('Y'),
                                get_bloginfo('name')
                            );
                            ?>
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-12 text-center text-lg-end">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-gray-900" href="<?php echo esc_url(home_url('/terms')); ?>"><?php _e('Conditions of Use', 'conbonus'); ?></a></li>
                            <li><a class="font-sm color-gray-900" href="<?php echo esc_url(home_url('/privacy')); ?>"><?php _e('Privacy Notice', 'conbonus'); ?></a></li>
                            <li><a class="font-sm color-gray-900" href="<?php echo esc_url(home_url('/careers')); ?>"><?php _e('Interest-Based Ads', 'conbonus'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>