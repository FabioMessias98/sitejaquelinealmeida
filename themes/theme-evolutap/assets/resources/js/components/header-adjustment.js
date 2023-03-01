// (function($) {
// 	if(document.querySelector('.header') && document.querySelector('.header--box')) {
// 		let header = document.querySelector('.header')    
// 		let headerCol = document.querySelector('.header--col')          
// 		let headerBox = document.querySelector('.header--box')
// 		let sidebarSocial = document.querySelector('.sidebar-social')
// 		let sidebarLineVertical = document.querySelector('.sidebar-social__line-vertical')
		
// 		sidebarSocial.style.width = headerCol.offsetWidth + 'px'
// 		sidebarSocial.style.height = '100vh'	
// 		sidebarSocial.style.paddingTop = header.offsetHeight + 'px'
// 		sidebarLineVertical.style.top = header.offsetHeight + 'px'	
// 	}

// 	else {
// 		if(document.querySelector('.sidebar-social')) {
// 			let header = document.querySelector('.header')
// 			let headerCol = document.querySelector('.header--col')                
// 			let sidebarSocial = document.querySelector('.sidebar-social')
// 			let sidebarLineVertical = document.querySelector('.sidebar-social__line-vertical')

// 			sidebarSocial.style.width = headerCol.offsetWidth
// 			sidebarSocial.style.height = '100vh'
// 			sidebarSocial.style.paddingTop = header.offsetHeight + 'px'
// 			sidebarLineVertical.style.top = header.offsetHeight + 'px'	
// 		}
// 	}
// })(jQuery)

(function() {
	if(document.querySelector('.header--box')) {
		const headerBox = document.querySelector('.header--box')
		const header = document.querySelector('.header')
		const headerCol = document.querySelector('.header--col')
		const sidebarSocial = document.querySelector('.sidebar-social')

		headerBox.style.height = 'calc(100vh - ' + header.offsetHeight + 'px)'
		sidebarSocial.style.width = headerCol.offsetWidth + 'px'
		sidebarSocial.style.paddingTop = header.offsetHeight + 'px'
	}
})()