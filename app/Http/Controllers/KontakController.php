<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Services\KontakService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KontakController extends Controller
{
    public function __construct(
        protected KontakService $kontakService
    ) {}

    /**
     * Display Contact and Location page.
     */
    public function index(): View
    {
        $info = $this->kontakService->getKontakInfo();

        return view('kontak', compact('info'));
    }

    /**
     * Store submitted contact form message.
     */
    public function submit(ContactFormRequest $request): RedirectResponse
    {
        $result = $this->kontakService->handleContactSubmission($request->validated());

        return redirect()
            ->route('kontak')
            ->with('success', $result['message']);
    }
}
