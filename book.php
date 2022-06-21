<?php

session_start();

 ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.17.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <style>
  
    input[type=button], input[type=submit], input[type=reset]  {
  background-color: #1a2b31;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(30, 31, 66, 0.4);
  box-shadow: 0 10px 30px 0 rgba(132, 166, 184, 0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 15px;
}


</style>                
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-dc82"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-3671" data-image-width="1200" data-image-height="776">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-left u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-align-center u-form u-form-1">
                <form action="#" method="post" name="form">
            <label for="pin"> </label>
            <input type="text" name="pin" placeholder="enter pin code"style=" background-color: hsl(0, 0%, 96%);border: none;  color: #1158aa;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 5px;  width: 85%;  border: 2px solid #f6f6f6;  -webkit-transition: all 0.5s ease-in-out;  -moz-transition: all 0.5s ease-in-out;  -ms-transition: all 0.5s ease-in-out; -o-transition: all 0.5s ease-in-out;  transition: all 0.5s ease-in-out;  -webkit-border-radius: 5px 5px 5px 5px;  border-radius: 5px 5px 5px 5px;"  >
            <br>
            <br>
            <input type="submit" name="submit" value="submit">

          </form>
                </div>
                <div class="main-div">
            
                <div class="u-table u-table-responsive u-table-1">
                <?php 
                if(isset($_POST['submit']))
                { ?>
                  <h6>List Of Vaccination Centres</h6>
              <br>
              <br>
                  <table class="u-table-entity">
                  <thead>
                       <tr>
                          <th >Center Id</th>
                          <th>Address</th>
                          <th>Pincode</th>
                       </tr>
                   </thead>
                    <tbody class="u-table-body">

                    <?php
                     $servername = "localhost";
                     $database = "covid_portal";
                     $user = "root";
                     $password = ""; // Use the correct password here
                     // Create connection
                     $conn = mysqli_connect($servername, $user, $password, $database);
                     if (!$conn) {
                         //die("Connection failed: " . mysqli_connect_error());
                         echo " error";
                     }
                     else {
            //           echo "coonection succ";
                     }



                       $pin=$_POST['pin'];
                       $selectquery = "SELECT * FROM vaccine_center WHERE  pin=$pin";
                     $query = mysqli_query($conn,$selectquery);
                     $nums = mysqli_num_rows($query);
                     $res = mysqli_fetch_array($query);
                      while($res = mysqli_fetch_array($query))
                      {
                     ?>
                     <tr>
                       <td><?php echo $res['centerid']; ?></td>
                       <td><?php echo $res['center_name']; ?></td>
                       <td><?php echo $res['pin']; ?></td>
                     

                     </tr>
                     <?php
                  }
                }
                         ?>
                   
                    </tbody>
                  </table>
                </div>
                <p class="u-align-center u-custom-font u-font-playfair-display u-text u-text-1">Enter City PIN to get access of preferred vaccination Centers</p>
              </div>
            </div>
             </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div class="u-form u-form-2">
                <form action="book1.php" method="POST">
                <div class="input-box">
               <span class="details">Center ID  </span>
                <input type="text" name="id" placeholder="Enter Preferable Center Id" required>
               </div>
               <br>
               <br>
               <div class="input-box">
            <span class="details"> date</span>
            <input type="date" name="dat" placeholder="Enter your date of birth" required>
          </div>
          <br>
          <br>
          <div class="gender-details">
          <br>
          <span class="gender-title">SLOT TIME</span>
          <br>
          <div class="category">
            <br>
            <label for="dot-1">
            <span class="dot one"></span>
            <input type="radio" name="slot" value='9 AM-11 AM' id="dot-1">
            <span class="gender">9 AM-11 AM</span>
          
          </label>
          <br>
          <label for="dot-2">
            <span class="dot two"></span>
            <input type="radio" name="slot" value='12 AM-2PM' id="dot-2">
            <span class="gender">12 AM-2PM</span>
            
          </label>
          <br>
          <label for="dot-3">
            <span class="dot three"></span>
            <input type="radio" name="slot" value='2 PM- 5 PM' id="dot-3">
            <span class="gender">2 PM- 5 PM</span>
                   
          
            </label>
          </div>
        </div>
        <br>
        <br>
        <div class="button">
          <input type="submit" name="save" value="Submit">
        </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                  
                </div>
               
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-d660">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
  </body>
</html>