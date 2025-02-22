<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="{{ asset('css/hotel/aboutUs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/aboutUs/facilitiesSwiper.js') }}" defer></script>
    <script src="{{ asset('js/hotel/aboutUs/factsSwiper.js') }}" defer></script>
    <script src="{{ asset('js/hotel/header/dropdown.js') }}" defer></script>
</head>
<body>

    <header class="header">
        <p class="header__upper-text">We Make Your Feel Comfortable</p>
    </header>
    <div class="container">
        <nav class="container__card">
            <img class="container__card__dropdown" id="dropdownOpen" src="{{ asset('img/hotel/header/icons/dropdown.png') }}">
            <img class="container__card__dropdown hidden" id="dropdownClose" src="{{ asset('img/hotel/header/icons/closeDropdown.png') }}">
            <a class="container__card__link" href="{{ route('home') }}"><img class="container__card__link__logo container__card__link__logo--mobile" src="{{ asset('img/hotel/header/logo.png') }}"></a>
            <a class="container__card__link" href="{{ route('home') }}"><img class="container__card__link__logo container__card__link__logo--desktop" src="{{ asset('img/hotel/header/logoDesktop.png') }}"></a>
            <ul class="container__card__navbar" id="navBar">
                <a class="container__card__navbar__link" href="{{ route('about') }}"><li class="container__card__navbar__link__page">About Us</li></a>
                <a class="container__card__navbar__link" href="{{ route('rooms') }}"><li class="container__card__navbar__link__page">Rooms</li></a>
                <a class="container__card__navbar__link" href="{{ route('offers') }}"><li class="container__card__navbar__link__page">Offers</li></a>
                <a class="container__card__navbar__link" href="{{ route('contact') }}"><li class="container__card__navbar__link__page">Contact</li></a>
            </ul>
            <div class="container__card__icons">
                <img class="container__card__icons__icon" src="{{ asset('img/hotel/header/icons/login.png') }}">
                <img class="container__card__icons__icon" src="{{ asset('img/hotel/header/icons/search.png') }}">
            </div>
        </nav>
    </div>

    <main class="about-us">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">About Us</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">About</span></h3>
            </div>
        </section>
        <section class="about-us__general-info">
            <div class="about-us__general-info__video-container">
                <iframe 
                class="about-us__general-info__video-container__video" 
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&autoplay=0&controls=1" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
                </iframe>
            </div>
            <p class="about-us__general-info__description">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
            <article class="about-us__general-info__icons-text">
                <div class="about-us__general-info__icons-text__container">
                    <img class="about-us__general-info__icons-text__container__image" src="{{ asset('img/hotel/about/icons/breakfast.png') }}" alt="Breakfast Icon">
                    <p class="about-us__general-info__icons-text__container__text">BREAKFAST</p>
                </div>
                <div class="about-us__general-info__icons-text__container about-us__general-info__icons-text__container--marked">
                    <img class="about-us__general-info__icons-text__container__image" src="{{ asset('img/hotel/about/icons/airport.png') }}" alt="Airport Pickup Icon">
                    <p class="about-us__general-info__icons-text__container__text">AIRPORT PICKUP</p>
                </div>
                <div class="about-us__general-info__icons-text__container">
                    <img class="about-us__general-info__icons-text__container__image" src="{{ asset('img/hotel/about/icons/guide.png') }}" alt="City Guide Icon">
                    <p class="about-us__general-info__icons-text__container__text">CITY GUIDE</p>
                </div>
                <div class="about-us__general-info__icons-text__container">
                    <img class="about-us__general-info__icons-text__container__image" src="{{ asset('img/hotel/about/icons/luxuryRoom.png') }}" alt="Luxury Room Icon">
                    <p class="about-us__general-info__icons-text__container__text">LUXURY ROOM</p>
                </div>
            </article>
        </section>
        <section class="about-us__restaurant">
            <div class="about-us__restaurant__container">
                <div class="about-us__restaurant__container__left">
                    <img class="about-us__restaurant__container__left__image" src="{{ asset('img/hotel/about/empty/rectangle.png') }}">
                </div>
                <div class="about-us__restaurant__container__right">
                    <h2 class="about-us__restaurant__container__right__up">RESTAURANT</h2>
                    <h1 class="about-us__restaurant__container__right__title">Discover Our Delicious & Exquisite Food</h1>
                    <p class="about-us__restaurant__container__right__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <button class="about-us__restaurant__container__right__button">LEARN MORE</button>
                </div>
            </div>
        </section>
        <section class="about-us__facilities">
            <h2 class="about-us__facilities__up">FACILITIES</h2>
            <h1 class="about-us__facilities__title">Core Features</h1>
            <div class="swiper about-us__facilities__swiper">
                <div class="swiper-wrapper about-us__facilities__container">
                    <div class="swiper-slide about-us__facilities__container__content about-us__facilities__container__content--first">
                        <p class="about-us__facilities__container__content__number">01</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/rating.png') }}" alt="Rating">
                        <h3 class="about-us__facilities__container__content__title">Have High Rating</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide about-us__facilities__container__content">
                        <p class="about-us__facilities__container__content__number">02</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/hours.png') }}" alt="Hours">
                        <h3 class="about-us__facilities__container__content__title">Quiet Hours</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide about-us__facilities__container__content">
                        <p class="about-us__facilities__container__content__number">03</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/location.png') }}" alt="Location">
                        <h3 class="about-us__facilities__container__content__title">Best Locations</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide about-us__facilities__container__content">
                        <p class="about-us__facilities__container__content__number">04</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/cancellation.png') }}" alt="Cancellation">
                        <h3 class="about-us__facilities__container__content__title">Free Cancellation</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide about-us__facilities__container__content">
                        <p class="about-us__facilities__container__content__number">05</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/payment.png') }}" alt="Payment">
                        <h3 class="about-us__facilities__container__content__title">Payment Options</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide about-us__facilities__container__content">
                        <p class="about-us__facilities__container__content__number">06</p>
                        <img class="about-us__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/offers.png') }}" alt="Offers">
                        <h3 class="about-us__facilities__container__content__title">Special Offers</h3>
                        <p class="about-us__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="about-us__counter">
            <h2 class="about-us__counter__up">COUNTER</h2>
            <h1 class="about-us__counter__title">Some Fun Facts</h1>
            <article class="about-us__counter__facts-container">
                <div class="about-us__counter__facts-container__fact">
                    <img class="about-us__counter__facts-container__fact__image" src="{{ asset('img/hotel/about/icons/happyUsers.png') }}" alt="Happy Users Icon">
                    <div class="about-us__counter__facts-container__fact__content">
                        <h3 class="about-us__counter__facts-container__fact__content__title">8000</h3>
                        <p class="about-us__counter__facts-container__fact__content__description">Happy Users</p>
                    </div>
                    <img class="about-us__counter__facts-container__fact__arrow" src="{{ asset('img/hotel/about/icons/arrow.png') }}" alt="Arrow Icon">
                </div>
                <div class="about-us__counter__facts-container__fact">
                    <img class="about-us__counter__facts-container__fact__image" src="{{ asset('img/hotel/about/icons/review.png') }}">
                    <div class="about-us__counter__facts-container__fact__content">
                        <h3 class="about-us__counter__facts-container__fact__content__title">10M</h3>
                        <p class="about-us__counter__facts-container__fact__content__description">Reviews & Appriciate</p>
                    </div>
                    <img class="about-us__counter__facts-container__fact__arrow" src="{{ asset('img/hotel/about/icons/arrow.png') }}">
                </div>
                <div class="about-us__counter__facts-container__fact">
                    <img class="about-us__counter__facts-container__fact__image" src="{{ asset('img/hotel/about/icons/countryCoverage.png') }}">
                    <div class="about-us__counter__facts-container__fact__content">
                        <h3 class="about-us__counter__facts-container__fact__content__title">100</h3>
                        <p class="about-us__counter__facts-container__fact__content__description">Country Coverage</p>
                    </div>
                    <img class="about-us__counter__facts-container__fact__arrow" src="{{ asset('img/hotel/about/icons/arrow.png') }}">
                </div>
            </article>
            <article class="about-us__counter__slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="about-us__counter__slider__image" src="{{ asset('img/hotel/about/empty/rectangle.png') }}" alt="Imagen 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="about-us__counter__slider__image" src="{{ asset('img/hotel/about/empty/rectangle.png') }}" alt="Imagen 1">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </article>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__content">
            <article class="footer__content__introduction">
                <img class="footer__content__introduction__logo" src="{{ asset('img/hotel/footer/logo.png') }}">
                <p class="footer__content__introduction__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div class="footer__content__introduction__social-media">
                    <img class="footer__content__introduction__social-media__icon" src="{{ asset('img/hotel/footer/icons/facebook.png') }}">
                    <img class="footer__content__introduction__social-media__icon footer__content__introduction__social-media__icon--active" src="{{ asset('img/hotel/footer/icons/twitter.png') }}">
                    <img class="footer__content__introduction__social-media__icon" src="{{ asset('img/hotel/footer/icons/be.png') }}">
                    <img class="footer__content__introduction__social-media__icon" src="{{ asset('img/hotel/footer/icons/linkedin.png') }}">
                    <img class="footer__content__introduction__social-media__icon" src="{{ asset('img/hotel/footer/icons/youtube.png') }}">
                </div>
            </article>
            <article class="footer__content__services">
                <h1 class="footer__content__services__title">Services.</h1>
                <div class="footer__content__services__list">
                    <ul class="footer__content__services__list__left">
                        <li>+ Resturent & Bar</li>
                        <li>+ Swimming Pool</li>
                        <li>+ Wellness & Spa</li>
                        <li>+ Restaurant </li>
                        <li>+ Conference Room</li>
                        <li>+ Coctail Party House</li>
                    </ul>
                    <ul class="footer__content__services__list__right">
                        <li>+ Gaming Zone</li>
                        <li>+ Marrige Party</li>
                        <li>+ Party Planning</li>
                        <li>+ Tour Consultancy</li>
                    </ul>
                </div>
            </article>
            <article class="footer__content__contact-us">
                <h1 class="footer__content__contact-us__title">Contact Us.</h1>
                <div class="footer__content__contact-us__phone">
                    <img class="footer__content__contact-us__phone__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber1.png') }}">
                    <div class="footer__content__contact-us__phone__text-container">
                        <h2 class="footer__content__contact-us__phone__text-container__title">Phone Number</h2>
                        <h4 class="footer__content__contact-us__phone__text-container__subtitle">+987 876 765 76 577</h4>
                    </div>
                </div>
                <div class="footer__content__contact-us__phone">
                    <img class="footer__content__contact-us__phone__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber2.png') }}">
                    <div class="footer__content__contact-us__phone__text-container">
                        <h2 class="footer__content__contact-us__phone__text-container__title">Phone Number</h2>
                        <h4 class="footer__content__contact-us__phone__text-container__subtitle">+987 876 765 76 577</h4>
                    </div>
                </div>
                <div class="footer__content__contact-us__phone footer__contact-us__phone--last">
                    <img class="footer__content__contact-us__phone__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber3.png') }}">
                    <div class="footer__content__contact-us__phone__text-container">
                        <h2 class="footer__content__contact-us__phone__text-container__title">Phone Number</h2>
                        <h4 class="footer__content__contact-us__phone__text-container__subtitle">+987 876 765 76 577</h4>
                    </div>
                </div>
            </article>
        </section>
        <section class="footer__terms-of-use">
            <h2 class="footer__terms-of-use__text footer__terms-of-use__text--copyright">Copyright By@Example - 2020</h2>
            <h2 class="footer__terms-of-use__text">Terms of use | Privacy Environmental Policy</h2>
        </section>
    </footer>
</body>
</html>