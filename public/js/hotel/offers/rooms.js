let swiperPopularRooms = false;

const checkVariableSwipers = () => {
  const anchoVentana = window.innerWidth;
  if (anchoVentana < 1000) {
    if (!swiperPopularRooms) {
      swiperPopularRooms = new Swiper('.popular-list-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper__controller--right',
          prevEl: '.swiper__controller--left',
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: true,
        },
    })
    }

  } else {
    if (swiperPopularRooms) {
      swiperPopularRooms.destroy(true, true);
      swiperPopularRooms = false;
    }
  }
}

checkVariableSwipers();

window.addEventListener('resize', checkVariableSwipers);