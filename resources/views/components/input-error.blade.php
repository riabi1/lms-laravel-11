@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger bg-light border border-danger rounded px-3 py-2 mt-2 mb-0 list-disc list-inside']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
