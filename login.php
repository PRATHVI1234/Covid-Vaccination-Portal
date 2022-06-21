<?php

session_start();

 ?>
 <!DOCTYPE html>
 
 <div style="margin-top:0.0em;width:500px" >
 <h1 style=" font-size:60px ; color:white;font-family: Lucida Handwriting;" > Boost   The   Immune !</h1>
</div>
 
<br><br>
<div class="wrapper fadeInDown">
    <div id="formContent"><br>
      <!-- Tabs Titles -->
      <h2 class="active" style="margin-left:5.5em" >User Login !</h2>
      <a class="inactive underlineHover" href="register.php" > Register</a><br><br>
      <link rel="stylesheet"  href="login.css">
      
  
      <!-- Icon -->
      
    
      <!-- Login Form -->
      <form action="login1.php" method="POST"><br><br>
        <input type="text" id=" Enter Phone Number" class="fadeIn second" name="login" placeholder="Enter Phone Number"><br>
        <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="password"><br><br><br>
        <input type="submit" class="fadeIn fourth" name="log" value="Log IN">
      </form>
  
      <div class="fadeIn first">
        <a class="inactive underlineHover" href="admin.php"> Admin Login !!</a>
      </div>
      <br>
      <!-- Remind Passowrd -->
     <!-- <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>-->
  
    </div>
  </div>
  <div style="flex-direction: row;justify-content: center; width:900px" >
<header>
<a class="inactive underlineHover"  href="about.html" style=" font-size:20px;" > <b> HELPLINE</b>  </a> 
<a class="inactive underlineHover" id="formheader" href="home.html"style=" font-size:20px;" > <b>ABOUT WEBSITE</b> </a>
</header>
</div>

  </html>