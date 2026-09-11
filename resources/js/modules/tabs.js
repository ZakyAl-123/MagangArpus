/**
 * Tabs Module
 * Handles catalog tab switching on the home page.
 */
export function initTabs() {
    const tabs = document.querySelectorAll('.mk-tab');
    const panels = document.querySelectorAll('.mk-panel');
    if (!tabs.length || !panels.length) return;

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const targetId = tab.getAttribute('data-target');

            tabs.forEach((t) => {
                t.classList.remove('is-active');
                t.setAttribute('aria-selected', 'false');
            });

            tab.classList.add('is-active');
            tab.setAttribute('aria-selected', 'true');

            panels.forEach((panel) => {
                if (panel.id === targetId) {
                    panel.classList.add('is-active');
                    panel.hidden = false;
                } else {
                    panel.classList.remove('is-active');
                    panel.hidden = true;
                }
            });
        });
    });
}
