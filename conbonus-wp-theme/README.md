# ConBonus WordPress Theme

A comprehensive e-commerce WordPress theme with **10 homepage layouts**, multiple shop designs, blog variations, and advanced features. Converted from HTML template with full WooCommerce integration, vendor system, wishlist, compare functionality, and extensive customization options.

## 🚀 Features

### 🏠 Homepage Layouts (10 Options)
- **Homepage 1** - Default Electronics Store
- **Homepage 2** - Electronics & Gadgets
- **Homepage 3** - Fashion & Clothing
- **Homepage 4** - Furniture & Home
- **Homepage 5** - Grocery & Food
- **Homepage 6** - Garden & Outdoor
- **Homepage 7** - Kids & Toys
- **Homepage 8** - Books & Education
- **Homepage 9** - Sports & Fitness
- **Homepage 10** - Plants & Gardening

### 🛍️ Shop Layouts
- **Shop Grid** - 4-column product grid
- **Shop List** - List view with details
- **Shop Fullwidth** - Full-width layout
- **Shop Grid 2** - Alternative grid layout
- **Shop List 2** - Alternative list layout
- **Vendor Pages** - Individual vendor stores
- **Vendor List** - All vendors directory

### 📝 Blog Layouts
- **Blog Grid** - Standard blog grid
- **Blog List** - List view blog
- **Blog Big** - Large featured posts
- **Blog Single** - Multiple single post layouts
- **Blog Single 2** - Alternative single layout
- **Blog Single 3** - Third single layout

### 🎨 Header Variations (8 Options)
- **Header 1** - Default with search
- **Header 2** - Alternative layout
- **Header 3** - Minimal design
- **Header 4** - Extended navigation
- **Header 5** - Compact header
- **Header 6** - Full-width header
- **Header 7** - Sticky header
- **Header 8** - Transparent header

### ⚡ Advanced Features
- **WooCommerce Integration** - Full e-commerce functionality
- **Vendor System** - Multi-vendor marketplace support
- **Wishlist** - Save favorite products
- **Compare** - Compare up to 4 products
- **Quick View** - Quick product preview
- **AJAX Cart** - Dynamic cart updates
- **Product Search** - Advanced search with suggestions
- **Newsletter** - Email subscription system
- **Social Media** - Integrated social links
- **Mobile Apps** - App store integration

### 🎛️ Customization Options
- **Theme Customizer** - Live preview customization
- **Homepage Layout Selector** - Choose from 10 layouts
- **Header Layout Selector** - Choose from 8 header styles
- **Logo Upload** - Custom logo support
- **Contact Information** - Address, phone, email, hours
- **Social Media Links** - Facebook, Instagram, Twitter, LinkedIn
- **Mobile App Links** - App Store and Google Play
- **Color Schemes** - Multiple color options
- **Typography** - Custom font settings

## 📋 Requirements

- **WordPress** 5.0 or higher
- **PHP** 7.4 or higher
- **WooCommerce** plugin (for e-commerce functionality)
- **MySQL** 5.6 or higher

## 🚀 Installation

### Method 1: WordPress Admin (Recommended)
1. Download the `conbonus-wp-theme` folder
2. Zip the folder and rename it to `conbonus.zip`
3. Go to **WordPress Admin > Appearance > Themes > Add New**
4. Click **"Upload Theme"** and select the zip file
5. Click **"Install Now"** and then **"Activate"**

### Method 2: FTP Upload
1. Download the `conbonus-wp-theme` folder
2. Rename it to `conbonus`
3. Upload via FTP to `/wp-content/themes/`
4. Go to **WordPress Admin > Appearance > Themes**
5. Find **"ConBonus"** and click **"Activate"**

## ⚙️ Setup Guide

### 1. Install Required Plugins
- **WooCommerce** (Essential for e-commerce)
  - Go to **Plugins > Add New**
  - Search for "WooCommerce"
  - Install and activate
  - Run the setup wizard

### 2. Configure Theme
Go to **Appearance > Customize** and configure:

#### Homepage Layout
- Select from 10 different homepage layouts
- Each layout is designed for specific industries

#### Header Options
- Choose from 8 header variations
- Upload your logo
- Configure header settings

#### Footer Options
- Upload footer logo
- Configure footer content

#### Contact Information
- Set your business address
- Add phone number and email
- Set business hours

#### Social Media
- Add Facebook, Instagram, Twitter, LinkedIn URLs
- Links will appear in header and footer

#### Mobile Apps
- Add App Store and Google Play URLs
- Links will appear in footer

### 3. Menu Setup
1. Go to **Appearance > Menus**
2. Create menus for:
   - **Primary Menu** (main navigation)
   - **Footer Menu**
   - **Mobile Menu**
   - **Category Menu**

### 4. Widget Setup
1. Go to **Appearance > Widgets**
2. Add widgets to:
   - **Sidebar** (for blog pages)
   - **Shop Sidebar** (for WooCommerce pages)
   - **Blog Sidebar** (for blog pages)
   - **Footer Widgets** (for footer)
   - **Vendor Sidebar** (for vendor pages)

### 5. WooCommerce Configuration
1. Go to **WooCommerce > Settings**
2. Configure:
   - **General**: Currency, location, etc.
   - **Products**: Catalog options
   - **Shipping**: Shipping methods
   - **Payments**: Payment gateways
   - **Tax**: Tax settings

### 6. Content Setup

#### Create Essential Pages
- **Home Page**: Set as static front page
- **Shop Page**: WooCommerce will create this
- **About Page**: Create and customize
- **Contact Page**: Add contact form
- **Blog Page**: Set as posts page

#### Set Reading Settings
1. Go to **Settings > Reading**
2. Set "Your homepage displays" to "A static page"
3. Select your home page
4. Set posts page for blog

## 🏗️ Theme Structure

```
conbonus-wp-theme/
├── assets/                    # CSS, JS, images, fonts
│   ├── css/                  # Stylesheets
│   ├── js/                   # JavaScript files
│   ├── imgs/                 # Images and icons
│   └── fonts/                # Font files
├── inc/                      # Theme functions and customizations
│   ├── woocommerce.php       # WooCommerce integration
│   ├── customizer.php        # Theme customizer options
│   ├── template-functions.php # Helper functions
│   ├── advanced-features.php # Advanced functionality
│   └── vendor-system.php     # Multi-vendor system
├── template-parts/           # Reusable template parts
│   ├── header/               # Header variations
│   ├── top-bar/              # Top bar variations
│   ├── homepage/             # Homepage layouts
│   ├── sections/             # Page sections
│   └── elements/             # UI elements
├── woocommerce/              # WooCommerce template overrides
│   ├── archive-product.php   # Shop page
│   ├── single-product.php    # Product page
│   └── content-product.php   # Product card
├── functions.php             # Main theme functions
├── style.css                 # Main stylesheet with theme info
├── index.php                 # Main template file
├── header.php                # Header template
├── footer.php                # Footer template
├── sidebar.php               # Sidebar template
├── page.php                  # Page template
├── single.php                # Single post template
└── 404.php                   # 404 error template
```

## 🛒 WooCommerce Integration

The theme includes comprehensive WooCommerce support:

### Custom Templates
- **Product Archive**: Custom shop page layout
- **Single Product**: Enhanced product page design
- **Cart Page**: Styled cart page
- **Checkout Page**: Custom checkout design
- **My Account**: User account pages

### Product Features
- **Product Grid**: 4-column responsive grid
- **Product Cards**: Custom product card design
- **Quick View**: AJAX product preview
- **Wishlist**: Save favorite products
- **Compare**: Compare multiple products
- **Product Search**: Advanced search functionality

### Vendor System
- **Vendor Profiles**: Individual vendor pages
- **Vendor Products**: Products by vendor
- **Vendor Ratings**: Rating system
- **Vendor Contact**: Contact information

## 🎨 Customization

### CSS Customization
Add custom CSS in **Appearance > Customize > Additional CSS**

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
- `conbonus_homepage_layout`
- `conbonus_header_layout`

## 📱 Browser Support

- **Chrome** (latest)
- **Firefox** (latest)
- **Safari** (latest)
- **Edge** (latest)
- **Internet Explorer** 11+

## ⚡ Performance

The theme is optimized for performance:

- **Minified CSS and JavaScript**
- **Optimized images**
- **Clean, semantic HTML**
- **Efficient database queries**
- **Caching-friendly structure**
- **Lazy loading support**

## 🔒 Security

- **Sanitized inputs**
- **Escaped outputs**
- **Nonce verification**
- **Capability checks**
- **SQL injection prevention**

## 🌐 Translation Ready

- **Full internationalization support**
- **Translation files included**
- **RTL support ready**
- **Multiple language support**

## 📞 Support

For support and documentation:

1. Check the WordPress Codex
2. Review WooCommerce documentation
3. Check theme documentation
4. Contact theme support (if available)

## 📝 Changelog

### Version 1.0.0
- Initial release
- 10 homepage layouts
- 8 header variations
- WooCommerce integration
- Vendor system
- Wishlist and compare functionality
- Advanced search
- Newsletter system
- Responsive design
- Theme customizer options
- Translation ready

## 📄 License

This theme is licensed under the **GPL v2 or later**.

## 🙏 Credits

- **Original HTML template**: AliThemes
- **WordPress conversion**: Custom development
- **Icons**: Font Awesome
- **Framework**: Bootstrap
- **Slider**: Swiper.js
- **JavaScript**: jQuery

---

**Note**: This theme requires WooCommerce plugin for full e-commerce functionality. Make sure to install and configure WooCommerce after activating the theme.

## 🎯 Quick Start Checklist

- [ ] Theme activated successfully
- [ ] WooCommerce installed and configured
- [ ] Homepage layout selected
- [ ] Header layout selected
- [ ] Logo uploaded
- [ ] Contact information added
- [ ] Social media links added
- [ ] Menus created and assigned
- [ ] Widgets configured
- [ ] Essential pages created
- [ ] Reading settings configured
- [ ] Site tested on desktop and mobile
- [ ] SEO plugin installed
- [ ] Backup system in place

**Enjoy your new ConBonus WordPress theme! 🎉**