<x-layout.app title="Pameran Virtual Arsip & Sejarah | Dinas Arpusda Kota Semarang">
    <section class="pameran-arsip-section" aria-label="Pameran Virtual Arsip dan Dokumen Sejarah">
        <div class="container pameran-container">
            <!-- Header Section -->
            <div class="section-header">
                <div class="gallery-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>PAMERAN VIRTUAL ARSIP & SEJARAH</span>
                </div>
                <h1 class="section-title">Koleksi <span class="text-maroon">Pameran Fisik</span></h1>
                <p style="color:var(--text-muted); margin-top:10px;">
                    Geser atau klik dokumen di bawah untuk melihat detail arsip sejarah pilihan Kota Semarang
                </p>
            </div>

            <!-- Coverflow / Carousel Container -->
            <div class="coverflow-wrapper">
                <button type="button" class="coverflow-nav-btn prev-btn" aria-label="Sebelumnya">&#10094;</button>

                <div class="coverflow-track" id="coverflowTrack">
                    @foreach($arsipList as $index => $item)
                        <div class="coverflow-item {{ $index === 0 ? 'active' : '' }}"
                             data-lightbox-src="{{ asset($item['image']) }}"
                             data-lightbox-title="{{ $item['title'] }}"
                             data-lightbox-desc="{{ $item['desc'] }}">
                            <div class="coverflow-card">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy">
                                <div class="coverflow-caption">
                                    <h4>{{ $item['title'] }}</h4>
                                    <p>{{ $item['category'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button type="button" class="coverflow-nav-btn next-btn" aria-label="Berikutnya">&#10095;</button>
            </div>
        </div>
    </section>
</x-layout.app>