<section class="container mx-auto">

    <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="block lg:hidden">
            <button
                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                <span class="text-sm font-medium"> Filters & Sorting </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 rtl:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <div class="g:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-12">
            <div
                class="sticky top-24 hidden space-y-4 lg:block bg-gray-100 px-4 py-12 shadow-md min-h-[35rem] max-h-[35rem] overflow-y-scroll [&::-webkit-scrollbar]:w-3 [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-lg [&::-webkit-scrollbar-thumb]:border-2 [&::-webkit-scrollbar-thumb]:border-gray-100">
                <h3 class="font-playfair text-4xl font-medium mb-8 italic">Filters</h3>
                <div class="space-y-2">

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

            <div class="lg:col-span-3">
                <p class="font-inter font-semibold text-2xl mb-6">8 Tours available</p>

                <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 w-full">
                    @for ($i = 0; $i < 6; $i++)
                        <li>
                            <x-tour-card :$i />
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>

</section>
