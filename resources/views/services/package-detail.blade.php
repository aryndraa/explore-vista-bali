@extends('components.layouts.app', ['variant' => 'light'])

{{-- SEO --}}
@section('title', $package->name . ' | Explore Vista Bali')
@section('meta_description', 'Experience {{ $package->name }} with Explore Vista Bali. {{ Str::limit(strip_tags($package->description), 150) }} Book now for an unforgettable Bali adventure.')
@section('meta_keywords', 'Bali tour, {{ $package->name }}, Bali travel package, Bali private tour, Bali adventure, Explore Vista Bali')
@section('og_title', '{{ $package->name }} | Explore Vista Bali')
@section('og_description', '{{ Str::limit(strip_tags($package->description), 150) }}')
@section('og_image', asset($package->featured_image ?? 'images/og-default.jpg'))
@section('og_type', 'article')
{{-- SEO END --}}

@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url({{ $package->getFirstMediaUrl('cover', 'optimized') }});">
        <div class="container mx-auto flex justify-center items-end px-8 py-16 min-h-64 w-full text-white">
            <div class="flex flex-col items-center text-center">
                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl mb-2">
                    {{ $package->name }}
                </h1>

                <nav aria-label="Breadcrumb" class="text-cst-yellow-400">
                    <ol class="flex items-center gap-1 text-sm [&_a]:cursor-pointer">
                        <li>
                            <a href="{{ route('home') }}" class="block transition-colors" aria-label="Home">
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
                            <p class="block transition-colors">
                                Services
                            </p>
                        </li>

                        <li class="rtl:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </li>

                        <li>
                            <a href="{{ route('services.available-packages') }}" class="block transition-colors">
                                Tour Packages
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
                            <p class="block transition-colors">
                                {{ $package->name }}
                            </p>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </section>

    {{-- ? PHOTOS SECTION --}}

    @php
        //? EXAMPLE
        $carouselItems = $package->getMedia('packages')
            ->sortBy('order_column')
            ->values()
            ->map(function ($media, $index) {
            return [
                'id' => $media->id,
                'image' => $media->getUrl('optimized'),
                'title' => 'Slide ' . ($index + 1),
            ];
        });
    @endphp

    <section x-data="{
        currentIndex: 0,
        items: @js($carouselItems),
        itemsPerPage: 4,
        init() {
            this.updateItemsPerPage();
            window.addEventListener('resize', () => {
                this.updateItemsPerPage();
                if (this.currentIndex >= this.totalPages) {
                    this.currentIndex = Math.max(0, this.totalPages - 1);
                }
            });
        },
        updateItemsPerPage() {
            if (window.innerWidth > 1020) {
                this.itemsPerPage = 4;
            } else if (window.innerWidth > 640) {
                this.itemsPerPage = 3;
            } else {
                this.itemsPerPage = 1;
            }
        },
        get totalPages() {
            return Math.ceil(this.items.length / this.itemsPerPage);
        },
        get canGoNext() {
            return this.currentIndex < this.totalPages - 1;
        },
        get canGoPrev() {
            return this.currentIndex > 0;
        },
        next() {
            if (this.canGoNext) {
                this.currentIndex++;
            }
        },
        prev() {
            if (this.canGoPrev) {
                this.currentIndex--;
            }
        },
        get translateX() {
            return this.currentIndex * -100;
        },
        get translateStyle() {
            if (this.itemsPerPage === 1) {
                return `transform: translateX(${this.translateX}%)`;
            }
    
            const gapRem = 1.5; // gap-6 = 1.5rem
            const gapOffset = this.currentIndex * gapRem;
            return `transform: translateX(calc(${this.translateX}% - ${gapOffset}rem))`;
        }
    }" class="container mx-auto px-8 py-16">

        <!-- Carousel Container -->
        <div class="relative">

            <!-- Items Grid Container with overflow hidden -->
            <div class="relative mb-12 overflow-hidden">

                <!-- Sliding Track -->
                <div class="relative max-h-[70vh] md:max-h-none flex transition-transform duration-500 ease-out sm:gap-6"
                    :style="translateStyle">

                    <!-- Each Page Group -->
                    <template x-for="pageIndex in totalPages" :key="'page-' + pageIndex">
                        <div class="flex-shrink-0 w-full grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4"
                            :class="itemsPerPage === 1 ? 'gap-0 px-6' : 'gap-4'">
                            <template
                                x-for="(item, idx) in items.slice((pageIndex - 1) * itemsPerPage, pageIndex * itemsPerPage)"
                                :key="item.id"
                            >
                                <div
                                    class="w-full md:w-auto md:h-full aspect-[3/4] bg-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300">
                                    <img :src="item.image" :alt="item.title"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </template>
                        </div>
                    </template>

                </div>
            </div>

            <div 
                x-data="{ 
                    isMobile: window.innerWidth < 1024, 
                    update() { this.isMobile = window.innerWidth < 1024 } 
                }"
                x-init="update(); window.addEventListener('resize', () => update())"
            >
                @if($package->getMedia('packages')->count() > 4)
                    <!-- Selalu tampil jika gambar lebih dari 4 -->
                    <div class="flex items-center justify-center gap-6 mt-4">
                        <!-- Tombol navigasi -->
                        <!-- Previous Button -->
                        <button aria-label="previous button for carousel navigation" 
                            @click="prev" 
                            :disabled="!canGoPrev"
                            :class="canGoPrev ? 'bg-white hover:bg-gray-50 cursor-pointer' : 'bg-gray-100 cursor-not-allowed'"
                            class="w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" :class="canGoPrev ? 'text-gray-700' : 'text-gray-400'" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <!-- Page Indicators -->
                        <div class="flex items-center justify-center gap-2">
                            <template x-for="i in totalPages" :key="i">
                                <button aria-label="dots for carousel navigation" @click="currentIndex = i - 1"
                                    class="transition-all duration-300 rounded-full"
                                    :class="currentIndex === i - 1 ? 'bg-emerald-700 w-8 h-2' : 'bg-gray-300 hover:bg-gray-400 w-2 h-2'">
                                </button>
                            </template>
                        </div>

                        <!-- Next Button -->
                        <button aria-label="next button for carousel navigation" 
                            @click="next" 
                            :disabled="!canGoNext"
                            :class="canGoNext ? 'bg-emerald-700 hover:bg-emerald-800 cursor-pointer' : 'bg-gray-300 cursor-not-allowed'"
                            class="w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                @else
                    <template x-if="isMobile">
                        <div class="flex items-center justify-center gap-6 mt-4">
                            <!-- Previous Button -->
                            <button aria-label="previous button for carousel navigation" 
                                @click="prev" 
                                :disabled="!canGoPrev"
                                :class="canGoPrev ? 'bg-white hover:bg-gray-50 cursor-pointer' : 'bg-gray-100 cursor-not-allowed'"
                                class="w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-all duration-200">
                                <svg class="w-5 h-5" :class="canGoPrev ? 'text-gray-700' : 'text-gray-400'" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>

                            <!-- Page Indicators -->
                            <div class="flex items-center justify-center gap-2">
                                <template x-for="i in totalPages" :key="i">
                                    <button aria-label="dots for carousel navigation" @click="currentIndex = i - 1"
                                        class="transition-all duration-300 rounded-full"
                                        :class="currentIndex === i - 1 ? 'bg-emerald-700 w-8 h-2' : 'bg-gray-300 hover:bg-gray-400 w-2 h-2'">
                                    </button>
                                </template>
                            </div>

                            <!-- Next Button -->
                            <button aria-label="next button for carousel navigation" 
                                @click="next" 
                                :disabled="!canGoNext"
                                :class="canGoNext ? 'bg-emerald-700 hover:bg-emerald-800 cursor-pointer' : 'bg-gray-300 cursor-not-allowed'"
                                class="w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-all duration-200">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </template>
                @endif
            </div>
        </div>
    </section>

    {{-- ? PACKAGE DETAIL SECTION --}}
    <section class="bg-gray-200/80">
        <div
            class="container mx-auto flex flex-col lg:flex-row lg:gap-12 xl:gap-16 py-24 px-8 [&_h4]:font-roboto [&_h4]:font-medium [&_h4]:text-xl">

            <div class="lg:flex-7 xl:flex-8" data-aos="fade-up">
                <h2
                    class="relative mb-6 z-10 w-fit font-roboto text-2xl font-semibold text-cst-green-800 after:absolute after:-inset-x-2 after:h-3 after:top-1/2 after:-translate-y-1/2 after:rounded-full after:transition after:bg-cst-yellow-400/40 after:isolate after:-z-10">
                    Package Details
                </h2>
                @php
                    $content = str_replace("\r\n", "\n", $package->description);
                @endphp
               <div class="prose prose-neutral max-w-none font-inter leading-normal">
                    {!! str($package->description)->markdown(['breaks' => true])->sanitizeHtml() !!}
                </div>

                <h3 class="mb-2 font-semibold mt-6">Destinations</h3>
                <ol class="list-decimal pl-5 space-y-3 ">
                    @foreach ($package->destinations as $destination )
                        <li>{{ $destination->name }}</li>
                    @endforeach
                </ol>

                {{-- Start time and Price --}}
                <div class="mt-8 mb-8 flex w-full lg:w-fit flex-wrap gap-4">
                    <div class="bg-cst-green-400 flex flex-1 items-center gap-4 px-5 py-4 rounded-md w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-12 text-cst-yellow-400">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                clip-rule="evenodd" />
                        </svg>

                        <div class="font-inter">
                            <p class="italic text-gray-300">Start Time</p>
                            <h5 class="text-white text-2xl font-medium whitespace-nowrap">{{ date('h:i', strtotime($package->start_time)) }} <b>WITA</b></h5>
                        </div>
                    </div>

                    <div class="bg-cst-green-400 flex flex-1 items-center gap-4 px-5 py-4 rounded-md w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-12 text-cst-yellow-400">
                            <path
                                d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"
                                clip-rule="evenodd" />
                        </svg>

                        <div class="font-inter">
                            <p class="italic text-gray-300">Price</p>
                            <h5 class="text-white text-2xl font-normal whitespace-nowrap"><b>USD</b> ${{ $package->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Book Form --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('services.package-booking', $package->id) }}" method="post" class="lg:flex-5 xl:flex-4 bg-white p-6 font-inter rounded-md h-fit top-20" data-aos="fade-up">
                @csrf
                <h4 class="font-roboto font-bold! text-3xl! text-center mb-5">Booking Form</h4>

                <div class="flex flex-col gap-3 [&>div]:p-3 mb-8">
                    <x-input id="customer_name" name="customer_name" label="Full name" placeholder="Jacob Holden" type="text" required />
                    <x-input id="customer_phone" name="customer_phone" label="Phone" placeholder="+00 112 3456 7890" type="text" required />
                    <x-input id="customer_email" name="customer_email" label="Email" placeholder="test@example.com" type="email" required />
                    
                    
                    <span class="grid grid-cols-2 w-full gap-3">
                       <div class="flex flex-1 flex-col p-4 bg-gray-100 font-inter shadow-sm rounded-md">
                            {{-- Label --}}
                            <label for="booking_date" class="text-sm text-gray-600 mb-2">
                                Booking Date
                                <span class="text-red-400">*</span>
                            </label>

                            <div class="flex gap-3 items-center w-full">
                                <input 
                                    type="text" 
                                    id="booking_date" 
                                    name="booking_date" 
                                    placeholder="Select a date" 
                                    required
                                    class="bg-transparent w-full 2xl:text-lg text-black font-medium
                                        placeholder:text-gray-400/60 placeholder:italic focus:border-cst-yellow-400 transition-colors duration-200 focus:outline-none  rounded "
                                >
                            </div>
                        </div>
                        <x-input id="people_amount" name="people_amount" label="People amount" placeholder="2" type="number" required />
                    </span>
                        <x-input id="address" name="address" label="Address" placeholder="Jln. xxx" type="text" required />
                </div>

               <x-whatsapp-button type="submit" class="w-full text-lg py-2"> Confirm via WhatsApp </x-whatsapp-button> </form>
            </form>

        </div>
    </section>

    {{-- ? OTHER PACKAGE SECTION --}}
    <section class="bg-gray-200/80">
        <div class="container mx-auto pb-12 lg:pb-0 px-8">

            <div class="relative bg-gray-50 shadow-lg p-8 rounded-lg z-20">

                <div
                    class="flex flex-col md:flex-row gap-2 justify-center md:justify-between items-center text-center mb-8">
                    <p class="font-roboto font-semibold text-2xl">
                        Maybe interested in <i class="font-playfair">other packages?</i>
                    </p>
                    <a href="{{ route('services.available-packages') }}"
                        class="flex justify-center gap-2 italic font-medium hover:underline">
                        See all packages <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>

                <div class="grid gap-4 grid-cols-1 lg:grid-cols-3">

                   @foreach ($randomPackages as $index => $item)
                         <div 
                            data-aos="fade-up"
                            data-aos-delay="{{ $index * 100 }}" 
                        >
                            <x-package-card 
                                :id="$item->id"
                                :title="$item->name"
                                :img="$item->getFirstMediaUrl('cover', 'optimized')"
                                :price="$item->price"
                                :description="$item->description"
                                :packageType="$item->tour->name ?? 'Tour'"
                            />
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </section>

    {{-- ? HOOK SECTION --}}
    <section
        class="relative lg:-mt-[15rem] lg:pt-[15rem] overflow-hidden after:absolute after:inset-0 after:bg-black/70 after:-z-10 z-10">
        <div class="isolate absolute inset-0  bg-cover bg-center -z-20"
            style="background-image: url('https://images.unsplash.com/photo-1558005530-a7958896ec60?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        </div>

        <div class="container mx-auto flex flex-col items-center justify-center py-20 px-8 min-h-[60vh]">

            <h2
                class="font-roboto [&>i]:font-playfair font-semibold text-center text-4xl md:text-5xl text-white mb-12 max-w-xl md:max-w-2xl leading-tight">
                <i class="text-cst-yellow-400">Unforgettable memories</i> begin with the beauty of <i>Bali!</i>
            </h2>

            <div class="flex gap-3">
                <x-wave-button href="{{ route('services.available-packages') }}"
                    firstTextClasses="text-white font-inter font-medium"
                    secondTextClasses="text-cst-yellow-400 font-playfair font-bold italic"
                    class="text-lg w-fit py-1.5 px-5 rounded-sm bg-cst-green-400">
                    Find Tours
                </x-wave-button>

                <x-wave-button href="{{ route('services.shuttle') }}" firstTextClasses="text-white font-inter font-medium"
                    secondTextClasses="text-cst-yellow-400 font-playfair font-bold italic"
                    class="text-lg w-fit py-1.5 px-5 rounded-sm bg-cst-green-400">
                    Shuttle Service
                </x-wave-button>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fullyBookedDates = @json($fullyBookedDates);

            flatpickr("#booking_date", {
                dateFormat: "Y-m-d",
                minDate: "today",
                disable: fullyBookedDates,
            });

            console.log(fullyBookedDates)
        });
    </script>

@endsection
