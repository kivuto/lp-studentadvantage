<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>Easily Deploy Microsoft Student Advantage | Kivuto Solutions Inc.</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/viewport.js"></script>
    <script src="js/jquery.queryloader2.min.js" type="text/javascript"></script>
    <?php 
        /* SETTING GLOBAL VARIABLES - CUSOMIZE YOUR ACCOUNTS/VARIABLES AS NEEDED */
        
        /* GOOGLE ANALYTICS */
        $umbrella_Analytics = 'UA-2768482-2'; 
        $umbrella_OTH_Analytics = 'UA-2768482-14'; 
        $universal_Analytics = 'UA-2768482-18'; 
        /* ADROLL */
        $adroll_adv_id = "5PZOOOB6OBGIJBTDEWGIMN"; 
        $adroll_pixel_id = "SJGXS4L7WFBZ5AYQ4WKSK7"; 
        

        /* BLOCK NAMES: NAME THEM WHAT WILL SHOW UP IN GOOGLE ANALYTICS */ 
        $block1 = 'Introduction';
        $block2 = 'Challenges';
        $block3 = 'Solution';
        $block4 = 'Resources';
        $block5 = 'Pricing';
        $block6 = 'Lets talk';
        $block7 = 'Customers';
    ?>

  <!-- IE8 Styling fixes -->
    
  <!--[if IE 8]>
  <style>
      .mainContent { text-align: center; }
      .mainContent img { padding: 10px 0px; }
      .button { width: 45%; margin-left: 30px; padding-top: 6px !important;}
      p { padding: 10px; }
      .title { padding-left: 30% !important; text-align: left !important; }
      .small-3 { width: 100px !important; display: table-cell !important; }
      .small-4 { width: 400px !important; display: table-cell !important; padding: 15px 0px 0px 40px; }
      .large-offset-3 { padding: 0px 0px 0px 35%; }
  </style>
  <![endif]-->
  </head>

  <body>
  <div class="off-canvas-wrap">
      <div class="inner-wrap">

          <!-- INCLUDE Header -->
         
          <?php  
                include 'header.php';
          ?>
         

          <!-- INCLUDE First Band  --> 
         
          <?php  
                include 'content-introduction.php';
          ?>


          <!-- INCLUDE Second Band  --> 
         
          <?php  
                include 'content-challenges.php';
          ?>


          <!-- INCLUDE Third Band  --> 
         
          <?php  
                include 'content-solution.php';
          ?>


          <!-- INCLUDE Fourth Band  --> 
         
          <?php  
                include 'content-resources.php';
          ?>

         
          <!-- INCLUDE Fifth Band -->
         
          <?php  
              
              if(isset($_SERVER['HTTP_REFERER'])) {
                  $server = $_SERVER['HTTP_REFERER'];
                  $last_page = GetHostByName($server);
                  if(strpos($last_page,"minitab.com"))
                  {
                    
                  } else {
                     include 'content-pricing.php';
                  }
              }
              else {
                  include 'content-pricing.php';
              }
          ?>

          <!-- INCLUDE Sixth Band  --> 
         
          <?php  
                include 'content-email-cta.php';
          ?>


          <!-- INCLUDE Sixth Band  --> 
         
          <?php  
                include 'content-customers.php';
          ?>

          <!-- INCLUDE THE FOOTER AND SUBFOOTER -->
           <?php  
                include 'footer/footer.php';
           ?> 

      </div>
  </div>
  <!-- INCLUDE TRACKING -->
   <?php  
        include 'tracking.php';
   ?>
    

    <script src="js/waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.offcanvas.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
