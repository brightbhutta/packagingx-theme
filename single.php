<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package packagingx
 */
get_header('products'); ?>
	<section id="blog">
		<div class="container">
			<div class="row">
				<?php the_breadcrumb(); ?>
				<div class="content col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="blog_txt">
						<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						// the_post_navigation(
						// 	array(
						// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'packagingx' ) . '</span> <span class="nav-title">%title</span>',
						// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'packagingx' ) . '</span> <span class="nav-title">%title</span>',
						// 	)
						// );
					endwhile; // End of the loop.
						?>
					</div>
					<div class="row" id="recent_blog">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="recommended_txts">
								<h4>Recommended for you</h4>
							</div>
							<div class="row">
							<?php
				            // get the custom post type's taxonomy terms
				            $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
				            // arguments
				            $args = array(
				            'post_type' => 'post',
				            'post_status' => 'publish',
				            'posts_per_page' => 3, // you may edit this number
				            'orderby' => 'rand',
				            'tax_query' => array(
				                array(
				                    'taxonomy' => 'category',
				                    'field' => 'id',
				                    'terms' => $custom_taxterms
				                )
				            ),
				            'post__not_in' => array ($post->ID),
				            );
				            $related_items = new WP_Query( $args );
				            // loop over query
				            if ($related_items->have_posts()) :
				            while ( $related_items->have_posts() ) : $related_items->the_post();
				            ?>
				            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				                <div class="related">
				                   <a  href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
				                    <?php the_post_thumbnail('product');?>
				                   <p><?php the_title(); ?></p>
									</a>
				                </div>
				            </div>
				            <?php
				            endwhile;
				            endif;
				            wp_reset_postdata();
				            ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
					<div class="sidebar__inner">
						<div class="blog_sidebar">
							<h5>Give Shine To Your Product Using Custom Printed Boxes</h3>
							<p>We've worked with T-Mobile, Adidas, Pandora, Marriott Hotels, Inc. 5000 organisations, and many other businesses around the country to design custom box packaging.</p>
							<p><b>Get in touch </b>with us now to discover more about your custom box options.</p>
							<a href="https://packagingx.com/contact-us/" class="btn btn-primary" id="pick_sidebar">Get Free Quote</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<section id="subscribes">
	<div class="container">
	    <div class="row" id="sub-form">
			<div class="col-lg-3 col-md-12"></div>
	        <div class="col-lg-6 col-md-12">
	            <div class="subscribe">
					<p class="subscribesubtext">Get 10% off on your First Order</p>
                        <h5>Join Our Newsletter</h5>
						<p class="subscribesubtext2">Subscribe for promotions, special offers and news from the packaging industry.</p>
                        <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<?php get_footer('cat'); ?>