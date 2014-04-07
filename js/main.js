$(document).ready(function(){
	/*--------------------

	FancyBox Init

	--------------------*/
	
	$(".vimeo").fancybox({
	  type: 'iframe',
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
				$('.email input.button').css("opacity", "0");
	    		$('.row.email').css("opacity", "0");
	    		$('.row.thank-you').css("opacity", "1.0").css("transform","translateY("+ -155 +"px)");
				$('form').css('visibility','hidden');
			}else{
				return true;
			}
			// End if Cors
		
			function asyncSubmit(selector){
				var formTarget = $(selector).attr("action");

				$.post(formTarget, $(selector).serialize());
			}
			// end async

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


	/* not working so hot */

	/*$('form').on('submit',function(){
		event.preventDefault();
		var email = $('#EmailElement_0_input').val();
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    var valid = re.test(email);
	    if(valid==true){
	    
	    var formOptions = { 
			    success: 		function() {
			    	console.log('success');
			    	tib(this, 'Student Advantage LP', 'Student Advantage LP - Clickthrough', 'Student Advantage LP - Clickthrough - Let\'s Talk - Email signup');
				    
					$('.email input.button').css("opacity", "0");
	    			$('.row.email').css("opacity", "0");
	    			$('.row.thank-you').css("opacity", "1.0").css("transform","translateY("+ -155 +"px)");

				    //$('.row.email').css("visibility", "0");
				    //$('.row.thank-you').css("opacity", "1.0")
			    }
			};
			$('form').ajaxForm(formOptions);
	    }else{
	    	$('#EmailElement_0_input').animate({
	    		opacity : '.5',
	    	},200).animate({
	    		opacity : '1',
	    	},200);
	    	return false;
	    }
	}); */



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
		if(direction === 'down' && $(this).attr('data-block') === "Let's talk") 
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
		if(direction === 'down' && $(this).attr('data-block') === 'Customers') {

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

