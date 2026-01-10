<?php
/**
 * Page Template
 * Displays static pages with content
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <?php
    while ( have_posts() ) :
        the_post();
        
        // Determine container class based on page slug or template
        $page_slug = get_post_field( 'post_name', get_the_ID() );
        $container_class = 'content-section';
        
        // Use about-page-container for specific pages
        $about_pages = array( 'about', 'about-us', 'pedagogy', 'mission', 'biography', 'story', 'partners' );
        if ( in_array( $page_slug, $about_pages ) ) {
            $container_class = 'about-page-container';
        }
        ?>
        
        <div class="<?php echo esc_attr( $container_class ); ?>">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
        
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
