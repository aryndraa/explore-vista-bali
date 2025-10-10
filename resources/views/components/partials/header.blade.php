@php
    $linksClasses = 'relative';

    $activeClasses =
        'after:absolute after:-inset-x-2 after:h-3 after:top-1/2 after:-translate-y-1/2 after:rounded-full after:transition ' .
        ($variant == 'light' ? 'after:bg-cst-green-400' : 'after:bg-cst-yellow-400') .
        ' after:-z-10';

    $activeClassesMobile =
        'after:absolute after:-inset-x-2 after:h-3 after:top-1/2 after:-translate-y-1/2 after:rounded-full after:transition after:bg-cst-yellow-400 after:-z-10';

    $hoverClasses =
        "'hover:text-cst-yellow-400': !scrolled, 'hover:text-cst-green-400 after:bg-cst-yellow-400': scrolled";
@endphp

<header x-data="{ scrolled: false, mobileOpen: false, mobileAccordionOpen: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)" class="fixed inset-x-0 top-0 z-50 transition-colors duration-200"
    :class="scrolled ? 'bg-white shadow-lg text-black' :
        '{{ $variant === 'light' ? 'bg-transparent text-white' : 'bg-transparent text-black' }}'">

    <div class="mx-auto px-8 container">
        <div class="flex items-center justify-between h-16">

            {{-- ? Logo --}}
            <a href="{{ route('home') }}" class="text-2xl font-bold font-roboto text-inherit">
                LOGO
            </a>

            {{-- ? Desktop nav --}}
            <nav class="hidden lg:flex items-center gap-6 h-full font-inter">
                <a href="{{ route('home') }}"
                    class="text-inherit {{ $linksClasses }} {{ request()->routeIs('home') ? $activeClasses : '' }}"
                    :class="{ {{ $hoverClasses }} }">Home</a>
                <a href="{{ route('about') }}"
                    class="text-inherit {{ $linksClasses }} {{ request()->routeIs('about') ? $activeClasses : '' }}"
                    :class="{ {{ $hoverClasses }} }">About</a>

                {{-- Services dropdown --}}
                <div class="relative h-full" x-data="{ open: false }" @mouseenter="open = true"
                    @mouseleave="open = false">
                    <span
                        class="flex cursor-default group items-center h-full text-inherit {{ $linksClasses }} {{ request()->routeIs('services.*') ? $activeClasses : '' }}"
                        :class="{ {{ $hoverClasses }} }">

                        Services
                        <svg class="size-6 ml-1"
                            :class="{
                                '{{ $variant == 'light' ? 'text-gray-300 group-hover:text-cst-yellow-400' : 'text-gray-500' }}':
                                    !scrolled,
                                'text-gray-500 group-hover:text-cst-green-400': scrolled,
                            }"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.72-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>

                    <ul x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2" x-cloak
                        class="absolute overflow-hidden -left-2 w-max bg-white text-gray-700 shadow-lg ring-1 ring-black/5">
                        <li>
                            <a href="{{ route('services.available-packages') }}"
                                class="flex gap-3 px-4 py-3 hover:bg-cst-green-200/40 transition">
                                <div class="bg-gray-100 p-2 rounded-md flex-none">
                                    <svg class="fill-cst-green-400" width="30" height="30" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 21V19H21V21H3ZM4.75 16L1 9.74998L3.4 9.09998L6.2 11.45L9.7 10.525L4.525 3.62498L7.425 2.84998L14.9 9.12498L19.15 7.97498C19.6833 7.82498 20.1875 7.88748 20.6625 8.16248C21.1375 8.43748 21.45 8.84164 21.6 9.37498C21.75 9.90831 21.6875 10.4125 21.4125 10.8875C21.1375 11.3625 20.7333 11.675 20.2 11.825L4.75 16Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-md">Tours & Activities</p>
                                    <p class="text-sm text-gray-500">Curated day trips and activities</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.shuttle') }}"
                                class="flex gap-3 px-4 py-3 hover:bg-cst-green-200/40 transition">
                                <div class="bg-gray-100 p-2 rounded-md flex-none">
                                    <svg class="fill-cst-green-400" width="30" height="30" viewBox="0 0 15 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20V14H3V20H0ZM5 20V8.1C4.16667 8.38333 3.625 8.90417 3.375 9.6625C3.125 10.4208 3 11.2 3 12H1C1 9.86667 1.625 8.16667 2.875 6.9C4.125 5.63333 5.83333 5 8 5C9.66667 5 10.9167 4.5875 11.75 3.7625C12.5833 2.9375 13 1.68333 13 0H15C15 1.46667 14.6875 2.77917 14.0625 3.9375C13.4375 5.09583 12.4167 5.91667 11 6.4V20H9V14H7V20H5ZM8 4C7.45 4 6.97917 3.80417 6.5875 3.4125C6.19583 3.02083 6 2.55 6 2C6 1.45 6.19583 0.979167 6.5875 0.5875C6.97917 0.195833 7.45 0 8 0C8.55 0 9.02083 0.195833 9.4125 0.5875C9.80417 0.979167 10 1.45 10 2C10 2.55 9.80417 3.02083 9.4125 3.4125C9.02083 3.80417 8.55 4 8 4Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-md">Shuttle</p>
                                    <p class="text-sm text-gray-500">Airport, harbor & point-to-point</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.vehicle-rent') }}"
                                class="flex gap-3 px-4 py-3 hover:bg-cst-green-200/40 transition">
                                <div class="bg-gray-100 p-2 rounded-md flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960"
                                        width="30" class="fill-cst-green-400">
                                        <path
                                            d="m693-560-11-47q-11-4-21.5-10T641-631l-46 15-27-46 35-34q-2-12-2-24t2-24l-35-32 27-46 45 13q9-8 19.5-14t22.5-10l11-47h53l12 46q12 5 22.5 11t19.5 14l45-13 27 46-34 32q2 12 2.5 24.5T838-695l34 32-26 46-46-14q-9 8-20 14t-22 10l-12 47h-53Zm27-100q25 0 42.5-17.5T780-720q0-25-17.5-42.5T720-780q-25 0-42.5 17.5T660-720q0 25 17.5 42.5T720-660ZM300-320q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm60-160q32 0 62.5-8t57.5-24v352q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l83-240q6-18 21.5-29t35.5-11h224q-2 10-3 19.5t-1 20.5q0 11 1 20.5t3 19.5H274l-42 120h310q35 38 81 59t97 21Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-md">Vehicle Rental</p>
                                    <p class="text-sm text-gray-500">Private cars & bike</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('gallery') }}"
                    class="text-inherit {{ $linksClasses }} {{ request()->routeIs('gallery') ? $activeClasses : '' }}"
                    :class="{ {{ $hoverClasses }} }">Gallery</a>
                <a href="#"
                    class="text-inherit {{ $linksClasses }} {{ request()->routeIs('blog') ? $activeClasses : '' }}"
                    :class="{ {{ $hoverClasses }} }">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-inherit {{ $linksClasses }} {{ request()->routeIs('contact') ? $activeClasses : '' }}"
                    :class="{ {{ $hoverClasses }} }">Contact</a>
            </nav>

            {{-- Right actions --}}
            <div class="flex items-center">

                <a href="#" aria-label="Know more about us by calling this number"
                    class="group relative hidden p-2 sm:inline-block hover:scale-110 transition"
                    :class="{
                        'text-cst-green-400': scrolled,
                        '{{ $variant == 'dark' ? 'text-cst-green-400' : 'text-cst-green-200' }}': !scrolled
                    }">
                    <svg class="size-5" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 3.14286C0 2.30932 0.331122 1.50992 0.920522 0.920522C1.50992 0.331122 2.30932 0 3.14286 0H4.58019C5.48114 0 6.26686 0.613905 6.48581 1.48762L7.64343 6.12124C7.73724 6.49628 7.71829 6.89067 7.58896 7.255C7.45963 7.61932 7.22567 7.93738 6.91638 8.16933L5.56181 9.18552C5.42038 9.29133 5.39 9.44638 5.42981 9.55429C6.02106 11.1622 6.95472 12.6225 8.16613 13.8339C9.37755 15.0453 10.8378 15.9789 12.4457 16.5702C12.5536 16.61 12.7076 16.5796 12.8145 16.4382L13.8307 15.0836C14.0626 14.7743 14.3807 14.5404 14.745 14.411C15.1093 14.2817 15.5037 14.2628 15.8788 14.3566L20.5124 15.5142C21.3861 15.7331 22 16.5189 22 17.4209V18.8571C22 19.6907 21.6689 20.4901 21.0795 21.0795C20.4901 21.6689 19.6907 22 18.8571 22H16.5C7.38781 22 0 14.6122 0 5.5V3.14286Z"
                            fill="currentColor" />
                    </svg>

                    <!-- Tooltip -->
                    <span
                        class="absolute left-1/2 -translate-x-1/2 -bottom-8 bg-cst-green-400 text-white text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition whitespace-nowrap">
                        Call Us
                    </span>
                </a>

                <a href="{{ route('comment') }}" aria-label="Know more about us by calling this number"
                    class="group relative hidden p-2 sm:inline-block hover:scale-110 transition"
                    :class="{
                        'text-cst-green-400': scrolled,
                        '{{ $variant == 'dark' ? 'text-cst-green-400' : 'text-cst-green-200' }}': !scrolled
                    }">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 -960 960 960" fill="currentColor">
                        <path
                            d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720L720-240H160Z" />
                    </svg>

                    <!-- Tooltip -->
                    <span
                        class="absolute left-1/2 -translate-x-1/2 -bottom-8 bg-cst-green-400 text-white text-xs rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition whitespace-nowrap">
                        View Comments
                    </span>
                </a>


                <a href="#"
                    class="hidden sm:inline-flex ml-2 items-center gap-2 rounded-md font-bold font-inter bg-cst-yellow-400 px-3 py-2 text-black">
                    Book Tour
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke-width="3" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
                    </svg>
                </a>

                {{-- ? Mobile toggle --}}
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden"
                    :class="{
                        'text-white': !scrolled,
                        'text-black': scrolled
                    }">

                    {{-- Hamburger --}}
                    <svg x-show="!mobileOpen" class="size-6" viewBox="0 0 29 26" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 2.64284C0 2.09346 0.218239 1.56659 0.606707 1.17812C0.995175 0.789651 1.52205 0.571411 2.07143 0.571411H26.9286C27.4779 0.571411 28.0048 0.789651 28.3933 1.17812C28.7818 1.56659 29 2.09346 29 2.64284C29 3.19222 28.7818 3.71909 28.3933 4.10756C28.0048 4.49603 27.4779 4.71427 26.9286 4.71427H2.07143C1.52205 4.71427 0.995175 4.49603 0.606707 4.10756C0.218239 3.71909 0 3.19222 0 2.64284ZM0 13C0 12.4506 0.218239 11.9237 0.606707 11.5353C0.995175 11.1468 1.52205 10.9286 2.07143 10.9286H26.9286C27.4779 10.9286 28.0048 11.1468 28.3933 11.5353C28.7818 11.9237 29 12.4506 29 13C29 13.5494 28.7818 14.0762 28.3933 14.4647C28.0048 14.8532 27.4779 15.0714 26.9286 15.0714H2.07143C1.52205 15.0714 0.995175 14.8532 0.606707 14.4647C0.218239 14.0762 0 13.5494 0 13ZM12.4286 23.3571C12.4286 22.8077 12.6468 22.2809 13.0353 21.8924C13.4237 21.5039 13.9506 21.2857 14.5 21.2857H26.9286C27.4779 21.2857 28.0048 21.5039 28.3933 21.8924C28.7818 22.2809 29 22.8077 29 23.3571C29 23.9065 28.7818 24.4334 28.3933 24.8218C28.0048 25.2103 27.4779 25.4286 26.9286 25.4286H14.5C13.9506 25.4286 13.4237 25.2103 13.0353 24.8218C12.6468 24.4334 12.4286 23.9065 12.4286 23.3571Z"
                            fill="currentColor" />
                    </svg>

                    {{-- Close --}}
                    <svg x-show="mobileOpen, mobileAccordionOpen = false" x-cloak class="size-6" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    {{-- ? Mobile overlay --}}
    <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="container mx-auto fixed min-w-[17rem] left-1/2 -translate-x-1/2 top-16 bg-white backdrop-blur-sm border-t border-gray-700 lg:hidden max-h-[calc(100vh-4rem)] overflow-auto shadow-md">
        <ul class="p-4 px-8 text-black text-right">
            <li>
                <a href="{{ route('home') }}"
                    class="inline-block py-2 {{ $linksClasses }} {{ request()->routeIs('home') ? $activeClassesMobile : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="inline-block py-2 {{ $linksClasses }} {{ request()->routeIs('about') ? $activeClassesMobile : '' }}">About</a>
            </li>

            {{-- Services accordion (mobile) --}}
            <li class="ml-auto w-fit">
                <button aria-label="Services dropdown" @click="mobileAccordionOpen = !mobileAccordionOpen"
                    class="flex ml-auto w-fit justify-between items-center py-2">
                    <svg :class="{ 'rotate-180': mobileAccordionOpen }"
                        class="w-5 h-5 text-gray-500 transform transition-transform" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>

                    <span
                        class="ml-4 relative {{ request()->routeIs('services.*') ? $activeClassesMobile : '' }}">Services</span>

                </button>

                <ul x-show="mobileAccordionOpen" x-transition x-cloak class="mt-2 space-y-2 text-start">
                    <li>
                        <a href="{{ route('services.available-packages') }}"
                            class="flex gap-3 p-2 rounded-md hover:bg-cst-green-200/40 transition">
                            <div class="bg-gray-100 p-2 rounded-md">
                                <svg class="fill-cst-green-400" width="30" height="30" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 21V19H21V21H3ZM4.75 16L1 9.74998L3.4 9.09998L6.2 11.45L9.7 10.525L4.525 3.62498L7.425 2.84998L14.9 9.12498L19.15 7.97498C19.6833 7.82498 20.1875 7.88748 20.6625 8.16248C21.1375 8.43748 21.45 8.84164 21.6 9.37498C21.75 9.90831 21.6875 10.4125 21.4125 10.8875C21.1375 11.3625 20.7333 11.675 20.2 11.825L4.75 16Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-sm text-black">Tours & Activities</p>
                                <p class="text-xs text-gray-600">Curated experiences</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.shuttle') }}"
                            class="flex gap-3 p-2 rounded-md hover:bg-cst-green-200/40 transition">
                            <div class="bg-gray-100 p-2 rounded-md">
                                <svg class="fill-cst-green-400" width="30" height="30" viewBox="0 0 15 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 20V14H3V20H0ZM5 20V8.1C4.16667 8.38333 3.625 8.90417 3.375 9.6625C3.125 10.4208 3 11.2 3 12H1C1 9.86667 1.625 8.16667 2.875 6.9C4.125 5.63333 5.83333 5 8 5C9.66667 5 10.9167 4.5875 11.75 3.7625C12.5833 2.9375 13 1.68333 13 0H15C15 1.46667 14.6875 2.77917 14.0625 3.9375C13.4375 5.09583 12.4167 5.91667 11 6.4V20H9V14H7V20H5ZM8 4C7.45 4 6.97917 3.80417 6.5875 3.4125C6.19583 3.02083 6 2.55 6 2C6 1.45 6.19583 0.979167 6.5875 0.5875C6.97917 0.195833 7.45 0 8 0C8.55 0 9.02083 0.195833 9.4125 0.5875C9.80417 0.979167 10 1.45 10 2C10 2.55 9.80417 3.02083 9.4125 3.4125C9.02083 3.80417 8.55 4 8 4Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-sm text-black">Shuttle</p>
                                <p class="text-xs text-gray-600">Airport & point-to-point</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.vehicle-rent') }}"
                            class="flex gap-3 p-2 rounded-md hover:bg-cst-green-200/40 transition">
                            <div class="bg-gray-100 p-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960"
                                    width="30" class="fill-cst-green-400">
                                    <path
                                        d="m693-560-11-47q-11-4-21.5-10T641-631l-46 15-27-46 35-34q-2-12-2-24t2-24l-35-32 27-46 45 13q9-8 19.5-14t22.5-10l11-47h53l12 46q12 5 22.5 11t19.5 14l45-13 27 46-34 32q2 12 2.5 24.5T838-695l34 32-26 46-46-14q-9 8-20 14t-22 10l-12 47h-53Zm27-100q25 0 42.5-17.5T780-720q0-25-17.5-42.5T720-780q-25 0-42.5 17.5T660-720q0 25 17.5 42.5T720-660ZM300-320q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm60-160q32 0 62.5-8t57.5-24v352q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l83-240q6-18 21.5-29t35.5-11h224q-2 10-3 19.5t-1 20.5q0 11 1 20.5t3 19.5H274l-42 120h310q35 38 81 59t97 21Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-sm text-black">Vehicle Rental</p>
                                <p class="text-xs text-gray-600">Private cars & vans</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('gallery') }}"
                    class="inline-block py-2 {{ $linksClasses }} {{ request()->routeIs('gallery') ? $activeClassesMobile : '' }}">Gallery</a>
            </li>
            <li>
                <a href="#"
                    class="inline-block py-2 {{ $linksClasses }} {{ request()->routeIs('blog') ? $activeClassesMobile : '' }}">Blog</a>
            </li>
            <li class="mb-5">
                <a href="{{ route('contact') }}"
                    class="inline-block py-2 {{ $linksClasses }} {{ request()->routeIs('contact') ? $activeClassesMobile : '' }}">Contact</a>
            </li>

            {{-- Mobile actions --}}
            <li class="flex sm:hidden items-center justify-end h-fit gap-4">
                <a href="#" class="text-cst-green-400">
                    <svg class="size-5" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 3.14286C0 2.30932 0.331122 1.50992 0.920522 0.920522C1.50992 0.331122 2.30932 0 3.14286 0H4.58019C5.48114 0 6.26686 0.613905 6.48581 1.48762L7.64343 6.12124C7.73724 6.49628 7.71829 6.89067 7.58896 7.255C7.45963 7.61932 7.22567 7.93738 6.91638 8.16933L5.56181 9.18552C5.42038 9.29133 5.39 9.44638 5.42981 9.55429C6.02106 11.1622 6.95472 12.6225 8.16613 13.8339C9.37755 15.0453 10.8378 15.9789 12.4457 16.5702C12.5536 16.61 12.7076 16.5796 12.8145 16.4382L13.8307 15.0836C14.0626 14.7743 14.3807 14.5404 14.745 14.411C15.1093 14.2817 15.5037 14.2628 15.8788 14.3566L20.5124 15.5142C21.3861 15.7331 22 16.5189 22 17.4209V18.8571C22 19.6907 21.6689 20.4901 21.0795 21.0795C20.4901 21.6689 19.6907 22 18.8571 22H16.5C7.38781 22 0 14.6122 0 5.5V3.14286Z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="#"
                    class="flex items-center gap-2 rounded-md font-bold font-inter bg-cst-yellow-400 px-3 py-2 text-black">
                    Book Tour
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke-width="3" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </li>
        </ul>

    </div>

</header>
