<!-- Memanggil file header.blade.php -->
@include('layouts.header')

<main class="org-page">
    <div class="container">
        
        <!-- Bagian Header Halaman -->
        <div class="org-header">
            <div class="about-kp-tagline">
                <span class="line-accent"></span>
                Bagan Organisasi Dinas
            </div>
            <h1 class="org-title">Struktur Organisasi <span class="org-accent">Dinas Arsip & Perpustakaan</span></h1>
            <p class="org-desc">
                Berdasarkan Peraturan Walikota Semarang Nomor 112 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Sistem Kerja Dinas Arsip dan Perpustakaan Kota Semarang.
            </p>
        </div>

        <!-- Wadah Gambar Bagan Resmi -->
        <div class="org-image-container">
            <div class="org-image-card">
                <img src="{{ asset('asset/bagan.png') }}" alt="Bagan Struktur Organisasi Dinas Arsip dan Perpustakaan Kota Semarang" class="org-official-img">
            </div>
            
            <!-- Tombol Opsional jika ingin opsi download/buka gambar penuh -->
            <div class="org-actions">
                <a href="{{ asset('asset/bagan.png') }}" target="_blank" class="org-btn-view">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:18px;height:18px;vertical-align:-3px;margin-right:6px;"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                    Buka Gambar Ukuran Penuh
                </a>
            </div>
        </div>

    </div>
</main>

<!-- Memanggil file footer.blade.php -->
@include('layouts.footer')