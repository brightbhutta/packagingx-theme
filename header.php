<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package packagingx
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive-menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KFQL4JQ');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFQL4JQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div class="wrapper">
	<section id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="top-bar">
						<p>FREE SHIPPING ON ALL ORDERS!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'navmenu.php'; ?>
	<section id="menubar">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-sm-12 col-md-12 col-xs-12 order-1">
					<div class="slide">
						<h1>We're more than just <strong>Packaging</strong></h1>
						<p>Helping you to brand your products with our premium cost-effective custom packaging. Whether it is retail  boxes, eco-friendly boxes, cosmetics boxes or any other custom printed boxes, We will make it for you.</p>
						<a href="/contact-us/" class="btn btn-primary" id="pick">Get Free Quote</a>
						<a href="#boxstyle" class="btn btn-primary" id="getfree">Explore All Products</a>
					</div>
				</div>
				<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12 order-2">
					<div class="slide-img">
						<img src="/wp-content/uploads/2022/06/Homepage-Slider-image-packagingx.jpg" alt="PackagingX Slider" />
					</div>
				</div>
			</div>
		</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/Starting.svg" alt="Starting From 100 Boxes" />
							<span>Starting From 100 Boxes</span>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/Days.svg" alt="6 Days Turnaround" />
							<span>6 Days Turnaround</span>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/No-die.svg" alt="No Die and Plate Charge" />
							<span>No Die and Plate Charge</span>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/High-Quality.svg" alt="High Quality Offset Printing" />
							<span>High Quality Offset Printing</span>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/Request-Template.svg" alt="Request Free Template" />
							<span>Request a Template</span>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 col-xs-6">
						<div class="custombox-img">
							<img src="https://packagingx.com/wp-content/uploads/2021/12/Sizes-and-Style.svg" alt="Custom Design" />
							<span>Custom Design Sizes & Style</span>
						</div>
					</div>
				</div>
			</div>
	</section>