@props([
    'id' => null,
    'label' => '',
    'placeholder' => '',
    'rows' => 3,
    'required' => false,
])

<div {{ $attributes->class(['flex flex-col p-4 bg-gray-100 font-inter shadow-sm flex-1']) }}>
    @if ($label)
        <label for="{{ $id }}" class="text-sm text-gray-500 mb-2 block">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <textarea id="{{ $id }}" name="{{ $attributes->get('name') }}" rows="{{ $rows }}"
        placeholder="{{ $placeholder }}" @if ($required) required @endif
        {{ $attributes->except(['id', 'class', 'name', 'rows', 'placeholder', 'required']) }}
        class="w-full border-b-2 border-gray-400/50 bg-transparent 2xl:text-lg text-black font-medium
               placeholder:text-gray-400/50 placeholder:italic focus:outline-none focus:border-cst-yellow-400
               transition duration-200 pb-1"></textarea>
</div>
