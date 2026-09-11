<?php

namespace App\Http\Controllers;

use App\Services\ProfilService;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function __construct(
        protected ProfilService $profilService
    ) {}

    /**
     * Display Visi & Misi Kota Semarang.
     */
    public function visiKota(): View
    {
        $data = $this->profilService->getVisiMisiKota();

        return view('visikota', compact('data'));
    }

    /**
     * Display Visi & Misi Dinas Arpusda Kota Semarang.
     */
    public function visiArpus(): View
    {
        $data = $this->profilService->getVisiMisiArpus();

        return view('visiarpus', compact('data'));
    }

    /**
     * Display Tugas Pokok dan Fungsi.
     */
    public function tupoksi(): View
    {
        $tupoksiList = $this->profilService->getTupoksi();

        return view('tupoksi', compact('tupoksiList'));
    }

    /**
     * Display Struktur Organisasi.
     */
    public function struktur(): View
    {
        $struktur = $this->profilService->getStruktur();

        return view('struktur', compact('struktur'));
    }

    /**
     * Display Profil & Definisi Tentang Arpusda.
     */
    public function tentang(): View
    {
        $tentangList = $this->profilService->getTentang();

        return view('tentang', compact('tentangList'));
    }
}
