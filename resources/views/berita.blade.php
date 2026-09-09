@include('layouts.header')
<!-- ========================= BERITA TERBARU SECTION ========================= -->
<section class="news-section">
    <div class="container news-container">
        
        <!-- Judul Section -->
        <div class="gallery-header">
            <div class="gallery-tagline">
                <span class="line-accent"></span>
                INFORMASI & PUBLIKASI
            </div>
            <h2 class="gallery-title">Berita <span class="text-maroon">Terbaru</span></h2>
        </div>

        <!-- Grid Kartu Berita (3 Kolom) -->
        <div class="news-grid">
            
            <!-- Berita 1 -->
            <article class="news-card">
                <div class="news-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Berita 1" class="news-img">
                    <span class="news-badge">Kearsipan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>08 September 2026</span>
                    </div>
                    <h3 class="news-card-title">Optimalisasi Pengelolaan Arsip Daerah Menuju Era Digitalisasi Modern</h3>
                    <p class="news-card-desc">Dinas Arsip dan Perpustakaan terus meningkatkan kualitas tata naskah dinas serta penyelamatan memori kolektif daerah...</p>
                    <a href="#" class="news-link">
                        Baca Selengkapnya 
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Berita 2 -->
            <article class="news-card">
                <div class="news-img-wrapper">
                    <img src="{{ asset('asset/bakgron.jpg') }}" alt="Berita 2" class="news-img">
                    <span class="news-badge gold-badge">Perpustakaan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>05 September 2026</span>
                    </div>
                    <h3 class="news-card-title">Peningkatan Minat Baca Melalui Revitalisasi Ruang Baca Digital</h3>
                    <p class="news-card-desc">Fasilitas ruang baca digital kini hadir dengan koleksi e-book interaktif yang ramah bagi pelajar dan masyarakat umum...</p>
                    <a href="#" class="news-link">
                        Baca Selengkapnya 
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

            <!-- Berita 3 -->
            <article class="news-card">
                <div class="news-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Berita 3" class="news-img">
                    <span class="news-badge">Kegiatan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>01 September 2026</span>
                    </div>
                    <h3 class="news-card-title">Seminar Internasional Naskah Kuno dan Pelestarian Budaya Nusantara</h3>
                    <p class="news-card-desc">Menbedah warisan leluhur bangsa melalui manuskrip kuno guna memperkuat identitas budaya serta literasi sejarah...</p>
                    <a href="#" class="news-link">
                        Baca Selengkapnya 
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>
@include('layouts.footer')