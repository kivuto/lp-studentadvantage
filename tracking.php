<!-- START GOOGLE ANALYTICS.JS -->
    <script> 
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); 

      // Testing
      ga('create', 'UA-2768482-24', 'onthehub.com');

      // Production
      //ga('create', '<?php echo $universal_Analytics; ?>', 'onthehub.com');

      ga('send', 'pageview'); 
    </script>
    <!-- END GOOGLE ANALYTICS.JS -->

    <!-- START GOOGLE UMBRELLA ANALYTICS -->
    <script type="text/javascript">
        var _gaq = _gaq || []; 
        var pluginUrl = 
        '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
         _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
        // Testing 
         _gaq.push(['_setAccount', 'UA-2768482-24']); 
        // Production
        //_gaq.push(['_setAccount', '<?php echo $umbrella_Analytics; ?>']); 
        _gaq.push(['_trackPageview']); 
        
        /* TRACK OTH UMBRELLA START */ 
        // Testing 
        _gaq.push(['b._setAccount', 'UA-0000000-02']);
        // Production
        //_gaq.push(['b._setAccount', '<?php echo $umbrella_OTH_Analytics; ?>']); 
        _gaq.push(['b._setDomainName', 'onthehub.com']); 
        _gaq.push(['b._trackPageview']); 
        /* TRACK OTH UMBRELLA END */ 
        
        (function() { var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true; 
        
        // Use this until we have changed our privacy Policy
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        // Replace the line above with this once the provacy policy is in place for
        // ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js'; 
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();
    </script>
    <!-- END GOOGLE UMBRELLA ANALYTICS -->

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
      adroll_segments = "minitab-landing-page"
    </script>
    <!-- ADROLL (ENDS) -->
    
    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ec0f2020a9f502"></script>
    <script type="text/javascript">
     addthis.layers({
       'theme' : 'transparent',
       'share' : {
         'position' : 'left',
         'numPreferredServices' : 5
       }, 
       'follow' : {
         'services' : [
           {'service': 'facebook', 'id': 'onthehub.network'},
           {'service': 'twitter', 'id': 'OnTheHub'},
           {'service': 'google_follow', 'id': '115290003144094460033'},
           {'service': 'pinterest', 'id': 'onthehub'}
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
        // OLD Analytics command for OTH Umbrella
        _gaq.push(['_trackEvent', category, action, label]);
        $('html, body').animate({scrollTop:$(link).position().top - 50 }, 'slow');
        } catch(err){}
      }
      // <a onclick="tib('.minitab17', 'Minitab LP v2', 'Minitab LP v2 - Onpage', 'Minitab LP v2 - Onpage - Menu1 - Minitab');">link</a>
   
      //tob = Track Out Bound   
      function tob(link, category, action, label) {  
        try { 
        // NEW Analytics command
        ga('send', 'event', category, action, label);
        // OLD Analytics command for OTH Umbrella
        _gaq.push(['_trackEvent', category, action, label]);
        } catch(err){}
         
        setTimeout(function() {
        document.location.href = link.href;
        }, 100);
      }
      //<a href="link.htm" onClick="tob(this, 'Minitab LP v2', 'Minitab LP v2 - Clickthrough', 'Minitab LP v2 - Clickthrough - Minitab Rent Button'); return false;">link</a>   
    </script>
    <!-- END BUTTON TRACKING --> 