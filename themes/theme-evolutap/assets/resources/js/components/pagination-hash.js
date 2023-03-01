(function($) {
	const pageNumbers = $('.page-numbers')
	let arrayHref = []

	// for(const i of pageNumbers) {
	// 	arrayHref[] = i.href
	// }

	// for(const j of arrayHref) {
	// 	j = j.Remove(j.length - 1)
	// 	console.log('J: ', j)
	// }

	for(let i = 0; i < pageNumbers.length; i++) {
		arrayHref[i] = pageNumbers[i].href
	}

	for(let i = 0; i < arrayHref.length; i++) {
		arrayHref[i] = Remove(arrayHref[i].length = 1)

		console.log('Href: ', arrayHref[i]) 
	}
})(jQuery)