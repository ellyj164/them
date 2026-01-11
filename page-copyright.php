<?php
/**
 * Template Name: Copyright & Intellectual Property Policy
 * Template for Copyright Policy page
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
    <div class="content-section">
        <div class="container">
            <h2>Copyright &amp; Intellectual Property Policy</h2>
            <p><em>Last Updated: January 10, 2026</em></p>
            
            <h3>1. Ownership of Content</h3>
            <p>All content available on French Practice Hub, including but not limited to courses, videos, audio recordings, images, text, graphics, logos, exercises, educational materials, software, and user interfaces, is the property of French Practice Hub, its instructors, or content licensors and is protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>
            
            <h3>2. Copyright Protection</h3>
            <p>The following materials are protected by copyright:</p>
            <ul>
                <li>All course content, including video lectures, presentations, and written materials</li>
                <li>Educational exercises, quizzes, and assessment materials</li>
                <li>Original songs, dialogues, and storytelling content</li>
                <li>Website design, layout, and user interface elements</li>
                <li>Proprietary teaching methodologies and curricula</li>
                <li>Logos, trademarks, and brand materials</li>
            </ul>
            
            <h3>3. Limited License to Users</h3>
            <p>When you enroll in a course, you receive a limited, non-exclusive, non-transferable, revocable license to:</p>
            <ul>
                <li>Access and view course materials for personal, non-commercial educational purposes</li>
                <li>Download materials explicitly marked as downloadable for offline study</li>
                <li>Use course content solely for your own learning</li>
            </ul>
            
            <p><strong>You may NOT:</strong></p>
            <ul>
                <li>Copy, reproduce, distribute, or share course content with others</li>
                <li>Record, screenshot, or capture course videos or materials</li>
                <li>Sell, rent, lease, or sublicense any course content</li>
                <li>Create derivative works based on our content</li>
                <li>Remove copyright notices or watermarks</li>
                <li>Use content for commercial purposes or in other courses/platforms</li>
                <li>Reverse engineer or decompile any software or materials</li>
            </ul>
            
            <h3>4. Instructor Content Rights</h3>
            <p>Instructors who create content for French Practice Hub retain copyright ownership of their original work. However, by publishing content on our platform, instructors grant French Practice Hub a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, distribute, and display the content for the purpose of operating and promoting the Platform.</p>
            
            <h3>5. User-Generated Content</h3>
            <p>When you submit content such as comments, forum posts, assignments, or reviews to the Platform, you grant French Practice Hub a perpetual, worldwide, non-exclusive, royalty-free license to use, reproduce, modify, adapt, publish, and display such content. You represent that you own or have the necessary rights to submit such content.</p>
            
            <h3>6. Trademarks</h3>
            <p>"French Practice Hub," our logo, and other marks used on the Platform are trademarks or registered trademarks of French Practice Hub. You may not use these marks without our prior written consent. All other trademarks appearing on the Platform are the property of their respective owners.</p>
            
            <h3>7. DMCA Copyright Infringement Notice</h3>
            <p>We respect the intellectual property rights of others and expect our users to do the same. If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement, please provide our Copyright Agent with the following information:</p>
            <ul>
                <li>A physical or electronic signature of the copyright owner or authorized representative</li>
                <li>Identification of the copyrighted work claimed to have been infringed</li>
                <li>Identification of the material that is claimed to be infringing and its location on the Platform</li>
                <li>Your contact information (address, telephone number, email address)</li>
                <li>A statement that you have a good faith belief that use of the material is not authorized</li>
                <li>A statement under penalty of perjury that the information is accurate and you are authorized to act on behalf of the copyright owner</li>
            </ul>
            
            <p><strong>Copyright Agent Contact:</strong><br>
            Email: <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a><br>
            Subject Line: "DMCA Copyright Infringement Notice"</p>
            
            <h3>8. Counter-Notification</h3>
            <p>If you believe your content was removed in error, you may submit a counter-notification to our Copyright Agent containing:</p>
            <ul>
                <li>Your physical or electronic signature</li>
                <li>Identification of the content that was removed</li>
                <li>A statement under penalty of perjury that the content was removed by mistake</li>
                <li>Your contact information and consent to jurisdiction</li>
            </ul>
            
            <h3>9. Enforcement</h3>
            <p>We take intellectual property rights seriously and will:</p>
            <ul>
                <li>Investigate reports of copyright infringement</li>
                <li>Remove infringing content when appropriate</li>
                <li>Terminate accounts of repeat infringers</li>
                <li>Pursue legal action against willful infringers</li>
            </ul>
            
            <h3>10. Contact Us</h3>
            <p>For questions about intellectual property matters, contact: <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a></p>
        </div>
    </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
