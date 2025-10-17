@extends('components.layouts.app', ['variant' => 'light'])
@section('title', $blog->title. ' - Explore Vista Bali')

{{-- SEO --}}
@section('title', $blog->title . ' - Explore Vista Bali')
@section('meta_description', Str::limit(strip_tags($blog->content), 150))
@section('meta_keywords', implode(', ', [
    $blog->title,
    'Bali travel blog',
    'Explore Vista Bali article',
    'Bali tourism tips',
    'Bali adventure',
    'Bali destinations',
    'Bali travel guide'
]))
@section('og_title', $blog->title . ' - Explore Vista Bali')
@section('og_description', Str::limit(strip_tags($blog->content), 150))
@section('og_image', $blog->getFirstMediaUrl('blogs') ?: asset('images/blog-og.jpg'))
@section('og_type', 'article')
{{-- SEO END --}}

@section('content')
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div
            class="container mx-auto flex flex-col justify-end items-center px-8 pt-16 pb-10 min-h-64 w-full text-white">
            <div class="flex flex-col items-center text-center md:text-start mb-6 md:mb-0">
                <nav aria-label="Breadcrumb" class="text-cst-yellow-400 mb-3">
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
                            <a href="{{ route('blogs') }}" class="block transition-colors hover:text-cst-yellow-600">
                                Blog
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
                                {{ $blog->title }}
                            </p>
                        </li>
                    </ol>
                </nav>
                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl w-[80%] text-center">
                    {{ $blog->title }}
                </h1>
            </div>
        </div>
    </section>

    <section class="bg-cst-green-800">
        <div class="container mx-auto px-8 py-12 2xl:scroll-py-16">
            <div>
                <img src="{{ $blog->getFirstMediaUrl('picture', 'optimize') }}" alt="" class="h-[35rem] 2xl:h-[45rem] w-full object-cover">
                <div class="text-white flex gap-4 items-center font-medium text-lg py-6">
                    <h3>{{ $blog->author }}</h3>
                    <div class="size-2 bg-white rounded-full"></div>
                    <p>{{ $blog->created_at->translatedFormat('d F Y') }}</p>
                </div>
                <div class="prose blog prose-neutral max-w-none font-inter leading-normal pb-12">
                    {!! str($blog->content)->markdown(['breaks' => true])->sanitizeHtml() !!}
                </div>
                <div class="flex justify-end items-center gap-6 border-t pt-12 border-t-white">
                    <p class="text-xl font-semibold text-white">Follow our socials</p>
                    <x-social-media/>
                </div>
            </div>
        </div>
    </section>
@endsection