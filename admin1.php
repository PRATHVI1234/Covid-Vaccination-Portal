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
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$enpass=md5($pass);//to make password secure
$s = "select * from admin where a_name = '$uname' && paswrd = '$pass'";
  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);
  if($num == 1)
  {
    
    $row = mysqli_fetch_array($result);
    $uname = $row["a_name"];
    $pass = $row["paswrd"];
    
    
    header('location: admindashboard.php');
    echo"login done";
  }
  else
  {
    
    echo "You are not registered as admin !!";
    header('location:Login1.php');
  }
  mysqli_close($conn);
?>
