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
                            <li><a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1.1 (Pre-Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a11' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A1 (Beginner)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a1' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2.1 (Elementary)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a21' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_category_link( 'Kids, A2 (Pre-Intermediate)' ) ); ?>"><?php fph_translate_e( 'courses_kids_a2' ); ?></a></li>
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
                            <li><a href="<?php echo esc_url( fph_get_safe_page_link( 'privacy' ) ); ?>"><?php fph_translate_e( 'footer_privacy' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_page_link( 'terms' ) ); ?>"><?php fph_translate_e( 'footer_terms' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_page_link( 'refund' ) ); ?>"><?php fph_translate_e( 'footer_refund' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_page_link( 'copyright' ) ); ?>"><?php fph_translate_e( 'footer_copyright_ip' ); ?></a></li>
                            <li><a href="<?php echo esc_url( fph_get_safe_page_link( 'acceptable-use' ) ); ?>"><?php fph_translate_e( 'footer_acceptable' ); ?></a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
                
                <div class="footer-column footer-contact">
                    <h4><?php fph_translate_e( 'footer_contact_title' ); ?></h4>
                    <ul class="footer-contact-list">
                        <li>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                                </svg>
                                <span><?php esc_html_e('Contact Us', 'french-practice-hub'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/book-session/')); ?>">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                <span><?php esc_html_e('Book a Session', 'french-practice-hub'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:contact@frenchpracticehub.com">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                                <span>contact@frenchpracticehub.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+250787550062">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                                <span>+250 787 550 062</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4><?php esc_html_e( 'Follow Us', 'french-practice-hub' ); ?></h4>
                    <div class="social-icons">
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@fidelefle" target="_blank" rel="noopener noreferrer" class="social-icon social-youtube" aria-label="Follow us on YouTube">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/fidelefle" target="_blank" rel="noopener noreferrer" class="social-icon social-facebook" aria-label="Follow us on Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/eidotrailrunningworld/?utm_source=qr&amp;r=nametag" target="_blank" rel="noopener noreferrer" class="social-icon social-instagram" aria-label="Follow us on Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@fidele.fle" target="_blank" rel="noopener noreferrer" class="social-icon social-tiktok" aria-label="Follow us on TikTok">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                        </a>
                        
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/fidelefle" target="_blank" rel="noopener noreferrer" class="social-icon social-linkedin" aria-label="Follow us on LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        
                        <!-- Twitter/X -->
                        <a href="https://x.com/FleFidele" target="_blank" rel="noopener noreferrer" class="social-icon social-twitter" aria-label="Follow us on Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        
                        <!-- WhatsApp -->
                        <a href="https://api.whatsapp.com/message/J7DK6KO6NLE4I1?autoload=1&amp;app_absent=0" target="_blank" rel="noopener noreferrer" class="social-icon social-whatsapp" aria-label="Contact us on WhatsApp">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                        
                        <!-- Email -->
                        <a href="mailto:contact@frenchpracticehub.com" class="social-icon social-email" aria-label="Send us an email">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </a>
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
