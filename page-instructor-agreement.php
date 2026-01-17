<?php
/**
 * Template Name: Instructor Agreement
 * Template for Instructor Agreement Page
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main class="about-page-container">
    <?php
    while ( have_posts() ) :
        the_post();
        
        if ( fph_is_elementor_page() ) {
            // Page is built with Elementor, show Elementor content
            the_content();
        } else {
            // Default theme content
            ?>
    <div class="container">
        <h1><?php esc_html_e( 'Instructor Agreement', 'french-practice-hub' ); ?></h1>
        
        <div class="content-section">
            <h2><?php esc_html_e( '1. Agreement Overview', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'This Instructor Agreement ("Agreement") is entered into between French Practice Hub (the "Platform") and the instructor ("Instructor") who wishes to create and publish educational content on the Platform.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '2. Instructor Responsibilities', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'The Instructor agrees to:', 'french-practice-hub' ); ?></p>
            <ul>
                <li><?php esc_html_e( 'Create high-quality, original educational content related to French language learning', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( "Ensure all content complies with the Platform's quality standards and guidelines", 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Respect intellectual property rights of third parties', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Provide accurate and up-to-date course information', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Respond to student inquiries in a timely manner', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Maintain professional conduct at all times', 'french-practice-hub' ); ?></li>
            </ul>
            
            <h2><?php esc_html_e( '3. Content Ownership and License', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'The Instructor retains ownership of all course content created. By uploading content to the Platform, the Instructor grants French Practice Hub a non-exclusive, worldwide, royalty-free license to use, reproduce, distribute, and display the content for the purpose of operating and promoting the Platform.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '4. Revenue Sharing', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'The Platform and Instructor will share revenue from course sales according to the agreed-upon revenue sharing model. Specific terms and percentages will be provided in a separate agreement.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '5. Quality Standards', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( "All course content must meet the Platform's quality standards including:", 'french-practice-hub' ); ?></p>
            <ul>
                <li><?php esc_html_e( 'Clear audio and video quality', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Accurate and pedagogically sound content', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Appropriate CEFR level alignment', 'french-practice-hub' ); ?></li>
                <li><?php esc_html_e( 'Professional presentation and organization', 'french-practice-hub' ); ?></li>
            </ul>
            
            <h2><?php esc_html_e( '6. Content Review and Approval', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'The Platform reserves the right to review and approve all content before publication. Content that does not meet quality standards or violates platform policies may be rejected or removed.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '7. Term and Termination', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( "This Agreement remains in effect until terminated by either party with 30 days written notice. Upon termination, the Instructor's content may be removed from the Platform, subject to any ongoing student enrollments.", 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '8. Confidentiality', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'Both parties agree to maintain the confidentiality of any proprietary information shared during the course of this Agreement.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '9. Modifications to Agreement', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'French Practice Hub reserves the right to modify this Agreement with 30 days notice to Instructors. Continued use of the Platform after such modifications constitutes acceptance of the new terms.', 'french-practice-hub' ); ?></p>
            
            <h2><?php esc_html_e( '10. Contact Information', 'french-practice-hub' ); ?></h2>
            <p><?php esc_html_e( 'For questions about this Agreement, please contact:', 'french-practice-hub' ); ?></p>
            <p>
                <strong><?php esc_html_e( 'Email:', 'french-practice-hub' ); ?></strong>
                <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a>
            </p>
        </div>
    </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();