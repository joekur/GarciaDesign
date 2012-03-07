$(document).ready(function() {
	
	var mainPage = $('#home');
	var numCols = 3;
	var numRows = 3;
	var navLinks = $('#navbar a');
	var navbar = $('#navbar');
	
	/*function initializePageFromURL() {
		var anchor = window.location.hash;
		var page = $(anchor);
		$('body').scrollTo(page, 800);
	}*/
	
	
	//////////////
	// RESIZING //
	//////////////
	
	function resizePanel() {
 
	    //get the browser width and height
	    var width = $(window).width();
	    var height = $(window).height();
	 
	    var wrapper_height = height * numRows;
	    var wrapper_width = width * numCols;
	         
	    //set the dimension     
	    $('.page').css({width: width, height: height});
	    $('.wrapper').css({width: wrapper_width+100, height: wrapper_height+100});
	    
	    // center content div vertically
	    var content_height = $('.content').height();
	    var top_pad = (height - content_height) / 2;
	    $('.content').css({top: top_pad});
	 
	    //if the item is displayed incorrectly, set it to the corrent pos
	    $('body').scrollTo($('#navbar a.selected').attr('href'), 0);
	         
	}
	
	//resize all the items according to the new browser size
    $(window).resize( resizePanel );
	resizePanel();
	
	
	
	///////////////
	// SCROLLING //
	///////////////
	
	navLinks.click(function (event) {
		// function triggers when a nav link is clicked
		
		event.preventDefault();
        
        // scroll to page in 800ms
        var destination_id = $(this).attr('href');
        $('body').scrollTo(destination_id, 800, function() {
        	// change anchor tag
     		window.location.hash = destination_id;
        });
        
        // add 'selected' class to this link
        navLinks.removeClass('selected');
        $(this).addClass('selected');
         
        return false; // return false to prevent normal action
    });
    
    $('body').scrollTo(mainPage,0); // start the site on the mainPage, defined above
    
	
});
