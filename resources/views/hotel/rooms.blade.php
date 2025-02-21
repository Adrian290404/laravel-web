<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="{{ asset('css/hotel/room.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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

    <main class="rooms">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">Rooms</span></h3>
            </div>
        </section>
        <section class="rooms__rooms-info">
            @foreach ($rooms as $room)
                <article class="rooms__rooms-info__room">
                    <img class="rooms__rooms-info__room__image" src="{{ $room->image }}">
                    <img class="rooms__rooms-info__room__icons" src="{{ asset('img/hotel/home/icons/roomIcons.png') }}">
                    <h3 class="rooms__rooms-info__room__title">{{ $room->room_name }}</h3>
                    <p class="rooms__rooms-info__room__description">Bed type: {{ $room->bed_type }}</p>
                    <p class="rooms__rooms-info__room__details rooms__rooms-info__room__details--price">${{ $room->rate  }}/Night<span class="rooms__rooms-info__room__details rooms__rooms-info__room__details--booking">Booking Now</span></p>
                </article>
            @endforeach
            <div class="rooms__rooms-info__controls">
                <img class="rooms__rooms-info__controls__arrow" src="{{ asset('img/hotel/rooms/icons/left.png') }}">
                <button class="rooms__rooms-info__controls__number">1</button>
                <button class="rooms__rooms-info__controls__number rooms__rooms-info__controls__number--selected">2</button>
                <button class="rooms__rooms-info__controls__number">3</button>
                <button class="rooms__rooms-info__controls__number">...</button>
                <button class="rooms__rooms-info__controls__number">10</button>
                <img class="rooms__rooms-info__controls__arrow" src="{{ asset('img/hotel/rooms/icons/right.png') }}">
            </div>
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