<!-- Memanggil file header.blade.php -->
@include('layouts.header')

<main class="faq-page">
    <div class="container">
        
        <!-- Bagian Header Judul -->
        <div class="faq-header">
            <span class="faq-subtitle">Pusat Bantuan & Informasi</span>
            <h1 class="faq-title">FAQ <span class="faq-accent">Urusan Perpustakaan</span></h1>
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
                    <span class="acc-text">Perpustakaan yang ada di kota Semarang</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <ul class="faq-list">
                        <li>Perpustakaan Kota Semarang di jalan Pemuda 175</li>
                        <li>Perpustakaan Provinsi Jawa Tengah di Jl. Sriwijaya No.29a,Tegalsari, Kec. Candisari (50614)</li>
                    </ul>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">02</span>
                    <span class="acc-text">Jam layanan Perpustakaan Kota Semarang</span>
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

            <!-- Pertanyaan 3 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">03</span>
                    <span class="acc-text">Layanan yang ada di perpustakaan</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <ul class="faq-list">
                        <li>Buku Fisik</li>
                        <li>E-Book</li>
                        <li>Coworking Space</li>
                        <li>Bimbel Siswa SD</li>
                        <li>Bimbel</li>
                        <li>Story Telling</li>
                        <li>Mobil Pintar</li>
                        <li>Bimbingan Kepada Nasyarakat tentang pengolahan Buku Perpustakaan</li>
                    </ul>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">04</span>
                    <span class="acc-text">Siapa yang dapat menjadi anggota perpustakaan kota Semarang ?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>Semua warga negara Indonesia yang berdomisili di Kota Semarang dapat menjadi anggota perpustakaan kota Semarang.</p>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">05</span>
                    <span class="acc-text">Berapa  banyak koleksi yg dapat dipinjam oleh anggota perpustakaan ?</span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>Setiap anggota perpustakaan dapat meminjam maksimal 2 (dua) buku fisik dengan jangka waktu peminjaman selama 7 (tujuh) hari atau seminggu.</p>
                </div>
            </div>

            <!-- Pertanyaan 6 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">06</span>
                    <span class="acc-text">Berapa kali dapat dilakukan perpanjangan peminjaman buku ? </span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>Perpanjangan peminjaman buku dapat dilakukan maksimal 1 (satu) kali setelah masa peminjaman yang pertama.</p>
                </div>
            </div>

            <!-- Pertanyaan 7 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">07</span>
                    <span class="acc-text">Bagaimana cara dapat memanfaatkan layanan dan koleksi perpustakaan? </span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <p>harus memiliki Kartu Tanda Anggota. ,Kemudian untuk masuk ke perpustakaan setiap pengunjung harus melakukan identifikasi dengan mengisi daftar tamu pada terminal komputer yg tersedia di layanan.</p>
                </div>
            </div>

            <!-- Pertanyaan 8 -->
            <div class="accordion-item-mod">
                <button class="accordion-btn-mod" aria-expanded="false">
                    <span class="acc-num">08</span>
                    <span class="acc-text">Bagaimana cara menemukan buku perpustakaan? </span>
                    <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="accordion-panel-mod">
                    <ul class="faq-list">
                        <li>Dengan cara melakukan penelusuran melalui OPAC</li>
                        <li>Bila telah menemukan informasi buku yg diperlukan anda dapat melakukan pencarian ke tempat atau rak buku koleksi tersebut sesuai dengan nomer kode klasifikasi atau koleksi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Memanggil file footer.blade.php -->
@include('layouts.footer')