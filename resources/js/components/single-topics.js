(function() {
    const topics = document.getElementsByClassName( 'js-topics' )

    topics[0].classList.add( 'active' )

    for(const i of topics) {
        i.addEventListener( 'click', function() {
            for(const j of topics) {
                j.classList.remove( 'active' )
            }

            this.classList.add( 'active' )
        })
    }
})()