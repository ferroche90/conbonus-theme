<?php
/**
 * The template for displaying product content within loops
 *
 * @package ConBonus
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-30">
    <div class="card-grid-style-3">
        <div class="card-grid-inner">
            <div class="box-image">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(get_the_ID(), 'conbonus-product-thumb', array('class' => 'img-responsive'));
                    } else {
                        echo '<img src="' . wc_placeholder_img_src() . '" alt="' . get_the_title() . '" class="img-responsive">';
                    }
                    ?>
                </a>
                
                <?php if ($product->is_on_sale()) : ?>
                    <span class="label-best-seller"><?php _e('Sale', 'conbonus'); ?></span>
                <?php endif; ?>
                
                <div class="box-btn-cart">
                    <?php
                    echo apply_filters(
                        'woocommerce_loop_add_to_cart_link',
                        sprintf(
                            '<a href="%s" data-quantity="%s" class="%s btn btn-cart" %s>%s</a>',
                            esc_url($product->add_to_cart_url()),
                            esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
                            esc_attr(isset($args['class']) ? $args['class'] : 'button'),
                            isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
                            esc_html($product->add_to_cart_text())
                        ),
                        $product,
                        $args
                    );
                    ?>
                </div>
            </div>
        </div>
        
        <div class="info-right">
            <a class="color-brand-3 font-sm-bold" href="<?php echo esc_url(get_permalink()); ?>">
                <?php echo get_the_title(); ?>
            </a>
            <div class="mt-5">
                <span class="color-brand-2 font-sm-bold">
                    <?php echo $product->get_price_html(); ?>
                </span>
            </div>
        </div>
    </div>
</div>