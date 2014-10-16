<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- Google Analytics Content Experiment code -->
    <script>function utmx_section(){}function utmx(){}(function(){var
    k='63187702-12',d=document,l=d.location,c=d.cookie;
    if(l.search.indexOf('utm_expid='+k)>0)return;
    function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
    indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
    length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
    '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
    '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
    '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
    valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
    '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
    </script><script>utmx('url','A/B');</script>
    <!-- End of Google Analytics Content Experiment code -->


    <meta charset="utf-8" />
    <meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>Easily Deploy Microsoft Student Advantage | Kivuto Solutions Inc.</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
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
        

        /* BLOCK NAMES: NAME THEM WHAT WILL SHOW UP IN GOOGLE ANALYTICS */ 
        $block1 = "Introduction";
        $block2 = "Solution";
        $block3 = "Resources";
        $block4 = "Offer";
        $block5 = "Let's talk";
        $block6 = "Customers";
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

          <!-- INCLUDE Header -->
         
          <?php  
                include 'header.php';
          ?>
         
      <div class="inner-wrap">

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
                include 'content-resources.php';
          ?>

         
          <!-- INCLUDE Fourth Band -->
         
          <?php  
                include 'content-pricing.php';
          ?>

          <!-- INCLUDE Fifth Band  --> 
         
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
