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
            
            // Check if page is built with Elementor
            $is_elementor = false;
            if ( class_exists( '\Elementor\Plugin' ) ) {
                $document = \Elementor\Plugin::$instance->documents->get( get_the_ID() );
                if ( $document ) {
                    $is_elementor = $document->is_built_with_elementor();
                }
            }
            
            if ( $is_elementor ) {
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
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Kids-A1.1-Dialogue-1--scaled.png');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature1_title' ); } else { echo esc_html__( 'Fun Exercises FLE', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature1_desc' ); } else { echo esc_html__( 'A1.1 - B2', 'french-practice-hub' ); } ?></p>
                            </a>
                            
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Paul-1-1.png');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature2_title' ); } else { echo esc_html__( 'Video Dialogues FLE', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature2_desc' ); } else { echo esc_html__( 'A1.1 - B2', 'french-practice-hub' ); } ?></p>
                            </a>
                            
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Kids-A1.1-Dialogue-1--scaled.png');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature3_title' ); } else { echo esc_html__( 'French Exam Success', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature3_desc' ); } else { echo esc_html__( 'DELF, TCF, TEF Canada (A1.1 - B2)', 'french-practice-hub' ); } ?></p>
                            </a>
                            
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Coucou-les-amis-1-scaled.png');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature4_title' ); } else { echo esc_html__( 'Fun French Songs FLE', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature4_desc' ); } else { echo esc_html__( 'Engaging songs to learn French.', 'french-practice-hub' ); } ?></p>
                            </a>
                            
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/1759813761322-1-1.jpg');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature5_title' ); } else { echo esc_html__( 'French Reading Club', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature5_desc' ); } else { echo esc_html__( 'A1.1 - B2', 'french-practice-hub' ); } ?></p>
                            </a>
                            
                            <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Coucou-les-amis--scaled.png');">
                                <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature6_title' ); } else { echo esc_html__( 'Online French Tutoring', 'french-practice-hub' ); } ?></h3>
                                <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'feature6_desc' ); } else { echo esc_html__( 'A1.1 - C2', 'french-practice-hub' ); } ?></p>
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
