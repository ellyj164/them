<?php
/**
 * Template Name: Partners
 * Template for Partners page
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
                    <h1>Our Partners</h1>
                    <p>Building collaborative relationships for better education</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Partnership Opportunities</h2>
                        <p class="section-subtitle">At French Practice Hub, we believe in the power of collaboration. We are actively seeking partnerships with educational institutions, language schools, cultural organizations, and technology providers who share our vision of making quality French language education accessible to learners worldwide.</p>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px;">
                        <div class="icon-box">
                            <div class="icon-box-icon">🏫</div>
                            <h3 class="icon-box-title">Educational Institutions</h3>
                            <p class="icon-box-text">Schools and universities looking to enhance their French language programs</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">💻</div>
                            <h3 class="icon-box-title">Technology Companies</h3>
                            <p class="icon-box-text">Developers creating innovative educational tools and platforms</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🎭</div>
                            <h3 class="icon-box-title">Cultural Organizations</h3>
                            <p class="icon-box-text">Promoting Francophone culture and heritage worldwide</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">✏️</div>
                            <h3 class="icon-box-title">Content Creators</h3>
                            <p class="icon-box-text">Educators and creators interested in collaboration</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">💼</div>
                            <h3 class="icon-box-title">Corporate Training</h3>
                            <p class="icon-box-text">Programs requiring French language instruction for professionals</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Become a Partner</h2>
                    </div>
                    <p style="text-align: center; font-size: 1.2em; max-width: 800px; margin: 0 auto 30px;">If you are interested in partnering with French Practice Hub, we would love to hear from you. Together, we can create meaningful learning experiences and expand opportunities for French language learners around the world.</p>
                    <div style="text-align: center;">
                        <a href="mailto:contact@frenchpracticehub.com" class="btn btn-primary">Contact Us for Partnership</a>
                    </div>
                    
                    <div style="background: var(--bg-color); padding: 30px; border-radius: var(--radius-md); margin-top: 50px; text-align: center;">
                        <p style="font-style: italic; color: var(--text-light); margin: 0;">Partner content will be displayed here as we establish collaborations.</p>
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
