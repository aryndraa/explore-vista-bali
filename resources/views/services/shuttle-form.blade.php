@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Shuttle Form - Explore Vista Bali')

@section('main-class', 'bg-cst-green-800')
@section('content')

    <form action="" method="POST" class="container mx-auto space-y-14 pt-24 pb-14 px-8">
        @csrf

        {{-- ? USER DATA, ESSENTIALS, AND SHUTTLE TYPE SECTION --}}
        <section class="flex flex-col md:flex-row-reverse gap-10 text-white">

            {{-- Selected Shuttle Type --}}
            <div class="flex-5 relative">
                <span class="flex justify-between items-center px-4 py-2 w-full bg-cst-green-200 text-black">
                    @php
                        $shuttleType = '';
                        switch (request('type')) {
                            case 'airport':
                                $shuttleType = 'Airport';
                                break;
                            case 'harbor':
                                $shuttleType = 'Harbor';
                                break;
                            case 'custom-point':
                                $shuttleType = 'Point-to-point';
                                break;
                            default:
                                redirect(route('shuttle'));
                                break;
                        }
                    @endphp
                    <p class="font-inter italic font-bold text-2xl">
                        {{ $shuttleType }}
                    </p>
                    <a href="{{ route('services.shuttle') }}"
                        class="rounded-sm font-inter bg-black text-white px-4 py-1 transition hover:scale-105">
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
                        <x-input id="time" name="time" label="Time (hours & minutes)" type="time"
                            class="rounded-sm" required />
                        <x-input id="peopleamount" name="peopleamount" label="Pople Amount" placeholder="ex: 2"
                            type="number" class="rounded-sm" required />
                    </div>

                    {{-- ? right side: from, to --}}
                    <div class="flex-1">
                        @php
                            $fromLabel = in_array($shuttleType, ['Airport', 'Harbor'])
                                ? "From ($shuttleType location)"
                                : 'From';
                        @endphp
                        <x-input id="location-start" name="location_start" label="{{ $fromLabel }}" type="text"
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

        {{-- ? VEHICLE SELECTION --}}
        <section class="text-white">

            <div class="flex mb-8">
                <h3 class="font-inter tracking-wide font-bold text-2xl text-white">
                    <italic class="font-playfair text-3xl text-cst-yellow-400">03</italic>
                    - Vehicle
                </h3>
            </div>

            {{-- ? Vehicle Cards --}}
            <div x-data="{ selectedVehicle: 0 }"
                class="grid mx-auto grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-4 max-w-sm sm:max-w-none w-full">

                @for ($i = 0; $i < 3; $i++)
                    <button type="button" x-on:click="selectedVehicle = {{ $i }}"
                        class="flex flex-col -space-y-4 cursor-pointer rounded-lg transition-all ring-offset-cst-green-800 ring-cst-yellow-400"
                        :class="selectedVehicle === {{ $i }} ? 'ring-3 ring-offset-6' : 'ring-0'">
                        <img class="w-full h-48 object-cover object-center"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.aw-jplm6V4oq-Avfo-zdLQHaEK%3Fcb%3D12%26pid%3DApi&f=1&ipt=672d3a679336e6d687f950c92c9b70894c4ab25acf9463e25447bc4dce497a20"
                            alt="">
                        <div class="p-4 py-5 flex flex-wrap gap-6 justify-between bg-cst-green-400 rounded-t-lg">
                            <div class="text-start">
                                <h4 class="font-roboto flex items-center font-semibold text-xl mb-2 whitespace-nowrap">
                                    <svg class="size-7 white mr-3" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 -960 960 960" fill="currentColor">
                                        <path
                                            d="M200-80q-83 0-141.5-58.5T0-280q0-83 58.5-141.5T200-480q83 0 141.5 58.5T400-280q0 83-58.5 141.5T200-80Zm0-80q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm240-40v-200L312-512q-12-11-18-25.5t-6-30.5q0-16 6.5-30.5T312-624l112-112q12-12 27.5-18t32.5-6q17 0 32.5 6t27.5 18l76 76q28 28 64 44t76 16v80q-57 0-108.5-22T560-604l-32-32-96 96 88 92v248h-80Zm180-540q-33 0-56.5-23.5T540-820q0-33 23.5-56.5T620-900q33 0 56.5 23.5T700-820q0 33-23.5 56.5T620-740ZM760-80q-83 0-141.5-58.5T560-280q0-83 58.5-141.5T760-480q83 0 141.5 58.5T960-280q0 83-58.5 141.5T760-80Zm0-80q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Z" />
                                    </svg>
                                    Bike - Yamaha NMax
                                </h4>
                                <p class="font-inter italic font-medium text-lg text-cst-yellow-400 w-fit">(2 seat)</p>
                            </div>
                            <div class="flex items-end sm:ml-auto">
                                <p class="text-2xl font-inter tracking-wide text-cst-yellow-400 font-bold">
                                    <sup class="text-sm font-medium">AUD</sup>
                                    $10
                                </p>
                            </div>
                        </div>
                    </button>
                @endfor

            </div>

        </section>

        <span class="block w-full h-px bg-cst-green-200/40"></span>

        {{-- ? SUBMIT BUTTON --}}
        <x-whatsapp-button class="mx-auto text-xl py-3 w-fit">
            Confirm via Whatsapp
        </x-whatsapp-button>

    </form>

@endsection
