<!-- ========================= HUBUNGI KAMI SECTION ========================= -->
@include('layouts.header')
<section class="kontak-section-modern">
    <div class="container kontak-container">

        <!-- Header Section -->
        <div class="gallery-header">
            <div class="gallery-tagline">
                <span class="line-accent"></span>
                INFORMASI LOKASI & WAKTU
            </div>
            <h2 class="gallery-title">Hubungi <span class="text-maroon">Kami</span></h2>
        </div>

        <!-- Grid Utama (Peta & Detail Informasi) -->
        <div class="kontak-grid">

            <!-- Kolom Kiri: Peta Google Maps Iframe -->
            <div class="kontak-map-wrapper">
                <div class="map-responsive">
                    <!-- Ganti URL iframe src dengan link embed Google My Maps / Google Maps kantor Dinarpus Semarang -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.627836398766!2d110.42562647475825!3d-7.052942492949373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ddd95603f%3A0x6b3412e6b2ea1db8!2sDinas%20Arsip%20dan%20Perpustakaan%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1788937538961!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin" width="100%" height="100%" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Kolom Kanan: Informasi Kantor & Jam Kerja -->
            <div class="kontak-info-card">
                <h3 class="kontak-office-title">DINAS KEARSIPAN DAN PERPUSTAKAAN KOTA SEMARANG</h3>

                <!-- Alamat Kantor -->
                <div class="kontak-group">
                    <h4 class="kontak-label">Alamat Kantor :</h4>
                    <p class="kontak-text">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Jl. Prof. Sudarto No. 116, Kel. Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269
                    </p>
                </div>

                <!-- Telepon & Email -->
                <div class="kontak-group">
                    <h4 class="kontak-label">Kontak & Email :</h4>
                    <p class="kontak-text">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        024 7466215
                    </p>
                    <p class="kontak-text">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        dinas_arpus@semarangkota.go.id
                    </p>
                </div>

                <!-- Jam Kerja -->
                <div class="kontak-group">
                    <h4 class="kontak-label">Jam Kerja :</h4>
                    <ul class="jam-kerja-list">
                        <li>
                            <span>Senin - Kamis</span>
                            <strong>8:00 - 16:00</strong>
                        </li>
                        <li>
                            <span>Jumat</span>
                            <strong>8:00 - 14:00</strong>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Widget Zona Waktu Realtime di Bawah (WIB, WITA, WIT) -->
        <div class="live-clock-strip">
            <div class="clock-box date-box">
                <span id="current-date">-- -------- ----</span>
            </div>
            <div class="clock-box">
                <span class="tz-label">WIB</span>
                <span id="clock-wib">--:--:--</span>
            </div>
            <div class="clock-box">
                <span class="tz-label">WITA</span>
                <span id="clock-wita">--:--:--</span>
            </div>
            <div class="clock-box">
                <span class="tz-label">WIT</span>
                <span id="clock-wit">--:--:--</span>
            </div>
        </div>

    </div>
</section>
@include('layouts.footer')