<?php
/**
 * Single Course Template (Singular variant)
 * Compatibility layer for Tutor LMS
 * 
 * This template handles the singular 'course' post type
 * Some Tutor LMS configurations may use 'course' instead of 'courses'
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
