<?php /* Template Name:Category Page Retail Boxes */ ?>
<?php get_header('retails'); ?>
    <section id="cbd-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="cbd-heading">
                        <h2><?php esc_html_e( 'Explore popular retail packaging', 'PackagingX' )?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                     $args = array(
                           'posts_per_page' => 20,
                           'post_type'      => 'product', 
                           //'category_name'  => 'retail-boxes', 
                           'post_status'    => 'publish',
                           'orderby'        => 'date',
                           'order'          => 'ASC',
                           'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product_taxonomy',
                                            'field'    => 'slug', //can be set to ID
                                            'terms'    => 'retail-boxes' //if field is ID you can reference by cat/term number
                                        )
                                    ),
                           //'cat'          =>  3,
                           'paged'          => $paged
                         ); 
                    $customPostQuery = new WP_Query($args);
                ?>
            <?php
                if($customPostQuery->have_posts() ): 
                    while($customPostQuery->have_posts()) :
                       $customPostQuery->the_post();
                         global $post;
                    $moreLink = '<a href="' . esc_url(get_permalink(get_the_id())) . '"> Read More...</a>';
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
        </div>
    </section>
	<section>
		<div class="container" id="box-top">
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
        <section>
            <div class="container">
                <div class="row" id="delivered">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="del">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Retail-Boxes-1.jpg" alt="Custom Retail Boxes" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="del-txt">
                            <h5>Professional turn around at reasonable prices.</h5>
                            <h2>Why use Custom Retail Boxes.?</h2>
                            <p>Custom retail boxes are the most multipurpose boxes available since they are used in almost any industry or business. Retail boxes are often used by retailers, wholesalers, and merchants in any industry. Custom retail boxes are necessary to secure and transport merchandise in a convenient manner. They are not only used to store or secure objects, but also to showcase retail items on a retailer's shop shelves in a more appealing manner. Custom packaging boxes are a sophisticated way to verify your items in a spectacular way.</p>
                            <p>Packaging X provides you the solution for the <a href="https://packagingx.com/"> best custom boxes</a> which our graphic designers will leave no stone unturned in their efforts to make your custom packaging a market success.</p>
                            <a href="/contact-us/" id="btn-del" class="btn btn-defult" title="Get Free Quote">Get Free Quote</a>
                        </div>
                    </div>
                </div>
               <?php include('packaking.php'); ?>
                <div class="row" id="product-txt">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="cbd-txt">
                            <h3>PackagingX offers high-quality <a href="https://packagingx.com/">custom retail boxes</a> for your products.</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="cbd-txt-image">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Retail-Boxes-2.png"  alt="Retail boxes Wholesale" />
                        </div>
                    </div>
					<div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="cbd-txt">
                            <p>Custom retail boxes are among the most sought-after types of packaging. Their use is widespread among business owners, who employ them to package hundreds of everyday products. We produce high-quality retail packaging that allows manufacturers to present their products in a more appealing manner in supermarkets and retail stores.</p>
                            <p>Our boxes will give your business a unique look and make it stand out from the other hundreds of similar products on the market today.</p>
                            <p>Custom printed boxes protect the items as much as possible, making sure they are safe during transport, storage, and display.</p>
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
                                <p>Once the order is confirmed our customer sales representative will send you the tracking ID of the shipment and delivery service. By which you will be able to track the order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
                               Can you make a box using my artwork?
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
                                 Do you have boxes/work templates?
                              </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which box you want; you are free to choose. You can contact our sales representative and he/she will send you the selected templates according to your needs.</p>
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
                                <p>Once we dispatch your order for shipment, you will receive a confirmation email plus a tracking number which you can use to keep track of your order.</p>
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
                                <p>The size of the product is required to design the product box. If your printer didn't give you the dielines for the product box, we ask for the size of the product so we can make custom printed boxes.</p>
								<p>In which case, you will need to send us the length, width, and height of the product and we will customise the box according to the product. We will include inserts if they are needed, but that will depend on the type of product.</p>
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
                                <div class="col-lg-6">
                                    <h5>Design that Inspires</h5>
                                </div>
                                <div class="col-lg-6">
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