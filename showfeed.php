                     
                  <?php
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

                    $s="SELECT name,phone_no,feedbck from feedback";
                    
                   
                    $result = $conn->query($s);
                   if ($result->num_rows > 0) {
                     
                    ?>
                   
                    <!DOCTYPE html>
                    <html lang="en">
                      
                    <head>
                        <meta charset="UTF-8">
                        <title>feedbacks</title>
                        <!-- CSS FOR STYLING THE PAGE -->
                        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>                    </head>
                      
                    <body>
                   <form  class="u-clearfix u-form-spacing-33 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form"> 
                        <section>
                           
                            <!-- TABLE CONSTRUCTION-->
                            <table>
                                <tr>
                                   
                             <th  >name</th>
                             <th>phone no</th>
                             <th >Feedback</th>
                                   
                                </tr>
                                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                                <?php   // LOOP TILL END OF DATA 
                                    while($rows=$result->fetch_assoc())
                                    {
                                 ?>
                                <tr>
                                    <!--FETCHING DATA FROM EACH 
                                        ROW OF EVERY COLUMN-->
                                    <td><?php echo $rows['name'];?></td>
                                    <td><?php echo $rows['phone_no'];?></td>
                                    <td ><?php echo $rows['feedbck'];?></td>
                                  
                                </tr>
                                <?php
                                    }
                                }
                                 ?>
                            </table>
                        </section>
                            </form>
                    </body>
                      
                    </html>
   
     