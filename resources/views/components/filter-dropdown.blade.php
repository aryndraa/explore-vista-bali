@props(['title', 'options' => [], 'wireModel' => null])

<div 
    x-data="filterDropdown({ 
        title: '{{ $title }}', 
        options: @js($options), 
        wireModel: '{{ $wireModel }}' 
    })" 
    class="overflow-hidden rounded-sm"
    x-cloak
>
    <!-- Summary -->
    <button 
        @click="open = !open"
        class="cursor-pointer flex w-full items-center justify-between gap-2 p-4 text-gray-900 transition bg-gray-100 border border-gray-300 shadow-sm"
        type="button"
    >
        <span class="text-sm font-medium" x-text="title"></span>

        <span class="transition-transform duration-300" :class="{ '-rotate-180': open }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </span>
    </button>

    <!-- Dropdown content -->
    <div x-show="open" x-collapse class="border-t border-gray-200 bg-gray-100">
        <header class="flex items-center justify-between p-4">
            <span class="text-sm text-gray-700" x-text="selected.length + ' Selected'"></span>

            <button type="button" @click="clear()" class="cursor-pointer text-sm text-gray-900 underline underline-offset-4">
                Reset
            </button>
        </header>

        <ul class="space-y-2 border-t border-gray-200 p-4" x-data="{ uniquePrefix: $id('filter') }">
            <template x-for="(option, index) in options" :key="option.id">
                <li>
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input 
                            type="checkbox" 
                            :id="`${uniquePrefix}-${option.id}-${index}`" 
                            :value="option.id"
                            x-model="selected" 
                            class="sr-only" 
                        />

                        <span
                            class="w-5 h-5 border-2 rounded-sm flex items-center justify-center border-cst-yellow-400 transition-colors"
                            :class="selected.includes(option.id) ? 'bg-cst-yellow-400' : ''"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor"
                                class="w-3.5 h-3.5 text-black transition-opacity"
                                :class="selected.includes(option.id) ? 'opacity-100' : 'opacity-0'">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>

                        <span class="text-md font-medium text-gray-700" x-text="option.label"></span>
                    </label>
                </li>
            </template>
        </ul>
    </div>
</div>

<script>
    function filterDropdown({ title, options, wireModel }) {
        return {
            open: true,
            title,
            options,
            selected: [],
            clear() {
                this.selected = []
            },
            init() {
                if (wireModel) {
                    // sinkronisasi Livewire -> Alpine (saat re-render)
                    this.$watch('selected', (value) => {
                        this.$wire.set(wireModel, value)
                    })
                }
            }
        }
    }
</script>
