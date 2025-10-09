@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'About - Explore Vista Bali')

{{-- SEO --}}
{{-- SEO END --}}

@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover pt-18"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div
            class="container mx-auto flex flex-col md:flex-row justify-end md:justify-between items-center md:items-end px-8 pt-16 pb-10 min-h-80 w-full text-white">

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
                            <a href="{{ route('comment') }}" class="block transition-colors hover:text-cst-yellow-600">
                                Comments
                            </a>
                        </li>
                    </ol>
                </nav>

                <h2 class="font-roboto font-semibold text-3xl sm:text-4xl">
                    Submitted comments
                </h2>
            </div>

            <div class="">
                <p class="font-inter text-md text-center md:text-end max-w-md">
                    Thank you for sharing your thoughts with us! Here you can view comments submitted by our
                    valued guests.
                </p>
            </div>

        </div>
    </section>

    {{-- ? COMMENTS SECTION --}}
    <section class="bg-gray-100">
        <div class="container mx-auto py-12 px-8">

            <h2 class="font-roboto font-semibold text-3xl mb-4">4 Comments</h2>

            {{-- comments wrapper --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

                @for ($i = 0; $i < 8; $i++)
                    <div
                        class="bg-white text-black p-4 font-inter rounded-sm w-full shadow-md hover:-translate-y-2 hover:shadow-lg hover:shadow-gray-400/40 transition">
                        <p class="text-lg mb-4">
                            “This service is great! I love it, I would recommend this to my relatives”
                        </p>
                        <div class="">
                            <h4 class="text-lg font-roboto leading-tight font-medium italic">
                                Jackson Harry</h4>
                            <a href="#" target="_blank"
                                class="text-sm text-gray-500 hover:text-cst-yellow-600">@loremipsum</a>
                        </div>
                    </div>
                @endfor

            </div>

            <button
                class="w-fit mx-auto block bg-gray-800 font-inter py-3 px-8 text-white cursor-pointer hover:scale-105 transition">
                Load More
            </button>

        </div>
    </section>

@endsection
