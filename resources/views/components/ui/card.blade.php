@props([
    'title' => null,
    'subtitle' => null,
    'image' => null,
    'imageAlt' => '',
    'badge' => null,
    'badgeClass' => '',
    'hoverable' => true
])

<div {{ $attributes->merge(['class' => 'ui-card ' . ($hoverable ? 'ui-card--hover' : '')]) }}>
    @if($image)
        <div class="ui-card__image-wrapper">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="ui-card__image" loading="lazy">
            @if($badge)
                <span class="ui-card__badge {{ $badgeClass }}">{{ $badge }}</span>
            @endif
        </div>
    @endif

    <div class="ui-card__body">
        @if($subtitle)
            <div class="ui-card__subtitle">{{ $subtitle }}</div>
        @endif

        @if($title)
            <h3 class="ui-card__title">{{ $title }}</h3>
        @endif

        <div class="ui-card__content">
            {{ $slot }}
        </div>

        @if(isset($footer))
            <div class="ui-card__footer">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
