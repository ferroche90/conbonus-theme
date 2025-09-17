<?php
/**
 * The template for displaying all single posts
 *
 * @package ConBonus
 * @since 1.0.0
 */

get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                while (have_posts()) :
                    the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                        <header class="post-header">
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            <?php conbonus_post_meta(); ?>
                        </header>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <?php
                            the_content();
                            
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'conbonus'),
                                'after' => '</div>',
                            ));
                            ?>
                        </div>
                        
                        <footer class="post-footer">
                            <div class="post-tags">
                                <?php the_tags('<span class="tags-label">' . __('Tags:', 'conbonus') . '</span> ', ', ', ''); ?>
                            </div>
                            
                            <div class="post-categories">
                                <span class="categories-label"><?php _e('Categories:', 'conbonus'); ?></span>
                                <?php the_category(', '); ?>
                            </div>
                        </footer>
                    </article>
                    
                    <!-- Related Posts -->
                    <?php conbonus_related_posts(); ?>
                    
                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        <div class="nav-links">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            
                            if ($prev_post) :
                            ?>
                            <div class="nav-previous">
                                <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                    <span class="nav-subtitle"><?php _e('Previous Post', 'conbonus'); ?></span>
                                    <span class="nav-title"><?php echo get_the_title($prev_post->ID); ?></span>
                                </a>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                            <div class="nav-next">
                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                    <span class="nav-subtitle"><?php _e('Next Post', 'conbonus'); ?></span>
                                    <span class="nav-title"><?php echo get_the_title($next_post->ID); ?></span>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                    
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                <?php
                endwhile;
                ?>
            </div>
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>