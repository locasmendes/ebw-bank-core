// (function() {
//     if(document.querySelector( '.js-submenu-item' )) {
//         const items = document.getElementsByClassName( 'js-submenu-item' )
//         const sections = document.getElementsByClassName( 'js-section-item' )

//         console.log('Items: ', items)

//         items[0].classList.add( 'active' )
//         items[0].style.backgroundColor = items[0].dataset.color

//         for(const l of sections) {
//             l.classList.add( 'block' )
//             l.classList.remove( 'hidden' )
//         }

//         for(const i of items) {
//             i.addEventListener( 'click', function() {
//                 for(const j of items) {
//                     j.classList.remove( 'active' )
//                     j.style.background = 'none'
//                 }

//                 this.classList.add( 'active' )
//                 this.style.background = this.dataset.color + '!important'

//                 for(const k of sections) {
//                     if(this.dataset.value == k.dataset.value) {
//                         k.classList.add( 'block' )
//                         k.classList.remove( 'hidden' )
//                     } else if(this.dataset.value == 'all-categories' ) {
//                         k.classList.add( 'block' )
//                         k.classList.remove( 'hidden' )
//                     } else {
//                         k.classList.remove( 'block' )
//                         k.classList.add( 'hidden' )
//                     }
//                 }
//             })
//         }

//         for(const l of items) {
//             l.addEventListener( 'onmouseout', function() {
//                 if(!this.classList.contains( 'active' )) {
//                     for(const m of items) {
//                         m.style.color = m.dataset.color
//                         m.style.background = 'none'
//                     }

//                     this.style.color = '#FFF'
//                     this.style.backgroundColor = this.dataset.color
//                 }
//             })
//         }
//     }
// })()

(function () {
    const items = document.getElementsByClassName("js-submenu-item");
    const posts = document.getElementsByClassName("js-posts");
    if (document.querySelector(".js-submenu-item")) {
        items[0].classList.add("active");

        for (const n of posts) n.classList.add("active");

        for (const i of items) {
            i.addEventListener("mouseover", function () {
                this.style.backgroundColor = this.dataset.color;
            });

            i.addEventListener("mouseout", function () {
                this.style.background = "none";
            });

            i.addEventListener("click", function () {
                for (const j of items) j.classList.remove("active");

                for (const k of posts) {
                    if (this.dataset.value == k.dataset.value) {
                        k.classList.add("active");
                    } else if (this.dataset.value == "all-categories") {
                        this.classList.add("active");
                        k.classList.add("active");
                    } else {
                        k.classList.remove("active");
                    }
                }

                this.classList.add("active");
            });
        }
    }
})();
