@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Explore Vista Bali')
@section('content')

    {{-- ? HERO SECTION --}}
    <section class="relative min-h-screen flex items-end px-8 pb-14 text-white">
        <div class="absolute inset-0 bg-black -z-20">
            <video autplay loop class="opacity-50 h-full w-full object-cover"
                src="https://videocdn.cdnpk.net/videos/872ad75a-a3b7-44b7-a293-6092f02fc015/horizontal/previews/clear/large.mp4?token=exp=1758878564~hmac=1858a58741672b4e5e25aec732f053ffbb80ed1b6da74702ccb1efe4d6b3242a">
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

                <x-wave-button firstTextClasses="text-cst-yellow-400 font-inter font-medium"
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
                <h2 class="font-roboto text-4xl font-bold text-end">
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
                    <div class="pt-28 pb-16">
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
                    <div class="pt-28 pb-16">
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
                    <div class="pt-28 pb-16">
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

@endsection
