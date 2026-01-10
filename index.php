<?php
/**
 * Index Template
 * Fallback template
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <div class="content-section">
        <div class="container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </article>
                    <?php
                endwhile;
                
                the_posts_pagination();
            else :
                ?>
                <p><?php esc_html_e( 'No content found.', 'french-practice-hub' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
