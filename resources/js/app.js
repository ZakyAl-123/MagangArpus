// ==========================================================================
// DINAS ARSIP DAN PERPUSTAKAAN KOTA SEMARANG — script.js
// ==========================================================================

document.addEventListener('DOMContentLoaded', () => {

    /* Mobile nav toggle */
    const navToggle = document.querySelector('.nav-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });

        mainNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', (e) => {
                // PENTING: Jangan tutup menu utama di HP jika yang diklik adalah tombol Profil (dropdown)
                if (link.classList.contains('dropdown-toggle')) {
                    return;
                }
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    /* Dropdown Menu (Berlaku untuk semua dropdown) */
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    if (dropdownToggles.length > 0) {
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();

                // Mencari elemen .dropdown-menu yang berada di dalam induk (.dropdown) yang sama
                const parentDropdown = this.closest('.dropdown');
                const currentMenu = parentDropdown.querySelector('.dropdown-menu');

                // Menutup dropdown lain yang mungkin sedang terbuka (opsional, agar lebih rapi)
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    if (menu !== currentMenu) {
                        menu.classList.remove('show');
                    }
                });

                // Buka/tutup menu yang sedang diklik
                currentMenu.classList.toggle('show');
            });
        });

        // Menutup semua dropdown otomatis jika pengguna mengklik area luar
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
            }
        });
    }

    /* Accordion Modern (Data Lainnya & Pertanyaan Umum) */
    document.querySelectorAll('.accordion-btn-mod').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.accordion-item-mod');
            const panel = btn.nextElementSibling; // Memilih panel konten di bawah tombol
            const wasOpen = panel.classList.contains('open');

            // (Opsional) Tutup otomatis accordion lain dalam satu grup yang sama
            item.parentElement.querySelectorAll('.accordion-panel-mod.open').forEach(openPanel => {
                if (openPanel !== panel) {
                    openPanel.classList.remove('open');
                    openPanel.previousElementSibling.setAttribute('aria-expanded', 'false');
                }
            });

            // Buka/Tutup panel yang diklik
            panel.classList.toggle('open', !wasOpen);
            btn.setAttribute('aria-expanded', String(!wasOpen));
        });
    });

    /* Simple dot-carousel toggler (hero + trending) — purely cosmetic */
    document.querySelectorAll('[data-dots]').forEach(dotWrap => {
        const dots = Array.from(dotWrap.children);
        let index = dots.findIndex(d => d.classList.contains('active'));
        if (index < 0) index = 0;

        setInterval(() => {
            dots[index].classList.remove('active');
            index = (index + 1) % dots.length;
            dots[index].classList.add('active');
        }, 3500);
    });

    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('.site-header');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                // Jika digulir ke bawah lebih dari 50px, ubah jadi merah maroon
                header.classList.add('scrolled');
            } else {
                // Jika kembali ke paling atas, kembalikan jadi transparan
                header.classList.remove('scrolled');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.accordion-btn-mod').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.accordion-item-mod');
                const panel = btn.nextElementSibling;
                const wasOpen = panel.classList.contains('open');

                // Tutup accordion lain dalam grup yang sama agar rapi
                item.parentElement.querySelectorAll('.accordion-panel-mod.open').forEach(openPanel => {
                    if (openPanel !== panel) {
                        openPanel.classList.remove('open');
                        openPanel.previousElementSibling.setAttribute('aria-expanded', 'false');
                    }
                });

                // Buka/Tutup panel yang diklik
                panel.classList.toggle('open', !wasOpen);
                btn.setAttribute('aria-expanded', String(!wasOpen));
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const lightbox = document.getElementById('imageLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.querySelector('.lightbox-close');

    if (!lightbox || !lightboxImg) return;

    // Tangkap semua klik pada item galeri
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach(item => {
        item.addEventListener('click', function () {
            const img = this.querySelector('img');
            if (img) {
                lightbox.style.display = "flex";
                lightboxImg.src = img.src;
            }
        });
    });

    // Tutup saat tombol X diklik
    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            lightbox.style.display = "none";
        });
    }

    // Tutup saat area gelap luar gambar diklik
    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById('sibaja-search');
    const resultsContainer = document.getElementById('sibaja-results');

    // Contoh daftar istilah budaya Jawa (bisa disesuaikan atau diambil dari database)
    const daftarIstilah = [
        { istilah: "Unggah-ungguh", arti: "Tata krama atau sopan santun dalam budaya Jawa." },
        { istilah: "Gotong Royong", arti: "Bekerja bersama-sama untuk mencapai tujuan bersama." },
        { istilah: "Pendopo", arti: "Bagian rumah tradisional Jawa yang berbentuk bangunan terbuka." },
        { istilah: "Batik", arti: "Kain bergambar motif khas yang dibuat dengan teknik tulis atau cap." },
        { istilah: "Karawitan", arti: "Seni musik tradisional Jawa yang meliputi perangkat gamelan." },
        { istilah: "Weton", arti: "Hari kelahiran seseorang berdasarkan pasaran Jawa." }
    ];

    if (!searchInput || !resultsContainer) return;

    // Fungsi saat pengguna mengetik di kolom pencarian
    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();

        if (query.length === 0) {
            resultsContainer.style.display = 'none';
            resultsContainer.innerHTML = '';
            return;
        }

        // Filter data berdasarkan kata kunci yang diketik
        const filtered = daftarIstilah.filter(item =>
            item.istilah.toLowerCase().includes(query) ||
            item.arti.toLowerCase().includes(query)
        );

        if (filtered.length > 0) {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = filtered.map(item => `
                <div class="sibaja-result-item" onclick="selectIstilah('${item.istilah}')">
                    <strong>${item.istilah}</strong> - <span style="color: #666; font-size: 0.8rem;">${item.arti}</span>
                </div>
            `).join('');
        } else {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = `<div class="sibaja-result-item" style="color: #888; cursor: default;">Istilah tidak ditemukan</div>`;
        }
    });

    // Menutup dropdown jika pengguna klik di luar area pencarian
    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !resultsContainer.contains(e.target)) {
            resultsContainer.style.display = 'none';
        }
    });
});

// Fungsi saat salah satu hasil diklik
function selectIstilah(namaIstilah) {
    const searchInput = document.getElementById('sibaja-search');
    searchInput.value = namaIstilah;
    document.getElementById('sibaja-results').style.display = 'none';
}

document.addEventListener("DOMContentLoaded", function () {
    const micBtn = document.getElementById('mic-btn');
    const searchInput = document.getElementById('sibaja-search');

    // Cek apakah browser mendukung Speech Recognition
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        if (micBtn) micBtn.style.display = 'none'; // Sembunyikan jika browser tidak support
        return;
    }

    const recognition = new SpeechRecognition();
    recognition.lang = 'id-ID'; // Mengatur bahasa Indonesia
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    micBtn.addEventListener('click', function () {
        try {
            recognition.start();
            micBtn.style.color = '#7a1414'; // Berubah warna saat mendengarkan
            searchInput.placeholder = "Mendengarkan...";
        } catch (e) {
            console.log("Speech recognition sudah aktif");
        }
    });

    // Ketika suara berhasil dikenali
    recognition.onresult = function (event) {
        const speechToText = event.results[0][0].transcript;
        searchInput.value = speechToText;
        micBtn.style.color = 'currentColor';
        searchInput.placeholder = "Cari istilah...";

        // Memicu event input secara otomatis agar fungsi pencarian langsung jalan
        searchInput.dispatchEvent(new Event('input'));
    };

    // Jika terjadi error atau selesai
    recognition.onerror = function (event) {
        console.error("Error speech recognition:", event.error);
        micBtn.style.color = 'currentColor';
        searchInput.placeholder = "Cari istilah...";
    };

    recognition.onspeechend = function () {
        recognition.stop();
        micBtn.style.color = 'currentColor';
        searchInput.placeholder = "Cari istilah...";
    };
});

document.addEventListener("DOMContentLoaded", function () {
    const micBtn = document.getElementById('mic-btn');
    const searchInput = document.getElementById('sibaja-search');

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        if (micBtn) micBtn.style.display = 'none';
        return;
    }

    const recognition = new SpeechRecognition();
    recognition.lang = 'id-ID';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    micBtn.addEventListener('click', function () {
        try {
            recognition.start();
        } catch (e) {
            console.log("Speech recognition sudah aktif", e);
        }
    });

    recognition.onstart = function () {
        micBtn.classList.add('listening');
        searchInput.placeholder = "Mendengarkan suara Anda...";
    };

    recognition.onresult = function (event) {
        const speechToText = event.results[0][0].transcript;
        searchInput.value = speechToText;
        searchInput.dispatchEvent(new Event('input'));
    };

    // Pastikan saat durasi habis atau berhenti, kelas langsung dibersihkan total
    recognition.onend = function () {
        micBtn.classList.remove('listening');
        searchInput.placeholder = "Cari istilah...";
    };

    recognition.onerror = function (event) {
        console.error("Error speech recognition:", event.error);
        micBtn.classList.remove('listening');
        searchInput.placeholder = "Cari istilah...";
    };
});

document.addEventListener("DOMContentLoaded", function () {
    const stats = document.querySelectorAll('.stat-number');

    // Fungsi untuk menjalankan animasi hitung
    const runCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const separator = counter.getAttribute('data-separator') || '';
        const decimal = parseInt(counter.getAttribute('data-decimal')) || 0;
        const suffix = counter.getAttribute('data-suffix') || '';

        let current = 0;
        const duration = 2000; // Durasi animasi dalam milidetik (2 detik)
        const steps = 60; // Jumlah frame animasi
        const increment = target / steps;
        const stepTime = duration / steps;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            // Format angka dengan titik ribuan atau koma desimal
            let formattedNum = current.toFixed(decimal);
            if (decimal > 0) {
                formattedNum = formattedNum.replace('.', ','); // Ubah desimal jadi koma untuk format Indonesia
            }
            if (separator && target >= 1000) {
                let parts = formattedNum.split(',');
                parts[0] = parseInt(parts[0]).toLocaleString('id-ID').replace(/,/g, separator);
                formattedNum = parts.join(',');
            }

            counter.innerText = formattedNum + suffix;
        }, stepTime);
    };

    // Menggunakan Intersection Observer agar animasi mulai saat card terlihat di layar
    const observerOptions = {
        root: null,
        threshold: 0.3 // Mulai saat 30% elemen terlihat
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                runCounter(counter);
                observer.unobserve(counter); // Jalankan sekali saja
            }
        });
    }, observerOptions);

    stats.forEach(stat => {
        observer.observe(stat);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    function updateClocks() {
        const now = new Date();

        // Format Tanggal Indonesia
        const optionsDate = { day: 'numeric', month: 'long', year: 'numeric' };
        const dateString = now.toLocaleDateString('id-ID', optionsDate);
        const dateElement = document.getElementById('current-date');
        if (dateElement) dateElement.innerText = dateString;

        // Jam WIB (UTC+7)
        const timeWIB = now.toLocaleTimeString('id-ID', { timeZone: 'Asia/Jakarta', hour12: false });
        const wibElement = document.getElementById('clock-wib');
        if (wibElement) wibElement.innerText = timeWIB;

        // Jam WITA (UTC+8)
        const timeWITA = now.toLocaleTimeString('id-ID', { timeZone: 'Asia/Makassar', hour12: false });
        const witaElement = document.getElementById('clock-wita');
        if (witaElement) witaElement.innerText = timeWITA;

        // Jam WIT (UTC+9)
        const timeWIT = now.toLocaleTimeString('id-ID', { timeZone: 'Asia/Jayapura', hour12: false });
        const witElement = document.getElementById('clock-wit');
        if (witElement) witElement.innerText = timeWIT;
    }

    // Jalankan pertama kali, lalu update setiap 1 detik
    updateClocks();
    setInterval(updateClocks, 1000);
});

document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.querySelector('.nav-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');

            // Ubah atribut aria-expanded untuk aksesibilitas
            const isExpanded = mainNav.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isExpanded);
        });
    }

    // Opsional: Untuk dropdown Profil / FAQ di mode HP
    const dropdownToggles = document.querySelectorAll('.main-nav .dropdown > a');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            if (window.innerWidth <= 992) {
                e.preventDefault(); // Mencegah link kosong melompat
                const parentLi = this.parentElement;
                parentLi.classList.toggle('open');
            }
        });
    });
});