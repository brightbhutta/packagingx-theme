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
<section id="single-box">
    <div class="container">
        <div class="row">
        <?php the_breadcrumb(); ?>
            <div class="col-lg-7 col-md-12">
                <?php while( have_posts() ): the_post(); ?>
                <div class="single-gallery"> 
                    <div class="row">
                        <div class="col-lg-12 col-md-6 bhoechie-tab">
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
                        <div class="col-lg-12 col-md-6 bhoechie-tab-menu">
                            <div class="list-group">
                                <a class="active text-center col-2">
                                <?php 
                                    $image = get_field('product_gallery');
                                    if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                </a>
                                <a class="text-center col-2">
                                <?php 
                                $image = get_field('product_gallery_1');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                </a>
                                <a class="text-center col-2">
                                <?php 
                                $image = get_field('product_gallery_2');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?> 
                                </a>
                                <a class="text-center col-2">
                                <?php 
                                $image = get_field('product_gallery_3');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?> 
                                </a>
                                <a class="text-center col-2">
                                <?php 
                                $image = get_field('product_gallery_4');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?> 
                                </a>
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
                        <h1><?php the_title(); ?></h1>
                    <?php endwhile; ?>
					<p>The colour, size, design, form and finishing of these boxes are all completely customizable.</p>
					<hr size="1" width="100%" color="black">
                    <form method="POST" action="" id="login" onsubmit="process(event)" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12"> 
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullname" placeholder="Full name" required/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12"> 
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email address" required/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12"> 
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" type="tel" name="phone" placeholder="Phone number" required/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Let us know what do you need!</label>
                                    <textarea rows="5" spellcheck="false" name="message" placeholder="Box dimensions, number of boxes you need, design – we can help."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="submit" id="product_form" class="btn btn-rounded btn-primary" name="submit" value="Request Qoute" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['submit'])) {
                           $to = 'packagingx11@gmail.com';  
                           $from = "sales@packagingx.com";
                           $fullname = $_POST['fullname'];
                           $email = $_POST['email'];
                           $phone = $_POST['phone'];
                           $subject = 'Product Form - Packaging X ';
                           $subject2 = 'Product Form - Packaging X ';
                           $headers  = 'MIME-Version: 1.0' . "\r\n";
                           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                           $headers .= "From: ".$_POST['fullname']." <".$_POST['email'].">\r\n";
                           $headers2 .= "From: ".$_POST['fullname']." <".$_POST['email'].">\r\n"; 
                           $headers .= "Reply-To: ".$_POST["email"]."\r\n";
                           $message = "<table border='1' bgcolor='#fffce4' width='80%'>
                                   <tr><th>Visiter:</th><th>Visiter Details</th></tr>
                                   <tr><td><b>Full Name:</b></td><td>".$_POST['fullname']."</td></tr>
                                   <tr><td><b>Email:</b></td><td>".$_POST['email']."</td></tr>
                                   <tr><td><b>Phone:</b></td><td>".$_POST['phone']."</td></tr>
                                   <tr><td><b>Message:</b></td><td>".$_POST['message']."</td></tr>
                                   </table>" ;
                            mail($to, $subject, $message, $headers);
                            mail($from, $subject2, $message2, $headers2);
                            echo "<p style='color:green;'>Mail Sent Successfully!. Thank you " . $fullname . ", we will contact you shortly.</p>";
                        }
                        ?>
                </div>
                <div class="row" id="product_sat">
					<div class="col-4">
                        <div class="singlebox-img-secure">
                            <img src="/wp-content/uploads/2022/02/Secure.svg" alt="Starting From 100 Boxes" />
                        </div>
                    </div>
					<div class="col-4">
                        <div class="singlebox-img-secure">
                            <img src="/wp-content/uploads/2022/02/Paypal.svg" alt="Starting From 100 Boxes" />
                        </div>
                    </div>
					<div class="col-4">
                        <div class="singlebox-img-secure">
                            <img src="/wp-content/uploads/2022/02/Truste-new.svg" alt="Starting From 100 Boxes" />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">
                            <img src="/wp-content/uploads/2021/12/Starting.svg" alt="Starting From 100 Boxes" />
                            <span>Starting From 100 Boxes</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">
                            <img src="/wp-content/uploads/2021/12/Days.svg" alt="6 Days Turnaround" />
                            <span>6 Days Turnaround</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">
                            <img src="/wp-content/uploads/2021/12/No-die.svg" alt="No Die and Plate Charge" />
                            <span>No Die and Plate Charge</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">              
							<img src="/wp-content/uploads/2021/12/Sizes-and-Style.svg" alt="Custom Design" />
                            <span>Custom Design Sizes &amp; Style</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">
                            <img src="/wp-content/uploads/2021/12/Request-Template.svg" alt="Request Free Template" />
                            <span>Request Free Template</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="singlebox-img">
                         	<img src="/wp-content/uploads/2021/12/High-Quality.svg" alt="High Quality Offset Printing" />
                            <span>High Quality Offset Printing</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="owl-carousel owl-theme" id="singlebox">
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/Starting.svg" alt="Starting From 100 Boxes" />
                <span>Starting From 100 Boxes</span>
            </div>
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/Days.svg" alt="6 Days Turnaround" />
                <span>6 Days Turnaround</span>
            </div>
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/No-die.svg" alt="No Die and Plate Charge" />
                <span>No Die and Plate Charge</span>
            </div>
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/High-Quality.svg" alt="High Quality Offset Printing" />
                <span>High Quality Offset Printing</span>
            </div>
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/Request-Template.svg" alt="Request Free Template" />
                <span>Request Free Template</span>
            </div>
            <div class="singlebox-img">
                <img src="/wp-content/uploads/2021/12/Sizes-and-Style.svg" alt="Custom Design" />
                <span>Custom Design Sizes &amp; Style</span>
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
			<div class="col-lg-1 col-md-2 col-xs-12">
            </div>
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div class="specific">
                    <h4>Specification</h4>
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
			<div class="col-lg-12 col-md-12 col-xs-12">
            	<div class="des">
                	<h4>Description</h4>
                	<?php 
                    	$des_value = get_post_meta(get_the_ID(),'des',true);
                    	echo($des_value);
                   	?>
              	</div>
			</div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="container">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-faq-heading">
                    <h4>Frequently asked questions</h4>
                </div>
            </div>
            <div class="col-lg-1 col-md-2 col-xs-12">
            </div>
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            I need follow up on orders. What's the procedure? 
                          </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Once the order is confirmed our customer sales representative will send you the tracking ID of the shipment and delivery service. By which you will be able to track the order.</p>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
                           Is it possible for you to create a custom box based on my artwork?
                          </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, almost anything is possible for this. You can give us any artwork, graphics, photos, or sketches. We can even do things like logos and text design for you, so it's totally up to you what type of artwork you would like.</p>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             Do you have any templates or examples for your work/boxes?
                          </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                            welcome to select from. You can contact our sales representative and he/she will send you the selected templates according to your needs.</p>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                             How can I find out when my order has shipped?
                          </button>
                        </h5>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Once we dispatch your order for shipment, you will receive a confirmation email plus a tracking number which you can use to keep track of your order.</p>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                             Why do you require my product's dimensions?
                          </button>
                        </h5>
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
                    <span>People Who Bought <?php the_title(); ?> Also Searched</span>
                </div>
            </div>
            <?php
        // get the custom post type's taxonomy terms
        $custom_taxterms = wp_get_object_terms( $post->ID, 'product_taxonomy', array('fields' => 'ids') );
        // arguments
        $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 4, // you may edit this number
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_taxonomy',
                'field' => 'id',
                'terms' => $custom_taxterms
            )
        ),
        'post__not_in' => array ($post->ID),
        );
        $related_items = new WP_Query( $args );
        // loop over query
        if ($related_items->have_posts()) :
        while ( $related_items->have_posts() ) : $related_items->the_post();
        ?>
        <div class="col-lg-3 col-md-6">
            <div class="related">
               <a  href="<?php echo esc_url(get_permalink(get_the_id()));?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('product');?>
               <p><?php the_title(); ?></p></a>
            </div>
        </div>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<section id="subscribe">
    <div class="container">
        <div class="row" id="sub-form">
			<div class="col-lg-3 col-md-12"></div>
            <div class="col-lg-6 col-md-12">
                <div class="subscribe">
					<p class="subscribesubtext">Get 10% off on your First Order</p>
                    <h5>Join Our Newsletter</h5>
					<p class="subscribesubtext2">Subscribe for promotions, special offers and news from the packaging industry.</p>
                    <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="quote_area">
                    <?php the_field('text_one'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="quote_area">
                    <?php the_field('text_two'); ?>
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
                                <h5>Design that Inspires</h5>
                            </div>
                            <div class="col-lg-5">
                                <ul>
                                    <li><a href="https://www.facebook.com/packagingx/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/packaging_x" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/packagingx/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.pinterest.com/thepackagingx/" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
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
        // $('.bhoechie-tab-content').izoomify({
        //     //url: './demo/images/accessory-bag-briefcase-1920x1281.jpg',
        //     magnify: 2.75,
        //     duration: 450,
        //     callback: function () {
        //         console.log(this);
        //     }
        // });
    $('#singlebox').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
              items: 1
            },
            600:{
                items:2
            },
            1024: {
              items: 6
            }
          }
    });
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
         utilsScript:
           "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
       });
    });
</script>
<?php get_footer('cat'); ?>