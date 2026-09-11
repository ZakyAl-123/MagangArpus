/**
 * Speech & Search Module (Sibaja Terms Dictionary)
 * Handles Speech Recognition and instant asynchronous search with debouncing.
 */
export function initSpeechSearch() {
    const searchInput = document.getElementById('sibaja-search');
    const resultsContainer = document.getElementById('sibaja-results');
    const micBtn = document.getElementById('mic-btn');

    if (!searchInput || !resultsContainer) return;

    // Static fallback dictionary if offline or local
    const fallbackIstilah = [
        { istilah: 'Unggah-ungguh', arti: 'Tata krama atau sopan santun dalam budaya dan tingkatan bahasa Jawa.' },
        { istilah: 'Gotong Royong', arti: 'Bekerja bersama-sama secara sukarela untuk mencapai tujuan kemaslahatan bersama.' },
        { istilah: 'Pendopo', arti: 'Bagian depan rumah tradisional Jawa berbentuk paviliun terbuka untuk pertemuan.' },
        { istilah: 'Batik Semarangan', arti: 'Kain bergambar motif khas pesisiran Semarang dengan corak flora, fauna, dan landmark lokal.' },
        { istilah: 'Karawitan', arti: 'Seni musik tradisional Jawa yang melibatkan ansambel instrumen gamelan.' },
        { istilah: 'Weton', arti: 'Hari kelahiran seseorang berdasarkan perpaduan kalender Masehi dan pasaran Jawa.' }
    ];

    let debounceTimer = null;

    const renderResults = (items) => {
        if (!items || items.length === 0) {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = `<div class="sibaja-result-item sibaja-result-item--empty">Istilah tidak ditemukan</div>`;
            return;
        }

        resultsContainer.style.display = 'block';
        resultsContainer.innerHTML = items.map((item) => `
            <div class="sibaja-result-item" data-istilah="${escapeHtml(item.istilah)}">
                <strong>${escapeHtml(item.istilah)}</strong>
                <span class="sibaja-result-desc">${escapeHtml(item.arti)}</span>
            </div>
        `).join('');
    };

    const performSearch = async (query) => {
        if (!query) {
            resultsContainer.style.display = 'none';
            resultsContainer.innerHTML = '';
            return;
        }

        try {
            // Attempt fetching from backend endpoint first
            const res = await fetch(`/api/sibaja/search?q=${encodeURIComponent(query)}`);
            if (res.ok) {
                const data = await res.json();
                renderResults(data.data);
                return;
            }
        } catch (err) {
            // Fallback to local filter
        }

        const filtered = fallbackIstilah.filter((item) =>
            item.istilah.toLowerCase().includes(query.toLowerCase()) ||
            item.arti.toLowerCase().includes(query.toLowerCase())
        );
        renderResults(filtered);
    };

    searchInput.addEventListener('input', (e) => {
        const val = e.target.value.trim();
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => performSearch(val), 250);
    });

    // Select result delegation
    resultsContainer.addEventListener('click', (e) => {
        const item = e.target.closest('.sibaja-result-item');
        if (item && item.hasAttribute('data-istilah')) {
            searchInput.value = item.getAttribute('data-istilah');
            resultsContainer.style.display = 'none';
        }
    });

    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !resultsContainer.contains(e.target)) {
            resultsContainer.style.display = 'none';
        }
    });

    // Speech Recognition Handler
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        if (micBtn) micBtn.style.display = 'none';
        return;
    }

    if (micBtn) {
        let isListening = false;
        const recognition = new SpeechRecognition();
        recognition.lang = 'id-ID';
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;

        micBtn.addEventListener('click', () => {
            if (isListening) {
                recognition.stop();
                return;
            }

            try {
                recognition.start();
            } catch (err) {
                console.warn('SpeechRecognition already started', err);
            }
        });

        recognition.onstart = () => {
            isListening = true;
            micBtn.classList.add('listening');
            searchInput.placeholder = 'Mendengarkan suara Anda...';
        };

        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            searchInput.value = transcript;
            searchInput.dispatchEvent(new Event('input'));
        };

        recognition.onerror = (event) => {
            console.warn('Speech recognition error:', event.error);
            isListening = false;
            micBtn.classList.remove('listening');
            searchInput.placeholder = 'Cari istilah budaya Jawa...';
        };

        recognition.onend = () => {
            isListening = false;
            micBtn.classList.remove('listening');
            searchInput.placeholder = 'Cari istilah budaya Jawa...';
        };
    }
}

function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}
