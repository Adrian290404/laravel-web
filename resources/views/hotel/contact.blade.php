<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="{{ asset('css/hotel/contact.css') }}">
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

    <main class="contact">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">New Details</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">Blog</span></h3>
            </div>
        </section>
        <section class="contact__details-container">
            <article class="contact__details-container__detail">
                <img class="contact__details-container__detail__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber3.png') }}">
                <div class="contact__details-container__detail__text-container">
                    <h3 class="contact__details-container__detail__text-container__title">Hotel Address</h3>
                    <p class="contact__details-container__detail__text-container__description">19/A, Cirikon City hall Tower<br>New York, NYC</p>
                </div>
                <p class="contact__details-container__detail__number">01</p>
            </article>
            <article class="contact__details-container__detail">
                <img class="contact__details-container__detail__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber1.png') }}">
                <div class="contact__details-container__detail__text-container">
                    <h3 class="contact__details-container__detail__text-container__title">Phone Number</h3>
                    <p class="contact__details-container__detail__text-container__description">+ 97656 8675 7864 7<br>+ 876 766 8675 765 6</p>
                </div>
                <p class="contact__details-container__detail__number">02</p>
            </article>
            <article class="contact__details-container__detail">
                <img class="contact__details-container__detail__icon" src="{{ asset('img/hotel/footer/icons/phoneNumber2.png') }}">
                <div class="contact__details-container__detail__text-container">
                    <h3 class="contact__details-container__detail__text-container__title">Email</h3>
                    <p class="contact__details-container__detail__text-container__description">info@webmail.com<br>jobs.webmail@mail.com</p>
                </div>
                <p class="contact__details-container__detail__number">03</p>
            </article>
            <img class="contact__details-container__image" src="{{ asset('img/hotel/contact/empty/rectangle.png') }}">
        </section>
        <section class="contact__form-container">
            <form class="contact__form-container__form">
                <div class="flex">
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/name.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" placeholder="Your full name">
                    </div>
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/phone.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" placeholder="Add phone number">
                    </div>
                </div>
                <div class="flex">
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/email.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" placeholder="Enter email address">
                    </div>
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/subject.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" placeholder="Enter subject">
                    </div>
                </div>
                <div class="contact__form-container__form__input-container">
                    <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/message.png') }}">
                    <textarea class="contact__form-container__form__input-container__input contact__form-container__form__input-container__input--textarea" placeholder="Enter message"></textarea>
                </div>
            </form>
            <button class="contact__form-container__button">SEND</button>
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