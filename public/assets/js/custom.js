document.addEventListener("DOMContentLoaded", function () {
    // SCROLL SMOOTH SCRIPT START
    (function () {
        let lenis;
        let started = false;

        function loadLenisScript(callback) {
            const script = document.createElement("script");
            script.src = "https://unpkg.com/lenis@1.3.11/dist/lenis.min.js";
            script.onload = callback;
            document.head.appendChild(script);
        }

        function startLenis() {
            if (started) return;
            started = true;

            loadLenisScript(() => {
                lenis = new Lenis({
                    duration: 2.1,
                    wheelMultiplier: 1.2,
                    smoothWheel: true,
                });

                function raf(time) {
                    lenis.raf(time);
                    requestAnimationFrame(raf);
                }

                requestAnimationFrame(raf);
            });
        }

        // First interaction trigger
        ["scroll", "mousemove", "touchstart", "keydown", "click"].forEach(
            (event) => {
                window.addEventListener(event, startLenis, {
                    once: true,
                    passive: true,
                });
            },
        );
    })();
    // SCROLL SMOOTH SCRIPT END
    // ============================================================================//

    // services Swiper
    if (window.Swiper) {
        if (document.querySelector(".services-swiper")) {
            new Swiper(".services-swiper", {
                slidesPerView: "auto",
                spaceBetween: 16,
                speed: 700,
                loop: true,
                rewind: true,
                grabCursor: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: ".services-next",
                    prevEl: ".services-prev",
                },
                breakpoints: {
                    768: { spaceBetween: 24 },
                    1536: { spaceBetween: 36 },
                },
            });
        }
        // Testimonials Swiper
        if (document.querySelector(".testimonial-swiper")) {
            new Swiper(".testimonial-swiper", {
                speed: 700,
                rewind: true,
                loop: true,
                autoHeight: true,
                effect: "fade",
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                fadeEffect: { crossFade: true },
                navigation: { nextEl: ".testi-next", prevEl: ".testi-prev" },
            });
        }
    }
});
