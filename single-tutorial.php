<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package packagingx
 */
get_header('single'); ?>
<?php
$args = array(
    'post_type' => 'tutorial'
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
    <div class="superhero-container">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="superhero">                     
                <?php if ( get_the_post_thumbnail() ) : ?>                                     
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
        

<?php get_footer('cat'); ?>