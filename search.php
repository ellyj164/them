<?php
/**
 * Search Results Template
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main class="content-section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    printf(
                        /* translators: %s: search query. */
                        esc_html__( 'Search Results for: %s', 'french-practice-hub' ),
                        '<span>' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
            </header>

            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'search' );
            endwhile;

            the_posts_navigation();

        else :
            ?>
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'french-practice-hub' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'french-practice-hub' ); ?></p>
                <?php get_search_form(); ?>
            </div>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
