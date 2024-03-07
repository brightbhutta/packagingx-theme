<?php /* Template Name: Page Get Quote */ ?>

<?php get_header('single'); ?>
<style type="text/css">
.contact-form {
    background: #fff;
    width: 70%;
    margin: 0 auto;
    border-radius: 10px;
}
.quote input {
    height: 42px;
    margin: 8px 0;
    padding: 0px 0 0 5px;
    border-radius: 10px;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #de5b53;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<section id="get">
	<div class="container contact-form">
	    <div class="contact-image">
	        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
	    </div>
	    <form method="post" action="#">
	        <h3>Drop Us a Message</h3>
	       <div class="row">
	            <div class="col-md-6">
	            	<div class="quote">
		                <div class="form-group">
		                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
		                </div>
		                <div class="form-group">
		                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
		                </div>
		                <div class="form-group">
		                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
		                </div>
		                <div class="form-group">
		                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
		                </div>
	               </div>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
	                </div>
	            </div>
	        </div>
	    </form>
	</div>
</section>
<?php get_footer(); ?>