<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'SiteStar')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-full bg-white text-zinc-950">
        <div class="min-h-screen bg-sitestar-glow">
            <header class="fixed inset-x-0 top-0 z-50">
                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8" x-data="{ open: false }" @keydown.escape.window="open = false">
                    <div class="mt-3 rounded-2xl border border-zinc-200/80 bg-white/70 shadow-sm backdrop-blur">
                        <div class="flex items-center justify-between px-4 py-3 sm:px-5">
                            <a href="{{ route('home') }}" class="group inline-flex items-center gap-2 rounded-xl px-2 py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400">
                                <span class="relative inline-flex h-9 w-9 items-center justify-center rounded-xl bg-zinc-950 text-white shadow-sm">
                                    <span class="text-[12px] font-semibold tracking-tight">SS</span>
                                </span>
                                <span class="flex flex-col leading-none">
                                    <span class="text-sm font-semibold tracking-tight">SiteStar</span>
                                    <span class="text-xs text-zinc-500">Design &amp; Development</span>
                                </span>
                            </a>

                            <nav class="hidden items-center gap-1 md:flex">
                                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
                                <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">About</x-nav-link>
                                <x-nav-link href="{{ route('portfolio') }}" :active="request()->routeIs('portfolio')">Portfolio</x-nav-link>
                                <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">Contact</x-nav-link>
                            </nav>

                            <div class="flex items-center gap-2">
                                <a href="{{ route('contact') }}" class="hidden md:inline-flex">
                                    <span class="btn btn-primary">
                                        Start a project
                                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                            <path d="M7 13l6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M8.75 7H13v4.25" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>

                                <button type="button" class="inline-flex items-center justify-center rounded-xl border border-zinc-200 bg-white/80 px-3 py-2 text-sm font-medium text-zinc-800 shadow-sm transition hover:bg-white md:hidden" @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-nav">
                                    <span class="sr-only">Toggle menu</span>
                                    <svg x-show="!open" x-cloak viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path d="M4 6h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path d="M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path d="M4 14h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                    <svg x-show="open" x-cloak viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path d="M6 6l8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path d="M14 6l-8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div id="mobile-nav" class="md:hidden" x-show="open" x-cloak x-transition.opacity.duration.200ms>
                            <div class="border-t border-zinc-200/80 px-4 py-3">
                                <div class="grid gap-1">
                                    <a href="{{ route('home') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-zinc-800 transition hover:bg-zinc-50" @click="open = false">Home</a>
                                    <a href="{{ route('about') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-zinc-800 transition hover:bg-zinc-50" @click="open = false">About</a>
                                    <a href="{{ route('portfolio') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-zinc-800 transition hover:bg-zinc-50" @click="open = false">Portfolio</a>
                                    <a href="{{ route('contact') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-zinc-800 transition hover:bg-zinc-50" @click="open = false">Contact</a>
                                </div>

                                <div class="mt-3">
                                    <a href="{{ route('contact') }}" class="btn btn-primary w-full">Start a project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="pt-28 sm:pt-32">
                @yield('content')
            </main>

            <footer class="mt-24 border-t border-zinc-200/70 bg-white/60">
                <div class="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">
                    <div class="grid gap-8 md:grid-cols-12">
                        <div class="md:col-span-5">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-zinc-950 text-white shadow-sm">
                                    <span class="text-[12px] font-semibold tracking-tight">SS</span>
                                </span>
                                <div>
                                    <div class="text-sm font-semibold tracking-tight">SiteStar</div>
                                    <div class="text-sm text-zinc-500">A small studio for clean, fast web experiences.</div>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-4">
                            <div class="text-sm font-semibold">Pages</div>
                            <div class="mt-3 grid gap-2 text-sm text-zinc-600">
                                <a class="transition hover:text-zinc-950" href="{{ route('about') }}">About</a>
                                <a class="transition hover:text-zinc-950" href="{{ route('portfolio') }}">Portfolio</a>
                                <a class="transition hover:text-zinc-950" href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>

                        <div class="md:col-span-3">
                            <div class="text-sm font-semibold">Let’s build something</div>
                            <p class="mt-3 text-sm text-zinc-600">
                                Tell us what you’re shipping. We’ll reply with clear next steps.
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('contact') }}" class="btn btn-outline">Contact</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col gap-2 border-t border-zinc-200/70 pt-6 text-xs text-zinc-500 sm:flex-row sm:items-center sm:justify-between">
                        <div>© {{ date('Y') }} SiteStar. All rights reserved.</div>
                        <div>Built with Laravel, Tailwind, and Alpine.</div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
