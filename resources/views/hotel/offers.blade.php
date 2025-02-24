<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link rel="stylesheet" href="{{ asset('css/hotel/offers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/offers/rooms.js') }}" defer></script>
    <script src="{{ asset('js/hotel/header/dropdown.js') }}" defer></script>
</head>
<body>
@extends('layouts.hotel')

@section('title', 'Offers')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/offers.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/hotel/offers/rooms.js') }}" defer></script>
@endsection

@section('content')
    <main class="offers">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">Our Offers</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">Offers</span></h3>
            </div>
        </section>
        @foreach ($rooms as $room)
            <section class="offers__offert">
                <article class="offers__offert__image-container">
                    <img class="offers__offert__image-container__image" src="{{ $room->image }}">
                </article>
                <div class="offers__offert__content">
                    <hr class="offers__offert__content__golden-line">
                    <h2 class="offers__offert__content__up">{{ $room->room_name }}</h2>
                    <h1 class="offers__offert__content__title">Luxury {{ $room->room_name }}</h1>
                    <div class="offers__offert__content__price-container">
                        <div class="offers__offert__content__price-container__prev-price-container">
                            <p class="offers__offert__content__price-container__prev-price-container__previous-price">${{ $room->rate }}</p><span class="offers__offert__content__price-container__prev-price-container__previous-price--little">/Night</span>
                        </div>
                        <p class="offers__offert__content__price-container__current-price">${{ ($room->rate) - ((($room->rate) * rand(10, 40)) / 100) }}<span class="offers__offert__content__price-container__current-price--little">/Night</span></p>
                    </div>
                    <hr class="offers__offert__content__grey-line">
                    <div class="offers__offert__content__information">
                        <div class="offers__offert__content__information__left">
                            <p class="offers__offert__content__information__left__description">Bed type: {{ $room->bed_type }}</p>
                        </div>
                        <div class="offers__offert__content__information__right">
                            <div class="offers__offert__content__information__right__container">  
                                <ul class="offers__offert__content__information__right__container__left">
                                    <li><img class="offers__offert__content__information__right__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/air.png') }}"> Air conditioner</li>
                                    <li><img class="offers__offert__content__information__right__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/breakfast.png') }}"> Breakfast</li>
                                    <li><img class="offers__offert__content__information__right__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/cleaning.png') }}"> Cleaning</li>
                                    <li><img class="offers__offert__content__information__right__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/grocery.png') }}"> Grocery</li>
                                    <li><img class="offers__offert__content__information__right__container__left__icon" src="{{ asset('img/hotel/roomDetails/icons/shop.png') }}"> Shop near</li>
                                </ul>
                                <ul class="offers__offert__content__information__right__container__right">
                                    <li><img class="offers__offert__content__information__right__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/wifi.png') }}"> High speed WiFi</li>
                                    <li><img class="offers__offert__content__information__right__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/kitchen.png') }}"> Kitchen</li>
                                    <li><img class="offers__offert__content__information__right__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/shower.png') }}"> Shower</li>
                                    <li><img class="offers__offert__content__information__right__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/singleBed.png') }}"> Single bed</li>
                                    <li><img class="offers__offert__content__information__right__container__right__icon" src="{{ asset('img/hotel/roomDetails/icons/towels.png') }}"> Towels</li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                    <button class="offers__offert__content__button">BOOK NOW</button>
                </div>
            </section>
        @endforeach
        <section class="offers__popular-list">
            <h2 class="offers__popular-list__up">POPULAR LIST</h2>
            <h1 class="offers__popular-list__title">Popular Rooms</h1>
            <div class="swiper popular-list-swiper popular-list__room">
                <div class="swiper-wrapper">
                    @foreach ($popularRooms as $popularRoom)
                        <div class="swiper-slide">
                            <article class="offers__popular-list__room__container">
                                <div class="offers__popular-list__room__container__slider">
                                    <img class="offers__popular-list__room__container__slider__image" src="{{ $popularRoom->image }}">
                                </div>
                                <img class="offers__popular-list__room__container__icons" src="{{ asset('img/hotel/home/icons/roomIcons.png') }}">
                                <h3 class="offers__popular-list__room__container__title">{{ $popularRoom->room_name }}</h3>
                                <p class="offers__popular-list__room__container__description">Bed type: {{ $popularRoom->room_name }}</p>
                                <p class="offers__popular-list__room__container__details offers__popular-list__room__container__details--price">${{ $popularRoom->rate }}/Night<span class="offers__popular-list__room__container__details offers__popular-list__room__container__details--booking">Booking Now</span></p>
                            </article>
                        </div>
                    @endforeach
                </div>
                <img class="swiper__controller swiper__controller--left" src="{{ asset('img/hotel/home/icons/left.png') }}">
                <img class="swiper__controller swiper__controller--right" src="{{ asset('img/hotel/home/icons/right.png') }}">
            </div>
        </section>
    </main>
@endsection