@extends('layouts.site')

@section('title', 'SiteStar — Web Design & Development')

@section('content')
    <div class="relative overflow-hidden">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <section class="relative pb-16 pt-6 sm:pb-20 sm:pt-10">
                <div class="pointer-events-none absolute -top-24 left-1/2 -translate-x-1/2" aria-hidden="true">
                    <div class="h-[520px] w-[520px] rounded-full bg-gradient-to-tr from-amber-300/30 via-peach-400/20 to-coral-400/25 blur-3xl" data-parallax="16"></div>
                </div>

                <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
                    <div class="lg:col-span-7" data-reveal>
                        <div class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white/70 px-3 py-1 text-xs font-medium text-zinc-700 shadow-sm backdrop-blur">
                            <span class="relative inline-flex h-2 w-2">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-amber-400 opacity-30"></span>
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-gradient-to-r from-amber-400 to-coral-500"></span>
                            </span>
                            Available for new projects
                        </div>

                        <h1 class="mt-6 text-balance text-4xl font-semibold tracking-tight text-zinc-950 sm:text-5xl">
                            Modern websites that feel effortless —
                            <span class="text-gradient">and ship fast</span>.
                        </h1>

                        <p class="mt-6 max-w-xl text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg">
                            SiteStar is a focused design and development studio for brands that value clarity, performance, and detail.
                            We build clean interfaces, subtle interactions, and reliable code that scales.
                        </p>

                        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                            <a href="{{ route('contact') }}" class="btn btn-primary group relative overflow-hidden">
                                <span class="absolute -inset-10 bg-gradient-to-r from-amber-400 via-peach-500 to-coral-500 opacity-0 blur-2xl transition duration-300 group-hover:opacity-25"></span>
                                <span class="relative">Start a project</span>
                            </a>
                            <a href="{{ route('portfolio') }}" class="btn btn-outline">View portfolio</a>
                        </div>

                        <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-zinc-500">
                            <div class="inline-flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-amber-400"></span>
                                Mobile-first
                            </div>
                            <div class="inline-flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-peach-500"></span>
                                Tailwind + Alpine
                            </div>
                            <div class="inline-flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-coral-500"></span>
                                Performance-minded
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-5" data-reveal data-reveal-delay="120">
                        <div class="card card-hover overflow-hidden">
                            <div class="border-b border-zinc-200 p-5">
                                <div class="text-sm font-semibold tracking-tight">What we build</div>
                                <p class="mt-2 text-sm text-zinc-600">Small team focus. Studio-grade polish.</p>
                            </div>

                            <div class="grid gap-4 p-5">
                                <div class="flex items-start gap-3">
                                    <div class="mt-0.5 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-zinc-950 text-white">
                                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                            <path d="M4.5 6.5h11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M4.5 10h7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M4.5 13.5h9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold">UI that reads clean</div>
                                        <div class="mt-1 text-sm text-zinc-600">A calm hierarchy with purposefully placed color.</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="mt-0.5 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-zinc-950 text-white">
                                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                            <path d="M6 5.5h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M6 10h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M6 14.5h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                            <path d="M4 5.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                                            <path d="M4 10h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                                            <path d="M4 14.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold">Laravel-first structure</div>
                                        <div class="mt-1 text-sm text-zinc-600">Organized blades, reusable components, clean routing.</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <div class="mt-0.5 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-zinc-950 text-white">
                                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                            <path d="M4.5 10.5l3 3 8-8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold">Subtle interaction design</div>
                                        <div class="mt-1 text-sm text-zinc-600">Reveal, micro-hover, and parallax accents — kept restrained.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="py-14 sm:py-16">
                <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
                    <div class="lg:col-span-4" data-reveal>
                        <h2 class="text-pretty text-2xl font-semibold tracking-tight sm:text-3xl">
                            A minimal system with
                            <span class="text-gradient">just enough depth</span>.
                        </h2>
                        <p class="mt-4 text-sm leading-relaxed text-zinc-600 sm:text-base">
                            We keep layouts calm and typography disciplined, then add micro-details that make the experience feel alive.
                        </p>
                    </div>

                    <div class="lg:col-span-8">
                        <div class="grid gap-4 sm:grid-cols-2" data-reveal data-reveal-delay="90">
                            <div class="card card-hover p-5">
                                <div class="text-sm font-semibold">Web Design</div>
                                <p class="mt-2 text-sm text-zinc-600">Interface systems, landing pages, and design direction that feels modern.</p>
                            </div>
                            <div class="card card-hover p-5">
                                <div class="text-sm font-semibold">Development</div>
                                <p class="mt-2 text-sm text-zinc-600">Laravel builds with clean architecture and production-friendly defaults.</p>
                            </div>
                            <div class="card card-hover p-5">
                                <div class="text-sm font-semibold">Performance</div>
                                <p class="mt-2 text-sm text-zinc-600">Fast load times, lean assets, and accessibility as a baseline.</p>
                            </div>
                            <div class="card card-hover p-5">
                                <div class="text-sm font-semibold">Micro-interactions</div>
                                <p class="mt-2 text-sm text-zinc-600">Alpine-powered behaviors that feel subtle, intentional, and brand-safe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-14 sm:py-16">
                <div class="flex flex-col gap-3" data-reveal>
                    <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">Selected work</h2>
                    <p class="max-w-2xl text-sm text-zinc-600 sm:text-base">A small portfolio focused on clean structure and confident presentation.</p>
                </div>

                <div class="mt-8 grid gap-4 md:grid-cols-2" data-reveal data-reveal-delay="100">
                    @foreach ($featuredProjects as $project)
                        <a href="{{ $project['url'] }}" target="_blank" rel="noreferrer" class="card card-hover group overflow-hidden">
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
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-8" data-reveal data-reveal-delay="180">
                    <a href="{{ route('portfolio') }}" class="btn btn-outline">See full portfolio</a>
                </div>
            </section>

            <section class="pb-20 pt-10 sm:pb-24">
                <div class="card overflow-hidden" data-reveal>
                    <div class="grid gap-8 p-6 sm:p-10 lg:grid-cols-12 lg:items-center">
                        <div class="lg:col-span-8">
                            <h2 class="text-pretty text-2xl font-semibold tracking-tight sm:text-3xl">
                                Want a site that feels premium,
                                <span class="text-gradient">without feeling loud</span>?
                            </h2>
                            <p class="mt-3 text-sm text-zinc-600 sm:text-base">Send a short brief — we’ll reply with clear next steps.</p>
                        </div>
                        <div class="lg:col-span-4 lg:flex lg:justify-end">
                            <a href="{{ route('contact') }}" class="btn btn-primary w-full lg:w-auto">Contact us</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
