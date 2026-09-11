@props([
    'address' => 'Jl. Prof. Sudarto No. 116, Kel. Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269',
    'hours' => 'Jam Layanan: Senin - Kamis (08.00 - 16.00 WIB) | Jumat (08.00 - 14.00 WIB)',
    'greeting' => 'Selamat datang di website resmi Dinas Arsip dan Perpustakaan Kota Semarang'
])

<div class="address-bar" aria-label="Informasi Alamat dan Jam Operasional">
    <div class="address-track">
        <!-- Set 1 -->
        <div class="address-content">
            <span>{{ $address }}</span>
            <span class="sep" aria-hidden="true">•</span>
            <span>{{ $hours }}</span>
            <span class="sep" aria-hidden="true">•</span>
            <span>{{ $greeting }}</span>
            <span class="sep" aria-hidden="true">•</span>
        </div>

        <!-- Set 2 (for seamless loop) -->
        <div class="address-content" aria-hidden="true">
            <span>{{ $address }}</span>
            <span class="sep">•</span>
            <span>{{ $hours }}</span>
            <span class="sep">•</span>
            <span>{{ $greeting }}</span>
            <span class="sep">•</span>
        </div>
    </div>
</div>
