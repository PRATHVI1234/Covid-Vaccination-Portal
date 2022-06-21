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
            }
            $phone=$_POST['num'];
           
            $stat=$_POST['state'];
            if(isset($_POST['save']))
            {
             $u="SELECT phn_no from slotbooking where phn_no='$phone' ";
              if($u)
              {
            $s ="INSERT INTO `status`(`phn`, `val`) VALUES( '$phone' , '$stat')";
            
            $rs=mysqli_query($conn,$s);
              }
            if($rs)
            {
                           
                 echo "updated successfully";
                
            }
         }
        
            mysqli_close($conn);     
  ?>