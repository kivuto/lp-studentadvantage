<!doctype html>
<html class="no-js" lang="en">
  <head>
    
    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>Easily Deploy Microsoft Student Advantage | Kivuto Solutions Inc.</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main-v2.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5"/>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/jquery.form.js"></script>    
    <script src="js/viewport.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <?php 
        /* SETTING GLOBAL VARIABLES - CUSOMIZE YOUR ACCOUNTS/VARIABLES AS NEEDED */
      
        /* ADROLL */
        $adroll_adv_id = "5PZOOOB6OBGIJBTDEWGIMN"; 
        $adroll_pixel_id = "SJGXS4L7WFBZ5AYQ4WKSK7"; 
        

        /* Block names: name them what you want them to show up in google analytics */ 
        $blocks = array(
        /*Block 1*/   "Introduction", 
        /*Block 2*/   "Video",
        /*Block 3*/   "Solution",
        /*Block 4*/   "Webcast",
        /*Block 5*/   "Resources",
        /*Block 6*/   "Pricing",
        /*Block 7*/   "Let's talk",
        /*Block 8*/   "Customers",
        );

        $counter = 0;
    ?>

  </head>

  <body>
  <div class="off-canvas-wrap">

          <!-- INCLUDE Header -->
         
          <?php  
                include 'header-v2.php';
          ?>
         
      <div class="inner-wrap">

          <!-- INCLUDE First Band  --> 
         
          <?php  
                include 'content-introduction-v3.php';
                $counter++;
          ?>


          <!-- INCLUDE Second Band  --> 
         
          <?php  
                include 'content-video.php';
                $counter++;
          ?>
          

          <!-- INCLUDE Third Band  --> 
         
          <?php  
                include 'content-solution-v2.php';
                $counter++;
          ?>

          <!-- INCLUDE Fourth Band  --> 
         
          <?php  
                include 'content-webcast-v2.php';
                $counter++;
          ?>

          <!-- INCLUDE Fifth Band  --> 
         
          <?php  
                include 'content-resources.php';
                $counter++;
          ?>

         
          <!-- INCLUDE Sixth Band -->
         
          <?php  
                include 'content-pricing.php';
                $counter++;
          ?>

          <!-- INCLUDE Seventh Band  --> 
         
          <?php  
                include 'content-email-cta.php';
                $counter++;
          ?>


          <!-- INCLUDE Eigth Band  --> 
         
          <?php  
                include 'content-customers.php';
                $counter++;
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
