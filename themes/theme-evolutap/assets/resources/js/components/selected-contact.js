(function() {
    if( document.querySelector( '.js-selected' )) {
        const selected = document.querySelector( '.js-selected' ) 
        const selectedCurrent = document.querySelector( '.js-selected-current' )
        const selectedItems = document.getElementsByClassName( 'js-selected-item' )
        const selectedContact = document.getElementById( 'selected-contact' ) 

        selected.addEventListener( 'click', function() {
            this.classList.toggle( 'is-active' )
        })

        for( const i of selectedItems ) {
            i.addEventListener( 'click', function() {
                selectedCurrent.innerText = this.innerText
                
                selectedContact.value = this.innerText
                
                setTimeout(function() {
                    selected.classList.remove( 'is-active' )
                }, 100)
            })
        }
    }
})()