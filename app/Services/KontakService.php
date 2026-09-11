<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class KontakService
{
    /**
     * Get office contact information.
     *
     * @return array<string, mixed>
     */
    public function getKontakInfo(): array
    {
        return [
            'nama_instansi' => 'DINAS ARSIP DAN PERPUSTAKAAN KOTA SEMARANG',
            'alamat' => 'Jl. Prof. Sudarto No. 116, Kel. Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269',
            'telepon' => '024 7466215',
            'email' => 'dinas_arpus@semarangkota.go.id',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.627836398766!2d110.42562647475825!3d-7.052942492949373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ddd95603f%3A0x6b3412e6b2ea1db8!2sDinas%20Arsip%20dan%20Perpustakaan%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1788937538961!5m2!1sid!2sid',
            'jam_kerja' => [
                ['hari' => 'Senin - Kamis', 'jam' => '08:00 - 16:00 WIB'],
                ['hari' => 'Jumat', 'jam' => '08:00 - 14:00 WIB'],
            ],
            'social_media' => [
                'facebook' => 'https://www.facebook.com/groups/dinasarpus.semarangkota',
                'instagram' => 'https://www.instagram.com/dinasarpus_semarang/',
                'telegram' => 'https://t.me/sobatbukuarpuskotasemarang',
                'youtube' => 'https://www.youtube.com/channel/UCKW_vxNCRgWO60Ny1wC_rUQ',
            ],
        ];
    }

    /**
     * Process contact message submission.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public function handleContactSubmission(array $data): array
    {
        Log::info('New contact message received from portal', [
            'name' => $data['nama'] ?? 'Anonymous',
            'email' => $data['email'] ?? 'No email',
            'subject' => $data['subjek'] ?? 'General inquiry',
            'timestamp' => now()->toIso8601String(),
        ]);

        return [
            'success' => true,
            'message' => 'Terima kasih, pesan Anda telah berhasil dikirimkan kepada tim Dinas Arsip dan Perpustakaan Kota Semarang.',
        ];
    }
}
