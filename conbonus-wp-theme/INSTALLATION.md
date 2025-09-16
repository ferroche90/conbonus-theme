# ConBonus WordPress Theme - Installation Guide

## Quick Start

### 1. Prerequisites
- WordPress 5.0+ installed
- PHP 7.4+
- WooCommerce plugin (for e-commerce features)

### 2. Installation Steps

#### Method 1: WordPress Admin (Recommended)
1. Download the `wp-theme` folder
2. Zip the folder and rename it to `conbonus.zip`
3. Go to WordPress Admin > Appearance > Themes > Add New
4. Click "Upload Theme" and select the zip file
5. Click "Install Now" and then "Activate"

#### Method 2: FTP Upload
1. Download the `wp-theme` folder
2. Rename it to `conbonus`
3. Upload via FTP to `/wp-content/themes/`
4. Go to WordPress Admin > Appearance > Themes
5. Find "ConBonus" and click "Activate"

### 3. Initial Setup

#### Install Required Plugins
1. **WooCommerce** (Essential for e-commerce)
   - Go to Plugins > Add New
   - Search for "WooCommerce"
   - Install and activate
   - Run the setup wizard

#### Configure Theme
1. Go to **Appearance > Customize**
2. Configure the following sections:

**Header Options:**
- Upload your logo
- Set header layout preferences

**Footer Options:**
- Upload footer logo
- Configure footer content

**Contact Information:**
- Set your business address
- Add phone number
- Add email address
- Set business hours

**Social Media:**
- Add Facebook URL
- Add Instagram URL
- Add Twitter URL
- Add LinkedIn URL

**Mobile Apps:**
- Add App Store URL
- Add Google Play URL

### 4. Menu Setup

1. Go to **Appearance > Menus**
2. Create a new menu called "Primary Menu"
3. Add pages and categories to the menu
4. Assign to "Primary Menu" location
5. Create "Footer Menu" and "Mobile Menu" as needed

### 5. Widget Setup

1. Go to **Appearance > Widgets**
2. Add widgets to:
   - **Sidebar**: For blog pages
   - **Shop Sidebar**: For WooCommerce pages
   - **Footer Widgets**: For footer content

### 6. WooCommerce Configuration

1. Go to **WooCommerce > Settings**
2. Configure:
   - **General**: Set currency, location, etc.
   - **Products**: Set catalog options
   - **Shipping**: Configure shipping methods
   - **Payments**: Set up payment gateways
   - **Tax**: Configure tax settings

3. Add sample products or import your own

### 7. Content Setup

#### Create Essential Pages
1. **Home Page**: Set as static front page
2. **Shop Page**: WooCommerce will create this
3. **About Page**: Create and customize
4. **Contact Page**: Add contact form
5. **Blog Page**: Set as posts page

#### Set Reading Settings
1. Go to **Settings > Reading**
2. Set "Your homepage displays" to "A static page"
3. Select your home page
4. Set posts page for blog

### 8. Final Steps

1. **Test the site**: Check all pages and functionality
2. **Mobile testing**: Test on different devices
3. **SEO setup**: Install SEO plugin (Yoast, RankMath)
4. **Backup**: Set up regular backups
5. **Security**: Install security plugin

## Troubleshooting

### Common Issues

**Theme not activating:**
- Check PHP version (7.4+ required)
- Ensure all files uploaded correctly
- Check file permissions

**WooCommerce not working:**
- Ensure WooCommerce plugin is active
- Check WooCommerce settings
- Verify theme supports WooCommerce

**Styling issues:**
- Clear any caching plugins
- Check for plugin conflicts
- Verify assets are loading

**Menu not showing:**
- Create and assign menu in Appearance > Menus
- Check menu location assignments
- Clear cache if using caching plugin

### Getting Help

1. Check WordPress Codex
2. Review WooCommerce documentation
3. Check theme documentation
4. Contact support if available

## Post-Installation Checklist

- [ ] Theme activated successfully
- [ ] WooCommerce installed and configured
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

## Performance Tips

1. **Optimize images**: Use WebP format when possible
2. **Enable caching**: Use caching plugins
3. **Minimize plugins**: Only use necessary plugins
4. **Regular updates**: Keep WordPress, theme, and plugins updated
5. **Database optimization**: Regular database cleanup

## Security Tips

1. **Strong passwords**: Use complex passwords
2. **Regular updates**: Keep everything updated
3. **Security plugin**: Install security plugin
4. **Backup regularly**: Automated backups
5. **Limit login attempts**: Use security plugins

---

**Note**: This theme is designed for WooCommerce. While it will work without WooCommerce, you'll get the best experience with WooCommerce installed and configured.
