<?php
/**
 * The main template file
 *
 * @package ConBonus
 * @since 1.0.0
 */

get_header(); ?>

<main class="main">
    <?php
    // Get homepage layout from customizer
    $homepage_layout = get_theme_mod('conbonus_homepage_layout', 'homepage1');
    
    if (is_front_page()) {
        // Load homepage layout
        switch ($homepage_layout) {
            case 'homepage1':
                get_template_part('template-parts/homepage/homepage-1');
                break;
            case 'homepage2':
                get_template_part('template-parts/homepage/homepage-2');
                break;
            case 'homepage3':
                get_template_part('template-parts/homepage/homepage-3');
                break;
            case 'homepage4':
                get_template_part('template-parts/homepage/homepage-4');
                break;
            case 'homepage5':
                get_template_part('template-parts/homepage/homepage-5');
                break;
            case 'homepage6':
                get_template_part('template-parts/homepage/homepage-6');
                break;
            case 'homepage7':
                get_template_part('template-parts/homepage/homepage-7');
                break;
            case 'homepage8':
                get_template_part('template-parts/homepage/homepage-8');
                break;
            case 'homepage9':
                get_template_part('template-parts/homepage/homepage-9');
                break;
            case 'homepage10':
                get_template_part('template-parts/homepage/homepage-10');
                break;
            default:
                get_template_part('template-parts/homepage/homepage-1');
                break;
        }
    } else {
        // Load blog content for non-homepage
        if (have_posts()) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-posts">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post mb-50'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail mb-30">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('conbonus-blog-thumb'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="post-content">
                                        <h2 class="post-title mb-20">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        
                                        <div class="post-meta mb-20">
                                            <span class="post-date">
                                                <i class="icon-calendar"></i>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                            <span class="post-author">
                                                <i class="icon-user"></i>
                                                <?php the_author(); ?>
                                            </span>
                                            <span class="post-comments">
                                                <i class="icon-comment"></i>
                                                <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                            </span>
                                        </div>
                                        
                                        <div class="post-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        
                                        <div class="post-footer">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                                <?php _e('Read More', 'conbonus'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <?php
                            the_posts_pagination(array(
                                'mid_size' => 2,
                                'prev_text' => __('Previous', 'conbonus'),
                                'next_text' => __('Next', 'conbonus'),
                            ));
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="no-posts">
                            <h2><?php _e('Nothing Found', 'conbonus'); ?></h2>
                            <p><?php _e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'conbonus'); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
    }
    ?>
</main>

<?php get_footer(); ?>