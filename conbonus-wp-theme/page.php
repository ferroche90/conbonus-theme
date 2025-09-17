<?php
/**
 * The template for displaying all pages
 *
 * @package ConBonus
 * @since 1.0.0
 */

get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                while (have_posts()) :
                    the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                        <header class="page-header">
                            <h1 class="page-title"><?php the_title(); ?></h1>
                        </header>
                        
                        <div class="page-content">
                            <?php
                            the_content();
                            
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'conbonus'),
                                'after' => '</div>',
                            ));
                            ?>
                        </div>
                        
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </article>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>