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

if(isset($_POST['save']))
{
    $cname=$_POST['center'];
    $ph_no=$_POST['phn'];
  $pin=$_POST['pin'];
 
  
   $sql="INSERT INTO vaccine_center ( center_name, C_contact, pin ) VALUES ('$cname','$ph_no','$pin') ";

   $rs=mysqli_query($conn,$sql);
   if(!$rs)
{
     echo " not register ";
}
else {
    echo " succ";
    header('location:admindashboard.php');
     }

    }
mysqli_close($conn);


?>
    
    
    