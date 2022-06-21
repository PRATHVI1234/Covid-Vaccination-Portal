<?php

session_start();

$servername = "localhost";
$database = "covid_portal";
$user = "root";
$password = ""; 
// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo " error";
}


    $center=$_POST['center'];
   
  $pin=$_POST['pin'];


   $sql="INSERT INTO vaccine_center( `center_name`, `pin`) VALUES ('$center','$pin') ";

   $rs=mysqli_query($conn,$sql);
   if($rs)
{
    header('location:admindashboard.php');
}
else {
   
    echo " not register ";
}
    
    
mysqli_close($conn);


?>
    
    
    