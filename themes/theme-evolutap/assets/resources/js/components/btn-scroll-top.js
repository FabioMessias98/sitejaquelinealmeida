(function($) {
	$(window).scroll(function() {
	    if ($(this).scrollTop()) {
	        $('.btn-up__box').fadeIn();
	    } 

	    else {
	        $('.btn-up__box').fadeOut();
	    }
	});

	$(".btn-up__box").click(function() {
	    $("html, body").animate({scrollTop: 0}, 1000);
	 });
})(jQuery)