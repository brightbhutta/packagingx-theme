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
				<div class="col-lg-8 col-md-8 col-sm-12">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'packagingx' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'packagingx' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					endwhile; // End of the loop.
						?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer('cat'); ?>