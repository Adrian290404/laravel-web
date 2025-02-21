const menuSwiper = new Swiper('.home__menu__swiper', {
    loop: false,
    navigation: {
        nextEl: '.home__menu__container__menu-container__controls__controller--right',
        prevEl: '.home__menu__container__menu-container__controls__controller--left',
    },
    slidesPerView: 2, 
    spaceBetween: 20,
    grid: {
      rows: 3,   
      fill: 'row'
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
            grid: {
            rows: 3,
            fill: 'row'
            }
        },
        1000: {
            slidesPerView: 2,
            spaceBetween: 20,
            grid: {
            rows: 3,
            fill: 'row'
            }
        }
    }
});

let menuSlider;

function initMenuSlider() {
    if (window.innerWidth < 1000) { 
        if (!menuSlider) { 
            menuSlider = new Swiper('.home__menu__slider', {
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
        if (menuSlider) { 
            menuSlider.destroy();
            menuSlider = undefined;
        }
    }
}

window.addEventListener('load', initMenuSlider);
window.addEventListener('resize', initMenuSlider);