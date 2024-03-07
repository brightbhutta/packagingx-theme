<?php /* Template Name: Page Contact Form */ ?>

<?php get_header('products'); ?>
<section id="con">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-sm-12 col-md-12 col-xs-12">
				<div class="contact-slide">
					<h1>Request instant qoute for custom printed boxes</h1>
				</div>
			</div>
		</div>
	</div>
</section>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6"></div>
				<div class="col-lg-8 col-md-12">
					<div class="contact-form">
						<p>Fill out this form, we’ll quickly get back to you.</p>
						<?php
						if(isset($_POST['submit'])) {
						   $to = 'packagingx11@gmail.com';  
						   $from = "sales@packagingx.com";
						   $first_name = $_POST['first_name'];
						   $subject = 'Contact Form - Packaging X ';
						   $subject2 = 'Contact Form - Packaging X ';
						   $headers  = 'MIME-Version: 1.0' . "\r\n";
						   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						   $headers .= "From: ".$_POST['first_name']." <".$_POST['email'].">\r\n";
						   $headers2 .= "From: ".$_POST['first_name']." <".$_POST['email'].">\r\n"; 
						   $headers .= "Reply-To: ".$_POST["email"]."\r\n";
						   $message = "<table border='1' bgcolor='#fffce4' width='80%'>
						   		   <tr><th>Visiter:</th><th>Visiter Details</th></tr>
						           <tr><td><b>First Name:</b></td><td>".$_POST['first_name']."</td></tr>
						           <tr><td><b>Last Name:</b></td><td>".$_POST['last_name']."</td></tr>
						           <tr><td><b>Email:</b></td><td>".$_POST['email']."</td></tr>
						           <tr><td><b>Phone:</b></td><td>".$_POST['phone']."</td></tr>
						           <tr><td><b>Quantity 1:</b></td><td>".$_POST['quantity']."</td></tr>
						           <tr><td><b>Quantity 2:</b></td><td>".$_POST['quantity1']."</td></tr>
						           <tr><td><b>Box Types:</b></td><td>".$_POST['boxtypes']."</td></tr>
						           <tr><td><b>Message:</b></td><td>".$_POST['message']."</td></tr>
						           </table>" ;
						   	mail($to, $subject, $message, $headers);
						   	mail($from, $subject2, $message2, $headers2);
						   	echo "<p style='color:green;'>Mail Sent Successfully!. Thank you " . $first_name . ", we will contact you shortly.</p>";
						}
						?>
						<form action="" method="post" id="login" onsubmit="process(event)"  enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
						                <label>First name</label>
						                <input class="form-control" type="text" name="first_name" placeholder="e.g 'Karen'" required />
						                <span class="Error"></span>
				            		</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
						                <label>Last name</label>
						                <input class="form-control" type="text" name="last_name" placeholder="e.g. 'Doe'"/>
						                <span class="Error"></span>
				            		</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
						                <label>Email address</label>
						                <input class="form-control" type="text" name="email" placeholder="mail@website.com" required/>
						                <span class="Error"></span>
				            		</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
						                <label>Phone number</label>
						                <input class="form-control" id="phone" type="tel" name="phone" placeholder="(914) 770-3205" required />
						                <span class="Error"></span>
				            		</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
						                <label>Quantity 1</label>
						                <input class="form-control" type="text" name="quantity" placeholder="e.g. '1000 boxes'"/>
						                <span class="Error"></span>
				            		</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
						                <label>Quantity 2</label>
						                <input class="form-control" type="text" name="quantity1" placeholder="e.g. '5000 boxes'"/>
						                <span class="Error"></span>
				            		</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
						                <label>Select box type</label>
						                <select name="boxtypes" class="form-control form-select selectpicker show-tick">
										<option value="Other">Need consultation</option>
               						 	<option value="Bags">Bags</option>
                						<option value="Booklets Printing">Booklets Printing</option>
               							<option value="Bookmarks">Bookmarks</option>
                						<option value="Bottle Neckers">Bottle Neckers</option>
                						<option value="Brochures">Brochures</option>
                						<option value="Bumper Stickers">Bumper Stickers</option>
                						<option value="Business Cards">Business Cards</option>
                						<option value="Bakery Boxes">Bakery Boxes</option>
                						<option value="Bath Bomb Boxes">Bath Bomb Boxes</option>
                						<option value="Beverage Boxes">Beverage Boxes</option>
										<option value="Book Boxes">Book Boxes</option>
                						<option value="CD/DVD Boxes">CD/DVD Boxes</option>
                						<option value="Cube Boxes">Cube Boxes</option>
                						<option value="Coffee Boxes">Coffee Boxes</option>
                						<option value="Cream Boxes">Cream Boxes</option>
                						<option value="Cake Boxes">Cake Boxes</option>
                						<option value="Candy Boxes">Candy Boxes</option>
                						<option value="Chinese Food Boxes">Chinese Food Boxes</option>
                						<option value="Chinese Takeout Boxes">Chinese Takeout Boxes</option>
			                           	<option value="Cosmetic Boxes">Cosmetic Boxes</option>
			                            <option value="Calendars">Calendars</option>
			                            <option value="Cannabis Packaging">Cannabis Packaging</option>
			                            <option value="Cannabis Chocolate Boxes">Cannabis Chocolate Boxes</option>
			                            <option value="Cannabis Counter Display Boxes">Cannabis Counter Display Boxes</option>
			                            <option value="Cannabis Boxes">Cannabis Boxes</option>
			                            <option value="Carbonless Forms">Carbonless Forms</option>
			                            <option value="Catalogs">Catalogs</option>
			                            <option value="CD Jackets">CD Jackets</option>
			                            <option value="Cardboard Boxes">Cardboard Boxes</option>
			                            <option value="Corrugated Boxes">Corrugated Boxes</option>
			                            <option value="Clings">Clings</option>
			                            <option value="Cereal Boxes">Cereal Boxes</option>
										<option value="Candle Boxes">Candle Boxes</option>
			                            <option value="Candle Gift Boxes">Candle Gift Boxes</option>
			                            <option value="CBD Boxes">CBD Boxes</option>
			                            <option value="CBD Bath Bomb Boxes">CBD Bath Bomb Boxes</option>
			                            <option value="CBD Chocolate Boxes">CBD Chocolate Boxes</option>
			                            <option value="CBD Tincture Boxes">CBD Tincture Boxes</option>
			                            <option value="CBD Display Boxes">CBD Display Boxes</option>
			                            <option value="CBD Packaging">CBD Packaging</option>
			                            <option value="Decals">Decals</option>
			                            <option value="Door Hangers">Door Hangers</option>
			                            <option value="Envelopes">Envelopes</option>
			                            <option value="Eyeshadow Boxes">Eyeshadow Boxes</option>
			                            <option value="Eyeliner Boxes">Eyeliner Boxes</option>
			                            <option value="E-Liquid Packaging">E-Liquid Packaging</option>
			                            <option value="E-Juice Boxes">E-Juice Boxes</option>
			                            <option value="Foundation Boxes">Foundation Boxes</option>
			                            <option value="Food Boxes">Food Boxes</option>
			                            <option value="Folders">Folders</option>
			                            <option value="Flyers">Flyers</option>
			                            <option value="Greeting Cards">Greeting Cards</option>
			                            <option value="Hemp Packaging">Hemp Packaging</option>
			                            <option value="Hemp Milk Packaging Boxes">Hemp Milk Packaging Boxes</option>
			                            <option value="Hemp Boxes">Hemp Boxes</option>
			                            <option value="Hairspray Boxes">Hairspray Boxes</option>
			                            <option value="Hair Extension Boxes">Hair Extension Boxes</option>
			                            <option value="Invitational Cards">Invitational Cards</option>
			                            <option value="Kraft Boxes">Kraft Boxes</option>
			                            <option value="Kraft Gift Boxes">Kraft Gift Boxes</option>
			                            <option value="Labels">Labels</option>
			                            <option value="Letterheads">Letterheads</option>
			                            <option value="Lip Balm Boxes">Lip Balm Boxes</option>
			                            <option value="Lip Gloss Boxes">Lip Gloss Boxes</option>
			                            <option value="Lipstick Boxes">Lipstick Boxes</option>
			                            <option value="Lotion Boxes">Lotion Boxes</option>
			                            <option value="Mailer Boxes">Mailer Boxes</option>
			                            <option value="Magazines">Magazines</option>
			                            <option value="Menus">Menus</option>
			                            <option value="Marijuana Packaging">Marijuana Packaging</option>
			                            <option value="Marijuana Boxes">Marijuana Boxes</option>
			                            <option value="Marijuana Edibles Packaging">Marijuana Edibles Packaging</option>
			                            <option value="Note pads">Note pads</option>
			                            <option value="Nail Polish Boxes">Nail Polish Boxes</option>
			                            <option value="Packaging Boxes">Packaging Boxes</option>
			                            <option value="Pillow Boxes">Pillow Boxes</option>
			                            <option value="Post Pads">Post Pads</option>
			                            <option value="Posters">Posters</option>
			                            <option value="Printed CBD Brownies Boxes">Printed CBD Brownies Boxes</option>
			                            <option value="Perfume Boxes">Perfume Boxes</option>
			                            <option value="Pre-Roll Boxes">Pre-Roll Boxes</option>
			                            <option value="Pre-roll Joint Boxes">Pre-roll Joint Boxes</option>
			                            <option value="Pre-Rolls Packaging">Pre-Rolls Packaging</option>
			                            <option value="Pyramid Boxes">Pyramid Boxes</option>
			                            <option value="Rack Cards">Rack Cards</option>
			                            <option value="Rolodex Cards">Rolodex Cards</option>
			                            <option value="Retail Boxes">Retail Boxes</option>
			                            <option value="Soap Boxes">Soap Boxes</option>
			                            <option value="Soap Boxes">Soap Boxes</option>
			                            <option value="Stickers">Stickers</option>
			                            <option value="Table Tents">Table Tents</option>
			                            <option value="Tags">Tags</option>
			                            <option value="Tickets">Tickets</option>
			                            <option value="Toy Boxes">Toy Boxes</option>
			                            <option value="Vinyl Banners">Vinyl Banners</option>
			                            <option value="Vape Packaging">Vape Packaging</option>
			                            <option value="Vape Boxes">Vape Boxes</option>
			                            <option value="Vape Oil Packaging Boxes">Vape Oil Packaging Boxes</option>
			                            <option value="Vape Gift Boxes">Vape Gift Boxes</option>
			                            <option value="White Boxes">White Boxes</option>
						                </select>
				            		</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
						                <label>Describe your requirement *</label>
						                <textarea rows="5" name="message" placeholder="Let us know what you need! Box dimensions, number of boxes you need, design, a link to download your reference images? – We can help."></textarea>
						            </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" class="btn btn-primary"  id="send" name="submit" value="Submit" />
									</div>
								</div>
							</div>
						</form>
					</div>
				   <div class="col-lg-12 col-md-12">
					  <div class="call-us">
						<h2>Need Help Now?</h2>
						<h4>Call Our Team At (914) 770-3205</h4>
						<p>Mon - Fri 10:00 AM - 08:00 PM EST</p>
						<a href="tel:(914)-770-3205">Call Us</a>
					 </div>
				   </div>
				</div>
			</div>
		</div>
</section>
<script type="text/javascript">
	$(document).ready(function () {
		const phoneInputField = document.querySelector("#phone");
	    const phoneInput = window.intlTelInput(phoneInputField, {
	     utilsScript:
	       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
	   });
   });
</script>
<?php get_footer('cat'); ?>