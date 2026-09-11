@props([
    'name' => '',
    'label' => null,
    'type' => 'text',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'rows' => 4,
    'icon' => null,
    'helper' => null
])

<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    @if($label)
        <label for="{{ $name }}" class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-danger" aria-hidden="true">*</span>
            @endif
        </label>
    @endif

    <div class="form-input-wrapper {{ $icon ? 'has-icon' : '' }}">
        @if($icon)
            <span class="form-input-icon" aria-hidden="true">
                {{ $icon }}
            </span>
        @endif

        @if($type === 'textarea')
            <textarea
                name="{{ $name }}"
                id="{{ $name }}"
                rows="{{ $rows }}"
                class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $attributes }}
            >{{ old($name, $value) }}</textarea>
        @else
            <input
                type="{{ $type }}"
                name="{{ $name }}"
                id="{{ $name }}"
                value="{{ old($name, $value) }}"
                class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $attributes }}
            />
        @endif
    </div>

    @if($helper)
        <small class="form-helper">{{ $helper }}</small>
    @endif

    @error($name)
        <span class="form-error" role="alert">{{ $message }}</span>
    @enderror
</div>
