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
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive-menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
						<p>FREE SHIPPING ON ALL ORDERS! | COVID-19 UPDATE</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'navmenu.php'; ?>
	<?php $image = get_field( 'bg' );
	if ( !empty( $image ) ) { ?>
	<section id="cat-box-menu" style="background-image:url('<?php echo $image['url']; ?>');" >
		<?php } ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-sm-12 col-md-12 col-xs-12">
					<div class="cat-slide">
						<h1>Adorn your Product today with our Custom Top Closure Boxes</h1>
						<p>Whether you want Double Wall Tuck Top, Four Corner with Display Lid, Gable Bag Auto Bottom, Gable Bag Bottom Hanger or Self Lock Cake Boxes we will manufacture it for you. Simply put, whatever your product is we will produce the custom boxes for you according to the dimensions and shape you want.</p>
					</div>
				</div>
				<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12">
					<div class="">
						<div class="slide-img-sub">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="trusted">
                        <h2>Trusted by 1000+ businesses worldwide</h2>
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/metlife.svg"  alt="trusted" />
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/marriot.svg"  alt="trusted" />
                        <img src="https://packagingx.com/wp-content/uploads/2021/12/pandora-2.svg"  alt="trusted" />
                    </div>
                </div>
            </div>
        </div>
	</section>