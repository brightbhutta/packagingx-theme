<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package packagingx
 */
?>
<section id="single-cat">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-xs-12">
				<div class="packaging-cat">
					<h5>You only have one chance to make a first impression</h5>
					<p>Let’s make it an amazing one.</p>
				</div>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/packagingx/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://twitter.com/packaging_x" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/packagingx/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.behance.net/packagingx1" title="Behance"><i class="fa fa-behance"></i></a></li>
						<li><a href="https://www.pinterest.com/thepackagingx" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/packagingx" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-xs-12">
				<div class="packaging-cat">
					<h6>Custom Packaging</h6>
					<ul>
						<li><a href="/cbd-packaging/">CBD Boxes</a></li>
						<li><a href="/cosmetics-boxes/">Cosmetic Boxes</a></li>
						<li><a href="/display-packaging/">Display Packaging</a></li>
						<li><a href="/eco-friendly-boxes/">Eco Friendly Boxes</a></li>
						<li><a href="/custom-food-packaging-boxes/">Food &amp; Beverage</a></li>
						<li><a href="/gift-boxes/">Gift Boxes</a></li>
						<li><a href="/metalized-boxes/">Metalized Boxes</a></li>
						<li><a href="/retail-boxes/">Retail Boxes</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-xs-12">
				<div class="packaging-cat">
					<h6>Other Products</h6>
					<ul>
						<li><a href="/product/custom-stickers/">Custom Stickers</a></li>
						<li><a href="/product/custom-labels/">Custom Labels</a></li>
						<li><a href="/product/custom-square-cut-labels/">Square Cut Labels</a></li>
						<li><a href="/custom-cd-covers/">CD Covers</a></li>
						<li><a href="https://packagingx.com/products/">View all</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-xs-12">
				<div class="packaging-cat">
					<h6>Company</h6>
					<ul>
						<li><a href="/about-us/">About Us</a></li>
						<li><a href="#">Chat with us</a></li>
						<li><a href="/contact-us/">Get a quote</a></li>
						<li><a href="/faqs">FAQS</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-xs-12">
				<div class="packaging-cat">
					<h6>Contact Us</h6>
					<ul>
						<li><a href="mailto:sales@packagingx.com">sales@packagingx.com</a></li>
						<li>NY, FL, PK, CN</li>
						<li>(914)-770-3205</li>
					</ul>
					<img src="https://packagingx.com/wp-content/uploads/2022/05/Icons.svg" alt="Icon" />
				</div>
			</div>
		</div>
	</div>
</section>
<section id="payment-cat">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="payment-cat">
					<p>Compatible with many popular payment methods.</p>
					<img src="https://packagingx.com/wp-content/themes/packagingx/images/payment.png" alt="payment" />
					<span><i class="fa fa-lock"></i>SSL 100% secure transactions.</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="subscribes">
					<h4>Subscribe and <span>GET 10% OFF</span> on Your <span>First ORDER!</span></h4>
					<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
					<p>By subscribing you agree to our terms and conditions and privacy policy</p>
				</div>
			</div>
		</div>
	</div>
</section>
<footer id="footer-cat">
	<div class="container">
		<div class="row">	
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
				<div class="copyright-cat">
					<p>Copyright © 2022 PackagingX All rights reserved.</p>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
				<div class="copyright-right">
					<ul>
						<li><a href="/terms-of-use/" title="Terms of Use">Terms of Use</a></li>
						<li><a href="/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
						<li><a href="#" title="Sitemap">Sitemap</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
	 	window.addEventListener('scroll', function() {
	      if (window.scrollY > 50) {
	        document.getElementById('navbar_top').classList.add('fixed-top');
	        nav_height = document.querySelector('nav').offsetHeight;
	        document.body.style.paddingTop = nav_height + 'px';
	      } else {
	        document.getElementById('navbar_top').classList.remove('fixed-top');
	        document.body.style.paddingTop = '0';
	      } 
	  });
	    var a = new StickySidebar('.sidebar', {
			topSpacing: 100,
			bottomSpacing: 20,
			containerSelector: '.container',
			innerWrapperSelector: '.sidebar__inner'
		});
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sticky-sidebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.izoomify.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=36527b7a-5b00-4b41-b203-89901b965211"> </script>
<!-- End of  Zendesk Widget script -->
</body>
</html>