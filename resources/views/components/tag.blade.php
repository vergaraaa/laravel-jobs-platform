@props(['tag', 'size' => 'base'])

@php
    $class = 'bg-white/10 transition-colors duration-300 hover:bg-white/25 rounded-xl font-bold mx-0.5 ';

    if ($size == 'base') {
        $class .= ' px-5 py-1 text-sm';
    }

    if ($size == 'small') {
        $class .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $class }}">
    {{ $tag->name }}
</a>
