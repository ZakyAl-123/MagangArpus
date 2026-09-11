@props([
    'number' => '',
    'title' => '',
    'expanded' => false
])

<div class="accordion-item-mod">
    <button type="button" class="accordion-btn-mod" aria-expanded="{{ $expanded ? 'true' : 'false' }}">
        @if($number)
            <span class="acc-num">{{ $number }}</span>
        @endif
        <span class="acc-text">{{ $title }}</span>
        <svg class="icon acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </button>
    <div class="accordion-panel-mod {{ $expanded ? 'open' : '' }}" {{ $expanded ? '' : 'hidden' }}>
        <div class="accordion-content-inner">
            {{ $slot }}
        </div>
    </div>
</div>
