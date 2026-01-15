<?php
/**
 * Template Name: About Us
 * Template for About French Practice Hub page
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <?php
    while ( have_posts() ) :
        the_post();
        
        if ( fph_is_elementor_page() ) {
            // Page is built with Elementor, show Elementor content
            the_content();
        } else {
            // Default theme content
            ?>
            <section class="page-hero">
                <div class="page-hero-content container">
                    <h1>About French Practice Hub</h1>
                    <p>Empowering learners worldwide to master French with confidence</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Welcome to French Practice Hub</h2>
                    </div>
                    <p>French Practice Hub is an online and in-person educational platform dedicated to helping learners of all ages and levels master the French language. Whether you are a complete beginner or preparing for advanced certification exams like DELF, DALF, TCF Canada, or TEF Canada, we provide structured courses, interactive exercises, and personalized tutoring to support your journey.</p>
                    <p>Our approach combines traditional pedagogy with modern technology, offering engaging video dialogues, fun songs, storytelling, and real-world communication practice. We believe that learning French should be enjoyable, practical, and tailored to your goals.</p>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Why Choose French Practice Hub?</h2>
                        <p class="section-subtitle">Learning French is not only about memorizing vocabulary and grammar rules—it's about building confidence to communicate effectively in real-life situations.</p>
                    </div>
                    
                    <!-- NOTE: Statistics should be made configurable via WordPress admin in future updates -->
                    <div class="stats-section">
                        <div class="stat-item">
                            <div class="stat-number">10,000+</div>
                            <div class="stat-label">Students</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Courses</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Countries</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Success Rate</div>
                        </div>
                    </div>
                    
                    <ul class="feature-list">
                        <li class="feature-list-item">
                            <span class="feature-list-icon">💬</span>
                            <div>
                                <strong>Practical Communication:</strong> Our lessons emphasize speaking, listening, reading, and writing skills that you can use immediately in everyday contexts.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">🎓</span>
                            <div>
                                <strong>Exam Preparation:</strong> We offer targeted preparation for official French exams including DELF Prim, DELF, DALF, TCF Canada, and TEF Canada, helping you achieve your certification goals.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">🎮</span>
                            <div>
                                <strong>Engaging Content:</strong> From interactive games and songs to video dialogues and storytelling, our resources make learning French fun and memorable.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">👤</span>
                            <div>
                                <strong>Personalized Learning:</strong> We adapt our teaching methods to suit your learning style, pace, and objectives, whether you're studying independently or with a tutor.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">📚</span>
                            <div>
                                <strong>Comprehensive Coverage:</strong> Our courses span all CEFR levels from A1.1 (absolute beginner) to C2 (mastery), ensuring continuous progression.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Who Is French Practice Hub For?</h2>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px;">
                        <div class="icon-box">
                            <div class="icon-box-icon">👶</div>
                            <h3 class="icon-box-title">Children & Teens</h3>
                            <p class="icon-box-text">Young learners can explore French through age-appropriate activities, songs, and games designed to spark curiosity and build a strong foundation.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">👨‍💼</div>
                            <h3 class="icon-box-title">Adults</h3>
                            <p class="icon-box-text">Whether you're learning French for work, travel, immigration (Canada), or personal enrichment, our courses cater to adult learners at all levels.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">📝</div>
                            <h3 class="icon-box-title">Exam Candidates</h3>
                            <p class="icon-box-text">Students preparing for DELF, DALF, TCF Canada, or TEF Canada exams will find comprehensive practice materials, mock tests, and expert guidance.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">👩‍🏫</div>
                            <h3 class="icon-box-title">Educators & Parents</h3>
                            <p class="icon-box-text">Teachers and parents looking for high-quality supplementary resources to support French language education.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">What We Offer</h2>
                    </div>
                    <ul class="feature-list">
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Comprehensive French courses covering CEFR levels A1.1 to C2</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Specialized exam preparation for DELF, DALF, TCF Canada, and TEF Canada</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Interactive exercises, games, and activities for effective practice</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Video dialogues featuring real-life situations and conversations</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Fun French songs and storytelling for engaging learning</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>One-on-one and group tutoring sessions with experienced instructors</div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">✓</span>
                            <div>Progress tracking and personalized learning plans</div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Join Our Community</h2>
                    </div>
                    <p style="text-align: center; font-size: 1.2em; max-width: 800px; margin: 0 auto;">Join thousands of learners who have chosen French Practice Hub to achieve their French language goals. Whether you're learning for personal enrichment, professional advancement, or academic success, we're here to guide you every step of the way.</p>
                    <div style="text-align: center; margin-top: 30px;">
                        <a href="<?php echo esc_url( fph_get_safe_page_link( 'contact' ) ); ?>" class="btn btn-primary">Get Started Today</a>
                    </div>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
