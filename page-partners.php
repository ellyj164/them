<?php
/**
 * Template Name: Partners
 * Template for Partners page
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
            <div class="about-page-container">
                <div class="container">
                    <h1>Our Partners</h1>
                    <p>At French Practice Hub, we believe in the power of collaboration. We are actively seeking partnerships with educational institutions, language schools, cultural organizations, and technology providers who share our vision of making quality French language education accessible to learners worldwide.</p>
                    <h2>Partnership Opportunities</h2>
                    <p>We welcome partnerships in the following areas:</p>
                    <ul>
                        <li>Educational institutions looking to enhance their French language programs</li>
                        <li>Technology companies developing innovative educational tools</li>
                        <li>Cultural organizations promoting Francophone culture and heritage</li>
                        <li>Content creators and educators interested in collaboration</li>
                        <li>Corporate training programs requiring French language instruction</li>
                    </ul>
                    <h2>Become a Partner</h2>
                    <p>If you are interested in partnering with French Practice Hub, we would love to hear from you. Together, we can create meaningful learning experiences and expand opportunities for French language learners around the world.</p>
                    <p>Please contact us at <a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a> to discuss partnership possibilities.</p>
                    <p><em>Partner content will be added here as we establish collaborations.</em></p>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
