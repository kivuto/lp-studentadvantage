$(document).ready(function(){

	for (var i=0; i<2000; i++) {
	    $("#diagonal").append("<div></div>")
	 }
	

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
		ga('send', 'event', 'Student Advantage LP', 'Student Advantage LP - Content seen (' + type + ')', 'Student Advantage LP - Content seen - ' + content);

		/* OLD Analytics command for OTH Umbrella */
		_gaq.push(['_trackEvent', 'Student Advantage LP', 'Student Advantage LP - Content seen (' + type + ')', 'Student Advantage LP - Content seen - ' + content]);
	}

});