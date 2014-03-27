$(document).ready(function(){

	for (var i=0; i<2000; i++) {
	    $("#diagonal").append("<div></div>")
	 }
	/*--------------------

	Simple expand code

	--------------------*/

	$('.expander').simpleexpand();

	/*--------------------

	Add-this follow buttons snap to top

	--------------------*/

	/* Scroll event handler */
    $(window).bind('scroll',function(e){
    	var scrolled = $(document).scrollTop();
		if (scrolled >= 69)
		{
			$('.at4-follow').css('position', 'fixed');
			$('.at4-follow-inner').css('top', 0);
			$('.at-follow-open-control').css('top', 0);
			$('.at-follow-open-control').css('position', 'fixed');
		} else {
			$('.at4-follow').css('position', 'absolute');
			$('.at4-follow-inner').css('top', 69);
			$('.at-follow-open-control').css('top', 69);
			$('.at-follow-open-control').css('position', 'absolute');
		}
		stickyNav();
    });

    /*--------------------

	Sticky header bar

	--------------------*/
	// Adding the class 'firstRow' to the first main content block
	$('.mainContent').eq(0).addClass('firstRow').end();

	var stickyNavTop = $('.subHeader').offset().top;  
	
	var stickyNav = function(){  
		var scrollTop = $(window).scrollTop();     
		if (scrollTop > stickyNavTop) {   
		    $('.subHeader').addClass('snapNav'); 
		    $('.offHeader').addClass('snapNav'); 
		    // Adds padding in for lost space once subHeader becomes snapNav
		    $('.firstRow').css('padding', '90px 20px 45px 20px'); 
		} else {  
		    $('.subHeader').removeClass('snapNav');
		    $('.offHeader').removeClass('snapNav');
		    $('.firstRow').css('padding', '45px 20px 45px 20px');   
		}  
	};  
	  
	stickyNav();  
	  
	$(window).scroll(function() {  
	    stickyNav();  
	});  


	/*--------------------

	jQuery Waypoint analytics

	--------------------*/

	

	// Create Array for unique 
	var i = new Array;
	$('[data-block]').each(function(){ un = $(this).attr('data-block'); i[un]  = 0; });
			
	// Track blocks that come into the view port
	$('[data-block]').waypoint(function(direction) 
	{
		if(direction === 'down') 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){ scrollAnalytics('Unique', $(this).attr('data-block'), direction); } // UNIQUE VIEWS
			i[un] += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}
	},{
		offset: function() { return -$(this).height(); }  // Only fires the waypoint at the BOTTOM of the content section 
    })
    .waypoint(function(direction) 
    {
		if(direction === 'up')
		{
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}
		// THIS IS A SPECIAL CASE TO TRACK THE MINITAB BLOCK, AS THE BOTTOM CANNOT HIT TOP OF VIEWPORT
		if(direction === 'down' && $(this).attr('data-block') === 'Lets talk') 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){  scrollAnalytics('Unique', $(this).attr('data-block'), direction);  } // UNIQUE VIEWS
			i[un]  += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}
	})
	///////// THIS IS A SPECIAL CASE TO TRACK THE FINAL BLOCK, AS THE TOP CANNOT HIT TOP OF VIEWPORT///////
	.waypoint(function(direction) 
	{
		if(direction === 'down' && $(this).attr('data-block') === 'Customers') 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){ scrollAnalytics('Unique', $(this).attr('data-block'), direction); }  // UNIQUE VIEWS
			i[un]  += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction);  // TOTAL VIEWS
		}
	},{
		offset: 340 // Fires the waypoint 200px above of the content section 
	});
	
	// End
	function scrollAnalytics (type, content, direction) {
		/* NEW Analytics command */
		ga('send', 'event', 'Minitab LP v2', 'Minitab LP v2 - Content seen (' + type + ')', 'Minitab LP v2 - Content seen - ' + content);

		/* OLD Analytics command for OTH Umbrella */
		_gaq.push(['_trackEvent', 'Minitab LP v2', 'Minitab LP v2 - Content seen (' + type + ')', 'Minitab LP v2 - Content seen - ' + content]);
	}

});