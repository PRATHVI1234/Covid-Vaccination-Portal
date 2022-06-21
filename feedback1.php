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

if(isset($_POST['snd']))
{
$name=$_SESSION['name'] ;
$phone_no= $_SESSION['phone_no'];
$feed=$_POST['feed'];
$sql="INSERT INTO feedback(name, phone_no, feedbck)  VALUES('$name','$phone_no','$feed')";

$rs=mysqli_query($conn,$sql);
if($rs)
{
  echo "Feedback is Submitted";
  header('location:userdashboard.html');
}
else {
echo "Failed";  // code...
}
}

?>