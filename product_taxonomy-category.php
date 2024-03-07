<?php

/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Refine
 * @since 2.0
 * @version 2.0
 */
get_header(); ?>
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