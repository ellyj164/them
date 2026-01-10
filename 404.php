<?php
/**
 * 404 Error Page Template
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main class="content-section">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( '404 - Page Not Found', 'french-practice-hub' ); ?></h1>
        </header>

        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try searching?', 'french-practice-hub' ); ?></p>
            <?php get_search_form(); ?>

            <h2><?php esc_html_e( 'Explore Our Site', 'french-practice-hub' ); ?></h2>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'french-practice-hub' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'French Courses', 'french-practice-hub' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Fun Exercises', 'french-practice-hub' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Exam Preparation', 'french-practice-hub' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'About Us', 'french-practice-hub' ); ?></a></li>
            </ul>
        </div>
    </div>
</main>

<?php
get_footer();
