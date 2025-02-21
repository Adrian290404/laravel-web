let swiper = new Swiper('.home__rooms__container', {
    loop: true, 
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: { delay: 3000 },
    effect: 'slide'
});