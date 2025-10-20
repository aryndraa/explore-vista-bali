@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Shuttle Services - Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Choose your preferred shuttle service with Explore Vista Bali — from airport transfers to
    harbor pickups and point-to-point rides anywhere on the island.')
@section('meta_keywords',
    'Bali shuttle, Bali airport transfer, Bali harbor transfer, Bali point to point, Bali
    transport, Bali private car, Explore Vista Bali')
@section('og_title', 'Bali Shuttle & Transfer Services | Explore Vista Bali')
@section('og_description',
    'Reliable and comfortable shuttle options across Bali — airport, harbor, and private
    transfers. Book your ride easily with Explore Vista Bali.')
    {{-- @section('og_image', asset('images/shuttle-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}

@section('main-class', 'bg-cst-green-800')
@section('content')

    {{-- ? SHUTTLE TYPE SELECTION SECTION --}}
    <section class="container mx-auto flex flex-col justify-center items-center w-full min-h-screen pt-24 pb-16 px-8">

        <div class="text-center mb-14">
            <p class="font-inter text-gray-300 text-xl mb-2" data-aos="fade-up" >Shuttle Type</p>
            <h2 class="font-roboto font-semibold text-white text-4xl" data-aos="fade-up" data-aos-delay="200">
                Choose your
                <i class="text-cst-yellow-400">pick-up type</i>
            </h2>
        </div>

        <div class="flex flex-col gap-5 md:flex-row [&>div]:hover:-translate-y-2 [&>div]:transition">

            {{-- Harbour Card --}}
            <div class="flex-1 flex flex-col -space-y-4 overflow-hidden max-w-sm" data-aos="fade-up">
                <img class="w-full h-48 object-cover"
                    src="https://images.unsplash.com/photo-1713149266099-3b0602539999?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Harbour">
                <div class="flex-1 flex flex-col items-center bg-gray-50 p-5 rounded-t-xl font-inter">

                    <div class="-mt-16 mb-6 shadow-lg bg-gray-200 p-4 rounded-full">
                        <svg class="size-12 text-cst-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path
                                d="M152-80h-32v-80h32q48 0 91.5-10.5T341-204q38 19 66.5 31.5T480-160q44 0 72.5-12.5T619-204q53 23 97.5 33.5T809-160h31v80h-31q-49 0-95.5-9T622-116q-40 19-73 27t-69 8q-36 0-68.5-8T339-116q-45 18-91.5 27T152-80Zm328-160q-60 0-105-40l-45-40q-27 27-60.5 46T198-247l-85-273q-5-17 3-31t25-19l59-16v-134q0-33 23.5-56.5T280-800h100v-80h200v80h100q33 0 56.5 23.5T760-720v134l59 16q17 5 25 19t3 31l-85 273q-38-8-71.5-27T630-320l-45 40q-45 40-105 40ZM280-607l200-53 200 53v-113H280v113Z" />
                        </svg>
                    </div>

                    <div class="flex-1 flex flex-col justify-center">
                        <h4 class="font-semibold text-xl mb-1 text-center">
                            Harbor
                        </h4>
                        <p class="text-base mb-6 text-center">
                            We'll pick you up at the harbor
                        </p>
                    </div>

                    <x-wave-button href="{{ route('services.shuttle-form', ['type' => 'harbor']) }}"
                        firstTextClasses="text-black font-inter font-semibold"
                        secondTextClasses="text-black font-playfair font-bold italic"
                        class="text-md w-full py-1.5 px-5 rounded-sm bg-cst-yellow-400">
                        Choose Service
                    </x-wave-button>
                </div>
            </div>

            {{-- Airport Card --}}
            <div class="flex-1 flex flex-col -space-y-4 overflow-hidden max-w-sm" data-aos="fade-up" data-aos-delay="200">
                <img class="w-full h-48 object-cover"
                    src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flive.staticflickr.com%2F8014%2F29795810092_3cf9efd079_b.jpg&f=1&nofb=1&ipt=d3d9febd5c2e0801edee068a9eb1956e3a3b2ee5c988da398ead2e17b6ee4321"
                    alt="Airport">
                <div class="flex-1 flex flex-col items-center bg-gray-50 p-5 rounded-t-xl font-inter">

                    <div class="-mt-16 mb-6 shadow-lg bg-gray-200 p-4 rounded-full">
                        <svg class="size-12 text-cst-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path
                                d="M120-120v-80h720v80H120Zm622-202L120-499v-291l96 27 48 139 138 39-35-343 115 34 128 369 172 49q25 8 41.5 29t16.5 48q0 35-28.5 61.5T742-322Z" />
                        </svg>
                    </div>

                    <div class="flex-1 flex flex-col justify-center">
                        <h4 class="font-semibold text-xl mb-1 text-center">
                            Airport
                        </h4>
                        <p class="text-base mb-6 text-center">
                            We'll wait for you at the airport
                        </p>
                    </div>

                    <x-wave-button href="{{ route('services.shuttle-form', ['type' => 'airport']) }}"
                        firstTextClasses="text-black font-inter font-semibold"
                        secondTextClasses="text-black font-playfair font-bold italic"
                        class="text-md w-full py-1.5 px-5 rounded-sm bg-cst-yellow-400">
                        Choose Service
                    </x-wave-button>
                </div>
            </div>

            {{-- Point-to-point Card --}}
            <div class="flex-1 flex flex-col -space-y-4 overflow-hidden max-w-sm" data-aos="fade-up" data-aos-delay="400">
                <img class="w-full h-48 object-cover"
                    src="https://images.unsplash.com/photo-1711658450992-3c17ed5fd72b?q=80&w=1175&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Point to point">
                <div class="flex-1 flex flex-col items-center bg-gray-50 p-5 rounded-t-xl font-inter">

                    <div class="-mt-16 mb-6 shadow-lg bg-gray-200 p-4 rounded-full">
                        <svg class="size-12 text-cst-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path
                                d="M480-80q-106 0-173-33.5T240-200q0-24 14.5-44.5T295-280l63 59q-9 4-19.5 9T322-200q13 16 60 28t98 12q51 0 98.5-12t60.5-28q-7-8-18-13t-21-9l62-60q28 16 43 36.5t15 45.5q0 53-67 86.5T480-80Zm0-120Q339-304 269.5-402T200-594q0-71 25.5-124.5T291-808q40-36 90-54t99-18q49 0 99 18t90 54q40 36 65.5 89.5T760-594q0 94-69.5 192T480-200Zm0-320q33 0 56.5-23.5T560-600q0-33-23.5-56.5T480-680q-33 0-56.5 23.5T400-600q0 33 23.5 56.5T480-520Z" />
                        </svg>
                    </div>

                    <div class="flex-1 flex flex-col justify-center">
                        <h4 class="font-semibold text-xl mb-1 text-center">
                            Point-to-point
                        </h4>
                        <p class="text-base mb-6 text-center">
                            We'll pick you up from a point, and drop you to your destination.
                        </p>
                    </div>

                    <x-wave-button href="{{ route('services.shuttle-form', ['type' => 'point-to-point']) }}"
                        firstTextClasses="text-black font-inter font-semibold"
                        secondTextClasses="text-black font-playfair font-bold italic"
                        class="text-md w-full py-1.5 px-5 rounded-sm bg-cst-yellow-400">
                        Choose Service
                    </x-wave-button>
                </div>
            </div>

        </div>

    </section>
@endsection
