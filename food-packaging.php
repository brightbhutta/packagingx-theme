<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="product_heading">
        <h2>Custom Food Packaging Boxes</h2>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="product_heading">
        <a href="/custom-food-packaging-boxes/">View All Products</a>
    </div>
</div>
<div class="carousel-wrapper">
    <div class="owl-carousel owl-theme" id="foodcarousels">
    <?php
        $args = array(
           'posts_per_page' => 23,
           'post_type'      => 'product', 
           'post_status'    => 'publish',
           'orderby'        => 'date',
           'order'          => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_taxonomy',
                    'field'    => 'slug',
                    'terms'    => 'food-beverage'
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
<script type="text/javascript">
    $('#foodcarousels').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          dots: true
        },
        767: {
          items: 2,
          dots: true
        },
        1024: {
          items: 4,
          dots: true
        }
      }
    });
</script>