<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <?php
        // Display custom logo or fallback placeholder
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-placeholder">
                <?php bloginfo( 'name' ); ?>
            </a>
            <?php
        }
        ?>
        
        <nav class="main-nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'walker'         => new French_Practice_Hub_Walker_Nav_Menu(),
                ) );
            } else {
                // Fallback menu with Polylang strings
                ?>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php pll_e( 'nav_home' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="#">
                            <span><?php pll_e( 'nav_courses' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="#"><?php pll_e( 'courses_kids_a11' ); ?></a>
                            <a href="#"><?php pll_e( 'courses_kids_a1' ); ?></a>
                            <a href="#"><?php pll_e( 'courses_kids_a21' ); ?></a>
                            <a href="#"><?php pll_e( 'courses_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">
                            <span><?php pll_e( 'nav_exams' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="#"><?php pll_e( 'exams_delf_pa11' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_delf_pa1' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_delf_pa2' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_delf_b1' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_delf_b2' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_dalf_c1' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_dalf_c2' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_tcf' ); ?></a>
                            <a href="#"><?php pll_e( 'exams_tef' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">
                            <span><?php pll_e( 'nav_exercises' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="#"><?php pll_e( 'exercises_kids_a11' ); ?></a>
                            <a href="#"><?php pll_e( 'exercises_kids_a11p' ); ?></a>
                            <a href="#"><?php pll_e( 'exercises_kids_a1' ); ?></a>
                            <a href="#"><?php pll_e( 'exercises_kids_a1p' ); ?></a>
                            <a href="#"><?php pll_e( 'exercises_kids_a21' ); ?></a>
                            <a href="#"><?php pll_e( 'exercises_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li><a href="#"><?php pll_e( 'nav_blog' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="#">
                            <span><?php pll_e( 'nav_about' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="#"><?php pll_e( 'nav_about_us' ); ?></a>
                            <a href="#"><?php pll_e( 'nav_mission' ); ?></a>
                            <a href="#"><?php pll_e( 'nav_pedagogy' ); ?></a>
                            <a href="#"><?php pll_e( 'nav_biographie' ); ?></a>
                            <a href="#"><?php pll_e( 'nav_story' ); ?></a>
                            <a href="#"><?php pll_e( 'nav_partners' ); ?></a>
                        </div>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>
        
        <div class="header-actions">
            <?php
            // Polylang language switcher
            if ( function_exists( 'pll_the_languages' ) ) :
                $lang_flags = array(
                    'en' => '🇬🇧',
                    'fr' => '🇫🇷',
                    'es' => '🇪🇸',
                    'ar' => '🇸🇦',
                    'zh' => '🇨🇳',
                );
                $current_lang = pll_current_language( 'slug' );
                $current_flag = isset( $lang_flags[ $current_lang ] ) ? $lang_flags[ $current_lang ] : '🇬🇧';
                ?>
                <div class="language-switcher has-dropdown">
                    <a id="current-lang">
                        <span id="current-lang-flag"><?php echo esc_html( $current_flag ); ?></span>
                        <span id="current-lang-code"><?php echo esc_html( strtoupper( $current_lang ) ); ?></span>
                    </a>
                    <div class="dropdown" id="lang-dropdown">
                        <?php
                        $languages = pll_the_languages( array( 'raw' => 1 ) );
                        if ( is_array( $languages ) ) {
                            foreach ( $languages as $lang ) {
                                $flag = isset( $lang_flags[ $lang['slug'] ] ) ? $lang_flags[ $lang['slug'] ] : '';
                                ?>
                                <a href="<?php echo esc_url( $lang['url'] ); ?>" class="lang-option" hreflang="<?php echo esc_attr( $lang['slug'] ); ?>">
                                    <span class="lang-flag"><?php echo esc_html( $flag ); ?></span>
                                    <span><?php echo esc_html( $lang['name'] ); ?></span>
                                    <span class="lang-code"><?php echo esc_html( strtoupper( $lang['slug'] ) ); ?></span>
                                </a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="search-container" id="search-container">
                <input type="search" id="search-input" placeholder="<?php esc_attr_e( 'Search...', 'french-practice-hub' ); ?>">
                <button id="search-btn" aria-label="<?php esc_attr_e( 'Open search', 'french-practice-hub' ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
            
            <button class="sign-in-btn"><?php pll_e( 'nav_signin' ); ?></button>
            <a href="#" class="register-btn"><?php pll_e( 'nav_register' ); ?></a>
            
            <button class="hamburger-menu" id="hamburger-menu" aria-label="<?php esc_attr_e( 'Menu', 'french-practice-hub' ); ?>">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation -->
<div class="mobile-nav-overlay" id="mobile-nav-overlay"></div>
<nav class="mobile-nav" id="mobile-nav">
    <?php
    if ( has_nav_menu( 'mobile' ) ) {
        wp_nav_menu( array(
            'theme_location' => 'mobile',
            'container'      => false,
            'menu_class'     => '',
        ) );
    } else {
        // Fallback mobile menu with Polylang strings
        ?>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php pll_e( 'nav_home' ); ?></a></li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php pll_e( 'nav_courses' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="#"><?php pll_e( 'courses_kids_a11' ); ?></a>
                    <a href="#"><?php pll_e( 'courses_kids_a1' ); ?></a>
                    <a href="#"><?php pll_e( 'courses_kids_a21' ); ?></a>
                    <a href="#"><?php pll_e( 'courses_kids_a2' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php pll_e( 'nav_exams' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="#"><?php pll_e( 'exams_delf_pa11' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_delf_pa1' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_delf_pa2' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_delf_b1' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_delf_b2' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_dalf_c1' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_dalf_c2' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_tcf' ); ?></a>
                    <a href="#"><?php pll_e( 'exams_tef' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php pll_e( 'nav_exercises' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="#"><?php pll_e( 'exercises_kids_a11' ); ?></a>
                    <a href="#"><?php pll_e( 'exercises_kids_a11p' ); ?></a>
                    <a href="#"><?php pll_e( 'exercises_kids_a1' ); ?></a>
                    <a href="#"><?php pll_e( 'exercises_kids_a1p' ); ?></a>
                    <a href="#"><?php pll_e( 'exercises_kids_a21' ); ?></a>
                    <a href="#"><?php pll_e( 'exercises_kids_a2' ); ?></a>
                </div>
            </li>
            <li><a href="#"><?php pll_e( 'nav_blog' ); ?></a></li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php pll_e( 'nav_about' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="#"><?php pll_e( 'nav_about_us' ); ?></a>
                    <a href="#"><?php pll_e( 'nav_mission' ); ?></a>
                    <a href="#"><?php pll_e( 'nav_pedagogy' ); ?></a>
                    <a href="#"><?php pll_e( 'nav_biographie' ); ?></a>
                    <a href="#"><?php pll_e( 'nav_story' ); ?></a>
                    <a href="#"><?php pll_e( 'nav_partners' ); ?></a>
                </div>
            </li>
            <li><button class="mobile-sign-in-btn"><?php pll_e( 'nav_signin' ); ?></button></li>
            <li><a href="#" class="mobile-register-btn"><?php pll_e( 'nav_register' ); ?></a></li>
        </ul>
        <?php
    }
    ?>
</nav>
