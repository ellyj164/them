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
                    <h1>Mission – Vision – Values</h1>
                    
                    <h2>Our Mission</h2>
                    <p>French Practice Hub's mission is to provide high-quality, accessible French language education to learners worldwide. We are committed to helping students of all ages and levels achieve their language goals through structured courses, engaging resources, and personalized instruction. Whether you aim to communicate confidently in everyday situations, advance your career, prepare for immigration, or succeed in official French certification exams, we are here to support your journey every step of the way.</p>
                    
                    <h2>Our Vision</h2>
                    <p>We envision a world where language barriers do not limit opportunities. Our vision is to become a leading global platform for French language education, recognized for our innovative teaching methods, comprehensive curriculum, and dedication to learner success. We aspire to inspire a love for the French language and Francophone cultures, fostering cross-cultural understanding and communication in an increasingly interconnected world.</p>
                    
                    <h2>Our Values</h2>
                    <ul>
                        <li><strong>Excellence:</strong> We are committed to maintaining the highest standards in teaching, content creation, and learner support.</li>
                        <li><strong>Accessibility:</strong> We believe that quality French education should be available to everyone, regardless of location, background, or learning style.</li>
                        <li><strong>Innovation:</strong> We embrace technology and modern pedagogical approaches to make learning French engaging, effective, and enjoyable.</li>
                        <li><strong>Learner-Centered:</strong> Our students are at the heart of everything we do. We tailor our methods and resources to meet individual needs and goals.</li>
                        <li><strong>Integrity:</strong> We are honest, transparent, and ethical in all our interactions with students, partners, and the community.</li>
                        <li><strong>Cultural Respect:</strong> We celebrate the diversity of Francophone cultures and promote intercultural awareness and respect.</li>
                    </ul>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
