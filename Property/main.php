<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Royale Estate Group a Real Estate Category Bootstrap Responsive Website Template | Blog :: w3layouts</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->  
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Estate Group Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
		
		<style>
		    input[type="text"] {
                width: 40%;
                padding: 6px;
                margin: 0 0 1.8em 0;
                background: #fff;
                outline: none;
                border: 1px solid #DADADA;
}		
            input[type="password"] {
                width: 40%;
                padding: 6px;
                margin: 0 0 1.8em 0;
                background: #fff;
                outline: none;
                border: 1px solid #DADADA;
}		
            input[type="submit"] {
                font-size: 18px;
                letter-spacing: 2px;
                text-transform: uppercase;
                background: #232323;
                padding: 10px 30px;
                text-align: center;
                color: #fff;
                border: none;
                outline: none;
}
            h5.your-para {
                color: #888;
                font-size: 0.9em;
                margin: 0 0 5px 0px;
}
            a.z1 {
                color: #06a598;
}
           .col-sm-12.text-center {
                padding-top: 15px;
		   }
             
		</style>
		</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<!-- nav -->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				<div class="logo">
					<h1><a href="index.html">Royale Estate Group</a></h1>
				</div>	
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="properties.html">Properties</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><a href="typography.html">Short Codes</a></li>
						<li><a href="icons.html">Icons Page</a></li>
					  </ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li class="active"><a href="main.php">Login</a></li>
				  </ul>
				</div>
				<!-- /.navbar-collapse -->
			  </div>
			  <!-- /.container-fluid -->
			</nav> 
			<script src="js/nav.js"></script><!-- nav-js --> 
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
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
			<div class="col-md-12 text-center">
			   <h3 class="text-center find">Enter Login Details</h3><br>
				<form action='login.php' method='POST'>
				
	<h5 class="your-para">Username:&nbsp;&nbsp;<input type='text' name='username'><br><br></h5>
	<h5 class="your-para">Password:&nbsp;&nbsp;<input type='password' name='password'><br><br></h5>
		      <input type='submit' name="lgn" value='Log in '>	

</form>
<?php 
if(isset($_POST['lgn'])) {
$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$password)
{
	$connect= mysql_connect("localhost","root","") or die("Couldn't connect!");
	mysql_select_db("phplogin") or die("couldn't fintd db");
	$query = mysql_query("SELECT * FROM users WHERE username='$username'") ; 
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		echo ("successfully done..");
		header('Location: blog.html');
	}
	else
		die("That user doesn't exist");
}

}


?>
<div class="container">
    <div class="row">
	    <div class="col-sm-12 text-center">
		    <a href="registration.php">Don't Have any Account</a>
		</div>
	</div>
</div>

			</div>
			<div class="container">
			
			<div class="col-sm-6">
			<h3><a href="properties.html" class="z1"  >My Property</a></h3>
			</div>
			<div class="col-sm-6">
			<h3 style="margin-left:250px;"><a href ="submit.html" class="z1">Submit Property</a></h3>
			</div>
			</div>
			
		<div class="clearfix"> </div>
		</div>
	<!-- //blogs -->
	</div>
	</div>
<!-- //main-content -->
	<!-- footer -->
	<footer>	
		<!-- footer-top -->
		<div class="footer-top">
			<div class="container">
				<div class="col-md-6 footer-top-left">
					<h3><a href="index.html">Royale ESTATE GROUP</a></h3>
					<p> The homes are the graphics of the biological lacrimal glads. They continually bathe the corner,the tough outer layer of homes.</p>
					<ul class="fb_icons2">
						<li><a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twit" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="goog" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a class="pin" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a class="drib" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-mid">
					<h3>Our Company</h3>
					<ul>
						<li><a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
						<li><a href="about.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About</a></li>
						<li><a href="properties.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Properties</a></li>
						<li><a href="blog.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Blog</a></li>
						<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 adress-agile">
					<h3>Address</h3>
					<address>
						<ul>
							<li>Royale Estates</li>
							<li>53 Avenue Park</li>
							<li>Chandigarh </li>
							<li>Telephone : 01765-0000765</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info(at)estategroup.com</a></li>
						</ul>
						
					</address>				
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //footer-top -->
		<div class="w3layouts-copyright">
			<p class="footer">&copy; 2017 Estate Group. All Rights Reserved | Design by <a href="http://w3layouts.com/"> DaizySharma</a></p>
		</div>
	</footer>
	<!-- //footer -->
</body>
</html>