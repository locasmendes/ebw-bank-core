require("./bootstrap");
import Swiper from "swiper";
import Rellax from "rellax";

(function (document, Swiper, Rellax) {
    window.Swiper = Swiper;
    window.Rellax = Rellax;

    // require("./components/menu-toggle");
    require("./components/single-content-items");
    require("./components/swiper");
    require("./components/show-categories");
    require("./components/rellax");
    require("./components/masks");
})(document, Swiper, Rellax);
