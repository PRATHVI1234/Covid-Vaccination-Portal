<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$database_name="covid_portal";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    echo "fail";
  die("Connection Failed:" . mysqli_connect_error());
}

  $slot = $_POST['slot'];
  $date = $_POST['dat'];
  $cid=$_POST['id'];
  $name=$_SESSION['name'] ;
  $phone_no=$_SESSION['phone_no'];
 


  $sql_query ="INSERT INTO slotbooking(name, phn_no, slot, date, cid) VALUES ('$name','$phone_no','$slot','$date','$cid')";

  if(mysqli_query($conn, $sql_query))
  {
   
    echo "Your slot has been booked !";
    header('location:userdashboard.html');
  }
  else
  {
      echo "Your slot is already booked";
  }
  mysqli_close($conn);

?>

                   