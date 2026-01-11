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
 * Enqueue styles and scripts
 */
function french_practice_hub_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'french-practice-hub-fonts',
        'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap',
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
    
    // Google Translate initialization script (always loaded)
    wp_enqueue_script(
        'google-translate-init',
        get_template_directory_uri() . '/assets/js/google-translate-init.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
    
    // Google Translate Element library (always loaded)
    wp_enqueue_script(
        'google-translate-element',
        'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit',
        array( 'google-translate-init' ),
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'french_practice_hub_scripts' );

/**
 * Register Polylang strings for translation
 * Uses the centralized default strings array
 */
function french_practice_hub_register_polylang_strings() {
    if ( function_exists( 'pll_register_string' ) ) {
        $default_strings = fph_get_default_strings();
        
        // Register each string with Polylang
        foreach ( $default_strings as $key => $value ) {
            pll_register_string( $key, $value, 'french-practice-hub' );
        }
        
        // Additional language names (not in main array)
        pll_register_string( 'lang_en', 'English', 'french-practice-hub' );
        pll_register_string( 'lang_fr', 'Français', 'french-practice-hub' );
        pll_register_string( 'lang_es', 'Español', 'french-practice-hub' );
        pll_register_string( 'lang_ar', 'العربية', 'french-practice-hub' );
        pll_register_string( 'lang_zh', '中文', 'french-practice-hub' );
    }
}
add_action( 'init', 'french_practice_hub_register_polylang_strings' );

/**
 * Add theme customizer settings
 */
function french_practice_hub_customize_register( $wp_customize ) {
    // Add Google Translate section
    $wp_customize->add_section( 'french_practice_hub_google_translate', array(
        'title'    => __( 'Google Translate', 'french-practice-hub' ),
        'priority' => 130,
    ) );
    
    // Add Google Translate enable/disable setting
    $wp_customize->add_setting( 'french_practice_hub_enable_google_translate', array(
        'default'           => false,
        'sanitize_callback' => 'rest_sanitize_boolean',
        'transport'         => 'refresh',
    ) );
    
    $wp_customize->add_control( 'french_practice_hub_enable_google_translate', array(
        'label'       => __( 'Enable Google Translate Widget', 'french-practice-hub' ),
        'description' => __( 'Display a Google Translate widget in the header for on-the-fly translation. Works alongside Polylang.', 'french-practice-hub' ),
        'section'     => 'french_practice_hub_google_translate',
        'type'        => 'checkbox',
    ) );
}
add_action( 'customize_register', 'french_practice_hub_customize_register' );

/**
 * Custom walker for dropdown menus
 */
class French_Practice_Hub_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<div class="dropdown">';
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</div>';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
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
}

/**
 * Centralized default translations array
 * Contains all translatable strings with their default English values
 * 
 * @return array Array of translation keys and their default English text
 */
function fph_get_default_strings() {
    static $translations = null;
    
    if ( $translations === null ) {
        $translations = array(
        // Navigation
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
}

return $translations;
}

/**
 * Helper function for translations with proper Polylang fallback
 * 
 * This function ensures that readable text is ALWAYS displayed:
 * - If Polylang is active AND the string is translated, use the translation
 * - If Polylang is NOT active OR string not translated, return default English text
 * - Never show translation keys to users
 *
 * @param string $key Translation key
 * @return string The translated or default text
 */
function fph_translate( $key ) {
    $defaults = fph_get_default_strings();
    $default_text = isset( $defaults[ $key ] ) ? $defaults[ $key ] : $key;
    
    // If Polylang is active, try to get the translation
    if ( function_exists( 'pll__' ) ) {
        $translated = pll__( $key );
        
        // If Polylang returns the key itself (not translated), use our default
        // This prevents showing translation keys like "nav_exercises" to users
        if ( $translated === $key ) {
            return $default_text;
        }
        
        return $translated;
    }
    
    // Polylang not active, return default
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
 * These functions provide default behavior when Polylang is not installed
 */
if ( ! function_exists( 'pll_e' ) ) {
    /**
     * Fallback for pll_e() - echoes the translated string
     */
    function pll_e( $string ) {
        echo esc_html( fph_translate( $string ) );
    }
}

if ( ! function_exists( 'pll__' ) ) {
    /**
     * Fallback for pll__() - returns the translated string
     */
    function pll__( $string ) {
        return fph_translate( $string );
    }
}

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
