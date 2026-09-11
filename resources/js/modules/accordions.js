/**
 * Accordions Module
 * Accessible, animated accordions for FAQ and content toggles.
 */
export function initAccordions() {
    const accordionButtons = document.querySelectorAll('.accordion-btn-mod');
    if (!accordionButtons.length) return;

    accordionButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.accordion-item-mod');
            const panel = item ? item.querySelector('.accordion-panel-mod') : null;
            if (!panel) return;

            const isOpen = panel.classList.contains('open');

            // Close sibling items in the same container for clean UX
            const container = item.parentElement;
            if (container) {
                container.querySelectorAll('.accordion-panel-mod.open').forEach((openPanel) => {
                    if (openPanel !== panel) {
                        openPanel.classList.remove('open');
                        openPanel.hidden = true;
                        const prevBtn = openPanel.closest('.accordion-item-mod')?.querySelector('.accordion-btn-mod');
                        if (prevBtn) prevBtn.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Toggle current
            if (isOpen) {
                panel.classList.remove('open');
                panel.hidden = true;
                btn.setAttribute('aria-expanded', 'false');
            } else {
                panel.classList.add('open');
                panel.hidden = false;
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
}
