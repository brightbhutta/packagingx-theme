<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package packagingx
 */
get_header('products'); ?>
        <div class="container">
            <div class="row">
                <h1><?php echo single_cat_title(); //echo category_description(); ?></h1>
                <?php while( have_posts() ): the_post();?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="cbd-product">
                        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail('product-cat'); ?>
                            <hr size="1" width="100%" color="black">
                            <h3><?php the_title(); ?></h3>
                            <h5><?php echo esc_html_e('Explore', 'PackagingX');?><i class="fa fa-angle-right"></i></h5>
                        </a>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
<?php get_footer('cat'); ?>