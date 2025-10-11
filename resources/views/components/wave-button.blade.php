<a {{ $attributes->merge(['class' => 'flex justify-center cta-btn relative cursor-pointer transition-all duration-650 hover:[&_div_p]:-translate-y-full']) }}
    data-hover-animation="wave">
    <span class="btn-text absolute invisible h-auto w-auto whitespace-nowrap">{{ $slot }}</span>
    <div class="text-wrapper block overflow-hidden w-fit [&>div]:flex [&>div]:justify-center [&_div_p]:margin-0">
        <div class="upper text-center {{ $firstTextClasses }}"></div>
        <div class="lower text-center {{ $secondTextClasses }}"></div>
    </div>
</a>
