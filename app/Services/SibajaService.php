<?php

namespace App\Services;

class SibajaService
{
    /**
     * Get list of Javanese terms and cultural definitions.
     *
     * @return array<int, array<string, string>>
     */
    public function getIstilahList(): array
    {
        return [
            [
                'istilah' => 'Unggah-ungguh',
                'arti' => 'Tata krama atau sopan santun dalam budaya dan tingkatan bahasa Jawa.',
            ],
            [
                'istilah' => 'Gotong Royong',
                'arti' => 'Bekerja bersama-sama secara sukarela untuk mencapai tujuan kemaslahatan bersama.',
            ],
            [
                'istilah' => 'Pendopo',
                'arti' => 'Bagian depan rumah tradisional Jawa berbentuk paviliun terbuka untuk pertemuan.',
            ],
            [
                'istilah' => 'Batik Semarangan',
                'arti' => 'Kain bergambar motif khas pesisiran Semarang dengan corak flora, fauna, dan landmark lokal.',
            ],
            [
                'istilah' => 'Karawitan',
                'arti' => 'Seni musik tradisional Jawa yang melibatkan ansambel instrumen gamelan.',
            ],
            [
                'istilah' => 'Weton',
                'arti' => 'Hari kelahiran seseorang berdasarkan perpaduan kalender Masehi dan pasaran Jawa (Pon, Wage, Kliwon, Legi, Pahing).',
            ],
            [
                'istilah' => 'Manuskrip',
                'arti' => 'Naskah tulisan tangan kuno yang menyimpan warisan sejarah, sastra, dan ilmu pengetahuan masa lalu.',
            ],
            [
                'istilah' => 'Serat Centhini',
                'arti' => 'Salah satu karya sastra klasik Jawa terbesar yang merangkum ensiklopedia kebudayaan Nusantara.',
            ],
        ];
    }

    /**
     * Search terms by keyword.
     *
     * @return array<int, array<string, string>>
     */
    public function search(string $query): array
    {
        $normalized = mb_strtolower(trim($query));

        if ($normalized === '') {
            return [];
        }

        return array_values(array_filter($this->getIstilahList(), function ($item) use ($normalized) {
            return str_contains(mb_strtolower($item['istilah']), $normalized)
                || str_contains(mb_strtolower($item['arti']), $normalized);
        }));
    }
}
