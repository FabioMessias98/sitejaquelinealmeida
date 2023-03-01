(function() {
	if(document.querySelector('.wpcf7-response-output')) {
		const contactSubmit =  document.querySelector('.contact--submit')
		const output = document.querySelector('.wpcf7-response-output')

		contactSubmit.addEventListener('click', function() {
			console.log('output: ', output)
		})
	}
})()