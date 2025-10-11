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
                        <x-filter-dropdown title="Package Type" :options="[
                            ['id' => 'activities', 'label' => 'Activities'],
                            ['id' => 'halfday', 'label' => 'Half-day tours'],
                            ['id' => 'fullday', 'label' => 'Full-day tours'],
                        ]" />

                        <x-filter-dropdown title="Places" :options="[
                            ['id' => 'ubud', 'label' => 'Ubud'],
                            ['id' => 'kintamani', 'label' => 'Kintamani'],
                            ['id' => 'seminyak', 'label' => 'Seminyak'],
                            ['id' => 'nusa-penida', 'label' => 'Nusa Penida'],
                            ['id' => 'nusa-dua', 'label' => 'Nusa Dua'],
                            ['id' => 'canggu', 'label' => 'Canggu'],
                            ['id' => 'kuta', 'label' => 'Kuta'],
                            ['id' => 'karangasem', 'label' => 'Karangasem'],
                            ['id' => 'uluwatu', 'label' => 'Uluwatu'],
                            ['id' => 'serangan', 'label' => 'Serangan'],
                            ['id' => 'jimbaran', 'label' => 'Jimbaran'],
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
                        <x-filter-dropdown title="Package Type" :options="[
                            ['id' => 'activities', 'label' => 'Activities'],
                            ['id' => 'halfday', 'label' => 'Half-day tours'],
                            ['id' => 'fullday', 'label' => 'Full-day tours'],
                        ]" />

                        <x-filter-dropdown title="Places" :options="[
                            ['id' => 'ubud', 'label' => 'Ubud'],
                            ['id' => 'kintamani', 'label' => 'Kintamani'],
                            ['id' => 'seminyak', 'label' => 'Seminyak'],
                            ['id' => 'nusa-penida', 'label' => 'Nusa Penida'],
                            ['id' => 'nusa-dua', 'label' => 'Nusa Dua'],
                            ['id' => 'canggu', 'label' => 'Canggu'],
                            ['id' => 'kuta', 'label' => 'Kuta'],
                            ['id' => 'karangasem', 'label' => 'Karangasem'],
                            ['id' => 'uluwatu', 'label' => 'Uluwatu'],
                            ['id' => 'serangan', 'label' => 'Serangan'],
                            ['id' => 'jimbaran', 'label' => 'Jimbaran'],
                        ]" />
                    </div>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="lg:col-span-3">
                <p class="font-inter font-semibold text-xl sm:text-2xl mb-4 sm:mb-6">8 Tours available</p>
                <ul class="grid gap-4 sm:gap-5 lg:gap-6 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 w-full">

                    @for ($i = 0; $i < 6; $i++)
                        <li>
                            <x-package-card
                                img="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                packageType="tour" :$i />
                        </li>
                    @endfor

                </ul>
            </div>
        </div>
    </div>

</section>
