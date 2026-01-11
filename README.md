# French Practice Hub WordPress Theme

A comprehensive WordPress theme for French language learning platform with translation plugin compatibility, Tutor LMS, and WooCommerce support.

## Features

- **Responsive Design**: Mobile-first approach with hamburger menu for smaller screens
- **Translation Plugin Compatible**: Works with Polylang, WPML, TranslatePress, Weglot, and other translation plugins
- **No Google Translate Dependency**: Uses WordPress translation plugins for better SEO and control
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

### Translation Plugin Compatibility

The theme is fully compatible with popular WordPress translation plugins for creating multilingual websites:

#### Supported Translation Plugins
- **Polylang** (free) - Recommended for most users
- **WPML** (premium) - Enterprise-level multilingual support
- **TranslatePress** - Visual translation editor
- **Weglot** - Cloud-based automatic translation
- **Loco Translate** - For translating theme strings

#### Setting Up Multilingual Support with Polylang

1. **Install Polylang**: Download and activate the free Polylang plugin from WordPress.org
2. **Configure Languages**: Go to **Languages > Languages** and add your desired languages (e.g., English, French, Spanish, Arabic, Chinese)
3. **Translate Strings**: Go to **Languages > String translations** to translate theme UI strings:
   - Navigation items (Home, Courses, Exams, etc.)
   - Hero section text
   - Feature card titles
   - Footer text
   - Button labels
4. **Language Switcher**: The theme automatically displays a language switcher in the header with flag emojis when Polylang is active
5. **Translate Content**: Create translated versions of your pages and posts using Polylang's interface

#### Setting Up with WPML

1. **Install WPML**: Purchase and activate WPML plugin
2. **Configure Languages**: Follow WPML's setup wizard to configure your languages
3. **String Translation**: Use WPML's String Translation feature to translate theme strings
4. **Language Switcher**: The theme automatically detects WPML and displays the language switcher

#### No Translation Plugin Installed?

The theme works perfectly without any translation plugin installed:
- The language switcher shows only English (EN) by default
- All theme strings display in English
- No errors or broken functionality

**Note**: The theme does NOT use Google Translate API. Translation is handled entirely by WordPress translation plugins, giving you full control over translations and better SEO.

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
   - Instructor Agreement (`page-instructor-agreement.php`)
   - Contact / Legal Notice (`page-contact.php`)
   
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

## Translation Plugin Integration

### Custom Hooks for Other Plugins

If you're using a translation plugin not natively supported, you can integrate it using these hooks:

- `fph_language_switcher` - Desktop language switcher hook
- `fph_mobile_language_switcher` - Mobile language switcher hook

Example:
```php
add_action('fph_language_switcher', 'my_custom_language_switcher');
function my_custom_language_switcher() {
    // Your custom language switcher code
}
```

### Language Flag Mapping

The theme includes a built-in flag emoji mapping for common languages:
- English (en): 🇬🇧
- French (fr): 🇫🇷
- Spanish (es): 🇪🇸
- Arabic (ar): 🇸🇦
- Chinese (zh): 🇨🇳

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
├── page-instructor-agreement.php # Instructor Agreement
├── page-contact.php       # Contact / Legal Notice
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
│   │   └── main.css       # All theme styles
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
- Compatible with Polylang, WPML, TranslatePress, Weglot, and other translation plugins
- Works without any translation plugin using built-in fallback translations
- No dependency on Google Translate API

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

### 1.3.0 (2026-01-11)
**Translation Plugin Compatibility Update**
- **Removed Google Translate Dependency**: 
  - Removed Google Translate API integration
  - Deleted `google-translate-init.js` file
  - Removed Google Translate hidden element from header
  - Removed Google Translate theme customizer settings
  - Removed Google Translate script enqueuing from functions.php
- **Translation Plugin Compatibility**: Theme now works seamlessly with:
  - Polylang (free) - with automatic language switcher
  - WPML (premium) - with automatic language switcher
  - TranslatePress, Weglot, and other translation plugins via custom hooks
  - Loco Translate for string translations
- **Enhanced Language Switcher**:
  - Desktop and mobile language switchers now use plugin APIs (Polylang/WPML)
  - Flag emoji mapping for English, French, Spanish, Arabic, and Chinese
  - Automatic detection of active translation plugins
  - Fallback to single language display when no plugin is active
  - Custom hooks (`fph_language_switcher`, `fph_mobile_language_switcher`) for other plugins
- **Improved Functions**:
  - Added `fph_get_language_flag()` for language flag emoji mapping
  - Added `fph_polylang_language_switcher()` for Polylang desktop support
  - Added `fph_wpml_language_switcher()` for WPML desktop support
  - Added `fph_polylang_mobile_language_switcher()` for Polylang mobile support
  - Added `fph_wpml_mobile_language_switcher()` for WPML mobile support
- **Documentation Updates**:
  - Updated README with comprehensive translation plugin setup instructions
  - Added section on supported translation plugins
  - Added custom hooks documentation for unsupported plugins
  - Clarified that theme does NOT use Google Translate API
- **Better SEO**: Translation plugin integration provides better SEO than automated translation
- **Full Control**: Site owners have complete control over translations

### 1.2.0 (2026-01-10)
**Enhancement Update - Complete FPWEBP.html Parity**
- **Missing Page Templates**: Added dedicated templates for:
  - Instructor Agreement (`page-instructor-agreement.php`)
  - Contact / Legal Notice (`page-contact.php`)
- **Google Translate Support**: Optional Google Translate widget for on-the-fly translation
  - WordPress-compatible implementation (no inline `document.write`)
  - Proper script enqueueing via `wp_enqueue_script`
  - Can be enabled via theme customizer option `french_practice_hub_enable_google_translate`
  - Works alongside Polylang for complementary translation options
  - Styled to match theme design
- **Enhanced Dropdown Menus**: 
  - Removed conflicting `display: none` that prevented smooth transitions
  - Added smooth opacity, visibility, and transform transitions
  - Added `focus-within` support for keyboard accessibility
  - Improved UX with proper hover states
- **CSS Improvements**:
  - Better dropdown animations with translateY effect
  - Google Translate widget styling
  - Hidden Google Translate top banner for cleaner UI
- **Complete Section Coverage**: All 15 required sections now present with dedicated templates

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
