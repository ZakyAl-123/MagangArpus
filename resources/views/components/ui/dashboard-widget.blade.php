@props([
    'target' => 0,
    'separator' => '',
    'decimal' => 0,
    'suffix' => '',
    'title' => '',
    'description' => null,
    'icon' => null
])

<div {{ $attributes->merge(['class' => 'stat-box-item']) }}>
    @if($icon)
        <div class="stat-icon-wrapper" aria-hidden="true">
            {{ $icon }}
        </div>
    @endif
    <div class="stat-number"
         data-target="{{ $target }}"
         data-separator="{{ $separator }}"
         data-decimal="{{ $decimal }}"
         data-suffix="{{ $suffix }}">0</div>
    <div class="stat-title">{{ $title }}</div>
    @if($description)
        <div class="stat-desc-sub">{{ $description }}</div>
    @endif
</div>
