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

            <h2 class="text-sm font-semibold  whitespace-nowrap">{{ $location }}</h2>
        </div>

    </div>
</div>