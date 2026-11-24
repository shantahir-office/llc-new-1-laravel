@props([
    'text' => 'Book Consultation',
    'href' => null,
    'variant' => 'primary', // primary | dark | outline
    'type' => 'link', // link | button | submit
    'function' => null,
    'showArrow' => true,
    'ariaLabel' => null,
    'btnClass' => '',
])

@php
    // [button colours, hover fill colour]
    $variants = [
        'primary' => ['bg-secondary text-primary', 'bg-white'],
        'dark' => ['bg-primary text-white', 'bg-secondary'],
        'outline' => ['bg-primary-light text-white border border-white/10', 'bg-secondary'],
    ];

    [$colors, $fill] = $variants[$variant];

    $classes = "group relative isolate inline-flex items-center justify-center gap-2 overflow-hidden rounded-full
        px-6 py-3 text-sm font-semibold leading-5 whitespace-nowrap transition-colors duration-500
        hover:text-primary {$colors} {$btnClass}";
@endphp

@if ($type === 'link')
    <a href="{{ $href ?? route('empty') }}" aria-label="{{ $ariaLabel ?? $text }}"
        @if ($function) onclick="{{ $function }}" @endif
        {{ $attributes->merge(['class' => $classes]) }}>

        {{-- Hover fill (left to right) --}}
        <span
            class="absolute inset-0 -z-10 origin-left scale-x-0 rounded-full {{ $fill }} transition-transform duration-500 ease-out group-hover:scale-x-100"></span>

        {{-- Text roll: text goes up, copy comes from below --}}
        <span class="relative block overflow-hidden">
            <span
                class="block transition-transform duration-500 group-hover:-translate-y-full">{{ $text }}</span>
            <span class="absolute inset-0 translate-y-full transition-transform duration-500 group-hover:translate-y-0"
                aria-hidden="true">{{ $text }}</span>
        </span>

        @if ($showArrow)
            <x-svgs.arrow-right width="12" height="11"
                class="transition-transform duration-500 group-hover:translate-x-1" />
        @endif
    </a>
@else
    <button type="{{ $type }}" aria-label="{{ $ariaLabel ?? $text }}"
        @if ($function) onclick="{{ $function }}" @endif
        {{ $attributes->merge(['class' => $classes]) }}>

        {{-- Hover fill (left to right) --}}
        <span
            class="absolute inset-0 -z-10 origin-left scale-x-0 rounded-full {{ $fill }} transition-transform duration-500 ease-out group-hover:scale-x-100"></span>

        {{-- Text roll: text goes up, copy comes from below --}}
        <span class="relative block overflow-hidden">
            <span
                class="block transition-transform duration-500 group-hover:-translate-y-full">{{ $text }}</span>
            <span class="absolute inset-0 translate-y-full transition-transform duration-500 group-hover:translate-y-0"
                aria-hidden="true">{{ $text }}</span>
        </span>

        @if ($showArrow)
            <x-svgs.arrow-right width="12" height="11"
                class="transition-transform duration-500 group-hover:translate-x-1" />
        @endif
    </button>
@endif
