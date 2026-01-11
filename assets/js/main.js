/**
 * French Practice Hub Theme - Main JavaScript
 * Handles mobile menu, search, and dropdown functionality
 */

document.addEventListener('DOMContentLoaded', () => {
    // Google Translate configuration
    const GOOGLE_TRANSLATE_FALLBACK_DELAY = 2000; // ms - time to wait before falling back to Polylang/WPML
    
    // Google Translate functionality
    function triggerGoogleTranslate(langCode) {
        // Map language codes to Google Translate format
        const langMap = {
            'en': 'en',
            'fr': 'fr',
            'es': 'es',
            'ar': 'ar',
            'zh': 'zh-CN',
            'zh-CN': 'zh-CN'
        };
        
        const googleLangCode = langMap[langCode] || langCode;
        
        // Retry mechanism to wait for Google Translate to be available
        let retryCount = 0;
        const maxRetries = 10;
        const retryDelay = 300; // ms
        
        function attemptTranslate() {
            if (typeof google !== 'undefined' && google.translate && google.translate.TranslateElement) {
                const select = document.querySelector('.goog-te-combo');
                if (select) {
                    select.value = googleLangCode;
                    select.dispatchEvent(new Event('change'));
                    return true;
                }
            }
            
            // Retry if widget not ready yet
            if (retryCount < maxRetries) {
                retryCount++;
                setTimeout(attemptTranslate, retryDelay);
            }
            return false;
        }
        
        attemptTranslate();
    }
    
    // Add click event listeners to language switcher options
    const langOptions = document.querySelectorAll('.lang-option');
    langOptions.forEach(option => {
        option.addEventListener('click', (e) => {
            const langCode = option.getAttribute('data-lang');
            if (langCode) {
                // Prevent default navigation to allow Google Translate to work
                e.preventDefault();
                
                // Trigger Google Translate
                triggerGoogleTranslate(langCode);
                
                // Fallback: if Google Translate fails after delay, navigate to Polylang/WPML URL
                setTimeout(() => {
                    // Check if page was translated
                    // Note: This detection relies on Google Translate's DOM structure which may change.
                    // Alternative detection methods could include checking for translated text or 
                    // monitoring DOM mutations, but those are more complex and less reliable.
                    const isTranslated = document.querySelector('.goog-te-banner-frame') || 
                                       document.documentElement.classList.contains('translated-ltr') ||
                                       document.documentElement.classList.contains('translated-rtl');
                    
                    if (!isTranslated) {
                        // Google Translate didn't work, use Polylang/WPML fallback
                        window.location.href = option.href;
                    }
                }, GOOGLE_TRANSLATE_FALLBACK_DELAY);
            }
        });
    });
    
    // Search functionality
    const searchContainer = document.getElementById('search-container');
    const searchBtn = document.getElementById('search-btn');
    
    if (searchBtn && searchContainer) {
        searchBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            searchContainer.classList.toggle('active');
            if (searchContainer.classList.contains('active')) {
                const searchInput = document.getElementById('search-input');
                if (searchInput) {
                    searchInput.focus();
                }
            }
        });
        
        // Submit search form when clicking search button if input has value
        searchBtn.addEventListener('click', (e) => {
            if (searchContainer.classList.contains('active')) {
                const searchInput = document.getElementById('search-input');
                const searchForm = searchContainer.querySelector('form');
                if (searchInput && searchInput.value.trim() !== '' && searchForm) {
                    searchForm.submit();
                }
            }
        });
        
        // Close search when clicking outside
        document.addEventListener('click', (e) => {
            if (searchContainer.classList.contains('active') && !searchContainer.contains(e.target)) {
                searchContainer.classList.remove('active');
            }
        });
    }

    // Mobile Menu Functionality
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
    
    function closeMobileMenu() {
        if (hamburgerMenu) hamburgerMenu.classList.remove('active');
        if (mobileNav) mobileNav.classList.remove('active');
        if (mobileNavOverlay) mobileNavOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    function openMobileMenu() {
        if (hamburgerMenu) hamburgerMenu.classList.add('active');
        if (mobileNav) mobileNav.classList.add('active');
        if (mobileNavOverlay) mobileNavOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    if (hamburgerMenu) {
        hamburgerMenu.addEventListener('click', () => {
            if (mobileNav && mobileNav.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }
    
    if (mobileNavOverlay) {
        mobileNavOverlay.addEventListener('click', closeMobileMenu);
    }
    
    // Close mobile menu when clicking on mobile nav links
    const mobileNavLinks = document.querySelectorAll('.mobile-nav a');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });
    
    // Mobile Dropdown Toggles
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('active');
            const content = toggle.nextElementSibling;
            if (content) {
                content.classList.toggle('active');
            }
        });
    });
});
