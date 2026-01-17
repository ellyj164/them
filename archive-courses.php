<?php
/**
 * Course Archive Template
 * Compatibility layer for Tutor LMS
 * 
 * This template displays course listings by delegating to Tutor LMS
 * 
 * @package French_Practice_Hub
 */

get_header();

if (function_exists('tutor')) {
    tutor_load_template('archive-course');
} else {
    // Fallback to default archive template if Tutor LMS is not active
    get_template_part('archive');
}

get_footer();
