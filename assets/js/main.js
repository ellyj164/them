/**
 * French Practice Hub Theme - Main JavaScript
 * Handles mobile menu, search, dropdown, and language switcher functionality
 */

document.addEventListener('DOMContentLoaded', () => {
    // Language Switcher Functionality
    initLanguageSwitcher();
    
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

/**
 * Language Switcher Initialization
 * Manages language selection and Google Translate integration
 */
function initLanguageSwitcher() {
    // Constants
    const DEFAULT_LANGUAGE = 'EN';
    const GOOGLE_TRANSLATE_MAX_ATTEMPTS = 20;
    const GOOGLE_TRANSLATE_CHECK_INTERVAL = 200;
    
    const langOptions = document.querySelectorAll('.lang-option');
    const currentLangFlag = document.getElementById('current-lang-flag');
    const currentLangCode = document.getElementById('current-lang-code');
    const mobileLangFlag = document.getElementById('mobile-current-lang-flag');
    const mobileLangCode = document.getElementById('mobile-current-lang-code');
    
    // Language code mapping for Google Translate
    const langMap = {
        'EN': 'en',
        'FR': 'fr',
        'ES': 'es',
        'AR': 'ar',
        'ZH': 'zh-CN'
    };
    
    // Flag mapping
    const flagMap = {
        'EN': '🇬🇧',
        'FR': '🇫🇷',
        'ES': '🇪🇸',
        'AR': '🇸🇦',
        'ZH': '🇨🇳'
    };
    
    // Load saved language preference or default to English
    const savedLang = localStorage.getItem('preferredLanguage') || DEFAULT_LANGUAGE;
    
    // Initialize with saved language
    if (savedLang !== DEFAULT_LANGUAGE) {
        updateLanguageDisplay(savedLang);
        // Wait for Google Translate to load, then apply the language
        waitForGoogleTranslate(() => {
            changeLanguage(savedLang);
        });
    }
    
    // Add click event listeners to all language options
    langOptions.forEach(option => {
        option.addEventListener('click', (e) => {
            e.preventDefault();
            const lang = option.getAttribute('data-lang');
            
            // Save preference
            localStorage.setItem('preferredLanguage', lang);
            
            // Update display
            updateLanguageDisplay(lang);
            
            // Change language
            changeLanguage(lang);
            
            // Close dropdown
            const dropdown = option.closest('.dropdown, .mobile-dropdown-content');
            if (dropdown) {
                dropdown.classList.remove('active');
                const toggle = dropdown.previousElementSibling;
                if (toggle && toggle.classList.contains('mobile-dropdown-toggle')) {
                    toggle.classList.remove('active');
                }
            }
        });
    });
    
    function updateLanguageDisplay(lang) {
        const flag = flagMap[lang] || flagMap[DEFAULT_LANGUAGE];
        
        if (currentLangFlag) currentLangFlag.textContent = flag;
        if (currentLangCode) currentLangCode.textContent = lang;
        if (mobileLangFlag) mobileLangFlag.textContent = flag;
        if (mobileLangCode) mobileLangCode.textContent = lang;
    }
    
    function changeLanguage(lang) {
        const googleLang = langMap[lang] || langMap[DEFAULT_LANGUAGE];
        
        // Try to use Google Translate
        if (window.google && window.google.translate) {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = googleLang;
                select.dispatchEvent(new Event('change'));
            }
        }
    }
    
    function waitForGoogleTranslate(callback, maxAttempts = GOOGLE_TRANSLATE_MAX_ATTEMPTS) {
        let attempts = 0;
        
        const checkInterval = setInterval(() => {
            attempts++;
            
            if (document.querySelector('.goog-te-combo')) {
                clearInterval(checkInterval);
                callback();
            } else if (attempts >= maxAttempts) {
                clearInterval(checkInterval);
                // Google Translate not available - fail silently
            }
        }, GOOGLE_TRANSLATE_CHECK_INTERVAL);
    }
}
