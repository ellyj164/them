<?php
/**
 * Template Name: Terms of Use
 * Template for Terms of Use page
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
            <h1>Terms of Use</h1>
            <p><span class="badge badge-primary">Last Updated: January 10, 2026</span></p>
        </div>
    </section>
    
    <div class="content-section">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto;">
                <h3>1. Acceptance of Terms</h3>
                <p>By accessing or using French Practice Hub ("Platform"), you agree to be bound by these Terms of Use and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using this Platform.</p>
                
                <h3>2. Description of Services</h3>
                <p>French Practice Hub provides an online learning management system offering French language courses, educational materials, exam preparation resources, interactive exercises, tutoring services, and related educational content.</p>
                
                <h3>3. User Accounts</h3>
                <p>To access certain features, you must create an account. You agree to:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Provide accurate, current, and complete information</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Maintain the security of your password and account</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Notify us immediately of any unauthorized use</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Be responsible for all activities that occur under your account</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Not share your account credentials with others</div></li>
                </ul>
                
                <h3>4. Course Enrollment and Access</h3>
                <p>When you enroll in a course, you receive a limited, non-exclusive, non-transferable license to access and use the course content for personal, non-commercial educational purposes. Course access duration is specified at the time of enrollment.</p>
                
                <h3>5. Payment Terms</h3>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">💳</span><div>All prices are displayed in the currency specified on the Platform</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">💳</span><div>Payment is due at the time of course enrollment unless otherwise specified</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">💳</span><div>We accept various payment methods as indicated on the Platform</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">💳</span><div>You authorize us to charge your payment method for all fees incurred</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">💳</span><div>Prices are subject to change, but changes will not affect existing enrollments</div></li>
                </ul>
                
                <h3>6. User Conduct</h3>
                <p>You agree NOT to:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Violate any laws or regulations</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Infringe upon intellectual property rights</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Share, distribute, or resell course content</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Harass, abuse, or harm other users or instructors</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Attempt to gain unauthorized access to the Platform</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Upload viruses or malicious code</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Use the Platform for any commercial purpose without our consent</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Create multiple accounts or use false identities</div></li>
                </ul>
                
                <h3>7. Intellectual Property Rights</h3>
                <p>All content on the Platform, including courses, videos, text, graphics, logos, and software, is owned by French Practice Hub or its licensors and is protected by copyright, trademark, and other intellectual property laws. You may not reproduce, distribute, modify, or create derivative works without our written permission.</p>
                
                <h3>8. User-Generated Content</h3>
                <p>You may submit comments, questions, or other content to the Platform. By doing so, you grant us a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, and display such content for the purpose of operating and improving the Platform.</p>
                
                <h3>9. Third-Party Links and Services</h3>
                <p>The Platform may contain links to third-party websites or services. We are not responsible for the content, privacy policies, or practices of third-party sites. Your use of third-party services is at your own risk.</p>
                
                <h3>10. Disclaimers</h3>
                <p>The Platform is provided "as is" and "as available" without warranties of any kind. We do not guarantee that:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>The Platform will be uninterrupted, secure, or error-free</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>The results of using the Platform will meet your requirements</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>Any errors in the Platform will be corrected</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>Completion of courses will result in specific employment outcomes</div></li>
                </ul>
                
                <h3>11. Limitation of Liability</h3>
                <p>To the maximum extent permitted by law, French Practice Hub shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use or inability to use the Platform, even if we have been advised of the possibility of such damages.</p>
                
                <h3>12. Termination</h3>
                <p>We reserve the right to suspend or terminate your account and access to the Platform at any time, with or without notice, for conduct that we believe violates these Terms or is harmful to other users, us, or third parties, or for any other reason.</p>
                
                <h3>13. Governing Law</h3>
                <p>These Terms shall be governed by and construed in accordance with applicable laws, without regard to conflict of law principles. Any disputes shall be resolved in the appropriate courts.</p>
                
                <h3>14. Changes to Terms</h3>
                <p>We reserve the right to modify these Terms at any time. We will notify users of material changes by posting the updated Terms on the Platform. Your continued use of the Platform after changes constitutes acceptance of the modified Terms.</p>
                
                <h3>15. Contact Information</h3>
                <p>For questions about these Terms, contact us at: <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a></p>
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
