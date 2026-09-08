<!-- ========================= TENTANG KEARSIPAN & PERPUSTAKAAN SECTION ========================= -->
@include('layouts.header')
<section class="about-kp-section">
    <div class="container about-kp-container">
        
        <!-- Header Section -->
        <div class="about-kp-header">
            <div class="about-kp-tagline">
                <span class="line-accent"></span>
                PROFIL & DEFINISI
            </div>
            <h2 class="about-kp-main-title">Mengenal Lebih Dekat <span class="text-maroon">Kearsipan & Perpustakaan</span></h2>
        </div>

        <!-- Grid Dua Kolom (Kearsipan & Perpustakaan) -->
        <div class="about-kp-grid">
            
            <!-- Kolom 1: Kearsipan -->
            <div class="about-kp-card">
                <div class="about-kp-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Ilustrasi Kearsipan" class="about-kp-img">
                    <div class="about-kp-badge">Arsip Daerah</div>
                </div>
                <div class="about-kp-content">
                    <h3 class="about-kp-title">Kearsipan</h3>
                    <p class="about-kp-text">
                        adalah hal-hal yang berkenaan dengan arsip. Arsip adalah rekaman kegiatan atau peristiwa dalam berbagai bentuk dan media sesuai dengan perkembangan teknologi informasi dan komunikasi yang dibuat dan diterima oleh lembaga negara, pemerintahan daerah, lembaga pendidikan, perusahaan, organisasi politik, organisasi kemasyarakatan, dan perseorangan dalam pelaksanaan kehidupan bermasyarakat berbangsa dan bernegara.
                    </p>
                    <p class="about-kp-citation">(UU No. 43 Tahun 2009)</p>
                    <p class="about-kp-text highlight-text">
                        Arsip daerah adalah lembaga kearsipan berbentuk satuan kerja perangkat daerah yang melaksanakan tugas pemerintahan di bidang kearsipan pemerintahan kota yang berkedudukan di kota.
                    </p>
                </div>
            </div>

            <!-- Kolom 2: Perpustakaan -->
            <div class="about-kp-card">
                <div class="about-kp-img-wrapper">
                    <img src="{{ asset('asset/bakgron.png') }}" alt="Ilustrasi Perpustakaan" class="about-kp-img">
                    <div class="about-kp-badge gold-badge">Pustaka & Digital</div>
                </div>
                <div class="about-kp-content">
                    <h3 class="about-kp-title">Perpustakaan</h3>
                    <p class="about-kp-text">
                        adalah institusi yang mengumpulkan pengetahuan tercetak dan terekam, mengelolanya dengan cara khusus guna memenuhi kebutuhan intelektualitas para penggunanya melalui beragam cara interaksi pengetahuan.
                    </p>
                    <p class="about-kp-citation">(UU No. 43 Tahun 2007)</p>
                    <p class="about-kp-text highlight-text">
                        Perpustakaan modern adalah merupakan tempat untuk mengakses informasi dalam format atau bentuk apapun, apakah informasi itu disimpan dalam gedung perpustakaan tersebut atau tidak dalam gedung perpustakaan. Dalam perpustakaan modern selain kumpulan buku tercetak, sebagian buku dan koleksinya ada dalam perpustakaan digital (dalam bentuk data yang bisa diakses lewat jaringan komputer/daring).
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@include('layouts.footer')