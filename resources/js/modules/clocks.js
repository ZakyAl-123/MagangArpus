/**
 * Clocks Module
 * Renders live real-time Indonesian date and timezone clocks (WIB, WITA, WIT).
 */
export function initClocks() {
    const dateElement = document.getElementById('current-date');
    const wibElement = document.getElementById('clock-wib');
    const witaElement = document.getElementById('clock-wita');
    const witElement = document.getElementById('clock-wit');

    if (!dateElement && !wibElement && !witaElement && !witElement) {
        return;
    }

    const updateTime = () => {
        const now = new Date();

        if (dateElement) {
            const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
            dateElement.innerText = now.toLocaleDateString('id-ID', options);
        }

        if (wibElement) {
            wibElement.innerText = now.toLocaleTimeString('id-ID', {
                timeZone: 'Asia/Jakarta',
                hour12: false,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }

        if (witaElement) {
            witaElement.innerText = now.toLocaleTimeString('id-ID', {
                timeZone: 'Asia/Makassar',
                hour12: false,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }

        if (witElement) {
            witElement.innerText = now.toLocaleTimeString('id-ID', {
                timeZone: 'Asia/Jayapura',
                hour12: false,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }
    };

    updateTime();
    setInterval(updateTime, 1000);
}
