# French Practice Hub Theme v1.1.0 - Upgrade Notes

## Overview
Version 1.1.0 is a major compatibility and functionality update that transforms the theme into a fully automated, WordPress-integrated solution. This update addresses all requirements from the compatibility improvement initiative.

## What's New

### 🎯 Automated Theme Setup
**The biggest improvement!** When you activate the theme for the first time, it now automatically:

1. **Creates 14 Pages** with complete content:
   - Home (set as front page)
   - About Us
   - Mission & Vision
   - Pedagogical Information (with CEFR tables)
   - Biography
   - Story of the Project
   - Partners
   - Privacy Policy
   - Terms of Use
   - Refund & Cancellation Policy
   - Copyright & Intellectual Property Policy
   - Acceptable Use Policy
   - Instructor Agreement
   - Contact / Legal Notice

2. **Creates 22 Post Categories** in proper hierarchy:
   - French courses (parent + 4 child categories)
   - Exams Prep (parent + 9 child categories)
   - Fun Exercises (parent + 6 child categories)

3. **Builds Navigation Menus**:
   - Main Navigation (with dropdowns for Courses, Exams, Exercises, About)
   - Footer Courses menu
   - Footer Legal menu
   - Automatically assigns menus to theme locations

### 🔍 WordPress Search Integration
- Header search now uses native WordPress search
- Search form properly submits to WordPress search results
- Search query displayed in input field
- Properly escaped for security

### 🔐 User Authentication
- Sign-in button changes to "Log out" when user is logged in
- Links use WordPress core functions: `wp_login_url()` and `wp_logout_url()`
- Register button only appears when registration is enabled
- Mobile menu includes same authentication features

### 🎨 Improved Dropdown Menus
- Added smooth transitions (0.3s ease)
- Dropdowns no longer disappear instantly on mouse-out
- Better user experience with hover delay
- Supports hovering over dropdown content

### 🌍 Translation Ready
- Created `languages/french-practice-hub.pot` file
- All strings use WordPress localization functions
- Text domain properly loaded
- Compatible with Polylang and other translation plugins
- Works without Polylang using fallback functions

### 🔒 Security Improvements
- Fixed XSS vulnerability in search form
- All output properly escaped
- Menu parent URLs link to actual pages/categories (not "#")
- CodeQL security scan passed with 0 alerts

### 🔗 Navigation Enhancements
- All fallback menus use proper WordPress permalinks
- No more "#" placeholder links
- Category archive links work correctly
- Page permalinks properly generated
- Mobile menu mirrors desktop structure

## Breaking Changes

**None!** This is a backward-compatible update. However, if you have manually created menus, the theme activation will create new menus and assign them. You may want to:
- Delete the auto-created menus if you prefer your custom ones
- Or use the auto-created menus as a starting point

## Installation

### Fresh Install
Simply activate the theme and everything will be set up automatically!

### Upgrade from v1.0.0
1. Backup your current site
2. Update the theme files
3. Deactivate and reactivate the theme to trigger the setup
   - **Note**: This will create new pages and menus. If you already have these, you may get duplicates
   - Recommended: Clean install or selective deletion of auto-created content if you have custom pages

## Configuration After Upgrade

### Optional Steps
1. **Logo**: Upload your logo at Appearance > Customize > Site Identity
2. **Menus**: Review auto-created menus at Appearance > Menus
3. **Pages**: Review auto-created pages and delete duplicates if needed
4. **User Registration**: Enable at Settings > General > "Anyone can register" if you want the Register button to appear

### Polylang Setup
If using Polylang:
1. Install and activate Polylang
2. Configure languages (English, French, Spanish, Arabic, Chinese)
3. Go to Languages > String translations
4. Translate the registered strings

## Technical Details

### New Functions
- `french_practice_hub_activation()` - Main activation hook
- `french_practice_hub_create_footer_menus()` - Creates footer menus
- Enhanced text domain loading in `french_practice_hub_setup()`

### Modified Functions
- Updated `wp_enqueue_scripts` to ensure proper CSS/JS loading
- Enhanced custom walker for dropdown menus
- Improved Polylang fallback functions

### New Files
- `languages/french-practice-hub.pot` - Translation template

### Modified Files
- `functions.php` - Added activation hooks and menu creation
- `header.php` - Search integration and authentication buttons
- `footer.php` - Updated footer menu links
- `assets/css/main.css` - Dropdown transitions
- `assets/js/main.js` - Search form submission
- `style.css` - Version and description update
- `README.md` - Comprehensive documentation

## Testing Checklist

After upgrading, please test:
- [ ] Theme activation creates pages
- [ ] Theme activation creates categories
- [ ] Theme activation creates and assigns menus
- [ ] Dropdown menus have smooth hover behavior
- [ ] Search functionality works
- [ ] Sign-in/Log-out buttons work correctly
- [ ] Register button appears/disappears based on settings
- [ ] All navigation links go to proper pages/categories
- [ ] Mobile menu works correctly
- [ ] Footer menus link to correct pages

## Support

If you encounter any issues:
1. Check that you're using WordPress 5.8 or higher
2. Verify PHP 7.4 or higher
3. Deactivate other plugins to rule out conflicts
4. Contact: contact@fidelefle.com

## Credits

Developed by Fidele FLE for French Practice Hub
Version 1.1.0 - January 2026
