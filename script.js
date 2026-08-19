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
      link.addEventListener('click', () => {
        mainNav.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* Accordion (Data Lainnya & Pertanyaan Umum) */
  document.querySelectorAll('.accordion-item__btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.accordion-item');
      const wasOpen = item.classList.contains('open');
      // Close siblings within same accordion for a cleaner UX
      item.parentElement.querySelectorAll('.accordion-item.open').forEach(openItem => {
        if (openItem !== item) openItem.classList.remove('open');
      });
      item.classList.toggle('open', !wasOpen);
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

});
