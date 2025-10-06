<section class="container mx-auto">

    <div class="py-8 sm:py-12 px-8" x-data="{ filterOpen: false }">
        <!-- Mobile Filter Button -->
        <div class="block lg:hidden mb-6">
            <button @click="filterOpen = true"
                class="flex items-center justify-center gap-2 px-6 py-2 bg-gray-200 text-black rounded-sm shadow-md hover:bg-cst-green-500 active:scale-95 transition-all w-full sm:w-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                </svg>
                <span class="font-medium">Filters & Sorting</span>
            </button>
        </div>

        <!-- Mobile Filter Modal/Popup -->
        <div x-show="filterOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 lg:hidden flex items-end"
            style="display: none;">

            <!-- Backdrop -->
            <div @click="filterOpen = false" class="fixed inset-0 bg-black/50"></div>

            <!-- Modal Content -->
            <div x-show="filterOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-full"
                class="relative w-full bg-white shadow-xl z-50 flex flex-col rounded-t-2xl max-h-[85vh]">
                <!-- Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                    <h3 class="font-playfair text-2xl font-medium italic">Filters</h3>
                    <button @click="filterOpen = false" class="p-2 hover:bg-gray-100 rounded-full transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Filter Content -->
                <div
                    class="flex-1 overflow-y-scroll px-6 py-6 [&::-webkit-scrollbar]:w-3 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-lg [&::-webkit-scrollbar-thumb]:border-2 [&::-webkit-scrollbar-thumb]:border-white">

                    <div class="space-y-4">
                        <x-filter-dropdown title="Vehicle Type" :options="[
                            ['id' => 'twowheel', 'label' => '2 Wheels'],
                            ['id' => 'fourwheel', 'label' => '4 Wheels'],
                        ]" />

                        <x-filter-dropdown title="Seat Amount" :options="[
                            ['id' => 'twoseat', 'label' => '2 Seat'],
                            ['id' => 'fourseat', 'label' => '4 Seat'],
                            ['id' => 'sixseat', 'label' => '6 Seat'],
                        ]" />
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="px-6 py-4 border-t border-gray-200 flex gap-3">
                    <button @click="filterOpen = false"
                        class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition font-medium">
                        Cancel
                    </button>
                    <button @click="filterOpen = false"
                        class="flex-1 px-4 py-2 bg-cst-yellow-400 text-black rounded-lg hover:bg-cst-yellow-500 transition font-medium">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>

        <div class="lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8 xl:gap-12">
            <!-- Desktop Sidebar Filter -->
            <div class="hidden lg:block lg:col-span-1 sticky top-20">
                <div
                    class="space-y-4 bg-gray-200 px-6 py-12 shadow-xl min-h-[85vh] max-h-[35rem] overflow-y-scroll [&::-webkit-scrollbar]:w-3 [&::-webkit-scrollbar-track]:bg-gray-200 [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-lg [&::-webkit-scrollbar-thumb]:border-2 [&::-webkit-scrollbar-thumb]:border-gray-200">

                    <h3 class="font-playfair text-4xl font-medium mb-8 italic">Filters</h3>

                    <div class="space-y-4">
                        <x-filter-dropdown title="Vehicle Type" :options="[
                            ['id' => 'twowheel', 'label' => '2 Wheels'],
                            ['id' => 'fourwheel', 'label' => '4 Wheels'],
                        ]" />

                        <x-filter-dropdown title="Seat Amount" :options="[
                            ['id' => 'twoseat', 'label' => '2 Seat'],
                            ['id' => 'fourseat', 'label' => '4 Seat'],
                            ['id' => 'sixseat', 'label' => '6 Seat'],
                        ]" />
                    </div>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="lg:col-span-3">
                <p class="font-inter font-semibold text-xl sm:text-2xl mb-4 sm:mb-6">8 Vehicle available</p>
                <ul class="grid gap-4 sm:gap-5 lg:gap-6 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 w-full">

                    @for ($i = 0; $i < 6; $i++)
                        <li>
                            <x-vehicle-card vehicleType="bike" label="Vehicle name or type" transmission="automatic"
                                price="$5"
                                img="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.aw-jplm6V4oq-Avfo-zdLQHaEK%3Fcb%3D12%26pid%3DApi&f=1&ipt=672d3a679336e6d687f950c92c9b70894c4ab25acf9463e25447bc4dce497a20" />
                        </li>
                    @endfor

                </ul>
            </div>
        </div>
    </div>

</section>
