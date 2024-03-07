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
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Karla:wght@400;500;600;700;800&display=swap" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<section id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="top-bar">
						<p>FREE SHIPPING ON ALL ORDERS! | COVID-19 UPDATE</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<header id="navbar_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-sm-6 col-md-6">
					<div class="top-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.svg"  alt="Home" />
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-sm-6 col-md-6">
	                <div class="top-menu">
	                	<?php include 'navmenu.php'; ?>
	                </div>
				</div>
			</div>
		</div>
	</header>
	<section id="menubar">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-sm-12 col-md-12 col-xs-12">
					<div class="slide order_2">
						<h1>We're more then just <strong>Packaging</strong></h1>
						<p>Our goal is to help you to brand your products with our  distinctive and cost-effective packaging services. Whether it's retail  boxes, eco-friendly boxes, cosmetics boxes or any other custom box, we can make it for you.</p>
						<a href="https://packagingx.com/contact-form/" class="btn btn-primary" id="pick">Get Free Qoute</a>
						<a href="#" class="btn btn-primary" id="getfree">Browse Products</a>
					</div>
				</div>
				<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12">
					<div class="slide-img order_1">
						<img src="/wp-content/uploads/2022/01/Image.jpg" alt="Slide" />
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