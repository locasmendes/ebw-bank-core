(function() {
    if(document.querySelector( '.js-submenu-item' )) {
        const items = document.getElementsByClassName( 'js-submenu-item' )
        const sections = document.getElementsByClassName( 'js-section-item' )

        console.log('Items: ', items)

        items[0].classList.add( 'active' )
        items[0].style.backgroundColor = items[0].dataset.color

        for(const l of sections) {
            l.classList.add( 'block' )
            l.classList.remove( 'hidden' )
        }

        for(const i of items) {
            i.addEventListener( 'click', function() {
                for(const j of items) {
                    j.classList.remove( 'active' )
                    j.style.background = 'none'
                }

                this.classList.add( 'active' )
                this.style.background = this.dataset.color + '!important'

                for(const k of sections) {
                    if(this.dataset.value == k.dataset.value) {
                        k.classList.add( 'block' )
                        k.classList.remove( 'hidden' )
                    } else if(this.dataset.value == 'all-categories' ) {
                        k.classList.add( 'block' )
                        k.classList.remove( 'hidden' )  
                    } else {
                        k.classList.remove( 'block' )
                        k.classList.add( 'hidden' )
                    }
                }   
            })
        }

        for(const l of items) {
            l.addEventListener( 'onmouseout', function() {
                if(!this.classList.contains( 'active' )) {
                    for(const m of items) {
                        m.style.color = m.dataset.color
                        m.style.background = 'none'
                    }
        
                    this.style.color = '#FFF'
                    this.style.backgroundColor = this.dataset.color
                }
            })
        }
    }
})()