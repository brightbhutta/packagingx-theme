<?php /* Template Name: Page Products */ ?>
<?php get_header('pro-page'); ?>
    <section id="about">
		<div class="container">
			<div class="row">
                <?php the_breadcrumb(); ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="product_heading">
                        <h2>Custom Retail Boxes</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="product_heading">
                        <a href="/retail-boxes/">View All Products</a>
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="owl-carousel owl-theme" id="democarousel">
                    <?php
                        $args = array(
                           'posts_per_page' => 22,
                           'post_type'      => 'product', 
                           'post_status'    => 'publish',
                           'orderby'        => 'date',
                           'order'          => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_taxonomy',
                                    'field'    => 'slug',
                                    'terms'    => 'retail-boxes'
                                )
                            ),
                         ); 
                        $customPostQuery = new WP_Query($args);
                    ?>
                <?php
                    if($customPostQuery->have_posts() ): 
                        while($customPostQuery->have_posts()) :
                        $customPostQuery->the_post();
                    ?>
                        <div class="items">
                            <div class="cbd-product">
                                <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('product-cat'); ?>
                                    <hr size="1" width="100%" color="black">
                                    <h3><?php the_title(); ?></h3>
                                    <h5><?php echo esc_html_e('Explore', 'PackagingX');?><i class="fa fa-angle-right"></i></h5>
                                </a>
                            </div>
                        </div>
                        <?php endwhile;  endif; 
                        wp_reset_query(); ?>
                    </div>
			    </div>
				<?php include 'display-packaging.php';?>
                <?php include 'food-packaging.php'; ?>
                <?php include 'cbd-packaging.php'; ?>
                <?php include 'gift-packaging.php'; ?>
                <?php include 'cosmetics-boxes.php'; ?>
                <?php include 'eco-Friendly.php'; ?>
                <?php include 'metalized-boxes.php'; ?>
                <?php include 'bottom-closure.php'; ?>
                <?php include 'fold.php'; ?>
                <?php include 'showcase.php'; ?>
                <?php include 'top.php'; ?>
                <?php include 'figure.php'; ?>
                <?php include 'rectangular.php'; ?>
        <section id="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="faqs">
                            <h1 style="text-align: center;">Frequently Asked Questions</h1>
                            <p>We've answered some of the most frequently asked questions about the custom packaging process. If you have any more questions, please contact us by live chat, our contact form, or by phone.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>Can you create the type of custom box I need?</h4>
                                    <p>Of course, that is precisely why we are here! Through our talented and competent design team, we ensure to make your brand stand out in the market by putting vibrant colors and creativity in your boxes.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>How do I place an order, and what happens next?</h4>
                                    <p>The procedure remains intact. Speak with one of our representatives via live chat, fill out an online form, or call us directly at the number provided, and once you have finalized the type and quantity of custom printed boxes that you needs, our member will answer any questions you have about the artwork, mockups design, or anything else related to your order. When you are satisfied, the details of your order will be confirmed, and an invoice will be sent to you for order confirmation. After you have submitted your invoice, the next step is to preview your artwork! We will create and share 2D and 3D mockups of your boxes based on the artwork you provide before printing them. This means you will be able to see every detail of your design from every angle before putting it into production. Once you have reviewed and approved the designs, your order will be processed and shipped to you within the time frame specified for your specific requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>How do I obtain a price quote for my project and how long does the procedure take?</h4>
                                    <p>All you have to do is contact us via your preferred method of communication. You can contact one of our representatives via live chat, fill out an online form, or call us directly at the number provided. When we receive your requirements specifications, one of our customer service representatives will get in touch with you with a free quote within 24 hours on working days.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>How long will it take you to process my order after I place it and when will I get my order?</h4>
                                    <p>While turnaround time for custom box orders varies depending on each customers unique specifications, our standard turnaround time is 8-10 business days after final design approval. Bulk or rigid custom box orders may necessitate additional production and/or shipping time, which we will notify you in advance. While we strive for extreme accuracy in our stated turnaround times, delivery estimates cannot be guaranteed. If your delivery date is critical, we strongly advise you to discuss rush manufacturing and timely shipping with your customer service rep.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>Is it possible to print artwork on both the inside and outside of the box?</h4>
                                    <p>Yes! We frequently print 2-sided boxes with your artwork on both sides of the custom boxes. We can print on both the outside (1-side) and the inside of boxes (2-side). There may be additional charges for 2-sided printing; please discuss this with your customer service representative for more information.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>Do you offer discounts for bulk orders and how can I lower my unit price?</h4>
                                    <p>Yes! As a general rule, pricing becomes more cost-effective as order quantity increases, so the larger your box quantities, the lower your per unit price. Your box dimensions, box style, ink coverage on the box, box material, and quantity all influence pricing. PackagingX, a leading custom packaging manufacturer, offers the most competitive rates on custom printed boxes currently offered. If you find a lower price elsewhere, we will work to match it. We believe in upfront pricing and work hard to keep our reputation as the most affordable custom packaging provider.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>How will I be able to see what my box will look like before I place my order? Is proof provided before printing?</h4>
                                    <p>We promise you, the product would not be kept confidential or hidden from you at PackagingX. We will create and share 2D and 3D mockups of your boxes based on the artwork you provide before printing them. This means you will be able to see every detail of your design from every angle before putting it into production. If you require any design changes after reviewing your mockups, our team of graphic and structural designers will assist you at no additional cost.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="faqs-txt">
                                    <h4>Which types of payment methods do you accept?</h4>
                                    <p>The world is growing rapidly and trading of everything has changed in the form of online transactions. To satisfy modern models and for the convenience of our clients, we accept all forms of payment. Orders may be paid for using a variety of methods, including Master Card, PayPal, Union Pay, and Visa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
			<?php include 'quote.php'; ?>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-12"></div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="connect">
                        <span>Connect With Us</span>
                        <div class="design">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h2>Design that Inspires</h2>
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

    <script type="text/javascript">
    $('#democarousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1024: {
          items: 4
        }
      }
    });
    </script>
<?php get_footer('cat'); ?>