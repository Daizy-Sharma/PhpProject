<?php
include 'header.php';
?>
<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Submit Property</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->

<div class="container " style="border-style: groove; padding:20px; margin-bottom: 50px; margin-top: 50px;">
  <form enctype="multipart/form-data" method="POST" action="submitproperty.php">
  <h1 class="text-center">Submit Property</h1>
    <div class="row">
       
	    <div class="col-sm-6 col-sm-offset-3 ">
          
	            <div class="form-group">
		            <label  for="name"> Name of Property:</label>
			        <input type="text" name="n1" class="form-control">
		        </div>
		        
		        <div class="form-group">
		            <label  for="fulldescription"> Full Description:</label>
			        <textarea name="n2" class="form-control"></textarea>
		        </div>
		        <div class="form-group">
		            <label  for="Price"> Price:</label>
			        <input type="text" name="n3" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="No.ofbedroom"> Number of Bedroom:</label>
			        <input type="text" name="n4" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="No. of bathrooms"> Number of bathrooms/ensuites:</label>
			        <input type="text" name="n5" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="parking"> Parking:</label>
			        <input type="text" name="n6" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="size of garden"> Size of garden/outside space:</label>
			        <input type="text" name="n7" class="form-control">
		        </div>
				
		        <div class="form-group">
		            <label  for="size of garden"> Seller's Name</label>
			        <input type="text" name="n8" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="size of garden"> Contact No</label>
			        <input type="text" name="n9" class="form-control">
		        </div>
				<div class="form-group">
		            <label  for="size of garden"> Property Type</label>
			        <select  name="n10" class="form-control">
					<option value="1">Commercial</option>
					<option value="2">Residential</option>
					<option value="3">Luxary</option>
					
					</select>
		        </div>
				<div class="form-group">
				  <label  for="size of garden"> Select Property image</label>
				<input name="image" accept="image/jpeg" type="file">
				</div>
		            <button type="submit"  name="sbn" class="btn btn-default">Submit Property</button>   
	 
	    </div>
    </div>
</form>
</div>

<?php

if(isset($_POST['sbn']))
{
$n1= $_POST['n1'];
$n2= $_POST['n2'];
$n3= $_POST['n3'];
$n4= $_POST['n4'];
$n5= $_POST['n5'];
$n6= $_POST['n6'];
$n7= $_POST['n7'];
$n8= $_POST['n8'];
$n9= $_POST['n9'];
$n10 =$_POST['n10'];
 move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
   

     $file="images/".$_FILES["image"]["name"];
$sql ="INSERT INTO property(nameofproperty, fulldescription, price, numberofbedroom, numberofbathrooms,
parking, setofgarden, sellername, contact, propertyimage, type)
VALUES('".$n1."', '".$n2."','".$n3."', '".$n4."', '".$n5."','".$n6."','".$n7."','".$n8."','".$n9."', '".$file."', '".$n10."')";
$res= mysqli_query($conn,$sql);
	if($res)
		{?>
		<script>
			swal("Thanks a lot for uploading", "Please see the details in properties", "success");
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