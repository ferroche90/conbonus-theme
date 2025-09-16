# ConBonus WordPress Theme

A modern e-commerce WordPress theme built for WooCommerce, converted from an HTML template with full WooCommerce integration, responsive design, and customizable options.

## Features

- **WooCommerce Ready**: Full WooCommerce integration with custom templates
- **Responsive Design**: Mobile-first approach with Bootstrap framework
- **Customizable**: Extensive theme customizer options
- **SEO Optimized**: Clean, semantic HTML structure
- **Fast Loading**: Optimized assets and code
- **Translation Ready**: Full internationalization support
- **Modern UI**: Beautiful, modern design with smooth animations

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- WooCommerce plugin (for e-commerce functionality)
- MySQL 5.6 or higher

## Installation

1. **Download the theme**: Download the `wp-theme` folder from this repository
2. **Upload to WordPress**: 
   - Upload the theme folder to `/wp-content/themes/` directory
   - Or use WordPress admin: Appearance > Themes > Add New > Upload Theme
3. **Activate the theme**: Go to Appearance > Themes and activate "ConBonus"
4. **Install WooCommerce**: Install and activate the WooCommerce plugin
5. **Import demo content** (optional): Use WooCommerce sample data

## Theme Setup

### 1. Configure WooCommerce
- Go to WooCommerce > Settings and configure your store
- Set up payment gateways, shipping methods, and tax settings
- Add your products and categories

### 2. Customize the Theme
- Go to Appearance > Customize
- Configure the following sections:
  - **Header Options**: Upload logo, set header settings
  - **Footer Options**: Configure footer logo and content
  - **Contact Information**: Set address, phone, email, hours
  - **Social Media**: Add social media links
  - **Mobile Apps**: Add App Store and Google Play links

### 3. Set Up Menus
- Go to Appearance > Menus
- Create and assign menus to:
  - Primary Menu (main navigation)
  - Footer Menu
  - Mobile Menu

### 4. Configure Widgets
- Go to Appearance > Widgets
- Add widgets to:
  - Sidebar
  - Shop Sidebar
  - Footer Widgets

## Theme Structure

```
wp-theme/
├── assets/                 # CSS, JS, images, fonts
├── inc/                   # Theme functions and customizations
│   ├── woocommerce.php    # WooCommerce integration
│   ├── customizer.php     # Theme customizer options
│   └── template-functions.php # Helper functions
├── template-parts/        # Reusable template parts
├── woocommerce/          # WooCommerce template overrides
├── functions.php         # Main theme functions
├── style.css            # Main stylesheet with theme info
├── index.php            # Main template file
├── header.php           # Header template
├── footer.php           # Footer template
├── sidebar.php          # Sidebar template
├── page.php             # Page template
├── single.php           # Single post template
└── 404.php              # 404 error template
```

## WooCommerce Integration

The theme includes custom WooCommerce templates:

- **Product Archive**: Custom shop page layout
- **Single Product**: Enhanced product page design
- **Cart Page**: Styled cart page
- **Checkout Page**: Custom checkout design
- **My Account**: User account pages

## Customization

### CSS Customization
Add custom CSS in Appearance > Customize > Additional CSS

### Child Theme
For extensive customizations, create a child theme:

1. Create a new folder: `conbonus-child`
2. Create `style.css` with:
```css
/*
Theme Name: ConBonus Child
Template: conbonus
*/
@import url("../conbonus/style.css");
```
3. Copy and modify template files as needed

### Hooks and Filters
The theme provides various hooks for customization:

- `conbonus_before_header`
- `conbonus_after_header`
- `conbonus_before_footer`
- `conbonus_after_footer`

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Performance

The theme is optimized for performance:

- Minified CSS and JavaScript
- Optimized images
- Clean, semantic HTML
- Efficient database queries
- Caching-friendly structure

## Support

For support and documentation:

1. Check the WordPress Codex
2. Review WooCommerce documentation
3. Contact theme support (if available)

## Changelog

### Version 1.0.0
- Initial release
- WooCommerce integration
- Responsive design
- Theme customizer options
- Translation ready

## License

This theme is licensed under the GPL v2 or later.

## Credits

- Original HTML template: AliThemes
- WordPress conversion: Custom development
- Icons: Font Awesome
- Framework: Bootstrap

---

**Note**: This theme requires WooCommerce plugin for full e-commerce functionality. Make sure to install and configure WooCommerce after activating the theme.
