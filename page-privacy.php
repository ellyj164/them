<?php
/**
 * Template Name: Privacy Policy
 * Template for Privacy Policy page
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
            <h1>Privacy Policy</h1>
            <p><span class="badge badge-primary">Last Updated: January 10, 2026</span></p>
        </div>
    </section>
    
    <div class="content-section">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto;">
                <h3>1. Introduction</h3>
                <p>French Practice Hub ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our Learning Management System (LMS) platform, whether accessed via our website, mobile application, or other services.</p>
                
                <h3>2. Information We Collect</h3>
                <p>We collect information that you provide directly to us, including:</p>
                <ul class="feature-list">
                    <li class="feature-list-item">
                        <span class="feature-list-icon">👤</span>
                        <div><strong>Account Information:</strong> Name, email address, password, profile picture, and date of birth</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">📚</span>
                        <div><strong>Educational Information:</strong> Course enrollment, progress data, quiz and exam results, assignments, and certificates earned</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">💳</span>
                        <div><strong>Payment Information:</strong> Billing address and payment method details (processed securely through third-party payment processors)</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">💬</span>
                        <div><strong>Communications:</strong> Messages sent through our platform, support requests, and feedback</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">🖥️</span>
                        <div><strong>Technical Data:</strong> IP address, browser type, device information, and usage statistics</div>
                    </li>
                </ul>
                
                <h3>3. How We Use Your Information</h3>
                <p>We use the collected information for the following purposes:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To provide, maintain, and improve our educational services</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To personalize your learning experience and track your progress</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To process payments and manage course enrollments</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To communicate with you about courses, updates, and support</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To generate certificates and maintain educational records</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To ensure platform security and prevent fraud</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>To comply with legal obligations and enforce our terms</div></li>
                </ul>
                
                <h3>4. Information Sharing and Disclosure</h3>
                <p>We do not sell your personal information. We may share your information only in the following circumstances:</p>
                <ul class="feature-list">
                    <li class="feature-list-item">
                        <span class="feature-list-icon">👨‍🏫</span>
                        <div><strong>With Instructors:</strong> Your course progress and assignment submissions are visible to instructors teaching your enrolled courses</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">🔧</span>
                        <div><strong>Service Providers:</strong> We work with third-party service providers for payment processing, email delivery, hosting, and analytics</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">⚖️</span>
                        <div><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety</div>
                    </li>
                    <li class="feature-list-item">
                        <span class="feature-list-icon">🔄</span>
                        <div><strong>Business Transfers:</strong> In connection with any merger, sale, or acquisition of our business</div>
                    </li>
                </ul>
                
                <h3>5. Data Security</h3>
                <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.</p>
                
                <h3>6. Your Rights and Choices</h3>
                <p>You have the right to:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Access, update, or delete your personal information</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Opt-out of marketing communications</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Request a copy of your data</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Restrict or object to certain data processing</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>Lodge a complaint with a supervisory authority</div></li>
                </ul>
                
                <h3>7. Children's Privacy</h3>
                <p>Our platform is designed for learners of all ages, including children. We comply with applicable children's privacy laws. If you are under 13 years old (or the applicable age in your jurisdiction), you must have parental consent to use our services. Parents can review, modify, or delete their child's information by contacting us.</p>
                
                <h3>8. International Data Transfers</h3>
                <p>Your information may be transferred to and processed in countries other than your country of residence. We ensure appropriate safeguards are in place to protect your data in accordance with this Privacy Policy.</p>
                
                <h3>9. Cookies and Tracking Technologies</h3>
                <p>We use cookies and similar tracking technologies to enhance your experience, analyze usage patterns, and provide personalized content. You can control cookie preferences through your browser settings.</p>
                
                <h3>10. Changes to This Privacy Policy</h3>
                <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the new policy on our platform and updating the "Last Updated" date.</p>
                
                <h3>11. Contact Us</h3>
                <p>If you have questions or concerns about this Privacy Policy, please contact us at:</p>
                <p>Email: <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a></p>
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
