$(document).ready( function() {
	
	var photo_wrappers = $('.photo_wrapper');
	var photo_box = $('.photo_box');
	var photo_box_width = photo_box.width();
	var photo_box_height = photo_box.height();
	
	photo_wrappers.each( function() {
		$(this).attr('orig_width', $(this).width());
		$(this).attr('orig_height', $(this).height());
	});
	
	photo_wrappers.click( function() {
		
		if ($(this).hasClass('animating') || $(this).hasClass('noClick')) {
			return false;
		}
		$(this).addClass('animating');
		
		if (!$(this).hasClass('fullscreen')) {
			// enlarge to full box
			$(this).animate({
				width: photo_box_width,
				height: photo_box_height
			}, 600, function() {
				$(this).removeClass('animating');
				$(this).addClass('fullscreen');
			});
		} else {
			// return to original size
			$(this).removeClass('fullscreen');
			$(this).animate({
				width: $(this).attr('orig_width'),
				height: $(this).attr('orig_height')
			}, 600, function() {
				$(this).removeClass('animating');
			});
		}
		
	});
	
});
