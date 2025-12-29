@extends('components.layouts.app', ['variant' => 'light'])
@section('title', 'About - Explore Vista Bali')

{{-- SEO --}}
@section('meta_description',
    'Learn more about Explore Vista Bali, a trusted travel company offering authentic Bali
    experiences through guided tours, private shuttles, and activities across the island.')
@section('meta_keywords',
    'about Explore Vista Bali, Bali travel company, Bali tour agency, Bali local guide, Bali
    tourism service')
@section('og_title', 'About Explore Vista Bali')
@section('og_description',
    'Get to know Explore Vista Bali — our story, vision, and mission to bring you the best Bali
    experiences through tours and transport services.')
@section('og_image', asset('images/about-og.jpg'))
@section('og_type', 'article')
{{-- SEO END --}}

@section('content')

    {{-- ? TITLE SECTION --}}
    <section
        class="relative after:absolute after:inset-0 after:bg-black/50 after:-z-10 isolate bg-center bg-no-repeat bg-cover"
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
                            <a href="{{ route('about') }}" class="block transition-colors hover:text-cst-yellow-600"> About
                            </a>
                        </li>
                    </ol>
                </nav>

                <h1 class="font-playfair font-semibold italic text-3xl sm:text-4xl">More about us</h1>
            </div>

            <div class="">
                <p class="font-inter text-sm text-center md:text-end max-w-sm "> At Explore Vista Bali, we create seamless
                    journeys and
                    memorable experiences across the island.
                </p>
            </div>

        </div>
    </section>

    {{-- ? VISION SECTION --}}
    <section class="container mx-auto flex flex-col items-center py-24 px-8 border-b-2 border-b-gray-300">

        <h2 class="font-roboto text-3xl 2xl:text-4xl  text-center font-bold whitespace-nowrap mb-4" data-aos="fade-up" >
            What is <i class="font-playfair">our vision?</i>
        </h2>

        <p class="font-inter text-sm lg:text-base text-center max-w-lg" data-aos="fade-up" >
            To be the trusted travel companion that connects visitors with the beauty, culture, and spirit of Bali through
            seamless journeys and unforgettable experiences.
        </p>

    </section>

    {{-- ? MISSION AND GOALS SECTION --}}
    <section class="container mx-auto py-24 px-8">

        {{-- ? Missions --}}
        <div class="flex flex-col md:flex-row md:gap-10 mb-12">
            <div class="py-0 md:py-10" data-aos="fade-up" >
                <h2 class="font-roboto text-4xl font-bold mb-8">
                    Our <br class="hidden md:inline-block" /> <i class="font-playfair">Missions</i>
                </h2>
                <svg class="hidden md:inline-block w-40 aspect-auto ml-30 text-gray-600 mb-3" viewBox="0 0 209 73"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.94359 0.265307C8.51845 21.7728 30.6701 46.2398 63.3317 59.4421C95.1986 72.3231 136.964 74.4184 182.687 52.4975L177.157 43.2819L208.123 41.2664L189.6 64.0148L184.237 55.0815C137.653 77.4968 94.9136 75.4433 62.2077 62.2233C28.9229 48.769 5.91601 23.6851 0.0405466 1.01826L2.94359 0.265307Z"
                        fill="currentColor" />
                </svg>
            </div>

            <div class="flex flex-col md:flex-row gap-4 [&>div]:flex-1">
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="200" >
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 49 61" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.9062 41.175H29.0938V33.55H36.75V24.4H29.0938V16.775H19.9062V24.4H12.25V33.55H19.9062V41.175ZM24.5 61C17.4052 59.2208 11.5482 55.1669 6.92891 48.8381C2.30964 42.5094 0 35.4817 0 27.755V9.15L24.5 0L49 9.15V27.755C49 35.4817 46.6904 42.5094 42.0711 48.8381C37.4518 55.1669 31.5948 59.2208 24.5 61ZM24.5 54.595C29.8083 52.9175 34.1979 49.5625 37.6688 44.53C41.1396 39.4975 42.875 33.9058 42.875 27.755V13.3438L24.5 6.48125L6.125 13.3438V27.755C6.125 33.9058 7.86042 39.4975 11.3313 44.53C14.8021 49.5625 19.1917 52.9175 24.5 54.595Z"
                            fill="currentColor" />
                    </svg>

                    <h4 class="font-inter font-semibold text-xl mb-3">Deliver Comfort and Safety</h4>
                    <p class="font-inter text-gray-600 text-md">Provide reliable shuttle and tour services with a focus on
                        comfort, punctuality, and safety.</p>
                </div>
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 53 49" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.8125 48.125V19.25C27.2 18.4625 26.4453 17.8281 25.5484 17.3469C24.6516 16.8656 23.6562 16.625 22.5625 16.625C21.4688 16.625 20.4734 16.8547 19.5766 17.3141C18.6797 17.7734 17.925 18.4187 17.3125 19.25H12.0625C12.0625 14.1312 13.8453 9.78906 17.4109 6.22344C20.9766 2.65781 25.3187 0.875 30.4375 0.875C35.5562 0.875 39.8984 2.65781 43.4641 6.22344C47.0297 9.78906 48.8125 14.1312 48.8125 19.25H43.5625C42.95 18.4187 42.1953 17.7734 41.2984 17.3141C40.4016 16.8547 39.4062 16.625 38.3125 16.625C37.2188 16.625 36.2234 16.8656 35.3266 17.3469C34.4297 17.8281 33.675 18.4625 33.0625 19.25V48.125H27.8125ZM29.9781 14H30.8969C31.9031 13.1687 33.0516 12.5234 34.3422 12.0641C35.6328 11.6047 36.9781 11.375 38.3781 11.375C38.8594 11.375 39.3297 11.4078 39.7891 11.4734C40.2484 11.5391 40.7188 11.6156 41.2 11.7031C40.0187 9.99687 38.4875 8.64062 36.6062 7.63437C34.725 6.62812 32.6687 6.125 30.4375 6.125C28.2062 6.125 26.15 6.62812 24.2687 7.63437C22.3875 8.64062 20.8562 9.99687 19.675 11.7031C20.1562 11.6156 20.6266 11.5391 21.0859 11.4734C21.5453 11.4078 22.0156 11.375 22.4969 11.375C23.8969 11.375 25.2422 11.6047 26.5328 12.0641C27.8234 12.5234 28.9719 13.1687 29.9781 14ZM37 48.125V32.375H52.75V48.125H47.5V37.625H42.25V48.125H37ZM5.5 48.125V40.1187C4.7125 39.9 4.05625 39.4844 3.53125 38.8719C3.00625 38.2594 2.7 37.5156 2.6125 36.6406L0.25 11.375H1.89062C2.89687 11.375 3.78281 11.725 4.54844 12.425C5.31406 13.125 5.74062 13.9781 5.82812 14.9844L7.40312 32.375H18.625C20.0687 32.375 21.3047 32.8891 22.3328 33.9172C23.3609 34.9453 23.875 36.1812 23.875 37.625V40.25H21.25V48.125H17.3125V40.25H9.4375V48.125H5.5Z"
                            fill="currentColor" />
                    </svg>

                    <h4 class="font-inter font-semibold text-xl mb-3">Showcase Authentic Bali</h4>
                    <p class="font-inter text-gray-600 text-md">Curate travel experiences that highlight the island’s
                        culture,
                        nature, and traditions.</p>
                </div>
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="600">
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.75 37.625H36.25V33.5H19.75V37.625ZM18.375 18.375C16.9083 18.375 15.5448 18.7875 14.2844 19.6125C13.024 20.4375 11.9812 21.4917 11.1562 22.775L14.5938 25.0438C15.0521 24.3563 15.6021 23.7719 16.2438 23.2906C16.8854 22.8094 17.5958 22.5688 18.375 22.5688C19.1542 22.5688 19.8646 22.8094 20.5063 23.2906C21.1479 23.7719 21.6979 24.3333 22.1562 24.975L25.5938 22.7063C24.7688 21.4688 23.726 20.4375 22.4656 19.6125C21.2052 18.7875 19.8417 18.375 18.375 18.375ZM37.625 18.375C36.1583 18.375 34.7948 18.7875 33.5344 19.6125C32.274 20.4375 31.2313 21.4917 30.4062 22.775L33.8438 25.0438C34.3021 24.4021 34.8521 23.8406 35.4938 23.3594C36.1354 22.8781 36.8458 22.6375 37.625 22.6375C38.4042 22.6375 39.126 22.8667 39.7906 23.325C40.4552 23.7833 40.9938 24.3563 41.4062 25.0438L44.8438 22.775C44.0187 21.4917 42.976 20.4375 41.7156 19.6125C40.4552 18.7875 39.0917 18.375 37.625 18.375ZM28 55.5C24.1958 55.5 20.6208 54.7781 17.275 53.3344C13.9292 51.8906 11.0188 49.9313 8.54375 47.4562C6.06875 44.9813 4.10938 42.0708 2.66563 38.725C1.22188 35.3792 0.5 31.8042 0.5 28C0.5 24.1958 1.22188 20.6208 2.66563 17.275C4.10938 13.9292 6.06875 11.0188 8.54375 8.54375C11.0188 6.06875 13.9292 4.10938 17.275 2.66563C20.6208 1.22188 24.1958 0.5 28 0.5C31.8042 0.5 35.3792 1.22188 38.725 2.66563C42.0708 4.10938 44.9813 6.06875 47.4562 8.54375C49.9313 11.0188 51.8906 13.9292 53.3344 17.275C54.7781 20.6208 55.5 24.1958 55.5 28C55.5 31.8042 54.7781 35.3792 53.3344 38.725C51.8906 42.0708 49.9313 44.9813 47.4562 47.4562C44.9813 49.9313 42.0708 51.8906 38.725 53.3344C35.3792 54.7781 31.8042 55.5 28 55.5ZM28 50C34.1417 50 39.3438 47.8688 43.6063 43.6063C47.8688 39.3438 50 34.1417 50 28C50 21.8583 47.8688 16.6562 43.6063 12.3938C39.3438 8.13125 34.1417 6 28 6C21.8583 6 16.6562 8.13125 12.3938 12.3938C8.13125 16.6562 6 21.8583 6 28C6 34.1417 8.13125 39.3438 12.3938 43.6063C16.6562 47.8688 21.8583 50 28 50Z"
                            fill="currentColor" />
                    </svg>

                    <h4 class="font-inter font-semibold text-xl mb-3">Deliver Comfort and Safety</h4>
                    <p class="font-inter text-gray-600 text-md">Provide reliable shuttle and tour services with a focus on
                        comfort, punctuality, and safety.</p>
                </div>
            </div>
        </div>

        {{-- ? Goals --}}
        <div class="flex flex-col md:flex-row-reverse md:gap-10">
            <div class="py-0 md:py-10" data-aos="fade-up" >
                <h2 class="font-roboto text-4xl font-bold mb-8 md:text-end">
                    Our <br class="hidden md:inline-block" /> <i class="font-playfair">Goals</i>
                </h2>
                <svg class="hidden md:inline-block scale-y-[-1] rotate-180 w-40 aspect-auto mr-20 text-gray-600"
                    viewBox="0 0 209 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.94359 0.265307C8.51845 21.7728 30.6701 46.2398 63.3317 59.4421C95.1986 72.3231 136.964 74.4184 182.687 52.4975L177.157 43.2819L208.123 41.2664L189.6 64.0148L184.237 55.0815C137.653 77.4968 94.9136 75.4433 62.2077 62.2233C28.9229 48.769 5.91601 23.6851 0.0405466 1.01826L2.94359 0.265307Z"
                        fill="currentColor" />
                </svg>
            </div>

            <div class="flex flex-col md:flex-row gap-4 [&>div]:flex-1">
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="600">
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 42 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.69761 58V55.1C5.12436 55.1 3.77756 54.5321 2.65721 53.3962C1.53686 52.2604 0.976685 50.895 0.976685 49.3V17.4C0.976685 15.805 1.53686 14.4396 2.65721 13.3038C3.77756 12.1679 5.12436 11.6 6.69761 11.6H12.4185V2.9C12.4185 2.07833 12.6927 1.38958 13.2409 0.83375C13.7892 0.277917 14.4685 0 15.279 0H26.7209C27.5313 0 28.2107 0.277917 28.759 0.83375C29.3072 1.38958 29.5813 2.07833 29.5813 2.9V11.6H35.3023C36.8755 11.6 38.2223 12.1679 39.3427 13.3038C40.463 14.4396 41.0232 15.805 41.0232 17.4V49.3C41.0232 50.895 40.463 52.2604 39.3427 53.3962C38.2223 54.5321 36.8755 55.1 35.3023 55.1V58H29.5813V55.1H12.4185V58H6.69761ZM18.1395 11.6H23.8604V5.8H18.1395V11.6ZM20.9999 29C23.5267 29 25.9938 28.6737 28.4014 28.0212C30.809 27.3687 33.1092 26.39 35.3023 25.085V17.4H6.69761V25.085C8.89064 26.39 11.1909 27.3687 13.5985 28.0212C16.006 28.6737 18.4732 29 20.9999 29ZM18.1395 37.7V34.655C16.1371 34.4133 14.1825 34.0508 12.2755 33.5675C10.3685 33.0842 8.50924 32.4317 6.69761 31.61V49.3H35.3023V31.61C33.4906 32.4317 31.6313 33.0842 29.7244 33.5675C27.8174 34.0508 25.8627 34.4133 23.8604 34.655V37.7H18.1395Z"
                            fill="currentColor" />
                    </svg>
                    <h4 class="font-inter font-semibold text-xl mb-3">Enhance Travel Convenience</h4>
                    <p class="font-inter text-gray-600 text-md">Make it easy for visitors to book, plan, and enjoy their
                        Bali trips.</p>
                </div>
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 45 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M41.1833 44.6251L25.5729 29.0146L29.0146 25.573L44.625 41.1834L41.1833 44.6251ZM7.62708 42.9042C5.16875 40.4459 3.34549 37.6803 2.15729 34.6073C0.969097 31.5344 0.375 28.4001 0.375 25.2042C0.375 22.0084 0.969097 18.8945 2.15729 15.8626C3.34549 12.8306 5.16875 10.0855 7.62708 7.62714C10.0854 5.16881 12.8408 3.3353 15.8932 2.12662C18.9457 0.917939 22.0698 0.313599 25.2656 0.313599C28.4615 0.313599 31.5856 0.917939 34.638 2.12662C37.6905 3.3353 40.4458 5.16881 42.9042 7.62714L7.62708 42.9042ZM8.11875 35.4063L11.4375 32.0876C10.7819 31.2271 10.1571 30.3462 9.56302 29.4448C8.96892 28.5435 8.42604 27.6421 7.93438 26.7407C7.44271 25.8393 7.0125 24.9379 6.64375 24.0365C6.275 23.1351 5.94722 22.2542 5.66042 21.3938C5.20972 23.8112 5.17899 26.2285 5.56823 28.6459C5.95747 31.0632 6.80764 33.3167 8.11875 35.4063ZM15.0021 28.6459L28.6458 14.8792C26.884 13.5271 25.112 12.4311 23.3297 11.5912C21.5474 10.7513 19.8778 10.1777 18.3208 9.87037C16.7639 9.56308 15.3606 9.51186 14.1109 9.71672C12.8613 9.92158 11.8882 10.3723 11.1917 11.0688C10.4951 11.8063 10.0444 12.7999 9.83958 14.0495C9.63472 15.2992 9.68594 16.7127 9.99323 18.2902C10.3005 19.8676 10.8741 21.5372 11.7141 23.299C12.554 25.0608 13.65 26.8431 15.0021 28.6459ZM32.0875 11.4376L35.5292 8.11881C33.3576 6.80769 31.0632 5.94728 28.6458 5.53756C26.2285 5.12783 23.8111 5.16881 21.3938 5.66047C22.2951 5.94728 23.1965 6.27506 24.0979 6.64381C24.9993 7.01256 25.9007 7.43252 26.8021 7.9037C27.7035 8.37488 28.5946 8.90752 29.4755 9.50162C30.3564 10.0957 31.2271 10.741 32.0875 11.4376Z"
                            fill="currentColor" />
                    </svg>
                    <h4 class="font-inter font-semibold text-xl mb-3">Promote Proper Tourism</h4>
                    <p class="font-inter text-gray-600 text-md">Support local communities and preserve the island’s natural
                        beauty through responsible practices.</p>
                </div>
                <div class="p-5 bg-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                    <svg class="h-12 aspect-auto text-cst-yellow-600 mb-3" viewBox="0 0 51 46" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.5001 45.6249L21.9355 42.4291C17.7973 38.7006 14.3761 35.4843 11.672 32.7802C8.96779 30.076 6.81675 27.6484 5.21883 25.4973C3.62091 23.3463 2.50442 21.3694 1.86935 19.5666C1.23428 17.7638 0.916748 15.9201 0.916748 14.0354C0.916748 10.184 2.20737 6.96765 4.78862 4.3864C7.36987 1.80515 10.5862 0.514526 14.4376 0.514526C16.5681 0.514526 18.5963 0.965221 20.522 1.86661C22.4477 2.768 24.107 4.03814 25.5001 5.67703C26.8931 4.03814 28.5525 2.768 30.4782 1.86661C32.4039 0.965221 34.432 0.514526 36.5626 0.514526C40.414 0.514526 43.6303 1.80515 46.2115 4.3864C48.7928 6.96765 50.0834 10.184 50.0834 14.0354C50.0834 15.9201 49.7659 17.7638 49.1308 19.5666C48.4957 21.3694 47.3792 23.3463 45.7813 25.4973C44.1834 27.6484 42.0324 30.076 39.3282 32.7802C36.624 35.4843 33.2029 38.7006 29.0647 42.4291L25.5001 45.6249ZM25.5001 38.9874C29.4334 35.4638 32.6702 32.4421 35.2105 29.9223C37.7508 27.4025 39.7584 25.2105 41.2334 23.3463C42.7084 21.4821 43.7327 19.8227 44.3063 18.3682C44.8799 16.9137 45.1667 15.4694 45.1667 14.0354C45.1667 11.577 44.3473 9.52842 42.7084 7.88953C41.0695 6.25064 39.0209 5.43119 36.5626 5.43119C34.6369 5.43119 32.8546 5.97408 31.2157 7.05984C29.5768 8.1456 28.4501 9.52842 27.8355 11.2083H23.1647C22.5501 9.52842 21.4233 8.1456 19.7845 7.05984C18.1456 5.97408 16.3633 5.43119 14.4376 5.43119C11.9792 5.43119 9.93064 6.25064 8.29175 7.88953C6.65286 9.52842 5.83342 11.577 5.83342 14.0354C5.83342 15.4694 6.12022 16.9137 6.69383 18.3682C7.26744 19.8227 8.29175 21.4821 9.76675 23.3463C11.2417 25.2105 13.2494 27.4025 15.7897 29.9223C18.3299 32.4421 21.5667 35.4638 25.5001 38.9874Z"
                            fill="currentColor" />
                    </svg>
                    <h4 class="font-inter font-semibold text-xl mb-3">Build Lasting Relationships</h4>
                    <p class="font-inter text-gray-600 text-md">Create trust and loyalty by exceeding expectations and
                        fostering repeat visits.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- ? SERVICES SECTION --}}
    <section class="bg-cst-green-800 overflow-x-hidden overflow-y-hidden">

        <div class="flex flex-col lg:flex-row sm:gap-12 relative container mx-auto text-white">
            <div class="relative min-h-[20rem] lg:min-h-[32rem] bg-cover bg-center
            w-screen ml-[calc(50%-50vw)]"
                style="background-image: url('https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?q=80&w=1920&auto=format&fit=crop');">
            </div>

            <div class="pt-12 pb-12 px-8 lg:px-0 w-full lg:pr-8">
                <div class="flex flex-col mb-12">
                    <p class="font-inter text-cst-green-200 text-xl" data-aos="fade-up" >Our services</p>
                    <h2 class="font-roboto text-4xl sm:text-5xl font-semibold whitespace-nowrap" data-aos="fade-up" >
                        Services <i class="font-playfair">we provide</i>
                    </h2>
                </div>
                <div
                    class="space-y-8 mb-8 h-fit [&>div]:flex [&>div]:gap-4 [&_div]:pb-4 [&>div:not(:last-child)]:border-b [&>div:not(:last-child)]:border-gray-500">
                    <div class="" data-aos="fade-up" >
                        <div class="!p-2 h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 16V17C3 17.2833 2.90417 17.5208 2.7125 17.7125C2.52083 17.9042 2.28333 18 2 18H1C0.716667 18 0.479167 17.9042 0.2875 17.7125C0.0958333 17.5208 0 17.2833 0 17V9L2.1 3C2.2 2.7 2.37917 2.45833 2.6375 2.275C2.89583 2.09167 3.18333 2 3.5 2H6V0H12V2H14.5C14.8167 2 15.1042 2.09167 15.3625 2.275C15.6208 2.45833 15.8 2.7 15.9 3L18 9V17C18 17.2833 17.9042 17.5208 17.7125 17.7125C17.5208 17.9042 17.2833 18 17 18H16C15.7167 18 15.4792 17.9042 15.2875 17.7125C15.0958 17.5208 15 17.2833 15 17V16H3ZM2.8 7H15.2L14.15 4H3.85L2.8 7ZM4.5 13C4.91667 13 5.27083 12.8542 5.5625 12.5625C5.85417 12.2708 6 11.9167 6 11.5C6 11.0833 5.85417 10.7292 5.5625 10.4375C5.27083 10.1458 4.91667 10 4.5 10C4.08333 10 3.72917 10.1458 3.4375 10.4375C3.14583 10.7292 3 11.0833 3 11.5C3 11.9167 3.14583 12.2708 3.4375 12.5625C3.72917 12.8542 4.08333 13 4.5 13ZM13.5 13C13.9167 13 14.2708 12.8542 14.5625 12.5625C14.8542 12.2708 15 11.9167 15 11.5C15 11.0833 14.8542 10.7292 14.5625 10.4375C14.2708 10.1458 13.9167 10 13.5 10C13.0833 10 12.7292 10.1458 12.4375 10.4375C12.1458 10.7292 12 11.0833 12 11.5C12 11.9167 12.1458 12.2708 12.4375 12.5625C12.7292 12.8542 13.0833 13 13.5 13ZM2 14H16V9H2V14Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-medium leading-tight mt-1 mb-4">Several shuttle type</h4>
                            <p class="2xl:text-lg text-gray-200 max-w-2xl">
                                Choose from airport, harbor, or point-to-point shuttles across Bali. Our reliable and
                                comfortable transfers ensure you arrive safely and on time, wherever your destination may
                                be.
                            </p>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up" >
                        <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 23.3L8.65 20H4V15.35L0.699997 12L4 8.65V4H8.65L12 0.699997L15.35 4H20V8.65L23.3 12L20 15.35V20H15.35L12 23.3ZM12 17C13.3833 17 14.5625 16.5125 15.5375 15.5375C16.5125 14.5625 17 13.3833 17 12C17 10.6167 16.5125 9.4375 15.5375 8.4625C14.5625 7.4875 13.3833 7 12 7V17ZM12 20.5L14.5 18H18V14.5L20.5 12L18 9.5V6H14.5L12 3.5L9.5 6H6V9.5L3.5 12L6 14.5V18H9.5L12 20.5Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-medium leading-tight mt-1 mb-4">Tours & Activities</h4>
                            <p class="2xl:text-lg text-gray-200 max-w-2xl">
                                Discover Bali through half-day or full-day tours, paired with fun activities like banana
                                boat rides, waterfall trips, and cultural experiences. Each package is designed for
                                unforgettable memories.
                            </p>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up" >
                        <div class="!p-2 w-fit h-fit aspect-square rounded-full bg-cst-green-400">
                            <svg class="size-5 text-cst-yellow-400" viewBox="0 0 22 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 13.4167C4.73612 13.4167 4.08681 13.1493 3.55209 12.6146C3.01737 12.0799 2.75001 11.4306 2.75001 10.6667H0.916672V2.41667C0.916672 1.9125 1.09619 1.4809 1.45521 1.12187C1.81424 0.762846 2.24584 0.583332 2.75001 0.583332H15.5833L21.0833 6.08333V10.6667H19.25C19.25 11.4306 18.9826 12.0799 18.4479 12.6146C17.9132 13.1493 17.2639 13.4167 16.5 13.4167C15.7361 13.4167 15.0868 13.1493 14.5521 12.6146C14.0174 12.0799 13.75 11.4306 13.75 10.6667H8.25C8.25 11.4306 7.98264 12.0799 7.44792 12.6146C6.9132 13.1493 6.26389 13.4167 5.5 13.4167ZM13.75 5.16667H17.4167L14.6667 2.41667H13.75V5.16667ZM8.25 5.16667H11.9167V2.41667H8.25V5.16667ZM2.75001 5.16667H6.41667V2.41667H2.75001V5.16667ZM5.5 11.8125C5.82084 11.8125 6.09202 11.7017 6.31355 11.4802C6.53507 11.2587 6.64584 10.9875 6.64584 10.6667C6.64584 10.3458 6.53507 10.0747 6.31355 9.85312C6.09202 9.6316 5.82084 9.52083 5.5 9.52083C5.17917 9.52083 4.90799 9.6316 4.68646 9.85312C4.46494 10.0747 4.35417 10.3458 4.35417 10.6667C4.35417 10.9875 4.46494 11.2587 4.68646 11.4802C4.90799 11.7017 5.17917 11.8125 5.5 11.8125ZM16.5 11.8125C16.8208 11.8125 17.092 11.7017 17.3135 11.4802C17.5351 11.2587 17.6458 10.9875 17.6458 10.6667C17.6458 10.3458 17.5351 10.0747 17.3135 9.85312C17.092 9.6316 16.8208 9.52083 16.5 9.52083C16.1792 9.52083 15.908 9.6316 15.6865 9.85312C15.4649 10.0747 15.3542 10.3458 15.3542 10.6667C15.3542 10.9875 15.4649 11.2587 15.6865 11.4802C15.908 11.7017 16.1792 11.8125 16.5 11.8125ZM2.75001 8.83333H3.48334C3.74306 8.55833 4.04098 8.3368 4.37709 8.16875C4.7132 8.00069 5.0875 7.91667 5.5 7.91667C5.9125 7.91667 6.28681 8.00069 6.62292 8.16875C6.95903 8.3368 7.25695 8.55833 7.51667 8.83333H14.4833C14.7431 8.55833 15.041 8.3368 15.3771 8.16875C15.7132 8.00069 16.0875 7.91667 16.5 7.91667C16.9125 7.91667 17.2868 8.00069 17.6229 8.16875C17.959 8.3368 18.2569 8.55833 18.5167 8.83333H19.25V7H2.75001V8.83333Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="font-inter">
                            <h4 class="text-xl font-medium leading-tight mt-1 mb-4">Vehicle Rental</h4>
                            <p class="2xl:text-lg text-gray-200 max-w-2xl">
                                Travel at your own pace with our vehicle rental service. From cars to vans with professional
                                drivers, we offer safe, comfortable, and flexible options for any journey.
                            </p>
                        </div>
                    </div>
                </div>
                <x-wave-button href="#" data-aos="fade-up"  firstTextClasses="text-black font-inter font-semibold"
                    secondTextClasses="text-black font-playfair font-bold italic"
                    class="text-lg 2xl:text-2xl w-fit py-2.5 px-7 bg-cst-yellow-400 rounded-sm hover:bg-cst-yellow-400">
                    Find Tours!
                </x-wave-button>
            </div>
        </div>

    </section>

    {{-- ? OUR TEAM SECTION --}}
    <section class="bg-cst-green-800">
        <div class="container mx-auto py-24 px-8 text-white">

            <div class="flex flex-col text-center w-fit mb-10 mx-auto">
                <p class="font-inter text-cst-green-200 text-md sm:text-xl" data-aos="fade-up">Our team</p>
                <h2 class="font-roboto text-4xl font-semibold " data-aos="fade-up" >
                    Who is behind <i class="font-playfair">the scene?</i>
                </h2>
            </div>

            <div class="flex flex-col md:flex-row-reverse gap-10">
                <div class="w-full" data-aos="fade-up">
                    <img class="w-full h-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1603201667141-5a2d4c673378?q=80&w=1196&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                </div>

                <div class="flex flex-col justify-center sm:py-10">
                    <h3
                        class="font-roboto font-semibold text-2xl sm:text-3xl [&>i]:font-playfair [&>i]:text-cst-yellow-400 mb-5" data-aos="fade-up">
                        Our <i>Backstory</i> / our <i>Background</i>
                    </h3>
                    <p class="text-gray-200 text-lg mb-5" data-aos="fade-up">
                        <b>Explore Vista Bali</b> was born from a passion to showcase the true beauty of the Island of the Gods. 
                        We are a team of local travel experts dedicated to creating authentic and memorable experiences — from hidden beaches 
                        to cultural journeys allowing every traveler to see, feel, and live the real Bali beyond the ordinary.
                    </p>
                    <x-social-media class="mb-10" data-aos="fade-up" />

                    <h3 class="font-roboto font-semibold text-2xl sm:text-3xl [&>i]:text-cst-yellow-400 mb-5" data-aos="fade-up">
                        What <i>have we done?</i>
                    </h3>
                    <p class="text-gray-200 mb-5 text-lg" data-aos="fade-up">
                        At <b>Explore Vista Bali</b>, we’ve spent our time helping travelers explore the island in a more personal and meaningful way. 
                        From quiet beaches to cultural villages, we aim to make every trip simple, comfortable, and memorable. 
                        Some of the things we’ve done include:
                    </p>
                    <ul class="list-disc font-normal text-gray-200 pl-5 text-lg">
                        <li data-aos="fade-up">Arranged private and group tours to popular and hidden destinations.</li>
                        <li data-aos="fade-up">Worked with local guides to give travelers authentic Balinese experiences.</li>
                        <li data-aos="fade-up">Provided reliable transport and friendly travel assistance.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>

    {{-- ? FAQ SECTION --}}
    <section class="flex flex-col gap-10 lg:flex-row px-4 sm:px-8 py-24 relative overflow-hidden container mx-auto">

        <div class="flex-5" data-aos="fade-up">
            <img class="w-full h-full max-h-[20rem] sm:min-h-[45rem] object-cover object-center"
                src="https://images.unsplash.com/photo-1573790387438-4da905039392?q=80&w=725&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>

        <div class="flex-7 lg:py-4">
            <div class="mb-8">
                <p class="font-inter text-gray-500 text-md sm:text-xl" data-aos="fade-up">Frequently Asked Questions</p>
                <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight" data-aos="fade-up" >
                    More about <i class="font-playfair">our company</i>
                </h2>
            </div>

            <div class="space-y-4 font-inter min-h-[70vh] sm:min-h-[45vh] [&>div]:bg-gray-100 [&>div]:shadow-sm"
                x-data="{ active: null }">

                <!-- FAQ 1 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 1 }" data-aos="fade-up">
                    <button @click="active === 1 ? active = null : active = 1"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-lg font-medium text-start">What is Explore Vista Bali?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 1 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 1" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            Explore Vista Bali is a travel service company that provides shuttles, tours, activities, and
                            vehicle rentals to help travelers experience Bali with ease.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 2 }" data-aos="fade-up" data-aos-delay="100">
                    <button @click="active === 2 ? active = null : active = 2"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-lg font-medium text-start">Where is your company based?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 2 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 2" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            We are proudly based in Bali, Indonesia, and focus on offering authentic and reliable travel
                            experiences on the island.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 3 }" data-aos="fade-up" data-aos-delay="100">
                    <button @click="active === 3 ? active = null : active = 3"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-lg font-medium text-start">What makes Explore Vista Bali different from others?
                        </h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 3 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 3" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            We combine professional service with local knowledge, ensuring every trip is comfortable, safe,
                            and filled with memorable experiences.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 4 }" data-aos="fade-up" data-aos-delay="100">
                    <button @click="active === 4 ? active = null : active = 4"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-lg font-medium text-start">Who are your main customers?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 4 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 4" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            Our services are designed for both domestic and international travelers looking for a seamless
                            way to explore Bali.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="group border-s-4 border-cst-green-400/40 bg-gray-50 p-4"
                    :class="{ 'border-cst-green-400': active === 5 }" data-aos="fade-up" data-aos-delay="100">
                    <button @click="active === 5 ? active = null : active = 5"
                        class="flex w-full items-center justify-between gap-1.5 cursor-pointer text-gray-900 select-none">
                        <h2 class="text-lg font-medium text-start">How can I trust your services?</h2>
                        <svg class="size-5 shrink-0 transition-transform duration-300"
                            :class="{ '-rotate-180': active === 5 }" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 5" x-collapse class="overflow-hidden">
                        <p class="pt-4 text-gray-500">
                            We’ve built our reputation through satisfied guests, transparent booking, and dedicated support
                            to make every journey worry-free.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- ? OFFICE LOCATION SECTION --}}
    {{-- <section class="container mx-auto py-24 px-8">

        <div class="mb-8">
            <p class="font-inter text-gray-500 text-md text-center sm:text-xl" data-aos="fade-up" >
                Our office location
            </p>
            <h2 class="font-roboto text-4xl lg:text-5xl font-semibold leading-tight w-fit mx-auto" data-aos="fade-up"   >
                Where is <i class="font-playfair">our station?</i>
            </h2>
        </div>

        <div class="inline-block mx-auto w-full" data-aos="fade-up" >
            <iframe title="Google Maps location embedding"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0855362930492!2d115.23143447485441!3d-8.683415891364811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409b0e5e80db%3A0xad78f1ff66b638d2!2sSMK%20TI%20Global%20Denpasar!5e0!3m2!1sid!2sid!4v1758849596637!5m2!1sid!2sid"
                class="mx-auto min-w-full md:min-w-2/3 min-h-[25rem]" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section> --}}

@endsection
