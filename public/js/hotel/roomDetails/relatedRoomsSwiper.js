let swiper;

function handleSwiper() {
    if (window.innerWidth < 1000) {
        if (!swiper) {
            swiper = new Swiper('.room-details__related-rooms__container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                autoplay: { delay: 3000 },
                effect: 'slide'
            });
        }
    } 
    else {
        if (swiper) {
            swiper.destroy(true, true);
            swiper = undefined;
        }
    }
}

window.addEventListener('load', handleSwiper);
window.addEventListener('resize', handleSwiper);