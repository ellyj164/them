<?php
/**
 * French Practice Hub Theme Functions
 *
 * @package French_Practice_Hub
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function french_practice_hub_setup() {
    // Load text domain for translations
    load_theme_textdomain( 'french-practice-hub', get_template_directory() . '/languages' );
    
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add support for HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 40,
        'width'       => 130,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Add WooCommerce support
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Add Elementor and Page Builder support
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/main.css' );

    // Register navigation menus
    register_nav_menus( array(
        'primary'        => esc_html__( 'Primary Menu', 'french-practice-hub' ),
        'mobile'         => esc_html__( 'Mobile Menu', 'french-practice-hub' ),
        'footer-courses' => esc_html__( 'Footer Courses', 'french-practice-hub' ),
        'footer-legal'   => esc_html__( 'Footer Legal', 'french-practice-hub' ),
    ) );
}
add_action( 'after_setup_theme', 'french_practice_hub_setup' );

/**
 * Add Elementor theme support
 */
function french_practice_hub_elementor_support() {
    // Add Elementor support
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'french_practice_hub_elementor_support' );

/**
 * Check if current page is built with Elementor
 * 
 * @param int|null $post_id Post ID to check. Uses current post if not provided.
 * @return bool True if page is built with Elementor, false otherwise
 */
function fph_is_elementor_page( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    
    if ( ! $post_id ) {
        return false;
    }
    
    if ( ! class_exists( '\Elementor\Plugin' ) ) {
        return false;
    }
    
    $document = \Elementor\Plugin::$instance->documents->get( $post_id );
    if ( ! $document ) {
        return false;
    }
    
    return $document->is_built_with_elementor();
}

/**
 * Enqueue styles and scripts
 */
function french_practice_hub_scripts() {
    // Google Fonts - Nunito for playful, rounded educational style
    wp_enqueue_style(
        'french-practice-hub-fonts',
        'https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Theme stylesheet (style.css)
    wp_enqueue_style(
        'french-practice-hub-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    // Main CSS
    wp_enqueue_style(
        'french-practice-hub-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'french-practice-hub-style' ),
        wp_get_theme()->get( 'Version' )
    );

    // Main JS
    wp_enqueue_script(
        'french-practice-hub-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'french_practice_hub_scripts' );

/**
 * Register Polylang strings for translation
 * MEMORY OPTIMIZED: Only runs in admin, only once per hour, minimal strings
 */
function french_practice_hub_register_polylang_strings() {
    // CRITICAL: Only register in admin to prevent frontend memory usage
    if ( ! is_admin() ) {
        return;
    }
    
    // CRITICAL: Only run once per hour using transient to prevent repeated registration
    if ( get_transient( 'fph_polylang_strings_registered' ) ) {
        return;
    }
    
    if ( ! function_exists( 'pll_register_string' ) ) {
        return;
    }
    
    // Get default strings and register only essential UI strings
    // This minimal set reduces memory usage significantly
    $all_strings = fph_get_default_strings();
    
    // Essential navigation and button strings for translation
    // Only these critical UI elements are registered with Polylang
    // to minimize memory usage while maintaining functionality
    $essential_keys = apply_filters( 'fph_essential_translation_keys', array(
        'nav_home', 'nav_courses', 'nav_exams', 'nav_exercises', 
        'nav_blog', 'nav_about', 'nav_signin', 'nav_register',
        'btn_get_started', 'btn_book_session'
    ) );
    
    foreach ( $essential_keys as $key ) {
        if ( isset( $all_strings[ $key ] ) ) {
            pll_register_string( $key, $all_strings[ $key ], 'french-practice-hub' );
        }
    }
    
    // Additional language names
    pll_register_string( 'lang_en', 'English', 'french-practice-hub' );
    pll_register_string( 'lang_fr', 'Français', 'french-practice-hub' );
    pll_register_string( 'lang_es', 'Español', 'french-practice-hub' );
    pll_register_string( 'lang_ar', 'العربية', 'french-practice-hub' );
    pll_register_string( 'lang_zh', '中文', 'french-practice-hub' );
    
    // Mark as registered for 1 hour to prevent repeated registration
    set_transient( 'fph_polylang_strings_registered', true, HOUR_IN_SECONDS );
}
add_action( 'admin_init', 'french_practice_hub_register_polylang_strings' );

/**
 * Get language flag emoji based on language code
 * 
 * @param string $lang_code Language code (e.g., 'en', 'fr', 'en_US', 'en_GB')
 * @return string Flag emoji
 */
function fph_get_language_flag( $lang_code ) {
    $lang_flags = array(
        'en'    => '🇬🇧',
        'en_US' => '🇬🇧',
        'en_GB' => '🇬🇧',
        'fr'    => '🇫🇷',
        'fr_FR' => '🇫🇷',
        'es'    => '🇪🇸',
        'es_ES' => '🇪🇸',
        'ar'    => '🇸🇦',
        'zh'    => '🇨🇳',
        'zh_CN' => '🇨🇳',
        'zh_Hans' => '🇨🇳',
    );
    
    /**
     * Filter the language flags mapping
     * 
     * Allows developers to customize or add language flags
     * 
     * @param array $lang_flags Array of language codes to flag emojis
     */
    $lang_flags = apply_filters( 'fph_language_flags', $lang_flags );
    
    return isset( $lang_flags[ $lang_code ] ) ? $lang_flags[ $lang_code ] : '🌐';
}

/**
 * WPML compatibility: Add support for WPML language switcher
 * This function is called by the language switcher in header.php
 */
function fph_wpml_language_switcher() {
    if ( ! function_exists( 'icl_get_languages' ) ) {
        return;
    }
    
    $languages = icl_get_languages( 'skip_missing=0' );
    if ( empty( $languages ) ) {
        return;
    }
    
    $current_lang = ICL_LANGUAGE_CODE;
    $current_lang_data = isset( $languages[ $current_lang ] ) ? $languages[ $current_lang ] : reset( $languages );
    $current_flag = fph_get_language_flag( $current_lang );
    $current_code = strtoupper( $current_lang_data['language_code'] );
    ?>
    <a id="current-lang">
        <span id="current-lang-flag"><?php echo esc_html( $current_flag ); ?></span>
        <span id="current-lang-code"><?php echo esc_html( $current_code ); ?></span>
    </a>
    <div class="dropdown" id="lang-dropdown">
        <?php foreach ( $languages as $lang ) : ?>
            <a href="<?php echo esc_url( $lang['url'] ); ?>" class="lang-option" data-lang="<?php echo esc_attr( $lang['language_code'] ); ?>">
                <span class="lang-flag"><?php echo esc_html( fph_get_language_flag( $lang['language_code'] ) ); ?></span>
                <span><?php echo esc_html( $lang['native_name'] ); ?></span>
                <span class="lang-code"><?php echo esc_html( strtoupper( $lang['language_code'] ) ); ?></span>
            </a>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Polylang compatibility: Add support for Polylang language switcher
 * This function is called by the language switcher in header.php
 */
function fph_polylang_language_switcher() {
    if ( ! function_exists( 'pll_the_languages' ) ) {
        return;
    }
    
    $languages = pll_the_languages( array( 'raw' => 1 ) );
    if ( empty( $languages ) ) {
        return;
    }
    
    $current_lang = pll_current_language();
    $current_lang_data = null;
    foreach ( $languages as $lang ) {
        if ( $lang['current_lang'] ) {
            $current_lang_data = $lang;
            break;
        }
    }
    
    if ( ! $current_lang_data ) {
        $current_lang_data = reset( $languages );
    }
    
    $current_flag = fph_get_language_flag( $current_lang_data['slug'] );
    $current_code = strtoupper( $current_lang_data['slug'] );
    ?>
    <a id="current-lang">
        <span id="current-lang-flag"><?php echo esc_html( $current_flag ); ?></span>
        <span id="current-lang-code"><?php echo esc_html( $current_code ); ?></span>
    </a>
    <div class="dropdown" id="lang-dropdown">
        <?php foreach ( $languages as $lang ) : ?>
            <a href="<?php echo esc_url( $lang['url'] ); ?>" class="lang-option" data-lang="<?php echo esc_attr( $lang['slug'] ); ?>">
                <span class="lang-flag"><?php echo esc_html( fph_get_language_flag( $lang['slug'] ) ); ?></span>
                <span><?php echo esc_html( $lang['name'] ); ?></span>
                <span class="lang-code"><?php echo esc_html( strtoupper( $lang['slug'] ) ); ?></span>
            </a>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Polylang compatibility: Mobile language switcher
 */
function fph_polylang_mobile_language_switcher() {
    if ( ! function_exists( 'pll_the_languages' ) ) {
        return;
    }
    
    $languages = pll_the_languages( array( 'raw' => 1 ) );
    if ( empty( $languages ) ) {
        return;
    }
    
    $current_lang = pll_current_language();
    $current_lang_data = null;
    foreach ( $languages as $lang ) {
        if ( $lang['current_lang'] ) {
            $current_lang_data = $lang;
            break;
        }
    }
    
    if ( ! $current_lang_data ) {
        $current_lang_data = reset( $languages );
    }
    
    $current_flag = fph_get_language_flag( $current_lang_data['slug'] );
    $current_code = strtoupper( $current_lang_data['slug'] );
    ?>
    <div class="mobile-dropdown-toggle">
        <span id="mobile-current-lang-flag"><?php echo esc_html( $current_flag ); ?></span>
        <span id="mobile-current-lang-code"><?php echo esc_html( $current_code ); ?></span>
        <span class="mobile-dropdown-arrow"></span>
    </div>
    <div class="mobile-dropdown-content">
        <?php foreach ( $languages as $lang ) : ?>
            <a href="<?php echo esc_url( $lang['url'] ); ?>" class="lang-option" data-lang="<?php echo esc_attr( $lang['slug'] ); ?>">
                <span class="lang-flag"><?php echo esc_html( fph_get_language_flag( $lang['slug'] ) ); ?></span>
                <span><?php echo esc_html( $lang['name'] ); ?></span>
                <span class="lang-code"><?php echo esc_html( strtoupper( $lang['slug'] ) ); ?></span>
            </a>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * WPML compatibility: Mobile language switcher
 */
function fph_wpml_mobile_language_switcher() {
    if ( ! function_exists( 'icl_get_languages' ) ) {
        return;
    }
    
    $languages = icl_get_languages( 'skip_missing=0' );
    if ( empty( $languages ) ) {
        return;
    }
    
    $current_lang = ICL_LANGUAGE_CODE;
    $current_lang_data = isset( $languages[ $current_lang ] ) ? $languages[ $current_lang ] : reset( $languages );
    $current_flag = fph_get_language_flag( $current_lang );
    $current_code = strtoupper( $current_lang_data['language_code'] );
    ?>
    <div class="mobile-dropdown-toggle">
        <span id="mobile-current-lang-flag"><?php echo esc_html( $current_flag ); ?></span>
        <span id="mobile-current-lang-code"><?php echo esc_html( $current_code ); ?></span>
        <span class="mobile-dropdown-arrow"></span>
    </div>
    <div class="mobile-dropdown-content">
        <?php foreach ( $languages as $lang ) : ?>
            <a href="<?php echo esc_url( $lang['url'] ); ?>" class="lang-option" data-lang="<?php echo esc_attr( $lang['language_code'] ); ?>">
                <span class="lang-flag"><?php echo esc_html( fph_get_language_flag( $lang['language_code'] ) ); ?></span>
                <span><?php echo esc_html( $lang['native_name'] ); ?></span>
                <span class="lang-code"><?php echo esc_html( strtoupper( $lang['language_code'] ) ); ?></span>
            </a>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Custom walker for dropdown menus
 */
class French_Practice_Hub_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<div class="dropdown">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</div>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        if ( in_array( 'menu-item-has-children', $classes ) && $depth === 0 ) {
            $output .= '<li class="has-dropdown">';
            $output .= '<a href="' . esc_url( $item->url ) . '">';
            $output .= '<span>' . esc_html( $item->title ) . '</span> ';
            $output .= '<span class="dropdown-arrow"></span>';
            $output .= '</a>';
        } else {
            if ( $depth === 0 ) {
                $output .= '<li>';
            }
            $output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</li>';
        }
    }
}

/**
 * Custom walker for mobile dropdown menus
 * Outputs HTML structure compatible with mobile JavaScript toggle logic
 */
class French_Practice_Hub_Mobile_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<div class="mobile-dropdown-content">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</div>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        // 'menu-item-has-children' is a WordPress core class automatically added to parent menu items
        if ( in_array( 'menu-item-has-children', $classes ) && $depth === 0 ) {
            // Parent item with children: create toggle structure
            $output .= '<li>';
            $output .= '<div class="mobile-dropdown-toggle">';
            $output .= esc_html( $item->title );
            $output .= '<span class="mobile-dropdown-arrow"></span>';
            $output .= '</div>';
        } elseif ( $depth === 0 ) {
            // Top-level item without children: regular link in <li>
            $output .= '<li>';
            $output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
        } else {
            // Child item (depth > 0): just the link, no <li> wrapper
            $output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</li>';
        }
    }
}

/**
 * Centralized default translations array
 * MEMORY OPTIMIZED: Contains only essential translatable strings
 * Long content and descriptions should be in template files, not in memory
 * 
 * @return array Array of translation keys and their default English text
 */
function fph_get_default_strings() {
    // Use static to prevent reloading on every call
    static $translations = null;
    
    if ( $translations !== null ) {
        return $translations;
    }
    
    // MINIMAL essential strings only - reduces memory footprint
    $translations = array(
        // Navigation - essential UI elements
        'nav_home'        => 'Home',
        'nav_courses'     => 'French courses',
        'nav_exams'       => 'Exams Prep',
        'nav_exercises'   => 'Fun Exercises',
        'nav_blog'        => 'Blog',
        'nav_about'       => 'About',
        'nav_about_us'    => 'About',
        'nav_signin'      => 'Sign in',
        'nav_register'    => 'Register',
        
        // Course dropdown
        'courses_kids_a11' => 'Kids, A1.1 (Pre-Beginner)',
        'courses_kids_a1'  => 'Kids, A1 (Beginner)',
        'courses_kids_a21' => 'Kids, A2.1 (Elementary)',
        'courses_kids_a2'  => 'Kids, A2 (Pre-Intermediate)',
        
        // Exam dropdown
        'exams_delf_pa11' => 'DELF Prim A1.1',
        'exams_delf_pa1'  => 'DELF Prim A1',
        'exams_delf_pa2'  => 'DELF Prim A2',
        'exams_delf_b1'   => 'DELF B1',
        'exams_delf_b2'   => 'DELF B2',
        'exams_dalf_c1'   => 'DALF C1',
        'exams_dalf_c2'   => 'DALF C2',
        'exams_tcf'       => 'TCF Canada 🇨🇦',
        'exams_tef'       => 'TEF Canada 🇨🇦',
        
        // Exercise dropdown
        'exercises_kids_a11'  => 'Kids, A1.1',
        'exercises_kids_a11p' => 'Kids, A1.1+',
        'exercises_kids_a1'   => 'Kids, A1',
        'exercises_kids_a1p'  => 'Kids, A1+',
        'exercises_kids_a21'  => 'Kids, A2.1',
        'exercises_kids_a2'   => 'Kids, A2',
        
        // About dropdown
        'nav_mission'   => 'Mission & Vision',
        'nav_pedagogy'  => 'Pedagogical Information',
        'nav_biographie'=> 'Biographie',
        'nav_story'     => 'Story of the Project',
        'nav_partners'  => 'Partenaires',
        
        // Hero section
        'hero_title'     => 'Practice French to Communicate with Confidence & Succeed',
        'hero_subtitle1' => 'Learn French through structured practice, games, fun songs, storytelling, dialogues and real-life communication',
        'hero_subtitle2' => 'Succeed in DELF 🇫🇷 DALF, TCF 🇨🇦 TEF Canada',
        'btn_get_started'=> 'Get Started',
        'btn_book_session'=> 'Book a Session',
        
        // Feature cards (updated to match FPWEBP.html)
        'feature1_title' => 'Fun Exercises FLE',
        'feature1_desc'  => 'A1.1 - B2',
        'feature2_title' => 'Video Dialogues FLE',
        'feature2_desc'  => 'A1.1 - B2',
        'feature3_title' => 'French Exam Success',
        'feature3_desc'  => 'DELF, TCF, TEF Canada (A1.1 - B2)',
        'feature4_title' => 'Fun French Songs FLE',
        'feature4_desc'  => 'Engaging songs to learn French.',
        'feature5_title' => 'French Reading Club',
        'feature5_desc'  => 'A1.1 - B2',
        'feature6_title' => 'Online French Tutoring',
        'feature6_desc'  => 'A1.1 - C2',
        
        // Footer
        'footer_courses_title' => 'Courses',
        'footer_legal_title'   => 'Legal',
        'footer_contact_title' => 'Contact',
        'footer_privacy'       => 'Privacy Policy',
        'footer_terms'         => 'Terms of Use',
        'footer_refund'        => 'Refund & Cancellation Policy',
        'footer_copyright_ip'  => 'Copyright & Intellectual Property Policy',
        'footer_acceptable'    => 'Acceptable Use Policy',
        'footer_copyright'     => '© 2026 Fidele FLE - French Practice Hub – All rights reserved',
    );
    
    return $translations;
}

/**
 * Helper function for translations with proper Polylang fallback
 * MEMORY OPTIMIZED: Uses static cache to reduce function call overhead
 * 
 * This function ensures that readable text is ALWAYS displayed:
 * - If Polylang is active AND the string is translated, use the translation
 * - If Polylang is NOT active OR string not translated, return default English text
 * - Never show translation keys to users
 *
 * IMPORTANT: This function does NOT call the fallback pll__() function defined below.
 * It checks for the REAL Polylang plugin using pll_register_string existence.
 * The fallback pll__() is only for third-party code that calls it directly.
 *
 * @param string $key Translation key
 * @return string The translated or default text
 */
function fph_translate( $key ) {
    // Use static to prevent reloading defaults on every call
    static $defaults = null;
    static $polylang_active = null;
    
    if ( $defaults === null ) {
        $defaults = fph_get_default_strings();
    }
    
    // Cache Polylang detection for performance
    if ( $polylang_active === null ) {
        // Polylang is active only if pll_register_string exists (core Polylang function)
        // This ensures we detect the REAL plugin, not our fallback functions
        $polylang_active = function_exists( 'pll_register_string' );
    }
    
    $default_text = isset( $defaults[ $key ] ) ? $defaults[ $key ] : $key;
    
    // Use Polylang if it's active (calls the REAL pll__() from the plugin)
    if ( $polylang_active && function_exists( 'pll__' ) ) {
        // Pass the key to Polylang for translation
        $translated = pll__( $key );
        
        // If Polylang returns the key itself (not translated), use our default
        // This prevents showing translation keys like "nav_exercises" to users
        return ( $translated !== $key ) ? $translated : $default_text;
    }
    
    // Polylang not active, return default text (e.g., "Home" instead of "nav_home")
    // This branch is taken when Polylang is not installed
    return $default_text;
}

/**
 * Echo version of fph_translate()
 * 
 * @param string $key Translation key
 */
function fph_translate_e( $key ) {
    echo esc_html( fph_translate( $key ) );
}

/**
 * Polylang fallback functions
 * MEMORY OPTIMIZED: Defined inside hook to ensure proper loading order
 * These functions provide default behavior when Polylang is not installed
 */
add_action( 'after_setup_theme', function() {
    if ( ! function_exists( 'pll_e' ) ) {
        /**
         * Fallback for pll_e() - echoes the HTML-escaped input string
         * Used when third-party code calls pll_e() directly and Polylang is not active
         */
        function pll_e( $string ) {
            echo esc_html( $string );
        }
    }
    
    if ( ! function_exists( 'pll__' ) ) {
        /**
         * Fallback for pll__() - returns the input string as-is
         * Used when third-party code calls pll__() directly and Polylang is not active
         * Note: fph_translate() does NOT use this fallback; it has its own default text logic
         */
        function pll__( $string ) {
            return $string;
        }
    }
    
    if ( ! function_exists( 'pll_current_language' ) ) {
        /**
         * Fallback for pll_current_language() - returns 'en' by default
         */
        function pll_current_language( $field = 'slug' ) {
            return 'en';
        }
    }
    
    if ( ! function_exists( 'pll_the_languages' ) ) {
        /**
         * Fallback for pll_the_languages() - returns empty array
         */
        function pll_the_languages( $args = array() ) {
            if ( isset( $args['raw'] ) && $args['raw'] ) {
                return array();
            }
            return '';
        }
    }
}, 5 ); // Early priority to ensure availability

/**
 * Get translation for a string key (legacy support)
 * 
 * @deprecated since 1.3.0 Use fph_translate() instead
 * @see fph_translate()
 * 
 * Example migration:
 *   Old: french_practice_hub_get_translation( 'nav_home' )
 *   New: fph_translate( 'nav_home' )
 * 
 * @param string $key Translation key
 * @return string Translated or default text
 */
function french_practice_hub_get_translation( $key ) {
    return fph_translate( $key );
}

/**
 * Theme activation - Create pages, categories, and menus
 */
function french_practice_hub_activation() {
    // Create pages with content
    $pages = array(
        'home' => array(
            'title'    => 'Home',
            'template' => '',
            'content'  => '',
        ),
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-about.php',
            'content'  => '',
        ),
        'mission' => array(
            'title'    => 'Mission & Vision',
            'template' => 'page-mission.php',
            'content'  => '',
        ),
        'pedagogy' => array(
            'title'    => 'Pedagogical Information',
            'template' => 'page-pedagogy.php',
            'content'  => '',
        ),
        'biography' => array(
            'title'    => 'Biographie',
            'template' => 'page-biography.php',
            'content'  => '',
        ),
        'story' => array(
            'title'    => 'Story of the Project',
            'template' => 'page-story.php',
            'content'  => '',
        ),
        'partners' => array(
            'title'    => 'Partenaires',
            'template' => 'page-partners.php',
            'content'  => '',
        ),
        'privacy' => array(
            'title'    => 'Privacy Policy',
            'template' => 'page-privacy.php',
            'content'  => '',
        ),
        'terms' => array(
            'title'    => 'Terms of Use',
            'template' => 'page-terms.php',
            'content'  => '',
        ),
        'refund' => array(
            'title'    => 'Refund & Cancellation Policy',
            'template' => 'page-refund.php',
            'content'  => '',
        ),
        'copyright' => array(
            'title'    => 'Copyright & Intellectual Property Policy',
            'template' => 'page-copyright.php',
            'content'  => '',
        ),
        'acceptable-use' => array(
            'title'    => 'Acceptable Use Policy',
            'template' => 'page-acceptable-use.php',
            'content'  => '',
        ),
        'instructor-agreement' => array(
            'title'    => 'Instructor Agreement',
            'template' => 'page-instructor-agreement.php',
            'content'  => '',
        ),
        'contact' => array(
            'title'    => 'Contact / Legal Notice',
            'template' => 'page-contact.php',
            'content'  => '',
        ),
        'book-session' => array(
            'title'    => 'Book a Session',
            'template' => 'page-book-session.php',
            'content'  => '',
        ),
    );

    $created_pages = array();
    foreach ( $pages as $slug => $page_data ) {
        // Check if page already exists
        $page_check = get_page_by_path( $slug );
        if ( ! $page_check ) {
            $page_id = wp_insert_post( array(
                'post_title'     => $page_data['title'],
                'post_name'      => $slug,
                'post_content'   => $page_data['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
            ) );

            if ( $page_id && ! is_wp_error( $page_id ) ) {
                $created_pages[ $slug ] = $page_id;
                
                // Set page template if specified
                if ( ! empty( $page_data['template'] ) ) {
                    update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
                }
                
                // Set home page as front page
                if ( $slug === 'home' ) {
                    update_option( 'page_on_front', $page_id );
                    update_option( 'show_on_front', 'page' );
                }
            }
        } else {
            $created_pages[ $slug ] = $page_check->ID;
        }
    }

    // Create categories
    $categories = array(
        'french-courses'      => 'French courses',
        'kids-a11'            => 'Kids, A1.1 (Pre-Beginner)',
        'kids-a1'             => 'Kids, A1 (Beginner)',
        'kids-a21'            => 'Kids, A2.1 (Elementary)',
        'kids-a2'             => 'Kids, A2 (Pre-Intermediate)',
        'exams-prep'          => 'Exams Prep',
        'delf-prim-a11'       => 'DELF Prim A1.1',
        'delf-prim-a1'        => 'DELF Prim A1',
        'delf-prim-a2'        => 'DELF Prim A2',
        'delf-b1'             => 'DELF B1',
        'delf-b2'             => 'DELF B2',
        'dalf-c1'             => 'DALF C1',
        'dalf-c2'             => 'DALF C2',
        'tcf-canada'          => 'TCF Canada 🇨🇦',
        'tef-canada'          => 'TEF Canada 🇨🇦',
        'fun-exercises'       => 'Fun Exercises',
        'exercises-kids-a11'  => 'Kids, A1.1',
        'exercises-kids-a11p' => 'Kids, A1.1+',
        'exercises-kids-a1'   => 'Kids, A1',
        'exercises-kids-a1p'  => 'Kids, A1+',
        'exercises-kids-a21'  => 'Kids, A2.1',
        'exercises-kids-a2'   => 'Kids, A2',
    );

    $created_categories = array();
    foreach ( $categories as $slug => $name ) {
        $term = term_exists( $slug, 'category' );
        if ( ! $term ) {
            $term = wp_insert_term( $name, 'category', array( 'slug' => $slug ) );
        }
        if ( ! is_wp_error( $term ) ) {
            $created_categories[ $slug ] = is_array( $term ) ? $term['term_id'] : $term;
        }
    }

    // Create primary navigation menu
    $menu_name = 'Main Navigation';
    $menu_exists = wp_get_nav_menu_object( $menu_name );
    
    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );
        
        if ( ! is_wp_error( $menu_id ) ) {
            // Add Home
            if ( isset( $created_pages['home'] ) ) {
                wp_update_nav_menu_item( $menu_id, 0, array(
                    'menu-item-title'     => 'Home',
                    'menu-item-object-id' => $created_pages['home'],
                    'menu-item-object'    => 'page',
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => 1,
                ) );
            }

            // Add French courses dropdown
            $courses_cat_id = isset( $created_categories['french-courses'] ) ? $created_categories['french-courses'] : 0;
            $courses_url = $courses_cat_id ? get_category_link( $courses_cat_id ) : '#';
            $courses_parent = wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'  => 'French courses',
                'menu-item-url'    => $courses_url,
                'menu-item-status' => 'publish',
                'menu-item-position' => 2,
            ) );
            
            $course_items = array( 'kids-a11', 'kids-a1', 'kids-a21', 'kids-a2' );
            $position = 1;
            foreach ( $course_items as $slug ) {
                if ( isset( $created_categories[ $slug ] ) ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $categories[ $slug ],
                        'menu-item-object-id' => $created_categories[ $slug ],
                        'menu-item-object'    => 'category',
                        'menu-item-type'      => 'taxonomy',
                        'menu-item-status'    => 'publish',
                        'menu-item-parent-id' => $courses_parent,
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            // Add Exams Prep dropdown
            $exams_cat_id = isset( $created_categories['exams-prep'] ) ? $created_categories['exams-prep'] : 0;
            $exams_url = $exams_cat_id ? get_category_link( $exams_cat_id ) : '#';
            $exams_parent = wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'  => 'Exams Prep',
                'menu-item-url'    => $exams_url,
                'menu-item-status' => 'publish',
                'menu-item-position' => 3,
            ) );
            
            $exam_items = array( 'delf-prim-a11', 'delf-prim-a1', 'delf-prim-a2', 'delf-b1', 'delf-b2', 'dalf-c1', 'dalf-c2', 'tcf-canada', 'tef-canada' );
            $position = 1;
            foreach ( $exam_items as $slug ) {
                if ( isset( $created_categories[ $slug ] ) ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $categories[ $slug ],
                        'menu-item-object-id' => $created_categories[ $slug ],
                        'menu-item-object'    => 'category',
                        'menu-item-type'      => 'taxonomy',
                        'menu-item-status'    => 'publish',
                        'menu-item-parent-id' => $exams_parent,
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            // Add Fun Exercises dropdown
            $exercises_cat_id = isset( $created_categories['fun-exercises'] ) ? $created_categories['fun-exercises'] : 0;
            $exercises_url = $exercises_cat_id ? get_category_link( $exercises_cat_id ) : '#';
            $exercises_parent = wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'  => 'Fun Exercises',
                'menu-item-url'    => $exercises_url,
                'menu-item-status' => 'publish',
                'menu-item-position' => 4,
            ) );
            
            $exercise_items = array( 'exercises-kids-a11', 'exercises-kids-a11p', 'exercises-kids-a1', 'exercises-kids-a1p', 'exercises-kids-a21', 'exercises-kids-a2' );
            $position = 1;
            foreach ( $exercise_items as $slug ) {
                if ( isset( $created_categories[ $slug ] ) ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $categories[ $slug ],
                        'menu-item-object-id' => $created_categories[ $slug ],
                        'menu-item-object'    => 'category',
                        'menu-item-type'      => 'taxonomy',
                        'menu-item-status'    => 'publish',
                        'menu-item-parent-id' => $exercises_parent,
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            // Add Blog
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'  => 'Blog',
                'menu-item-url'    => home_url( '/blog/' ),
                'menu-item-status' => 'publish',
                'menu-item-position' => 5,
            ) );

            // Add About dropdown
            $about_page_id = isset( $created_pages['about'] ) ? $created_pages['about'] : 0;
            $about_url = $about_page_id ? get_permalink( $about_page_id ) : '#';
            $about_parent = wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'  => 'About',
                'menu-item-url'    => $about_url,
                'menu-item-status' => 'publish',
                'menu-item-position' => 6,
            ) );
            
            $about_pages = array( 'about', 'mission', 'pedagogy', 'biography', 'story', 'partners' );
            $position = 1;
            foreach ( $about_pages as $slug ) {
                if ( isset( $created_pages[ $slug ] ) ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $pages[ $slug ]['title'],
                        'menu-item-object-id' => $created_pages[ $slug ],
                        'menu-item-object'    => 'page',
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                        'menu-item-parent-id' => $about_parent,
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            // Assign menu to primary location
            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations['primary'] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
            
            // Duplicate menu for mobile location
            $locations['mobile'] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }

    // Create footer menus
    french_practice_hub_create_footer_menus( $created_pages, $created_categories, $categories );
}
add_action( 'after_switch_theme', 'french_practice_hub_activation' );

/**
 * Create footer menus
 */
function french_practice_hub_create_footer_menus( $created_pages, $created_categories, $categories ) {
    // Footer Courses Menu
    $footer_courses_name = 'Footer Courses';
    $footer_courses_exists = wp_get_nav_menu_object( $footer_courses_name );
    
    if ( ! $footer_courses_exists ) {
        $footer_courses_id = wp_create_nav_menu( $footer_courses_name );
        
        if ( ! is_wp_error( $footer_courses_id ) ) {
            $course_items = array( 'kids-a11', 'kids-a1', 'kids-a21', 'kids-a2' );
            $position = 1;
            foreach ( $course_items as $slug ) {
                if ( isset( $created_categories[ $slug ] ) ) {
                    wp_update_nav_menu_item( $footer_courses_id, 0, array(
                        'menu-item-title'     => $categories[ $slug ],
                        'menu-item-object-id' => $created_categories[ $slug ],
                        'menu-item-object'    => 'category',
                        'menu-item-type'      => 'taxonomy',
                        'menu-item-status'    => 'publish',
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations['footer-courses'] = $footer_courses_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }

    // Footer Legal Menu
    $footer_legal_name = 'Footer Legal';
    $footer_legal_exists = wp_get_nav_menu_object( $footer_legal_name );
    
    if ( ! $footer_legal_exists ) {
        $footer_legal_id = wp_create_nav_menu( $footer_legal_name );
        
        if ( ! is_wp_error( $footer_legal_id ) ) {
            $legal_pages = array( 'privacy', 'terms', 'refund', 'copyright', 'acceptable-use' );
            $position = 1;
            foreach ( $legal_pages as $slug ) {
                if ( isset( $created_pages[ $slug ] ) ) {
                    $pages = array(
                        'privacy'         => 'Privacy Policy',
                        'terms'           => 'Terms of Use',
                        'refund'          => 'Refund & Cancellation Policy',
                        'copyright'       => 'Copyright & Intellectual Property Policy',
                        'acceptable-use'  => 'Acceptable Use Policy',
                    );
                    
                    wp_update_nav_menu_item( $footer_legal_id, 0, array(
                        'menu-item-title'     => $pages[ $slug ],
                        'menu-item-object-id' => $created_pages[ $slug ],
                        'menu-item-object'    => 'page',
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                        'menu-item-position'  => $position++,
                    ) );
                }
            }

            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations['footer-legal'] = $footer_legal_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }
}

/**
 * Helper function to safely get category link by name
 * Returns '#' if category doesn't exist to prevent errors
 * 
 * @param string $category_name Category name
 * @return string Category URL or '#' if not found
 */
function fph_get_safe_category_link( $category_name ) {
    $cat_id = get_cat_ID( $category_name );
    if ( $cat_id && $cat_id > 0 ) {
        return get_category_link( $cat_id );
    }
    return '#';
}

/**
 * Helper function to safely get page permalink by path
 * Returns '#' if page doesn't exist to prevent errors
 * 
 * @param string $page_path Page path/slug
 * @return string Page URL or '#' if not found
 */
function fph_get_safe_page_link( $page_path ) {
    $page = get_page_by_path( $page_path );
    if ( $page && $page instanceof WP_Post ) {
        return get_permalink( $page->ID );
    }
    return '#';
}

/**
 * ============================================================================
 * BOOKING SYSTEM FUNCTIONALITY
 * ============================================================================
 */

/**
 * Register booking custom post type
 */
function fph_register_booking_post_type() {
    $labels = array(
        'name'               => __( 'Session Bookings', 'french-practice-hub' ),
        'singular_name'      => __( 'Booking', 'french-practice-hub' ),
        'menu_name'          => __( 'Bookings', 'french-practice-hub' ),
        'all_items'          => __( 'All Bookings', 'french-practice-hub' ),
        'add_new'            => __( 'Add New Booking', 'french-practice-hub' ),
        'add_new_item'       => __( 'Add New Booking', 'french-practice-hub' ),
        'edit_item'          => __( 'Edit Booking', 'french-practice-hub' ),
        'new_item'           => __( 'New Booking', 'french-practice-hub' ),
        'view_item'          => __( 'View Booking', 'french-practice-hub' ),
        'search_items'       => __( 'Search Bookings', 'french-practice-hub' ),
        'not_found'          => __( 'No bookings found', 'french-practice-hub' ),
        'not_found_in_trash' => __( 'No bookings found in trash', 'french-practice-hub' ),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-calendar-alt',
        'supports'            => array( 'title' ),
        'capability_type'     => 'post',
        'has_archive'         => false,
        'hierarchical'        => false,
        'menu_position'       => 25,
        'show_in_rest'        => false,
    );

    register_post_type( 'fph_booking', $args );
}
add_action( 'init', 'fph_register_booking_post_type' );

/**
 * Add custom meta boxes for booking details
 */
function fph_add_booking_meta_boxes() {
    add_meta_box(
        'fph_booking_details',
        __( 'Booking Details', 'french-practice-hub' ),
        'fph_booking_details_callback',
        'fph_booking',
        'normal',
        'high'
    );
    
    add_meta_box(
        'fph_booking_status',
        __( 'Booking Status', 'french-practice-hub' ),
        'fph_booking_status_callback',
        'fph_booking',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'fph_add_booking_meta_boxes' );

/**
 * Booking details meta box callback
 */
function fph_booking_details_callback( $post ) {
    wp_nonce_field( 'fph_save_booking_meta', 'fph_booking_meta_nonce' );
    
    $booking_day = get_post_meta( $post->ID, '_booking_day', true );
    $booking_time = get_post_meta( $post->ID, '_booking_time', true );
    $booking_type = get_post_meta( $post->ID, '_booking_type', true );
    $booking_name = get_post_meta( $post->ID, '_booking_name', true );
    $booking_email = get_post_meta( $post->ID, '_booking_email', true );
    $booking_phone = get_post_meta( $post->ID, '_booking_phone', true );
    $booking_age = get_post_meta( $post->ID, '_booking_age', true );
    $booking_notes = get_post_meta( $post->ID, '_booking_notes', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="booking_day"><?php esc_html_e( 'Day', 'french-practice-hub' ); ?></label></th>
            <td><input type="text" id="booking_day" name="booking_day" value="<?php echo esc_attr( $booking_day ); ?>" class="regular-text" readonly /></td>
        </tr>
        <tr>
            <th><label for="booking_time"><?php esc_html_e( 'Time Slot', 'french-practice-hub' ); ?></label></th>
            <td><input type="text" id="booking_time" name="booking_time" value="<?php echo esc_attr( $booking_time ); ?>" class="regular-text" readonly /></td>
        </tr>
        <tr>
            <th><label for="booking_type"><?php esc_html_e( 'Session Type', 'french-practice-hub' ); ?></label></th>
            <td><input type="text" id="booking_type" name="booking_type" value="<?php echo esc_attr( $booking_type ); ?>" class="regular-text" readonly /></td>
        </tr>
        <tr>
            <th><label for="booking_name"><?php esc_html_e( 'Customer Name', 'french-practice-hub' ); ?></label></th>
            <td><input type="text" id="booking_name" name="booking_name" value="<?php echo esc_attr( $booking_name ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="booking_email"><?php esc_html_e( 'Email', 'french-practice-hub' ); ?></label></th>
            <td><input type="email" id="booking_email" name="booking_email" value="<?php echo esc_attr( $booking_email ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="booking_phone"><?php esc_html_e( 'Phone', 'french-practice-hub' ); ?></label></th>
            <td><input type="text" id="booking_phone" name="booking_phone" value="<?php echo esc_attr( $booking_phone ); ?>" class="regular-text" /></td>
        </tr>
        <?php if ( $booking_age ) : ?>
        <tr>
            <th><label for="booking_age"><?php esc_html_e( 'Student Age', 'french-practice-hub' ); ?></label></th>
            <td><input type="number" id="booking_age" name="booking_age" value="<?php echo esc_attr( $booking_age ); ?>" class="small-text" /></td>
        </tr>
        <?php endif; ?>
        <tr>
            <th><label for="booking_notes"><?php esc_html_e( 'Notes', 'french-practice-hub' ); ?></label></th>
            <td><textarea id="booking_notes" name="booking_notes" rows="4" class="large-text"><?php echo esc_textarea( $booking_notes ); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Booking status meta box callback
 */
function fph_booking_status_callback( $post ) {
    $booking_status = get_post_meta( $post->ID, '_booking_status', true );
    if ( empty( $booking_status ) ) {
        $booking_status = 'pending';
    }
    ?>
    <p>
        <label for="booking_status"><strong><?php esc_html_e( 'Status', 'french-practice-hub' ); ?></strong></label><br>
        <select id="booking_status" name="booking_status" style="width: 100%;">
            <option value="pending" <?php selected( $booking_status, 'pending' ); ?>><?php esc_html_e( 'Pending', 'french-practice-hub' ); ?></option>
            <option value="confirmed" <?php selected( $booking_status, 'confirmed' ); ?>><?php esc_html_e( 'Confirmed', 'french-practice-hub' ); ?></option>
            <option value="cancelled" <?php selected( $booking_status, 'cancelled' ); ?>><?php esc_html_e( 'Cancelled', 'french-practice-hub' ); ?></option>
        </select>
    </p>
    <p class="description">
        <?php esc_html_e( 'Confirming a booking will mark the slot as unavailable on the calendar.', 'french-practice-hub' ); ?>
    </p>
    <?php
}

/**
 * Save booking meta data
 */
function fph_save_booking_meta( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['fph_booking_meta_nonce'] ) || ! wp_verify_nonce( $_POST['fph_booking_meta_nonce'], 'fph_save_booking_meta' ) ) {
        return;
    }

    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save fields
    $fields = array( 'booking_day', 'booking_time', 'booking_type', 'booking_name', 'booking_email', 'booking_phone', 'booking_age', 'booking_notes', 'booking_status' );
    
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_fph_booking', 'fph_save_booking_meta' );

/**
 * Enqueue booking scripts and styles
 */
function fph_enqueue_booking_scripts() {
    // Only enqueue on booking page
    if ( is_page_template( 'page-book-session.php' ) ) {
        wp_enqueue_style(
            'fph-booking',
            get_template_directory_uri() . '/assets/css/booking.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );

        wp_enqueue_script(
            'fph-booking',
            get_template_directory_uri() . '/assets/js/booking.js',
            array(),
            wp_get_theme()->get( 'Version' ),
            true
        );

        wp_localize_script(
            'fph-booking',
            'fphBooking',
            array(
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'nonce'   => wp_create_nonce( 'fph_booking_nonce' ),
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'fph_enqueue_booking_scripts' );

/**
 * Handle booking form submission via AJAX
 */
function fph_handle_booking_submission() {
    // Verify nonce
    if ( ! isset( $_POST['booking_nonce'] ) || ! wp_verify_nonce( $_POST['booking_nonce'], 'fph_booking_nonce' ) ) {
        wp_send_json_error( array( 'message' => __( 'Security check failed.', 'french-practice-hub' ) ) );
    }

    // Sanitize and validate input
    $booking_day = isset( $_POST['booking_day'] ) ? sanitize_text_field( $_POST['booking_day'] ) : '';
    $booking_time = isset( $_POST['booking_time'] ) ? sanitize_text_field( $_POST['booking_time'] ) : '';
    $booking_type = isset( $_POST['booking_type'] ) ? sanitize_text_field( $_POST['booking_type'] ) : '';
    $booking_name = isset( $_POST['booking_name'] ) ? sanitize_text_field( $_POST['booking_name'] ) : '';
    $booking_email = isset( $_POST['booking_email'] ) ? sanitize_email( $_POST['booking_email'] ) : '';
    $booking_phone = isset( $_POST['booking_phone'] ) ? sanitize_text_field( $_POST['booking_phone'] ) : '';
    $booking_age = isset( $_POST['booking_age'] ) ? absint( $_POST['booking_age'] ) : '';
    $booking_notes = isset( $_POST['booking_notes'] ) ? sanitize_textarea_field( $_POST['booking_notes'] ) : '';

    // Validate required fields
    if ( empty( $booking_day ) || empty( $booking_time ) || empty( $booking_name ) || empty( $booking_email ) || empty( $booking_phone ) ) {
        wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'french-practice-hub' ) ) );
    }

    // Validate email
    if ( ! is_email( $booking_email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'french-practice-hub' ) ) );
    }

    // Create booking post
    $post_title = sprintf(
        '%s - %s - %s',
        $booking_name,
        $booking_day,
        $booking_time
    );

    $post_data = array(
        'post_title'  => $post_title,
        'post_type'   => 'fph_booking',
        'post_status' => 'publish',
    );

    $post_id = wp_insert_post( $post_data );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error( array( 'message' => __( 'Failed to create booking. Please try again.', 'french-practice-hub' ) ) );
    }

    // Save booking meta
    update_post_meta( $post_id, '_booking_day', $booking_day );
    update_post_meta( $post_id, '_booking_time', $booking_time );
    update_post_meta( $post_id, '_booking_type', $booking_type );
    update_post_meta( $post_id, '_booking_name', $booking_name );
    update_post_meta( $post_id, '_booking_email', $booking_email );
    update_post_meta( $post_id, '_booking_phone', $booking_phone );
    update_post_meta( $post_id, '_booking_age', $booking_age );
    update_post_meta( $post_id, '_booking_notes', $booking_notes );
    update_post_meta( $post_id, '_booking_status', 'pending' );

    // Send email notification
    $booking_data = array(
        'day'          => $booking_day,
        'time'         => $booking_time,
        'session_type' => $booking_type,
        'name'         => $booking_name,
        'email'        => $booking_email,
        'phone'        => $booking_phone,
        'age'          => $booking_age,
        'notes'        => $booking_notes,
        'booking_id'   => $post_id,
    );

    fph_send_booking_notification( $booking_data );

    wp_send_json_success( array( 'message' => __( 'Booking submitted successfully! We will contact you soon.', 'french-practice-hub' ) ) );
}
add_action( 'wp_ajax_fph_submit_booking', 'fph_handle_booking_submission' );
add_action( 'wp_ajax_nopriv_fph_submit_booking', 'fph_handle_booking_submission' );

/**
 * Send booking notification email
 */
function fph_send_booking_notification( $booking_data ) {
    $to = 'contact@frenchpracticehub.com';
    $subject = sprintf(
        __( 'New Session Booking - %s at %s', 'french-practice-hub' ),
        $booking_data['day'],
        $booking_data['time']
    );

    $admin_url = admin_url( 'post.php?post=' . $booking_data['booking_id'] . '&action=edit' );

    $message = '
    <html>
    <head>
        <style>
            body { font-family: Nunito, Arial, sans-serif; line-height: 1.6; color: #1F1F1F; }
            h2 { color: #0056D2; }
            table { border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px 0; }
            td { padding: 12px 8px; border-bottom: 1px solid #E8EAED; }
            td:first-child { font-weight: 600; width: 150px; }
            .button { display: inline-block; padding: 12px 24px; background: #0056D2; color: #ffffff; text-decoration: none; border-radius: 8px; margin-top: 20px; }
        </style>
    </head>
    <body>
        <h2>' . esc_html__( 'New Session Booking Request', 'french-practice-hub' ) . '</h2>
        <table>
            <tr><td>' . esc_html__( 'Day:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['day'] ) . '</td></tr>
            <tr><td>' . esc_html__( 'Time Slot:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['time'] ) . '</td></tr>
            <tr><td>' . esc_html__( 'Session Type:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['session_type'] ) . '</td></tr>
            <tr><td>' . esc_html__( 'Name:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['name'] ) . '</td></tr>
            <tr><td>' . esc_html__( 'Email:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['email'] ) . '</td></tr>
            <tr><td>' . esc_html__( 'Phone:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['phone'] ) . '</td></tr>';
    
    if ( ! empty( $booking_data['age'] ) ) {
        $message .= '<tr><td>' . esc_html__( 'Student Age:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['age'] ) . '</td></tr>';
    }
    
    if ( ! empty( $booking_data['notes'] ) ) {
        $message .= '<tr><td>' . esc_html__( 'Notes:', 'french-practice-hub' ) . '</td><td>' . esc_html( $booking_data['notes'] ) . '</td></tr>';
    }
    
    $message .= '
        </table>
        <p><a href="' . esc_url( $admin_url ) . '" class="button">' . esc_html__( 'View in WordPress Admin', 'french-practice-hub' ) . '</a></p>
    </body>
    </html>';

    $headers = array( 'Content-Type: text/html; charset=UTF-8' );

    wp_mail( $to, $subject, $message, $headers );
}

/**
 * Get booked slots
 * Returns an array of slot keys that are confirmed bookings
 */
function fph_get_booked_slots() {
    $booked_slots = array();

    $args = array(
        'post_type'      => 'fph_booking',
        'posts_per_page' => -1,
        'meta_query'     => array(
            array(
                'key'   => '_booking_status',
                'value' => 'confirmed',
            ),
        ),
    );

    $bookings = get_posts( $args );

    foreach ( $bookings as $booking ) {
        $day = strtolower( get_post_meta( $booking->ID, '_booking_day', true ) );
        $time = get_post_meta( $booking->ID, '_booking_time', true );
        $slot_key = $day . '_' . sanitize_title( $time );
        $booked_slots[ $slot_key ] = true;
    }

    return $booked_slots;
}

/**
 * Customize booking post type columns in admin
 */
function fph_booking_columns( $columns ) {
    $new_columns = array(
        'cb'            => $columns['cb'],
        'title'         => __( 'Booking', 'french-practice-hub' ),
        'booking_day'   => __( 'Day', 'french-practice-hub' ),
        'booking_time'  => __( 'Time', 'french-practice-hub' ),
        'booking_type'  => __( 'Type', 'french-practice-hub' ),
        'customer'      => __( 'Customer', 'french-practice-hub' ),
        'booking_status'=> __( 'Status', 'french-practice-hub' ),
        'date'          => $columns['date'],
    );
    return $new_columns;
}
add_filter( 'manage_fph_booking_posts_columns', 'fph_booking_columns' );

/**
 * Populate custom columns
 */
function fph_booking_column_content( $column, $post_id ) {
    switch ( $column ) {
        case 'booking_day':
            echo esc_html( get_post_meta( $post_id, '_booking_day', true ) );
            break;
        case 'booking_time':
            echo esc_html( get_post_meta( $post_id, '_booking_time', true ) );
            break;
        case 'booking_type':
            echo esc_html( ucfirst( get_post_meta( $post_id, '_booking_type', true ) ) );
            break;
        case 'customer':
            $name = get_post_meta( $post_id, '_booking_name', true );
            $email = get_post_meta( $post_id, '_booking_email', true );
            echo esc_html( $name );
            if ( $email ) {
                echo '<br><small><a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a></small>';
            }
            break;
        case 'booking_status':
            $status = get_post_meta( $post_id, '_booking_status', true );
            $status_class = 'pending' === $status ? 'warning' : ( 'confirmed' === $status ? 'success' : 'error' );
            echo '<span class="status-badge status-' . esc_attr( $status_class ) . '">' . esc_html( ucfirst( $status ) ) . '</span>';
            break;
    }
}
add_action( 'manage_fph_booking_posts_custom_column', 'fph_booking_column_content', 10, 2 );

/**
 * Make booking columns sortable
 */
function fph_booking_sortable_columns( $columns ) {
    $columns['booking_day'] = 'booking_day';
    $columns['booking_time'] = 'booking_time';
    $columns['booking_status'] = 'booking_status';
    return $columns;
}
add_filter( 'manage_edit-fph_booking_sortable_columns', 'fph_booking_sortable_columns' );

/**
 * Add custom admin styles for booking status badges
 */
function fph_booking_admin_styles() {
    global $post_type;
    if ( 'fph_booking' === $post_type ) {
        ?>
        <style>
            .status-badge {
                display: inline-block;
                padding: 4px 10px;
                border-radius: 4px;
                font-weight: 600;
                font-size: 12px;
            }
            .status-success {
                background: #d4edda;
                color: #155724;
            }
            .status-warning {
                background: #fff3cd;
                color: #856404;
            }
            .status-error {
                background: #f8d7da;
                color: #721c24;
            }
        </style>
        <?php
    }
}
add_action( 'admin_head', 'fph_booking_admin_styles' );
