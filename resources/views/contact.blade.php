@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Contact Us - Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Get in touch with Explore Vista Bali for tour bookings, shuttle services, or travel
    inquiries. We’re here to help make your Bali experience effortless.')
@section('meta_keywords',
    'contact Explore Vista Bali, Bali tours contact, Bali shuttle inquiry, Bali travel booking,
    Bali transport service, Bali tour help')
@section('og_title', 'Contact Explore Vista Bali')
@section('og_description',
    'Have questions or need help planning your Bali trip? Contact Explore Vista Bali today —
    we’re happy to assist you with tours, transfers, and more.')
    {{-- @section('og_image', asset('images/contact-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}

@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div
            class="container mx-auto flex flex-col justify-center items-center px-8 pt-16 pb-48 min-h-[30rem] w-full text-white">

            <div class="flex flex-col items-center text-center md:text-start mb-6">
                <nav aria-label="Breadcrumb" class="text-cst-yellow-400">
                    <ol class="flex items-center gap-1 text-sm [&_a]:cursor-pointer">
                        <li>
                            <a href="{{ route('home') }}" class="block transition-colors hover:text-cst-yellow-600"
                                aria-label="Home">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </a>
                        </li>

                        <li class="rtl:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}" class="block transition-colors hover:text-cst-yellow-600">
                                Contact
                            </a>
                        </li>
                    </ol>
                </nav>

                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl">
                    Our <i class="font-playfair">Contacts</i>
                </h1>
            </div>

            <div class="">
                <p class="font-inter text-md text-center max-w-sm md:max-w-lg">
                    Get in touch with us for bookings, inquiries, or custom travel plans in Bali. We’re here to make your
                    journey seamless.
                </p>
            </div>

        </div>
    </section>

    {{-- ? CONTACT FORM --}}
    <section class="relative container mx-auto px-8 my-8 -mt-[12rem] z-10">
        <div class="w-full md:w-fit mx-auto flex flex-col md:flex-row gap-8 bg-gray-100 shadow-xl p-4 rounded-md h-min">

            {{-- Text Part --}}
            <div class="flex-7">
                <x-input class="bg-transparent shadow-none! border-b-2 border-gray-300" label="Full name" type="text"
                    placeholder="Jacob Holden" name="fullname" id="fullname" required />
                <div class="flex flex-col sm:flex-row w-full gap-2">
                    <x-input class="bg-transparent shadow-none! border-b-2 border-gray-300" label="Phone number"
                        type="number" placeholder="+112223334444" name="phone" id="phone" required>
                        <svg class="size-5 text-cst-green-400" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.95 18C14.8667 18 12.8083 17.5458 10.775 16.6375C8.74167 15.7292 6.89167 14.4417 5.225 12.775C3.55833 11.1083 2.27083 9.25833 1.3625 7.225C0.454167 5.19167 0 3.13333 0 1.05C0 0.75 0.1 0.5 0.3 0.3C0.5 0.1 0.75 0 1.05 0H5.1C5.33333 0 5.54167 0.0791667 5.725 0.2375C5.90833 0.395833 6.01667 0.583333 6.05 0.8L6.7 4.3C6.73333 4.56667 6.725 4.79167 6.675 4.975C6.625 5.15833 6.53333 5.31667 6.4 5.45L3.975 7.9C4.30833 8.51667 4.70417 9.1125 5.1625 9.6875C5.62083 10.2625 6.125 10.8167 6.675 11.35C7.19167 11.8667 7.73333 12.3458 8.3 12.7875C8.86667 13.2292 9.46667 13.6333 10.1 14L12.45 11.65C12.6 11.5 12.7958 11.3875 13.0375 11.3125C13.2792 11.2375 13.5167 11.2167 13.75 11.25L17.2 11.95C17.4333 12.0167 17.625 12.1375 17.775 12.3125C17.925 12.4875 18 12.6833 18 12.9V16.95C18 17.25 17.9 17.5 17.7 17.7C17.5 17.9 17.25 18 16.95 18Z"
                                fill="currentColor" />
                        </svg>
                    </x-input>
                    <x-input class="bg-transparent shadow-none! border-b-2 border-gray-300" label="Email (optional)"
                        type="email" placeholder="test@example.com" name="email" id="email">
                        <svg class="size-5 text-cst-green-400" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H18C18.55 0 19.0208 0.195833 19.4125 0.5875C19.8042 0.979167 20 1.45 20 2V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2ZM10 9L18 4V2L10 7L2 2V4L10 9Z"
                                fill="currentColor" />
                        </svg>
                    </x-input>
                </div>
                <x-textarea class="bg-transparent shadow-none!" label="Message" placeholder="Type your message here"
                    name="message" id="contact-message" required rows="3" />

                <x-whatsapp-button class="w-fit mx-auto md:mx-0">Send message via Whatsapp</x-whatsapp-button>
            </div>

            {{-- Illustration Part --}}
            <div class="flex-5 hidden md:block">
                <img class="w-full h-96 object-cover object-center rounded-md"
                    src="https://images.unsplash.com/photo-1550147760-44c9966d6bc7?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>

        </div>
    </section>

    {{-- ? OTHER METHOD SECTION --}}
    <section class="container mx-auto px-8 py-24">

        <h1 class="text-center font-roboto font-semibold text-3xl sm:text-4xl mb-8">
            Or <i class="font-playfair">reach us</i> in another way
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-2 gap-4 md:gap-6 max-w-5xl mx-auto">

            {{-- ? ADDRESS --}}
            <div class="relative bg-gray-100 shadow-lg flex gap-8 rounded-sm p-4 overflow-hidden">
                {{-- background circle --}}
                <div class="absolute w-40 -left-12 top-1/2 -translate-y-1/2 aspect-square rounded-full bg-gray-200"></div>

                <div class="relative flex flex-2 rounded-full pl-2 items-center z-10">
                    <svg class="size-16 text-cst-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        fill="currentColor">
                        <path
                            d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                    </svg>
                </div>

                <div class="flex-10">
                    <h5 class="font-roboto font-semibold text-xl mb-1">Address</h5>
                    <p class="font-inter 2xl:text-lg">Jln. Lorem ipsum dolor sit, gg sit amet, br., lore ipsum</p>
                </div>
            </div>

            {{-- ? NO TELP --}}
            <div class="relative bg-gray-100 shadow-lg flex gap-8 rounded-sm p-4 overflow-hidden">
                {{-- background circle --}}
                <div class="absolute w-40 -left-12 top-1/2 -translate-y-1/2 aspect-square rounded-full bg-gray-200"></div>

                <div class="relative flex flex-2 rounded-full pl-3 items-center z-10">
                    <svg class="size-14 text-cst-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        fill="currentColor">
                        <path
                            d="M480-440v-360q0-17 11.5-28.5T520-840h280q17 0 28.5 11.5T840-800v200q0 17-11.5 28.5T800-560H600L480-440Zm80-200h200v-120H560v120Zm0 0v-120 120Zm238 520q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                    </svg>
                </div>

                <div class="flex flex-col flex-10 justify-center">
                    <h5 class="font-roboto font-semibold text-xl mb-1">
                        No. Telp
                    </h5>
                    <p class="font-inter 2xl:text-lg">
                        <a href="#">+00 (111) 222 3333</a>
                    </p>
                </div>
            </div>

            {{-- ? EMAIL --}}
            <div class="relative bg-gray-100 shadow-lg flex gap-8 rounded-sm p-4 overflow-hidden">
                {{-- background circle --}}
                <div class="absolute w-40 -left-12 top-1/2 -translate-y-1/2 aspect-square rounded-full bg-gray-200"></div>

                <div class="relative flex flex-2 rounded-full pl-3 items-center z-10">
                    <svg class="size-14 text-cst-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        fill="currentColor">
                        <path
                            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                    </svg>
                </div>

                <div class="flex flex-col flex-10 justify-center">
                    <h5 class="font-roboto font-semibold text-xl mb-1">
                        Email
                    </h5>
                    <p class="font-inter 2xl:text-lg">
                        <a href="#">emailtest@example.com</a>
                    </p>
                </div>
            </div>

            {{-- ? SOCIALS --}}
            <div class="relative bg-gray-100 shadow-lg flex gap-8 rounded-sm py-4 px-8 overflow-hidden">
                <div class="flex flex-col flex-10 justify-center">
                    <h5 class="font-roboto font-semibold text-xl mb-3">
                        Socials
                    </h5>
                    <div class="flex">
                        <x-social-media type="type2" />
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- ? COMMENT FORM SECTION --}}
    <section id="comment-form" class="container mx-auto px-8 py-24">

        <h1 class="text-center font-roboto font-semibold text-3xl sm:text-4xl mb-12">
            Maybe leave <i class="font-playfair">a comment</i> for us?
        </h1>

        <div class="flex flex-col md:flex-row items-center mx-auto gap-6 md:gap-12 w-full md:w-fit">
            {{-- illustration --}}
            <div class="">
                <img class="w-1/2 md:w-[40rem] mx-auto" src="{{ asset('illustration/comment-form-illustration.svg') }}"
                    alt="">
            </div>

            {{-- form --}}
            <form action="" class="space-y-4 w-full">
                @csrf

                <x-input label="Full name" placeholder="ex: Jacob Holden" id="fullname" name="fullname" required />
                <x-input label="Instagram (optional)" placeholder="ex: @exampleuser" id="instagram" name="instagram"
                    required />
                <x-textarea label="Message" placeholder="Your message here" />

                <button type="submit"
                    class="bg-cst-yellow-400 font-bold w-full rounded-sm px-8 py-3 text-xl hover:scale-105 active:scale-100 transition cursor-pointer">Send
                    Comment</button>
            </form>
        </div>

    </section>

@endsection
