@props([
    'variant' => 'primary',
    'size' => 'md'
])

<span {{ $attributes->merge(['class' => 'ui-badge ui-badge--' . $variant . ' ui-badge--' . $size]) }}>
    {{ $slot }}
</span>
