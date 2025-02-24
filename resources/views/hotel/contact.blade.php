@extends('layouts.hotel')

@section('title', 'Contact')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/hotel/contact.css') }}">
@endsection

@section('content')
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
            <form class="contact__form-container__form" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="flex">
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/name.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" name="name" placeholder="Your full name">
                    </div>
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/phone.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" name="phone" placeholder="Add phone number">
                    </div>
                </div>
                <div class="flex">
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/email.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" name="email" placeholder="Enter email address">
                    </div>
                    <div class="contact__form-container__form__input-container">
                        <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/subject.png') }}">
                        <input class="contact__form-container__form__input-container__input" type="text" name="subject" placeholder="Enter subject">
                    </div>
                </div>
                <div class="contact__form-container__form__input-container">
                    <img class="contact__form-container__form__input-container__icon" src="{{ asset('img/hotel/contact/icons/message.png') }}">
                    <textarea class="contact__form-container__form__input-container__input contact__form-container__form__input-container__input--textarea" name="message" placeholder="Enter message"></textarea>
                </div>
                <button class="contact__form-container__button" type="submit">SEND</button>
            </form>
        </section>
    </main>
@endsection