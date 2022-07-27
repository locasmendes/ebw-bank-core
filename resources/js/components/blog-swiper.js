import Swiper, { Pagination, Navigation, Keyboard } from "swiper";
import jQuery from "jquery";
import "swiper/css/pagination";
import "swiper/css/navigation";
// import Swiper styles

function swiperBlog() {
    new Swiper(".swiper-blog", {
        slidesPerView: 4,
        spaceBetween: 12,
        modules: [Pagination],

        pagination: {
            el: ".swiper-pagination-blog",
            type: "bullets",
        },
    });

    const blogSwiper = new Swiper(".swiper-blog-single", {
        slidesPerView: 1,
        modules: [Pagination, Navigation, Keyboard],
        pagination: {
            el: ".swiper-pagination-single",
            type: "bullets",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },
        a11y: {
            prevSlideMessage: "Previous slide",
            nextSlideMessage: "Next slide",
        },
    });

    window.addEventListener("slide-swiper-blog", function (evt) {
        const { detail } = evt;
        blogSwiper.slideTo(detail.index, 0);
    });
}

if (!!document.querySelector(".swiper-blog")) {
    swiperBlog();
}
