@props([
    'label' => '',
    'type' => 'text',
    'placeholder' => '',
])

<div {{ $attributes->merge([
    'class' => 'flex flex-1 flex-col p-4 bg-gray-100 font-inter shadow-sm',
]) }}>
    <label class="text-sm text-gray-500 mb-2">{{ $label }}</label>

    <div class="flex gap-4 items-center w-full">
        {{ $slot }}

        <input type="{{ $type }}" placeholder="{{ $placeholder }}"
            {{ $attributes->only(['name', 'id', 'required', 'value']) }}
            class="bg-none w-full pb-1 border-b-2 border-b-gray-400/50 text-xl text-black font-medium placeholder:text-gray-400/50 placeholder:italic focus:outline-0">
    </div>
</div>
