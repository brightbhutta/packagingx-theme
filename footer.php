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
?>	<section id="widget">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="packaging">
						<h3>Custom Packaging</h3>
						<ul>
							<li><a href="/cbd-box/">CBD Packaging Boxes</a></li>
							<li><a href="/cosmetics-boxes/">Cosmetic Boxes</a></li>
							<li><a href="/display-packaging/">Display Packaging</a></li>
							<li><a href="/eco-friendly-boxes/">Eco Friendly Boxes</a></li>
							<li><a href="/food-beverage/">Food and Beverage</a></li>
							<li><a href="/gift-boxes/">Gift Boxes</a></li>
							<li><a href="/metalized-boxes/">Metalized Boxes</a></li>
							<li><a href="/retail-boxes/">Retail Boxes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="packaging">
						<h3>Other Products</h3>
						<ul>
							<li><a href="/custom-stickers/">Custom Stickers</a></li>
							<li><a href="/custom-labels/">Custom Labels</a></li>
							<li><a href="/custom-square-cut-labels/">Square Cut Labels</a></li>
							<li><a href="/custom-cd-covers/">CD Covers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="packaging">
						<h3>More</h3>
						<ul>
							<li><a href="/about-us/">About Us</a></li>
							<li><a href="#">Chat with us</a></li>
							<li><a href="/contact-form/">Get a quote</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="/faqs">FAQs</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="packaging">
						<h3>Contact Us</h3>
						<p> NY, FL, PK, CN</p>
						<p> 1-800-725-9660</p>
						<ul>
							<li><a href="mailto:sales@packagingx.com">sales@packagingx.com</a></li>
						</ul>
					</div>
					<div class="social">
						<ul>
							<li><a href="https://www.facebook.com/packagingx/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/packaging_x" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="payment">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="payment">
						<h1>Payment Methods</h1>
						<p>Compatible with many popular payment methods.</p>
						<img src="<?php echo get_template_directory_uri(); ?>/images/payment.png" alt="payment" />
						<p>SSL 100% Secure Transactions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="copyright">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/footer-logo.png" alt="Footer Logo" />
						<p>Copyright © 2021 PackagingX All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(){
	 	window.addEventListener('scroll', function() {
	      if (window.scrollY > 50) {
	        document.getElementById('navbar_top').classList.add('fixed-top');
	        navbar_height = document.querySelector('.navbar').offsetHeight;
	        document.body.style.paddingTop = navbar_height + 'px';
	      } else {
	        document.getElementById('navbar_top').classList.remove('fixed-top');
	        document.body.style.paddingTop = '0';
	      } 
	  });
	}); 
	</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.izoomify.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=36527b7a-5b00-4b41-b203-89901b965211"> </script>
<!-- End of  Zendesk Widget script -->
</body>
</html>