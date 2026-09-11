<?php

namespace App\Http\Controllers;

use App\Services\BeritaService;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function __construct(
        protected BeritaService $beritaService
    ) {}

    /**
     * Display News and Publications list.
     */
    public function index(): View
    {
        $beritaList = $this->beritaService->getBeritaList();

        return view('berita', compact('beritaList'));
    }
}
