<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package packagingx
 */
get_header('products'); ?>
<section id="search">
	<div class="container">
		<div class="row">
		<?php if(have_posts()):?>
		 <?php while( have_posts() ): the_post();?>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('blog-list'); ?>
					</a>
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
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<?php wpbeginner_numeric_posts_nav(); ?>
		<?php else : ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="about_txts">
					<h2><?php esc_html_e( 'Oops! No results was found.', 'packagingx' ); ?></h2>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="packagingx" class="transition-ease"><?php esc_html_e('Back to Home', 'packagingx')?> </a>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer('cat'); ?>