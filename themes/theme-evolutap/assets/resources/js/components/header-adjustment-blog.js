(function($) {
	if(document.querySelector('.header--box')) {
		const headerBox = document.querySelector('.header--box')
		const header = document.querySelector('.header')

		headerBox.style.height = 'calc(100vh - ' + header.offsetHeight + 'px)'
	}
})(jQuery)