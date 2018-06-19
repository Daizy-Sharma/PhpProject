<?php 
include 'header.php';
?>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Property Details</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<?php
 $id=$_GET["id"];
 $name="";
 $desc="";
 $price="";
 $bed="";
 $bath="";
 $park="";
 $garden="";
 $seller="";
 $contact="";
 $image="";
 
 if($id!= null)
 {
	   $sql = "SELECT * FROM property where id='".$id."'";
			  $result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						
						$name=$row["nameofproperty"];
						 $desc=$row["fulldescription"];
						 $price=$row["price"];
						 $bed=$row["numberofbedroom"];
						 $bath=$row["numberofbathrooms"];
						 $park=$row["parking"];
						 $garden=$row["setofgarden"];
						 $seller=$row["sellername"];
						 $contact=$row["contact"];
						 $image=$row["propertyimage"];
						 $type=$row["type"];
						
						
					}
				}
?>
	<div class="main-content">
		<!-- property-details -->
		<div class="agileits-property-details">
			<div class="container">
<div class="col-md-6">

<img src="<?php echo $image; ?>"  class="img-responsive">

</div>					
					<div class="col-md-6 ins-details">
							<div class="ins-name">
								<h3><?php echo $name; ?></h3>
								<h6>Rs. <?php echo $price; ?></h6>
								<p><?php echo $desc; ?></p>
								
							</div>
							<div class="span span1">
								<p class="left">Number of bedrooms</p>
								<p class="right">: <?php echo $bed; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Number of bathrooms/ensuites</p>
								<p class="right">: <?php echo $bath; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span1">
								<p class="left">Parking</p>
								<p class="right">: <?php echo $park; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Size of garden/outside space</p>
								<p class="right">: <?php echo $garden; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span1">
								<p class="left">Seller Name</p>
								<p class="right">: <?php echo $seller; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span1">
								<p class="left">Contact No.</p>
								<p class="right">: <?php echo $contact; ?></p>
								<div class="clearfix"></div>
							</div>
							<div class="span span4">
								<p class="left">Property Type.</p>
								<p class="right">: <?php if($type==1)
								{
									echo "Commercial";
								}
else if($type==2)
{
	echo "Residential";
}
else{
	echo "Luxary";

	
}	?></p>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>			
			</div>
		</div>
		
	</div>

<?php				
 }
 else {
	 ?>
	 <div class="container text-center " style="margin:50px 0px;">
	 <h2>No Property To display</h2>
	 </div>
 <?php
 }
 
 ?>
	<!-- main-content -->
<!-- //main-content -->
	<!-- footer -->
	<?php 
	
	include 'footer.php';
	
	?>