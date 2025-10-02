@props([
    'img' => '',
    'location' => '',
])

<div class="group relative h-full text-white font-inter min-h-80">
    <div class="relative flex h-full w-full bg-center bg-cover" style="background-image: url('{{ $img }}');">

        {{-- Text & icon --}}
        <div
            class="absolute bottom-0 left-0 w-full flex flex-wrap gap-3 p-4 lg:p-6 transition-opacity duration-300 group-hover:opacity-0 z-10">

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent -z-10"></div>

            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 aspect-auto" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <h2 class="text-xl font-semibold sm:text-2xl whitespace-nowrap">{{ $location }}</h2>

        </div>

    </div>
</div>
