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
                    <h1>Founder of French Practice Hub</h1>
                    <p>My name is Fidèle Ilunga Tshombe, and I am the founder of French Practice Hub. My journey with the French language began in my childhood in the Democratic Republic of Congo, where French served as the language of education and opportunity. From an early age, I was fascinated by the power of language to connect people, open doors, and transform lives.</p>
                    <p>After years of teaching French to learners of all ages and backgrounds—from young children taking their first steps in the language to adults preparing for advanced certification exams—I realized there was a need for a comprehensive, accessible, and engaging platform that could serve diverse learners. This vision led to the creation of French Practice Hub.</p>
                    <p>I hold advanced qualifications in French language education and have extensive experience preparing students for DELF, DALF, TCF Canada, and TEF Canada exams. My teaching philosophy centers on making learning enjoyable, practical, and learner-focused. I believe that every student can succeed in mastering French when provided with the right tools, encouragement, and personalized support.</p>
                    <p>Beyond teaching, I am passionate about integrating technology into education. French Practice Hub reflects this commitment by offering interactive exercises, video dialogues, and online tutoring that make learning flexible and fun. My goal is to help you not just pass an exam, but truly communicate with confidence in French.</p>
                    <p>Thank you for choosing French Practice Hub. I look forward to being part of your French learning journey!</p>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
