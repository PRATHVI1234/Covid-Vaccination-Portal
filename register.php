<?php

session_start();

 ?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Number</span>
            <input type="text" name="adhar_no" placeholder="Enter your Aadhar Number " maxlength="12" size="12" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_no" placeholder="Enter your number" maxlength="10" size="10" required>
          </div>
          <div class="input-box">
            <span class="details">Birth date</span>
            <input type="date" name="dob" placeholder="Enter your date of birth" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" placeholder="Enter your Age" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass" maxlength="4" size="4" placeholder="Enter your password" required>
          </div>
          <!---<div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="pass" placeholder="Confirm your password" required>
          </div>--->
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value='M' id="dot-1">
          <input type="radio" name="gender" value='F' id="dot-2">
          <input type="radio" name="gender" value='None' id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="save" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

