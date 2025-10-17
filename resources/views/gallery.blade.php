@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Travel Gallery - Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Browse our Bali travel gallery and discover stunning destinations, happy guests, and
    unforgettable moments captured by Explore Vista Bali.')
@section('meta_keywords',
    'Bali gallery, Bali travel photos, Bali destinations, Bali tours, Explore Vista Bali, Bali
    vacation, Bali tourism')
@section('og_title', 'Bali Travel Gallery | Explore Vista Bali')
@section('og_description',
    'See the beauty of Bali through our lens — explore photos of tours, destinations, and
    experiences with Explore Vista Bali.')
    {{-- @section('og_image', asset('images/gallery-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}


@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div
            class="container mx-auto flex flex-col md:flex-row justify-end md:justify-between items-center md:items-end px-8 pt-16 pb-10 min-h-64 w-full text-white">

            <div class="flex flex-col items-center md:items-start text-center md:text-start mb-6 md:mb-0">
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
                            <a href="{{ route('gallery') }}" class="block transition-colors hover:text-cst-yellow-600">
                                Gallery
                            </a>
                        </li>
                    </ol>
                </nav>

                <h1 class="font-playfair font-semibold italic text-3xl sm:text-4xl">Our captured memories</h1>
            </div>

            <div class="">
                <p class="font-inter text-md text-center md:text-end max-w-md">
                    Explore our gallery and discover unforgettable moments from Bali tours, activities, and journeys
                </p>
            </div>

        </div>
    </section>

    {{-- ? GALLERY SECTION --}}
    <section class="container mx-auto flex flex-col items-center py-12 px-8 border-b-2 border-b-gray-300">

        <h2 class="font-roboto text-4xl text-center font-bold whitespace-nowrap mb-12">
            Our <i class="font-playfair">Gallery</i>
        </h2>

        <div
            class="grid grid-cols-1 grid-rows-6 sm:grid-cols-2 sm:grid-rows-3 lg:grid-cols-4 gap-4 w-full min-h-[80rem] lg:min-h-[40rem] [&>div]:bg-gray-300">
            <div class="lg:row-span-2">
                <x-gallery-item
                    img="{{ asset('img/galleries/Nusa Penida Island.webp') }}"
                    location="Nusa Penida Island" />
            </div>
            <div class="">
                <x-gallery-item
                    img="{{ asset('img/galleries/Mount Batur Sunrise Trekking.webp') }}"
                    location="Mount Batur Sunrise Trekking" />
            </div>
            <div class="">
                <x-gallery-item
                    img="{{ asset('img/galleries/Tegallalang Rice Terrace.webp') }}"
                    location="Tegallalang Rice Terrace" />
            </div>
            <div class="lg:row-span-2">
                <x-gallery-item
                    img="{{ asset('img/galleries/Uluwatu Temple.webp') }}"
                    location="Uluwatu Temple" />
            </div>
            <div class="">
                <x-gallery-item
                    img="{{ asset('img/galleries/Tanah Lot Temple.webp') }}"
                    location="Tanah Lot Temple" />
            </div>
            <div class="lg:row-span-2">
                <x-gallery-item
                    img="{{ asset('img/galleries/Sekumpul Waterfall.webp') }}"
                    location="Sekumpul Waterfall" />
            </div>
            <div class="hidden lg:inline-block col-span-2">
                <x-gallery-item
                    img="{{ asset('img/galleries/Sanur Beach Sea Walker.webp') }}"
                    location="Sanur Beach & Sea Walker" />
            </div>
            <div class="hidden lg:inline-block">
                <x-gallery-item
                    img="{{ asset('img/galleries/Ulun Danu Beratan Temple.webp') }}"
                    location="Ulun Danu Beratan Temple" />
            </div>
        </div>

        <div class="flex w-full py-20">
            <span class="h-px flex-1 bg-gray-600"></span>
        </div>

        <h2 class="font-roboto text-4xl text-center font-bold whitespace-nowrap mb-12">
            More <i class="font-playfair">Pictures</i>
        </h2>

        {{-- Load More Gallery --}}
        <div 
            x-data="{
                visible: 8,
                total: {{ $moreGalleries->count() }},
                loadMore() {
                    this.visible = Math.min(this.visible + 4, this.total);
                }
            }"
            class="w-full"
        >
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full min-h-[25rem] mb-12">
                @foreach ($moreGalleries as $index => $gallery)
                    <div x-show="{{ $index }} < visible" x-transition>
                        <x-gallery-item
                            img="{{ $gallery->getFirstMediaUrl('picture', 'optimized') }}"
                            location="{{ $gallery->name }}"
                        />
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center">
                <button 
                    x-show="visible < total"
                    @click="loadMore"
                    class="bg-gray-800 font-inter py-3 px-8 text-white cursor-pointer hover:scale-105 transition rounded-md"
                >
                    Load More
                </button>
            </div>
        </div>

    </section>

@endsection
