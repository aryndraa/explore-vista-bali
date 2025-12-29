<footer class="bg-cst-green-800">
    <div class="py-10 px-5 lg:grid lg:grid-cols-5 font-inter container mx-auto">

        {{-- <div class="relative block md:px-6 mb-6 lg:mb-0 lg:col-span-2 lg:h-full">
            <iframe title="Google Maps location embedding"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0855362930492!2d115.23143447485441!3d-8.683415891364811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409b0e5e80db%3A0xad78f1ff66b638d2!2sSMK%20TI%20Global%20Denpasar!5e0!3m2!1sid!2sid!4v1758849596637!5m2!1sid!2sid"
                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> --}}

        <div class="sm:ml-5 sm:py-5 lg:col-span-full">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 mb-10">
                <div>
                    <p>
                        <span class="text-sm tracking-wide text-gray-300">
                            Call us
                        </span>

                        <a href="https://wa.me/{{ $number }}"
                            class="block text-lg font-medium text-gray-900 hover:opacity-75 sm:text-xl dark:text-white">
                            {{ $formattedNumber }}
                        </a>
                    </p>

                    <ul class="mt-8 space-y-1 text-sm text-gray-700 dark:text-gray-200 mb-8">
                        <li><b>Address :</b> {{ $address }}</li>
                    </ul>

                    <x-social-media/>
                </div>

                <div class="grid gap-4 grid-cols-2">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Services</p>

                        <ul class="mt-6 space-y-2 text-sm">
                            <li>
                                <a href="{{ route('services.shuttle') }}" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Shuttle
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('services.available-packages') }}" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Full-day tours
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('services.available-packages') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Half-day tours
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('services.available-packages') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Activities
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('services.vehicle-rent') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Vehicle Rental
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Company</p>

                        <ul class="mt-6 space-y-2 text-sm">
                            <li>
                                <a href="{{ route('about') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    About
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('gallery') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Gallery
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('blogs') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Blog
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}"  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100/40 md:pt-10">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <p class="mt-8 text-sm text-gray-300 sm:mt-0">
                        &copy; Copyright 2025 Explore Vista Bali . All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>

    </div>
</footer>
