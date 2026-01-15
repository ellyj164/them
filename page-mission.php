<?php
/**
 * Template Name: Mission & Vision
 * Template for Mission, Vision & Values page
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
                    <h1>Mission – Vision – Values</h1>
                    <p>Empowering global communication through quality French education</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Our Mission</h2>
                    </div>
                    <p style="text-align: center; font-size: 1.2em; max-width: 900px; margin: 0 auto;">French Practice Hub's mission is to provide high-quality, accessible French language education to learners worldwide. We are committed to helping students of all ages and levels achieve their language goals through structured courses, engaging resources, and personalized instruction. Whether you aim to communicate confidently in everyday situations, advance your career, prepare for immigration, or succeed in official French certification exams, we are here to support your journey every step of the way.</p>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Our Vision</h2>
                    </div>
                    <p style="text-align: center; font-size: 1.2em; max-width: 900px; margin: 0 auto;">We envision a world where language barriers do not limit opportunities. Our vision is to become a leading global platform for French language education, recognized for our innovative teaching methods, comprehensive curriculum, and dedication to learner success. We aspire to inspire a love for the French language and Francophone cultures, fostering cross-cultural understanding and communication in an increasingly interconnected world.</p>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Our Values</h2>
                        <p class="section-subtitle">The principles that guide everything we do</p>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
                        <div class="icon-box">
                            <div class="icon-box-icon">⭐</div>
                            <h3 class="icon-box-title">Excellence</h3>
                            <p class="icon-box-text">We are committed to maintaining the highest standards in teaching, content creation, and learner support.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🌍</div>
                            <h3 class="icon-box-title">Accessibility</h3>
                            <p class="icon-box-text">We believe that quality French education should be available to everyone, regardless of location, background, or learning style.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">💡</div>
                            <h3 class="icon-box-title">Innovation</h3>
                            <p class="icon-box-text">We embrace technology and modern pedagogical approaches to make learning French engaging, effective, and enjoyable.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🎯</div>
                            <h3 class="icon-box-title">Learner-Centered</h3>
                            <p class="icon-box-text">Our students are at the heart of everything we do. We tailor our methods and resources to meet individual needs and goals.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🤝</div>
                            <h3 class="icon-box-title">Integrity</h3>
                            <p class="icon-box-text">We are honest, transparent, and ethical in all our interactions with students, partners, and the community.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🌏</div>
                            <h3 class="icon-box-title">Cultural Respect</h3>
                            <p class="icon-box-text">We celebrate the diversity of Francophone cultures and promote intercultural awareness and respect.</p>
                        </div>
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
