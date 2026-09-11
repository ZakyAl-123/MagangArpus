<?php

namespace App\Services;

class FaqService
{
    /**
     * Get FAQ for Kearsipan.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getFaqArsip(): array
    {
        return [
            [
                'id' => '01',
                'question' => 'Berapa nomor telepon gedung arsip?',
                'answer' => '024-7466 215',
                'is_list' => false,
            ],
            [
                'id' => '02',
                'question' => 'Dimana alamat Gedung Arsip Kota Semarang?',
                'answer' => 'Di Jl. Prof. Soedarto 116 B, Sumurboto, Kecamatan Banyumanik, Semarang.',
                'is_list' => false,
            ],
            [
                'id' => '03',
                'question' => 'Apa saja syarat peminjaman arsip?',
                'answer' => [
                    'Fotokopi KTP',
                    'Fotokopi Sertifikat',
                    'Surat Kuasa (apabila diwakilkan)',
                    'Fotokopi arsip yang akan dicari',
                ],
                'is_list' => true,
            ],
            [
                'id' => '04',
                'question' => 'Berapa lama proses pencarian arsip?',
                'answer' => 'Proses pencarian berkisar 1 - 3 hari kerja tergantung kelengkapan data pemohon dan kondisi fisik naskah arsip.',
                'is_list' => false,
            ],
            [
                'id' => '05',
                'question' => 'Apakah layanan kearsipan dipungut biaya (retribusi)?',
                'answer' => 'Seluruh layanan konsultasi, peminjaman, dan penelusuran arsip statis di Dinas Arsip dan Perpustakaan Kota Semarang bersifat GRATIS tanpa pungutan biaya.',
                'is_list' => false,
            ],
        ];
    }

    /**
     * Get FAQ for Perpustakaan.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getFaqPerpus(): array
    {
        return [
            [
                'id' => '01',
                'question' => 'Perpustakaan yang ada di kota Semarang',
                'answer' => [
                    'Perpustakaan Kota Semarang di jalan Pemuda 175',
                    'Perpustakaan Provinsi Jawa Tengah di Jl. Sriwijaya No.29a, Tegalsari, Kec. Candisari (50614)',
                ],
                'is_list' => true,
            ],
            [
                'id' => '02',
                'question' => 'Jam layanan Perpustakaan Kota Semarang',
                'answer' => 'Senin - Kamis: 08.00 s/d 15.00 WIB | Jumat: 08.00 s/d 11.00 WIB',
                'is_list' => false,
            ],
            [
                'id' => '03',
                'question' => 'Layanan yang ada di perpustakaan',
                'answer' => [
                    'Buku Fisik',
                    'E-Book (SiBooky)',
                    'Coworking Space',
                    'Bimbel Siswa SD',
                    'Story Telling',
                    'Mobil Pintar (Perpustakaan Keliling)',
                    'Bimbingan Pengolahan Bahan Pustaka',
                ],
                'is_list' => true,
            ],
            [
                'id' => '04',
                'question' => 'Siapa yang dapat menjadi anggota perpustakaan kota Semarang?',
                'answer' => 'Semua warga negara Indonesia yang berdomisili atau beraktivitas pendidikan/bekerja di Kota Semarang dapat menjadi anggota perpustakaan kota Semarang.',
                'is_list' => false,
            ],
            [
                'id' => '05',
                'question' => 'Berapa banyak koleksi yg dapat dipinjam oleh anggota perpustakaan?',
                'answer' => 'Setiap anggota perpustakaan dapat meminjam maksimal 2 (dua) buku fisik dengan jangka waktu peminjaman selama 7 (tujuh) hari.',
                'is_list' => false,
            ],
            [
                'id' => '06',
                'question' => 'Berapa kali dapat dilakukan perpanjangan peminjaman buku?',
                'answer' => 'Perpanjangan peminjaman buku dapat dilakukan maksimal 1 (satu) kali setelah masa peminjaman pertama.',
                'is_list' => false,
            ],
            [
                'id' => '07',
                'question' => 'Bagaimana cara dapat memanfaatkan layanan dan koleksi perpustakaan?',
                'answer' => 'Pengunjung harus memiliki Kartu Tanda Anggota atau mengisi daftar tamu digital pada terminal komputer di lobi utama layanan.',
                'is_list' => false,
            ],
            [
                'id' => '08',
                'question' => 'Bagaimana cara menemukan buku perpustakaan?',
                'answer' => [
                    'Melalui sistem penelusuran katalog online OPAC.',
                    'Mencari ke rak koleksi sesuai kode klasifikasi DDC yang tertera pada hasil OPAC.',
                ],
                'is_list' => true,
            ],
        ];
    }
}
