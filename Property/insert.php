<?php

$servername ="localhost";
$user= "root";
$pass="";
$db = "submit";

$conn= mysqli_connect($servername, $user, $pass, $db);

if($conn)
{
	echo "connection success";
	
}
else {
   die(mysqli_error($conn));
}

$n1= $_POST['n1'];
$n2= $_POST['n2'];
$n3= $_POST['n3'];
$n4= $_POST['n4'];
$n5= $_POST['n5'];
$n6= $_POST['n6'];
$n7= $_POST['n7'];
$n8= $_POST['n8'];

$sql ="INSERT INTO submit1(nameofproperty, shortdescription, fulldescription, price, numberofbedroom,numberofbathrooms, parking, setofgarden) VALUES('".$n1."', '".$n2."', '".$n3."','".$n4."','".$n5."','".$n6."','".$n7."','".$n8."')";
$t= mysqli_query($conn,$sql);
if($t)
{
	echo "Property Submitted Succesfully";
}
else{
	echo mysqli_error($conn);
}

?>