<?php
/**
 * Homepage Layout 9 - Sports & Fitness
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<!-- Hero Banner Section -->
<?php get_template_part('template-parts/sections/homepage9/banner'); ?>

<!-- Slider Products Section -->
<?php get_template_part('template-parts/sections/homepage9/slider-products'); ?>

<!-- Featured Categories Section -->
<div class="bg-home9">
    <?php get_template_part('template-parts/sections/homepage2/featured-categories'); ?>
</div>

<!-- Product Category Section -->
<?php get_template_part('template-parts/sections/homepage9/product-category'); ?>

<!-- Best Sellers Section -->
<div class="bg-home9">
    <?php get_template_part('template-parts/sections/homepage4/best-sellers'); ?>
</div>

<!-- Product Category 2 Section -->
<?php get_template_part('template-parts/sections/homepage9/product-category-2'); ?>

<!-- Sales Section -->
<div class="bg-home9">
    <?php get_template_part('template-parts/sections/homepage7/sales'); ?>
</div>

<!-- Product Category 3 Section -->
<?php get_template_part('template-parts/sections/homepage9/product-category-3'); ?>

<!-- Product Category 4 Section -->
<?php get_template_part('template-parts/sections/homepage9/product-category-4'); ?>

<!-- Banner Bottom Section -->
<div class="bg-home9 pb-60">
    <?php get_template_part('template-parts/sections/homepage6/banner-bottom'); ?>
</div>

<!-- Newsletter Section -->
<?php get_template_part('template-parts/sections/homepage2/newsletter'); ?>

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
    <?php get_template_part('template-parts/sections/blog-slider-5'); ?>
</section>

<!-- Footer CTA Section -->
<?php get_template_part('template-parts/sections/homepage1/footer-cta'); ?>

<!-- Newsletter Section -->
<?php get_template_part('template-parts/sections/newsletter'); ?>

<!-- Quickview Modal -->
<?php get_template_part('template-parts/elements/quickview'); ?>
