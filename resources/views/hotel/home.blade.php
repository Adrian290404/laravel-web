@extends('layouts.hotel')

@section('title', 'Home')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/home/roomsSwiper.js') }}" defer></script>
    <script src="{{ asset('js/hotel/home/facilitiesSwiper.js') }}" defer></script>
    <script src="{{ asset('js/hotel/home/menuSwiper.js') }}" defer></script>
@endsection

@section('content')
    <main class="home">
        <section class="home__introduction">
            <h2 class="home__introduction__up">THE ULTIMATE LUXURY EXPERIENCE</h2>
            <h1 class="home__introduction__title">The Perfect Base For You</h1>
            <button class="home__introduction__button home__introduction__button--gold">TAKE A TOUR</button>
            <button class="home__introduction__button">LEARN MORE</button>
        </section>
        <section class="home__calendar">
            <form class="home__calendar__form">
                <div class="home__calendar__form__container">
                    <label class="home__calendar__form__container__label" for="date-start">Arrival Date</label>
                    <div class="home__calendar__form__container__input-container">
                        <img class="home__calendar__form__container__input-container__icon" src="{{ asset('img/hotel/home/icons/calendar.png') }}">
                        <input class="home__calendar__form__container__input-container__input" type="text" id="date-start" name="date-start" placeholder="24th march 2020">
                    </div>
                </div>
                <div class="home__calendar__form__container">
                    <label class="home__calendar__form__container__label" for="date-end">Departure Date:</label>
                    <div class="home__calendar__form__container__input-container">
                        <img class="home__calendar__form__container__input-container__icon" src="{{ asset('img/hotel/home/icons/calendar.png') }}">
                        <input class="home__calendar__form__container__input-container__input" type="text" id="date-end" name="date-end" placeholder="30th march 2020">
                    </div>
                </div>
                <button class="home__calendar__form__button" type="submit">CHECK AVAILABILITY</button>
            </form>
        </section>
        <section class="home__about-us">
            <article class="home__about-us__introduction">
                <h2 class="home__about-us__introduction__up">ABOUT US</h2>
                <div class="home__about-us__introduction__container">
                    <h1 class="home__about-us__introduction__container__title">Discover Our Underground.</h1>
                    <p class="home__about-us__introduction__container__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="home__about-us__introduction__container__button">BOOK NOW</button>
                </div>
            </article>
            <article class="home__about-us__pictures">
                <div class="home__about-us__pictures__strong-team">
                    <img class="home__about-us__pictures__strong-team__image" src="{{ asset('img/hotel/home/strongTeam.jpg') }}">
                    <div class="home__about-us__pictures__strong-team__container">
                        <img class="home__about-us__pictures__strong-team__container__icon" src="{{ asset('img/hotel/home/icons/strongTeam.png') }}">
                        <img class="home__about-us__pictures__strong-team__container__iconbg" src="{{ asset('img/hotel/home/strongTeamBg.png') }}">
                        <h2 class="home__about-us__pictures__strong-team__container__title">Strong Team</h2>
                        <p class="home__about-us__pictures__strong-team__container__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="home__about-us__pictures__luxury-room">
                    <img class="home__about-us__pictures__luxury-room__image" src="{{ asset('img/hotel/home/luxuryRoom.jpg') }}">
                    <div class="home__about-us__pictures__luxury-room__container">
                        <img class="home__about-us__pictures__luxury-room__container__icon" src="{{ asset('img/hotel/home/icons/luxuryRoom.png') }}">
                        <h2 class="home__about-us__pictures__luxury-room__container__title">Luxury Room</h2>
                        <p class="home__about-us__pictures__luxury-room__container__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </article>
        </section>
        <section class="home__rooms">
            <h2 class="home__rooms__up">ROOMS</h2>
            <h1 class="home__rooms__title">Hand Picked Rooms</h1>
            <div class="swiper home__rooms__container">
                <div class="swiper-wrapper">
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <img class="home__rooms__container__icons" src="{{ asset('img/hotel/home/icons/roomIcons.png') }}" alt="Iconos de Room">
                            <div class="home__rooms__container__slider">
                                <img class="home__rooms__container__slider__image" src="{{ $room->image }}" alt="Imagen de habitación">
                            </div>
                            <div class="home__rooms__container__info">
                                <h3 class="home__rooms__container__info__title">{{ $room->room_name }}</h3>
                                <p class="home__rooms__container__info__description">
                                    Bed type: {{ $room->bed_type }}
                                </p>
                                <p class="home__rooms__container__info__price">
                                ${{ $room->rate }}<span class="home__rooms__container__info__price--little">/Night</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev">
                    <img src="{{ asset('img/hotel/home/icons/left.png') }}" alt="Anterior">
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('img/hotel/home/icons/right.png') }}" alt="Siguiente">
                </div>
            </div>
          </section>
        <section class="home__intro-video">
            <h2 class="home__intro-video__up">INTRO VIDEO</h2>
            <h1 class="home__intro-video__title">Meet Witch Our Luxury Place.</h1>
            <p class="home__intro-video__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <div class="home__intro-video__gold-bg"></div>
            <div class="home__intro-video__video-container">
                <iframe 
                    class="home__intro-video__video-container__video" 
                    src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&autoplay=0&controls=1" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <button class="home__intro-video__button">BOOK NOW</button>
        </section>
        <section class="home__facilities">
            <h2 class="home__facilities__up">FACILITIES</h2>
            <h1 class="home__facilities__title">Core Features</h1>
            <div class="swiper home__facilities__swiper">
                <div class="swiper-wrapper home__facilities__container">
                    <div class="swiper-slide home__facilities__container__content home__facilities__container__content--first">
                        <p class="home__facilities__container__content__number">01</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/rating.png') }}" alt="Rating">
                        <h3 class="home__facilities__container__content__title">Have High Rating</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide home__facilities__container__content">
                        <p class="home__facilities__container__content__number">02</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/hours.png') }}" alt="Hours">
                        <h3 class="home__facilities__container__content__title">Quiet Hours</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide home__facilities__container__content">
                        <p class="home__facilities__container__content__number">03</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/location.png') }}" alt="Location">
                        <h3 class="home__facilities__container__content__title">Best Locations</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide home__facilities__container__content">
                        <p class="home__facilities__container__content__number">04</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/cancellation.png') }}" alt="Cancellation">
                        <h3 class="home__facilities__container__content__title">Free Cancellation</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide home__facilities__container__content">
                        <p class="home__facilities__container__content__number">05</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/payment.png') }}" alt="Payment">
                        <h3 class="home__facilities__container__content__title">Payment Options</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="swiper-slide home__facilities__container__content">
                        <p class="home__facilities__container__content__number">06</p>
                        <img class="home__facilities__container__content__icon" src="{{ asset('img/hotel/home/icons/offers.png') }}" alt="Offers">
                        <h3 class="home__facilities__container__content__title">Special Offers</h3>
                        <p class="home__facilities__container__content__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="home__menu">
            <img class="home__menu__icon home__menu__icon--mobile" src="{{ asset('img/hotel/home/icons/food.png') }}">
            <img class="home__menu__icon home__menu__icon--desktop" src="{{ asset('img/hotel/home/icons/foodDesktop.png') }}">
            <div class="home__menu__container">
                <h2 class="home__menu__container__up">MENU</h2>
                <h1 class="home__menu__container__title">Our Foods Menu</h1>
                <article class="home__menu__container__menu-container">
                    <div class="swiper home__menu__swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Eggs & Bacon">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Eggs & Bacon</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Tea or Coffee">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Tea or Coffee</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Chia Oatmeal">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Chia Oatmeal</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Fruit Parfait">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Fruit Parfait</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Marmalade Selection">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Marmalade Selection</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Cheese Plate">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Cheese Plate</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Fruit Parfait">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Fruit Parfait</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Marmalade Selection">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Marmalade Selection</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Cheese Plate">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Cheese Plate</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Eggs & Bacon">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Eggs & Bacon</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Tea or Coffee">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Tea or Coffee</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide home__menu__container__menu-container__food-container">
                                <img class="home__menu__container__menu-container__food-container__image" src="{{ asset('img/hotel/home/empty/square.png') }}" alt="Chia Oatmeal">
                                <div class="home__menu__container__menu-container__food-container__text">
                                    <h3 class="home__menu__container__menu-container__food-container__text__title">Chia Oatmeal</h3>
                                    <p class="home__menu__container__menu-container__food-container__text__description">
                                    Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="home__menu__container__menu-container__controls">
                        <img class="home__menu__container__menu-container__controls__controller home__menu__container__menu-container__controls__controller--left" src="{{ asset('img/hotel/home/icons/left.png') }}" alt="Prev">
                        <img class="home__menu__container__menu-container__controls__controller home__menu__container__menu-container__controls__controller--right" src="{{ asset('img/hotel/home/icons/right.png') }}" alt="Next">
                    </div>
                </article>

                <article class="home__menu__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="home__menu__slider__image" src="{{ asset('img/hotel/home/empty/bigSquare.png') }}" alt="Imagen 1">
                        </div>
                        <div class="swiper-slide">
                            <img class="home__menu__slider__image" src="{{ asset('img/hotel/home/empty/bigSquare.png') }}" alt="Imagen 2">
                        </div>
                        <div class="swiper-slide">
                            <img class="home__menu__slider__image" src="{{ asset('img/hotel/home/empty/bigSquare.png') }}" alt="Imagen 3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </article>
        </section>
        <section class="home__information">
            <div class="home__information__container home__information__container--first">
                <img class="home__information__container__image" src="{{ asset('img/hotel/home/icons/projects.png') }}">
                <h2 class="home__information__container__number">84k<span class="home__information__container__number home__information__container__number--little">+</span></h2>
                <p class="home__information__container__description">Projects are Completed</p>
            </div>
            <div class="home__information__container">
                <img class="home__information__container__image" src="{{ asset('img/hotel/home/icons/backers.png') }}">
                <h2 class="home__information__container__number">10M<span class="home__information__container__number home__information__container__number--little">+</span></h2>
                <p class="home__information__container__description">Active Backers Around World</p>
            </div>
            <div class="home__information__container">
                <img class="home__information__container__image" src="{{ asset('img/hotel/home/icons/stonks.png') }}">
                <h2 class="home__information__container__number">02k<span class="home__information__container__number home__information__container__number--little">+</span></h2>
                <p class="home__information__container__description">Categories Served</p>
            </div>
            <div class="home__information__container">
                <img class="home__information__container__image" src="{{ asset('img/hotel/home/icons/book.png') }}">
                <h2 class="home__information__container__number">100M<span class="home__information__container__number home__information__container__number--little">+</span></h2>
                <p class="home__information__container__description">Idea Raised Funds</p>
            </div>
        </section>
    </main>
@endsection