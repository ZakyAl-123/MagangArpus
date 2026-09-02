@include('layouts.header')

<section class="vm-section">
    <div class="container vm-container">
        
        <!-- Bagian Header Halaman -->
        <div class="vm-header">
            <span class="vm-subtitle">Rancangan RENSTRA 2021-2026</span>
            <h1 class="vm-title">Visi & Misi <span class="vm-accent">Badan Arsip dan Perpustakaan Kota Semarang</span></h1>
        </div>

        <div class="vm-grid">
            <!-- Kolom Kiri: VISI & Gambar Ilustrasi -->
            <div class="vm-left">
                <div class="vm-visi-card">
                    <div class="vm-label">VISI</div>
                    <h2 class="vm-visi-text">
                        "Terwujudnya Layanan Kearsipan dan Perpustakaan yang Atraktif Dalam Mendukung Semarang Semakin Hebat"
                    </h2>
                </div>
                <div class="vm-image-wrapper">
                    <img src="{{ asset('asset/arpus.jpg') }}" alt="Ilustrasi Kota Semarang" class="vm-image">
                    <div class="vm-image-overlay"></div>
                </div>
            </div>

            <!-- Kolom Kanan: MISI -->
            <div class="vm-right">
                <div class="vm-label">MISI</div>
                
                <div class="vm-misi-list">
                    <!-- Misi 1 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">01</div>
                        <div class="vm-misi-desc">
                            Meningkatkan kompetensi SDM kearsipan dan perpustakaan untuk optimalisasi pelayanan manajemen pemerintah dan masyarakat.
                        </div>
                    </div>

                    <!-- Misi 2 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">02</div>
                        <div class="vm-misi-desc">
                            Meningkatkan potensi serta daya saing kearsipan dan perpustakaan menuju digitalisasi layanan cerdas.
                        </div>
                    </div>

                    <!-- Misi 3 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">03</div>
                        <div class="vm-misi-desc">
                           Mewujudkan infrastruktur kearsipan dan perpustakaan yang berkualitas untuk mendukung kemajuan kota.
                        </div>
                    </div>

                    <!-- Misi 4 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">04</div>
                        <div class="vm-misi-desc">
                            Menjalankan reformasi birokrasi layanan kearsipan dan perpustakaan menuju Tata Kelola yang efektif dan efisien.
                        </div>
                    </div>

                    <!-- Misi 5 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">05</div>
                        <div class="vm-misi-desc">
                            Menjamin aksesibilitas layanan kearsipan dan perpustakaan bagi aparatur maupun masyarakat.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('layouts.footer')