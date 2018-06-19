<?php
include 'header.php';
 $id="";
 $name="";
 $price="";
 $image="";
 $type="";
?>

 <script src="js/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Properties</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery_gds">
			<ul class="simplefilter ">
                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Commercial</li>
                <li data-filter="2">Residential</li>
                <li data-filter="3">Luxury</li>
            </ul>   
			  <div class="filtr-container " style="padding: 0px; position: relative; height: 1000px;">
			
<?php
			$sql = "SELECT * FROM property ";
			  $result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						
						$id=$row["id"];
						$name=$row["nameofproperty"];
						
						 $price=$row["price"];
						
						 $image=$row["propertyimage"];
						 $type=$row["type"];
						 ?>
					<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="<?php echo $type;?>, 5" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="<?php echo $image;?>" alt="property"  width="300px" height="300px"/>
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.php?id=<?php echo $id;?>">View Details</a></div>
						</div>	
						<div class="jm-item-title">Rs. <?php echo $price; ?></div>
						<a class="agile-its-property-title" href="property-details.php?id=<?php echo $id;?>"><?php echo $name;?></a>

						</div>
				    </div>	 
						
						<?php
					}
				}

				?>
          	   <div class="clearfix"> </div>
            </div>
		</div>
	</div>	
	</div>
	<!--//gallery-->
	</div>
<!-- //main-content -->

<?php
include 'footer.php';


?>
