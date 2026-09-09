@include('layouts.header')

<section class="vm-section">
    <div class="container vm-container">
        
        <!-- Bagian Header Halaman -->
        <div class="vm-header">
            <div class="about-kp-tagline">
                <span class="line-accent"></span>
                Rancangan RPJMD 2021-2026
</div>
            <h1 class="vm-title">Visi & Misi <span class="vm-accent">Kota Semarang</span></h1>
        </div>

        <div class="vm-grid">
            <!-- Kolom Kiri: VISI & Gambar Ilustrasi -->
            <div class="vm-left">
                <div class="vm-visi-card">
                    <div class="vm-label">VISI</div>
                    <h2 class="vm-visi-text">
                        "Terwujudnya Kota Semarang yang Semakin Hebat yang berlandaskan Pancasila, dalam Bingkai NKRI yang Ber-Bhinneka Tunggal Ika"
                    </h2>
                </div>
                
                <!-- Gambar pelengkap arsitektur/kota modern (Bisa diganti dengan gambar Semarang nyata) -->
                <div class="vm-image-wrapper">
                    <img src="{{ asset('asset/semarang.jpg') }}" alt="Ilustrasi Kota Semarang" class="vm-image">
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
                            Meningkatkan kualitas dan kapasitas Sumber Daya Manusia yang Unggul dan Produktif untuk mencapai kesejahteraan dan keadilan sosial.
                        </div>
                    </div>

                    <!-- Misi 2 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">02</div>
                        <div class="vm-misi-desc">
                            Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskan riset dan inovasi berdasar prinsip demokrasi ekonomi pancasila.
                        </div>
                    </div>

                    <!-- Misi 3 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">03</div>
                        <div class="vm-misi-desc">
                            Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan.
                        </div>
                    </div>

                    <!-- Misi 4 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">04</div>
                        <div class="vm-misi-desc">
                            Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota.
                        </div>
                    </div>

                    <!-- Misi 5 -->
                    <div class="vm-misi-item">
                        <div class="vm-misi-number">05</div>
                        <div class="vm-misi-desc">
                            Menjalankan reformasi birokrasi pemerintahan secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('layouts.footer')