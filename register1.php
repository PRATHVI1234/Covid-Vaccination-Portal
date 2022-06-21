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
if(isset($_POST['save']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$adhar_no=$_POST['adhar_no'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];

/*echo $name;
echo $email;
echo $phone_no;
echo $aadhar_no;
echo $gender;
echo $pass;
echo $dob;*/

//$enpass=md5($pass);

	$sql=" INSERT INTO registration(name, email, phone_no, adhar_no, gender, password, dob) VALUES('$name','$email','$phone_no','$adhar_no','$gender','$pass','$dob')";
    $rs=mysqli_query($conn,$sql);

if($rs)
{

    $_SESSION["flag"]=1;
     echo "register successfully";
    header('location:Login.php');
}
/*
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
*/

else
{
   $_SESSION["flag"]=0;
  echo "not register";
     
}
}
mysqli_close($conn);


?>