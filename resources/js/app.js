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
          toggle.addEventListener('click', function(e) {
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
      document.addEventListener('click', function(e) {
          if (!e.target.closest('.dropdown')) {
              document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                  menu.classList.remove('show');
              });
          }
      });
  }

  /* Accordion (Data Lainnya & Pertanyaan Umum) */
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

  document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.site-header');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            // Jika digulir ke bawah lebih dari 50px, ubah jadi merah maroon
            header.classList.add('scrolled');
        } else {
            // Jika kembali ke paling atas, kembalikan jadi transparan
            header.classList.remove('scrolled');
        }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
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