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
else {
  echo "coonection succ";
   }
if(isset($_POST['sub']))
{
    $fname=$_POST['fname'];
    $ph_no=$_POST['ph'];
  $city=$_POST['city'];
   $eaddress=$_POST['eaddress'];
  
   $sql="INSERT INTO service_center( Sname, Sphone_no, S_email, city) VALUES ('$fname','$ph_no','$eaddress','$city') ";
   $rs=mysqli_query($conn,$sql);
   if($rs)
{
     echo "register successfully";
     header('location:admindashboard.php');
}
else
{
  echo "not register";
     
}

}
mysqli_close($conn);

?>