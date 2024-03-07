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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<?php wp_head(); ?>
	<script>
	  	$(document).ready(function(){
	    $('a').click(function(){
	      var largeImage = $(this).attr('data-full');
	      $('.selected').removeClass();
	      $(this).addClass('selected');
	      $('.full img').hide();
	      $('.full img').attr('src', largeImage);
	      $('.full img').fadeIn();
	    }); // closing the listening on a click
	    $('.full img').on('click', function(){
	      var modalImage = $(this).attr('src');
	      $.fancybox.open(modalImage);
	    });
	  });
  </script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<header id="header-cat">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="top-bar-cat">
						<p>Free Shipping On All Orders!</p>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="menu-single">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-sm-6 col-md-6">
					<div class="top-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo/top-logo.png"  alt="Logo" />
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-sm-6 col-md-6">
	                <div class="top-menu">
	                	<nav class="navbar navbar-expand-lg navbar-light">
						    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						      <span class="navbar-toggler-icon"></span>
						    </button>
						    <div class="collapse navbar-collapse" id="navbarSupportedContent">
						      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
						        <ul class="nav navbar-nav">
						                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Box By Industry</a>
						                	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									            <li><a class="dropdown-item" href="#">Retail Boxes</a></li>
									            <li><a class="dropdown-item" href="#">Display Packaging</a></li>
									            <li><a class="dropdown-item" href="#">Food & Beverage</a></li>
									            <li><a class="dropdown-item" href="#">Gift Boxes</a></li>
									            <li><a class="dropdown-item" href="#">Metalized Boxes</a></li>
								          </ul>
						                </li>
						                <li class="nav-item"><a class="nav-link" href="https://packagingx.com/cosmetics-boxes/">Cosmetics Boxes</a></li>
						                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CBD Boxes</a>
						                	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									            <li><a class="dropdown-item" href="https://packagingx.com/category-page/">CBD Boxes</a></li>
									            <li><a class="dropdown-item" href="#">CBD Display Boxes</a></li>
									            <li><a class="dropdown-item" href="#">CBD Tincture Boxes</a></li>
									            <li><a class="dropdown-item" href="#">E-Liquid Boxes</a></li>
									            <li><a class="dropdown-item" href="#">Hemp Oil Boxes</a></li>
									            <li><a class="dropdown-item" href="#">Vape Cartridge Boxes</a></li>
								          </ul>
						                </li>
						                <li class="nav-item"><a class="nav-link" href="https://packagingx.com/eco-friendly-boxes/">Eco Friendly Boxes</a></li>
						                <li class="nav-item" id="boxstyle"><a class="nav-link dropdown-toggle"  id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Box by Style</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/bottom-closure.webp" alt="" />Bottom Closure</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/four-panel-cd-jacket.webp" alt="" />CD Covers</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/Fold-assemble.webp" alt="" />Fold & Assemble</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/bottom-closure.webp" alt="" />Showcase Exhibit</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/double-wall-tuck-top-featured.webp" alt="" />Top Closure</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/foot-lock-tray.webp" alt="" />Figure & Pattern</a></li>
									            <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/four-corner-tray.webp" alt="" />Rectangular</a></li>
								          </ul>
						                </li>
						                <a href="#" id="single-get"  title="GET A FREE QOUTE"><img src="<?php echo get_template_directory_uri(); ?>/images/single-box.png" alt="GET A FREE QOUTE" />GET A FREE QOUTE</a>
						                <a href="tel:1800-1777-888" id="single-phone"  title="1800-1777-888">1800-1777-888</a>
						            </ul>
						      </ul>
						    </div>
						</nav>
	                </div>
				</div>
			</div>
		</div>
	</section>