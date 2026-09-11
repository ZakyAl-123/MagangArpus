<x-layout.app title="Galeri Video Publikasi | Dinas Arpusda Kota Semarang">
    <section class="video-gallery-section" aria-label="Galeri Video Publikasi dan Dokumentasi">
        <div class="container">
            <!-- Judul Section -->
            <div class="section-header">
                <div class="gallery-tagline">
                    <span class="line-accent" aria-hidden="true"></span>
                    <span>PUBLIKASI AUDIO VISUAL</span>
                </div>
                <h1 class="section-title">Video <span class="text-maroon">Arpusda</span></h1>
            </div>

            <!-- Grid Video YouTube -->
            <div class="video-grid">
                @foreach($videos as $video)
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe
                                src="{{ $video['embed_url'] }}"
                                title="{{ $video['title'] }}"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout.app>