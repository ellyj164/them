<?php
/**
 * Front Page Template
 * Displays the hero section and feature cards
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <?php
    // Allow Elementor to take over if the page is built with Elementor
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            
            if ( fph_is_elementor_page() ) {
                // Page is built with Elementor, show Elementor content
                the_content();
            } else {
                // Default theme content (hero, features, etc.)
                ?>
                <section class="hero">
                    <div class="hero-video-wrapper">
                        <video playsinline autoplay loop muted poster="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4">
                            <source src="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4" type="video/mp4">
                        </video>
                        <div class="hero-video-overlay"></div>
                    </div>
                    <div class="hero-text-container container">
                        <h1><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'hero_title' ); } else { echo esc_html__( 'Practice French to Communicate with Confidence & Succeed', 'french-practice-hub' ); } ?></h1>
                        <p>
                            <span class="subtitle-line-1"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'hero_subtitle1' ); } else { echo esc_html__( 'Learn French through structured practice, games, fun songs, storytelling, dialogues and real-life communication', 'french-practice-hub' ); } ?></span><br>
                            <span class="subtitle-line-2"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'hero_subtitle2' ); } else { echo esc_html__( 'Succeed in DELF 🇫🇷 DALF, TCF 🇨🇦 TEF Canada', 'french-practice-hub' ); } ?></span>
                        </p>
                        <div class="cta-buttons">
                            <a href="#" class="btn btn-primary"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'btn_get_started' ); } else { echo esc_html__( 'Get Started', 'french-practice-hub' ); } ?></a>
                            <a href="#" class="btn btn-secondary"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'btn_book_session' ); } else { echo esc_html__( 'Book a Session', 'french-practice-hub' ); } ?></a>
                        </div>
                    </div>
                </section>
                
                <section class="features">
                    <div class="container">
                        <div class="features-grid">
                            <!-- Row 1 -->
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'French courses' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'French Courses' ); ?></h3>
                                <p><?php fph_translate_e( 'Kids, A1.1-A1-A2' ); ?></p>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Fun Exercises' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'Fun Exercises' ); ?></h3>
                                <p><?php fph_translate_e( 'Kids, A1.1-A1-A2' ); ?></p>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Exams Prep' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'French Exams Prep FR (1)' ); ?></h3>
                                <ul>
                                    <li><?php fph_translate_e( 'DELF Prim A1.1' ); ?></li>
                                    <li><?php fph_translate_e( 'DELF Prim A1' ); ?></li>
                                    <li><?php fph_translate_e( 'DELF Prim A2' ); ?></li>
                                    <li><?php fph_translate_e( 'DELF B1' ); ?></li>
                                    <li><?php fph_translate_e( 'DELF B2' ); ?></li>
                                    <li><?php fph_translate_e( 'DALF C1' ); ?></li>
                                    <li><?php fph_translate_e( 'DALF C2' ); ?></li>
                                </ul>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Exams Prep' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'French Exams Prep CA (2)' ); ?></h3>
                                <ul>
                                    <li><?php fph_translate_e( 'TCF Canada' ); ?></li>
                                    <li><?php fph_translate_e( 'TEF Canada' ); ?></li>
                                </ul>
                            </a>
                            
                            <!-- Row 2 -->
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Video Dialogues FLE' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'French Dialogues' ); ?></h3>
                                <p><?php fph_translate_e( 'A1.1-A2 (Kids-Teens-Adults)' ); ?></p>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'French Reading Club' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'French Reading for Kids' ); ?></h3>
                                <p><?php fph_translate_e( 'Kids, A1.1-A1-A2' ); ?></p>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Fun French Songs FLE' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'Fun French Songs' ); ?></h3>
                                <p><?php fph_translate_e( 'A1.1-A1-A2' ); ?></p>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'contact' ) ); ?>" class="feature-card">
                                <h3><?php fph_translate_e( 'Online French Tutoring' ); ?></h3>
                                <p><?php fph_translate_e( 'A1.1-C2' ); ?></p>
                            </a>
                        </div>
                    </div>
                </section>
                <?php
            }
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
