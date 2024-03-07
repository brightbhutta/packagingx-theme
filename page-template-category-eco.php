<?php /* Template Name:Category Page Eco Friendly */ ?>
<?php get_header('eco'); ?>
    <section id="cbd-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="cbd-heading">
                        <h2>Explore popular Eco-Friendly boxes</h2>
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
                                            'terms'    => 'eco-friendly' //if field is ID you can reference by cat/term number
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
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="cbd-product">
                            <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('product-cat'); ?>
                                <hr size="1" width="100%" color="black">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 13, '...' ); ?></p>
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
                        <img src="https://packagingx.com/wp-content/uploads/2021/11/Eco-Friendly-Boxes-1.jpg" alt="Eco Friendly Packaging" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="del-txt">
						<h5>We value the nature.</h5>
                        <h2>Why use Eco-Friendly Boxes?</h2>
                        <p>Having eco-friendly packaging influences customers to purchase the brand. Increasing environmental concerns over packaging waste are prompting brands and businesses to implement green packaging solutions. Eco-friendly boxes made of kraft paper or Bux board are easily recyclable and do not pollute the environment. Our boxes can help you attract eco-friendly customers.</p>
                        <p>PackagingX is providing variety of eco friendly boxes at your doorstep.</p>
                        <a href="/contact-us/" id="btn-del" class="btn btn-defult" title="Get Free Quote">Get Free Quote</a>
                    </div>
                </div>
            </div>
           <?php include('packaking.php'); ?>
            <div class="row" id="product-txt">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="cbd-txt">
						<h3>Find Premium Quality of <a href="https://packagingx.com/">Custom Eco-Friendly Boxes</a> for your Products at PackagingX.</h3> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="cbd-txt-image">
                        <img src="https://packagingx.com/wp-content/uploads/2021/11/Eco-Friendly-Boxes-2-1.jpg"  alt="Eco Friendly Packaging Wholesale" />
                    </div>
                </div>
 				<div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="cbd-txt">
                        <p>If you own a brand, and are hunting good eco friendly boxes, then you are the right place. You can get customized eco-friendly boxes in all shapes, sizes and designs. Also, we ensure to use organic colors to print the logos and design on the box.</p>
                        <p>Beautiful subjects and text styles can be added to the boxes to make them stand out. Orders range from 100 to 500,000 boxes. We strive to deliver your order within 6-8 business days. In an emergency, we will deliver the order immediately. Our boxes are eco-friendly and customizable in designs, shapes, and colors.</p>
                        <p>So, hurry up and get the best eco-friendly printed boxes from PackagingX today.</p>
                        <a href="/contact-us/" class="btn btn-defult" id="cbd-btn" title="Get Free Quote">Get Free Quote</a>
                    </div>
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
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneths" aria-expanded="true" aria-controls="collapseOneths">
                                Are cardboard boxes eco-friendly?
                              </button>
                            </h3>
                            <div id="collapseOneths" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Cardboard has a lot of environmental benefits. It is completely recyclable whether in the form of corrugated fiberboard or paperboard. It does not cause any wastage. ... It is not made of plastic, which is not recyclable in many cases and is harmful to the environment.</p>
                              </div>
                            </div>
                        </div>
						<div class="accordion-item">
                            <h3 class="accordion-header" id="headingtwo">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnets" aria-expanded="true" aria-controls="collapseOnets">
                                What are eco-friendly boxes made of?
                              </button>
                            </h3>
                            <div id="collapseOnets" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Bioplastics, or plant-based plastics, are two types of biodegradable and recyclable materials used in eco-friendly packaging. Recycled paper and plastics. Post-consumer products, such as recycled bulk bags.</p>
                              </div>
                            </div>
                        </div>
						<div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnes" aria-expanded="true" aria-controls="collapseOnes">
                              Is it possible to print on the inside of eco-friendly boxes?
                              </button>
                            </h3>
                            <div id="collapseOnes" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, you can! You can create or send us the design that you want inside of your packaging. With the help of our designer, you can also keep the outside of your box blank, but create a unquie design for the inside.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               I have to follow up on my order How do I do this?
                              </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Once the order is confirmed, our sales representative will send you the tracking number of the shipment and delivery service. By whom you will be able to track the order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               Can I give you my own piece of art to design Custom Box?
                              </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, almost anything is possible for this. You can give us any artwork, graphics, photos, or sketches. We can even do things like logos and text design for you, so it's totally up to you what type of artwork you would like.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Do you have any templates or examples for your work/boxes?
                              </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                                welcome to select from. You can contact our sales representative and he/she will send you the selected templates according to your needs.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSeven">
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
                            <h3 class="accordion-header" id="heading">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Why do you require my product's dimensions?
                              </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Dimensions are essential for the product box to be designed, In case your printer has not provided you the Dielines of the product box then we ask for the product dimension so that we could design a custom box tailored specifically for your product.</p>
								<p>In which you would have to send us the lengh, width and height of the product and we will customize the box according to the product. If required we will include inserts but that totally depends on the product nature.</p>
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