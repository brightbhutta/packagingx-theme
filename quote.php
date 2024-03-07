<div class="row" id="quote_section">
    <div class="col-lg-7 col-md-8 col-xs-12">
        <div class="quote_area">
            <h2>Get Instant Free Qoute</h2>
            <p>Getting great custom packaging should not have to be complicated. At PackagingX, we aim to go beyond simple with custom printed boxes tailored to your brand.</p>
            <ul>
                <li>Get personalised agency-like support from actual design and packaging experts.</li>
                <li>PackagingX has all kinds of paperboard packaging boxes and displays, so you can find the right ones for your needs.</li>
                <li>Explore the flexibility of packaging solutions and the limits of construction and design.</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-5 col-md-4 col-xs-12">
        <div class="quote_area_form">
            <h4>Fill in your details</h4>
            <form method="POST" action="" id="login" onsubmit="process(event)" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="John Doe" required/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" id="phones" type="tel" name="phone" placeholder="000-1111-2222" required/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="email@website.com" required/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="3" spellcheck="false" name="message" placeholder="Let us know your box requirement." required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="submit" id="quote_area_form" class="btn btn-rounded btn-primary fa fa-telegram-plane" name="submit" value="Request Quotation" />
                        </div>
                    </div>
                </div>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                   $to = 'packagingx11@gmail.com';  
                   $from = "sales@packagingx.com";
                   $fullname = $_POST['fullname'];
                   $phone = $_POST['phone'];
                   $email = $_POST['email'];
                   $message = $_POST['message'];
                   $headers  = 'MIME-Version: 1.0' . "\r\n";
                   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                   $headers .= "From: ".$_POST['fullname']." <".$_POST['email'].">\r\n";
                   $headers2 .= "From: ".$_POST['fullname']." <".$_POST['email'].">\r\n"; 
                   $headers .= "Reply-To: ".$_POST["email"]."\r\n";
                   $message = "<table border='1' bgcolor='#fffce4' width='80%'>
                           <tr><th>Visiter:</th><th>Visiter Details</th></tr>
                           <tr><td><b>Full Name:</b></td><td>".$_POST['fullname']."</td></tr>
                           <tr><td><b>Phone:</b></td><td>".$_POST['phone']."</td></tr>
                           <tr><td><b>Email:</b></td><td>".$_POST['email']."</td></tr>
                           <tr><td><b>Message:</b></td><td>".$_POST['message']."</td></tr>
                           </table>" ;
                    mail($to,  $message, $headers);
                    mail($from, $message2, $headers2);
                    echo "<p style='color:green;'>Mail Sent Successfully!. Thank you " . $fullname . ", we will contact you shortly.</p>";
                }
                ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        const phoneInputField = document.querySelector("#phones");
        const phoneInput = window.intlTelInput(phoneInputField, {
         utilsScript:
           "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
       });
   });
</script>