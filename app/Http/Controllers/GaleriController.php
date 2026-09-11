<?php

namespace App\Http\Controllers;

use App\Services\GaleriService;
use Illuminate\View\View;

class GaleriController extends Controller
{
    public function __construct(
        protected GaleriService $galeriService
    ) {}

    /**
     * Display Photo Gallery.
     */
    public function foto(): View
    {
        $fotos = $this->galeriService->getFotoList();

        return view('foto', compact('fotos'));
    }

    /**
     * Display Video Gallery.
     */
    public function video(): View
    {
        $videos = $this->galeriService->getVideoList();

        return view('video', compact('videos'));
    }

    /**
     * Display Pameran Arsip & Sejarah.
     */
    public function arsip(): View
    {
        $arsipList = $this->galeriService->getArsipList();

        return view('arsip', compact('arsipList'));
    }
}
