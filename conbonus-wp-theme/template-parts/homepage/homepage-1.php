<?php
/**
 * Homepage Layout 1 - Default Homepage
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<!-- Hero Banner Section -->
<?php get_template_part('template-parts/sections/homepage1/hero-banner'); ?>

<!-- Featured Categories Section -->
<?php get_template_part('template-parts/sections/homepage1/featured-categories'); ?>

<!-- Special Offers Section -->
<?php get_template_part('template-parts/sections/homepage1/special-offers'); ?>

<!-- Featured Products Section -->
<?php get_template_part('template-parts/sections/homepage1/featured-products'); ?>

<!-- Best Sellers Section -->
<?php get_template_part('template-parts/sections/homepage1/best-sellers'); ?>

<!-- New Arrivals Section -->
<?php get_template_part('template-parts/sections/homepage1/new-arrivals'); ?>

<!-- Deals Section -->
<?php get_template_part('template-parts/sections/homepage1/deals'); ?>

<!-- Newsletter Section -->
<?php get_template_part('template-parts/sections/homepage1/newsletter'); ?>

<!-- Latest News Section -->
<section class="section-box mt-50">
    <div class="container">
        <div class="head-main">
            <h3 class="mb-5"><?php _e('Latest News & Events', 'conbonus'); ?></h3>
            <p class="font-base color-gray-500"><?php _e('From our blog, forum', 'conbonus'); ?></p>
            <div class="box-button-slider">
                <div class="swiper-button-next swiper-button-next-group-4"></div>
                <div class="swiper-button-prev swiper-button-prev-group-4"></div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/sections/blog-slider'); ?>
</section>

<!-- Footer CTA Section -->
<?php get_template_part('template-parts/sections/homepage1/footer-cta'); ?>

<!-- Newsletter Section -->
<?php get_template_part('template-parts/sections/newsletter'); ?>

<!-- Quickview Modal -->
<?php get_template_part('template-parts/elements/quickview'); ?>
