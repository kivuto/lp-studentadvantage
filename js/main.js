$(document).ready(function(){
	/*--------------------

	FancyBox Init

	--------------------*/
	$(".savideo").fancybox({
	  fitToView : true,
	  autoSize: true,
	  helpers: {
            media: {}
        }
	});
	

	/*--------------------

	Close off-canvas on link click

	--------------------*/

	$(".off-canvas-list a").on("click.toggleCanvas", function(){
		$(".exit-off-canvas").click();
	});

	/*--------------------

	Validate the form submission

	--------------------*/

	$("form").submit(function(e){
		
		// If cross-domain AJAX may be performed without an error, do so
		var email = $('#EmailElement_0_input').val();
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    var valid = re.test(email);
	    if(valid==true){
			
			if($.support.cors){
				e.preventDefault();
				asyncSubmit("form");
				console.log('Should have been animated innerHTML');
				$('.email input.button').css("opacity", "0");
	    		$('.row.email').css("opacity", "0");
	    		$('.row.thank-you').css("opacity", "1.0").css("transform","translateY("+ -155 +"px)");
				$('form').css('visibility','hidden');
				// Track the successful clickthrough
				tib('', 'Student Advantage LP', 'Student Advantage LP - Clickthrough', 'Student Advantage LP - Clickthrough - Email - Submit');
				document.getElementById('twitter-pixel').innerHTML = '<script src="//platform.twitter.com/oct.js" type="text/javascript"></script><script type="text/javascript">twttr.conversion.trackPid("l4f2m");</script><noscript><img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4f2m&p_id=Twitter" /><img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4f2m&p_id=Twitter" /></noscript>';
				    console.log('Should have added innerHTML');
			}else{
				return true;
			}
			// End if Cors
		
		

		}else{
			$('#EmailElement_0_input').animate({
	    		opacity : '.5',
	    	},200).animate({
	    		opacity : '1',
	    	},200);
	    	return false;
		}


	});
	// end on click

	function asyncSubmit(selector){
		var formTarget = $(selector).attr("action");

		$.post(formTarget, $(selector).serialize());
	}
	// end async


	/*--------------------

	jQuery Waypoint analytics

	--------------------*/

	// Determining the second last and last blocks
	var lastblock = $(".mainContent").eq(-1).attr('data-block');
	var secondlblock = $(".mainContent").eq(-2).attr('data-block');
	

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
		// Only fires the waypoint at the BOTTOM of the content section 
		offset: function() { return -$(this).height(); }  
    })
    .waypoint(function(direction) 
    {
		if(direction === 'up') {
			// TOTAL VIEWS
			scrollAnalytics('Total', $(this).attr('data-block'), direction); 
		}
		// THIS IS A SPECIAL CASE TO TRACK THE LETS TALK BLOCK, AS THE BOTTOM CANNOT HIT TOP OF VIEWPORT
		if(direction === 'down' && $(this).attr('data-block') === secondlblock) 
		{
			un = $(this).attr('data-block');
			if(i[un] === 0){  scrollAnalytics('Unique', $(this).attr('data-block'), direction);  } // UNIQUE VIEWS
			i[un]  += 1;
			
			scrollAnalytics('Total', $(this).attr('data-block'), direction); // TOTAL VIEWS
		}
	})
	.waypoint(function(direction) 
	{
		///////// THIS IS A SPECIAL CASE TO TRACK THE FINAL BLOCK, AS THE TOP CANNOT HIT TOP OF VIEWPORT///////
		if(direction === 'down' && $(this).attr('data-block') === lastblock) {

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
	}

});

