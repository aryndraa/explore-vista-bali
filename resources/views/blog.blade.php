@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'Blogs - Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Discover the latest travel insights, hidden gems, and Bali adventure stories on Explore Vista Bali Blog. Get inspired for your next Bali journey!')
@section('meta_keywords',
    'Bali travel blog, Explore Vista Bali articles, Bali tourism tips, Bali destinations, Bali culture, Bali adventure, Bali travel guide')
@section('og_title', 'Explore Vista Bali Blog - Travel Tips & Stories')
@section('og_description',
    'Explore inspiring travel stories, guides, and tips about Bali with Explore Vista Bali Blog. Your journey to paradise starts here!')
{{-- @section('og_image', asset('images/blog-og.jpg')) --}}
@section('og_type', 'website')
{{-- SEO END --}}

@section('content')
    {{-- HERO --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://images.unsplash.com/photo-1557093793-e196ae071479?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div
            class="container mx-auto flex flex-col justify-end items-center px-8 pt-16 pb-10 min-h-64 w-full text-white">
            <div class="flex flex-col items-center text-center md:text-start mb-6 md:mb-0">
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
                            <a href="{{ route('blogs') }}" class="block transition-colors hover:text-cst-yellow-600">
                                Blog
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="font-roboto font-semibold text-3xl sm:text-4xl">
                    <i class="font-playfair">More about Bali</i> on our Articles
                </h1>
            </div>
        </div>
    </section>

    {{-- BLOG SECTION --}}
    <section class="container mx-auto px-8">
        {{-- Latest Articles --}}
        <div class="py-16">
            <h2 class="text-4xl font-semibold mb-8">Latest <i class="font-playfair">Articles</i></h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-6">
                @foreach ($latestBlogs as $index => $blog)
                    <div 
                        data-aos="fade-up"
                        data-aos-delay="{{ $index * 100 }}"
                    >
                        <x-blog-card 
                            type="new"
                            title="{{ $blog->title }}"
                            content="{{ Str::limit(strip_tags($blog->content), 120) }}"
                            img="{{ $blog->getFirstMediaUrl('picture', 'optimize') }}"
                            date="{{ $blog->created_at->format('d M Y') }}"
                            href="{{ route('blog-detail', $blog->id) }}"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex w-full pb-16">
            <span class="h-px flex-1 bg-gray-600"></span>
        </div>

        {{-- More Articles --}}
        <div class="pb-16" 
             x-data="{
                visible: 6,
                total: {{ $blogs->count() }},
                loadMore() {
                    this.visible = Math.min(this.visible + 4, this.total);
                }
             }">
            <h2 class="text-4xl font-semibold mb-8">More <i class="font-playfair">Articles</i></h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 pb-10">
                @php $columns = 3; @endphp

                @foreach ($blogs as $index => $blog)
                    @php $delay = ($index % $columns) * 100; @endphp

                    <div 
                        x-show="{{ $index }} < visible"
                        x-cloak
                        data-aos="fade-up"
                        data-aos-delay="{{ $delay }}"
                        data-aos-duration="600"
                    >
                        <x-blog-card 
                            type="default"
                            title="{{ $blog->title }}"
                            content="{{ Str::limit(strip_tags($blog->content), 100) }}"
                            img="{{ $blog->getFirstMediaUrl('picture', 'optimize') }}"
                            date="{{ $blog->created_at->format('d M Y') }}"
                            href="{{ route('blog-detail', $blog->id) }}"
                        />
                    </div>
                @endforeach
            </div>

            {{-- Load More Button --}}
            <div class="flex justify-center">
                <button 
                    x-show="total > 8 && visible < total"
                    @click="loadMore"
                    class="bg-gray-800 font-inter py-3 px-8 text-white cursor-pointer hover:scale-105 transition rounded-md"
                >
                    Load More
                </button>
            </div>
        </div>
    </section>
@endsection
