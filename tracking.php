<!-- START GOOGLE ANALYTICS.JS -->
    <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-2768482-17', 'kivuto.com');
       ga('send', 'pageview');

    </script>
    <!-- END GOOGLE ANALYTICS.JS -->

    <!-- ADROLL (STARTS) -->
    <script type="text/javascript">
      adroll_adv_id = "<?php echo $adroll_adv_id; ?>";
      adroll_pix_id = "<?php echo $adroll_pixel_id; ?>";
      (function () {
      var oldonload = window.onload;
      window.onload = function(){
         __adroll_loaded=true;
         var scr = document.createElement("script");
         var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
         scr.setAttribute('async', 'true');
         scr.type = "text/javascript";
         scr.src = host + "/j/roundtrip.js";
         ((document.getElementsByTagName('head') || [null])[0] ||
          document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
         if(oldonload){oldonload()}};
      }());
    </script>

    <script type="text/javascript">
      adroll_segments = "student-advantage-landing-page"
    </script>
    <!-- ADROLL (ENDS) -->
    
    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533c28440a041d7e"></script>
    <script type="text/javascript">
      addthis.layers({
        'theme' : 'transparent',
        'share' : {
          'position' : 'left',
          'numPreferredServices' : 3
        }, 
        'follow' : {
          'services' : [
            {'service': 'facebook', 'id': 'KivutoSolutions'}
          ]
        }   
      });
    </script>
    <!-- AddThis Smart Layers END -->
    
    <!-- BUTTON TRACKING -->
    <script type="text/javascript">
    //tib = Track In Bound
    function tib(link, category, action, label) {  
        try { 
        // NEW Analytics command
        ga('send', 'event', category, action, label);
        $('html, body').animate({scrollTop:$(link).position().top - 50 }, 'slow');
        } catch(err){}
      }
      // <a onclick="tib('.minitab17', 'Minitab LP v2', 'Minitab LP v2 - Onpage', 'Minitab LP v2 - Onpage - Menu1 - Minitab');">link</a>
   
      //tob = Track Out Bound   
      function tob(link, category, action, label) {  
        try { 
        // NEW Analytics command
        ga('send', 'event', category, action, label);
        } catch(err){}
         
        setTimeout(function() {
        document.location.href = link.href;
        }, 100);
      }
      //<a href="link.htm" onClick="tob(this, 'Minitab LP v2', 'Minitab LP v2 - Clickthrough', 'Minitab LP v2 - Clickthrough - Minitab Rent Button'); return false;">link</a>   
    </script>
    <!-- END BUTTON TRACKING --> 