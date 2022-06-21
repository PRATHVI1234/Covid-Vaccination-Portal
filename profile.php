<?php

session_start();

 ?>
 <!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="PROFILE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>profile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="profile.css" media="screen">
    
    <meta name="generator" content="Nicepage 3.17.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <button style="margin-left:50px;margin-top:30px;" onclick="window.history.back();" class="u-btn u-button-style u-btn-1">BACK</button>
        <br>
   
    <meta property="og:title" content="profile">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-dc82"><div class="u-clearfix u-sheet u-sheet-1">
       
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
              
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="profile.html">profile</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="carousel_be4e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-gradient u-layout-cell u-size-32 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 style="margin-top: 20px;"   class="u-custom-font u-font-georgia u-text u-text-palette-1-base u-text-1">PROFILE</h2><br><br>
                  <p class="u-text u-text-2"><?php echo $_SESSION['name']; ?></p>
                  <h6 class="u-text u-text-3">NAME</h6>
                  <a href="/" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-black u-text-palette-2-base u-btn-1"><?php echo $_SESSION['email']; ?></a>
                  <h6 class="u-text u-text-4">email</h6>
                  <h6 class="u-text u-text-5">Phone</h6>
                  <a href="tel:+987987654321" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-black u-text-palette-2-base u-btn-2"><?php echo $_SESSION['phone_no']; ?></a>
                  <h6 class="u-text u-text-6">AADHAR NO.</h6>
                  <a href="tel:+987987654321" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-black u-text-palette-2-base u-btn-3"><?php echo $_SESSION['adhar_no']; ?></a>
                  <h6 class="u-text u-text-7">DOB</h6>
                  <a href="tel:+987987654321" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-black u-text-palette-2-base u-btn-4"><?php echo $_SESSION['dob']; ?></a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-palette-4-dark-2 u-shape u-shape-circle u-shape-1"></div>
                  <div class="u-align-left u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="1280"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    
    
  </body>
</html>