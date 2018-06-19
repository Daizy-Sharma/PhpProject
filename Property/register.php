<?php 

include 'header.php';

?>

<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Registration</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
<body>
<div class="container d1" style="border-style: groove; margin-bottom: 50px; margin-top: 50px;">
  <form method="POST" action="register.php">
  <center><h1>Registration Form</h1></center>
    <div class="row">
	    <div class="col-sm-6 col-sm-offset-3 d2" style=" margin-bottom: 30px;">
          
	            <div class="form-group">
		            <label  for="name"> First Name:</label>
			        <input type="text" name="firstname" class="form-control" >
		        </div>
		        <div class="form-group">
		            <label  for="lastname"> Last Name:</label>
			        <input type="text" name="lastname" class="form-control" >
		        </div>
		        <div class="form-group">
		            <label  for="Email">Email:</label>
			        <input type="email" name="email" class="form-control" >
		        </div>
		        <div class="form-group">
		            <label  for="gender"> Gender:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			         Male <input type="radio" name="gender" value="male">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Female <input type="radio" name="gender" value="female">
		        </div>
		        <div class="form-group">
		            <label  for="Age"> Age:</label>
			        <input type="text" name="age" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="mobilenumber"> Mobile Number:</label>
			        <input type="text" name="mobilenumber" class="form-control">
		        </div>
		        <div class="form-group">
		            <label  for="address"> Address:</label>
			        <input type="text" name="address" class="form-control">
		        </div>
				<div class="form-group">
		            <label  for="username"> Username:</label>
			        <input type="text" name="username" class="form-control">
		        </div>
				<div class="form-group">
		            <label  for="password"> Password:</label>
			        <input type="text" name="password" class="form-control">
		        </div>
				<div class="radio">
						<label><input type="radio" name="optradio" required="">I agree to the terms and conditions</label>  
						</div>
		        
		            <button type="submit" name="register" class="btn btn-default">Register</button>   
	 
	    </div>
    </div>
	</fieldset>
</form>
</div>
<?php
if(isset($_POST['register']))
{
$n1= $_POST['firstname'];
$n2= $_POST['lastname'];
$n3= $_POST['email'];
$n4= $_POST['gender'];
$n5= $_POST['age'];
$n6= $_POST['mobilenumber'];
$n7= $_POST['address'];
$n8= $_POST['username'];
$n9= $_POST['password'];

$sql ="INSERT INTO users(username, password, firstname, lastname, email, gender, age, mobilenumber, address)
VALUES('".$n8."', '".$n9."','".$n1."', '".$n2."', '".$n3."','".$n4."','".$n5."','".$n6."','".$n7."')";
$res= mysqli_query($conn,$sql);
	if($res)
		{?>
		<script>
			swal("Thanks a lot for Registering!", "Please login now with your details", "success");
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