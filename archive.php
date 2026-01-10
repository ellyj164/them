<?php
/**
 * Archive Template
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <div class="content-section">
        <div class="container">
            <header class="archive-header">
                <?php
                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header>
            
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        
                        <?php
                        if ( has_post_thumbnail() ) :
                            ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            </div>
                            <?php
                        endif;
                        ?>
                        
                        <?php the_excerpt(); ?>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            <?php esc_html_e( 'Read More', 'french-practice-hub' ); ?>
                        </a>
                    </article>
                    <?php
                endwhile;
                
                the_posts_pagination();
            else :
                ?>
                <p><?php esc_html_e( 'No posts found.', 'french-practice-hub' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
