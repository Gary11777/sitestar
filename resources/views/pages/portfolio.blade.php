@extends('layouts.site')

@section('title', 'Portfolio — SiteStar')

@section('content')
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <section class="pb-10 pt-6 sm:pb-14 sm:pt-10">
            <div class="max-w-3xl" data-reveal>
                <h1 class="text-balance text-4xl font-semibold tracking-tight sm:text-5xl">
                    Portfolio,
                    <span class="text-gradient">selected</span>.
                </h1>
                <p class="mt-6 text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg">
                    A small collection of completed work. Each project focuses on clear hierarchy, clean build quality, and a calm, modern aesthetic.
                </p>
            </div>
        </section>

        <section class="pb-20 sm:pb-24">
            <div class="grid gap-4 md:grid-cols-2" data-reveal data-reveal-delay="90">
                @foreach ($projects as $project)
                    <a href="{{ $project['url'] }}" target="_blank" rel="noreferrer" class="card card-hover group overflow-hidden" data-reveal data-reveal-delay="{{ $loop->index * 80 }}">
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-50">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview" class="h-full w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-amber-400/0 via-transparent to-coral-500/0 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between gap-4">
                                <div class="text-sm font-semibold">{{ $project['title'] }}</div>
                                <span class="inline-flex items-center gap-1 rounded-full border border-zinc-200 bg-white px-2.5 py-1 text-xs text-zinc-600">
                                    Live
                                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5">
                                        <path d="M7 13l6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        <path d="M8.75 7H13v4.25" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>

                            <p class="mt-2 text-sm text-zinc-600">{{ $project['description'] }}</p>

                            @if (!empty($project['tags']))
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach ($project['tags'] as $tag)
                                        <span class="rounded-full border border-zinc-200 bg-white px-2.5 py-1 text-xs text-zinc-600">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10" data-reveal data-reveal-delay="180">
                <div class="card p-6 sm:p-8">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div class="text-sm font-semibold">Need something similar?</div>
                            <div class="mt-1 text-sm text-zinc-600">Tell us your goal — we’ll recommend the cleanest approach.</div>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
