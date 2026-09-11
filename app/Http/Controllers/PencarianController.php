<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Services\SibajaService;
use Illuminate\Http\JsonResponse;

class PencarianController extends Controller
{
    public function __construct(
        protected SibajaService $sibajaService
    ) {}

    /**
     * Async search endpoint for Sibaja Javanese terms dictionary.
     */
    public function searchSibaja(SearchRequest $request): JsonResponse
    {
        $query = (string) $request->input('q', '');
        $results = $this->sibajaService->search($query);

        return response()->json([
            'query' => $query,
            'count' => count($results),
            'data' => $results,
        ]);
    }
}
