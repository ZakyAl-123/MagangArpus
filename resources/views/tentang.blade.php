<x-layout.app title="Tentang Kearsipan & Perpustakaan | Dinas Arpusda Semarang">
    <section class="about-kp-section" aria-label="Profil dan Definisi Kearsipan dan Perpustakaan">
        <div class="container about-kp-container">
            <!-- Header Section -->
            <div class="section-header">
                <div class="about-kp-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>PROFIL & DEFINISI</span>
                </div>
                <h1 class="section-title">Mengenal Lebih Dekat <span class="text-maroon">Kearsipan & Perpustakaan</span></h1>
            </div>

            <!-- Grid Dua Kolom -->
            <div class="about-kp-grid">
                @foreach($tentangList as $card)
                    <div class="about-kp-card">
                        <div class="about-kp-img-wrapper">
                            <img src="{{ asset($card['image']) }}" alt="Ilustrasi {{ $card['title'] }}" class="about-kp-img" loading="lazy">
                            <div class="about-kp-badge {{ $card['badge_class'] }}">{{ $card['badge'] }}</div>
                        </div>
                        <div class="about-kp-content">
                            <h2 class="about-kp-title">{{ $card['title'] }}</h2>
                            <p class="about-kp-text">
                                {{ $card['definition'] }}
                            </p>
                            <p class="about-kp-citation">{{ $card['citation'] }}</p>
                            <p class="about-kp-text highlight-text">
                                {{ $card['highlight'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout.app>