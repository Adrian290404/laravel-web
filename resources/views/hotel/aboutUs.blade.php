@extends('layouts.hotel')

@section('title', 'About Us')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/aboutUs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/aboutUs/facilitiesSwiper.js') }}" defer></script>
    <script src="{{ asset('js/hotel/aboutUs/factsSwiper.js') }}" defer></script>
@endsection

@section('content')
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
@endsection