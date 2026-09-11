<?php

namespace App\Http\Controllers;

use App\Services\FaqService;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function __construct(
        protected FaqService $faqService
    ) {}

    /**
     * Display FAQ for Kearsipan.
     */
    public function arsip(): View
    {
        $faqs = $this->faqService->getFaqArsip();

        return view('FAQarsip', compact('faqs'));
    }

    /**
     * Display FAQ for Perpustakaan.
     */
    public function perpus(): View
    {
        $faqs = $this->faqService->getFaqPerpus();

        return view('FAQperpus', compact('faqs'));
    }
}
