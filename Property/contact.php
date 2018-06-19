
<?php
include 'header.php';

?>	

<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Contact Us</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- contact-section -->
	<!--contact-->
	 <div class="w3layouts-contact-section">
	    <div class="container">
				<div class="agileits-contact-main">
					<div class="col-md-6 w3ls-map">
						<h2 class="loc">Our Location</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-6 wthree-contact-in">
						<h2 class="sed-para"> Contact Information</h2>
						
						<div class="w3-address"> 
								<address>
								  <strong> Royale Estates</strong><br>
								  53 Avenue Park, Chandigarh<br>
								   Co. Estate Group<br>								  
								  <abbr title="Phone">P:</abbr> 01765-0000765								  
								  </address>
								<address>
								  <strong>Email</strong><br>
								  <a href="mailto:info(at)estategroup.com">info(at)estategroup.com</a>
							   </address>
						  </div>
					</div>
						<div class="clearfix"> </div>
			      </div>
				 <div class="agileinfo-contact-bottom">
		        <h3 class="text-center find">Send Us Your Message</h3>
				
				
							<form action="contact.php" method="POST">
			   <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Your Name:</p>
								<input type="text" placeholder="" name="name" required="" />
								<p class="your-para">Your Mail:</p>
								<input type="text" placeholder="" name="email" required="" />
								<p class="your-para">Phone:</p>
								<input type="text" placeholder="" name="tel" required="" />
								<p class="your-para">Company Name:</p>
								<input type="text" placeholder="" name="cname" required="" />		
				</div>
				  <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Subject:</p>
								<input type="text" placeholder="" name="sub" required="" />
								<p class="your-para">Your Message:</p>
								<textarea placeholder="" name="message" required=""></textarea>
								<div class="send">
									<input type="submit" name="send" value="Send" >
								</div>			
				</div>
				<div class="clearfix"> </div>
							</form>	
			</div>
	   </div>
     </div>
<!--//contact-->

<!-- contact-section  -->

	</div>




<?php
if(isset($_POST['send']))
{
	$n1= $_POST['name'];
	$n2= $_POST['email'];
	$n3= $_POST['tel'];
	$n4= $_POST['cname'];
	$n5= $_POST['sub'];
	$n6= $_POST['message'];
	$sql ="INSERT INTO contact(name, email, phone, cname, subject, message)
VALUES('".$n1."', '".$n2."','".$n3."', '".$n4."', '".$n5."','".$n6."')";
$res= mysqli_query($conn,$sql);
	if($res)
		{?>
		<script>
			swal("Thanks a lot ", "Your Message has been sent", "success");
			</script>
			
		<?php
		
		
		
		}
		else {
			?>
		<script>
		  swal('Oops...','Something went wrong!','error');
			</script>
		<?php
			
		}
	
	
}


include 'footer.php';

?>	