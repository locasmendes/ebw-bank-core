(function() {
    if( document.querySelector( '.js-single-content-item-current' ) ) {
        const itemCurrent = document.querySelector( '.js-single-content-item-current' )
        const listTopic = document.querySelector( '.js-single-content-list-topic' )
    
        console.log(listTopic)
        
        itemCurrent.addEventListener( 'click', function() {
            this.classList.toggle( 'active' )
            listTopic.classList.toggle( 'active' ) 
        })
    }
})()