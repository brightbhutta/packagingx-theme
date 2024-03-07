<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package packagingx
 */
get_header('single'); ?>
    <?php while( have_posts() ): the_post();?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                </div>
            </div>
        </div>
    <?php endwhile;?>
<?php get_footer('cat'); ?>