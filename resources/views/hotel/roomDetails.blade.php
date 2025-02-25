@extends('layouts.hotel')

@section('title', 'Room Details')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/roomDetails.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/roomDetails/relatedRoomsSwiper.js') }}" defer></script>
@endsection

@section('content')
    <main class="room-details">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">Room Details</span></h3>
            </div>
        </section>
        <section class="room-details__bed">
            <div class="room-details__bed__separator">
                <div class="room-details__bed__separator__left">
                    <div class="room-details__bed__separator__left__title-container">
                        <div>
                            <h2 class="room-details__bed__separator__left__title-container__up">DOUBLE BED</h2>
                            <h1 class="room-details__bed__separator__left__title-container__title">Luxury Double Bed</h1>
                        </div>
                        <p class="room-details__bed__separator__left__title-container__price">$345<span class="room-details__bed__separator__left__title-container__price--little">/Night</span></p>
                    </div>
                    <img class="room-details__bed__separator__left__image" src="{{ asset('img/hotel/roomDetails/empty/rectangle.png') }}">
                </div>
                <div class="room-details__bed__separator__right">
                    <h4 class="room-details__bed__separator__right__form-title">Check Availability</h4>
                    <form class="room-details__bed__separator__right__form">
                        <label class="room-details__bed__separator__right__form__label" for="date-start">Check in:</label>
                        <div class="room-details__bed__separator__right__form__input-container">
                            <input class="room-details__bed__separator__right__form__input-container__input" type="text" id="date-start" name="date-start" placeholder="Fri, 14th June 2020">
                            <img class="room-details__bed__separator__right__form__input-container__icon" src="{{ asset('img/hotel/roomDetails/icons/calendar.png') }}">
                        </div>
                        <label class="room-details__bed__separator__right__form__label" for="date-end">Check out:</label>
                        <div class="room-details__bed__separator__right__form__input-container">
                            <input class="room-details__bed__separator__right__form__input-container__input" type="text" id="date-end" name="date-end" placeholder="Sun, 16th June 2020">
                            <img class="room-details__bed__separator__right__form__input-container__icon" src="{{ asset('img/hotel/roomDetails/icons/calendar.png') }}">
                        </div>
                        <button class="room-details__bed__separator__right__form__button" type="submit">CHECK AVAILABILITY</button>
                    </form>
                </div>
            </div>
            <p class="room-details__bed__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </section>
        <section class="room-details__amenities">
            <h2 class="room-details__amenities__title">Amenities</h2>
            <hr class="room-details__amenities__line">            
            <div class="room-details__amenities__content">
                <article class="room-details__amenities__content__container">
                    <ul class="room-details__amenities__content__container__left">
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/air.png') }}"> Air conditioner</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/breakfast.png') }}"> Breakfast</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/cleaning.png') }}"> Cleaning</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/grocery.png') }}"> Grocery</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/shop.png') }}"> Shop near</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/support.png') }}"> 24/7 Online Support</li>
                        <li><img class="room-details__amenities__content__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/security.png') }}"> Smart Security</li>
                    </ul>
                    <ul class="room-details__amenities__content__container__right">
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/wifi.png') }}"> High speed WiFi</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/kitchen.png') }}"> Kitchen</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/shower.png') }}"> Shower</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/singleBed.png') }}"> Single bed</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/towels.png') }}"> Towels</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/locker.png') }}"> Strong Locker</li>
                        <li><img class="room-details__amenities__content__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/expertTeam.png') }}"> Expert Team</li>
                    </ul>
                </article>
                <article class="room-details__amenities__content__profile">
                    <div class="room-details__amenities__content__profile__image">
                        <img class="room-details__amenities__content__profile__image__picture" src="{{ asset('img/hotel/roomDetails/empty/rectangle.png') }}">
                        <img class="room-details__amenities__content__profile__image__tick" src="{{ asset('img/hotel/roomDetails/icons/tick.png') }}">
                    </div>
                    <h3 class="room-details__amenities__content__profile__name">Rosalina D. William</h3>
                    <h4 class="room-details__amenities__content__profile__position">Founder, Qux Co.</h4>
                    <p class="room-details__amenities__content__profile__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </article>
            </div>
        </section>
        <section class="room-details__cancellation">
            <h2 class="room-details__cancellation__title">Cancellation</h2>
            <hr class="room-details__cancellation__line">
            <p class="room-details__cancellation__description">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
        </section>
        <section class="room-details__related-rooms">
            <h2 class="room-details__related-rooms__title">Related Rooms</h2>
            <hr class="room-details__related-rooms__line">
            <div class="swiper room-details__related-rooms__container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="room-details__related-rooms__container__icons" src="{{ asset('img/hotel/home/icons/roomIcons.png') }}" alt="Iconos de Room">
                        <div class="room-details__related-rooms__container__slider">
                            <img class="room-details__related-rooms__container__slider__image" src="{{ asset('img/hotel/home/empty/horizontalRectangle.png') }}" alt="Imagen de habitación">
                        </div>
                        <div class="room-details__related-rooms__container__info">
                            <h3 class="room-details__related-rooms__container__info__title">Minimal Duplex Room</h3>
                            <p class="room-details__related-rooms__container__info__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <p class="room-details__related-rooms__container__info__details room-details__related-rooms__container__info__details--price">$345/Night<span class="room-details__related-rooms__container__info__details room-details__related-rooms__container__info__details--booking">Booking Now</span></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="room-details__related-rooms__container__icons" src="{{ asset('img/hotel/home/icons/roomIcons.png') }}" alt="Iconos de Room">
                        <div class="room-details__related-rooms__container__slider">
                            <img class="room-details__related-rooms__container__slider__image" src="{{ asset('img/hotel/home/empty/horizontalRectangle.png') }}" alt="Imagen de habitación">
                        </div>
                        <div class="room-details__related-rooms__container__info">
                            <h3 class="room-details__related-rooms__container__info__title">Luxury Suite</h3>
                            <p class="room-details__related-rooms__container__info__description">
                                Habitación de lujo con acabados modernos y confort inigualable.
                            </p>
                            <p class="room-details__related-rooms__container__info__details room-details__related-rooms__container__info__details--price">$345/Night<span class="room-details__related-rooms__container__info__details room-details__related-rooms__container__info__details--booking">Booking Now</span></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="{{ asset('img/hotel/home/icons/left.png') }}" alt="Next">
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('img/hotel/home/icons/right.png') }}" alt="Prev">
                </div>
            </div>
        </section>
    </main>
@endsection