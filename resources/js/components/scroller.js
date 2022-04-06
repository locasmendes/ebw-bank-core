//
(function () {
    window.addEventListener("DOMContentLoaded", function () {
        window.requestAnimFrame = (function () {
            return (
                window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 1000 / 60);
                }
            );
        })();

        function scrollToY(_scrollTargetY, _speed, _easing) {
            // scrollTargetY: the target scrollY property of the window
            // speed: time in pixels per second
            // easing: easing equation to use

            const scrollY =
                window.scrollY ?? document.documentElement.scrollTop;
            const scrollTargetY = _scrollTargetY ?? 0;
            const speed = _speed ?? 2000;
            const easing = _easing ?? "easeOutSine";
            let currentTime = 0;

            // min time .1, max time .8 seconds
            const time = Math.max(
                0.1,
                Math.min(Math.abs(scrollY - scrollTargetY) / speed, 0.8)
            );

            // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
            const easingEquations = {
                easeOutSine: function (pos) {
                    return Math.sin(pos * (Math.PI / 2));
                },
                easeInOutSine: function (pos) {
                    return -0.5 * (Math.cos(Math.PI * pos) - 1);
                },
                easeInOutQuint: function (pos) {
                    if ((pos /= 0.5) < 1) {
                        return 0.5 * Math.pow(pos, 5);
                    }
                    return 0.5 * (Math.pow(pos - 2, 5) + 2);
                },
            };

            // add animation loop
            function tick() {
                currentTime += 1 / 60;

                const p = currentTime / time;
                const t = easingEquations[easing](p);

                if (p < 1) {
                    requestAnimFrame(tick);
                    window.scrollTo(0, scrollY + (scrollTargetY - scrollY) * t);
                } else {
                    window.scrollTo(0, scrollTargetY);
                }
            }

            // call it once to get started
            tick();
        }

        // // scroll it!
        // scrollToY(0, 1500, 'easeInOutQuint');
        const scrollMenu = Array.from(
            document.getElementsByClassName("page-scroller")
        );

        for (const i of scrollMenu) {
            i.addEventListener("click", handleScroller);
        }

        function handleScroller(e) {
            e.preventDefault();
            const hash = this.hash;
            const offTopHash = document.querySelector(hash).offsetTop;
            scrollToY(offTopHash, 1500, "easeInOutQuint");
        }
    });
})();
