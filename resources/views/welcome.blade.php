@include('layouts.header')
<section class="hero-split-exact">
    <!-- Bagian Atas Putih yang lebarnya menutupi setengah foto -->
    <div class="hero-white-box">
        <div class="container showcase-container">
            <div class="showcase-top">
                <div class="showcase-top-left">
                    <div class="showcase-tagline dark-tagline">
                        <span class="line-accent-dark"></span>
                        WEBSITE RESMI DINAS ARSIP & PERPUSTAKAAN KOTA SEMARANG
                    </div>
                    <h1 class="showcase-main-title dark-title">
                        Inovasi Layanan Menuju <br>
                        <span class="text-maroon">Arsip & Literasi Sempurna</span>
                    </h1>
                    <div class="service-pills">
                        <span class="pill-light">Layanan Kearsipan</span>
                        <span class="pill-light">Pengolahan Buku</span>
                        <span class="pill-light">Konsultasi Arsip</span>
                        <span class="pill-light">Wisata Edukasi</span>
                        <span class="pill-light">Ruang Baca Digital</span>
                    </div>
                </div>
                <div class="showcase-top-right">
                    <p class="showcase-desc-dark">
                        Menyediakan keterbukaan informasi publik, kemudahan akses koleksi pustaka, serta pengelolaan
                        arsip daerah yang modern, akurat, dan terpercaya bagi masyarakat Kota Semarang.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Foto & Statistik (Ditarik ke atas setengah badan agar terpotong pas di tengah garis merah) -->
    <div class="container showcase-container">
        <div class="showcase-bottom-overlapping">
            <div class="showcase-image-wrapper">
                <img src="{{ asset('asset/bakgron.jpg') }}" alt="Gedung dan Aktivitas Dinas Arsip"
                    class="showcase-main-img">
            </div>
            <div class="showcase-stats-card">

                <div class="stat-box-item">
                    <div class="stat-number" data-target="8245" data-separator=".">0</div>
                    <div class="stat-title">Arsip & Dokumen</div>
                </div>

                <div class="stat-box-item">
                    <div class="stat-number" data-target="120676" data-separator=".">0</div>
                    <div class="stat-title">Koleksi Buku</div>
                </div>

                <div class="stat-box-item">
                    <div class="stat-number" data-target="88.9" data-decimal="1" data-suffix="%">0</div>
                    <div class="stat-title">Indeks Kepuasan Masyarakat</div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ========================= ADDRESS BAR ========================= -->
<div class="address-bar">
    <div class="address-track">

        <!-- SET 1: Konten Utama -->
        <div class="address-content">
            <span>Jl. Prof. Sudarto No. 116, Kel.Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269</span>
            <span></span>
            <span>Jam Layanan: Senin - Kamis (08.00 - 16.00 WIB) - Jumat: 08.00 - 14.00 WIB</span>
            <span></span>
            <span>Selamat datang di website resmi Dinas Arsip dan Perpustakaan Kota Semarang</span>
            <span></span>
        </div>

        <div class="address-content">
            <span>Jl. Prof. Sudarto No. 116, Kel.Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269</span>
            <span></span>
            <span>Jam Layanan: Senin - Kamis (08.00 - 16.00 WIB) - Jumat: 08.00 - 14.00 WIB</span>
            <span></span>
            <span>Selamat datang di website resmi Dinas Arsip dan Perpustakaan Kota Semarang</span>
            <span></span>
        </div>

    </div>
</div>

<!-- ========================= SEARCH BAR MODERN ========================= 
  <section class="search-section-modern">
    <div class="container">
      <form class="search-form-modern" role="search" action="#" method="GET">
        <div class="search-input-wrapper">
          <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <label for="main-search" class="visually-hidden">Cari koleksi atau informasi</label>
          <input id="main-search" type="text" placeholder="Cari judul buku, arsip, atau informasi lainnya...">
        </div>
        <button type="submit" class="search-btn-modern">Cari</button>
      </form>
    </div>
  </section> -->

<!-- ========================= MENU KAMI ========================= -->
<section class="menu-kami-modern">
    <div class="container">
        <h2 class="section-title">Menu <span class="accent">Kami</span></h2>

        <div class="menu-grid-modern">

            <!-- 1. AGENDA -->
            <div class="menu-card-mod">
                <div class="menu-card-top">
                    <div class="menu-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3 class="menu-card-title">AGENDA</h3>
                </div>
                <div class="menu-card-links">
                    <a href="https://infokegiatan.arpusda.semarangkota.go.id/">Acara Dinas</a>
                    <a href="https://infokegiatan.semarangkota.go.id/">Acara Pemkot</a>
                    <a href="https://agenda.perpusnas.go.id/">Acara Perpusnas</a>
                    <a href="https://www.anri.go.id/publikasi/event">Acara ANRI</a>
                </div>
            </div>

            <!-- 2. MEDIA SIAR -->
            <div class="menu-card-mod">
                <div class="menu-card-top">
                    <div class="menu-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                        </svg>
                    </div>
                    <h3 class="menu-card-title">MEDIA SIAR</h3>
                </div>
                <div class="menu-card-links">
                    <a href="https://t.me/sobatbukuarpuskotasemarang">Sobat Buku</a>
                    <a href="#">Video Converse</a>
                    <a href="https://e-radio.semarangkota.go.id/">E-Radio</a>
                    <a href="https://www.youtube.com/channel/UCKW_vxNCRgWO60Ny1wC_rUQ">Streaming</a>
                </div>
            </div>

            <!-- 3. GALERI -->
            <div class="menu-card-mod">
                <div class="menu-card-top">
                    <div class="menu-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3 class="menu-card-title">GALERI</h3>
                </div>
                <div class="menu-card-links">
                    <a href="{{ route('foto') }}">Foto</a>
                    <a href="{{ route('video') }}">Video</a>
                    <a href="#">Brosur / Poster</a>
                    <a href="#">Arsip Dokumenter</a>
                </div>
            </div>

            <!-- 4. SIBAJA (Pencarian Istilah) -->
            <div class="menu-card-mod sibaja-card" style="position: relative;">
                <div class="sibaja-content">
                    <h3 class="sibaja-title">Sibaja</h3>
                    <p class="sibaja-sub">(Senarai Istilah Budaya Jawa)</p>
                </div>

                <div class="sibaja-search-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <label for="sibaja-search" class="visually-hidden">Cari istilah budaya Jawa</label>

                    <!-- ID input harus 'sibaja-search' -->
                    <input id="sibaja-search" type="text" placeholder="Cari istilah...">

                    <span id="mic-btn" class="mic-wrapper" title="Cari dengan suara">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                            <path d="M19 10v1a7 7 0 0 1-14 0v-1"></path>
                            <line x1="12" y1="19" x2="12" y2="23"></line>
                            <line x1="8" y1="23" x2="16" y2="23"></line>
                        </svg>
                    </span>
                </div>

                <!-- Wadah dropdown hasil pencarian dengan ID 'sibaja-results' -->
                <div id="sibaja-results" class="sibaja-results-dropdown" style="display: none;"></div>
            </div>
        </div>
</section>

<!-- ========================= GELIAT BERGEMA (MODEL ALTERNATIF) ========================= -->
<section class="geliat-modern">
    <div class="container geliat-container">

        <!-- Header Section -->
        <div class="gallery-header">
            <h2 class="gallery-title">GELIAT <span class="text-maroon">BERGEMA</span></h2>
            <div class="geliat__subs">
                <p>Gerakan Literasi Atraktif Bergerak Bersama</p>
                <p>Gerakan Peduli Arsip Terpadu Bergerak Bersama</p>
            </div>
        </div>

        <!-- Grid Menu Alternatif (3 Kolom x 2 Baris) -->
        <div class="geliat__actions-alt">

            <!-- 1. Cari Buku -->
            <a class="geliat-card-alt" href="https://arpusda.semarangkota.go.id/sicaper" target="_blank">
                <div class="geliat-alt__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">Cari Buku</span>
                    <span class="geliat-alt__desc">Temukan koleksi pustaka</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <!-- 2. Cari Arsip -->
            <a class="geliat-card-alt" href="https://selaras.semarangkota.go.id/" target="_blank">
                <div class="geliat-alt__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="21 8 21 21 3 21 3 8"></polyline>
                        <rect x="1" y="3" width="22" height="5"></rect>
                        <line x1="10" y1="12" x2="14" y2="12"></line>
                    </svg>
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">Cari Arsip</span>
                    <span class="geliat-alt__desc">Layanan arsip terpadu</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <!-- 3. Cari Peraturan -->
            <a class="geliat-card-alt" href="https://arpusda.semarangkota.go.id/sicatur" target="_blank">
                <div class="geliat-alt__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">Cari Peraturan</span>
                    <span class="geliat-alt__desc">Regulasi & kebijakan</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <!-- 4. Usulan Buku -->
            <a class="geliat-card-alt" href="https://arpusda.semarangkota.go.id/siulan" target="_blank">
                <div class="geliat-alt__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">Usulan Buku</span>
                    <span class="geliat-alt__desc">Ajukan pengadaan judul baru</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <!-- 5. Donasi Buku -->
            <a class="geliat-card-alt" href="https://arpusda.semarangkota.go.id/sidoku" target="_blank">
                <div class="geliat-alt__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">Donasi Buku</span>
                    <span class="geliat-alt__desc">Mari berbagi literasi</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <!-- 6. SABDA -->
            <a class="geliat-card-alt" href="https://bastra.kemendikdasmen.go.id/sabda/" target="_blank">
                <div class="geliat-alt__icon img-icon">
                    <img src="{{ asset('asset/sabda.png') }}" alt="SABDA">
                </div>
                <div class="geliat-alt__content">
                    <span class="geliat-alt__label">SABDA</span>
                    <span class="geliat-alt__desc">Belajar Bahasa Daerah</span>
                </div>
                <div class="geliat-alt__arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ========================= BUKU TERBARU & BERITA ========================= -->
<section class="content-row-wrap">
    <div class="container">

        <!-- Bagian Header Buku Terbaru -->
        <div class="section-header-flex">
            <div>
                <h3 class="subsection-title">Buku Terbaru</h3>
                <p class="section-subtitle">Baru ditambahkan ke perpustakaan</p>
            </div>
            <div class="section-actions">
                <a href="https://sibooky.semarangkota.go.id/katalog?format=ebook" target="_blank"
                    class="btn-lihat-semua">Lihat semua &gt;</a>
            </div>
        </div>

        <!-- Grid Buku Modern (Setema) -->
        <div class="book-grid-modern">

            <!-- Buku 1 -->
            <article class="book-card-mod">
                <div class="book-thumb">
                    <img src="{{ asset('asset/buku1.jpg') }}" alt="sejarah">
                    <div class="book-overlay-badge">Populer</div>
                </div>
                <div class="book-info">
                    <h4 class="book-title">Semarang dari Masa ke Masa</h4>
                    <p class="book-author">Badan Arpus Provinsi Jateng</p>
                    <span class="book-views">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        138 Dilihat
                    </span>
                </div>
                <div class="book-actions">
                    <a href="https://sibooky.semarangkota.go.id/katalog/semarang-dari-masa-ke-masa-4040-baca"
                        target="_blank" class="action-btn" title="Detail">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </a>
                    <button class="action-btn" title="Suka"><svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></button>
                    <button class="action-btn bookmark" title="Simpan"><svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg></button>
                </div>
            </article>

            <!-- Buku 2 -->
            <article class="book-card-mod">
                <div class="book-thumb">
                    <img src="{{ asset('asset/tradisingaliyan.jpg') }}" alt="Pulang">
                    <div class="book-overlay-badge">Budaya</div>
                </div>
                <div class="book-info">
                    <h4 class="book-title">Tradisi dari Ngaliyan</h4>
                    <p class="book-author">Sucipto Hadi Purnomo</p>
                    <span class="book-views">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        190 Dilihat
                    </span>
                </div>
                <div class="book-actions">
                    <a href="https://sibooky.semarangkota.go.id/katalog/serial-tradisi-kota-semarang-tradisi-dari-ngaliyan-4026-baca"
                        target="_blank" class="action-btn" title="Detail">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </a>
                    <button class="action-btn" title="Suka"><svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></button>
                    <button class="action-btn bookmark" title="Simpan"><svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg></button>
                </div>
            </article>

            <!-- Buku 3 -->
            <article class="book-card-mod">
                <div class="book-thumb">
                    <img src="{{ asset('asset/tembalang.jpg') }}" alt="Tentang Kamu">
                    <div class="book-overlay-badge">Budaya</div>
                </div>
                <div class="book-info">
                    <h4 class="book-title">Tradisi dari Tembalang</h4>
                    <p class="book-author">Sucipto Hadi Purnomo</p>
                    <span class="book-views">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        102 Dilihat
                    </span>
                </div>
                <div class="book-actions">
                    <a href="https://sibooky.semarangkota.go.id/katalog/tradisi-dari-tembalang-4052-baca"
                        target="_blank" class="action-btn" title="Detail">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </a>
                    <button class="action-btn" title="Suka"><svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></button>
                    <button class="action-btn bookmark" title="Simpan"><svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg></button>
                </div>
            </article>

            <!-- Buku 4 -->
            <article class="book-card-mod">
                <div class="book-thumb">
                    <img src="{{ asset('asset/heart.jpg') }}" alt="Rindu">
                    <div class="book-overlay-badge gold-badge">Novel</div>
                </div>
                <div class="book-info">
                    <h4 class="book-title">Silent Heart</h4>
                    <p class="book-author">Rudiyant</p>
                    <span class="book-views">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        96 Dilihat
                    </span>
                </div>
                <div class="book-actions">
                    <a href="https://sibooky.semarangkota.go.id/katalog/silent-heart-2382-baca" target="_blank"
                        class="action-btn" title="Detail">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </a>
                    <button class="action-btn" title="Suka"><svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></button>
                    <button class="action-btn bookmark" title="Simpan"><svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg></button>
                </div>
            </article>

            <!-- Buku 5 -->
            <article class="book-card-mod">
                <div class="book-thumb">
                    <img src="{{ asset('asset/kubur.jpg') }}" alt="Hujan">
                    <div class="book-overlay-badge">Religi</div>
                </div>
                <div class="book-info">
                    <h4 class="book-title">1001 Siksa Kubur</h4>
                    <p class="book-author">Abdul Rahman</p>
                    <span class="book-views">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        148 Dilihat
                    </span>
                </div>
                <div class="book-actions">
                    <a href="https://sibooky.semarangkota.go.id/katalog/1001-siksa-kubur-2215-baca" target="_blank"
                        class="action-btn" title="Detail">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </a>
                    <button class="action-btn" title="Suka"><svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></button>
                    <button class="action-btn bookmark" title="Simpan"><svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg></button>
                </div>
            </article>

        </div>

        <!-- ================= Bagian Berita Terbaru ================= -->
        <div class="section-header-flex" style="margin-top: 48px;">
            <div>
                <h3 class="subsection-title">Berita Terbaru</h3>
                <p class="section-subtitle">Informasi dan kegiatan Dinarpus</p>
            </div>
            <div class="section-actions">
                <a href="{{ route('berita') }}" class="btn-lihat-semua">Lihat semua &gt;</a>
            </div>
        </div>

        <div class="berita-grid-modern">

            <!-- Berita 1 -->
            <article class="berita-card-mod">
                <div class="berita-thumb">
                    <img src="{{ asset('asset/bakgron.jpg') }}" alt="Foto Berita">
                </div>
                <div class="berita-info">
                    <h4 class="berita-title">Optimalisasi Pengelolaan Arsip Daerah Menuju Era Digitalisasi Modern</h4>
                    <p class="berita-desc">Dinas Arsip dan Perpustakaan terus meningkatkan kualitas tata naskah dinas
                        serta penyelamatan memori kolektif daerah...</p>
                    <span class="berita-date">14 Mei 2025</span>
                </div>
            </article>

            <!-- Berita 2 -->
            <article class="berita-card-mod">
                <div class="berita-thumb">
                    <img src="{{ asset('asset/arpus.jpg') }}" alt="Foto Berita">
                </div>
                <div class="berita-info">
                    <h4 class="berita-title">Peningkatan Minat Baca Melalui Revitalisasi Ruang Baca Digital</h4>
                    <p class="berita-desc">Fasilitas ruang baca digital kini hadir dengan koleksi e-book interaktif yang
                        ramah bagi pelajar dan masyarakat umum...</p>
                    <span class="berita-date">14 Mei 2025</span>
                </div>
            </article>

            <!-- Berita 3 -->
            <article class="berita-card-mod">
                <div class="berita-thumb">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Foto Berita">
                </div>
                <div class="berita-info">
                    <h4 class="berita-title">Seminar Internasional Naskah Kuno dan Pelestarian Budaya Nusantara</h4>
                    <p class="berita-desc">Menbedah warisan leluhur bangsa melalui manuskrip kuno guna memperkuat
                        identitas budaya serta literasi sejarah...</p>
                    <span class="berita-date">14 Mei 2025</span>
                </div>
            </article>

        </div>

    </div>
</section>

<!-- ========================= BERITA MEDIA SECTION ========================= -->
<section class="media-section">
    <div class="container media-container">

        <!-- Judul Section -->
        <div class="gallery-header">
            <h2 class="gallery-title" style="font-size: 1.8rem !important;">Berita <span
                    class="text-maroon">Media</span></h2>
        </div>

        <!-- Strip Logo Media -->
        <div class="media-strip-modern">

            <!-- Media 1: Detikcom -->
            <a href="https://www.detik.com" target="_blank" class="media-card-btn">
                <div class="media-logo-img">
                    <img src="{{ asset('asset/detik.png') }}" alt="detikcom">
                </div>
            </a>

            <!-- Media 2: Liputan6 -->
            <a href="https://www.liputan6.com" target="_blank" class="media-card-btn">
                <div class="media-logo-img">
                    <img src="{{ asset('asset/liputan6.png') }}" alt="Liputan6">
                </div>
            </a>

            <!-- Media 3: Kompas -->
            <a href="https://search.kompas.com/search/?q=semarang&submit=Submit+Query" target="_blank"
                class="media-card-btn">
                <div class="media-logo-img">
                    <img src="{{ asset('asset/kompas.png') }}" alt="KOMPAS.com">
                </div>
            </a>

            <!-- Media 4: Tribun Jateng -->
            <a href="https://jateng.tribunnews.com/semarang-hebat" target="_blank" class="media-card-btn">
                <div class="media-logo-img">
                    <img src="{{ asset('asset/tribunjateng.png') }}" alt="TribunJateng">
                </div>
            </a>

            <!-- Media 5: Suara Merdeka -->
            <a href="https://www.suaramerdeka.com/search?q=semarang" target="_blank" class="media-card-btn">
                <div class="media-logo-img">
                    <img src="{{ asset('asset/suaramerdeka.png') }}" alt="SuaraMerdeka.com">
                </div>
            </a>

        </div>
    </div>
</section>


<section class="layanan-modern">
    <div class="container layanan-container">

        <!-- Judul Section dengan Standar Tema -->
        <div class="gallery-header">
            <h2 class="gallery-title" style="font-size: 1.8rem !important;">Layanan <span class="text-maroon">Perpusnas
                    RI</span></h2>
        </div>

        <!-- Grid Layanan -->
        <div class="layanan__grid">

            <!-- Item 1 -->
            <a class="layanan-card" href="https://dashboard-ipusnas.perpusnas.go.id/" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">IPUSNAS</span>
                    <span class="layanan__pill-sub">Perpustakaan Digital Bergerak</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

            <!-- Item 2 -->
            <a class="layanan-card" href="https://opac.perpusnas.go.id/" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">OPAC</span>
                    <span class="layanan__pill-sub">Online Public Access Catalog</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

            <!-- Item 3 -->
            <a class="layanan-card" href="https://e-resources.perpusnas.go.id/" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">E-RES</span>
                    <span class="layanan__pill-sub">Koleksi Digital Berlangganan</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

            <!-- Item 4 -->
            <a class="layanan-card" href="https://onesearch.id/" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">IOS</span>
                    <span class="layanan__pill-sub">Indonesia OneSearch by Perpusnas</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

            <!-- Item 5 -->
            <a class="layanan-card" href="https://isbn.perpusnas.go.id/landing_page/home" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">ISBN</span>
                    <span class="layanan__pill-sub">International Standard Book Number</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

            <!-- Item 6 -->
            <a class="layanan-card" href="https://keanggotaan.perpusnas.go.id/" target="_blank">
                <div class="layanan-card__glow"></div>
                <div class="layanan-card__info">
                    <span class="layanan__pill-title">K-OL</span>
                    <span class="layanan__pill-sub">Keanggotaan Online Perpusnas</span>
                </div>
                <div class="layanan-card__icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                    </svg>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ========================= APLIKASI KAMI ========================= -->
<section class="aplikasi-modern">
    <div class="container aplikasi-container">

        <!-- Judul Section dengan Standar Tema -->
        <div class="gallery-header">
            <h2 class="gallery-title" style="font-size: 1.8rem !important;">Aplikasi <span
                    class="text-maroon">Kami</span></h2>
        </div>

        <!-- Grid Logo Aplikasi -->
        <div class="aplikasi__grid-modern">

            <!-- Logo Selaras -->
            <a href="https://selaras.semarangkota.go.id/" target="_blank" class="aplikasi-card-modern">
                <div class="aplikasi-card__glow"></div>
                <div class="aplikasi-logo-wrapper">
                    <img src="{{ asset('asset/selaras.png') }}" alt="Logo Aplikasi Selaras" class="aplikasi-logo-img" />
                </div>
            </a>

            <!-- Logo Si Booky -->
            <a href="https://sibooky.semarangkota.go.id/" target="_blank" class="aplikasi-card-modern">
                <div class="aplikasi-card__glow"></div>
                <div class="aplikasi-logo-wrapper">
                    <img src="{{ asset('asset/sibooky.png') }}" alt="Logo Aplikasi Si Booky"
                        class="aplikasi-logo-img" />
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ========================= DATA LAINNYA / FAQ ========================= -->
<section class="info-section-modern" id="faq">
    <div class="container info-grid-modern">

        <!-- Kolom 1: Data Lainnya -->
        <div class="info-col">
            <h3 class="info-col__title">Data Lainnya</h3>
            <div class="accordion-modern">

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">01</span>
                        <span class="acc-text">Keanggotaan Perpustakaan</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Informasi seputar pendaftaran dan keanggotaan perpustakaan.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">02</span>
                        <span class="acc-text">Pustakawan</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Daftar dan profil pustakawan Dinas Arsip dan Perpustakaan.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">03</span>
                        <span class="acc-text">Statistik</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Statistik kunjungan dan koleksi perpustakaan.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">04</span>
                        <span class="acc-text">Survey Layanan</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Isi survey kepuasan layanan kami.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">05</span>
                        <span class="acc-text">Sapa Mbak Ita</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Sampaikan aspirasi Anda melalui kanal Sapa Mbak Ita.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Kolom 2: Pertanyaan Umum -->
        <div class="info-col">
            <h3 class="info-col__title">Pertanyaan Umum</h3>
            <div class="accordion-modern">

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">01</span>
                        <span class="acc-text">Cara daftar anggota perpustakaan?</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Kunjungi loket keanggotaan dengan membawa KTP/KIA.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">02</span>
                        <span class="acc-text">Cara mengajukan permohonan arsip?</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Ajukan online lewat menu Layanan Arsip, isi formulir, dan lacak status langsung.</p>
                    </div>
                </div>

                <div class="accordion-item-mod">
                    <button class="accordion-btn-mod" aria-expanded="false">
                        <span class="acc-num">03</span>
                        <span class="acc-text">Apa syarat booking ruang baca?</span>
                        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="accordion-panel-mod">
                        <p>Isi formulir pemesanan ruang melalui menu Pesan Ruang.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ========================= MEDIA SOSIAL ========================= -->
<section class="social-section-modern">
    <div class="container social-container">

        <!-- Judul Section dengan Standar Tema -->
        <div class="gallery-header">
            <h2 class="gallery-title" style="font-size: 1.8rem !important;"> Media <span
                    class="text-maroon">Sosial</span></h2>
        </div>

        <!-- Daftar Ikon Media Sosial -->
        <div class="social-icons-modern">

            <!-- Instagram -->
            <a href="https://www.instagram.com/dinasarpus_semarang/" target="_blank" class="social-icon-btn instagram"
                aria-label="Instagram">
                <div class="social-glow"></div>
                <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                <span class="social-tooltip">Instagram</span>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/groups/dinasarpus.semarangkota" target="_blank"
                class="social-icon-btn facebook" aria-label="Facebook">
                <div class="social-glow"></div>
                <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                <span class="social-tooltip">Facebook</span>
            </a>

            <!-- X (Twitter) -->
            <a href="https://twitter.com/dinarpus_smg" target="_blank" class="social-icon-btn twitter"
                aria-label="X (Twitter)">
                <div class="social-glow"></div>
                <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                    <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                </svg>
                <span class="social-tooltip">X (Twitter)</span>
            </a>

            <!-- YouTube -->
            <a href="https://www.youtube.com/channel/UCKW_vxNCRgWO60Ny1wC_rUQ" target="_blank"
                class="social-icon-btn youtube" aria-label="YouTube">
                <div class="social-glow"></div>
                <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z">
                    </path>
                    <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor"></polygon>
                </svg>
                <span class="social-tooltip">YouTube</span>
            </a>

        </div>
    </div>
</section>
@include('layouts.footer')