<?php
/**
 * Template Name: Acceptable Use Policy
 * Template for Acceptable Use Policy page
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
    <div class="content-section">
        <div class="container">
            <h2>Acceptable Use Policy</h2>
            <p><em>Last Updated: January 10, 2026</em></p>
            
            <h3>1. Purpose</h3>
            <p>This Acceptable Use Policy ("AUP") governs the use of French Practice Hub's learning platform. The purpose is to protect the Platform, our users, instructors, and staff from harmful conduct while maintaining a positive, productive learning environment for all.</p>
            
            <h3>2. General Principles</h3>
            <p>When using French Practice Hub, you agree to:</p>
            <ul>
                <li>Use the Platform for lawful educational purposes only</li>
                <li>Respect the rights and dignity of all users, instructors, and staff</li>
                <li>Act honestly and with integrity in all interactions</li>
                <li>Comply with all applicable laws and regulations</li>
                <li>Follow the Platform's Terms of Use and policies</li>
            </ul>
            
            <h3>3. Prohibited Activities</h3>
            <p><strong>You may NOT:</strong></p>
            
            <p><strong>A. Illegal Activities:</strong></p>
            <ul>
                <li>Violate any local, state, national, or international laws</li>
                <li>Engage in or promote illegal activities</li>
                <li>Infringe upon intellectual property rights</li>
                <li>Engage in fraud, identity theft, or financial crimes</li>
            </ul>
            
            <p><strong>B. Harmful Conduct:</strong></p>
            <ul>
                <li>Harass, threaten, intimidate, or bully other users</li>
                <li>Post or transmit hate speech, discriminatory content, or offensive material</li>
                <li>Share violent, graphic, or disturbing content</li>
                <li>Engage in sexual harassment or share sexually explicit material</li>
                <li>Impersonate others or misrepresent your identity or affiliation</li>
            </ul>
            
            <p><strong>C. Security Violations:</strong></p>
            <ul>
                <li>Attempt to gain unauthorized access to accounts, systems, or networks</li>
                <li>Distribute viruses, malware, or other malicious code</li>
                <li>Interfere with or disrupt the Platform's operation or servers</li>
                <li>Probe, scan, or test vulnerabilities of the system</li>
                <li>Circumvent security measures or access controls</li>
                <li>Use automated tools (bots, scripts) without authorization</li>
            </ul>
            
            <p><strong>D. Content Misuse:</strong></p>
            <ul>
                <li>Copy, reproduce, or redistribute course content without permission</li>
                <li>Share your account credentials with others</li>
                <li>Record, download, or capture course materials without authorization</li>
                <li>Post spam, advertisements, or promotional content</li>
                <li>Share personal information of others without consent</li>
            </ul>
            
            <p><strong>E. Academic Dishonesty:</strong></p>
            <ul>
                <li>Cheat on quizzes, exams, or assignments</li>
                <li>Plagiarize content from others</li>
                <li>Submit work that is not your own</li>
                <li>Help others cheat or violate academic integrity</li>
                <li>Create multiple accounts to access content inappropriately</li>
            </ul>
            
            <h3>4. Community Conduct</h3>
            <p>To maintain a positive learning environment:</p>
            <ul>
                <li><strong>Be respectful:</strong> Treat everyone with courtesy and professionalism</li>
                <li><strong>Be constructive:</strong> Provide helpful feedback and engage in productive discussions</li>
                <li><strong>Be inclusive:</strong> Welcome diversity and different perspectives</li>
                <li><strong>Be supportive:</strong> Help fellow learners and contribute to a collaborative atmosphere</li>
                <li><strong>Be honest:</strong> Represent yourself and your work truthfully</li>
            </ul>
            
            <h3>5. User-Generated Content Standards</h3>
            <p>When posting comments, forum discussions, or other content:</p>
            <ul>
                <li>Ensure content is relevant to the course or topic</li>
                <li>Use appropriate language and tone</li>
                <li>Respect intellectual property rights</li>
                <li>Avoid off-topic or repetitive posts</li>
                <li>Do not share personal contact information publicly</li>
                <li>Report inappropriate content to platform administrators</li>
            </ul>
            
            <h3>6. Reporting Violations</h3>
            <p>If you encounter behavior or content that violates this AUP, please report it immediately to:</p>
            <p>Email: <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a><br>
            Subject Line: "AUP Violation Report"</p>
            
            <p>Include relevant details such as usernames, dates, and descriptions of the violation.</p>
            
            <h3>7. Enforcement and Consequences</h3>
            <p>Violations of this AUP may result in:</p>
            <ul>
                <li><strong>Warning:</strong> First-time or minor violations may receive a formal warning</li>
                <li><strong>Content removal:</strong> Offensive or prohibited content will be removed</li>
                <li><strong>Temporary suspension:</strong> Account access may be temporarily restricted</li>
                <li><strong>Permanent termination:</strong> Serious or repeated violations may result in permanent account closure</li>
                <li><strong>Legal action:</strong> We may report criminal activities to law enforcement and pursue legal remedies</li>
            </ul>
            
            <p>We reserve the right to determine, in our sole discretion, whether conduct violates this AUP and what action to take.</p>
            
            <h3>8. No Refund for Policy Violations</h3>
            <p>If your account is suspended or terminated due to AUP violations, you are not entitled to a refund of any fees paid.</p>
            
            <h3>9. Changes to This Policy</h3>
            <p>We may update this Acceptable Use Policy at any time. Continued use of the Platform after changes constitutes acceptance of the updated policy.</p>
            
            <h3>10. Contact Us</h3>
            <p>For questions about this policy, contact: <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a></p>
        </div>
    </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
