<?php
/**
 * Template Name: Biography
 * Template for Founder Biography page
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
                    <h1>Founder of French Practice Hub</h1>
                    <p>Meet the educator behind the vision</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="profile-card">
                        <div class="profile-header">
                            <!-- NOTE: Replace ui-avatars.com with local image upload functionality -->
                            <div class="profile-avatar">
                                <img src="https://ui-avatars.com/api/?name=Fidele+Ilunga&size=300&background=D9006C&color=fff&bold=true" alt="Fidèle Ilunga Tshombe">
                            </div>
                            <h2 class="profile-name">Fidèle Ilunga Tshombe</h2>
                            <p class="profile-title">Founder & Lead Educator</p>
                        </div>
                        <div class="profile-body">
                            <p>My name is Fidèle Ilunga Tshombe, and I am the founder of French Practice Hub. My journey with the French language began in my childhood in the Democratic Republic of Congo, where French served as the language of education and opportunity. From an early age, I was fascinated by the power of language to connect people, open doors, and transform lives.</p>
                            <p>After years of teaching French to learners of all ages and backgrounds—from young children taking their first steps in the language to adults preparing for advanced certification exams—I realized there was a need for a comprehensive, accessible, and engaging platform that could serve diverse learners. This vision led to the creation of French Practice Hub.</p>
                            <p>I hold advanced qualifications in French language education and have extensive experience preparing students for DELF, DALF, TCF Canada, and TEF Canada exams. My teaching philosophy centers on making learning enjoyable, practical, and learner-focused. I believe that every student can succeed in mastering French when provided with the right tools, encouragement, and personalized support.</p>
                            <p>Beyond teaching, I am passionate about integrating technology into education. French Practice Hub reflects this commitment by offering interactive exercises, video dialogues, and online tutoring that make learning flexible and fun. My goal is to help you not just pass an exam, but truly communicate with confidence in French.</p>
                            <p>Thank you for choosing French Practice Hub. I look forward to being part of your French learning journey!</p>
                        </div>
                    </div>
                    
                    <div class="section-header" style="margin-top: 60px;">
                        <h2 class="section-title">Qualifications & Experience</h2>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 30px;">
                        <div class="icon-box">
                            <div class="icon-box-icon">🎓</div>
                            <h3 class="icon-box-title">Advanced Qualifications</h3>
                            <p class="icon-box-text">Specialized training in French language education and pedagogy</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">📚</div>
                            <h3 class="icon-box-title">Exam Preparation Expert</h3>
                            <p class="icon-box-text">Extensive experience with DELF, DALF, TCF Canada, and TEF Canada</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">👥</div>
                            <h3 class="icon-box-title">Diverse Teaching Experience</h3>
                            <p class="icon-box-text">From young children to adult professionals across multiple settings</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">💻</div>
                            <h3 class="icon-box-title">Technology Integration</h3>
                            <p class="icon-box-text">Pioneering digital tools for modern language education</p>
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
