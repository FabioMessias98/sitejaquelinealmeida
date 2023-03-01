(function() {
	if(document.querySelector('.submenu')) {
		//window.onscroll = function() {myFunction()};
		
		window.addEventListener('scroll', myFunction)

		const submenu = document.querySelector(".submenu");
		const sticky = submenu.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    submenu.classList.add('sticky')
		  } 

		  else {
		    submenu.classList.remove('sticky');
		  }
		}
	}
})()