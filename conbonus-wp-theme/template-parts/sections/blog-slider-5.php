<?php
/**
 * Blog Slider 5 Section
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<div class="container mt-10">
    <div class="box-swiper">
        <div class="swiper-container swiper-group-4">
            <div class="swiper-wrapper pt-5">
                <?php
                $blog_posts = get_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'post_status' => 'publish'
                ));
                
                $blog_images = array('news1.png', 'news2.png', 'news3.png', 'news4.png');
                $blog_tags = array('News', 'News', 'News', 'Tips');
                
                foreach ($blog_posts as $index => $post) :
                    $image = isset($blog_images[$index]) ? $blog_images[$index] : 'news1.png';
                    $tag = isset($blog_tags[$index]) ? $blog_tags[$index] : 'News';
                    $read_time = rand(3, 8); // Random read time
                ?>
                <div class="swiper-slide">
                    <div class="card-grid-style-1">
                        <div class="image-box">
                            <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                                <?php if (has_post_thumbnail($post->ID)) : ?>
                                    <?php echo get_the_post_thumbnail($post->ID, 'conbonus-blog-thumb'); ?>
                                <?php else : ?>
                                    <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/page/homepage8/<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($post->post_title); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <a class="tag-dot font-xs" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php echo esc_html($tag); ?></a>
                        <a class="color-gray-1100" href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                            <h4><?php echo wp_trim_words($post->post_title, 8); ?></h4>
                        </a>
                        <div class="mt-20">
                            <span class="color-gray-500 font-xs mr-30"><?php echo get_the_date('F j, Y', $post->ID); ?></span>
                            <span class="color-gray-500 font-xs">
                                <?php echo $read_time; ?>
                                <span><?php _e('Mins read', 'conbonus'); ?></span>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
