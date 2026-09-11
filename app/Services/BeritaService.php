<?php

namespace App\Services;

class BeritaService
{
    /**
     * Get news articles list.
     *
     * @return array<int, array<string, string>>
     */
    public function getBeritaList(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Optimalisasi Pengelolaan Arsip Daerah Menuju Era Digitalisasi Modern',
                'category' => 'Kearsipan',
                'badge_class' => '',
                'date' => '08 September 2026',
                'excerpt' => 'Dinas Arsip dan Perpustakaan terus meningkatkan kualitas tata naskah dinas serta penyelamatan memori kolektif daerah melalui implementasi sistem kearsipan cerdas.',
                'image' => 'asset/Card Background Image.png',
                'slug' => 'optimalisasi-pengelolaan-arsip-daerah-modern',
            ],
            [
                'id' => '2',
                'title' => 'Peningkatan Minat Baca Melalui Revitalisasi Ruang Baca Digital',
                'category' => 'Perpustakaan',
                'badge_class' => 'gold-badge',
                'date' => '05 September 2026',
                'excerpt' => 'Fasilitas ruang baca digital kini hadir dengan koleksi ribuan e-book interaktif yang ramah bagi pelajar, mahasiswa, dan masyarakat umum Kota Semarang.',
                'image' => 'asset/bakgron.jpg',
                'slug' => 'peningkatan-minat-baca-revitalisasi-digital',
            ],
            [
                'id' => '3',
                'title' => 'Seminar Internasional Naskah Kuno dan Pelestarian Budaya Nusantara',
                'category' => 'Kegiatan',
                'badge_class' => '',
                'date' => '01 September 2026',
                'excerpt' => 'Membedah warisan leluhur bangsa melalui konservasi manuskrip kuno guna memperkuat identitas budaya serta literasi sejarah bagi generasi muda.',
                'image' => 'asset/Card Background Image.png',
                'slug' => 'seminar-internasional-naskah-kuno-nusantara',
            ],
        ];
    }

    /**
     * Get geliat / trending publications for home page.
     *
     * @return array<int, array<string, string>>
     */
    public function getGeliatList(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Pemberdayaan Perpustakaan Komunitas di 16 Kecamatan',
                'category' => 'Pustaka',
                'date' => '10 September 2026',
                'desc' => 'Kolaborasi bersama penggiat literasi lokal untuk memperluas akses bahan bacaan berkualitas di pelosok kelurahan.',
                'image' => 'asset/bakgron.jpg',
            ],
            [
                'id' => '2',
                'title' => 'Digitalisasi Naskah Kuno Koleksi Abad ke-19',
                'category' => 'Preservasi',
                'date' => '07 September 2026',
                'desc' => 'Penyelamatan dokumen bernilai sejarah tinggi dengan pemindaian optik beresolusi tinggi tanpa merusak serat kertas kuno.',
                'image' => 'asset/arpus.jpg',
            ],
            [
                'id' => '3',
                'title' => 'Sosialisasi Tertib Arsip Bagi Perangkat Daerah',
                'category' => 'Tata Kelola',
                'date' => '03 September 2026',
                'desc' => 'Mewujudkan akuntabilitas birokrasi melalui kepatuhan pengelolaan arsip aktif dan inaktif yang sistematis.',
                'image' => 'asset/Card Background Image.png',
            ],
        ];
    }
}
