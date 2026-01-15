<?php
/**
 * Template Name: Story of the Project
 * Template for Story page
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
                    <h1>Story of the Project</h1>
                    <p>A journey of passion, dedication, and commitment to French education</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Our Journey</h2>
                        <p class="section-subtitle">From a simple idea to a comprehensive learning platform</p>
                    </div>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-date">The Beginning</div>
                                <h3>A Vision is Born</h3>
                                <p>French Practice Hub is a personal educational project born from a deep passion for the French language and a commitment to making quality language education accessible to all. The journey began with a simple observation: many learners struggle to find comprehensive, engaging, and affordable resources that truly help them communicate confidently in French.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-date">Discovery Phase</div>
                                <h3>Understanding the Challenges</h3>
                                <p>After years of teaching French in various settings—from classrooms to online platforms, from young children to adult professionals—I recognized common challenges that learners face: lack of practical speaking opportunities, difficulty finding appropriate materials for their level, limited access to personalized feedback, and the intimidating nature of preparing for official certification exams.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-date">Building Solutions</div>
                                <h3>Creating the Platform</h3>
                                <p>French Practice Hub was created to address these challenges head-on. The platform integrates proven pedagogical methods with innovative digital tools, creating an ecosystem where learners can progress at their own pace while receiving the support and resources they need. From interactive exercises and video dialogues to personalized tutoring and exam preparation materials, every element of French Practice Hub is designed with the learner's success in mind.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-date">Growth & Evolution</div>
                                <h3>Serving Learners Worldwide</h3>
                                <p>What started as a small initiative has grown into a comprehensive platform serving learners worldwide. The project continues to evolve, incorporating feedback from students and staying current with educational research and technology. At its heart, French Practice Hub remains a labor of love—a dedication to empowering individuals through language education and opening doors to new opportunities and experiences in the Francophone world.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-date">Today & Beyond</div>
                                <h3>Our Commitment</h3>
                                <p>This is more than just a business; it's a mission to share the beauty and utility of the French language with as many people as possible, helping them achieve their personal, professional, and academic goals.</p>
                            </div>
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
