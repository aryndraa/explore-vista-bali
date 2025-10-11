@props([
    'label' => null,
    'type' => 'text',
    'placeholder' => '',
    'id' => null,
    'name' => null,
    'value' => null,
    'required' => false,
])

<div
    {{ $attributes->merge([
        'class' => 'flex flex-1 flex-col p-4 bg-gray-100 font-inter shadow-sm rounded-md',
    ]) }}>

    {{-- Label --}}
    @if ($label)
        <label for="{{ $id ?? $name }}" class="text-sm text-gray-600 mb-2">
            {{ $label }}
            @if ($required)
                <span class="text-red-400">*</span>
            @endif
        </label>
    @endif

    <div class="flex gap-3 items-center w-full">
        {{ $slot }}

        {{-- Input field --}}
        <input type="{{ $type }}" id="{{ $id ?? $name }}" name="{{ $name }}"
            value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}
            @if ($type === 'tel') pattern="^\+?[0-9\s\-().]{7,20}$" @endif
            {{ $attributes->except(['class', 'id', 'name', 'value', 'required']) }}
            class="bg-transparent w-full 2xl:text-lg text-black font-medium
                   placeholder:text-gray-400/60 placeholder:italic focus:border-cst-yellow-400 transition-colors duration-200 focus:outline-none">
    </div>
</div>
