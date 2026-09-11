@props([
    'currentPage' => 1,
    'totalPages' => 1,
    'baseUrl' => '#'
])

@if($totalPages > 1)
    <nav class="ui-pagination" aria-label="Navigasi Halaman Data">
        <ul class="ui-pagination__list">
            <li class="ui-pagination__item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                <a href="{{ $currentPage > 1 ? $baseUrl . '?page=' . ($currentPage - 1) : '#' }}" class="ui-pagination__link" aria-label="Halaman Sebelumnya">
                    &laquo;
                </a>
            </li>

            @for($page = 1; $page <= $totalPages; $page++)
                <li class="ui-pagination__item {{ $currentPage == $page ? 'active' : '' }}">
                    <a href="{{ $baseUrl . '?page=' . $page }}" class="ui-pagination__link" aria-current="{{ $currentPage == $page ? 'page' : 'false' }}">
                        {{ $page }}
                    </a>
                </li>
            @endfor

            <li class="ui-pagination__item {{ $currentPage >= $totalPages ? 'disabled' : '' }}">
                <a href="{{ $currentPage < $totalPages ? $baseUrl . '?page=' . ($currentPage + 1) : '#' }}" class="ui-pagination__link" aria-label="Halaman Berikutnya">
                    &raquo;
                </a>
            </li>
        </ul>
    </nav>
@endif
