@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Book Your Bali Shuttle | Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Book your shuttle service easily with Explore Vista Bali. Choose airport, harbor, or
    point-to-point transfers and enjoy a comfortable ride anywhere on the island.')
@section('meta_keywords',
    'Bali shuttle booking, Bali airport transfer, Bali harbor transfer, Bali transport service,
    Bali private car, Bali transfer form, Explore Vista Bali')
@section('og_title', 'Book Bali Shuttle Service | Explore Vista Bali')
@section('og_description',
    'Reserve your Bali shuttle today — fast, reliable, and convenient transfers with Explore
    Vista Bali. Airport, harbor, or custom destinations available.')
    {{-- @section('og_image', asset('images/shuttle-form-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}

@section('main-class', 'bg-cst-green-800')
@section('content')
    <form action="{{ route('services.shuttle-booking') }}" method="POST" class="container mx-auto space-y-14 pt-24 pb-14 px-8">
        @csrf

       @php
            $shuttleId = \App\Models\Shuttle::where('name', request('type'))->value('id');
        @endphp

        <input type="hidden" name="shuttle_id" value="{{ $shuttleId }}">

        <section class="flex flex-col md:flex-row-reverse gap-10 text-white">

            <div class="flex-5 relative">
                <span class="flex justify-between items-center px-4 py-2 w-full bg-cst-green-200 text-black">
                    @php
                        $shuttleType = match(request('type')) {
                            'airport' => 'Airport',
                            'harbor' => 'Harbor',
                            'point-to-point' => 'Point-to-point',
                            default => redirect(route('services.shuttle')),
                        };
                    @endphp
                    <p class="font-inter italic font-bold text-2xl">
                        {{ $shuttleType }}
                    </p>
                    <a href="{{ route('services.shuttle') }}"
                        class="rounded-sm font-inter bg-black text-white px-4 py-1 transition hover:scale-105">
                        Change
                    </a>
                </span>
                <div x-data="{ shuttleType: @js($shuttleType) }" class="relative ">
                    <img class="w-full min-h-[50vh] lg:min-h-[70vh] md:h-full object-cover"
                        :src="shuttleType === 'Airport' ? 'https://live.staticflickr.com/8014/29795810092_3cf9efd079_b.jpg' : shuttleType === 'Harbor' ? 'https://images.unsplash.com/photo-1713149266099-3b0602539999?q=80&w=1170&auto=format&fit=crop' : 'https://images.unsplash.com/photo-1711658450992-3c17ed5fd72b?q=80&w=1175&auto=format&fit=crop'"
                        alt="Shuttle Image"
                    />
                </div>
            </div>

            {{-- Data Inputs --}}
            <div class="flex-7">
                <div class="flex mb-6">
                    <h3 class="font-inter tracking-wide font-bold text-2xl text-white">
                        <italic class="font-playfair text-3xl text-cst-yellow-400">01</italic>
                        - Your data
                    </h3>
                </div>

                <x-input id="customer_name" name="customer_name" label="Full name" placeholder="ex: Jacob Holden" type="text" class="rounded-sm mb-4" required />

                <div class="flex flex-col gap-4 md:flex-row mb-6">
                    <x-input id="customer_phone" name="customer_phone" label="Phone number" placeholder="ex: +11 222 333 4444" type="tel" class="rounded-sm" required />
                    <x-input id="customer_email" name="customer_email" label="Email" placeholder="ex: test@example.com" type="email" class="rounded-sm" required />
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
                        <x-input id="booking_date" name="booking_date" label="Date" type="date" class="rounded-sm" required />
                        <x-input id="pickup_time" name="pickup_time" label="Time (hours & minutes)" type="time" class="rounded-sm text-cst-green-400" required >
                            WITA
                        </x-input>
                        <x-input id="people_amount" name="people_amount" label="People Amount" placeholder="ex: 2" type="number" class="rounded-sm" required />
                    </div>

                    {{-- ? right side: from, to --}}
                   <div class="flex-1 space-y-4">
                        @php
                            $fromLabel = in_array($shuttleType, ['Airport', 'Harbor']) ? "From ($shuttleType location)" : 'From';
                        @endphp
                       <div x-data="{ shuttleType: '{{ $shuttleType }}', fromValue: '{{ old('from') }}' }" class="space-y-4">
                            <x-input id="from" name="from" label="{{ $fromLabel }}" 
                                placeholder="Please give accurate location" 
                                type="text" 
                                class="rounded-sm" 
                                required 
                                x-model="fromValue"
                                x-init="
                                    if (shuttleType === 'Airport') {
                                        fromValue = 'Ngurah Rai International Airport';
                                    }
                                "
                            >
                                     <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
                        </x-input>
                        </div>
                        <span class="block ml-5 h-6 border-l-4 border-dashed border-cst-yellow-400"></span>
                        <x-input id="to" name="to" label="To" placeholder="Please give accurate location" type="text" class="rounded-sm" required >
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
                        </x-input>
                    </div>

                </div>
            </div>

        </section>

        {{-- ? VEHICLE SELECTION --}}
       <section class="text-white">
            <h3 class="font-inter tracking-wide font-bold text-2xl text-white mb-8">
                <italic class="font-playfair text-3xl text-cst-yellow-400">03</italic> - Vehicle
            </h3>

            <div x-data="{ selectedVehicle: Number(@js(old('vehicle_id', 0))) }"
                class="grid mx-auto grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-4 max-w-sm sm:max-w-none w-full">

                @foreach ($shuttle->vehicles as $vehicle)
                    <label 
                        class="flex flex-col cursor-pointer rounded-lg transition-all ring-offset-cst-green-800 ring-cst-yellow-400"
                        :class="selectedVehicle === Number({{ $vehicle->vehicle->id }}) ? 'ring-3 ring-offset-6' : 'ring-0'">

                        <input type="radio" name="vehicle_id" class="hidden"
                            value="{{ $vehicle->vehicle->id }}"
                            x-model.number="selectedVehicle"
                            required />

                        <img class="w-full h-48 object-cover object-center"
                            src="{{ $vehicle->vehicle->getFirstMediaUrl('vehicles') }}" alt="">

                        <div class="p-4 py-5 flex flex-wrap gap-6 justify-between bg-cst-green-400 rounded-t-lg">
                            <div class="text-start">
                                <h4 class="font-roboto flex items-center font-semibold text-xl mb-2 capitalize whitespace-nowrap">
                                    {{ $vehicle->vehicle->type }} - {{ $vehicle->vehicle->name }}
                                </h4>
                                <p class="font-inter italic font-medium text-lg text-cst-yellow-400 w-fit">({{ $vehicle->vehicle->person }} seat)</p>
                            </div>
                            <div class="flex items-end sm:ml-auto">
                                <p class="text-2xl font-inter tracking-wide text-cst-yellow-400 font-bold">
                                    <sup class="text-sm font-medium">USD</sup> ${{ $vehicle->start_price }}
                                </p>
                            </div>
                        </div>
                    </label>
                @endforeach

            </div>
        </section>

        <span class="block w-full h-px bg-cst-green-200/40"></span>

        {{-- ? SUBMIT BUTTON --}}
       <x-whatsapp-button type="submit" class="mx-auto text-xl py-3 w-fit">
            Confirm via Whatsapp
        </x-whatsapp-button>

    </form>

@endsection
