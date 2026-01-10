<?php
/**
 * Template part for displaying single post content
 *
 * @package French_Practice_Hub
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
        <div class="entry-meta">
            <span class="posted-on">
                <?php echo esc_html( get_the_date() ); ?>
            </span>
            <span class="byline">
                <?php
                printf(
                    esc_html__( 'by %s', 'french-practice-hub' ),
                    '<span class="author">' . esc_html( get_the_author() ) . '</span>'
                );
                ?>
            </span>
        </div>
    </header>

    <?php
    if ( has_post_thumbnail() ) :
        ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <?php
    endif;
    ?>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'french-practice-hub' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
</article>
