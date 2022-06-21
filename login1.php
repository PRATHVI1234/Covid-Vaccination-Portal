<?php

session_start();

$servername = "localhost";
$database = "covid_portal";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo " error";
}
else {
  echo "coonection succ";
}
if(isset($_POST['log']))
{
  
$login=$_POST['login'];
$pass=$_POST['pass'];




$s = "select * from registration where phone_no = '$login' && password = '$pass'";
$result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);
  
  if($num == 1)
  {
  /*  $uadhar = $row['adhar_no'];
    $uphone = $row['phone_no'];
    $uemail = $row['email'];
    $udob = $row['dob'];*/
  
    //$rs = "select name from register where email = '$email'";
    //$sql = mysqli_query($conn, $rs);
    $row = mysqli_fetch_array($result);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username = $row["name"];
    $useraadhar = $row["adhar_no"];
    $useremail = $row["email"];
    $userdob = $row["dob"];
    $useremail=$row["email"];
    
    $_SESSION['email'] = $useremail;
    $_SESSION['name'] = $username;
    $_SESSION['adhar_no'] = $useraadhar;
   // $_SESSION['gender'] = $gender;
    $_SESSION['phone_no'] = $login;
   $_SESSION['dob'] = $userdob;
    header('Location:userdashboard.html');
  }
  else
  {
    
    echo "You are not registered. Kindly register !!";
    header('Location:register1.php');
  }
  
}
  mysqli_close($conn);

?>
