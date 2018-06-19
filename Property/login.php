<?php 
 include 'header.php';
 
 ?>
 		
		

<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Login</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- blogs -->
		<div class="agileits-blog-posts">
		<div class="container">
			<div class="col-md-12 str">
			   <h3 class="text-center find">Enter Login Details</h3><br>
				<form action='login.php' method='POST'>
				  <div class="row">
	              <div class="col-sm-6 col-sm-offset-3 d2" style=" margin-bottom: 30px;">
       <div class="form-group">
		            <label  for="username"> Username:</label>
			        <input type="text" name="username" class="form-control">
		        </div>
				<div class="form-group">
		            <label  for="password"> Password:</label>
			        <input type="text" name="password" class="form-control">
		        </div>
				 <button type="submit" name="register" class="btn btn-default">Login Now</button> 
 <a href="registration.php">Don't Have any Account</a>
				</div>
				</div>
				</form>
				
			</div>
			
<?php 
if( $_SESSION['username'] != null)
{
	?>
	<style>
	.str {
		display:none;
	}
	.str1 {
		
		display:block !important;
	}
	
	.as {
    border: 1px solid;
    background: black;
    color: white;
    padding: 20px;
    margin: 30px 0px;
}
.as a {
    color:white !important;	

}
	</style>
	
	<?php
	
}



if(isset($_POST['register'])) {
$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$password)
{
	
	  $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
	   $count = mysqli_num_rows($result);
      
	 if($count == 1) {
		  $_SESSION['username'] = $username;
         
         ?>
		<script>
			swal("Thanks a lot for Logging", "Please Visit to other Pages", "success");
			</script>
		<?php
		  header ('Location:login.php');
		   }
		   else {
        
		  ?>
		<script>
		  swal('Oops...','Your Login Name or Password is invalid','error');
		  </script>
		<?php
      }

}
}


?>





			<div class="container str1 text-center" style="display:none">
			 
			 <?php
			if( $_SESSION['username'] != null)
			{
				echo "<h3>Welcome ".  $_SESSION['username']."</h3>"; 
			}
			
			?>
			<h2> Choose Your Options</h2>  
			
			<div class="col-sm-6 as">
			<h3><a href="properties.php" class="z1"  >My Property</a></h3>
			</div>
			<div class="col-sm-6 as">
			<h3 ><a href ="submitproperty.php" class="z1">Submit Property</a></h3>
			</div>
			<div class="col-sm-12 text-center">
			<h3><a href="logout.php">Logout</a></h3>
			</div>
			
			</div>
			
		<div class="clearfix"> </div>
		</div>
	<!-- //blogs -->
	</div>
	</div>
	
	<?php
	 include 'footer.php';
	
	?>