$(document).ready(function() {
	
	var mainPage = $('#home');
	var numCols = 3;
	var numRows = 3;
	var navLinks = $('#navbar a');
	var navbar = $('#navbar');
	var navIcons = $('#navbar a img')
	
	/*function initializePageFromURL() {
		var anchor = window.location.hash;
		var page = $(anchor);
		$('body').scrollTo(page, 800);
	}*/
	
	
	/////////
	// NAV //
	/////////
	
	function navHover() {
		var label = $(this).siblings('.label');
		label.stop(true).animate({opacity : 1}, 300);
	}
	
	function navUnhover() {
		var label = $(this).siblings('.label');
		label.stop(true).animate({opacity : 0}, 300);
	}
	
	navIcons.hover( navHover, navUnhover);
	
	
	
	//////////////
	// RESIZING //
	//////////////
	
	function resizePanel() {
 
	    //get the browser width and height
	    var width = $(window).width();
	    var height = $(window).height();
	 	
	    //set the dimension     
	    $('.page').css({width: width, height: height});
	    $('.empty_page').css({width: width, height: height});
	    
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
		if ($(this).attr('target')) {
			return true;
		}
		
		event.preventDefault();
        
        // get destination div (id)
        var destination_id = $(this).attr('href');
        var current_page_id = $('#navbar a.selected').attr('href');
        var destination_page = $(destination_id);
        var current_page = $(current_page_id);
        
        if (destination_id == current_page_id) {
        	console.log('same page');
        	return false;
        }
        
        // move destination page to directly below current location
        destination_page.insertAfter(current_page);
        
        // scroll to destination
        $('body').scrollTo(destination_page, 800, function() {
        	// change anchor tag
     		//window.location.hash = destination_id;
        });
        
        // wrap empty page around original page
        current_page.wrap('<div class="empty_page" />');
        
        // add 'selected' class to this link
        navLinks.removeClass('selected');
        $(this).addClass('selected');
        
        resizePanel();
         
        return false; // return false to prevent normal action
    });
    
    $('body').scrollTo(mainPage,0); // start the site on the mainPage, defined above
    
	
});
