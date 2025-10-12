<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Explore Vista Bali')</title>

    {{-- ? SEO meta tags --}}
    <meta name="description" content="@yield('meta_description', 'Explore Vista Bali — your trusted travel partner for Bali tours, activities, and shuttle services.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Bali tours, Bali activities, Bali shuttle, Bali car rental, Bali travel packages')">

    {{-- ? Open Graph (for social media) --}}
    <meta property="og:title" content="@yield('og_title', 'Explore Vista Bali')">
    <meta property="og:description" content="@yield('og_description', 'Book Bali tours, adventures, and transfers easily with Explore Vista Bali.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">

    {{-- ? Favicon --}}
    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}

    {{-- ? Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 text-gray-800 overflow-x-hidden font-inter">

    @include('components.partials.header', ['variant' => $variant ?? 'light'])

    <main class="min-h-screen @yield('main-class')">
        @yield('content')
    </main>

    @include('components.partials.footer')

    @livewireScripts
</body>

</html>
