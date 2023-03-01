(function($) {
	const sidebarSocialLink = document.getElementsByClassName('sidebar-social--icons')
	const socialMediaMobileSocials = document.getElementsByClassName('social-media-mobile__socials')
    const shareButtonFolk = document.getElementsByClassName('share-button-folk')

  	//desktop
    for(const i of sidebarSocialLink) {
    	i.addEventListener('click', function() {

    		for(const j of shareButtonFolk) {
    			if(this.dataset.social == j.dataset.social) {
    				console.log('Share: ', j)
    				j.click()
    			}
    		}
    	})
    }

    //mobile
    for(const i of socialMediaMobileSocials) {
    	i.addEventListener('click', function() {

    		for(const j of shareButtonFolk) {
    			if(this.dataset.social == j.dataset.social) {
    				console.log('Share: ', j)
    				j.click()
    			}
    		}
    	})
    }
	
})(jQuery)