<?php
/**
 * Single Course Template
 * Compatibility layer for Tutor LMS
 * 
 * This template ensures Tutor LMS course pages display correctly
 * by delegating to Tutor LMS's native templates
 * 
 * @package French_Practice_Hub
 */

get_header();

// Let Tutor LMS handle its own templates
if (function_exists('tutor')) {
    // Use Tutor LMS default template
    tutor_load_template('single-course');
} else {
    // Fallback to default single template if Tutor LMS is not active
    get_template_part('single');
}

get_footer();
