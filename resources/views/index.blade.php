@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Explore Vista Bali - Tours, Activities & Shuttle Services')

{{-- SEO --}}
@section('meta_description',
    'Explore Bali effortlessly with Explore Vista Bali. Choose from private tours, thrilling
    activities, and reliable shuttle services across the island.')
@section('meta_keywords',
    'Bali tours, Bali travel, Bali activities, Bali shuttle, Bali private car, Bali transport,
    Bali adventures')
@section('og_title', 'Explore Vista Bali - Discover the Island Your Way')
@section('og_description',
    'From scenic tours to exciting adventures — Explore Vista Bali helps you experience the
    island like never before.')
    {{-- @section('og_image', asset('images/landing-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}

@section('title', 'Explore Vista Bali')
@section('content')

    {{-- ? HERO SECTION --}}
    <section class="relative min-h-[105dvh] lg:min-h-[100dvh] flex items-end  pb-20 2xl:pb-28 text-white">
        <div class="absolute inset-y-0 inset-0 bg-black -z-20 min-h-[105dvh] lg:min-h-[100dvh]">
            <video autoplay loop class="opacity-50 h-full w-full object-cover min-h-[105dvh] lg:min-h-[100dvh]"
                src="{{ asset('video/1013.mp4') }}">
            </video>
        </div>

        <div
            class="flex flex-col lg:flex-row w-full justify-between gap-20 items-center lg:items-end px-8 container mx-auto" data-aos="fade-up" >
            <div class="flex flex-col items-center md:items-start" >
                <p
                    class="text-start md:text-center text-gray-200 py-2 px-4 rounded-md text-base w-fit font-inter italic mb-1 backdrop-blur-[10px] backdrop-saturate-[165%] bg-[rgba(160,160,160,0.2)] border border-[rgba(255,255,255,0.125)]">
                    Welcome to Bali, Indonesia
                </p>

                <h1
                    class="text-center md:text-start font-roboto font-semibold text-4xl md:text-5xl 2xl:text-6xl max-w-lg 2xl:max-w-2xl leading-snug mb-10">
                    Get to know <span class="font-playfair italic">Bali</span> with Explore Vista Bali!
                </h1>

                <x-wave-button href="{{ route('services.available-packages') }}"
                    firstTextClasses="text-cst-yellow-400 font-inter font-medium"
                    secondTextClasses="text-black font-playfair font-bold italic"
                    class="text-xl w-fit py-1.5 px-5 bg-transparent border-2 border-cst-yellow-400 rounded-sm hover:bg-cst-yellow-400">
                    Lets Explore!
                </x-wave-button>
            </div>

            <div class="flex flex-col items-center lg:items-end">
                <div class="bg-white text-black p-4 font-inter rounded-sm mb-4 w-full lg:max-w-sm">
                    <p class="text-base mb-4">
                        “This service is great! I love it, I would recommend this to my relatives”
                    </p>
                    <div class="">
                        <h4 class="text-base font-roboto leading-tight font-medium italic">Jackson Harry</h4>
                        <a href="#" class="text-sm text-gray-500">@loremipsum</a>
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    <p class="font-playfair italic font-medium text-2xl text-white">
                        Follow our socials
                    </p>
                    <x-social-media />
                </div>
            </div>
        </div>
    </section>

    {{-- ? EXPERIENCE SECTION --}}
    <section class="relative overflow-x-hidden">
        <img 
            class="hidden -z-10 lg:block absolute -left-28 top-1/3 rotate-45 w-80 opacity-30"
            src="{{ asset('img/decoration_left.png') }}" alt="left flower decoration"
        >
        <img 
            class="hidden -z-10 lg:block absolute -right-28 w-80 top-1/3 opacity-30"
            src="{{ asset('img/decoration_right.png') }}" alt="right flower decoration"
        >

        <div class="px-8 py-24 relative mx-auto container">

            <div class="flex flex-col-reverse md:flex-row gap-5 lg:gap-0 justify-between md:items-center w-full mb-20" >
                <p class="text-lg font-inter font-normal md:max-w-md lg:max-w-lg" data-aos="fade-up">
                    Explore Vista Bali is trusted by travelers worldwide, delivering seamless tours and unforgettable
                    experiences across the island.
                </p>
                <div class="flex flex-col items-start md:items-end" data-aos="fade-up">
                    <p class="font-inter text-gray-600 text-base">Tours, places, clients</p>
                    <h2 class="font-roboto text-4xl font-bold text-end whitespace-nowrap">
                        Our <i class="font-playfair">Experience</i>
                    </h2>
                </div>
            </div>

            <div class="flex flex-col lg:px-14 md:flex-row gap-4 lg:gap-15 items-center justify-center">
                <div class="flex-1 w-full md:max-w-80" data-aos="fade-up">
                   <div 
                        x-data="{
                            count: 0,
                            target: {{ $hooks['journeys'] }},
                            start() {
                                let observer = new IntersectionObserver((entries) => {
                                    entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                            let step = Math.ceil(this.target / 50);
                                            let interval = setInterval(() => {
                                                this.count += step;
                                                if (this.count >= this.target) {
                                                    this.count = this.target;
                                                    clearInterval(interval);
                                                }
                                            }, 100);
                                            observer.disconnect();
                                        }
                                    });
                                });
                                observer.observe($el);
                            }
                        }"
                        x-init="$nextTick(() => start())"
                        class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40"
                    >
                        <img class="absolute inset-0 w-full h-full object-cover -z-10"
                            src="{{ asset('img/places.webp') }}"
                            alt="">
                        <div class="pt-32 pb-20">
                            <span class="font-roboto text-cst-yellow-400 font-bold text-7xl" x-text="count + '+'"></span>
                        </div>
                    </div>
                    <div class="bg-cst-green-800 px-5 py-8 flex justify-center items-center gap-3">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.91667 18.3333L18.1667 10.0833L15.7917 7.75L9.91667 13.625L7.54167 11.25L5.16667 13.625L9.91667 18.3333ZM0 30V3.33333C0 2.41667 0.326389 1.63194 0.979167 0.979167C1.63194 0.326389 2.41667 0 3.33333 0H20C20.9167 0 21.7014 0.326389 22.3542 0.979167C23.0069 1.63194 23.3333 2.41667 23.3333 3.33333V30L11.6667 25L0 30ZM3.33333 24.9167L11.6667 21.3333L20 24.9167V3.33333H3.33333V24.9167Z"
                                fill="#CAA638" />
                        </svg>
                        <p class="text-cst-green-200 uppercase font-extrabold text-3xl font-inter">journeys</p>
                    </div>
                </div>
                <div class="flex-1 w-full md:max-w-80" data-aos="fade-up" data-aos-delay="300">
                    <div 
                        x-data="{
                            count: 0,
                            target: {{ $hooks['places'] }},
                            start() {
                                let observer = new IntersectionObserver((entries) => {
                                    entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                            let step = Math.ceil(this.target / 50);
                                            let interval = setInterval(() => {
                                                this.count += step;
                                                if (this.count >= this.target) {
                                                    this.count = this.target;
                                                    clearInterval(interval);
                                                }
                                            }, 100);
                                            observer.disconnect();
                                        }
                                    });
                                });
                                observer.observe($el);
                            }
                        }"
                        x-init="$nextTick(() => start())"
                        class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40"
                    >
                        <img class="absolute inset-0 w-full h-full object-cover -z-10"
                            src="{{ asset('img/tourists.webp') }}"
                            alt="">
                        <div class="pt-32 pb-20">
                            <span class="font-roboto text-cst-yellow-400 font-bold text-7xl" x-text="count + '+'"></span>
                        </div>
                    </div>
                    <div class="bg-cst-green-800 px-5 py-8 flex justify-center items-center gap-3">
                        <svg class="size-5 text-cst-yellow-400" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.25 29.5C1.69444 29.7222 1.18056 29.6597 0.708333 29.3125C0.236111 28.9653 0 28.5 0 27.9167V4.58333C0 4.22222 0.104167 3.90278 0.3125 3.625C0.520833 3.34722 0.805556 3.13889 1.16667 3L10 0L20 3.5L27.75 0.5C28.3056 0.277778 28.8194 0.340278 29.2917 0.6875C29.7639 1.03472 30 1.5 30 2.08333V16.125C29.5833 15.4861 29.0903 14.9028 28.5208 14.375C27.9514 13.8472 27.3333 13.3889 26.6667 13V4.5L21.6667 6.41667V11.6667C21.0833 11.6667 20.5139 11.7153 19.9583 11.8125C19.4028 11.9097 18.8611 12.0556 18.3333 12.25V6.41667L11.6667 4.08333V25.875L2.25 29.5ZM3.33333 25.5L8.33333 23.5833V4.08333L3.33333 5.75V25.5ZM21.6667 25C22.6111 25 23.3958 24.7222 24.0208 24.1667C24.6458 23.6111 24.9722 22.7778 25 21.6667C25.0278 20.7222 24.7153 19.9306 24.0625 19.2917C23.4097 18.6528 22.6111 18.3333 21.6667 18.3333C20.7222 18.3333 19.9306 18.6528 19.2917 19.2917C18.6528 19.9306 18.3333 20.7222 18.3333 21.6667C18.3333 22.6111 18.6528 23.4028 19.2917 24.0417C19.9306 24.6806 20.7222 25 21.6667 25ZM21.6667 28.3333C19.8333 28.3333 18.2639 27.6806 16.9583 26.375C15.6528 25.0694 15 23.5 15 21.6667C15 19.8333 15.6528 18.2639 16.9583 16.9583C18.2639 15.6528 19.8333 15 21.6667 15C23.5 15 25.0694 15.6528 26.375 16.9583C27.6806 18.2639 28.3333 19.8333 28.3333 21.6667C28.3333 22.3056 28.2569 22.9097 28.1042 23.4792C27.9514 24.0486 27.7222 24.5833 27.4167 25.0833L31.6667 29.3333L29.3333 31.6667L25.0833 27.4167C24.5833 27.7222 24.0486 27.9514 23.4792 28.1042C22.9097 28.2569 22.3056 28.3333 21.6667 28.3333Z"
                                fill="currentColor" />
                        </svg>
                        <p class="text-cst-green-200 uppercase font-extrabold text-3xl font-inter">places</p>
                    </div>
                </div>
                <div class="flex-1 w-full md:max-w-80" data-aos="fade-up" data-aos-delay="600">
                    <div 
                        x-data="{
                            count: 0,
                            target: {{ $hooks['tourist'] }},
                            start() {
                                let observer = new IntersectionObserver((entries) => {
                                    entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                            let step = Math.ceil(this.target / 50);
                                            let interval = setInterval(() => {
                                                this.count += step;
                                                if (this.count >= this.target) {
                                                    this.count = this.target;
                                                    clearInterval(interval);
                                                }
                                            }, 100);
                                            observer.disconnect();
                                        }
                                    });
                                });
                                observer.observe($el);
                            }
                        }"
                        x-init="$nextTick(() => start())"
                        class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40"
                        >
                        <img class="absolute inset-0 w-full h-full object-cover -z-10"
                            src="{{ asset('img/tourists.webp') }}"
                            alt="">
                        <div class="pt-32 pb-20">
                            <span class="font-roboto text-cst-yellow-400 font-bold text-7xl" x-text="count + '+'"></span>
                        </div>
                    </div>
                    <div class="bg-cst-green-800 px-5 py-8 flex justify-center items-center gap-3">
                        <svg class="size-5 text-cst-yellow-400" viewBox="0 0 37 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M-5.11408e-05 27.3334V22.6667C-5.11408e-05 21.7222 0.243004 20.8542 0.729116 20.0625C1.21523 19.2709 1.86106 18.6667 2.66662 18.25C4.38884 17.3889 6.13884 16.7431 7.91662 16.3125C9.69439 15.882 11.4999 15.6667 13.3333 15.6667C15.1666 15.6667 16.9722 15.882 18.7499 16.3125C20.5277 16.7431 22.2777 17.3889 23.9999 18.25C24.8055 18.6667 25.4513 19.2709 25.9374 20.0625C26.4236 20.8542 26.6666 21.7222 26.6666 22.6667V27.3334H-5.11408e-05ZM29.9999 27.3334V22.3334C29.9999 21.1111 29.6597 19.9375 28.9791 18.8125C28.2986 17.6875 27.3333 16.7222 26.0833 15.9167C27.4999 16.0834 28.8333 16.3681 30.0833 16.7709C31.3333 17.1736 32.4999 17.6667 33.5833 18.25C34.5833 18.8056 35.3472 19.4236 35.8749 20.1042C36.4027 20.7847 36.6666 21.5278 36.6666 22.3334V27.3334H29.9999ZM13.3333 14C11.4999 14 9.93051 13.3472 8.62495 12.0417C7.31939 10.7361 6.66662 9.16669 6.66662 7.33335C6.66662 5.50002 7.31939 3.93058 8.62495 2.62502C9.93051 1.31946 11.4999 0.666687 13.3333 0.666687C15.1666 0.666687 16.7361 1.31946 18.0416 2.62502C19.3472 3.93058 19.9999 5.50002 19.9999 7.33335C19.9999 9.16669 19.3472 10.7361 18.0416 12.0417C16.7361 13.3472 15.1666 14 13.3333 14ZM29.9999 7.33335C29.9999 9.16669 29.3472 10.7361 28.0416 12.0417C26.7361 13.3472 25.1666 14 23.3333 14C23.0277 14 22.6388 13.9653 22.1666 13.8959C21.6944 13.8264 21.3055 13.75 20.9999 13.6667C21.7499 12.7778 22.3263 11.7917 22.7291 10.7084C23.1319 9.62502 23.3333 8.50002 23.3333 7.33335C23.3333 6.16669 23.1319 5.04169 22.7291 3.95835C22.3263 2.87502 21.7499 1.88891 20.9999 1.00002C21.3888 0.861131 21.7777 0.770854 22.1666 0.729187C22.5555 0.68752 22.9444 0.666687 23.3333 0.666687C25.1666 0.666687 26.7361 1.31946 28.0416 2.62502C29.3472 3.93058 29.9999 5.50002 29.9999 7.33335ZM3.33328 24H23.3333V22.6667C23.3333 22.3611 23.2569 22.0834 23.1041 21.8334C22.9513 21.5834 22.7499 21.3889 22.4999 21.25C20.9999 20.5 19.4861 19.9375 17.9583 19.5625C16.4305 19.1875 14.8888 19 13.3333 19C11.7777 19 10.2361 19.1875 8.70828 19.5625C7.1805 19.9375 5.66662 20.5 4.16662 21.25C3.91662 21.3889 3.71523 21.5834 3.56245 21.8334C3.40967 22.0834 3.33328 22.3611 3.33328 22.6667V24ZM13.3333 10.6667C14.2499 10.6667 15.0347 10.3403 15.6874 9.68752C16.3402 9.03474 16.6666 8.25002 16.6666 7.33335C16.6666 6.41669 16.3402 5.63197 15.6874 4.97919C15.0347 4.32641 14.2499 4.00002 13.3333 4.00002C12.4166 4.00002 11.6319 4.32641 10.9791 4.97919C10.3263 5.63197 9.99995 6.41669 9.99995 7.33335C9.99995 8.25002 10.3263 9.03474 10.9791 9.68752C11.6319 10.3403 12.4166 10.6667 13.3333 10.6667Z"
                                fill="currentColor" />
                        </svg>
                        <p class="text-cst-green-200 uppercase font-extrabold text-3xl font-inter">Tourist</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ? ABOUT SECTION --}}
    <section class="bg-cst-green-200/40">

        <div class="container mx-auto flex flex-col lg:flex-row  gap-10 lg:gap-24 px-8 py-18 relative overflow-x-hidden">
            <div class="" data-aos="fade-in" >
                <div class="flex flex-col mb-6" data-aos="fade-in" >
                    <p class="font-inter text-gray-600 text-xl">Tours, places, clients</p>
                    <h2 class="font-roboto text-4xl font-bold whitespace-nowrap">
                        Our <i class="font-playfair">Experience</i>
                    </h2>
                </div>
                <a class="group relative inline-flex items-center overflow-hidden rounded-sm bg-cst-green-400 px-5 py-3 text-cst-yellow-400 focus:ring-3 focus:outline-hidden"
                    href="{{ route('about') }}"
                >
                    <span class="absolute -end-full transition-all group-hover:end-4">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                    <span class="text-md font-inter font-medium transition-all group-hover:me-6"> More about us </span>
                </a>
            </div>
            <div class="flex flex-col font-inter text-gray-600 text-base 2xl:text-lg text-justify lg:flex-row gap-5 lg:gap-10">
                <p class="" data-aos="fade-in" data-aos-delay="300">
                    At Explore Vista Bali, we're passionate about helping
                    travellers discover the island with ease. From shuttle services to curated tours, we make every journey
                    smooth, safe, and unforgettable.
                </p>
                <p class="" data-aos="fade-in" data-aos-delay="600">
                    More than just getting you from place to place, we're here to share Bali's beauty and culture with
                    genuine
                    hospitality. Our mission is simple, its to create travel experiences that leave lasting memories.
                </p>
            </div>
        </div>

    </section>

    {{-- ? SERVICES SECTION --}}
    <section class="bg-cst-green-200/40 overflow-x-hidden">

        <div class="flex flex-col lg:flex-row sm:gap-12 relative container mx-auto">
            <div class="relative min-h-[20rem] lg:min-h-[32rem]  bg-cover bg-center
            w-screen ml-[calc(50%-50vw)]"
                style="background-image: url('https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?q=80&w=1920&auto=format&fit=crop');">
            </div>

            <div class="py-12 px-8 lg:px-0 w-full lg:pr-8 overflow-y-hidden">
                <div class="flex flex-col mb-12" data-aos="fade-up">
                    <p class="font-inter text-gray-600 text-xl">Available services</p>
                    <h2 class="font-roboto text-4xl sm:text-5xl font-bold whitespace-nowrap">
                        What <i class="font-playfair">can we do?</i>
                    </h2>
                </div>
                <div
                    class="space-y-8 mb-8 h-fit [&>div]:flex [&>div]:gap-4 [&_div]:pb-4 [&>div:not(:last-child)]:border-b [&>div:not(:last-child)]:border-gray-500">
                    <div class="" data-aos="fade-up">
                        <div class="!p-2 h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 16V17C3 17.2833 2.90417 17.5208 2.7125 17.7125C2.52083 17.9042 2.28333 18 2 18H1C0.716667 18 0.479167 17.9042 0.2875 17.7125C0.0958333 17.5208 0 17.2833 0 17V9L2.1 3C2.2 2.7 2.37917 2.45833 2.6375 2.275C2.89583 2.09167 3.18333 2 3.5 2H6V0H12V2H14.5C14.8167 2 15.1042 2.09167 15.3625 2.275C15.6208 2.45833 15.8 2.7 15.9 3L18 9V17C18 17.2833 17.9042 17.5208 17.7125 17.7125C17.5208 17.9042 17.2833 18 17 18H16C15.7167 18 15.4792 17.9042 15.2875 17.7125C15.0958 17.5208 15 17.2833 15 17V16H3ZM2.8 7H15.2L14.15 4H3.85L2.8 7ZM4.5 13C4.91667 13 5.27083 12.8542 5.5625 12.5625C5.85417 12.2708 6 11.9167 6 11.5C6 11.0833 5.85417 10.7292 5.5625 10.4375C5.27083 10.1458 4.91667 10 4.5 10C4.08333 10 3.72917 10.1458 3.4375 10.4375C3.14583 10.7292 3 11.0833 3 11.5C3 11.9167 3.14583 12.2708 3.4375 12.5625C3.72917 12.8542 4.08333 13 4.5 13ZM13.5 13C13.9167 13 14.2708 12.8542 14.5625 12.5625C14.8542 12.2708 15 11.9167 15 11.5C15 11.0833 14.8542 10.7292 14.5625 10.4375C14.2708 10.1458 13.9167 10 13.5 10C13.0833 10 12.7292 10.1458 12.4375 10.4375C12.1458 10.7292 12 11.0833 12 11.5C12 11.9167 12.1458 12.2708 12.4375 12.5625C12.7292 12.8542 13.0833 13 13.5 13ZM2 14H16V9H2V14Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-semibold leading-tight mt-1 mb-3">Shuttle Service</h4>
                            <p class="2xl:text-lg text-gray-600 max-w-2xl">
                                Reliable and comfortable shuttle service from the airport,
                                harbor, or point-to-point transfers anywhere in Bali.</p>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up">
                        <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 23.3L8.65 20H4V15.35L0.699997 12L4 8.65V4H8.65L12 0.699997L15.35 4H20V8.65L23.3 12L20 15.35V20H15.35L12 23.3ZM12 17C13.3833 17 14.5625 16.5125 15.5375 15.5375C16.5125 14.5625 17 13.3833 17 12C17 10.6167 16.5125 9.4375 15.5375 8.4625C14.5625 7.4875 13.3833 7 12 7V17ZM12 20.5L14.5 18H18V14.5L20.5 12L18 9.5V6H14.5L12 3.5L9.5 6H6V9.5L3.5 12L6 14.5V18H9.5L12 20.5Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-semibold leading-tight mt-1 mb-3">Tours & Activities</h4>
                            <p class="2xl:text-lg text-gray-600 max-w-2xl">A wide range of exciting activities, from
                                cultural
                                experiences and culinary delights to outdoor adventures.</p>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up">
                        <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 22 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 13.4167C4.73612 13.4167 4.08681 13.1493 3.55209 12.6146C3.01737 12.0799 2.75001 11.4306 2.75001 10.6667H0.916672V2.41667C0.916672 1.9125 1.09619 1.4809 1.45521 1.12187C1.81424 0.762846 2.24584 0.583332 2.75001 0.583332H15.5833L21.0833 6.08333V10.6667H19.25C19.25 11.4306 18.9826 12.0799 18.4479 12.6146C17.9132 13.1493 17.2639 13.4167 16.5 13.4167C15.7361 13.4167 15.0868 13.1493 14.5521 12.6146C14.0174 12.0799 13.75 11.4306 13.75 10.6667H8.25C8.25 11.4306 7.98264 12.0799 7.44792 12.6146C6.9132 13.1493 6.26389 13.4167 5.5 13.4167ZM13.75 5.16667H17.4167L14.6667 2.41667H13.75V5.16667ZM8.25 5.16667H11.9167V2.41667H8.25V5.16667ZM2.75001 5.16667H6.41667V2.41667H2.75001V5.16667ZM5.5 11.8125C5.82084 11.8125 6.09202 11.7017 6.31355 11.4802C6.53507 11.2587 6.64584 10.9875 6.64584 10.6667C6.64584 10.3458 6.53507 10.0747 6.31355 9.85312C6.09202 9.6316 5.82084 9.52083 5.5 9.52083C5.17917 9.52083 4.90799 9.6316 4.68646 9.85312C4.46494 10.0747 4.35417 10.3458 4.35417 10.6667C4.35417 10.9875 4.46494 11.2587 4.68646 11.4802C4.90799 11.7017 5.17917 11.8125 5.5 11.8125ZM16.5 11.8125C16.8208 11.8125 17.092 11.7017 17.3135 11.4802C17.5351 11.2587 17.6458 10.9875 17.6458 10.6667C17.6458 10.3458 17.5351 10.0747 17.3135 9.85312C17.092 9.6316 16.8208 9.52083 16.5 9.52083C16.1792 9.52083 15.908 9.6316 15.6865 9.85312C15.4649 10.0747 15.3542 10.3458 15.3542 10.6667C15.3542 10.9875 15.4649 11.2587 15.6865 11.4802C15.908 11.7017 16.1792 11.8125 16.5 11.8125ZM2.75001 8.83333H3.48334C3.74306 8.55833 4.04098 8.3368 4.37709 8.16875C4.7132 8.00069 5.0875 7.91667 5.5 7.91667C5.9125 7.91667 6.28681 8.00069 6.62292 8.16875C6.95903 8.3368 7.25695 8.55833 7.51667 8.83333H14.4833C14.7431 8.55833 15.041 8.3368 15.3771 8.16875C15.7132 8.00069 16.0875 7.91667 16.5 7.91667C16.9125 7.91667 17.2868 8.00069 17.6229 8.16875C17.959 8.3368 18.2569 8.55833 18.5167 8.83333H19.25V7H2.75001V8.83333Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-semibold leading-tight mt-1 mb-3">Vehicle Rental</h4>
                            <p class="2xl:text-lg text-gray-600 max-w-2xl">Discover Bali with our reliable vehicle rentals,
                                offering comfort, safety, and flexibility for your journey.</p>
                        </div>
                    </div>
                </div>
                <x-wave-button href="{{ route('services.available-packages') }}" firstTextClasses="text-black font-inter font-semibold"
                    secondTextClasses="text-black font-playfair font-bold italic"
                    class="text-lg 2xl:text-2xl w-fit py-2.5 px-7 bg-cst-yellow-400 rounded-sm hover:bg-cst-yellow-400"
                    data-aos="fade-up" 
                >
                    Book Tours!
                </x-wave-button>
            </div>
        </div>

    </section>

    {{-- ? TOUR PACKAGES & ACTIVITIES SECTION --}}
    <section class="flex flex-col items-center px-8 py-24 relative overflow-x-hidden">

        <div class="flex items-center justify-center mb-6 w-full">
            <span class="hidden sm:inline-block h-0.5 w-full bg-gray-300"></span>
            <div class="flex flex-col text-center w-fit mx-8">
                <p class="font-inter text-gray-600 text-md sm:text-xl" data-aos="fade-up">Available tour & activity packages</p>
                <h2 class="font-playfair italic text-4xl sm:text-5xl font-bold whitespace-nowrap" data-aos="fade-up">
                    Choose your journey
                </h2>
            </div>
            <span class="hidden sm:inline-block h-0.5 w-full bg-gray-300"></span>
        </div>

        <a href="{{ route('services.available-packages') }}" class="flex text-base gap-2 items-center text-cst-green-400 underline mb-14" data-aos="fade-up">
            See all packages <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full container mx-auto sm:px-8 overflow-y-hidden">

            @foreach ($tourPackages as $index => $package)
                <div 
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}" {{-- delay naik 100ms tiap item --}}
                >
                    <x-package-card
                        :id="$package->id"
                        :packageType="$package->tour?->name"
                        :img="$package->getFirstMediaUrl('cover', 'optimized')"
                        :title="$package->name"
                        :price="$package->price"
                        :description="$package->description"
                        :startTime="$package->start_time"
                    />
                </div>
        @endforeach
               

        </div>

    </section>

    {{-- ? TESTIMONIAL SECTION --}}
    <section class="bg-cst-green-800">
        <div
            class="flex flex-col md:flex-row gap-14 items-center justify-between px-4 sm:px-8 py-24  relative overflow-x-hidden text-white container mx-auto">

            <div class="px-4 sm:px-0 w-full md:w-5/12">
                <div class="mb-6 md:mb-16">
                    <p class="font-inter text-gray-300 text-md sm:text-xl mb-2" data-aos="fade-up" >Testimonials </p>
                    <h2 class="font-roboto text-4xl xl:text-5xl font-semibold leading-tight max-w-lg" data-aos="fade-up">
                        What our clients <i class="font-playfair">says about us.</i>
                    </h2>
                </div>

                {{-- ? buttons --}}
                <div class="flex flex-wrap gap-3 mb-12" data-aos="fade-up">
                    <a href="{{ route('contact') }}#comment-form"
                        class="flex items-center gap-3 whitespace-nowrap font-inter font-medium text-sm sm:text-lg py-2.5 px-5 bg-cst-yellow-400 w-fit rounded-md text-black hover:scale-105 transition">
                        <svg class="size-5 text-black" viewBox="0 0 19 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 6H12V4H4V6ZM4 10H9V8H4V10ZM14 17V14H11V12H14V9H16V12H19V14H16V17H14ZM0 17V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H14C14.55 0 15.0208 0.195833 15.4125 0.5875C15.8042 0.979167 16 1.45 16 2V7.075C15.8333 7.04167 15.6667 7.02083 15.5 7.0125C15.3333 7.00417 15.1667 7 15 7C13.3167 7 11.8958 7.58833 10.7375 8.75C9.57917 9.91667 9 11.3333 9 13C9 13.1667 9.00417 13.3333 9.0125 13.5C9.02083 13.6667 9.04167 13.8333 9.075 14H3L0 17Z"
                                fill="currentColor" />
                        </svg> Comment
                    </a>
                    <a class="group relative whitespace-nowrap inline-flex items-center overflow-hidden rounded-md bg-transparent border-3 border-cst-yellow-400 py-2.5 px-5 text-cst-yellow-400 focus:ring-3 focus:outline-hidden"
                        href="{{ route('comment') }}">
                        <span class="absolute -end-full transition-all lg:group-hover:end-4">
                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                        <span class="text-sm lg:text-lg italic font-inter font-medium transition-all lg:group-hover:me-6">
                            View all comments
                        </span>
                    </a>
                </div>

                <div class="flex items-center gap-5" data-aos="fade-up">
                    <p class="font-playfair italic font-medium text-2xl text-white">
                        Find Us :
                    </p>
                    <x-social-media />
                </div>
            </div>

            <div x-data="carousel()" x-init="init()" class="w-full md:w-7/12 " data-aos="fade-up">
                {{-- viewport --}}
                <div class="relative">
                    <div x-ref="viewport" class="overflow-hidden w-full">
                        <!-- left shadow -->
                        <div
                            class="pointer-events-none absolute left-0 top-0 h-full w-16 bg-gradient-to-r from-[#16352d] to-transparent z-10">
                        </div>

                        <!-- right shadow -->
                        <div
                            class="pointer-events-none absolute right-0 top-0 h-full w-16 bg-gradient-to-l from-[#16352d] to-transparent z-10">
                        </div>

                        <div x-ref="track" class="flex transition-transform duration-500 ease-out w-full px-8"
                            :style="`transform: translateX(${translate}px)`">
                            @foreach ($testimonials as $testimonial)
                                <div class="w-full xl:w-1/2 flex-shrink-0 px-4">
                                    <div class="bg-white px-6 py-8 pt-20 rounded-md rounded-tr-[5rem]">
                                        <svg class="w-14 aspect-auto text-gray-300 mb-8" viewBox="0 0 63 57"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M63 35.625C63 47.4347 55.4484 57 46.125 57H45C42.5109 57 40.5 54.4528 40.5 51.3C40.5 48.1472 42.5109 45.6 45 45.6H46.125C50.4703 45.6 54 41.1291 54 35.625V34.2H45C40.0359 34.2 36 29.0878 36 22.8V11.4C36 5.11219 40.0359 0 45 0H54C58.9641 0 63 5.11219 63 11.4V35.625ZM27 35.625C27 47.4347 19.4484 57 10.125 57H9C6.51094 57 4.5 54.4528 4.5 51.3C4.5 48.1472 6.51094 45.6 9 45.6H10.125C14.4703 45.6 18 41.1291 18 35.625V34.2H9C4.03594 34.2 0 29.0878 0 22.8V11.4C0 5.11219 4.03594 0 9 0H18C22.9641 0 27 5.11219 27 11.4V35.625Z"
                                                fill="currentColor" />
                                        </svg>
                                        <p class="text-black font-inter font-medium text-xl mb-10 md:mb-16">
                                           {{  Str::limit($testimonial->comment, 80, '...') }}
                                        </p>
                                        <div class="font-inter pt-4 border-t-2 border-gray-400 w-full text-black">
                                            <p class="font-semibold text-base">Jackson Harry</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                {{-- controls --}}
                <div class="mt-10 flex items-center justify-center gap-4">
                    <button aria-label="previous button for carousel navigation" @click="prev()" :disabled="page === 0"
                        class="px-3 py-1 cursor-pointer rounded-full bg-cst-green-400 text-cst-yellow-400 disabled:opacity-40 disabled:cursor-not-allowed transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <div class="flex items-center gap-2 [&>span]:w-4 [&>span]:h-4 [&>span]:rounded-full">
                        <template x-for="i in totalPages" :key="i">
                            <span @click="goTo(i - 1)" :class="(i - 1) === page ? 'bg-cst-yellow-400' : 'bg-gray-400'"
                                class="cursor-pointer transition-colors hover:opacity-80">
                            </span>
                        </template>
                    </div>
                    <button aria-label="next button for carousel navigation" @click="next()"
                        :disabled="page >= totalPages - 1"
                        class="px-3 py-1 cursor-pointer rounded-full bg-cst-green-400 text-cst-yellow-400 disabled:opacity-40 disabled:cursor-not-allowed transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <script>
                    function carousel() {
                        return {
                            page: 0,
                            perPage: 1,
                            translate: 0,
                            totalPages: 1,

                            init() {
                                this.updateCarousel();
                                window.addEventListener('resize', () => this.updateCarousel());
                            },

                            updateCarousel() {
                                // Align with Tailwind's xl breakpoint (1280px)
                                this.perPage = window.innerWidth >= 1280 ? 2 : 1;

                                const viewport = this.$refs.viewport;
                                const track = this.$refs.track;
                                const items = track.children;
                                const totalItems = items.length;

                                // Calculate total pages
                                this.totalPages = Math.ceil(totalItems / this.perPage);

                                // Keep page in bounds
                                if (this.page >= this.totalPages) {
                                    this.page = this.totalPages - 1;
                                }

                                // Calculate translation based on actual item width
                                if (items.length > 0) {
                                    const itemWidth = items[0].offsetWidth;
                                    this.translate = -this.page * itemWidth * this.perPage;
                                }
                            },

                            next() {
                                if (this.page < this.totalPages - 1) {
                                    this.page++;
                                    this.updateCarousel();
                                }
                            },

                            prev() {
                                if (this.page > 0) {
                                    this.page--;
                                    this.updateCarousel();
                                }
                            },

                            goTo(pageIndex) {
                                if (pageIndex >= 0 && pageIndex < this.totalPages) {
                                    this.page = pageIndex;
                                    this.updateCarousel();
                                }
                            }
                        }
                    }
                </script>
            </div>

        </div>
    </section>

    {{-- ? GALLERY SECTION --}}
    <section class="bg-cst-green-800">
        <div
            class="flex flex-col items-center px-8 py-14 sm:py-20 relative overflow-x-hidden text-white container mx-auto overflow-y-hidden"
        >

            <span class="absolute top-0 inset-x-8 h-px bg-cst-green-200/40"></span>

            <div class="mb-10 sm:mb-16"k>
                <p class="font-inter text-gray-300 text-md sm:text-xl mb-2 text-center" data-aos="fade-up">Gallery / Pictures</p>
                <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight max-w-lg text-center" data-aos="fade-up">
                    Our <i class="font-playfair">Captured Story</i>
                </h2>
            </div>
            <div class="flex flex-wrap gap-6 gap-y-6 w-full">
                @foreach ($galleries as $index => $gallery)
                    <a 
                        href="{{ route('gallery') }}"
                        data-aos="fade-up"
                        data-aos-delay="{{ $index * 100 }}" 
                        class="group {{ $loop->index > 2 ? 'hidden sm:inline-block' : 'inline-block' }} 
                            relative flex-3 h-64 sm:h-80 lg:h-96 text-white min-w-xs font-inter"
                    >
                        <div 
                            class="relative flex h-full items-end transform bg-center bg-cover transition-transform group-hover:-translate-y-2"
                            style="background-image: url('{{ $gallery->getFirstMediaUrl('picture', 'optimized') }}');"
                        >
                            <div class="absolute bottom-0 left-0 w-full flex flex-wrap gap-3 p-4 lg:p-6 
                                        transition-opacity duration-300 group-hover:opacity-0 z-10">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent -z-10"></div>

                                <h2 class="text-sm font-semibold whitespace-nowrap">{{ $gallery->name }}</h2>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a 
                href="{{ route('gallery') }}"
                class="group mt-10 relative whitespace-nowrap inline-flex items-center overflow-hidden rounded-md bg-transparent border-3 border-cst-yellow-400 py-2.5 px-5 text-cst-yellow-400 focus:ring-3 focus:outline-hidden"
                data-aos="fade-up"
            >
                <span class="absolute -end-full transition-all lg:group-hover:end-4">
                    <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
                <span class="text-sm lg:text-base italic font-inter font-medium transition-all lg:group-hover:me-6">
                    View all pictures
                </span>
            </a>

        </div>
    </section>

    {{-- ? BLOG SECTION --}}
    <section class="relative">
        <div
            class="absolute inset-0 -z-20 after:absolute after:inset-0 after:bg-gradient-to-b after:from-cst-green-800 after:to-transparent">
            <img class="object-cover w-full h-full bg-no-repeat"
                src="https://images.unsplash.com/photo-1711609110590-5ad5c4599e56?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>

        <div class="flex flex-col px-8 pt-8 pb-20 relative overflow-hidden text-white container mx-auto">
            <div class="flex flex-col sm:flex-row items-center justify-between mb-10 sm:mb-16"   data-aos="fade-up">
                <div class="text-center sm:text-start mb-5 sm:mb-0">
                    <p class="font-inter text-gray-300 text-md sm:text-xl">Our blog / articles</p>
                    <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight max-w-lg">
                        Read our <i class="font-playfair">articles</i>
                    </h2>
                </div>
                <a href="{{ route('blogs') }}"
                    class="group relative whitespace-nowrap inline-flex items-center overflow-hidden rounded-md bg-cst-yellow-400 py-2.5 px-5 text-black focus:ring-3 focus:outline-hidden">
                    <span class="absolute -end-full transition-all lg:group-hover:end-4">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                    <span class="text-sm lg:text-base italic font-inter font-semibold transition-all lg:group-hover:me-6">
                        See all articles
                    </span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach ($blogs as $index => $blog)
                    <article
                        data-aos="fade-up"
                        data-aos-delay="{{ $index * 100 }}" 
                        class="{{ $loop->index < 3 ? 'block' : 'hidden sm:block' }} 
                            overflow-hidden shadow-lg transition hover:shadow-lg hover:-translate-y-2"
                    >
                        <img 
                            alt=""
                            src="{{ $blog->getFirstMediaUrl('picture', 'optimize') }}"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 sm:p-6 font-inter">
                            <time 
                                datetime="{{ $blog->created_at->format('Y-m-d') }}" 
                                class="block text-sm italic text-gray-500"
                            >
                                {{ $blog->created_at->format('d M Y') }}
                            </time>

                            <a href="{{ route('blog-detail', $blog->id) }}">
                                <h3 class="mt-0.5 text-2xl text-gray-900 font-roboto font-semibold hover:underline">
                                    {{ Str::limit($blog->title, 40, '...') }}
                                </h3>
                            </a>

                            <p class="mt-4 line-clamp-3 text-md/relaxed text-gray-500">
                                {{ Str::limit($blog->content, 80, '...') }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

    </section>

    {{-- ? FAQ SECTION --}}
    <section class="flex flex-col gap-10 lg:flex-row px-8 py-24 relative overflow-hidden container mx-auto">

        <div class="flex-5" data-aos="fade-up">
            <img class="w-full max-h-[20rem] sm:max-h-[45rem] object-cover object-center"
                src="https://images.unsplash.com/photo-1573790387438-4da905039392?q=80&w=725&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>

        <div class="flex-7 lg:py-4">
            <div class="mb-8">
                <p class="font-inter text-gray-500 text-md sm:text-xl" data-aos="fade-up">Frequently Asked Questions</p>
                <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight" data-aos="fade-up">
                    What are <i class="font-playfair">people asking?</i>
                </h2>
            </div>

            <div class="space-y-4 font-inter min-h-[70vh] lg:min-h-fit" x-data="{ active: null }">

                <!-- FAQ 1 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 1 }" data-aos="fade-up">
                    <button @click="active === 1 ? active = null : active = 1"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-base font-medium text-start">How do I book a tour package?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 1 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 1" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            You can book directly through our website by selecting your preferred package, filling
                            in
                            your details, and submit. After, you will be directed to Whatsapp and continue
                            confirmations
                            with our agent.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 2 }" data-aos="fade-up" data-aos-delay="100">
                    <button @click="active === 2 ? active = null : active = 2"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-base font-medium text-start">What payment methods are accepted?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 2 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 2" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            We accept major credit cards, debit cards, and in some cases local bank transfers or
                            cash on arrival. We can discuss more in Whatsapp.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 3 }" data-aos="fade-up" data-aos-delay="200">
                    <button @click="active === 3 ? active = null : active = 3"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-base font-medium text-start">Can I cancel or reschedule my booking?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 3 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 3" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            Yes, cancellations and reschedules is possible. By chatting our agent on Whatsapp, you
                            can
                            discuss further more and find an answer.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 4 }" data-aos="fade-up" data-aos-delay="300">
                    <button @click="active === 4 ? active = null : active = 4"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-base font-medium text-start">Do you provide airport transfers?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 4 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 4" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            Absolutely! We offer airport and harbor transfers with comfortable, air-conditioned
                            vehicles
                            to ensure your trip starts smoothly.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 5 }" data-aos="fade-up" data-aos-delay="500">
                    <button @click="active === 5 ? active = null : active = 5"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-base font-medium text-start">Is hotel pickup included in the tours?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 5 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 5" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            Most of our tours include free hotel pickup in popular areas. If you’re staying outside
                            those areas, we can arrange point-to-point pickup for a small additional fee.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- ? CONTACT SECTION --}}
    <section class="container mx-auto relative flex flex-col lg:flex-row gap-12 items-center">
        <div class="lg:flex-1 w-full xl:max-w-1/2 px-8 space-y-4 relative lg:pl-8 pb-0">

            <div class="mb-6">
                <p class="font-inter text-gray-500 text-md sm:text-xl">Contact form</p>
                <h2 class="font-roboto text-4xl font-semibold leading-tight">
                    Leave us <i class="font-playfair">a message!</i>
                </h2>
            </div>
            <form action="{{ route('whatsapp.send') }}" method="POST">
                @csrf
                <x-input class="mb-4" label="Full name" type="text" placeholder="Jacob Holden" name="fullname"
                    id="index-fullname" required />
                <div class="flex flex-col sm:flex-row w-full gap-4 mb-4">
                    <x-input label="Phone number" type="number" placeholder="+112223334444" name="phone"
                        id="index-phone" required autocomplete>
                        <svg class="size-5 text-cst-green-400" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.95 18C14.8667 18 12.8083 17.5458 10.775 16.6375C8.74167 15.7292 6.89167 14.4417 5.225 12.775C3.55833 11.1083 2.27083 9.25833 1.3625 7.225C0.454167 5.19167 0 3.13333 0 1.05C0 0.75 0.1 0.5 0.3 0.3C0.5 0.1 0.75 0 1.05 0H5.1C5.33333 0 5.54167 0.0791667 5.725 0.2375C5.90833 0.395833 6.01667 0.583333 6.05 0.8L6.7 4.3C6.73333 4.56667 6.725 4.79167 6.675 4.975C6.625 5.15833 6.53333 5.31667 6.4 5.45L3.975 7.9C4.30833 8.51667 4.70417 9.1125 5.1625 9.6875C5.62083 10.2625 6.125 10.8167 6.675 11.35C7.19167 11.8667 7.73333 12.3458 8.3 12.7875C8.86667 13.2292 9.46667 13.6333 10.1 14L12.45 11.65C12.6 11.5 12.7958 11.3875 13.0375 11.3125C13.2792 11.2375 13.5167 11.2167 13.75 11.25L17.2 11.95C17.4333 12.0167 17.625 12.1375 17.775 12.3125C17.925 12.4875 18 12.6833 18 12.9V16.95C18 17.25 17.9 17.5 17.7 17.7C17.5 17.9 17.25 18 16.95 18Z"
                                fill="currentColor" />
                        </svg>
                    </x-input>
                    <x-input label="Email (optional)" type="email" placeholder="test@example.com" name="email"
                        id="index-email" autocomplete>
                        <svg class="size-5 text-cst-green-400" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H18C18.55 0 19.0208 0.195833 19.4125 0.5875C19.8042 0.979167 20 1.45 20 2V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2ZM10 9L18 4V2L10 7L2 2V4L10 9Z"
                                fill="currentColor" />
                        </svg>
                    </x-input>
                </div>      
                <x-textarea class="mb-4" label="Message" placeholder="Type your message here" name="message"
                    id="index-message" required rows="3" />
                <x-whatsapp-button class="w-full text-xl py-3"  type="submit">Send message via Whatsapp</x-whatsapp-button>
            </form>

        </div>

        <div class="lg:flex-1 w-screen h-[30rem] md:max-h-none lg:h-[46rem] lg:mr-[calc(50%-50vw)]">
            <img class="w-full h-full object-cover object-center"
                src="https://images.unsplash.com/photo-1546484475-7f7bd55792da?q=80&w=1920&auto=format&fit=crop"
                alt="Contact background">
        </div>
    </section>

@endsection
