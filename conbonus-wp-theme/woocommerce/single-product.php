<?php
/**
 * The Template for displaying all single products
 *
 * @package ConBonus
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

get_header('shop'); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                /**
                 * Hook: woocommerce_before_single_product.
                 */
                do_action('woocommerce_before_single_product');

                if (post_password_required()) {
                    echo get_the_password_form();
                    return;
                }
                ?>

                <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            /**
                             * Hook: woocommerce_before_single_product_summary.
                             */
                            do_action('woocommerce_before_single_product_summary');
                            ?>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="summary entry-summary">
                                <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 */
                                do_action('woocommerce_single_product_summary');
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     */
                    do_action('woocommerce_after_single_product_summary');
                    ?>
                </div>

                <?php do_action('woocommerce_after_single_product'); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer('shop');
