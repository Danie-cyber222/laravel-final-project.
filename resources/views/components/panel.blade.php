@php
    $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 transition duration-300 group'
@endphp



<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>

