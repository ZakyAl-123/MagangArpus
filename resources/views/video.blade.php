<!-- ========================= VIDEO GALERI SECTION ========================= -->
@include('layouts.header')
<section class="video-gallery-section">
    <div class="container">
        
        <!-- Judul Section -->
        <div class="gallery-header">
            <h2 class="gallery-title">Video <span class="text-maroon">Arpusda</span></h2>
        </div>

        <!-- Grid Video YouTube (Responsif & Tanpa Deskripsi) -->
        <div class="video-grid">
            
            <!-- Item Video 1 -->
            <div class="video-item">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/8cLyuxUIj_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Item Video 2 -->
            <div class="video-item">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/aTcjI4nnDnU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Item Video 3 -->
            <div class="video-item">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/gL81MXIIdOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
@include('layouts.footer')