<x-layout.app title="Hubungi Kami & Informasi Kantor | Dinas Arpusda Kota Semarang">
    <section class="kontak-section-modern" aria-label="Kontak dan Lokasi Dinas">
        <div class="container kontak-container">
            <!-- Header Section -->
            <div class="section-header">
                <div class="gallery-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>INFORMASI LOKASI & WAKTU</span>
                </div>
                <h1 class="section-title">Hubungi <span class="text-maroon">Kami</span></h1>
            </div>

            <!-- Flash Message Notification -->
            @if(session('success'))
                <x-ui.alert type="success">
                    {{ session('success') }}
                </x-ui.alert>
            @endif

            <!-- Grid Utama (Peta & Detail Informasi) -->
            <div class="kontak-grid">
                <!-- Kolom Kiri: Peta Google Maps -->
                <div class="kontak-map-wrapper">
                    <div class="map-responsive">
                        <iframe
                            src="{{ $info['maps_embed'] }}"
                            title="Lokasi Kantor Dinas Arsip dan Perpustakaan Kota Semarang di Google Maps"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Kolom Kanan: Informasi Kantor & Jam Kerja -->
                <div class="kontak-info-card">
                    <h2 class="kontak-office-title">{{ $info['nama_instansi'] }}</h2>

                    <!-- Alamat Kantor -->
                    <div class="kontak-group">
                        <h3 class="kontak-label">Alamat Kantor :</h3>
                        <p class="kontak-text">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>{{ $info['alamat'] }}</span>
                        </p>
                    </div>

                    <!-- Telepon & Email -->
                    <div class="kontak-group">
                        <h3 class="kontak-label">Kontak & Email :</h3>
                        <p class="kontak-text">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $info['telepon']) }}">{{ $info['telepon'] }}</a>
                        </p>
                        <p class="kontak-text" style="margin-top: 8px;">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:{{ $info['email'] }}">{{ $info['email'] }}</a>
                        </p>
                    </div>

                    <!-- Jam Kerja -->
                    <div class="kontak-group">
                        <h3 class="kontak-label">Jam Operasional Pelayanan :</h3>
                        <ul class="jam-kerja-list">
                            @foreach($info['jam_kerja'] as $jk)
                                <li>
                                    <span>{{ $jk['hari'] }}</span>
                                    <strong>{{ $jk['jam'] }}</strong>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Zona Waktu Realtime Strip -->
            <div class="live-clock-strip" aria-label="Waktu Realtime Indonesia">
                <div class="clock-box date-box">
                    <span class="tz-label">TANGGAL HARI INI</span>
                    <span id="current-date">-- -------- ----</span>
                </div>
                <div class="clock-box">
                    <span class="tz-label">WIB (UTC+7)</span>
                    <span id="clock-wib">--:--:--</span>
                </div>
                <div class="clock-box">
                    <span class="tz-label">WITA (UTC+8)</span>
                    <span id="clock-wita">--:--:--</span>
                </div>
                <div class="clock-box">
                    <span class="tz-label">WIT (UTC+9)</span>
                    <span id="clock-wit">--:--:--</span>
                </div>
            </div>

            <!-- Form Kirim Pesan & Pengaduan -->
            <div class="contact-form-card" aria-label="Formulir Pertanyaan & Pengaduan">
                <h2 class="section-title" style="font-size:1.6rem; margin-bottom:8px;">Kirim <span class="text-maroon">Pesan & Pengaduan</span></h2>
                <p style="color:var(--text-muted); margin-bottom:24px;">Silakan sampaikan pertanyaan atau masukan Anda terkait layanan kearsipan dan perpustakaan melalui formulir di bawah ini.</p>

                <form action="{{ route('kontak.submit') }}" method="POST" class="contact-form">
                    @csrf
                    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
                        <x-ui.form-input
                            name="nama"
                            label="Nama Lengkap"
                            placeholder="Masukkan nama lengkap Anda..."
                            required
                        />

                        <x-ui.form-input
                            name="email"
                            type="email"
                            label="Alamat Email"
                            placeholder="nama@email.com"
                            required
                        />
                    </div>

                    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
                        <x-ui.form-input
                            name="telepon"
                            label="Nomor Telepon / WhatsApp (Opsional)"
                            placeholder="081234567890"
                        />

                        <x-ui.form-input
                            name="subjek"
                            label="Subjek / Kategori Pesan"
                            placeholder="Contoh: Permohonan Penelusuran Arsip, Keanggotaan Perpus"
                            required
                        />
                    </div>

                    <x-ui.form-input
                        name="pesan"
                        type="textarea"
                        label="Isi Pesan / Pertanyaan"
                        placeholder="Tuliskan pesan, permohonan informasi, atau pengaduan Anda secara detail..."
                        rows="5"
                        required
                    />

                    <div style="margin-top: 10px;">
                        <x-ui.button type="submit" variant="primary" size="md">
                            Kirim Pesan Sekarang
                        </x-ui.button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout.app>