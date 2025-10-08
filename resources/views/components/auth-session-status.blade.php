@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success mb-2']) }}>
        {{ $status }}
    </div>
@endif
