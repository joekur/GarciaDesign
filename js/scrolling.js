$(document).ready(function() {
	
	var mainPage = $('#home');
	var numCols = 3;
	var numRows = 3;
	var navLinks = $('#navbar a');
	var navbar = $('#navbar');
	var navIcons = $('#navbar a img');
	var body = $('body');
	
	
	
	function resetPhotobox(photobox) {
		console.log(photobox);
		photobox.find('.fullscreen').trigger('click');
	}
	
	
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
	    body.scrollTo($('#navbar a.selected').attr('href'), 0);
	         
	}
	
	//resize all the items according to the new browser size
    $(window).resize( resizePanel );
	resizePanel();
	setTimeout(resizePanel, 1000);
	
	
	
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
        	return false;
        }
        
        // move destination page to directly below current location
        destination_page.insertAfter(current_page);
        
        // scroll to destination
        $('body').scrollTo(destination_page, 800, function() {
        	// done scrolling
        	resetPhotobox(current_page.find('.photo_box'));
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
    
    
    
    ///////////////////////
    // PROJECT SUB-PAGES //
    ///////////////////////
    
    
    $('.content').each( function() {
    	var subcontents = $(this).children('.sub_content');
    	subcontents.first().show();
    });
    
    $('.pagination').click( function() {
    	var container = $(this).parent();
    	var paginations = container.children('.pagination');
    	var toIndex = paginations.index($(this));
    	console.log(toIndex);
    	changePage(container, toIndex);
    });
    
    $('.pagination-container .left-arrow').click( function() {
    	var container = $(this).parent();
    	var paginations = container.children('.pagination');
    	var current_pagination = paginations.filter('.active');
    	var current_index = paginations.index(current_pagination);
    	var next_index = current_index - 1;
    	if (next_index < 0) {
    		next_inex = paginations.length - 1;
    	}
    	changePage(container, next_index);
    });
    
    $('.pagination-container .right-arrow').click( function() {
    	var container = $(this).parent();
    	var paginations = container.children('.pagination');
    	var current_pagination = paginations.filter('.active');
    	var current_index = paginations.index(current_pagination);
    	var next_index = current_index + 1;
    	if (next_index >= paginations.length) {
    		next_index = 0;
    	}
    	changePage(container, next_index);
    });
    
    function changePage(container, toIndex) {
    	var paginations = container.children('.pagination');
		var pagination = paginations.eq(toIndex);
    	
    	if (body.hasClass('animating') || pagination.hasClass('active')) {
			return;
		}
		body.addClass('animating');
		
		var ind = toIndex;
		paginations.removeClass('active');
		pagination.addClass('active');
		
		var page_container = container.closest('.content');
		var pages = page_container.children('.sub_content');
		var current_page = pages.filter('.active');
		var next_page = pages.find('.sub_content:nth-child(' + (ind+1) + ')');
		next_page = pages.eq(ind);
		
		current_page.fadeOut(600, function() {
			
			pages.removeClass('active');
			next_page.fadeIn(600, function() {
				// done fading
				$(this).addClass('active');
				body.removeClass('animating');
				resetPhotobox(current_page.find('.photo_box'));
				current_page.find('.proj_desc').not('.main').hide();
			});
			
		});
    	
    }
    
    
	
});
