@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Package Detail - Explore Vista Bali')
@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container mx-auto flex justify-center items-end px-8 pt-16 pb-10 min-h-60 w-full text-white">

            <div class="flex flex-col items-center text-center">
                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl mb-2">
                    Ubud Tour
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
                                This Package
                            </p>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </section>

    {{-- ? PHOTOS SECTION --}}
    <section x-data="{
        currentIndex: 0,
        items: [
            { id: 1, image: 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=400', title: 'Slide 1' },
            { id: 2, image: 'https://images.unsplash.com/photo-1488590088505-98d2b5aba04b?w=400', title: 'Slide 2' },
            { id: 3, image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400', title: 'Slide 3' },
            { id: 4, image: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400', title: 'Slide 4' },
            { id: 5, image: 'https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?w=400', title: 'Slide 5' },
            { id: 6, image: 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400', title: 'Slide 6' }
        ],
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
            const gapPercentage = this.itemsPerPage === 1 ? 0 : 0;
            return -(this.currentIndex * (100 + gapPercentage));
        }
    }" class="container mx-auto px-8 py-16">

        <!-- Carousel Container -->
        <div class="relative">

            <!-- Items Grid Container with overflow hidden -->
            <div class="relative mb-12 overflow-hidden">

                <!-- Sliding Track -->
                <div class="flex transition-transform duration-500 ease-out"
                    :style="`transform: translateX(${translateX}%)`">

                    <!-- Each Page Group -->
                    <template x-for="pageIndex in totalPages" :key="'page-' + pageIndex">
                        <div class="flex-shrink-0 w-full grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4"
                            :class="itemsPerPage === 1 ? 'gap-0 px-6' : 'gap-6'">
                            <template
                                x-for="(item, idx) in items.slice((pageIndex - 1) * itemsPerPage, pageIndex * itemsPerPage)"
                                :key="item.id">
                                <div
                                    class="w-full aspect-[3/4] bg-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                                    <img :src="item.image" :alt="item.title"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </template>
                        </div>
                    </template>

                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center justify-center gap-6">
                <!-- Previous Button -->
                <button @click="prev" :disabled="!canGoPrev"
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
                        <button @click="currentIndex = i - 1" class="transition-all duration-300 rounded-full"
                            :class="currentIndex === i - 1 ? 'bg-emerald-700 w-8 h-2' : 'bg-gray-300 hover:bg-gray-400 w-2 h-2'">
                        </button>
                    </template>
                </div>

                <!-- Next Button -->
                <button @click="next" :disabled="!canGoNext"
                    :class="canGoNext ? 'bg-emerald-700 hover:bg-emerald-800 cursor-pointer' : 'bg-gray-300 cursor-not-allowed'"
                    class="w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-all duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

@endsection
