@props(['active' => false])

@php
    $baseClasses = 'group relative rounded-xl px-3 py-2 text-sm font-medium transition duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400';
    $inactiveClasses = 'text-zinc-600 hover:text-zinc-950 hover:bg-zinc-50';
    $activeClasses = 'text-zinc-950';
@endphp

<a {{ $attributes->merge(['class' => $baseClasses.' '.($active ? $activeClasses : $inactiveClasses)]) }}>
    <span class="relative">{{ $slot }}</span>
    <span class="absolute inset-x-3 -bottom-px h-px bg-gradient-to-r from-amber-400 via-peach-500 to-coral-500 transition-opacity duration-200 {{ $active ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }}"></span>
</a>
