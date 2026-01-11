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
            // Default theme content
            ?>
            <div class="about-page-container">
                <div class="container">
                    <h1>Story of the Project</h1>
                    <p>French Practice Hub is a personal educational project born from a deep passion for the French language and a commitment to making quality language education accessible to all. The journey began with a simple observation: many learners struggle to find comprehensive, engaging, and affordable resources that truly help them communicate confidently in French.</p>
                    <p>After years of teaching French in various settings—from classrooms to online platforms, from young children to adult professionals—I recognized common challenges that learners face: lack of practical speaking opportunities, difficulty finding appropriate materials for their level, limited access to personalized feedback, and the intimidating nature of preparing for official certification exams.</p>
                    <p>French Practice Hub was created to address these challenges head-on. The platform integrates proven pedagogical methods with innovative digital tools, creating an ecosystem where learners can progress at their own pace while receiving the support and resources they need. From interactive exercises and video dialogues to personalized tutoring and exam preparation materials, every element of French Practice Hub is designed with the learner's success in mind.</p>
                    <p>What started as a small initiative has grown into a comprehensive platform serving learners worldwide. The project continues to evolve, incorporating feedback from students and staying current with educational research and technology. At its heart, French Practice Hub remains a labor of love—a dedication to empowering individuals through language education and opening doors to new opportunities and experiences in the Francophone world.</p>
                    <p>This is more than just a business; it's a mission to share the beauty and utility of the French language with as many people as possible, helping them achieve their personal, professional, and academic goals.</p>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
