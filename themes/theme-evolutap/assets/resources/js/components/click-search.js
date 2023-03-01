(function() {
	if(document.querySelector('.btn-submit')) {
		const btnSubmit = document.querySelector('.btn-submit')
		const iconSearch = document.querySelector('.icon-search')

		iconSearch.addEventListener('click', function() {
			btnSubmit.click()
		})
	}
})()