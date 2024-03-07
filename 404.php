<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package packagingx
 */
get_header('single'); ?>
<section class="error-404">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="about_found">
					<h2><?php esc_html_e( '404', 'packagingx' ); ?></h2>
					<p>Page Not found</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="packagingx" class="transition-ease"><?php esc_html_e('Back to Home', 'packagingx')?> </a>
				</div>
			</div>
		</div>
	</div>
</section><!-- .error-404 -->
<?php get_footer('cat'); ?>
