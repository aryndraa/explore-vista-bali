@extends('components.layouts.app', ['variant' => 'light'])

@section('title', 'Tour Package - Explore Vista Bali')
@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container mx-auto flex justify-center items-end px-8 pt-16 pb-10 min-h-60 w-full text-white">

            <div class="flex flex-col items-center text-center">
                <nav aria-label="Breadcrumb" class="text-cst-yellow-400 mb-2">
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
                            <a href="{{ route('services.tour-package') }}" class="block transition-colors">
                                Tour Packages
                            </a>
                        </li>
                    </ol>
                </nav>

                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl">Available tours and
                    activities</h1>
            </div>

        </div>
    </section>

    {{-- ? TOUR LISTS SECTION --}}
    <livewire:tour-package-action />

@endsection
