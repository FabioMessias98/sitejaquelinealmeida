(function() {
	const body = document.querySelector('body').offsetHeight
	const footer = document.querySelector('footer').offsetHeight
	const sidebarSocial = document.querySelector('.sidebar-social')
	let resultHeight = body - footer - 1000

	window.addEventListener('scroll', () => {
		if(window.pageYOffset > resultHeight) {
			sidebarSocial.classList.add('is-disable')
		}

		else {
			sidebarSocial.classList.remove('is-disable')	
		}
	})
})()