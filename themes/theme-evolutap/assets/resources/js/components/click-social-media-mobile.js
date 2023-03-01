(function($) {	
	$(window).on('scroll', function () {
	    if ($(window).scrollTop()) {
	      $('.social-media-mobile').addClass('move');
	    } else {
	      $('.social-media-mobile').removeClass('move');
	    }
	});

	$('.social-media-mobile').on('click', function() {
		$(this).toggleClass('active')
	})
})(jQuery)