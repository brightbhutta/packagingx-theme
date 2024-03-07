<?php /* Template Name: Page About Us */ ?>
<?php get_header('products'); ?>
    <section id="about">
		<div class="container">
			<div class="row" id="delivered">
				<?php the_content(); ?>
			</div>
            <?php include 'quote.php'; ?>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-12"></div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="connect">
                        <span>Connect With Us</span>
                        <div class="design">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h5>Design that Inspires</h5>
                                </div>
                                <div class="col-lg-5">
                                    <?php include 'socialmedia.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12"></div>
            </div>
		</div>
    </section>
<?php get_footer('cat'); ?>