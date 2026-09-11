<x-layout.app title="Tugas Pokok dan Fungsi | Dinas Arpusda Kota Semarang">
    <main class="tupoksi-page" aria-label="Tugas Pokok dan Fungsi">
        <div class="container">
            <!-- Header Judul -->
            <div class="section-header">
                <div class="about-kp-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>TUGAS POKOK DAN FUNGSI</span>
                </div>
                <h1 class="section-title">Tupoksi <span class="text-maroon">Dinas Arpusda</span></h1>
                <p style="color:var(--text-muted); margin-top:10px;">
                    Dalam melaksanakan tugas pokoknya, Dinas Arsip dan Perpustakaan Kota Semarang menyelenggarakan fungsi-fungsi utama sebagai berikut:
                </p>
            </div>

            <!-- Daftar Fungsi (Grid Card Modern) -->
            <div class="tupoksi-grid">
                @foreach($tupoksiList as $item)
                    <div class="tupoksi-card">
                        <div class="card-num">{{ $item['num'] }}</div>
                        <div class="card-text">
                            {{ $item['text'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout.app>