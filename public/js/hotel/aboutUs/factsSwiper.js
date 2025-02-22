let factsSlider;

function initMenuSlider() {
    if (window.innerWidth < 1000) { 
        if (!factsSlider) { 
            factsSlider = new Swiper('.about-us__counter__slider', {
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
        if (factsSlider) { 
            factsSlider.destroy();
            factsSlider = undefined;
        }
    }
}

window.addEventListener('load', initMenuSlider);
window.addEventListener('resize', initMenuSlider);