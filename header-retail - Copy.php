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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Karla:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200;400;600;700;900&display=swap" rel="stylesheet">	
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
	<?php include 'navmenu.php'; ?>
	<section id="cat-retail">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12">
					<div class="cat-slide">
						<h1>Elegant and Appealing Custom Retail Packaging</h1>
						<p>From retail cardboard boxes on shelves to personalized or custom shopping bags, we can help you in creating an experience that your consumers will like both when they enter the store or when they leave with a product in hand.</p>
					</div>
				</div>
					<div class="trusted">
                        <h2>Trusted by 1,000s Of Happy Customers</h2>
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/old-spice-2-1.svg"  alt="trusted"/>
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/marriot.svg"  alt="trusted" />
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/pandora-2.svg"  alt="trusted" />
                    </div>
					</div>
				</div>
			</div>
	</section>