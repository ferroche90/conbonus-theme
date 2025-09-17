<?php
/**
 * The Template for displaying product archives, including the main shop page
 *
 * @package ConBonus
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

get_header('shop'); ?>

<main class="main">
    <!-- Shop Header -->
    <section class="section-box mt-50">
        <div class="container">
            <div class="head-main">
                <h1 class="mb-5"><?php woocommerce_page_title(); ?></h1>
                <?php
                $shop_description = get_the_archive_description();
                if ($shop_description) :
                ?>
                <p class="font-base color-gray-500"><?php echo wp_kses_post($shop_description); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    if (woocommerce_product_loop()) {
                        /**
                         * Hook: woocommerce_before_shop_loop.
                         */
                        do_action('woocommerce_before_shop_loop');

                        woocommerce_product_loop_start();

                        if (wc_get_loop_prop('is_shortcode')) {
                            $columns = absint(wc_get_loop_prop('columns'));
                        } else {
                            $columns = wc_get_default_products_per_row();
                        }

                        while (have_posts()) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action('woocommerce_shop_loop');

                            wc_get_template_part('content', 'product');
                        }

                        woocommerce_product_loop_end();

                        /**
                         * Hook: woocommerce_after_shop_loop.
                         */
                        do_action('woocommerce_after_shop_loop');
                    } else {
                        /**
                         * Hook: woocommerce_no_products_found.
                         */
                        do_action('woocommerce_no_products_found');
                    }
                    ?>
                </div>
                
                <div class="col-lg-3">
                    <?php
                    /**
                     * Hook: woocommerce_sidebar.
                     */
                    do_action('woocommerce_sidebar');
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer('shop');