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
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php fph_translate_e( 'nav_home' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'French courses' ) ) ); ?>">
                            <span><?php fph_translate_e( 'nav_courses' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1 (Pre-Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1 (Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2.1 (Elementary)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2 (Pre-Intermediate)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Exams Prep' ) ) ); ?>">
                            <span><?php fph_translate_e( 'nav_exams' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A1.1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa11' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa1' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A2' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa2' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF B1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_b1' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF B2' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_b2' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DALF C1' ) ) ); ?>"><?php fph_translate_e( 'exams_dalf_c1' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DALF C2' ) ) ); ?>"><?php fph_translate_e( 'exams_dalf_c2' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'TCF Canada 🇨🇦' ) ) ); ?>"><?php fph_translate_e( 'exams_tcf' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'TEF Canada 🇨🇦' ) ) ); ?>"><?php fph_translate_e( 'exams_tef' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fun Exercises' ) ) ); ?>">
                            <span><?php fph_translate_e( 'nav_exercises' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1+' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11p' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1+' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1p' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2.1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a21' ); ?></a>
                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php fph_translate_e( 'nav_blog' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>">
                            <span><?php fph_translate_e( 'nav_about' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>"><?php fph_translate_e( 'nav_about_us' ); ?></a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'mission' ) ) ); ?>"><?php fph_translate_e( 'nav_mission' ); ?></a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'pedagogy' ) ) ); ?>"><?php fph_translate_e( 'nav_pedagogy' ); ?></a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'biography' ) ) ); ?>"><?php fph_translate_e( 'nav_biographie' ); ?></a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'story' ) ) ); ?>"><?php fph_translate_e( 'nav_story' ); ?></a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'partners' ) ) ); ?>"><?php fph_translate_e( 'nav_partners' ); ?></a>
                        </div>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>
        
        <div class="header-actions">
            <!-- Google Translate Hidden Element -->
            <div id="google_translate_element" style="display:none;"></div>
            
            <!-- Standalone Language Switcher -->
            <div class="language-switcher has-dropdown">
                <a id="current-lang">
                    <span id="current-lang-flag">🇬🇧</span>
                    <span id="current-lang-code">EN</span>
                </a>
                <div class="dropdown" id="lang-dropdown">
                    <a href="#" class="lang-option" data-lang="EN">
                        <span class="lang-flag">🇬🇧</span>
                        <span>English</span>
                        <span class="lang-code">EN</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="FR">
                        <span class="lang-flag">🇫🇷</span>
                        <span>Français</span>
                        <span class="lang-code">FR</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="ES">
                        <span class="lang-flag">🇪🇸</span>
                        <span>Español</span>
                        <span class="lang-code">ES</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="AR">
                        <span class="lang-flag">🇸🇦</span>
                        <span>العربية</span>
                        <span class="lang-code">AR</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="ZH">
                        <span class="lang-flag">🇨🇳</span>
                        <span>中文</span>
                        <span class="lang-code">ZH</span>
                    </a>
                </div>
            </div>
            
            <div class="search-container" id="search-container">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" id="search-input" name="s" placeholder="<?php esc_attr_e( 'Search...', 'french-practice-hub' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
                </form>
                <button id="search-btn" aria-label="<?php esc_attr_e( 'Open search', 'french-practice-hub' ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
            
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>" class="sign-in-btn"><?php esc_html_e( 'Log out', 'french-practice-hub' ); ?></a>
            <?php else : ?>
                <a href="<?php echo esc_url( wp_login_url() ); ?>" class="sign-in-btn"><?php fph_translate_e( 'nav_signin' ); ?></a>
            <?php endif; ?>
            
            <?php if ( get_option( 'users_can_register' ) ) : ?>
                <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="register-btn"><?php fph_translate_e( 'nav_register' ); ?></a>
            <?php endif; ?>
            
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
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php fph_translate_e( 'nav_home' ); ?></a></li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_courses' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1 (Pre-Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1 (Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2.1 (Elementary)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2 (Pre-Intermediate)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_exams' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A1.1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa11' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa1' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF Prim A2' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_pa2' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF B1' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_b1' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DELF B2' ) ) ); ?>"><?php fph_translate_e( 'exams_delf_b2' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DALF C1' ) ) ); ?>"><?php fph_translate_e( 'exams_dalf_c1' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'DALF C2' ) ) ); ?>"><?php fph_translate_e( 'exams_dalf_c2' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'TCF Canada 🇨🇦' ) ) ); ?>"><?php fph_translate_e( 'exams_tcf' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'TEF Canada 🇨🇦' ) ) ); ?>"><?php fph_translate_e( 'exams_tef' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_exercises' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1+' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11p' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1+' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1p' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2.1' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a21' ); ?></a>
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2' ) ) ); ?>"><?php fph_translate_e( 'exercises_kids_a2' ); ?></a>
                </div>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php fph_translate_e( 'nav_blog' ); ?></a></li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_about' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>"><?php fph_translate_e( 'nav_about_us' ); ?></a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'mission' ) ) ); ?>"><?php fph_translate_e( 'nav_mission' ); ?></a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'pedagogy' ) ) ); ?>"><?php fph_translate_e( 'nav_pedagogy' ); ?></a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'biography' ) ) ); ?>"><?php fph_translate_e( 'nav_biographie' ); ?></a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'story' ) ) ); ?>"><?php fph_translate_e( 'nav_story' ); ?></a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'partners' ) ) ); ?>"><?php fph_translate_e( 'nav_partners' ); ?></a>
                </div>
            </li>
            <?php if ( is_user_logged_in() ) : ?>
                <li><a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>" class="mobile-sign-in-btn"><?php esc_html_e( 'Log out', 'french-practice-hub' ); ?></a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( wp_login_url() ); ?>" class="mobile-sign-in-btn"><?php fph_translate_e( 'nav_signin' ); ?></a></li>
            <?php endif; ?>
            <?php if ( get_option( 'users_can_register' ) ) : ?>
                <li><a href="<?php echo esc_url( wp_registration_url() ); ?>" class="mobile-register-btn"><?php fph_translate_e( 'nav_register' ); ?></a></li>
            <?php endif; ?>
            <li>
                <div class="mobile-dropdown-toggle">
                    <span id="mobile-current-lang-flag">🇬🇧</span> <span id="mobile-current-lang-code">EN</span>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="#" class="lang-option" data-lang="EN">
                        <span class="lang-flag">🇬🇧</span>
                        <span>English</span>
                        <span class="lang-code">EN</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="FR">
                        <span class="lang-flag">🇫🇷</span>
                        <span>Français</span>
                        <span class="lang-code">FR</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="ES">
                        <span class="lang-flag">🇪🇸</span>
                        <span>Español</span>
                        <span class="lang-code">ES</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="AR">
                        <span class="lang-flag">🇸🇦</span>
                        <span>العربية</span>
                        <span class="lang-code">AR</span>
                    </a>
                    <a href="#" class="lang-option" data-lang="ZH">
                        <span class="lang-flag">🇨🇳</span>
                        <span>中文</span>
                        <span class="lang-code">ZH</span>
                    </a>
                </div>
            </li>
        </ul>
        <?php
    }
    ?>
</nav>
