@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Shuttle Form - Explore Vista Bali')

@section('main-class', 'bg-cst-green-800')
@section('content')

    {{-- ? USER DATA, ESSENTIALS, AND SHUTTLE TYPE SECTION --}}
    <section class="container mx-auto px-8 pt-24 pb-16 flex flex-col md:flex-row-reverse gap-10 text-white">

        {{-- Selected Shuttle Type --}}
        <div class="flex-5 relative">
            <span class="flex justify-between items-center px-4 py-2 w-full bg-cst-green-200 text-black">
                <p class="font-inter italic font-bold text-2xl">Point-to-point</p>
                <a href="{{ route('services.shuttle') }}"
                    class="font-inter bg-black text-white px-4 py-1 transition hover:scale-105">
                    Change
                </a>
            </span>
            <img class="w-full h-56 md:h-full object-cover"
                src="https://images.unsplash.com/photo-1713149266099-3b0602539999?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Harbour">
        </div>

        {{-- Data Inputs --}}
        <div class="flex-7">
            <div class="flex mb-6">
                <h3 class="font-inter tracking-wide font-bold text-2xl text-white">
                    <italic class="font-playfair text-3xl text-cst-yellow-400">01</italic>
                    - Your data
                </h3>
            </div>

            <x-input id="fullname" name="fullname" label="Full name" placeholder="ex: Jacob Holden" type="text"
                class="rounded-sm mb-4" required />

            <div class="flex flex-col gap-4 md:flex-row mb-6">
                <x-input id="phone" name="phone" label="Phone number" placeholder="ex: +11 222 333 4444"
                    type="tel" class="rounded-sm" required />
                <x-input id="email" name="email" label="Email" placeholder="ex: test@example.com" type="email"
                    class="rounded-sm" required />
            </div>

            <div class="flex mb-6">
                <h3 class="font-inter tracking-wide font-bold text-2xl text-white">
                    <italic class="font-playfair text-3xl text-cst-yellow-400">02</italic>
                    - Essentials
                </h3>
            </div>

            <div class="flex flex-col md:flex-row gap-4 w-full">

                {{-- ? left side: date, time, people amount --}}
                <div class="flex-1 space-y-4">
                    <x-input id="date" name="date" label="Date" type="date" class="rounded-sm" required />
                    <x-input id="time" name="time" label="Time (hours & minutes)" type="time" class="rounded-sm"
                        required />
                    <x-input id="peopleamount" name="peopleamount" label="Pople Amount" placeholder="ex: 2" type="number"
                        class="rounded-sm" required />
                </div>

                {{-- ? right side: from, to --}}
                <div class="flex-1">
                    <x-input id="location-start" name="location_start" label="From" type="text"
                        placeholder="Please give accurate location" class="rounded-sm" required>
                        <svg class="size-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path
                                d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" />
                        </svg>
                    </x-input>

                    <span class="block ml-5 h-6 border-l-4 border-dashed border-cst-yellow-400"></span>

                    <x-input id="location-end" name="location_end" label="To" type="text"
                        placeholder="Please give accurate location" class="rounded-sm" required>
                        <svg class="size-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path
                                d="m720-440-56-56 86-86q-43-8-137.5 9T400-441q32-117 129-188t219-71l-84-84 56-56 200 200-200 200ZM480-80Q319-217 239.5-334.5T160-552q0-136 93-232t227-96q35 0 70 7.5t67 22.5l-62 62q-18-6-37-9t-38-3q-101 0-170.5 72.5T240-552q0 71 59 162t181 203q60-55 105-105t74-96l58 58q-40 59-99 121T480-80Z" />
                        </svg>
                    </x-input>
                </div>

            </div>
        </div>


    </section>

@endsection
