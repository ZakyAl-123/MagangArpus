/**
 * Dinas Arsip dan Perpustakaan Kota Semarang
 * Main JavaScript Entry Point (ES6+ Modules)
 */

import { initNavigation } from './modules/navigation.js';
import { initCounters } from './modules/counters.js';
import { initAccordions } from './modules/accordions.js';
import { initTabs } from './modules/tabs.js';
import { initLightbox } from './modules/lightbox.js';
import { initClocks } from './modules/clocks.js';
import { initSpeechSearch } from './modules/speech-search.js';
import { initCoverflow } from './modules/coverflow.js';

// Initialize all features once DOM is fully ready
document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initCounters();
    initAccordions();
    initTabs();
    initLightbox();
    initClocks();
    initSpeechSearch();
    initCoverflow();
});
