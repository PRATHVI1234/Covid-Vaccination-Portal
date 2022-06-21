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
    <title>Page 2</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="addcity.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.17.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta property="og:title" content="Page 2">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-dc82"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-2830">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-align-center u-custom-font u-font-open-sans u-text u-text-palette-4-dark-2 u-text-1">ENTER NEW CITY</h4>
        <div class="u-form u-form-1">
          <form action="addcity1.php" method="POST" class="u-clearfix u-form-spacing-33 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form">
            <input type="hidden" id="siteId" name="siteId" value="2879031057">
            <input type="hidden" id="pageId" name="pageId" value="2664300117">
            <div class="u-form-group u-form-name">
              <label for="name-175b" class="u-form-control-hidden u-label">center</label>
              <input type="text" placeholder="Enter Center" id="name-175b" name="center" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-group-3">
              <label for="address-ca81" class="u-form-control-hidden u-label">mobile</label>
              <input type="text" placeholder="Enter helpline of center" id="address-ca81" name="phn" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-group-3">
              <label for="address-ca81" class="u-form-control-hidden u-label">PIN</label>
              <input type="text" placeholder="Enter City Pin" id="address-ca81" name="pin" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="admindashboard.php" class="u-btn u-btn-submit u-button-style u-hover-custom-color-2 u-palette-4-dark-2 u-btn-1">Submit</a>
              <input type="submit" value="submit" name="save" class="u-form-control-hidden">
            </div>
           
          </form>
        </div>
      </div>
    </section>
  
  </body>
</html>
