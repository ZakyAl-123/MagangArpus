@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'icon' => null,
    'iconPosition' => 'right'
])

@php
    $classes = 'btn btn--' . $variant . ' btn--' . $size;
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <span class="btn__icon btn__icon--left" aria-hidden="true">{{ $icon }}</span>
        @endif
        <span class="btn__text">{{ $slot }}</span>
        @if($icon && $iconPosition === 'right')
            <span class="btn__icon btn__icon--right" aria-hidden="true">{{ $icon }}</span>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <span class="btn__icon btn__icon--left" aria-hidden="true">{{ $icon }}</span>
        @endif
        <span class="btn__text">{{ $slot }}</span>
        @if($icon && $iconPosition === 'right')
            <span class="btn__icon btn__icon--right" aria-hidden="true">{{ $icon }}</span>
        @endif
    </button>
@endif
