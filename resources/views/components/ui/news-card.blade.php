@props([
    'title' => '',
    'category' => 'Berita',
    'badgeClass' => '',
    'date' => '',
    'excerpt' => '',
    'image' => asset('asset/Card Background Image.png'),
    'link' => '#'
])

<article class="news-card">
    <div class="news-img-wrapper">
        <img src="{{ $image }}" alt="{{ $title }}" class="news-img" loading="lazy">
        <span class="news-badge {{ $badgeClass }}">{{ $category }}</span>
    </div>
    <div class="news-content">
        @if($date)
            <div class="news-meta">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>{{ $date }}</span>
            </div>
        @endif
        <h3 class="news-card-title">{{ $title }}</h3>
        <p class="news-card-desc">{{ $excerpt }}</p>
        <a href="{{ $link }}" class="news-link">
            Baca Selengkapnya
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</article>
