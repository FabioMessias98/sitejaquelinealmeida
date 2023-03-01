(function($) {
	const submenuLinks = document.getElementsByClassName('submenu--links')
	const link = window.location.href

	for(let i = 0; i < submenuLinks.length; i++) {
		if(submenuLinks[i].href == link) {
			submenuLinks[i].classList.add('active')
		}
	}
})(jQuery)