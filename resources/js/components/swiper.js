//const { default: Swiper } = require("swiper")

(function() {
    if( document.querySelector( '.js-swiper-container-training' ) ) {
        const swiperTraining = new Swiper( '.js-swiper-container-training', {
            spaceBetween: 16,
            loop: true,
            
            autoplay: {
                delay: 3000,
                disableOnInteraction: false    
            },

            breakpoints: {
                320: {
                    slidesPerView: 1.5,
                },

                576: {
                    slidesPerView: 2.5,
                },

                992: {
                    slidesPerView: 3.5,
                },
            }
        })
    }

    if( document.querySelector( '.js-swiper-container-categories' )) {
        const swiperCategories = new Swiper( '.js-swiper-container-categories' )
    }   
})()