<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package packagingx
 */
get_header('single'); ?>
	<section id="blog">
		<div class="container">
			<div class="row">
				<h1><?php wp_title(''); ?></h1>
				<div class="col-lg-8 col-md-8 col-sm-12">
					<?php while( have_posts() ): the_post();?>
						<div class="card">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('blog'); ?></a>
							<div class="blog_list">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<ul>
									<li><?php the_author(); ?></li>
									<li><?php the_date(); ?></li>
									<li><?php $categories = get_the_category(); $separator = ' '; $output = '';
										if ( ! empty( $categories ) ) {
										    foreach( $categories as $category ) {
										    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										    }
										    echo trim( $output, $separator ); }?></li>
								</ul>
								<p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
							</div>
						</div>
					<?php endwhile;?>
					<?php wpbeginner_numeric_posts_nav(); ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer('cat'); ?>
