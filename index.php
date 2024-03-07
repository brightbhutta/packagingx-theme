<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package packagingx
 */
get_header('single'); ?>
<section id="blogs_heading">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="about_txts">
					<h1>Custom Packaging Blog</h1>
					<p>Your one-stop-shop for custom packaging advice, the latest packaging trends, and ideas.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="listcat">
				<?php
				//esc_html_e( 'All', 'text-domain' );
				$categories = get_categories();
					foreach($categories as $category) {
					   echo '<ul><li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li></ul>';
					}
				?>
			</div>
		</div>
		<div class="row">
			<?php while( have_posts() ): the_post();?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('blog-list'); ?></a>
						<div class="blog_list">
							<ul class="cate-list">
								<li><?php $categories = get_the_category(); $separator = ' '; $output = '';
									if ( ! empty( $categories ) ) {
								    foreach( $categories as $category ) {
								    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								    }
								    echo trim( $output, $separator ); }?>
								</li>
							</ul>
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
							<ul>
								<!-- <li><?php //echo get_avatar( 'admin@packagingx.com', 32 ); ?></li>
								<li><?php //the_author(); ?></li> -->
								<li><i class="fa fa-calendar"></i><?php the_date(); ?></li>
							</ul>
							
						</div>
					</div>
			</div>
			<?php endwhile;?>
			<?php wpbeginner_numeric_posts_nav(); ?>
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