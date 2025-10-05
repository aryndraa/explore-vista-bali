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
    @if ($label && $id)
        <label for="{{ $id }}" class="text-sm text-gray-500 mb-2">
            {{ $label }}
        </label>
    @endif

    <div class="flex gap-3 items-center w-full">
        {{ $slot }}

        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
            placeholder="{{ $placeholder }}" @if ($required) required @endif
            @if ($type === 'tel') pattern="^\+?[0-9\s\-().]{7,20}$" @endif
            {{ $attributes->except(['class', 'id', 'name', 'value', 'required']) }}
            class="bg-transparent w-full text-xl text-black font-medium
                   placeholder:text-gray-400/60 placeholder:italic
                   focus:outline-0">
    </div>
</div>
