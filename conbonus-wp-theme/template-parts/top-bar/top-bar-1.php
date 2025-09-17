<?php
/**
 * Top Bar Layout 1 - Default Top Bar
 *
 * @package ConBonus
 * @since 1.0.0
 */
?>

<div class="topbar">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('About Us', 'conbonus'); ?></a></li>
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/careers')); ?>"><?php _e('Careers', 'conbonus'); ?></a></li>
                <li><a class="font-xs" href="<?php echo esc_url(home_url('/become-vendor')); ?>"><?php _e('Open a shop', 'conbonus'); ?></a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block">
            <span class="font-xs color-brand-3"><?php _e('Free shipping for all orders over', 'conbonus'); ?></span>
            <span class="font-sm-bold color-success">$75.00</span>
        </div>
        <div class="menu-topbar-right">
            <span class="font-xs color-brand-3"><?php _e('Need help? Call Us:', 'conbonus'); ?></span>
            <span class="font-sm-bold color-success"><?php echo get_theme_mod('conbonus_phone', '+ 1800 900'); ?></span>
            
            <!-- Language Dropdown -->
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                    <span class="dropdown-right font-xs color-brand-3">
                        <img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/en.svg" alt="Ecom">
                        <?php _e('English', 'conbonus'); ?>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-en.svg" alt="Ecom"> <?php _e('English', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-fr.svg" alt="Ecom"> <?php _e('Français', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-es.svg" alt="Ecom"> <?php _e('Español', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-pt.svg" alt="Ecom"> <?php _e('Português', 'conbonus'); ?></a></li>
                    <li><a class="dropdown-item" href="#"><img src="<?php echo CONBONUS_THEME_URL; ?>/assets/imgs/template/flag-cn.svg" alt="Ecom"> <?php _e('中国人', 'conbonus'); ?></a></li>
                </ul>
            </div>
            
            <!-- Currency Dropdown -->
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                    <span class="dropdown-right font-xs color-brand-3">USD</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2" data-bs-popper="static">
                    <li><a class="dropdown-item active" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">AUD</a></li>
                    <li><a class="dropdown-item" href="#">SGP</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
