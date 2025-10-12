@props([
    'vehicleType' => 'car',
    'label',
    'price',
    'img',
    'seat' => 2,
    'transmission' => 'manual',
    'href'
])

<div class="group">
    {{-- ? Image part --}}
    <div class="relative overflow-hidden h-60">
        {{-- Top shadow for text contrast --}}
        <div
            class="absolute top-0 left-0 right-0 h-32 bg-gradient-to-b from-black/60 to-transparent pointer-events-none z-10">
        </div>

        {{-- Bottom shadow blending to green --}}
        <div
            class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-cst-green-800/60 to-transparent pointer-events-none">
        </div>

        <span class="flex items-center gap-2 absolute top-0 w-fit pl-4 pt-5 z-20">

            @if ($vehicleType === 'car')
                {{-- Car Icon --}}
                <svg class="size-7 text-cst-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                    fill="currentColor">
                    <path
                        d="M240-200v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l84-240q6-18 21.5-29t34.5-11h440q19 0 34.5 11t21.5 29l84 240v320q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240Zm-8-360h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm-460 40h560v-200H200v200Z" />
                </svg>
            @elseif($vehicleType === 'bike')
                {{-- Bike Icon --}}
                <svg class="size-6 text-cst-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                    fill="currentColor">
                    <path
                        d="M200-80q-83 0-141.5-58.5T0-280q0-83 58.5-141.5T200-480q83 0 141.5 58.5T400-280q0 83-58.5 141.5T200-80Zm0-80q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm240-40v-200L312-512q-12-11-18-25.5t-6-30.5q0-16 6.5-30.5T312-624l112-112q12-12 27.5-18t32.5-6q17 0 32.5 6t27.5 18l76 76q28 28 64 44t76 16v80q-57 0-108.5-22T560-604l-32-32-96 96 88 92v248h-80Zm180-540q-33 0-56.5-23.5T540-820q0-33 23.5-56.5T620-900q33 0 56.5 23.5T700-820q0 33-23.5 56.5T620-740ZM760-80q-83 0-141.5-58.5T560-280q0-83 58.5-141.5T760-480q83 0 141.5 58.5T960-280q0 83-58.5 141.5T760-80Zm0-80q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Z" />
                </svg>
            @endif

            <p class="font-inter font-semibold text-xl text-white">
                {{ $label }}
            </p>
        </span>

        <img class="relative w-full h-full object-cover object-center group-hover:scale-105 transition -z-10"
            src="{{ $img }}" alt="">
    </div>
    {{-- ? Text part --}}
    <div class="flex gap-4 items-center justify-between p-5 bg-cst-green-800">
        <div class="text-white font-inter">
            <h4 class="font-semibold text-2xl tracking-wider mb-3">
                {{ $price }} <span class="text-gray-300 font-normal tracking-normal text-lg">/ Day</span>
            </h4>
            <div
                class="flex gap-2 text-cst-yellow-400 font-medium text-sm [&>span]:bg-cst-green-400 [&>span]:px-3 [&>span]:py-1.5 [&>span]:rounded-full [&>span]:gap-1">

                <span class="flex items-center">
                    <svg class="size-5 text-cst-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        fill="currentColor">
                        <path
                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z" />
                    </svg>
                    {{ $seat }}
                </span>
            </div>
        </div>
        {{-- svg --}}
        <x-whatsapp-button href="{{ $href }}" aria-label="Whatsapp contact page" class="p-0! size-12 rounded-full!"
            iconClass="size-12" />
    </div>
</div>
