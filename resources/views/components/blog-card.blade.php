@props([
    'type' => 'default',
    'title',
    'content',
    'img',
    'date',
    'href'
])

<div
    class="flex {{ $type === 'new' ? 'flex-col md:flex-row md:h-[17rem]' : 'flex-col' }} bg-cst-green-800 rounded-xl overflow-hidden transform -translate-x-1">
    
    {{-- Gambar --}}
    <img 
        src="{{ $img }}" 
        alt="{{ $title }}" 
        class="{{ $type === 'new' ? 'min-w-[45%] rounded-l-xl object-cover' : 'w-full h-56 object-cover' }}"
    />

    {{-- Konten --}}
    <div class="p-5 flex flex-col justify-between {{ $type === 'new' ? 'rounded-r-xl' : 'gap-4' }}">
        <div>
            <i class="text-cst-green-200 font-medium text-sm col-span-2 mb-2 {{ $type === 'new' ? 'hidden' : 'block' }}">{{ $date }}</i>
            <h2 class="text-lg text-white font-medium mb-2 ">{{ $title }}</h2>
            <p class="text-gray-200 text-sm"> {{ Str::limit($content, 100, '...') }}</p>
        </div>
        <div class="grid  {{ $type === 'new' ? 'grid-cols-5 ' : 'grid-cols-2' }} text-white gap-5 items-center mt-4">
            <a href="{{ $href }}" 
                class="bg-cst-yellow-400 text-black font-semibold text-center py-2 {{ $type === 'new' ? 'col-span-3 ' : '' }}  rounded-lg flex justify-center items-center gap-4">
                See More
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke-width="3" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
                </svg>
            </a>
            {{-- <i class="text-cst-green-200 font-medium text-sm col-span-2  {{ $type === 'new' ? 'block' : 'hidden' }}">{{ $date }}</i> --}}
        </div>
    </div>
</div>
