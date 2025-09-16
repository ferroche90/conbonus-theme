<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ConBonus
 * @since 1.0.0
 */

get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error-404">
                    <div class="error-content text-center">
                        <h1 class="error-title">404</h1>
                        <h2 class="error-subtitle"><?php _e('Page Not Found', 'conbonus'); ?></h2>
                        <p class="error-description">
                            <?php _e('Sorry, the page you are looking for could not be found.', 'conbonus'); ?>
                        </p>
                        
                        <div class="error-actions">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                                <?php _e('Go Home', 'conbonus'); ?>
                            </a>
                            <a href="javascript:history.back()" class="btn btn-secondary">
                                <?php _e('Go Back', 'conbonus'); ?>
                            </a>
                        </div>
                        
                        <div class="error-search mt-30">
                            <h3><?php _e('Search for something else', 'conbonus'); ?></h3>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
