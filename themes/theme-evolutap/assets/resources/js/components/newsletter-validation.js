(function($) {
	const link = document.querySelector('.link-thank-you').href

	document.addEventListener( 'wpcf7mailsent', function( event ) {
	  location = link
	}, false );
})(jQuery)