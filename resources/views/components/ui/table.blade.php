@props([
    'headers' => [],
    'striped' => true,
    'hoverable' => true
])

<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'ui-table ' . ($striped ? 'ui-table--striped ' : '') . ($hoverable ? 'ui-table--hover' : '')]) }}>
        @if(!empty($headers))
            <thead>
                <tr>
                    @foreach($headers as $header)
                        <th scope="col">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
        @endif
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
