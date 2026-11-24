{{-- direction: left | right | down --}}
@props(['direction' => 'down'])

@php
    $paths = [
        'left' => 'M15 18l-6-6 6-6',
        'right' => 'M9 18l6-6-6-6',
        'down' => 'M6 9l6 6 6-6',
    ];
@endphp

<svg {{ $attributes->merge(['width' => 16, 'height' => 16]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <path d="{{ $paths[$direction] }}" />
</svg>
