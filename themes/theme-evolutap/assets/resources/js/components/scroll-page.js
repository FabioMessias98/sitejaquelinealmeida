(function($) {
	const header = document.querySelector('.header').offsetHeight
	const headerBox = document.querySelector('.header--box').offsetHeight
	let resultHeight = header + headerBox

	$("html, body").animate({scrollTop: resultHeight}, 1000);
})(jQuery)