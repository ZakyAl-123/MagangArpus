@props([
    'tagline' => 'WEBSITE RESMI DINAS ARSIP & PERPUSTAKAAN KOTA SEMARANG',
    'title' => 'Inovasi Layanan Menuju',
    'highlight' => 'Arsip & Literasi Sempurna',
    'description' => 'Menyediakan keterbukaan informasi publik, kemudahan akses koleksi pustaka, serta pengelolaan arsip daerah yang modern, akurat, dan terpercaya bagi masyarakat Kota Semarang.',
    'pills' => [],
    'image' => asset('asset/bakgron.jpg'),
    'stats' => []
])

<section class="hero-split-exact">
    <!-- Top White Showcase Header -->
    <div class="hero-white-box">
        <div class="container showcase-container">
            <div class="showcase-top">
                <div class="showcase-top-left">
                    <div class="showcase-tagline dark-tagline">
                        <span class="line-accent-dark" aria-hidden="true"></span>
                        <span>{{ $tagline }}</span>
                    </div>
                    <h1 class="showcase-main-title dark-title">
                        {{ $title }} <br>
                        <span class="text-maroon">{{ $highlight }}</span>
                    </h1>
                    @if(!empty($pills))
                        <div class="service-pills" aria-label="Layanan Unggulan">
                            @foreach($pills as $pill)
                                <span class="pill-light">{{ $pill }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="showcase-top-right">
                    <p class="showcase-desc-dark">
                        {{ $description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Showcase Visual & Overlapping Stats Card -->
    <div class="container showcase-container">
        <div class="showcase-bottom-overlapping">
            <div class="showcase-image-wrapper">
                <img src="{{ $image }}" alt="Gedung dan Aktivitas Dinas Arsip dan Perpustakaan Kota Semarang" class="showcase-main-img" width="1200" height="600" loading="eager" />
            </div>

            @if(!empty($stats))
                <div class="showcase-stats-card" aria-label="Statistik Pelayanan">
                    @foreach($stats as $stat)
                        <x-ui.dashboard-widget
                            :target="$stat['target']"
                            :separator="$stat['separator'] ?? ''"
                            :decimal="$stat['decimal'] ?? 0"
                            :suffix="$stat['suffix'] ?? ''"
                            :title="$stat['title']"
                            :description="$stat['description'] ?? null"
                        />
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
