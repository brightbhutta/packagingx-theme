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
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<?php wp_head(); ?>
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
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="cat-metalized">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-sm-6 col-md-6">
					<div class="top-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo/cat-logo.png"  alt="Category logo" />
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
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12">
					<div class="cat-slide">
						<h1>Custom Metalized Boxes</h1>
						<p>Customized Metalized Boxes that will definitely enhance the beauty of your product and will help out in standing out in the market ensuring packaging with finishing and sturdy look at a reasonable price. We are providing two unique categories of metalized boxes:</p>
					</div>
				</div>
				<div class="col-lg-5 col-sm-12 col-md-12 col-xs-12">
					<div class="row">
						<div class="cat-form">
							<form method="POST">
								<p>Already have a Quote?</p>
						      	<h2>LET US BEAT IT!</h2>
								<hr size="1" width="100%" color="black">  
				      			<div class="row">
				      				<div class="col-lg-6 col-md-6 col-sm-6"> 
				      					<div class="form-group">
						              		<label>Fist Name</label>
									        <input type="text" class="form-control" />
									    </div>
									</div>
								    <div class="col-lg-6 col-md-6 col-sm-6"> 
								    	<div class="form-group">
									  	    <label>Last Name</label>
							                <input type="text" class="form-control" />
						            	</div>
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
							            <input type="phone" class="form-control" />
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
									<div class="form-group">
				  			    </div>
			  					<div class="col-lg-12 col-md-12 col-sm-12">
			  						<div class="form-group"> 
									  	<label>Let Us Know What You Need!</label>
									  	<textarea rows="5">Box dimensions, number of boxes you need, design – we can help.</textarea>
								  </div>
			  					</div>
			  					<div class="col-lg-12 col-md-12 col-sm-12"> 
			  					 	<button type="button" class="btn btn-rounded btn-primary">
			  					 		<i class="fab fa-telegram-plane"></i>Send</button>
			  					</div>
						  </div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	</section>