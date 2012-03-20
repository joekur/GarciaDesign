$(document).ready( function() {
	
	var photo_wrappers = $('.photo_wrapper');
	var photo_box = $('.photo_box');
	var photo_box_width = photo_box.width();
	var photo_box_height = photo_box.height();
	
	// photo_wrappers.each( function() {
		// $(this).attr('data-orig_width', $(this).width());
		// $(this).attr('data-orig_height', $(this).height());
	// });
	
	photo_wrappers.click( function() {
		
		if ($(this).hasClass('animating') || $(this).hasClass('noClick') || $('body').hasClass('animating'))
		{
			return false;
		}
		$(this).addClass('animating');
		
		var parent = $(this).parent();
		var corner = "";
		if (parent.hasClass('top_left')) {
			corner = "top_left";
		} else if (parent.hasClass('top_right')) {
			corner = "top_right";
		} else if (parent.hasClass('bottom_left')) {
			corner = "bottom_left";
		} else {
			corner = "bottom_right";
		}
		var page = $(this).parents('.sub_content');
		
		
		if (!$(this).hasClass('fullscreen')) {
			// enlarge to full box
			
			$(this).animate({
				width: photo_box_width,
				height: photo_box_height
			}, 600, function() {
				// done animating
				$(this).removeClass('animating');
				$(this).addClass('fullscreen');
			});
			
			// change description
			page.find('.proj_desc.main').fadeOut(300, function() {
				var description_class = '.proj_desc.' + corner;
				page.find(description_class).fadeIn(300);
			});
			
		} else {
			// return to original size
			$(this).removeClass('fullscreen');
			$(this).animate({
				width: $(this).attr('data-orig_width'),
				height: $(this).attr('data-orig_height')
			}, 600, function() {
				// done animating
				$(this).removeClass('animating');
			});
			
			// change description
			var description_class = '.proj_desc.' + corner;
			page.find(description_class).fadeOut(300, function() {
				page.find('.proj_desc.main').fadeIn(300);
			});
		}
		
	});
	
	
	
	
});
