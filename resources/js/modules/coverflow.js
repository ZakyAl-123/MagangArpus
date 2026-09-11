/**
 * Coverflow Module
 * Smooth horizontal scroll and active item detection for archive documents.
 */
export function initCoverflow() {
    const track = document.getElementById('coverflowTrack');
    const prevBtn = document.querySelector('.coverflow-nav-btn.prev-btn');
    const nextBtn = document.querySelector('.coverflow-nav-btn.next-btn');

    if (!track) return;

    const items = track.querySelectorAll('.coverflow-item');
    if (!items.length) return;

    const updateActiveItem = () => {
        const trackRect = track.getBoundingClientRect();
        const trackCenter = trackRect.left + trackRect.width / 2;

        let closestItem = null;
        let minDistance = Infinity;

        items.forEach((item) => {
            const itemRect = item.getBoundingClientRect();
            const itemCenter = itemRect.left + itemRect.width / 2;
            const distance = Math.abs(trackCenter - itemCenter);

            if (distance < minDistance) {
                minDistance = distance;
                closestItem = item;
            }
        });

        items.forEach((item) => item.classList.remove('active'));
        if (closestItem) {
            closestItem.classList.add('active');
        }
    };

    let scrollTimeout = null;
    track.addEventListener('scroll', () => {
        if (scrollTimeout) cancelAnimationFrame(scrollTimeout);
        scrollTimeout = requestAnimationFrame(updateActiveItem);
    }, { passive: true });

    const scrollCardWidth = 320;

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            track.scrollBy({ left: scrollCardWidth, behavior: 'smooth' });
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -scrollCardWidth, behavior: 'smooth' });
        });
    }

    updateActiveItem();
}
