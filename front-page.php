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
                        <video 
                            class="hero-video" 
                            autoplay 
                            muted 
                            loop 
                            playsinline
                            preload="auto"
                            disablePictureInPicture
                            poster="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-poster.jpg'); ?>">
                            <source src="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-4.mp4" type="video/mp4">
                            Your browser does not support the video tag.
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
                            <a href="#" class="btn btn-primary btn-lg"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'btn_get_started' ); } else { echo esc_html__( 'Get Started', 'french-practice-hub' ); } ?></a>
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'book-session' ) ); ?>" class="btn btn-outline btn-lg"><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'btn_book_session' ); } else { echo esc_html__( 'Book a Session', 'french-practice-hub' ); } ?></a>
                        </div>
                    </div>
                </section>
                
                <section class="features">
                    <div class="container">
                        <!-- NOTE: Replace Unsplash placeholder images with properly licensed local images -->
                        <!-- These can be customized via WordPress admin or theme customizer in future updates -->
                        <div class="features-grid">
                            <!-- Row 1 -->
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'French courses' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=600&h=400&fit=crop" alt="French Courses">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'French Courses' ); } else { echo esc_html__( 'French Courses', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Kids, A1.1-A1-A2' ); } else { echo esc_html__( 'Kids, A1.1-A1-A2', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Fun Exercises' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&h=400&fit=crop" alt="Fun Exercises">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Fun Exercises' ); } else { echo esc_html__( 'Fun Exercises', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Kids, A1.1-A1-A2' ); } else { echo esc_html__( 'Kids, A1.1-A1-A2', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Exams Prep' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&h=400&fit=crop" alt="French Exams Prep FR">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'French Exams Prep FR (1)' ); } else { echo esc_html__( 'French Exams Prep FR (1)', 'french-practice-hub' ); } ?></h3>
                                    <ul>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DELF Prim A1.1' ); } else { echo esc_html__( 'DELF Prim A1.1', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DELF Prim A1' ); } else { echo esc_html__( 'DELF Prim A1', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DELF Prim A2' ); } else { echo esc_html__( 'DELF Prim A2', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DELF B1' ); } else { echo esc_html__( 'DELF B1', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DELF B2' ); } else { echo esc_html__( 'DELF B2', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DALF C1' ); } else { echo esc_html__( 'DALF C1', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'DALF C2' ); } else { echo esc_html__( 'DALF C2', 'french-practice-hub' ); } ?></li>
                                    </ul>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Exams Prep' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&h=400&fit=crop" alt="French Exams Prep CA">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'French Exams Prep CA (2)' ); } else { echo esc_html__( 'French Exams Prep CA (2)', 'french-practice-hub' ); } ?></h3>
                                    <ul>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'TCF Canada' ); } else { echo esc_html__( 'TCF Canada', 'french-practice-hub' ); } ?></li>
                                        <li><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'TEF Canada' ); } else { echo esc_html__( 'TEF Canada', 'french-practice-hub' ); } ?></li>
                                    </ul>
                                </div>
                            </a>
                            
                            <!-- Row 2 -->
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Video Dialogues FLE' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop" alt="French Dialogues">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'French Dialogues' ); } else { echo esc_html__( 'French Dialogues', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'A1.1-A2 (Kids-Teens-Adults)' ); } else { echo esc_html__( 'A1.1-A2 (Kids-Teens-Adults)', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'French Reading Club' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=600&h=400&fit=crop" alt="French Reading for Kids">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'French Reading for Kids' ); } else { echo esc_html__( 'French Reading for Kids', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Kids, A1.1-A1-A2' ); } else { echo esc_html__( 'Kids, A1.1-A1-A2', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_category_link( 'Fun French Songs FLE' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600&h=400&fit=crop" alt="Fun French Songs">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Fun French Songs' ); } else { echo esc_html__( 'Fun French Songs', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'A1.1-A1-A2' ); } else { echo esc_html__( 'A1.1-A1-A2', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                            
                            <a href="<?php echo esc_url( fph_get_safe_page_link( 'contact' ) ); ?>" class="feature-card">
                                <div class="feature-card-image">
                                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Online French Tutoring">
                                </div>
                                <div class="feature-card-body">
                                    <h3><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'Online French Tutoring' ); } else { echo esc_html__( 'Online French Tutoring', 'french-practice-hub' ); } ?></h3>
                                    <p><?php if ( function_exists( 'fph_translate_e' ) ) { fph_translate_e( 'A1.1-C2' ); } else { echo esc_html__( 'A1.1-C2', 'french-practice-hub' ); } ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                
                <!-- Featured Courses Section - Tutor LMS Integration -->
                <!-- Admin Note: Customize the shortcode below to display different courses -->
                <!-- Parameters: id="course_ids" exclude_ids="ids" category="category_name" orderby="ID|title|date" order="desc|asc" count="number" -->
                <section class="featured-courses-section">
                    <div class="container">
                        <div class="section-header">
                            <h2 class="section-title"><?php esc_html_e( 'Featured Courses', 'french-practice-hub' ); ?></h2>
                            <p class="section-subtitle"><?php esc_html_e( 'Start your learning journey with our most popular courses', 'french-practice-hub' ); ?></p>
                        </div>
                        
                        <div class="featured-courses-grid">
                            <?php
                            // Tutor LMS shortcode - displays 4 courses in a single row
                            // Change parameters to customize: category, orderby, order, count, etc.
                            echo do_shortcode('[tutor_course id="" exclude_ids="" category="" orderby="ID" order="desc" count="4"]');
                            ?>
                        </div>
                    </div>
                </section>
                
                <!-- Auto-play Video Section -->
                <section class="video-showcase-section">
                    <div class="container">
                        <div class="video-showcase-wrapper">
                            <div class="video-showcase-content">
                                <h2><?php esc_html_e( 'Experience Interactive Learning', 'french-practice-hub' ); ?></h2>
                                <p><?php esc_html_e( 'Discover how our platform combines engaging video content with interactive exercises to help you master French through real-world practice and immersive experiences.', 'french-practice-hub' ); ?></p>
                                <div class="video-showcase-features">
                                    <div class="showcase-feature">
                                        <span class="feature-icon">🎯</span>
                                        <span><?php esc_html_e( 'Structured Learning Path', 'french-practice-hub' ); ?></span>
                                    </div>
                                    <div class="showcase-feature">
                                        <span class="feature-icon">🎮</span>
                                        <span><?php esc_html_e( 'Interactive Games & Exercises', 'french-practice-hub' ); ?></span>
                                    </div>
                                    <div class="showcase-feature">
                                        <span class="feature-icon">🎓</span>
                                        <span><?php esc_html_e( 'Expert-Led Instruction', 'french-practice-hub' ); ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="video-showcase-player">
                                <!-- Admin Note: Replace the src URL with your actual video URL -->
                                <video 
                                    class="showcase-video" 
                                    id="showcase-video"
                                    muted 
                                    loop
                                    playsinline
                                    poster="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4">
                                    <source src="https://frenchpracticehub.com/wp-content/uploads/2026/01/Characters-in-the-French-Practice-Hub-1.mp4" type="video/mp4">
                                    <?php esc_html_e( 'Your browser does not support the video tag.', 'french-practice-hub' ); ?>
                                </video>
                                
                                <div class="video-controls">
                                    <button id="video-play-pause" class="video-control-btn" aria-label="<?php esc_attr_e( 'Play/Pause video', 'french-practice-hub' ); ?>">
                                        <svg class="play-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                        <svg class="pause-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                            <rect x="6" y="4" width="4" height="16"></rect>
                                            <rect x="14" y="4" width="4" height="16"></rect>
                                        </svg>
                                    </button>
                                </div>
                            </div>
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
