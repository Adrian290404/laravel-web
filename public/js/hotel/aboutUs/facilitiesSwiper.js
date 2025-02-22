let mySwiper;

function initOrDestroySwiper() {
    if (window.innerWidth < 1000) {
        if (!mySwiper) {
            mySwiper = new Swiper('.about-us__facilities__swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: { delay: 3000 },
                effect: 'slide',
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true, 
                },
            });
        }
    } 
    else {
        if (mySwiper) {
            mySwiper.destroy(true, true);
            mySwiper = undefined;
        }
    }
}

window.addEventListener('load', initOrDestroySwiper);
window.addEventListener('resize', initOrDestroySwiper);