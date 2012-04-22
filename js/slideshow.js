$(document).ready( function() {
	
	var thumbContainers = $('.thumb-container');
	var picContainers = $('.picture-container');
	var numImages = thumbContainers.length;
	var body = $('body');
	var bigPictures = $('.big-picture');
	
	bigPictures.imagesLoaded(function() {
		
		bigPictures.each(function() {
			var imgHeight = $(this).height();
			console.log(imgHeight);
			if (imgHeight < 400 && imgHeight > 0) {
				var topPad = (400 - imgHeight) / 2;
				$(this).css("margin-top", topPad);
			}
			var myContainer = $(this).parent();
			myContainer.css('visibility', 'visible').hide();
			if (picContainers.index(myContainer) == 0) {
				myContainer.show();
			}
		});
		
	});
	
	
	$('.thumb-container').click(function() {
		console.log("clicked");
		showPic($(this));
	});
	
	$('.left-arrow').click(function() {
		var current = $('.thumb-container.active');
		var ind = thumbContainers.index(current);
		if (ind == 0) {
			showPic( thumbContainers.filter('.thumb-container:last-child') );
		} else {
			showPic( current.prev() );
		}
	});
	
	$('.right-arrow').click(function() {
		var current = $('.thumb-container.active');
		var ind = thumbContainers.index(current);
		if (ind == numImages-1) {
			console.log(thumbContainers.filter('.thumb-container:first-child'));
			showPic( thumbContainers.filter('.thumb-container:first-child') );
		} else {
			showPic( current.next() );
		}
	});
	
	function showPic(thumbContainer) {
		if (body.hasClass('animating') || thumbContainer.hasClass('active')) {
			console.log("too bad");
			return;
		}
		body.addClass('animating');
		
		var ind = thumbContainers.index(thumbContainer);
		thumbContainers.removeClass('active');
		thumbContainer.addClass('active');
		
		$('.picture-container.active').fadeOut(600);
		picContainers.removeClass('active');
		var nextPic = $('.picture-container:nth-child(' + (ind+1) + ')');
		console.log(nextPic);
		nextPic.fadeIn(600, function() {
			$(this).addClass('active');
			body.removeClass('animating');
		});
	}
	
});
