<?php
/**
 * Template Name: Refund & Cancellation Policy
 * Template for Refund Policy page
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
            <h1>Refund &amp; Cancellation Policy</h1>
            <p><span class="badge badge-primary">Last Updated: January 10, 2026</span></p>
        </div>
    </section>
    
    <div class="content-section">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto;">
                <h3>1. General Refund Policy</h3>
                <p>At French Practice Hub, we strive to provide high-quality educational content and services. We understand that sometimes circumstances change, and we have established the following refund policy to be fair to both our learners and instructors.</p>
                
                <h3>2. Course Refunds</h3>
                <p><strong>30-Day Money-Back Guarantee:</strong> If you are not satisfied with a course, you may request a full refund within 30 days of purchase, provided that:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>You have completed less than 30% of the course content</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>You have not downloaded substantial course materials</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>You have not received a certificate of completion</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✓</span><div>The course was purchased directly from French Practice Hub (not through a third party)</div></li>
                </ul>
                
                <p><strong>Exceptions:</strong> The following are non-refundable:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Courses purchased more than 30 days ago</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Courses where you have completed more than 30% of the content</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Live tutoring sessions (see section 3)</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Subscription renewals (refunds must be requested before renewal)</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Promotional or discounted courses marked as "non-refundable"</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">✗</span><div>Bundled courses (unless all courses in the bundle meet refund criteria)</div></li>
                </ul>
                
                <h3>3. Tutoring Session Cancellations</h3>
                <p><strong>Cancellation by Student:</strong></p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">✅</span><div><strong>More than 24 hours before:</strong> Full refund or session credit</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div><strong>Less than 24 hours before:</strong> 50% refund or credit</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">❌</span><div><strong>No-show:</strong> No refund</div></li>
                </ul>
                
                <p><strong>Cancellation by Instructor:</strong> If an instructor cancels a session, you will receive a full refund or the option to reschedule at no additional cost.</p>
                
                <h3>4. Subscription Plans</h3>
                <p>Subscription plans provide ongoing access to platform content and may be canceled at any time. However:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">ℹ️</span><div>Cancellation takes effect at the end of the current billing cycle</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">ℹ️</span><div>No refunds are provided for partial subscription periods</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">ℹ️</span><div>To avoid charges, cancel at least 24 hours before renewal</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">ℹ️</span><div>Access continues until the end of the paid period</div></li>
                </ul>
                
                <h3>5. How to Request a Refund</h3>
                <p>To request a refund, please:</p>
                <ol style="padding-left: 25px;">
                    <li style="margin-bottom: 10px;">Contact us at <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a></li>
                    <li style="margin-bottom: 10px;">Include your order number and reason for the refund request</li>
                    <li style="margin-bottom: 10px;">Allow 5-7 business days for review and processing</li>
                    <li style="margin-bottom: 10px;">Refunds will be issued to the original payment method within 10-14 business days</li>
                </ol>
                
                <h3>6. Technical Issues</h3>
                <p>If you experience technical difficulties preventing access to course content, please contact our support team immediately. We will work to resolve the issue or provide a refund if the problem cannot be fixed within a reasonable timeframe.</p>
                
                <h3>7. Promotional Codes and Discounts</h3>
                <p>If you used a promotional code or received a discount, the refund amount will be based on the actual amount paid, not the original course price.</p>
                
                <h3>8. Abuse Prevention</h3>
                <p>We reserve the right to deny refund requests if we detect patterns of abuse, such as:</p>
                <ul class="feature-list">
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>Repeatedly purchasing and refunding courses</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>Downloading all materials before requesting a refund</div></li>
                    <li class="feature-list-item"><span class="feature-list-icon">⚠️</span><div>Completing most of a course before requesting a refund</div></li>
                </ul>
                
                <h3>9. Changes to This Policy</h3>
                <p>We may update this Refund & Cancellation Policy at any time. Changes will be posted on this page with an updated revision date.</p>
                
                <h3>10. Contact Us</h3>
                <p>For questions about refunds or cancellations, contact: <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a></p>
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
