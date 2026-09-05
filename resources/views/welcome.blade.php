@include('layouts.header')
<section class="hero-split-exact">
    <!-- Bagian Atas Putih yang lebarnya menutupi setengah foto -->
    <div class="hero-white-box">
        <div class="container showcase-container">
            <div class="showcase-top">
                <div class="showcase-top-left">
                    <div class="showcase-tagline dark-tagline">
                        <span class="line-accent-dark"></span>
                        PORTAL RESMI DINAS ARSIP & PERPUSTAKAAN
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
                        Menyediakan keterbukaan informasi publik, kemudahan akses koleksi pustaka, serta pengelolaan arsip daerah yang modern, akurat, dan terpercaya bagi masyarakat Kota Semarang.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Foto & Statistik (Ditarik ke atas setengah badan agar terpotong pas di tengah garis merah) -->
    <div class="container showcase-container">
        <div class="showcase-bottom-overlapping">
            <div class="showcase-image-wrapper">
                <img src="{{ asset('asset/Card Background Image.png') }}" alt="Gedung dan Aktivitas Dinas Arsip" class="showcase-main-img">
            </div>
            <div class="showcase-stats-card">
                <div class="stat-box-item">
                    <div class="stat-number">10K<span class="plus">+</span></div>
                    <div class="stat-title">Arsip & Dokumen</div>
                </div>
                <div class="stat-box-item">
                    <div class="stat-number">30+</div>
                    <div class="stat-title">Tahun Pengabdian</div>
                </div>
                <div class="stat-box-item">
                    <div class="stat-number">5K<span class="plus">+</span></div>
                    <div class="stat-title">Pengunjung & Anggota</div>
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
      <span></span> <!-- Pemisah antar kalimat -->
      <span>Jam Layanan: Senin - Kamis (08.00 - 16.00 WIB) - Jumat: 08.00 - 14.00 WIB</span>
      <span></span>
      <span>Selamat datang di portal resmi Dinas Arsip dan Perpustakaan</span>
      <span></span>
    </div>

    <!-- SET 2: Duplikat Persis dari Set 1 (Wajib ada) -->
    <div class="address-content">
      <span>Jl. Prof. Sudarto No. 116, Kel.Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269</span>
      <span></span> 
      <span>Jam Layanan: Senin - Kamis (08.00 - 16.00 WIB) - Jumat: 08.00 - 14.00 WIB</span>
      <span></span>
      <span>Selamat datang di portal resmi Dinas Arsip dan Perpustakaan</span>
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
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
          </div>
          <h3 class="menu-card-title">AGENDA</h3>
        </div>
        <div class="menu-card-links">
          <a href="#">Acara Dinas</a>
          <a href="#">Acara Pemkot</a>
          <a href="#">Acara Perpusnas</a>
          <a href="#">Acara ANRI</a>
        </div>
      </div>

      <!-- 2. MEDIA SIAR -->
      <div class="menu-card-mod">
        <div class="menu-card-top">
          <div class="menu-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
          </div>
          <h3 class="menu-card-title">MEDIA SIAR</h3>
        </div>
        <div class="menu-card-links">
          <a href="#">Sobat Buku</a>
          <a href="#">Video Converse</a>
          <a href="#">E-Radio</a>
          <a href="#">Streaming</a>
        </div>
      </div>

      <!-- 3. GALERI -->
      <div class="menu-card-mod">
        <div class="menu-card-top">
          <div class="menu-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
          </div>
          <h3 class="menu-card-title">GALERI</h3>
        </div>
        <div class="menu-card-links">
          <a href="#">Foto</a>
          <a href="#">Video</a>
          <a href="#">Brosur / Poster</a>
          <a href="#">Arsip Dokumenter</a>
        </div>
      </div>

      <!-- 4. SIBAJA (Pencarian Istilah) -->
      <div class="menu-card-mod sibaja-card">
        <div class="sibaja-content">
          <h3 class="sibaja-title">Sibaja</h3>
          <p class="sibaja-sub">(Senarai Istilah Budaya Jawa)</p>
        </div>
        <div class="sibaja-search-box">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <label for="sibaja-search" class="visually-hidden">Cari istilah budaya Jawa</label>
          <input id="sibaja-search" type="text" placeholder="Cari istilah...">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v1a7 7 0 0 1-14 0v-1"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- ========================= GELIAT BERGEMA ========================= -->
  <section class="geliat-modern">
  <div class="container">
    
    <!-- Header Section -->
    <div class="geliat-header">
      <h2 class="geliat__title">GELIAT BERGEMA</h2>
      <div class="geliat__subs">
        <p>Gerakan Literasi Atraktif Bergerak Bersama</p>
        <p>Gerakan Peduli Arsip Terpadu Bergerak Bersama</p>
      </div>
    </div>

    <!-- Grid Menu (Total 6 Menu termasuk SABDA) -->
    <div class="geliat__actions">
      
      <!-- 1. Cari Buku -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        </div>
        <span class="geliat__action-label">Cari Buku</span>
      </a>

      <!-- 2. Cari Arsip -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
        </div>
        <span class="geliat__action-label">Cari Arsip</span>
      </a>

      <!-- 3. Cari Peraturan -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
        <span class="geliat__action-label">Cari Peraturan</span>
      </a>

      <!-- 4. Usulan Buku -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        </div>
        <span class="geliat__action-label">Usulan Buku</span>
      </a>

      <!-- 5. Donasi Buku -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
        <span class="geliat__action-label">Donasi Buku</span>
      </a>

      <!-- 6. Menu Baru: SABDA -->
      <!-- 6. Menu Baru: SABDA (Menggunakan Gambar) -->
      <a class="geliat__action-card" href="#">
        <div class="geliat__action-icon img-icon">
          <img src="{{ asset('asset/sabda.png') }}" alt="SABDA">
        </div>
        <span class="geliat__action-label">SABDA</span>
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
        <a href="https://sibooky.semarangkota.go.id/" target="_blank" class="btn-lihat-semua">Lihat semua &gt;</a>
      </div>
    </div>

    <!-- Grid Buku Modern -->
    <div class="book-grid-modern">
      
      <!-- Buku 1 -->
      <article class="book-card-mod">
        <div class="book-thumb">
          <img src="{{ asset('asset/buku1.jpg') }}" alt="sejarah">
        </div>
        <div class="book-info">
          <h4 class="book-title">Semarang dari Masa ke Masa</h4>
          <p class="book-author">Badan Arpus Provinsi Jateng</p>
          <span class="book-views">👁 138</span>
        </div>
        <div class="book-actions">
          <button class="action-btn" title="Detail"><i class="icon-info">ℹ</i></button>
          <button class="action-btn" title="Suka"><i class="icon-love">❤</i></button>
          <button class="action-btn bookmark" title="Simpan"><i class="icon-bookmark">🔖</i></button>
        </div>
      </article>

      <!-- Buku 2 -->
      <article class="book-card-mod">
        <div class="book-thumb">
          <img src="{{ asset('asset/tradisingaliyan.jpg') }}" alt="Pulang">
        </div>
        <div class="book-info">
          <h4 class="book-title">Tradisi dari Ngaliyan</h4>
          <p class="book-author">Sucipto Hadi Purnomo</p>
          <span class="book-views">👁 190</span>
        </div>
        <div class="book-actions">
          <button class="action-btn"><i class="icon-info">ℹ</i></button>
          <button class="action-btn"><i class="icon-love">❤</i></button>
          <button class="action-btn bookmark"><i class="icon-bookmark">🔖</i></button>
        </div>
      </article>

      <!-- Buku 3 -->
      <article class="book-card-mod">
        <div class="book-thumb">
          <img src="{{ asset('asset/tembalang.jpg') }}" alt="Tentang Kamu">
        </div>
        <div class="book-info">
          <h4 class="book-title">Tradisi dari Tembalang</h4>
          <p class="book-author">Sucipto Hadi Purnomo</p>
          <span class="book-views">👁 102</span>
        </div>
        <div class="book-actions">
          <button class="action-btn"><i class="icon-info">ℹ</i></button>
          <button class="action-btn"><i class="icon-love">❤</i></button>
          <button class="action-btn bookmark"><i class="icon-bookmark">🔖</i></button>
        </div>
      </article>

      <!-- Buku 4 -->
      <article class="book-card-mod">
        <div class="book-thumb">
          <img src="{{ asset('asset/heart.jpg') }}" alt="Rindu">
        </div>
        <div class="book-info">
          <h4 class="book-title">Silent Heart</h4>
          <p class="book-author">Rudiyant</p>
          <span class="book-views">👁 96</span>
        </div>
        <div class="book-actions">
          <button class="action-btn"><i class="icon-info">ℹ</i></button>
          <button class="action-btn"><i class="icon-love">❤</i></button>
          <button class="action-btn bookmark"><i class="icon-bookmark">🔖</i></button>
        </div>
      </article>

      <!-- Buku 5 -->
      <article class="book-card-mod">
        <div class="book-thumb">
          <img src="{{ asset('asset/kubur.jpg') }}" alt="Hujan">
        </div>
        <div class="book-info">
          <h4 class="book-title">1001 Siksa Kubur</h4>
          <p class="book-author">Abdul Rahman</p>
          <span class="book-views">👁 148</span>
        </div>
        <div class="book-actions">
          <button class="action-btn"><i class="icon-info">ℹ</i></button>
          <button class="action-btn"><i class="icon-love">❤</i></button>
          <button class="action-btn bookmark"><i class="icon-bookmark">🔖</i></button>
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
          <a href="#" class="btn-lihat-semua">Lihat semua &gt;</a>
        </div>
      </div>

      <div class="berita-grid-modern">
        
        <!-- Berita 1 -->
        <article class="berita-card-mod">
          <div class="berita-thumb">
            <img src="{{ asset('asset/berita-1.jpg') }}" alt="Foto Berita">
          </div>
          <div class="berita-info">
            <h4 class="berita-title">BANGUNAN LAWANG SEWU SEMARANG TERKINI - Wisata Kota Semarang</h4>
            <p class="berita-desc">Terimakasih buat teman-teman yang sudah nonton video ini mengenai cerita Backpacker Keliling Indonesia dari Sabang ke...</p>
            <span class="berita-date">14 Mei 2025</span>
          </div>
        </article>

        <!-- Berita 2 -->
        <article class="berita-card-mod">
          <div class="berita-thumb">
            <img src="{{ asset('asset/berita-2.jpg') }}" alt="Foto Berita">
          </div>
          <div class="berita-info">
            <h4 class="berita-title">Trip Tektok Seharian Keliling Kota Semarang</h4>
            <p class="berita-desc">Ini adalah pertama kalinya saya berada di Kota Semarang, dan hari ini kita bakal seharian penuh jalan-jalan keliling kota, mengunjun...</p>
            <span class="berita-date">14 Mei 2025</span>
          </div>
        </article>

        <!-- Berita 3 -->
        <article class="berita-card-mod">
          <div class="berita-thumb">
            <img src="{{ asset('asset/berita-3.jpg') }}" alt="Foto Berita">
          </div>
          <div class="berita-info">
            <h4 class="berita-title">CIMORY SEMARANG Selalu Bikin Penasaran ! || Wisata Cimory Semarang</h4>
            <p class="berita-desc">Ayo kita cek ada apa yang baru di Cimory Semarang! Wisata Cimory Dairyland On The Valley Semarang ini selalu melakukan...</p>
            <span class="berita-date">14 Mei 2025</span>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- ========================= BERITA MEDIA ========================= -->
<section class="container" style="margin: 40px auto;">
  <div class="media-strip-modern">
    <h3 class="media-strip__title">Berita Media</h3>
    <div class="media-strip__logos">
      
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
      <a href="https://search.kompas.com/search/?q=semarang&submit=Submit+Query" target="_blank" class="media-card-btn">
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

  <!-- ========================= LAYANAN PERPUSNAS ========================= -->
  <section class="layanan-modern">
  <div class="container">
    <h2 class="layanan__title">LAYANAN PERPUSTAKAAN NASIONAL REPUBLIK INDONESIA</h2>
    
    <div class="layanan__grid">
      
      <!-- Item 1 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">IPUSNAS</span>
          <span class="layanan__pill-sub">Perpustakaan Digital Bergerak</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

      <!-- Item 2 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">OPAC</span>
          <span class="layanan__pill-sub">Online Public Access Catalog</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

      <!-- Item 3 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">E-RES</span>
          <span class="layanan__pill-sub">Koleksi Digital Berlangganan</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

      <!-- Item 4 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">IOS</span>
          <span class="layanan__pill-sub">Indonesia OneSearch by Perpusnas</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

      <!-- Item 5 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">ISBN</span>
          <span class="layanan__pill-sub">International Standard Book Number</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

      <!-- Item 6 -->
      <a class="layanan-card" href="#" target="_blank">
        <div class="layanan-card__info">
          <span class="layanan__pill-title">K-OL</span>
          <span class="layanan__pill-sub">Keanggotaan Online Perpusnas</span>
        </div>
        <div class="layanan-card__icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
        </div>
      </a>

    </div>
  </div>
</section>

  <!-- ========================= APLIKASI KAMI ========================= -->
  <section class="aplikasi">
    <div class="container">
      <h2 class="aplikasi__title">APLIKASI KAMI</h2>
      <div class="aplikasi__logos">
        
        <!-- Logo Selaras -->
        <div class="aplikasi__logo">
          <a href="https://selaras.semarangkota.go.id/" target="_blank" class="aplikasi__logo-icon">
            <img src="{{ asset('asset/selaras.png') }}" alt="Logo Aplikasi Selaras" />
          </a>
        </div>
        
        <!-- Logo Si Booky -->
        <div class="aplikasi__logo">
          <a href="https://sibooky.semarangkota.go.id/" target="_blank" class="aplikasi__logo-icon">
            <img src="{{ asset('asset/sibooky.png') }}" alt="Logo Aplikasi Si Booky" />
          </a>
        </div>

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
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="accordion-panel-mod">
            <p>Informasi seputar pendaftaran dan keanggotaan perpustakaan.</p>
          </div>
        </div>

        <div class="accordion-item-mod">
          <button class="accordion-btn-mod" aria-expanded="false">
            <span class="acc-num">02</span>
            <span class="acc-text">Pustakawan</span>
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="accordion-panel-mod">
            <p>Daftar dan profil pustakawan Dinas Arsip dan Perpustakaan.</p>
          </div>
        </div>

        <div class="accordion-item-mod">
          <button class="accordion-btn-mod" aria-expanded="false">
            <span class="acc-num">03</span>
            <span class="acc-text">Statistik</span>
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="accordion-panel-mod">
            <p>Statistik kunjungan dan koleksi perpustakaan.</p>
          </div>
        </div>

        <div class="accordion-item-mod">
          <button class="accordion-btn-mod" aria-expanded="false">
            <span class="acc-num">04</span>
            <span class="acc-text">Survey Layanan</span>
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="accordion-panel-mod">
            <p>Isi survey kepuasan layanan kami.</p>
          </div>
        </div>

        <div class="accordion-item-mod">
          <button class="accordion-btn-mod" aria-expanded="false">
            <span class="acc-num">05</span>
            <span class="acc-text">Sapa Mbak Ita</span>
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
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
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="accordion-panel-mod">
            <p>Kunjungi loket keanggotaan dengan membawa KTP/KIA.</p>
          </div>
        </div>

        <div class="accordion-item-mod">
  <button class="accordion-btn-mod" aria-expanded="false">
    <span class="acc-num">02</span>
    <span class="acc-text">Cara mengajukan permohonan arsip?</span>
    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
  </button>
  <div class="accordion-panel-mod">
    <p>Ajukan online lewat menu Layanan Arsip, isi formulir, dan lacak status langsung.</p>
  </div>
</div>

        <div class="accordion-item-mod">
          <button class="accordion-btn-mod" aria-expanded="false">
            <span class="acc-num">03</span>
            <span class="acc-text">Apa syarat booking ruang baca?</span>
            <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
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
  <section class="social-section">
    <div class="container">
      <h3 class="social-section__title">Media <span style="text-decoration:underline;">Sosial</span></h3>
      <div class="social-icons">
        <a href="#" aria-label="Instagram"><svg class="icon">
            <use href="#icon-instagram" />
          </svg></a>
        <a href="#" aria-label="Facebook"><svg class="icon">
            <use href="#icon-facebook" />
          </svg></a>
        <a href="#" aria-label="X (Twitter)"><svg class="icon">
            <use href="#icon-x" />
          </svg></a>
        <a href="#" aria-label="YouTube"><svg class="icon">
            <use href="#icon-youtube" />
          </svg></a>
      </div>
    </div>
  </section>
@include('layouts.footer')
