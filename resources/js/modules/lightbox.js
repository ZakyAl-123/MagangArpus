/**
 * Lightbox Module
 * Accessible image modal viewer for photo galleries and historical archives.
 */
export function initLightbox() {
    let modal = document.getElementById('globalLightbox');

    // Create global lightbox container dynamically if not present
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'globalLightbox';
        modal.className = 'lightbox-modal';
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('aria-hidden', 'true');
        modal.innerHTML = `
            <div class="lightbox-backdrop"></div>
            <div class="lightbox-content-box">
                <button type="button" class="lightbox-close" aria-label="Tutup gambar">&times;</button>
                <div class="lightbox-img-wrapper">
                    <img id="lightboxImg" src="" alt="Preview Gambar" loading="eager" />
                </div>
                <div class="lightbox-text-info" id="lightboxInfo" style="display:none;">
                    <h3 id="lightboxTitle"></h3>
                    <p id="lightboxDesc"></p>
                </div>
            </div>
        `;
        document.body.appendChild(modal);
    }

    const lightboxImg = modal.querySelector('#lightboxImg');
    const lightboxTitle = modal.querySelector('#lightboxTitle');
    const lightboxDesc = modal.querySelector('#lightboxDesc');
    const lightboxInfo = modal.querySelector('#lightboxInfo');
    const closeBtn = modal.querySelector('.lightbox-close');
    const backdrop = modal.querySelector('.lightbox-backdrop');

    const openModal = (src, title = '', desc = '') => {
        if (!src) return;
        lightboxImg.src = src;
        lightboxImg.alt = title || 'Dokumentasi Dinas Arpusda';

        if (title || desc) {
            if (lightboxTitle) lightboxTitle.textContent = title;
            if (lightboxDesc) lightboxDesc.textContent = desc;
            if (lightboxInfo) lightboxInfo.style.display = 'block';
        } else {
            if (lightboxInfo) lightboxInfo.style.display = 'none';
        }

        modal.classList.add('show');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    };

    const closeModal = () => {
        modal.classList.remove('show');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        if (lightboxImg) lightboxImg.src = '';
    };

    // Close events
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    // Event Delegation: Listen for gallery clicks
    document.addEventListener('click', (e) => {
        const item = e.target.closest('[data-lightbox-src], .gallery-item, .coverflow-item');
        if (!item) return;

        let src = item.getAttribute('data-lightbox-src');
        let title = item.getAttribute('data-lightbox-title') || '';
        let desc = item.getAttribute('data-lightbox-desc') || '';

        if (!src) {
            const img = item.querySelector('img');
            if (img) {
                src = img.src;
                title = img.alt || '';
            }
        }

        if (src) {
            e.preventDefault();
            openModal(src, title, desc);
        }
    });

    // Expose global helper for backward-compatibility if needed
    window.openLightbox = openModal;
    window.closeLightbox = closeModal;
}
