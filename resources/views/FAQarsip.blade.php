<!-- Memanggil file header.blade.php -->
@include('layouts.header')

<main class="faq-page">
    <div class="container">
        
        <!-- Bagian Header Judul -->
        <div class="faq-header">
            <span class="faq-subtitle">Pusat Bantuan & Informasi</span>
            <h1 class="faq-title">FAQ <span class="faq-accent">Urusan Kearsipan</span></h1>
            <p class="faq-desc">
                Temukan informasi lengkap seputar layanan, syarat peminjaman, serta operasional gedung arsip Dinas Arsip dan Perpustakaan Kota Semarang.
            </p>
        </div>

        <!-- Daftar Accordion FAQ -->
        <div class="faq-container-mod">
            
            <!-- Pertanyaan 1 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">01</span>
                    <span class="acc-text">Berapa nomor telepon gedung arsip?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>024-7466 215</p>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">02</span>
                    <span class="acc-text">Dimana alamat Gedung Arsip Kota Semarang?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>Di Jl. Prof. Soedarto 116 B, Sumurboto, Kecamatan Banyumanik, Semarang</p>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">03</span>
                    <span class="acc-text">Apa saja syarat peminjaman arsip?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <ul class="faq-list">
                        <li>Fotokopi KTP</li>
                        <li>Fotokopi Sertifikat</li>
                        <li>Surat Kuasa (apabila diwakilkan)</li>
                        <li>Fotokopi arsip yang akan dicari</li>
                    </ul>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">04</span>
                    <span class="acc-text">Hari apa saja jam pelayanan kearsipan?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <div class="jam-pelayanan">
                        <p><strong>Waktu Normal:</strong></p>
                        <ul>
                            <li>Senin - Kamis: 08.00 s/d 15.00 WIB</li>
                            <li>Jumat: 08.00 s/d 11.00 WIB</li>
                        </ul>
                        <p style="margin-top: 10px;"><strong>Masa Pandemi:</strong></p>
                        <ul>
                            <li>Senin - Kamis: 08.00 s/d 14.00 WIB</li>
                            <li>Jumat: 08.00 s/d 11.00 WIB</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">05</span>
                    <span class="acc-text">Apa saja jenis layanan di gedung arsip?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <ol class="faq-numbered-list">
                        <li>Layanan informasi kearsipan</li>
                        <li>Layanan penyimpanan dan pemeliharaan arsip</li>
                        <li>Layanan konsultasi kearsipan</li>
                        <li>Layanan penataan arsip</li>
                        <li>Layanan wisata arsip</li>
                        <li>Layanan magang</li>
                    </ol>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">06</span>
                    <span class="acc-text">Di mana saya dapat legalisir arsip yang saya pinjam?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>Di dinas pencipta arsip. Dinas Arpus hanya menyimpan dan merawat arsip dari OPD lain dan tidak memiliki kewenangan melegalisir arsip yang akan dipinjam.</p>
                </div>
            </div>

        </div>

    </div>
</main>

<!-- Memanggil file footer.blade.php -->
@include('layouts.footer')