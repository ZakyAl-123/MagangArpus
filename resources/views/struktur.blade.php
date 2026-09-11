<x-layout.app title="Struktur Organisasi | Dinas Arpusda Kota Semarang">
    <main class="org-page" aria-label="Bagan Struktur Organisasi">
        <div class="container">
            <!-- Header Halaman -->
            <div class="org-header">
                <div class="about-kp-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>{{ $struktur['tagline'] }}</span>
                </div>
                <h1 class="org-title">Struktur Organisasi <span class="org-accent">Dinas Arpusda</span></h1>
                <p class="org-desc">
                    {{ $struktur['legal'] }}
                </p>
            </div>

            <!-- Wadah Gambar Bagan Resmi -->
            <div class="org-image-container">
                <div class="org-image-card">
                    <img src="{{ asset($struktur['image']) }}" alt="Bagan Struktur Organisasi Dinas Arsip dan Perpustakaan Kota Semarang" class="org-official-img" loading="lazy">
                </div>

                <!-- Tombol Opsi Buka Gambar Penuh -->
                <div class="org-actions">
                    <x-ui.button :href="asset($struktur['image'])" target="_blank" variant="primary" size="md">
                        <x-slot:icon>
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </x-slot:icon>
                        Buka Gambar Ukuran Penuh
                    </x-ui.button>
                </div>
            </div>
        </div>
    </main>
</x-layout.app>