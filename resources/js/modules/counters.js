/**
 * Counters Module
 * Uses IntersectionObserver to smoothly animate numbers when visible.
 */
export function initCounters() {
    const stats = document.querySelectorAll('.stat-number');
    if (!stats.length) return;

    const runCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target')) || 0;
        const separator = counter.getAttribute('data-separator') || '';
        const decimal = parseInt(counter.getAttribute('data-decimal'), 10) || 0;
        const suffix = counter.getAttribute('data-suffix') || '';

        let current = 0;
        const duration = 1800; // ms
        const frameRate = 1000 / 60;
        const totalFrames = Math.round(duration / frameRate);
        const increment = target / totalFrames;
        let frame = 0;

        const animate = () => {
            frame++;
            current += increment;

            if (frame >= totalFrames || current >= target) {
                current = target;
            }

            let formatted = current.toFixed(decimal);
            if (decimal > 0) {
                formatted = formatted.replace('.', ',');
            }
            if (separator && target >= 1000) {
                const parts = formatted.split(',');
                parts[0] = parseInt(parts[0], 10).toLocaleString('id-ID').replace(/,/g, separator);
                formatted = parts.join(',');
            }

            counter.innerText = formatted + suffix;

            if (frame < totalFrames && current < target) {
                requestAnimationFrame(animate);
            }
        };

        requestAnimationFrame(animate);
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    runCounter(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 });

        stats.forEach((stat) => observer.observe(stat));
    } else {
        // Fallback for browsers without IntersectionObserver
        stats.forEach((stat) => runCounter(stat));
    }
}
