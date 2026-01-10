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
}
add_action( 'wp_enqueue_scripts', 'french_practice_hub_scripts' );

/**
 * Register Polylang strings for translation
 */
function french_practice_hub_register_polylang_strings() {
    if ( function_exists( 'pll_register_string' ) ) {
        // Navigation
        pll_register_string( 'nav_home', 'Home', 'french-practice-hub' );
        pll_register_string( 'nav_courses', 'French courses', 'french-practice-hub' );
        pll_register_string( 'nav_exams', 'Exams Prep', 'french-practice-hub' );
        pll_register_string( 'nav_exercises', 'Fun Exercises', 'french-practice-hub' );
        pll_register_string( 'nav_blog', 'Blog', 'french-practice-hub' );
        pll_register_string( 'nav_about', 'About', 'french-practice-hub' );
        pll_register_string( 'nav_about_us', 'About Us', 'french-practice-hub' );
        pll_register_string( 'nav_signin', 'Sign in', 'french-practice-hub' );
        pll_register_string( 'nav_register', 'Register', 'french-practice-hub' );
        
        // Course dropdown items
        pll_register_string( 'courses_kids_a11', 'Kids, A1.1 (Pre-Beginner)', 'french-practice-hub' );
        pll_register_string( 'courses_kids_a1', 'Kids, A1 (Beginner)', 'french-practice-hub' );
        pll_register_string( 'courses_kids_a21', 'Kids, A2.1 (Elementary)', 'french-practice-hub' );
        pll_register_string( 'courses_kids_a2', 'Kids, A2 (Pre-Intermediate)', 'french-practice-hub' );
        
        // Exam dropdown items
        pll_register_string( 'exams_delf_pa11', 'DELF Prim A1.1', 'french-practice-hub' );
        pll_register_string( 'exams_delf_pa1', 'DELF Prim A1', 'french-practice-hub' );
        pll_register_string( 'exams_delf_pa2', 'DELF Prim A2', 'french-practice-hub' );
        pll_register_string( 'exams_delf_b1', 'DELF B1', 'french-practice-hub' );
        pll_register_string( 'exams_delf_b2', 'DELF B2', 'french-practice-hub' );
        pll_register_string( 'exams_dalf_c1', 'DALF C1', 'french-practice-hub' );
        pll_register_string( 'exams_dalf_c2', 'DALF C2', 'french-practice-hub' );
        pll_register_string( 'exams_tcf', 'TCF Canada 🇨🇦', 'french-practice-hub' );
        pll_register_string( 'exams_tef', 'TEF Canada 🇨🇦', 'french-practice-hub' );
        
        // Exercise dropdown items
        pll_register_string( 'exercises_kids_a11', 'Kids, A1.1', 'french-practice-hub' );
        pll_register_string( 'exercises_kids_a11p', 'Kids, A1.1+', 'french-practice-hub' );
        pll_register_string( 'exercises_kids_a1', 'Kids, A1', 'french-practice-hub' );
        pll_register_string( 'exercises_kids_a1p', 'Kids, A1+', 'french-practice-hub' );
        pll_register_string( 'exercises_kids_a21', 'Kids, A2.1', 'french-practice-hub' );
        pll_register_string( 'exercises_kids_a2', 'Kids, A2', 'french-practice-hub' );
        
        // About dropdown items
        pll_register_string( 'nav_mission', 'Mission & Vision', 'french-practice-hub' );
        pll_register_string( 'nav_pedagogy', 'Pedagogical Information', 'french-practice-hub' );
        pll_register_string( 'nav_biographie', 'Biographie', 'french-practice-hub' );
        pll_register_string( 'nav_story', 'Story of the Project', 'french-practice-hub' );
        pll_register_string( 'nav_partners', 'Partenaires', 'french-practice-hub' );
        
        // Hero section
        pll_register_string( 'hero_title', 'Practice French to Communicate with Confidence & Succeed', 'french-practice-hub' );
        pll_register_string( 'hero_subtitle1', 'Learn French through structured practice, games, fun songs, storytelling, dialogues and real-life communication', 'french-practice-hub' );
        pll_register_string( 'hero_subtitle2', 'Succeed in DELF 🇫🇷 DALF, TCF 🇨🇦 TEF Canada', 'french-practice-hub' );
        pll_register_string( 'btn_get_started', 'Get Started', 'french-practice-hub' );
        pll_register_string( 'btn_book_session', 'Book a Session', 'french-practice-hub' );
        
        // Feature cards
        pll_register_string( 'feature1_title', 'Comprehensive Courses', 'french-practice-hub' );
        pll_register_string( 'feature1_desc', 'Structured French courses from A1.1 to C2', 'french-practice-hub' );
        pll_register_string( 'feature2_title', 'Video Dialogues', 'french-practice-hub' );
        pll_register_string( 'feature2_desc', 'Real-life conversations and dialogues', 'french-practice-hub' );
        pll_register_string( 'feature3_title', 'Fun Games', 'french-practice-hub' );
        pll_register_string( 'feature3_desc', 'Interactive games for effective practice', 'french-practice-hub' );
        pll_register_string( 'feature4_title', 'Educational Songs', 'french-practice-hub' );
        pll_register_string( 'feature4_desc', 'Engaging songs to learn French', 'french-practice-hub' );
        pll_register_string( 'feature5_title', 'DELF/DALF Prep', 'french-practice-hub' );
        pll_register_string( 'feature5_desc', 'Exam preparation for DELF, DALF, TCF, TEF', 'french-practice-hub' );
        pll_register_string( 'feature6_title', 'Storytelling', 'french-practice-hub' );
        pll_register_string( 'feature6_desc', 'French stories for all levels', 'french-practice-hub' );
        
        // Footer
        pll_register_string( 'footer_courses_title', 'Courses', 'french-practice-hub' );
        pll_register_string( 'footer_legal_title', 'Legal', 'french-practice-hub' );
        pll_register_string( 'footer_contact_title', 'Contact', 'french-practice-hub' );
        pll_register_string( 'footer_privacy', 'Privacy Policy', 'french-practice-hub' );
        pll_register_string( 'footer_terms', 'Terms of Use', 'french-practice-hub' );
        pll_register_string( 'footer_refund', 'Refund & Cancellation Policy', 'french-practice-hub' );
        pll_register_string( 'footer_copyright_ip', 'Copyright & Intellectual Property Policy', 'french-practice-hub' );
        pll_register_string( 'footer_acceptable', 'Acceptable Use Policy', 'french-practice-hub' );
        pll_register_string( 'footer_copyright', '© 2026 Fidele FLE - French Practice Hub – All rights reserved', 'french-practice-hub' );
        
        // Language names
        pll_register_string( 'lang_en', 'English', 'french-practice-hub' );
        pll_register_string( 'lang_fr', 'Français', 'french-practice-hub' );
        pll_register_string( 'lang_es', 'Español', 'french-practice-hub' );
        pll_register_string( 'lang_ar', 'العربية', 'french-practice-hub' );
        pll_register_string( 'lang_zh', '中文', 'french-practice-hub' );
    }
}
add_action( 'init', 'french_practice_hub_register_polylang_strings' );

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
 * Polylang fallback functions
 * These functions provide default behavior when Polylang is not installed
 */
if ( ! function_exists( 'pll_e' ) ) {
    /**
     * Fallback for pll_e() - echoes the translated string
     */
    function pll_e( $string ) {
        echo esc_html( french_practice_hub_get_translation( $string ) );
    }
}

if ( ! function_exists( 'pll__' ) ) {
    /**
     * Fallback for pll__() - returns the translated string
     */
    function pll__( $string ) {
        return french_practice_hub_get_translation( $string );
    }
}

/**
 * Get translation for a string key
 * Used as fallback when Polylang is not installed
 */
function french_practice_hub_get_translation( $key ) {
    $translations = array(
        // Navigation
        'nav_home'        => 'Home',
        'nav_courses'     => 'French courses',
        'nav_exams'       => 'Exams Prep',
        'nav_exercises'   => 'Fun Exercises',
        'nav_blog'        => 'Blog',
        'nav_about'       => 'About',
        'nav_about_us'    => 'About Us',
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
        
        // Feature cards
        'feature1_title' => 'Comprehensive Courses',
        'feature1_desc'  => 'Structured French courses from A1.1 to C2',
        'feature2_title' => 'Video Dialogues',
        'feature2_desc'  => 'Real-life conversations and dialogues',
        'feature3_title' => 'Fun Games',
        'feature3_desc'  => 'Interactive games for effective practice',
        'feature4_title' => 'Educational Songs',
        'feature4_desc'  => 'Engaging songs to learn French',
        'feature5_title' => 'DELF/DALF Prep',
        'feature5_desc'  => 'Exam preparation for DELF, DALF, TCF, TEF',
        'feature6_title' => 'Storytelling',
        'feature6_desc'  => 'French stories for all levels',
        
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
    
    return isset( $translations[ $key ] ) ? $translations[ $key ] : $key;
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
            'template' => '',
            'content'  => '<h1>Instructor Agreement</h1><p>Details about the instructor agreement will be added here.</p>',
        ),
        'contact' => array(
            'title'    => 'Contact / Legal Notice',
            'template' => '',
            'content'  => '<h1>Contact / Legal Notice</h1><p>Email: <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a></p>',
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
