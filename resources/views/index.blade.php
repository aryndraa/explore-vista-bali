@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Explore Vista Bali')
@section('content')

    {{-- ? HERO SECTION --}}
    <section class="relative min-h-screen flex items-end px-8 pb-14 text-white">
        <div class="absolute inset-y-0 -inset-x-20 bg-black -z-20">
            <video autoplay loop class="opacity-50 h-full w-full object-cover"
                src="https://videocdn.cdnpk.net/videos/79ab4de0-c5fb-4370-82b0-8c84e204d765/horizontal/previews/clear/large.mp4?token=exp=1758954049~hmac=4865dfd32e61ac0ea52fb0ca690d4dea6909e3a303529ea65a7e415357412fdb">
            </video>
        </div>

        <div class="flex flex-col md:flex-row w-full justify-between gap-20 items-center md:items-end">
            <div class="flex flex-col items-center md:items-start">
                <p
                    class="text-start md:text-center text-gray-200 py-2 px-4 rounded-md text-lg w-fit font-inter italic mb-1 backdrop-blur-[10px] backdrop-saturate-[165%] bg-[rgba(160,160,160,0.2)] border border-[rgba(255,255,255,0.125)]">
                    Welcome to Bali, Indonesia
                </p>

                <h1
                    class="text-center md:text-start font-roboto font-semibold text-4xl md:text-5xl max-w-lg leading-snug mb-10">
                    Get to know <span class="font-playfair italic">Bali</span> with Explore Vista Bali!
                </h1>

                <x-wave-button href="#" firstTextClasses="text-cst-yellow-400 font-inter font-medium"
                    secondTextClasses="text-black font-playfair font-bold italic"
                    class="text-xl w-fit py-1.5 px-5 bg-transparent border-2 border-cst-yellow-400 rounded-sm hover:bg-cst-yellow-400">
                    Lets Explore!
                </x-wave-button>
            </div>

            <div class="flex flex-col items-center md:items-end">
                <div class="bg-white text-black p-4 font-inter rounded-sm mb-4 w-full md:max-w-xs">
                    <p class="text-lg mb-4">
                        “This service is great! I love it, I would recommend this to my relatives”
                    </p>
                    <div class="">
                        <h4 class="text-lg font-roboto leading-tight font-medium italic">Jackson Harry</h4>
                        <a href="#" class="text-sm text-gray-500">@loremipsum</a>
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    <p class="font-playfair italic font-medium text-2xl text-white">
                        Follow our socials
                    </p>
                    <div class="flex gap-2">
                        <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                            <svg class="size-6 text-cst-green-400" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2683 5.77736C8.23565 5.76781 5.77133 8.22258 5.76178 11.2552C5.75223 14.2879 8.207 16.7522 11.2396 16.7617C14.2723 16.7713 16.7366 14.3165 16.7462 11.2839C16.7557 8.25123 14.3009 5.78691 11.2683 5.77736ZM11.2396 7.70679C13.2073 7.69724 14.8072 9.28759 14.8167 11.2552C14.8263 13.2229 13.2359 14.8228 11.2683 14.8323C9.30066 14.8419 7.70076 13.2515 7.69121 11.2839C7.68166 9.31624 9.27201 7.71634 11.2396 7.70679ZM15.7003 5.55289C15.7003 4.84607 16.2734 4.27297 16.9802 4.27297C17.687 4.27297 18.2601 4.84607 18.2601 5.55289C18.2601 6.25972 17.687 6.83281 16.9802 6.83281C16.2734 6.83281 15.7003 6.25972 15.7003 5.55289ZM21.8945 6.85192C21.8133 5.1374 21.4217 3.61869 20.1656 2.36742C18.9144 1.11616 17.3957 0.724538 15.6812 0.638574C13.9141 0.538281 8.61772 0.538281 6.85066 0.638574C5.14092 0.719763 3.62221 1.11138 2.36617 2.36265C1.11013 3.61391 0.723287 5.13262 0.637322 6.84714C0.53703 8.61419 0.53703 13.9106 0.637322 15.6776C0.718511 17.3922 1.11013 18.9109 2.36617 20.1621C3.62221 21.4134 5.13614 21.805 6.85066 21.891C8.61772 21.9913 13.9141 21.9913 15.6812 21.891C17.3957 21.8098 18.9144 21.4182 20.1656 20.1621C21.4169 18.9109 21.8085 17.3922 21.8945 15.6776C21.9948 13.9106 21.9948 8.61897 21.8945 6.85192ZM19.6117 17.5736C19.2391 18.5097 18.518 19.2308 17.5772 19.6081C16.1683 20.1669 12.8252 20.038 11.2683 20.038C9.71138 20.038 6.36353 20.1621 4.95944 19.6081C4.02338 19.2356 3.30223 18.5145 2.92494 17.5736C2.36617 16.1648 2.49512 12.8217 2.49512 11.2648C2.49512 9.70786 2.37095 6.36001 2.92494 4.95592C3.29745 4.01985 4.0186 3.29871 4.95944 2.92142C6.36831 2.36264 9.71138 2.49159 11.2683 2.49159C12.8252 2.49159 16.1731 2.36742 17.5772 2.92142C18.5132 3.29393 19.2344 4.01508 19.6117 4.95592C20.1704 6.36478 20.0415 9.70786 20.0415 11.2648C20.0415 12.8217 20.1704 16.1695 19.6117 17.5736Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                            <svg class="size-6 text-cst-green-400" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.205 11.2647C22.205 5.35323 17.4139 0.562134 11.5024 0.562134C5.59087 0.562134 0.799774 5.35323 0.799774 11.2647C0.799774 16.2816 4.25722 20.4958 8.91871 21.6538V14.5341H6.7113V11.2647H8.91871V9.85585C8.91871 6.21445 10.5659 4.52545 14.1446 4.52545C14.8219 4.52545 15.9925 4.65923 16.4733 4.79301V7.75295C16.2224 7.72787 15.7834 7.71115 15.2358 7.71115C13.4799 7.71115 12.8026 8.37588 12.8026 10.1025V11.2647H16.2977L15.6956 14.5341H12.7984V21.8879C18.0995 21.2483 22.205 16.7373 22.205 11.2647Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                            <svg class="size-6 text-cst-green-400" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.8913 0.562134H20.1751L13.0029 8.7577L21.4403 19.9115H14.8355L9.65858 13.1485L3.74214 19.9115H0.453681L8.12366 11.1438L0.0350647 0.562134H6.80734L11.4819 6.7437L16.8913 0.562134ZM15.7378 17.9486H17.5565L5.81662 2.42265H3.86307L15.7378 17.9486Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ? EXPERIENCE SECTION --}}
    <section class="px-8 py-10 relative overflow-x-hidden">
        <div class="flex flex-col-reverse md:flex-row gap-5 lg:gap-0 justify-between md:items-center w-full mb-8">
            <p class="text-lg font-inter font-normal md:max-w-md lg:max-w-lg">
                Explore Vista Bali is trusted by travelers worldwide, delivering seamless tours and unforgettable
                experiences across the island.
            </p>

            <div class="flex flex-col items-start md:items-end">
                <p class="font-inter text-gray-600 text-lg">Tours, places, clients</p>
                <h2 class="font-roboto text-4xl font-bold text-end whitespace-nowrap">
                    Our <i class="font-playfair">Experience</i>
                </h2>
            </div>
        </div>

        <img class="hidden -z-10 lg:block absolute -left-28 rotate-45 w-80 opacity-30"
            src="{{ asset('img/decoration_left.png') }}" alt="left flower decoration">
        <img class="hidden -z-10 lg:block absolute -right-28 w-80 opacity-30" src="{{ asset('img/decoration_right.png') }}"
            alt="right flower decoration">

        <div class="flex flex-col lg:px-14 md:flex-row gap-4 lg:gap-6 items-center justify-center">

            <div class="flex-1 w-full md:max-w-80">
                <div
                    class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40">
                    <img class="absolute inset-0 w-full h-full object-cover -z-10"
                        src="https://thepointsguy.global.ssl.fastly.net/us/originals/2020/05/GettyImages-1145042281-scaled.jpg"
                        alt="">
                    <div class="pt-32 pb-20">
                        <span class="font-roboto text-cst-yellow-400 font-bold text-7xl">90+</span>
                    </div>
                </div>
                <div class="bg-cst-green-800 px-5 py-8 flex justify-center items-center gap-3">
                    <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.91667 18.3333L18.1667 10.0833L15.7917 7.75L9.91667 13.625L7.54167 11.25L5.16667 13.625L9.91667 18.3333ZM0 30V3.33333C0 2.41667 0.326389 1.63194 0.979167 0.979167C1.63194 0.326389 2.41667 0 3.33333 0H20C20.9167 0 21.7014 0.326389 22.3542 0.979167C23.0069 1.63194 23.3333 2.41667 23.3333 3.33333V30L11.6667 25L0 30ZM3.33333 24.9167L11.6667 21.3333L20 24.9167V3.33333H3.33333V24.9167Z"
                            fill="#CAA638" />
                    </svg>
                    <p class="text-cst-green-200 uppercase font-extrabold text-3xl font-inter">tours</p>
                </div>
            </div>

            <div class="flex-1 w-full md:max-w-80">
                <div
                    class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40">
                    <img class="absolute inset-0 w-full h-full object-cover -z-10" src="" alt="">
                    <div class="pt-32 pb-20">
                        <span class="font-roboto text-cst-yellow-400 font-bold text-7xl">20+</span>
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

            <div class="flex-1 w-full md:max-w-80">
                <div
                    class="relative flex items-center justify-center rounded-t-3xl md:rounded-t-full overflow-hidden bg-black/40">
                    <img class="absolute inset-0 w-full h-full object-cover -z-10" src="" alt="">
                    <div class="pt-32 pb-20">
                        <span class="font-roboto text-cst-yellow-400 font-bold text-7xl">100+</span>
                    </div>
                </div>
                <div class="bg-cst-green-800 px-5 py-8 flex justify-center items-center gap-3">
                    <svg class="size-5 text-cst-yellow-400" viewBox="0 0 37 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M-5.11408e-05 27.3334V22.6667C-5.11408e-05 21.7222 0.243004 20.8542 0.729116 20.0625C1.21523 19.2709 1.86106 18.6667 2.66662 18.25C4.38884 17.3889 6.13884 16.7431 7.91662 16.3125C9.69439 15.882 11.4999 15.6667 13.3333 15.6667C15.1666 15.6667 16.9722 15.882 18.7499 16.3125C20.5277 16.7431 22.2777 17.3889 23.9999 18.25C24.8055 18.6667 25.4513 19.2709 25.9374 20.0625C26.4236 20.8542 26.6666 21.7222 26.6666 22.6667V27.3334H-5.11408e-05ZM29.9999 27.3334V22.3334C29.9999 21.1111 29.6597 19.9375 28.9791 18.8125C28.2986 17.6875 27.3333 16.7222 26.0833 15.9167C27.4999 16.0834 28.8333 16.3681 30.0833 16.7709C31.3333 17.1736 32.4999 17.6667 33.5833 18.25C34.5833 18.8056 35.3472 19.4236 35.8749 20.1042C36.4027 20.7847 36.6666 21.5278 36.6666 22.3334V27.3334H29.9999ZM13.3333 14C11.4999 14 9.93051 13.3472 8.62495 12.0417C7.31939 10.7361 6.66662 9.16669 6.66662 7.33335C6.66662 5.50002 7.31939 3.93058 8.62495 2.62502C9.93051 1.31946 11.4999 0.666687 13.3333 0.666687C15.1666 0.666687 16.7361 1.31946 18.0416 2.62502C19.3472 3.93058 19.9999 5.50002 19.9999 7.33335C19.9999 9.16669 19.3472 10.7361 18.0416 12.0417C16.7361 13.3472 15.1666 14 13.3333 14ZM29.9999 7.33335C29.9999 9.16669 29.3472 10.7361 28.0416 12.0417C26.7361 13.3472 25.1666 14 23.3333 14C23.0277 14 22.6388 13.9653 22.1666 13.8959C21.6944 13.8264 21.3055 13.75 20.9999 13.6667C21.7499 12.7778 22.3263 11.7917 22.7291 10.7084C23.1319 9.62502 23.3333 8.50002 23.3333 7.33335C23.3333 6.16669 23.1319 5.04169 22.7291 3.95835C22.3263 2.87502 21.7499 1.88891 20.9999 1.00002C21.3888 0.861131 21.7777 0.770854 22.1666 0.729187C22.5555 0.68752 22.9444 0.666687 23.3333 0.666687C25.1666 0.666687 26.7361 1.31946 28.0416 2.62502C29.3472 3.93058 29.9999 5.50002 29.9999 7.33335ZM3.33328 24H23.3333V22.6667C23.3333 22.3611 23.2569 22.0834 23.1041 21.8334C22.9513 21.5834 22.7499 21.3889 22.4999 21.25C20.9999 20.5 19.4861 19.9375 17.9583 19.5625C16.4305 19.1875 14.8888 19 13.3333 19C11.7777 19 10.2361 19.1875 8.70828 19.5625C7.1805 19.9375 5.66662 20.5 4.16662 21.25C3.91662 21.3889 3.71523 21.5834 3.56245 21.8334C3.40967 22.0834 3.33328 22.3611 3.33328 22.6667V24ZM13.3333 10.6667C14.2499 10.6667 15.0347 10.3403 15.6874 9.68752C16.3402 9.03474 16.6666 8.25002 16.6666 7.33335C16.6666 6.41669 16.3402 5.63197 15.6874 4.97919C15.0347 4.32641 14.2499 4.00002 13.3333 4.00002C12.4166 4.00002 11.6319 4.32641 10.9791 4.97919C10.3263 5.63197 9.99995 6.41669 9.99995 7.33335C9.99995 8.25002 10.3263 9.03474 10.9791 9.68752C11.6319 10.3403 12.4166 10.6667 13.3333 10.6667Z"
                            fill="currentColor" />
                    </svg>
                    <p class="text-cst-green-200 uppercase font-extrabold text-3xl font-inter">clients</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ? ABOUT SECTION --}}
    <section class="flex flex-col lg:flex-row gap-10 lg:gap-24 px-8 py-10 relative overflow-x-hidden bg-cst-green-200/40">
        <div class="">
            <div class="flex flex-col mb-4">
                <p class="font-inter text-gray-600 text-xl">Tours, places, clients</p>
                <h2 class="font-roboto text-4xl font-bold whitespace-nowrap">
                    Our <i class="font-playfair">Experience</i>
                </h2>
            </div>
            <a class="group relative inline-flex items-center overflow-hidden rounded-sm bg-cst-green-400 px-5 py-3 text-cst-yellow-400 focus:ring-3 focus:outline-hidden"
                href="#">
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
        <div class="flex flex-col font-inter text-gray-600 text-xl text-justify lg:flex-row gap-5 lg:gap-10">
            <p class="">
                At Explore Vista Bali, we're passionate about helping
                travellers discover the island with ease. From shuttle services to curated tours, we make every journey
                smooth, safe, and unforgettable.
            </p>
            <p class="">
                More than just getting you from place to place, we're here to share Bali's beauty and culture with genuine
                hospitality. Our mission is simple, its to create travel experiences that leave lasting memories.
            </p>
        </div>
    </section>

    {{-- ? SERVICES SECTION --}}
    <section class="flex flex-col lg:flex-row gap-12 lg:pr-12 relative overflow-x-hidden bg-cst-green-200/40">
        <div class="relative flex-7 min-h-80 overflow-hidden">
            <img class="absolute h-full w-full object-cover object-center"
                src="https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>

        <div class="flex-5 pt-0 lg:pt-8 pb-12 px-8 lg:px-0">
            <div class="flex flex-col mb-12">
                <p class="font-inter text-gray-600 text-xl">Available services</p>
                <h2 class="font-roboto text-5xl font-bold whitespace-nowrap">
                    What <i class="font-playfair">can we do?</i>
                </h2>
            </div>

            <div
                class="space-y-8 mb-8 h-fit [&>div]:flex [&>div]:gap-4 [&_div]:pb-4 [&>div:not(:last-child)]:border-b [&>div:not(:last-child)]:border-gray-500">
                <div class="">
                    <div class="!p-2 h-fit aspect-square rounded-full bg-cst-green-400">
                        <svg class="size-5 text-cst-yellow-400" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 16V17C3 17.2833 2.90417 17.5208 2.7125 17.7125C2.52083 17.9042 2.28333 18 2 18H1C0.716667 18 0.479167 17.9042 0.2875 17.7125C0.0958333 17.5208 0 17.2833 0 17V9L2.1 3C2.2 2.7 2.37917 2.45833 2.6375 2.275C2.89583 2.09167 3.18333 2 3.5 2H6V0H12V2H14.5C14.8167 2 15.1042 2.09167 15.3625 2.275C15.6208 2.45833 15.8 2.7 15.9 3L18 9V17C18 17.2833 17.9042 17.5208 17.7125 17.7125C17.5208 17.9042 17.2833 18 17 18H16C15.7167 18 15.4792 17.9042 15.2875 17.7125C15.0958 17.5208 15 17.2833 15 17V16H3ZM2.8 7H15.2L14.15 4H3.85L2.8 7ZM4.5 13C4.91667 13 5.27083 12.8542 5.5625 12.5625C5.85417 12.2708 6 11.9167 6 11.5C6 11.0833 5.85417 10.7292 5.5625 10.4375C5.27083 10.1458 4.91667 10 4.5 10C4.08333 10 3.72917 10.1458 3.4375 10.4375C3.14583 10.7292 3 11.0833 3 11.5C3 11.9167 3.14583 12.2708 3.4375 12.5625C3.72917 12.8542 4.08333 13 4.5 13ZM13.5 13C13.9167 13 14.2708 12.8542 14.5625 12.5625C14.8542 12.2708 15 11.9167 15 11.5C15 11.0833 14.8542 10.7292 14.5625 10.4375C14.2708 10.1458 13.9167 10 13.5 10C13.0833 10 12.7292 10.1458 12.4375 10.4375C12.1458 10.7292 12 11.0833 12 11.5C12 11.9167 12.1458 12.2708 12.4375 12.5625C12.7292 12.8542 13.0833 13 13.5 13ZM2 14H16V9H2V14Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="font-inter">
                        <h4 class="text-2xl font-semibold leading-tight mt-1 mb-4">Shuttle Service</h4>
                        <p class="text-xl text-gray-600 max-w-2xl">
                            Reliable and comfortable shuttle service from the airport,
                            harbor, or point-to-point transfers anywhere in Bali.</p>
                    </div>
                </div>

                <div class="">
                    <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                        <svg class="size-5 text-cst-yellow-400" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 23.3L8.65 20H4V15.35L0.699997 12L4 8.65V4H8.65L12 0.699997L15.35 4H20V8.65L23.3 12L20 15.35V20H15.35L12 23.3ZM12 17C13.3833 17 14.5625 16.5125 15.5375 15.5375C16.5125 14.5625 17 13.3833 17 12C17 10.6167 16.5125 9.4375 15.5375 8.4625C14.5625 7.4875 13.3833 7 12 7V17ZM12 20.5L14.5 18H18V14.5L20.5 12L18 9.5V6H14.5L12 3.5L9.5 6H6V9.5L3.5 12L6 14.5V18H9.5L12 20.5Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="font-inter">
                        <h4 class="text-2xl font-semibold leading-tight mt-1 mb-4">Tours & Activities</h4>
                        <p class="text-xl text-gray-600 max-w-2xl">A wide range of exciting activities, from cultural
                            experiences and culinary delights to outdoor adventures.</p>
                    </div>
                </div>

                <div class="">
                    <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                        <svg class="size-5 text-cst-yellow-400" viewBox="0 0 22 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.5 13.4167C4.73612 13.4167 4.08681 13.1493 3.55209 12.6146C3.01737 12.0799 2.75001 11.4306 2.75001 10.6667H0.916672V2.41667C0.916672 1.9125 1.09619 1.4809 1.45521 1.12187C1.81424 0.762846 2.24584 0.583332 2.75001 0.583332H15.5833L21.0833 6.08333V10.6667H19.25C19.25 11.4306 18.9826 12.0799 18.4479 12.6146C17.9132 13.1493 17.2639 13.4167 16.5 13.4167C15.7361 13.4167 15.0868 13.1493 14.5521 12.6146C14.0174 12.0799 13.75 11.4306 13.75 10.6667H8.25C8.25 11.4306 7.98264 12.0799 7.44792 12.6146C6.9132 13.1493 6.26389 13.4167 5.5 13.4167ZM13.75 5.16667H17.4167L14.6667 2.41667H13.75V5.16667ZM8.25 5.16667H11.9167V2.41667H8.25V5.16667ZM2.75001 5.16667H6.41667V2.41667H2.75001V5.16667ZM5.5 11.8125C5.82084 11.8125 6.09202 11.7017 6.31355 11.4802C6.53507 11.2587 6.64584 10.9875 6.64584 10.6667C6.64584 10.3458 6.53507 10.0747 6.31355 9.85312C6.09202 9.6316 5.82084 9.52083 5.5 9.52083C5.17917 9.52083 4.90799 9.6316 4.68646 9.85312C4.46494 10.0747 4.35417 10.3458 4.35417 10.6667C4.35417 10.9875 4.46494 11.2587 4.68646 11.4802C4.90799 11.7017 5.17917 11.8125 5.5 11.8125ZM16.5 11.8125C16.8208 11.8125 17.092 11.7017 17.3135 11.4802C17.5351 11.2587 17.6458 10.9875 17.6458 10.6667C17.6458 10.3458 17.5351 10.0747 17.3135 9.85312C17.092 9.6316 16.8208 9.52083 16.5 9.52083C16.1792 9.52083 15.908 9.6316 15.6865 9.85312C15.4649 10.0747 15.3542 10.3458 15.3542 10.6667C15.3542 10.9875 15.4649 11.2587 15.6865 11.4802C15.908 11.7017 16.1792 11.8125 16.5 11.8125ZM2.75001 8.83333H3.48334C3.74306 8.55833 4.04098 8.3368 4.37709 8.16875C4.7132 8.00069 5.0875 7.91667 5.5 7.91667C5.9125 7.91667 6.28681 8.00069 6.62292 8.16875C6.95903 8.3368 7.25695 8.55833 7.51667 8.83333H14.4833C14.7431 8.55833 15.041 8.3368 15.3771 8.16875C15.7132 8.00069 16.0875 7.91667 16.5 7.91667C16.9125 7.91667 17.2868 8.00069 17.6229 8.16875C17.959 8.3368 18.2569 8.55833 18.5167 8.83333H19.25V7H2.75001V8.83333Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="font-inter">
                        <h4 class="text-2xl font-semibold leading-tight mt-1 mb-4">Vehicle Rental</h4>
                        <p class="text-xl text-gray-600 max-w-2xl">Discover Bali with our reliable vehicle rentals,
                            offering comfort, safety, and flexibility for your journey.</p>
                    </div>
                </div>
            </div>

            <x-wave-button href="#" firstTextClasses="text-black font-inter font-semibold"
                secondTextClasses="text-black font-playfair font-bold italic"
                class="text-2xl w-fit py-2.5 px-7 bg-cst-yellow-400 rounded-sm hover:bg-cst-yellow-400">
                Book Tours!
            </x-wave-button>

        </div>
    </section>

    {{-- ? TOUR PACKAGES & ACTIVITIES SECTION --}}
    <section class="flex flex-col items-center px-8 py-16 relative overflow-x-hidden">
        <div class="flex items-center sm:gap-16 mb-6 w-full">
            <span class="hidden sm:inline-block h-0.5 w-full bg-gray-300"></span>
            <div class="flex flex-col text-center w-full">
                <p class="font-inter text-gray-600 text-md sm:text-xl">Available tour & activity packages</p>
                <h2 class="font-playfair italic text-4xl sm:text-5xl font-bold whitespace-nowrap">
                    Choose your journey
                </h2>
            </div>
            <span class="hidden sm:inline-block h-0.5 w-full bg-gray-300"></span>
        </div>

        <a href="#" class="flex text-lg gap-2 items-center text-cst-green-400 underline mb-14">
            See all packages <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @for ($i = 0; $i < 6; $i++)
                <div class="-space-y-5 {{ $i > 2 ? 'hidden md:inline-block' : '' }}">
                    <div class="relative -z-10">
                        <span
                            class="absolute left-2 top-2 py-1 px-2.5 rounded-sm w-fit font-inter font-bold shadow-lg text-md backdrop-blur-[10px] backdrop-saturate-[165%] bg-[rgba(215,215,215,0.2)] border border-[rgba(255,255,255,0.125)]">
                            Tour</span>
                        <img class="-z-10 w-full h-56 object-cover object-center"
                            src="https://plus.unsplash.com/premium_photo-1677829177642-30def98b0963?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="bg-gray-200 p-5 rounded-t-2xl z-10">
                        <h5 class="font-roboto text-2xl font-semibold">Tour Package Title</h5>
                        <p class="font-inter text-md italic text-gray-500">Kintamani, Bali</p>

                        <p class="font-inter text-lg text-gray-500 my-4 max-w-xs">
                            At Explore Vista Bali, we're passionate about helping travellers discover the...
                        </p>

                        <div
                            class="flex flex-wrap justify-between sm:justify-start gap-2 sm:gap-4 text-lg sm:text-xl font-inter [&_p]:font-semibold mb-4">
                            <div class="flex items-center gap-1 sm:gap-2 whitespace-nowrap">
                                <svg class="size-6 text-cst-yellow-600" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.2725 2.5425L13.3375 1.4775C13.015 1.095 12.6625 0.735 12.28 0.42L11.215 1.485C10.0525 0.555 8.59 0 7 0C3.2725 0 0.25 3.0225 0.25 6.75C0.25 10.4775 3.265 13.5 7 13.5C10.735 13.5 13.75 10.4775 13.75 6.75C13.75 5.16 13.195 3.6975 12.2725 2.5425ZM7.75 7.5H6.25V3H7.75V7.5Z"
                                        fill="currentColor" />
                                </svg>
                                <p class="">09:00 AM</p>
                            </div>
                            <div class="flex items-center gap-1 sm:gap-2 whitespace-nowrap">
                                <svg class="size-6 text-cst-yellow-600" viewBox="0 0 22 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.6667 6.08331C16.1884 6.08331 17.4075 4.85498 17.4075 3.33331C17.4075 1.81165 16.1884 0.583313 14.6667 0.583313C13.145 0.583313 11.9167 1.81165 11.9167 3.33331C11.9167 4.85498 13.145 6.08331 14.6667 6.08331ZM7.33335 6.08331C8.85502 6.08331 10.0742 4.85498 10.0742 3.33331C10.0742 1.81165 8.85502 0.583313 7.33335 0.583313C5.81169 0.583313 4.58335 1.81165 4.58335 3.33331C4.58335 4.85498 5.81169 6.08331 7.33335 6.08331ZM7.33335 7.91665C5.19752 7.91665 0.916687 8.98915 0.916687 11.125V13.4166H13.75V11.125C13.75 8.98915 9.46919 7.91665 7.33335 7.91665ZM14.6667 7.91665C14.4009 7.91665 14.0984 7.93498 13.7775 7.96248C14.8409 8.73248 15.5834 9.76831 15.5834 11.125V13.4166H21.0834V11.125C21.0834 8.98915 16.8025 7.91665 14.6667 7.91665Z"
                                        fill="currentColor" />
                                </svg>
                                <p class="">5 people</p>
                            </div>
                            <div class="flex items-center gap-1 sm:gap-2 whitespace-nowrap">
                                <svg class="size-6 text-cst-yellow-600" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.00002 0.666687C4.40002 0.666687 0.666687 4.40002 0.666687 9.00002C0.666687 13.6 4.40002 17.3334 9.00002 17.3334C13.6 17.3334 17.3334 13.6 17.3334 9.00002C17.3334 4.40002 13.6 0.666687 9.00002 0.666687ZM10.175 14.075V15.6667H7.95002V14.0584C6.52502 13.7584 5.31669 12.8417 5.22502 11.225H6.85835C6.94169 12.1 7.54169 12.7834 9.06669 12.7834C10.7 12.7834 11.0667 11.9667 11.0667 11.4584C11.0667 10.7667 10.7 10.1167 8.84169 9.67502C6.77502 9.17502 5.35835 8.32502 5.35835 6.61669C5.35835 5.18335 6.51669 4.25002 7.95002 3.94169V2.33335H10.175V3.95835C11.725 4.33335 12.5 5.50835 12.55 6.78335H10.9167C10.875 5.85835 10.3834 5.22502 9.06669 5.22502C7.81669 5.22502 7.06669 5.79169 7.06669 6.59169C7.06669 7.29169 7.60835 7.75002 9.29169 8.18335C10.975 8.61669 12.775 9.34169 12.775 11.4417C12.7667 12.9667 11.625 13.8 10.175 14.075Z"
                                        fill="currentColor" />
                                </svg>
                                <p class="">$50</p>
                            </div>
                        </div>

                        <x-wave-button href="#" firstTextClasses="text-cst-yellow-400 font-inter font-semibold"
                            secondTextClasses="text-cst-yellow-400 font-playfair font-bold italic"
                            class="text-xl w-full py-3 text-center bg-cst-green-400 rounded-sm">
                            Book Tour <span class="ml-4">&rightarrow;</span>
                        </x-wave-button>
                    </div>
                </div>
            @endfor

        </div>
    </section>

    {{-- ? TESTIMONIAL SECTION --}}
    <section
        class="flex flex-col sm:flex-row gap-14 sm:gap-10 lg:gap-28 items-center justify-between px-4 sm:px-8 py-24 relative overflow-x-hidden bg-cst-green-800 text-white">

        <div class="px-4 sm:px-0">
            <div class="mb-10 sm:mb-16">
                <p class="font-inter text-gray-300 text-md sm:text-xl mb-2">Testimonials / Comments</p>
                <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight max-w-lg">
                    What our people <i class="font-playfair">says about us.</i>
                </h2>
            </div>

            <div class="flex flex-wrap gap-3 mb-12">
                <a href="#"
                    class="flex items-center gap-3 whitespace-nowrap font-inter font-semibold text-md sm:text-xl py-2.5 px-5 bg-cst-yellow-400 w-fit rounded-md text-black hover:scale-105 transition">
                    <svg class="size-6 text-black" viewBox="0 0 19 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 6H12V4H4V6ZM4 10H9V8H4V10ZM14 17V14H11V12H14V9H16V12H19V14H16V17H14ZM0 17V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H14C14.55 0 15.0208 0.195833 15.4125 0.5875C15.8042 0.979167 16 1.45 16 2V7.075C15.8333 7.04167 15.6667 7.02083 15.5 7.0125C15.3333 7.00417 15.1667 7 15 7C13.3167 7 11.8958 7.58333 10.7375 8.75C9.57917 9.91667 9 11.3333 9 13C9 13.1667 9.00417 13.3333 9.0125 13.5C9.02083 13.6667 9.04167 13.8333 9.075 14H3L0 17Z"
                            fill="currentColor" />
                    </svg> Comment
                </a>

                <a class="group relative whitespace-nowrap inline-flex items-center overflow-hidden rounded-md bg-transparent border-3 border-cst-yellow-400 py-2.5 px-5 text-cst-yellow-400 focus:ring-3 focus:outline-hidden"
                    href="#">
                    <span class="absolute -end-full transition-all lg:group-hover:end-4">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>

                    <span class="text-sm lg:text-xl italic font-inter font-medium transition-all lg:group-hover:me-6">
                        View all comments
                    </span>
                </a>
            </div>

            <div class="flex gap-2">
                <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                    <svg class="size-6 text-cst-green-400" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.2683 5.77736C8.23565 5.76781 5.77133 8.22258 5.76178 11.2552C5.75223 14.2879 8.207 16.7522 11.2396 16.7617C14.2723 16.7713 16.7366 14.3165 16.7462 11.2839C16.7557 8.25123 14.3009 5.78691 11.2683 5.77736ZM11.2396 7.70679C13.2073 7.69724 14.8072 9.28759 14.8167 11.2552C14.8263 13.2229 13.2359 14.8228 11.2683 14.8323C9.30066 14.8419 7.70076 13.2515 7.69121 11.2839C7.68166 9.31624 9.27201 7.71634 11.2396 7.70679ZM15.7003 5.55289C15.7003 4.84607 16.2734 4.27297 16.9802 4.27297C17.687 4.27297 18.2601 4.84607 18.2601 5.55289C18.2601 6.25972 17.687 6.83281 16.9802 6.83281C16.2734 6.83281 15.7003 6.25972 15.7003 5.55289ZM21.8945 6.85192C21.8133 5.1374 21.4217 3.61869 20.1656 2.36742C18.9144 1.11616 17.3957 0.724538 15.6812 0.638574C13.9141 0.538281 8.61772 0.538281 6.85066 0.638574C5.14092 0.719763 3.62221 1.11138 2.36617 2.36265C1.11013 3.61391 0.723287 5.13262 0.637322 6.84714C0.53703 8.61419 0.53703 13.9106 0.637322 15.6776C0.718511 17.3922 1.11013 18.9109 2.36617 20.1621C3.62221 21.4134 5.13614 21.805 6.85066 21.891C8.61772 21.9913 13.9141 21.9913 15.6812 21.891C17.3957 21.8098 18.9144 21.4182 20.1656 20.1621C21.4169 18.9109 21.8085 17.3922 21.8945 15.6776C21.9948 13.9106 21.9948 8.61897 21.8945 6.85192ZM19.6117 17.5736C19.2391 18.5097 18.518 19.2308 17.5772 19.6081C16.1683 20.1669 12.8252 20.038 11.2683 20.038C9.71138 20.038 6.36353 20.1621 4.95944 19.6081C4.02338 19.2356 3.30223 18.5145 2.92494 17.5736C2.36617 16.1648 2.49512 12.8217 2.49512 11.2648C2.49512 9.70786 2.37095 6.36001 2.92494 4.95592C3.29745 4.01985 4.0186 3.29871 4.95944 2.92142C6.36831 2.36264 9.71138 2.49159 11.2683 2.49159C12.8252 2.49159 16.1731 2.36742 17.5772 2.92142C18.5132 3.29393 19.2344 4.01508 19.6117 4.95592C20.1704 6.36478 20.0415 9.70786 20.0415 11.2648C20.0415 12.8217 20.1704 16.1695 19.6117 17.5736Z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                    <svg class="size-6 text-cst-green-400" viewBox="0 0 23 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.205 11.2647C22.205 5.35323 17.4139 0.562134 11.5024 0.562134C5.59087 0.562134 0.799774 5.35323 0.799774 11.2647C0.799774 16.2816 4.25722 20.4958 8.91871 21.6538V14.5341H6.7113V11.2647H8.91871V9.85585C8.91871 6.21445 10.5659 4.52545 14.1446 4.52545C14.8219 4.52545 15.9925 4.65923 16.4733 4.79301V7.75295C16.2224 7.72787 15.7834 7.71115 15.2358 7.71115C13.4799 7.71115 12.8026 8.37588 12.8026 10.1025V11.2647H16.2977L15.6956 14.5341H12.7984V21.8879C18.0995 21.2483 22.205 16.7373 22.205 11.2647Z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="#" class="p-2 bg-cst-green-200 rounded-full flex-none">
                    <svg class="size-6 text-cst-green-400" viewBox="0 0 22 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.8913 0.562134H20.1751L13.0029 8.7577L21.4403 19.9115H14.8355L9.65858 13.1485L3.74214 19.9115H0.453681L8.12366 11.1438L0.0350647 0.562134H6.80734L11.4819 6.7437L16.8913 0.562134ZM15.7378 17.9486H17.5565L5.81662 2.42265H3.86307L15.7378 17.9486Z"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>
        </div>

        <div x-data="carousel()" x-init="init()" class="relative w-full sm:max-w-sm lg:max-w-3xl">

            {{-- viewport --}}
            <div x-ref="viewport" class="overflow-hidden w-full">

                <!-- left shadow -->
                <div
                    class="pointer-events-none absolute -left-6 top-0 h-full w-10 bg-gradient-to-r from-[#16352d] to-transparent z-10">
                </div>

                <!-- right shadow -->
                <div
                    class="pointer-events-none absolute -right-6 top-0 h-full w-10 bg-gradient-to-l from-[#16352d] to-transparent z-10">
                </div>

                <div x-ref="track" class="flex transition-transform duration-500 ease-out"
                    :style="`transform: translateX(${translate}px)`">

                    @for ($i = 0; $i < 6; $i++)
                        <div class="w-full lg:w-1/2 flex-shrink-0 px-4">
                            <div class="bg-white px-6 py-8 pt-20 rounded-md rounded-tr-[5rem]">
                                <svg class="w-14 aspect-auto text-gray-300 mb-8" viewBox="0 0 63 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M63 35.625C63 47.4347 55.4484 57 46.125 57H45C42.5109 57 40.5 54.4528 40.5 51.3C40.5 48.1472 42.5109 45.6 45 45.6H46.125C50.4703 45.6 54 41.1291 54 35.625V34.2H45C40.0359 34.2 36 29.0878 36 22.8V11.4C36 5.11219 40.0359 0 45 0H54C58.9641 0 63 5.11219 63 11.4V35.625ZM27 35.625C27 47.4347 19.4484 57 10.125 57H9C6.51094 57 4.5 54.4528 4.5 51.3C4.5 48.1472 6.51094 45.6 9 45.6H10.125C14.4703 45.6 18 41.1291 18 35.625V34.2H9C4.03594 34.2 0 29.0878 0 22.8V11.4C0 5.11219 4.03594 0 9 0H18C22.9641 0 27 5.11219 27 11.4V35.625Z"
                                        fill="currentColor" />
                                </svg>
                                <p class="text-black font-inter font-medium text-xl mb-16">
                                    {{ $i + 1 }}. This service is great! I love it, I would recommend this to my
                                    relatives.
                                </p>
                                <div class="font-inter pt-4 border-t-2 border-gray-400 w-full text-black">
                                    <p class="font-semibold text-lg">Jackson Harry</p>
                                    <a href="#" target="_blank"
                                        class="text-gray-500 text-md italic hover:underline">@loremipsum</a>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>

            </div>

            {{-- controls --}}
            <div class="mt-10 flex items-center justify-center gap-4">
                <button @click="prev()" :disabled="page === 0"
                    class="px-3 py-1 cursor-pointer rounded-full bg-cst-green-400 text-cst-yellow-400 disabled:opacity-40">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <div class="flex items-center gap-2 [&>span]:w-4 [&>span]:h-4 [&>span]:rounded-full">
                    <template x-for="i in totalPages" :key="i">
                        <span @click="goTo(i-1)" :class="(i - 1) === page ? 'bg-cst-yellow-400' : 'bg-gray-400'"
                            class="cursor-pointer"></span>
                    </template>
                </div>

                <button @click="next()" :disabled="page >= totalPages - 1"
                    class="px-3 py-1 cursor-pointer rounded-full bg-cst-green-400 text-cst-yellow-400 disabled:opacity-40">
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
                        perPage: 2,
                        translate: 0,
                        totalPages: 1,
                        init() {
                            this.update();
                            window.addEventListener('resize', () => this.update());
                        },
                        update() {
                            this.perPage = window.innerWidth < 1200 ? 1 : 2;
                            const vp = this.$refs.viewport;
                            const count = this.$refs.track.children.length;
                            this.totalPages = Math.ceil(count / this.perPage);

                            if (this.page > this.totalPages - 1) this.page = this.totalPages - 1;
                            this.translate = -this.page * vp.clientWidth;
                        },
                        next() {
                            if (this.page < this.totalPages - 1) {
                                this.page++;
                                this.update();
                            }
                        },
                        prev() {
                            if (this.page > 0) {
                                this.page--;
                                this.update();
                            }
                        },
                        goTo(i) {
                            this.page = i;
                            this.update();
                        }
                    }
                }
            </script>
        </div>

    </section>

    {{-- ? GALLERY SECTION --}}
    <section class="flex flex-col items-center px-4 sm:px-8 py-20 relative overflow-x-hidden bg-cst-green-800 text-white">
        <span class="absolute top-0 inset-x-8 h-px bg-cst-green-200/40"></span>

        <div class="mb-10 sm:mb-16">
            <p class="font-inter text-gray-300 text-md sm:text-xl mb-2 text-center">Gallery / Pictures</p>
            <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight max-w-lg text-center">
                Our <i class="font-playfair">Captured Story</i>
            </h2>
        </div>

        <div class="flex flex-wrap gap-6">

            @for ($i = 0; $i < 4; $i++)
                <a href="#"
                    class="group {{ $i > 2 ? 'hidden sm:inline-block' : 'inline-block' }} relative flex-3 h-64 sm:h-80 lg:h-96 text-white min-w-xs font-inter">
                    <div class="relative flex h-full items-end transform
                bg-center bg-cover transition-transform group-hover:-translate-y-2"
                        style="background-image: url('https://images.unsplash.com/photo-1531778272849-d1dd22444c06?q=80&w=760&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

                        <!-- front content -->
                        <div
                            class="absolute inset-0 flex gap-2 items-end p-4 sm:p-6
                   transition-opacity duration-300 group-hover:opacity-0 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 sm:size-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <h2 class="mt-6 text-xl font-medium sm:text-2xl">Kintamani, Ubud</h2>
                        </div>

                        <!-- back content -->
                        <div
                            class="absolute inset-0 p-4 sm:p-6 opacity-0 bg-black/60 transition-opacity duration-300
                   group-hover:opacity-100 z-10">
                            <h3 class="mt-4 text-xl font-semibold text-cst-yellow-400 sm:text-2xl">Kintamani, Ubud</h3>
                            <p class="mt-4 text-sm font-light sm:text-base">
                                This image taken place at Kintamani, Ubud. Explore our tour packages or activities and find
                                the
                                perfect way to
                                experience Bali.
                            </p>
                            <p class="mt-10 font-semibold italic">View Gallery &rightarrow;</p>
                        </div>
                    </div>
                </a>
            @endfor

        </div>

        <a href="#"
            class="group mt-10 relative whitespace-nowrap inline-flex items-center overflow-hidden rounded-md bg-transparent border-3 border-cst-yellow-400 py-2.5 px-5 text-cst-yellow-400 focus:ring-3 focus:outline-hidden">
            <span class="absolute -end-full transition-all lg:group-hover:end-4">
                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </span>

            <span class="text-sm lg:text-xl italic font-inter font-medium transition-all lg:group-hover:me-6">
                View all pictures
            </span>
        </a>
    </section>

@endsection
