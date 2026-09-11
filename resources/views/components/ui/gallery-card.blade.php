@props([
    'title' => '',
    'image' => asset('asset/Card Background Image.png'),
    'alt' => '',
    'category' => null
])

<div class="gallery-item" data-lightbox-src="{{ $image }}" data-lightbox-title="{{ $title }}">
    <div class="gallery-img-wrapper">
        <img src="{{ $image }}" alt="{{ $alt ?: $title }}" class="gallery-img" loading="lazy">
        <div class="gallery-overlay">
            <span class="gallery-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <line x1="11" y1="8" x2="11" y2="14"></line>
                    <line x1="8" y1="11" x2="14" y2="11"></line>
                </svg>
            </span>
            @if($category)
                <span class="gallery-caption-badge">{{ $category }}</span>
            @endif
        </div>
    </div>
</div>
