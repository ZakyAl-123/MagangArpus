@props([
    'id' => 'appModal',
    'title' => null,
    'size' => 'md',
    'dismissible' => true
])

<div id="{{ $id }}"
     class="ui-modal"
     role="dialog"
     aria-modal="true"
     aria-labelledby="{{ $id }}Title"
     aria-hidden="true"
     tabindex="-1">
    <div class="ui-modal__backdrop" data-modal-dismiss></div>

    <div class="ui-modal__dialog ui-modal__dialog--{{ $size }}">
        <div class="ui-modal__content">
            @if($title || $dismissible)
                <div class="ui-modal__header">
                    @if($title)
                        <h3 class="ui-modal__title" id="{{ $id }}Title">{{ $title }}</h3>
                    @endif

                    @if($dismissible)
                        <button type="button" class="ui-modal__close-btn" data-modal-dismiss aria-label="Tutup dialog modal">&times;</button>
                    @endif
                </div>
            @endif

            <div class="ui-modal__body">
                {{ $slot }}
            </div>

            @if(isset($footer))
                <div class="ui-modal__footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
