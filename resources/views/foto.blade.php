<x-layout.app title="Galeri Foto Kegiatan | Dinas Arpusda Kota Semarang">
    <section class="gallery-section" aria-label="Galeri Foto Dokumentasi Kegiatan">
        <div class="container">
            <!-- Judul Section -->
            <div class="section-header">
                <div class="gallery-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>DOKUMENTASI VISUAL</span>
                </div>
                <h1 class="section-title">Galeri Foto <span class="text-maroon">Arpusda</span></h1>
            </div>

            <!-- Grid Foto -->
            <div class="gallery-grid">
                @foreach($fotos as $foto)
                    <x-ui.gallery-card
                        :title="$foto['title']"
                        :image="asset($foto['image'])"
                        :alt="$foto['alt']"
                        :category="$foto['category']"
                    />
                @endforeach
            </div>
        </div>
    </section>
</x-layout.app>