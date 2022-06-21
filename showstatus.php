<?php

session_start();

                   
$servername = "localhost";
$database = "covid_portal";
$user = "root";
$password = ""; // Use the correct password here
// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo " error";
    $ph=$_SESSION['phone_no'];
    $s = " SELECT val from status where $ph=phn";

   
    $result= mysqli_query($conn,$s);
    $status=mysqli_fetch_assoc($result);
    //$rows=$result->fetch_assoc()

    //$t=$rows['val'];
    $u=implode($status);
    echo $u;
   $_SESSION['st']=implode($status);
}

 ?>
  <!DOCTYPE html>
<html style="font-size: 16px;">
<style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

body {
    height: 40vh;
  display: flex;
  justify-content: center;
 align-items: center;
  padding: 5px;
 /* background-color: rgb(220, 234, 248);*/
  margin-bottom: 400px;
}
.container{
  max-width: 300px;
  width: 50%;
  /*background-color: #fff;*/
  padding: 25px 30px;
  border-radius: 5px;
  background-color :rgb(16, 33, 49,0.5);
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

.card {
    width: 300px;
    border: none;
    border-radius: 0
}

.fa-check {
    padding: 5px;
    border: 1px solid #C8C8C8;
    border-radius: 50%;
    font-size: 8px
}
</style>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" >
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 <div class="container d-flex justify-content-center">
 <div class="wrapper fadeInDown">
    <div id="formContent">
    <div class="card mt-5 px-4 pt-5 pb-4">
        <div class="name">
            <body>
            <form  action="#" method="POST">
            <h4> <?php echo $_SESSION['name']; ?></h4>
            <div class="d-flex flex-row"> <small class="text-muted"><?php echo $_SESSION['phone_no']; ?></small> </div>
            <div class="d-flex flex-row justify-content-between mt-4 pr-4"><br>
                <div class="d-flex flex-column align-items-center"><small class="text-muted">Status</small>
                    <h6><?php echo "Vaccinated"; ?></h6>
                </div>
</form>
</body>
                </div>
        </div>
            </div>
        </div>
    </div>
</div>



</html>


              
   
    
    
    