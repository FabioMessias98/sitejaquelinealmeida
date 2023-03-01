(function($) {
	$('.channel--model-5--overlay-video').click(function() {
		$(this).addClass('is-disable')
    	$(".channel--model-5--video").attr('src', $(".channel--model-5--video").attr('src') + '?autoplay=1'); 
	});
})(jQuery)