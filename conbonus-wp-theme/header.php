<?php
/**
 * The header for our theme
 *
 * @package ConBonus
 * @since 1.0.0
 */

$header_layout = get_theme_mod('conbonus_header_layout', 'header1');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<?php get_template_part('template-parts/preloader'); ?>

<?php
// Include the appropriate header layout
switch ($header_layout) {
    case 'header1':
        get_template_part('template-parts/header/header-1');
        break;
    case 'header2':
        get_template_part('template-parts/header/header-2');
        break;
    case 'header3':
        get_template_part('template-parts/header/header-3');
        break;
    case 'header4':
        get_template_part('template-parts/header/header-4');
        break;
    case 'header5':
        get_template_part('template-parts/header/header-5');
        break;
    case 'header6':
        get_template_part('template-parts/header/header-6');
        break;
    case 'header7':
        get_template_part('template-parts/header/header-7');
        break;
    case 'header8':
        get_template_part('template-parts/header/header-8');
        break;
    default:
        get_template_part('template-parts/header/header-1');
        break;
}
?>

<!-- Mobile Menu -->
<?php get_template_part('template-parts/mobile-menu'); ?>

<!-- Menu Left -->
<?php get_template_part('template-parts/menu-left'); ?>