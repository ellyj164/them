<?php
/**
 * Template Name: Contact / Legal Notice
 * Template for Contact and Legal Notice Page
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
    <section class="page-hero">
        <div class="page-hero-content container">
            <h1><?php esc_html_e( 'Contact / Legal Notice', 'french-practice-hub' ); ?></h1>
            <p><?php esc_html_e( 'Get in touch with us', 'french-practice-hub' ); ?></p>
        </div>
    </section>
    
    <div class="content-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php esc_html_e( 'Contact Information', 'french-practice-hub' ); ?></h2>
            </div>
            
            <div class="contact-info-grid">
                <div class="contact-info-card">
                    <div class="contact-info-icon">✉️</div>
                    <h3 class="contact-info-title"><?php esc_html_e( 'General Inquiries', 'french-practice-hub' ); ?></h3>
                    <div class="contact-info-text">
                        <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a>
                    </div>
                </div>
                
                <div class="contact-info-card">
                    <div class="contact-info-icon">📱</div>
                    <h3 class="contact-info-title"><?php esc_html_e( 'Phone', 'french-practice-hub' ); ?></h3>
                    <div class="contact-info-text">
                        <a href="tel:+250787550062">+250 787 550 062</a>
                    </div>
                </div>
                
                <div class="contact-info-card">
                    <div class="contact-info-icon">🔧</div>
                    <h3 class="contact-info-title"><?php esc_html_e( 'Technical Support', 'french-practice-hub' ); ?></h3>
                    <div class="contact-info-text">
                        <p><?php esc_html_e( 'For technical issues or questions about using the platform', 'french-practice-hub' ); ?></p>
                        <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a>
                    </div>
                </div>
                
                <div class="contact-info-card">
                    <div class="contact-info-icon">🤝</div>
                    <h3 class="contact-info-title"><?php esc_html_e( 'Business Inquiries', 'french-practice-hub' ); ?></h3>
                    <div class="contact-info-text">
                        <p><?php esc_html_e( 'Partnership opportunities and collaborations', 'french-practice-hub' ); ?></p>
                        <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="content-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php esc_html_e( 'Legal Notice', 'french-practice-hub' ); ?></h2>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <h3><?php esc_html_e( 'Platform Name', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'French Practice Hub', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Published by', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'Fidele FLE', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Contact', 'french-practice-hub' ); ?></h3>
                <p>
                    <?php esc_html_e( 'Email:', 'french-practice-hub' ); ?> <a href="mailto:contact@frenchpracticehub.com">contact@frenchpracticehub.com</a><br>
                    <?php esc_html_e( 'Phone:', 'french-practice-hub' ); ?> <a href="tel:+250787550062">+250 787 550 062</a>
                </p>
                
                <h3><?php esc_html_e( 'Publication Director', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'Fidèle Ilunga Tshombe', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Hosting', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'This website is hosted on a secure server infrastructure.', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Intellectual Property', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'All content on this website, including but not limited to text, graphics, logos, videos, and course materials, is the property of French Practice Hub or its content creators and is protected by copyright laws.', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Data Protection', 'french-practice-hub' ); ?></h3>
                <p>
                    <?php
                    printf(
                        /* translators: %s: Privacy Policy link */
                        esc_html__( 'For information about how we collect and use your personal data, please see our %s.', 'french-practice-hub' ),
                        '<a href="' . esc_url( fph_get_safe_page_link( 'privacy' ) ) . '">' . esc_html__( 'Privacy Policy', 'french-practice-hub' ) . '</a>'
                    );
                    ?>
                </p>
                
                <h3><?php esc_html_e( 'Cookies', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'This website uses cookies to improve user experience and analyze site traffic. By using this site, you consent to the use of cookies in accordance with our Privacy Policy.', 'french-practice-hub' ); ?></p>
                
                <h3><?php esc_html_e( 'Dispute Resolution', 'french-practice-hub' ); ?></h3>
                <p><?php esc_html_e( 'Any disputes arising from the use of this website will be handled in accordance with applicable laws. For any complaints or concerns, please contact us at the email address provided above.', 'french-practice-hub' ); ?></p>
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