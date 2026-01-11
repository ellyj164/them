    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4><?php fph_translate_e( 'footer_courses_title' ); ?></h4>
                    <?php
                    if ( has_nav_menu( 'footer-courses' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-courses',
                            'container'      => false,
                            'menu_class'     => '',
                        ) );
                    } else {
                        ?>
                        <ul>
                            <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1.1 (Pre-Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A1 (Beginner)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2.1 (Elementary)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Kids, A2 (Pre-Intermediate)' ) ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
                
                <div class="footer-column">
                    <h4><?php fph_translate_e( 'footer_legal_title' ); ?></h4>
                    <?php
                    if ( has_nav_menu( 'footer-legal' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-legal',
                            'container'      => false,
                            'menu_class'     => '',
                        ) );
                    } else {
                        ?>
                        <ul>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy' ) ) ); ?>"><?php fph_translate_e( 'footer_privacy' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'terms' ) ) ); ?>"><?php fph_translate_e( 'footer_terms' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'refund' ) ) ); ?>"><?php fph_translate_e( 'footer_refund' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'copyright' ) ) ); ?>"><?php fph_translate_e( 'footer_copyright_ip' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'acceptable-use' ) ) ); ?>"><?php fph_translate_e( 'footer_acceptable' ); ?></a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
                
                <div class="footer-column">
                    <h4><?php fph_translate_e( 'footer_contact_title' ); ?></h4>
                    <p><a href="mailto:contact@fidelefle.com">contact@fidelefle.com</a></p>
                </div>
                
                <div class="footer-column">
                    <h4><?php esc_html_e( 'Follow Us', 'french-practice-hub' ); ?></h4>
                    <div class="footer-socials">
                        <a href="#" aria-label="Facebook">📘</a>
                        <a href="#" aria-label="Instagram">📷</a>
                        <a href="#" aria-label="Twitter">🐦</a>
                        <a href="#" aria-label="YouTube">📹</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p><?php fph_translate_e( 'footer_copyright' ); ?></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
