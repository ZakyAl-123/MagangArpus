<!-- ========================= GALERI FOTO SECTION ========================= -->
@include('layouts.header')
<section class="gallery-section">
    <div class="container">
        
        <!-- Judul Section -->
        <div class="gallery-header">
            <h2 class="gallery-title">Galeri Foto <span class="text-maroon">Arpusda</span></h2>
        </div>

        <div class="gallery-grid">
            
            <!-- Item Foto 1 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Dokumentasi 1" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Item Foto 2 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/bakgron.png') }}" alt="Dokumentasi 2" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Item Foto 3 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Dokumentasi 3" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Item Foto 4 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/bakgron.png') }}" alt="Dokumentasi 4" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Item Foto 5 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/Card Background Image.png') }}" alt="Dokumentasi 5" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Item Foto 6 -->
            <div class="gallery-item">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('asset/bakgron.png') }}" alt="Dokumentasi 6" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal Lightbox untuk Zoom Foto -->
<div id="imageLightbox" class="lightbox-modal">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightboxImg">
</div>
@include('layouts.footer')