<?php /* Template Name: Page Custom CBD Box */ ?>
<?php get_header('cbdbox'); ?>
    <section id="cbd-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="cbd-heading">
                        <h2>Explore Custom CBD Boxes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                     $args = array(
                           'posts_per_page' => 20,
                           'post_type'      => 'product', 
                           'post_status'    => 'publish',
                           'orderby'        => 'date',
                           'order'          => 'ASC',
                           'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product_taxonomy',
                                            'field'    => 'slug', //can be set to ID
                                            'terms'    => 'cbd-boxes' //if field is ID you can reference by cat/term number
                                        )
                                    ),
                           'paged'          => $paged
                         ); 
                    $customPostQuery = new WP_Query($args);
                ?>
                <?php
                    if($customPostQuery->have_posts() ): 
                        while($customPostQuery->have_posts()) :
                           $customPostQuery->the_post();
                             global $post;
                        //$moreLink = '<a href="' . esc_url(get_permalink(get_the_id())) . '"> Read More...</a>';
                    ?>

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
                <?php endwhile;  endif; 
                 wp_reset_query(); ?>
                 <?php  function cpt_pagination($pages = '', $range = 2){
                    $showitems = ($range * 2)+1;
                    global $paged;
                    if(empty($paged)) $paged = 1;
                    if($pages == '')
                    {
                    global $wp_query;
                    $pages = $wp_query->max_num_pages;
                    if(!$pages)
                    {
                        $pages = 1;
                    }
                }
            if(1 != $pages)
                {
                echo "<nav aria-label='Page navigation example'><ul class='pagination'> <span>Page ".$paged." of ".$pages."</span>";
                if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
                if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
                for ($i=1; $i <= $pages; $i++)
                {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                    {
                        echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
                    }
                }
                if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\"><i class='fa fa-angle-double-left'></i></a></li>";
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='fa fa-angle-double-right'></i></a></li>";
                echo "</ul></nav>\n";
            }
            }
            if (function_exists("cpt_pagination")) {
               cpt_pagination($customPostQuery->max_num_pages); 
                         
            } ?>
            </div>
			<section id="box-top">
    		<div class="container">
        			<div class="row">
           				<div class="col-lg-12 col-md-12">
                			<div class="box-top">
            					<p>Still looking for more?</p>
								<hr style="margin: 5px;">
								<span>
								 Our experts can help! <a href="/contact-us/">Request Free Consultation</a>
								</span>
        					</div>
            			</div>
        			</div>
   			 </div>
			</section>
            <div class="row" id="delivered">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="del">
                        <img src="https://packagingx.com/wp-content/uploads/2021/11/CBd-box-2.jpg" alt="Custom CBD Boxes" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="del-txt">
                        <h5>Delivered with care.</h5>
                        <h2>Why use custom CBD Boxes?</h2>
                        <p>Custom CBD packaging is essential because it may distinguish a product from the competitors, showcase its benefits, and communicate a high - quality image. Product uniqueness is crucial for businesses seeking to enhance their market share in a growing industry. All around the world, the usage of cannabis products has been  acknowledged in the medical and beauty industry. The demand has been increasing, which has sprung up the demand for the packaging.</p>
                        <p>Packaging X provides you the best solution for <a href="https://packagingx.com/">custom printed boxes</a>. Our graphic designers will never leave any stone unturned to make your packaging successful in the market.</p>
                        <a href="/contact-us/" id="btn-del" class="btn btn-defult" title="Get Free Quote">Get Free Quote</a>
                    </div>
                </div>
            </div>
            <?php include('packaking.php'); ?>
            <div class="row" id="product-txt">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="cbd-txt">
                        <h3>Find the great quality <a href="https://packagingx.com/">custom cbd boxes</a> for your products at PackagingX.</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="cbd-txt-image">
                        <img src="/wp-content/uploads/2022/05/Cbd-packaging-boxes-packagingx.gif"  alt="CBD Boxes Wholesale" />
                    </div>
                </div>
				<div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="cbd-txt">
                        <p>We are here to provide you with exquisitely designed CBD packaging. Our boxes are manufactured by designers in a variety of forms, styles, and brilliant colors. Customized CBD box packaging keeps cannabidiol products safe while also making them easier to use.</p>
                        <p>We can make custom boxes for your products in any dimensions and shapes you specify. Orders range from 100 to 500,000 boxes.</p>
                        <p>So what are you waiting for? Get custom printed boxes from PackagingX today.</p>
                        <a href="/contact-us/" class="btn btn-defult" id="cbd-btn" title="Get Free Quote">Get Free Quote</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row" id="faqss">
				<div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="faq-heading">
                        <h2>Frequently asked questions</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">
                </div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                I need follow up on orders. What's the procedure? 
                              </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Once the order is confirmed, our customer sales representative will send you the tracking ID of the shipment and delivery service. By which you will be able to track the order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
                               Is it possible for you to create a custom box based on my artwork?
                              </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, almost anything is possible for this. You can give us any artwork, graphics, photos, or sketches. We can even do things like logos and text design for you, so it's totally up to you what type of artwork you would like.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Do you have any templates or examples for your work/boxes?
                              </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our own archive of various templates of customised boxes. which, by the way, you are free to choose from. You can talk to our sales rep, and he or she will send you the chosen templates based on what you need.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 How can I find out when my order has shipped?
                              </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Once we dispatch your order for shipment, you will receive a confirmation email plus a tracking number, which you can use to keep track of your order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Why do you require my product's dimensions?
                              </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Dimensions are essential for the product box to be designed. If your printer did not provide you with the dielines of the product box, then we request the size of the product so we can design a customised box.</p>
								<p>In which case you will need to send us the length, width, and height of the product and we will customise the box according to the product. If necessary, we will include inserts, but that depends completely on the nature of the product.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">
                </div>
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
<?php get_footer('cat'); ?>