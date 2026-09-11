<?php

namespace App\Services;

class GaleriService
{
    /**
     * Get photo gallery items.
     *
     * @return array<int, array<string, string>>
     */
    public function getFotoList(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Kegiatan Penataan Arsip Dinamis',
                'category' => 'Kearsipan',
                'image' => 'asset/Card Background Image.png',
                'alt' => 'Dokumentasi Penataan Arsip',
            ],
            [
                'id' => '2',
                'title' => 'Layanan Kunjungan Edukasi Pustaka',
                'category' => 'Perpustakaan',
                'image' => 'asset/bakgron.jpg',
                'alt' => 'Dokumentasi Edukasi Pustaka',
            ],
            [
                'id' => '3',
                'title' => 'Sosialisasi Tata Naskah Kearsipan Digital',
                'category' => 'Workshop',
                'image' => 'asset/arpus.jpg',
                'alt' => 'Dokumentasi Sosialisasi Naskah',
            ],
            [
                'id' => '4',
                'title' => 'Pameran Memori Kolektif Bangsa',
                'category' => 'Pameran',
                'image' => 'asset/semarang.jpg',
                'alt' => 'Dokumentasi Pameran Sejarah',
            ],
            [
                'id' => '5',
                'title' => 'Ruang Baca Nyaman Anak & Remaja',
                'category' => 'Fasilitas',
                'image' => 'asset/Card Background Image.png',
                'alt' => 'Dokumentasi Ruang Baca',
            ],
            [
                'id' => '6',
                'title' => 'Gedung Depo Arsip Kota Semarang',
                'category' => 'Infrastruktur',
                'image' => 'asset/bakgron.jpg',
                'alt' => 'Dokumentasi Gedung Depo Arsip',
            ],
        ];
    }

    /**
     * Get video gallery items.
     *
     * @return array<int, array<string, string>>
     */
    public function getVideoList(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Profil Singkat Dinas Arsip dan Perpustakaan',
                'youtube_id' => '8cLyuxUIj_Q',
                'embed_url' => 'https://www.youtube.com/embed/8cLyuxUIj_Q',
            ],
            [
                'id' => '2',
                'title' => 'Inovasi Pelayanan Kearsipan Era Digital',
                'youtube_id' => 'aTcjI4nnDnU',
                'embed_url' => 'https://www.youtube.com/embed/aTcjI4nnDnU',
            ],
            [
                'id' => '3',
                'title' => 'Koleksi Langka & Manuskrip Bersejarah Semarang',
                'youtube_id' => 'gL81MXIIdOQ',
                'embed_url' => 'https://www.youtube.com/embed/gL81MXIIdOQ',
            ],
        ];
    }

    /**
     * Get historical archives / pameran documents.
     *
     * @return array<int, array<string, string>>
     */
    public function getArsipList(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Peta Kolonial Semarang 1900',
                'category' => 'Arsip Peta & Tata Ruang',
                'desc' => 'Arsip peta cetak kuno yang merekam tata wilayah Kota Semarang pada masa Hindia Belanda dengan detail jalur rel dan kawasan pesisir.',
                'image' => 'asset/arsip1.jpg',
            ],
            [
                'id' => '2',
                'title' => 'Naskah Kuno Keputusan Kota Praja',
                'category' => 'Arsip Dokumen Negara',
                'desc' => 'Dokumen lembaran arsip fisik keputusan administratif tempo dulu yang mengatur ketertiban kota dan pasar tradisional.',
                'image' => 'asset/tradisingaliyan.jpg',
            ],
            [
                'id' => '3',
                'title' => 'Gedung Bersejarah Semarang Tempo Doeloe',
                'category' => 'Arsip Foto Historis',
                'desc' => 'Koleksi foto hitam putih pameran fisik bangunan bersejarah di Kawasan Kota Lama Semarang.',
                'image' => 'asset/tembalang.jpg',
            ],
            [
                'id' => '4',
                'title' => 'Surat Kabar Kuno De Locomotief',
                'category' => 'Arsip Media Cetak',
                'desc' => 'Arsip koran bersejarah terbitan Semarang masa lampau yang menjadi saksi bisu dinamika sosial ekonomi Nusantara.',
                'image' => 'asset/kubur.jpg',
            ],
            [
                'id' => '5',
                'title' => 'Manuskrip Sastra & Budaya Pesisiran',
                'category' => 'Naskah Kuno',
                'desc' => 'Pelestarian manuskrip bernilai budaya tinggi yang ditulis tangan pada media kertas tradisional.',
                'image' => 'asset/buku1.jpg',
            ],
            [
                'id' => '6',
                'title' => 'Registrasi Administrasi Kependudukan Lama',
                'category' => 'Dokumen Sipil',
                'desc' => 'Buku register pencatatan kependudukan awal abad ke-20 yang tersimpan rapi di depo arsip statis.',
                'image' => 'asset/heart.jpg',
            ],
        ];
    }
}
