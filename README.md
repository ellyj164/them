# French Practice Hub WordPress Theme

A comprehensive WordPress theme for French language learning platform with Polylang, Tutor LMS, and WooCommerce support.

## Features

- **Responsive Design**: Mobile-first approach with hamburger menu for smaller screens
- **Polylang Integration**: Full multilingual support with translatable UI strings
- **Tutor LMS Compatible**: Works seamlessly with Tutor LMS for course management
- **WooCommerce Ready**: Full WooCommerce support for selling courses
- **Modern UI**: Clean, professional design with video hero section
- **Custom Navigation**: Dropdown menus with hover effects
- **SEO Friendly**: Clean HTML structure compatible with RankMath and Yoast SEO

## Installation

1. Download the theme folder `french-practice-hub-theme`
2. Upload to `/wp-content/themes/` directory on your WordPress installation
3. Activate the theme from WordPress admin dashboard
4. Install and activate recommended plugins:
   - Polylang (for multilingual support)
   - Tutor LMS (for courses)
   - WooCommerce (optional, for e-commerce)

## Required Plugins

### Polylang
The theme is designed to work with Polylang for multilingual content. Install Polylang and configure languages (English, French, Spanish, Arabic, Chinese) to enable the language switcher.

**String Registration**: The theme automatically registers all UI strings with Polylang. After activating the theme, go to **Languages > String translations** to translate:
- Navigation items
- Hero section text
- Feature card titles
- Footer text
- Button labels

### Recommended Setup

1. **Page Templates Available**: The theme includes built-in templates with complete content:
   - About Us (`page-about.php`)
   - Pedagogical Information (`page-pedagogy.php`) - includes CEFR tables
   - Mission & Vision (`page-mission.php`)
   - Biography (`page-biography.php`)
   - Story of the Project (`page-story.php`)
   - Partners (`page-partners.php`)
   - Privacy Policy (`page-privacy.php`)
   - Terms of Use (`page-terms.php`)
   - Refund & Cancellation Policy (`page-refund.php`)
   - Copyright & IP Policy (`page-copyright.php`)
   - Acceptable Use Policy (`page-acceptable-use.php`)
   
   **To use these templates**:
   - Create a new page in WordPress
   - Set the page slug to match (e.g., "about" for About Us)
   - Select the corresponding template from the "Template" dropdown
   - The content is built into the template, no editing needed!

2. **Configure Menus**: Go to **Appearance > Menus** and create:
   - Primary Menu (desktop navigation)
   - Mobile Menu (mobile navigation)
   - Footer Courses (footer courses links)
   - Footer Legal (footer legal links)

3. **Upload Logo**: Go to **Appearance > Customize > Site Identity** to upload your logo

## Theme Structure

```
french-practice-hub-theme/
├── style.css              # Theme header and meta information
├── functions.php          # Theme setup and functionality
├── header.php             # Site header with navigation
├── footer.php             # Site footer
├── front-page.php         # Homepage (hero + features)
├── page.php               # Static pages template
├── page-about.php         # About Us page (complete content)
├── page-pedagogy.php      # Pedagogical Info (with tables)
├── page-mission.php       # Mission & Vision
├── page-biography.php     # Founder Biography
├── page-story.php         # Story of the Project
├── page-partners.php      # Partners page
├── page-privacy.php       # Privacy Policy (11 sections)
├── page-terms.php         # Terms of Use (15 sections)
├── page-refund.php        # Refund Policy (10 sections)
├── page-copyright.php     # Copyright Policy (10 sections)
├── page-acceptable-use.php # Acceptable Use Policy
├── single.php             # Single post template
├── archive.php            # Archive pages
├── index.php              # Fallback template
├── search.php             # Search results
├── 404.php                # 404 error page
├── sidebar.php            # Sidebar template
├── searchform.php         # Search form
├── comments.php           # Comments template
├── screenshot.png         # Theme screenshot (placeholder)
├── assets/
│   ├── css/
│   │   └── main.css       # All theme styles (from weWEB.html)
│   ├── js/
│   │   └── main.js        # Theme JavaScript
│   └── images/            # Theme images
└── template-parts/
    ├── content.php        # Generic content template
    ├── content-page.php   # Page content template
    ├── content-single.php # Single post content template
    └── content-none.php   # No results template
```

## Customization

### Colors
Edit the CSS custom properties in `assets/css/main.css`:
```css
:root {
    --magenta-accent: #D9006C;
    --primary-color: #005A9C;
    --text-color: #212121;
    --bg-color: #F8F9FA;
    /* ... */
}
```

### Hero Video
The hero video URL is hardcoded in `front-page.php`. To change it, edit line 16:
```php
<source src="YOUR_VIDEO_URL" type="video/mp4">
```

### Feature Card Images
Feature card background images are set in `front-page.php` using inline styles. Update the URLs to point to your images.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Android)

## License

GNU General Public License v2 or later

## Support

For support, please contact: contact@fidelefle.com

## Credits

- Theme: Fidele FLE
- Fonts: Source Sans Pro (Google Fonts)

## Changelog

### 1.0.0
- Initial release
- Full WordPress theme structure
- Complete content integration from weWEB.html
- All page templates with full, ready-to-use content
- 11 specialized page templates (about, legal, etc.)
- Polylang integration with fallback translations
- Tutor LMS compatibility
- WooCommerce support
- Elementor and page builder compatibility
- Responsive design with mobile menu
- Hero section with video background
- 6 feature cards with exact titles
- Complete navigation structure
- Mobile dropdown accordion
- Search functionality
