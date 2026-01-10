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
4. **Automatic Setup**: Upon activation, the theme will automatically:
   - Create all required pages (Home, About, Legal pages, etc.)
   - Set up post categories (French courses, Exams Prep, Fun Exercises)
   - Create and assign navigation menus (Primary, Mobile, Footer menus)
   - Set the Home page as your front page
5. Install and activate recommended plugins:
   - Polylang (for multilingual support)
   - Tutor LMS (for courses)
   - WooCommerce (optional, for e-commerce)

## Automated Theme Setup

When you activate this theme for the first time, it automatically creates:

### Pages Created
- **Home** - Set as front page
- **About Us** - With complete content
- **Mission & Vision** - Full mission statement and values
- **Pedagogical Information** - Including CEFR level tables
- **Biographie** - Founder biography
- **Story of the Project** - Platform history
- **Partenaires** - Partnership information
- **Privacy Policy** - 11 sections
- **Terms of Use** - 15 sections
- **Refund & Cancellation Policy** - 10 sections
- **Copyright & Intellectual Property Policy** - 10 sections
- **Acceptable Use Policy** - Complete policy
- **Instructor Agreement** - Agreement template
- **Contact / Legal Notice** - Contact information

### Categories Created
The theme creates hierarchical post categories for:
- **French courses**: Kids A1.1, A1, A2.1, A2
- **Exams Prep**: DELF Prim A1.1, A1, A2, DELF B1, B2, DALF C1, C2, TCF Canada, TEF Canada
- **Fun Exercises**: Kids A1.1, A1.1+, A1, A1+, A2.1, A2

### Menus Created
- **Main Navigation** (Primary & Mobile): Complete header menu with dropdowns
- **Footer Courses**: Course category links
- **Footer Legal**: Legal page links

## Required Plugins

### Polylang
The theme is designed to work with Polylang for multilingual content. Install Polylang and configure languages (English, French, Spanish, Arabic, Chinese) to enable the language switcher.

**Note**: The theme includes fallback functions so it works perfectly without Polylang. When Polylang is not installed, the theme uses built-in English translations.

**String Registration**: The theme automatically registers all UI strings with Polylang. After activating the theme, go to **Languages > String translations** to translate:
- Navigation items
- Hero section text
- Feature card titles
- Footer text
- Button labels

### WordPress Native Features

The theme integrates seamlessly with WordPress core features:
- **Search**: Header search uses native WordPress search functionality
- **User Authentication**: Sign-in/Log-out buttons link to WordPress login pages
- **User Registration**: Register button appears when user registration is enabled
- **Navigation Menus**: All menus use `wp_nav_menu()` with intelligent fallbacks

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
   
   **Note**: Pages are automatically created on theme activation, so you may not need to create them manually!

2. **Menus**: Menus are automatically created and assigned on theme activation. You can customize them at **Appearance > Menus**:
   - Main Navigation (assigned to Primary & Mobile locations)
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
├── languages/
│   └── french-practice-hub.pot  # Translation template
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

## Key Features

### Dropdown Menu Enhancement
The header dropdown menus now include a smooth hover delay, preventing them from disappearing too quickly. This allows users to easily navigate to sub-menu items.

### WordPress Search Integration
The header search functionality is fully integrated with WordPress's native search. Search queries are processed through WordPress and display results using the theme's search template.

### User Authentication
- **Sign in/Log out**: Dynamically changes based on user login status
- **Register**: Appears only when user registration is enabled in WordPress settings
- All links use WordPress core functions for authentication

### Automated Content Setup
On theme activation, the system automatically:
- Creates 14 pages with complete content
- Establishes 22 post categories in proper hierarchy
- Builds navigation menus with proper structure
- Assigns menus to theme locations
- Sets the home page as the front page

### Translation Ready
- Includes `languages/french-practice-hub.pot` file
- All strings use WordPress localization functions
- Compatible with Polylang for multilingual sites
- Works without Polylang using built-in fallback translations

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

### 1.1.0 (2026-01-10)
**Major Compatibility & Functionality Update**
- **Dropdown Menu Fix**: Added smooth transitions to prevent dropdowns from disappearing too quickly
- **WordPress Search Integration**: Header search now uses native WordPress search functionality
- **User Authentication**: Sign-in/Log-out buttons dynamically change based on login status
- **Register Button**: Appears only when user registration is enabled
- **Automated Theme Setup**: Theme activation now automatically creates:
  - 14 pages with complete content (Home, About, Legal pages, etc.)
  - 22 post categories in proper hierarchy
  - Navigation menus (Primary, Mobile, Footer menus)
  - Proper menu assignments to theme locations
- **Navigation Improvements**: All fallback menus now link to proper WordPress pages and categories
- **Translation Support**: Added `languages/french-practice-hub.pot` file for translations
- **Security**: Fixed XSS vulnerability in search form with proper escaping
- **Menu Parent URLs**: Parent menu items now link to actual category/page archives
- **Mobile Menu**: Automatically assigned the same menu as desktop for consistency
- **Text Domain**: Added proper text domain loading for WordPress translations

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
