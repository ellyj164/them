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
    <section class="hero">
        <div class="hero-video-wrapper">
            <video playsinline autoplay loop muted poster="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4">
                <source src="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4" type="video/mp4">
            </video>
            <div class="hero-video-overlay"></div>
        </div>
        <div class="hero-text-container container">
            <h1><?php pll_e( 'hero_title' ); ?></h1>
            <p>
                <span class="subtitle-line-1"><?php pll_e( 'hero_subtitle1' ); ?></span><br>
                <span class="subtitle-line-2"><?php pll_e( 'hero_subtitle2' ); ?></span>
            </p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary"><?php pll_e( 'btn_get_started' ); ?></a>
                <a href="#" class="btn btn-secondary"><?php pll_e( 'btn_book_session' ); ?></a>
            </div>
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <div class="features-grid">
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Kids-A1.1-Dialogue-1--scaled.png');">
                    <h3><?php pll_e( 'feature1_title' ); ?></h3>
                    <p><?php pll_e( 'feature1_desc' ); ?></p>
                </a>
                
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Paul-1-1.png');">
                    <h3><?php pll_e( 'feature2_title' ); ?></h3>
                    <p><?php pll_e( 'feature2_desc' ); ?></p>
                </a>
                
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Kids-A1.1-Dialogue-1--scaled.png');">
                    <h3><?php pll_e( 'feature3_title' ); ?></h3>
                    <p><?php pll_e( 'feature3_desc' ); ?></p>
                </a>
                
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Coucou-les-amis-1-scaled.png');">
                    <h3><?php pll_e( 'feature4_title' ); ?></h3>
                    <p><?php pll_e( 'feature4_desc' ); ?></p>
                </a>
                
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/1759813761322-1-1.jpg');">
                    <h3><?php pll_e( 'feature5_title' ); ?></h3>
                    <p><?php pll_e( 'feature5_desc' ); ?></p>
                </a>
                
                <a href="#" class="feature-card" style="background-image: url('https://frenchpracticehub.com/wp-content/uploads/2025/10/Coucou-les-amis--scaled.png');">
                    <h3><?php pll_e( 'feature6_title' ); ?></h3>
                    <p><?php pll_e( 'feature6_desc' ); ?></p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
