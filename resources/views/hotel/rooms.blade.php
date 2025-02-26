@extends('layouts.hotel')

@section('title', 'Room')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/room.css') }}">
@endsection

@section('content')
    <main class="rooms">
        <section class="introduction">
            <h2 class="introduction__up">THE ULTIMATE LUXURY</h2>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__container">
                <h3 class="introduction__container__page-marker">Home | <span class="introduction__container__page-marker introduction__container__page-marker--marked">Rooms</span></h3>
            </div>
        </section>

        @if(isset($dates))
            <h2 class="text">Available rooms between {{ $dates['start']->format('F j, Y') }} and {{ $dates['end']->format('F j, Y') }}</h2>
        @endif

        @if($rooms->isEmpty())
            <h2 class="text">No rooms found between the selected dates.</h2>
        @endif

        <section class="rooms__rooms-info">
            @foreach ($rooms as $room)
                <article class="rooms__rooms-info__room" onclick="window.location.href='{{ route('hotel.roomDetails', $room->id) }}'">
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
@endsection