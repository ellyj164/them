<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- Google Translate Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,fr,es,ar,zh-CN',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Google Translate Hidden Element -->
<div id="google_translate_element" style="display:none;"></div>

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
                // Use custom walker if class exists
                if ( class_exists( 'French_Practice_Hub_Walker_Nav_Menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => '',
                        'walker'         => new French_Practice_Hub_Walker_Nav_Menu(),
                    ) );
                } else {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => '',
                    ) );
                }
            } else {
                // Fallback menu with Polylang strings
                ?>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php fph_translate_e( 'nav_home' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( fph_get_safe_category_link( 'French courses' ) ); ?>">
                            <span><?php fph_translate_e( 'nav_courses' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1 (Pre-Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1 (Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2.1 (Elementary)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2 (Pre-Intermediate)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( fph_get_safe_category_link( 'Exams Prep' ) ); ?>">
                            <span><?php fph_translate_e( 'nav_exams' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A1.1' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa11' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A1' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa1' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A2' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa2' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF B1' ) ); ?>"><?php fph_translate_e( 'exams_delf_b1' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF B2' ) ); ?>"><?php fph_translate_e( 'exams_delf_b2' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DALF C1' ) ); ?>"><?php fph_translate_e( 'exams_dalf_c1' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'DALF C2' ) ); ?>"><?php fph_translate_e( 'exams_dalf_c2' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'TCF Canada 🇨🇦' ) ); ?>"><?php fph_translate_e( 'exams_tcf' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'TEF Canada 🇨🇦' ) ); ?>"><?php fph_translate_e( 'exams_tef' ); ?></a>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( fph_get_safe_category_link( 'Fun Exercises' ) ); ?>">
                            <span><?php fph_translate_e( 'nav_exercises' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1+' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11p' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1+' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1p' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2.1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a21' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a2' ); ?></a>
                        </div>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php fph_translate_e( 'nav_blog' ); ?></a></li>
                    <li class="has-dropdown">
                        <a href="<?php echo esc_url( fph_get_safe_page_link( 'about' ) ); ?>">
                            <span><?php fph_translate_e( 'nav_about' ); ?></span>
                            <span class="dropdown-arrow"></span>
                        </a>
                        <div class="dropdown">
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'about' ) ); ?>"><?php fph_translate_e( 'nav_about_us' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'mission' ) ); ?>"><?php fph_translate_e( 'nav_mission' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'pedagogy' ) ); ?>"><?php fph_translate_e( 'nav_pedagogy' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'biography' ) ); ?>"><?php fph_translate_e( 'nav_biographie' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'story' ) ); ?>"><?php fph_translate_e( 'nav_story' ); ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'partners' ) ); ?>"><?php fph_translate_e( 'nav_partners' ); ?></a>
                        </div>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>
        
        <div class="header-actions">
            <!-- Language Switcher -->
            <div class="language-switcher has-dropdown">
                <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
                    <?php fph_polylang_language_switcher(); ?>
                <?php elseif ( function_exists( 'icl_get_languages' ) ) : ?>
                    <?php fph_wpml_language_switcher(); ?>
                <?php elseif ( has_action( 'fph_language_switcher' ) ) : ?>
                    <?php do_action( 'fph_language_switcher' ); ?>
                <?php else : ?>
                    <!-- Default fallback: single language -->
                    <a id="current-lang">
                        <span id="current-lang-flag">🇬🇧</span>
                        <span id="current-lang-code">EN</span>
                    </a>
                <?php endif; ?>
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
        // Use custom walker if class exists
        if ( class_exists( 'French_Practice_Hub_Mobile_Walker' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'mobile',
                'container'      => false,
                'menu_class'     => '',
                'walker'         => new French_Practice_Hub_Mobile_Walker(),
            ) );
        } else {
            wp_nav_menu( array(
                'theme_location' => 'mobile',
                'container'      => false,
                'menu_class'     => '',
            ) );
        }
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
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1 (Pre-Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1 (Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2.1 (Elementary)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2 (Pre-Intermediate)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_exams' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A1.1' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa11' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A1' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa1' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF Prim A2' ) ); ?>"><?php fph_translate_e( 'exams_delf_pa2' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF B1' ) ); ?>"><?php fph_translate_e( 'exams_delf_b1' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DELF B2' ) ); ?>"><?php fph_translate_e( 'exams_delf_b2' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DALF C1' ) ); ?>"><?php fph_translate_e( 'exams_dalf_c1' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'DALF C2' ) ); ?>"><?php fph_translate_e( 'exams_dalf_c2' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'TCF Canada 🇨🇦' ) ); ?>"><?php fph_translate_e( 'exams_tcf' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'TEF Canada 🇨🇦' ) ); ?>"><?php fph_translate_e( 'exams_tef' ); ?></a>
                </div>
            </li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_exercises' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1+' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a11p' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1+' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a1p' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2.1' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a21' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2' ) ); ?>"><?php fph_translate_e( 'exercises_kids_a2' ); ?></a>
                </div>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php fph_translate_e( 'nav_blog' ); ?></a></li>
            <li>
                <div class="mobile-dropdown-toggle">
                    <?php fph_translate_e( 'nav_about' ); ?>
                    <span class="mobile-dropdown-arrow"></span>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'about' ) ); ?>"><?php fph_translate_e( 'nav_about_us' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'mission' ) ); ?>"><?php fph_translate_e( 'nav_mission' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'pedagogy' ) ); ?>"><?php fph_translate_e( 'nav_pedagogy' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'biography' ) ); ?>"><?php fph_translate_e( 'nav_biographie' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'story' ) ); ?>"><?php fph_translate_e( 'nav_story' ); ?></a>
                    <a href="<?php echo esc_url( fph_get_safe_page_link( 'partners' ) ); ?>"><?php fph_translate_e( 'nav_partners' ); ?></a>
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
                <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
                    <?php fph_polylang_mobile_language_switcher(); ?>
                <?php elseif ( function_exists( 'icl_get_languages' ) ) : ?>
                    <?php fph_wpml_mobile_language_switcher(); ?>
                <?php elseif ( has_action( 'fph_mobile_language_switcher' ) ) : ?>
                    <?php do_action( 'fph_mobile_language_switcher' ); ?>
                <?php else : ?>
                    <!-- Default fallback: single language -->
                    <div class="mobile-dropdown-toggle">
                        <span id="mobile-current-lang-flag">🇬🇧</span>
                        <span id="mobile-current-lang-code">EN</span>
                    </div>
                <?php endif; ?>
            </li>
        </ul>
        <?php
    }
    ?>
</nav>
