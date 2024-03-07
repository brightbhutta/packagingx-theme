<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package packagingx
 */
    if (!defined('ABSPATH')) exit;
     get_header('single'); ?>
<style type="text/css">
.list-group a{
    background-color: none;
    margin-bottom: 20px;
    cursor: pointer;
}
.list-group a.active img {
    border: 1px solid #000;
    outline: none;
}
.bhoechie-tab-content img {
    width: 100%;
    cursor: move;
}
.list-group-item{
    background-color: none;
    border-radius: 5px;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>
<section id="single-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <?php while( have_posts() ): the_post(); ?>
                    <div class="single-gallery"> 
                        <div class="row">
                            <div class="col-lg-2 col-md-6 bhoechie-tab-menu">
                                <div class="list-group">
                                    <a class="active text-center">
                                    <?php 
                                        $image = get_field('product_gallery');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                    <a class="text-center">
                                    <?php 
                                    $image = get_field('product_gallery_1');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                    <a class="text-center">
                                    <?php 
                                    $image = get_field('product_gallery_2');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                    </a>
                                    <a class="text-center">
                                    <?php 
                                    $image = get_field('product_gallery_3');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                    </a>
                                    <a class="text-center">
                                    <?php 
                                    $image = get_field('product_gallery_4');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-6 bhoechie-tab">
                                <div class="bhoechie-tab-content active">
                                    <?php 
                                        $image = get_field('product_gallery');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <?php 
                                    $image = get_field('product_gallery_1');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="bhoechie-tab-content">
                                    <?php 
                                    $image = get_field('product_gallery_2');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                </div>
                                <div class="bhoechie-tab-content">
                                    <?php 
                                    $image = get_field('product_gallery_3');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                </div>
                                <div class="bhoechie-tab-content">
                                    <?php 
                                    $image = get_field('product_gallery_4');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="product_space"></div>
                         <?php the_content(); ?>                    
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="product-form">
                        <h5><?php echo esc_html_e('Get Instant Free Qoute for', 'PackagingX'); ?></h5>
                        <?php while( have_posts() ): the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                        <?php endwhile; ?>
						<p>These boxes are 100% customizable. The box's form, color, size, design, and finishing can all be customized.</p>
						<hr size="1" width="100%" color="black">
                        <form method="POST" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email Address" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Phone Number" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
										<label>Quantity range</label>
                                        <select class="form-select">
                                            <option>Below 1000 units</option>
                                            <option>1000 - 5000 units</option>
                                            <option>5000 - 20,000 units</option>
											<option>20,000 - 100,000 units</option>
											<option>Over 100,000 units</option>
											<option>Require Consultation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
										<label>Printing options</label>
                                        <select class="form-select">
                                            <option>Print Outside + Print Inside</option>
                                            <option>No Print</option>
                                            <option>Print Outside</option>
                                            <option>Print Inside</option>
											<option>Require Consultation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Let us know what do you need!</label>
                                        <textarea rows="5" spellcheck="false" placeholder="Box dimensions, number of boxes you need, design – we can help."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-rounded btn-primary">
                                        <i class="fab fa-telegram-plane"></i>Request Quotation</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" id="singlebox">
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Starting.svg" alt="Starting From 100 Boxes" />
                            <span>Starting From 100 Boxes</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Days.svg" alt="6 Days Turnaround" />
                            <span>6 Days Turnaround</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/No-die.svg" alt="No Die and Plate Charge" />
                            <span>No Die and Plate Charge</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/High-Quality.svg" alt="High Quality Offset Printing" />
                            <span>High Quality Offset Printing</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Request-Template.svg" alt="Request Free Template" />
                            <span>Request Free Template</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="https://packagingx.com/wp-content/uploads/2021/12/Sizes-and-Style.svg" alt="Custom Design" />
                            <span>Custom Design Sizes &amp; Style</span>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="tabs">
                    <ul>
                        <li><a href="#specification">Specification</a></li>
                        <li><a href="#description">Description</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#relatedproducts">Related Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="specification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="specific">
                        <h2>Specification</h2>
                        <?php 
                            $specific_value = get_post_meta(get_the_ID(),'specific',true);
                            echo($specific_value);
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="description">
        <div class="container">
            <div class="row">
                <div class="des">
                    <h2>Description</h2>
                    <?php 
                        $des_value = get_post_meta(get_the_ID(),'des',true);
                        echo($des_value);
                        ?>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="single-faq-heading">
                        <h1>FAQs</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-12">
                </div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               After placing an order, I'll need to follow up on it What's the method to doing this?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Once the order is confirmed our customer sales representative will send you the tracking ID of the shipment and delivery service. By which you will be able to track the order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
                               Is it possible for you to create a custom box based on my artwork?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, almost anything is possible for this. You can give us any artwork, graphics, photos, or sketches. We can even do things like logos and text design for you, so it's totally up to you what type of artwork you would like.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Do you have any templates or examples for your work/boxes?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                                welcome to select from. You can contact our sales representative and he/she will send you the selected templates according to your needs.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 How can I find out when my order has shipped?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Once we dispatch your order for shipment, you will receive a confirmation email plus a tracking number which you can use to keep track of your order.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Why do you require my product's dimensions?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Dimensions are essential for the product box to be designed, In case your printer did not provide you with the dielines of the product box then we request the size of the product so we can design a customized box.</p>
								<p>In which you will need to send us the length, width and height of the product and we will customise the box according to the product. If necessary, we will include inserts, but that depends completely on the nature of the product.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">
                </div>
            </div>
        </div>
    </section>
    <section id="relatedproducts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="related">
                        <h2>Related Products</h2>
                    </div>
                </div>
                <?php
                 $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4
                );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-lg-3 col-md-6">
                    <div class="related">
                       <a  href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('product');?>
                       <h3><?php the_title(); ?></h3></a>
                    </div>
                </div>
                   <?php endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section id="subscribe">
        <div class="container">
            <div class="row" id="sub-form">
                <div class="col-lg-6 col-md-12">
                    <div class="subscribe">
                        <h3>Subscribe for promotions, special offers and news from the packaging industry.</h3>
                        <form action="#" method="Post">
                            <input type="text" name="text" placeholder="Enter your email" />
                            <button type="button" class="btn btn-default">Sign Me Up</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="sub_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/subscription.svg"  alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row" id="single-ready-area">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="single-ready-area">
                        <h2>Ready to Upgrade your Packaging</h2>
                        <a href="#" id="single-ready-btn" class="btn btn-defult" title="START NOW">START NOW</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-12"></div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="connect">
                        <span>Connect With Us</span>
                        <div class="design-single">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h2>Design that Inspires</h2>
                                </div>
                                <div class="col-lg-5">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
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
    $(document).ready(function () {
        $('.bhoechie-tab-content').izoomify({
            //url: './demo/images/accessory-bag-briefcase-1920x1281.jpg',
            magnify: 2.75,
            duration: 450,
            callback: function () {
                console.log(this);
            }
        });
    });
</script>
<?php get_footer('cat'); ?>