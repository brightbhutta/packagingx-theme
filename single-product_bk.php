<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package packagingx
 */
get_header('single'); ?>

<section id="single-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <?php while( have_posts() ): the_post(); ?>
                    <div class="single-gallery">
                        <h2><?php the_title(); ?></h2>  
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="previews"> 
                                <a class="selected" data-full="<?php echo esc_url($image['url']); ?>">
                                    <?php 
                                    $image = get_field('product_gallery');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </a> 
                                <a  data-full="<?php echo esc_url($image['url']); ?>">
                                   <?php 
                                    $image = get_field('product_gallery_1');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                </a>
                                <a  data-full="<?php echo esc_url($image['url']); ?>">
                                   <?php 
                                    $image = get_field('product_gallery_2');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?> 
                                </a>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="full"> 
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                         <?php the_content(); ?>                    
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="product-form">
                        <form method="POST" action="#">
                            <h2><img src="<?php echo get_template_directory_uri(); ?>/images/form-icon.png" alt="GET Instant Qoute" />GET Instant Qoute</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6"> 
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6"> 
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Select Box Type</label>
                                        <select class="form-select">
                                            <option>....</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Type your Message</label>
                                        <textarea rows="5">Let us know what you need! Box dimensions, number of boxes you need, design – we can help.</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-rounded btn-primary">
                                        <i class="fab fa-telegram-plane"></i>SEND</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" id="singlebox">
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Starting.png" alt="Starting From 100 Boxes" />
                            <span>Starting From 100 Boxes</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Turnaround.png" alt="6 Days Turnaround" />
                            <span>6 Days Turnaround</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/die.png" alt="No Die and Plate Charge" />
                            <span>No Die and Plate Charge</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/printing.png" alt="High Quality Offset Printing" />
                            <span>High Quality Offset Printing</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="Request Free Template" />
                            <span>Request Free Template</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="singlebox-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/style.png" alt="Custom Design" />
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
                                I Need to Track my Order How do I Do it?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lacus molestie enim maximus consequat. Sed dignissim nibh vel molestie ornare. Vestibulum quis neque congue, commodo erat sit amet, suscipit erat. Morbi turpis ante, auctor quis semper ac, commodo et dolor. Mauris venenatis, justo et maximus convallis, dolor nulla ultricies purus, eget volutpat nunc purus ut magna. In non mollis turpis, vel blandit neque. Aenean ac nisi vel urna dapibus vulputate. Nullam volutpat volutpat felis, porta sagittis turpis viverra ut. Duis eget magna nec ipsum blandit ornare ut id felis.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can I Give You My Own Artwork For The Designing Of Custom Box?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                                welcome to select from. You will get every box style and design plus make design for your
                                own as well, so feel free to choose from them.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Do You Have Templates Or Samples Of Your Work/Boxes?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                                welcome to select from. You will get every box style and design plus make design for your
                                own as well, so feel free to choose from them.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 How Will I Know When My Order Has Been Shipped?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes, we have our archive of various templates of customized boxes. Which by the way you are 
                                welcome to select from. You will get every box style and design plus make design for your
                                own as well, so feel free to choose from them.</p>
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Why Do You Need Dimensions Of My Product?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Nam ante felis, aliquam sit amet mattis non, malesuada sit amet neque. Phasellus venenatis felis non interdum ultricies. Donec rhoncus est sed egestas facilisis. Maecenas justo urna, sagittis eget sollicitudin eu, aliquet id orci. Aliquam scelerisque diam ut varius imperdiet. Aenean et nisi in massa ultricies blandit vitae non nulla. Etiam lacinia nisl mauris, vitae accumsan augue mollis et. Integer a dui sem. Ut sit amet ex mi. Aenean quis diam sodales, consequat mauris id, congue arcu. Maecenas eget iaculis ligula, eget bibendum justo. Sed nec orci fringilla purus varius elementum vitae at lorem. Phasellus hendrerit leo tempor, ultrices eros et, posuere metus. Fusce ligula leo, molestie sit amet iaculis in, fringilla eu nisl. Cras suscipit nisl ut lacus egestas pellentesque. Proin pretium volutpat fringilla.</p>
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
                <div class="col-lg-3 col-md-6">
                    <div class="related">
                       <a  href="#" title="CBD BATH BOMB"><img src="<?php echo get_template_directory_uri(); ?>/images/products/product.png" alt="" />
                       <h3>CBD BATH BOMB</h3></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="related">
                        <a  href="#" title="CBD BATH BOMB"><img src="<?php echo get_template_directory_uri(); ?>/images/products/product.png" alt="" /></a>
                        <a  href="#" title="CBD BATH BOMB"><h3>CBD BATH BOMB</h3></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="related">
                        <a  href="#" title="CBD BATH BOMB"><img src="<?php echo get_template_directory_uri(); ?>/images/products/product.png" alt="" /></a>
                        <a  href="#" title="CBD BATH BOMB"><h3>CBD BATH BOMB</h3></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="related">
                        <a  href="#" title="CBD BATH BOMB"><img src="<?php echo get_template_directory_uri(); ?>/images/products/product.png" alt="" /></a>
                        <a  href="#" title="CBD BATH BOMB"><h3>CBD BATH BOMB</h3></a>
                    </div>
                </div>
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
                            <input type="text" name="text" placeholder="Email" />
                            <button type="button" class="btn btn-default">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
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
                                <div class="col-lg-6">
                                    <h2>Design that Inspires</h2>
                                </div>
                                <div class="col-lg-6">
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
<?php get_footer('cat'); ?>