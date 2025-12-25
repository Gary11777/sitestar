@extends('layouts.site')

@section('title', 'About — SiteStar')

@section('content')
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <section class="pb-14 pt-6 sm:pb-18 sm:pt-10">
            <div class="max-w-3xl" data-reveal>
                <h1 class="text-balance text-4xl font-semibold tracking-tight sm:text-5xl">
                    A studio built for
                    <span class="text-gradient">clarity</span>.
                </h1>
                <p class="mt-6 text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg">
                    SiteStar works like a small, senior team: deliberate decisions, clean execution, and careful details.
                    We combine design sensitivity with production-grade Laravel development.
                </p>
            </div>
        </section>

        <section class="py-12 sm:py-14">
            <div class="grid gap-6 lg:grid-cols-12 lg:gap-10">
                <div class="lg:col-span-4" data-reveal>
                    <div class="text-sm font-semibold tracking-tight">Principles</div>
                    <p class="mt-3 text-sm leading-relaxed text-zinc-600 sm:text-base">
                        Inspired by modern editorial minimalism — strong contrast, calm spacing, and intentional accents.
                    </p>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid gap-4 sm:grid-cols-2" data-reveal data-reveal-delay="90">
                        <div class="card card-hover p-5">
                            <div class="text-sm font-semibold">Structure first</div>
                            <p class="mt-2 text-sm text-zinc-600">Clear hierarchy and predictable layouts that make content feel easy.</p>
                        </div>
                        <div class="card card-hover p-5">
                            <div class="text-sm font-semibold">Depth, not noise</div>
                            <p class="mt-2 text-sm text-zinc-600">Soft shadows and subtle motion that elevate without distracting.</p>
                        </div>
                        <div class="card card-hover p-5">
                            <div class="text-sm font-semibold">Performance-aware</div>
                            <p class="mt-2 text-sm text-zinc-600">Lean UI, accessible markup, and fast delivery as default.</p>
                        </div>
                        <div class="card card-hover p-5">
                            <div class="text-sm font-semibold">Reusable components</div>
                            <p class="mt-2 text-sm text-zinc-600">A system you can expand — not a one-off page build.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 sm:py-14">
            <div class="grid gap-10 lg:grid-cols-12 lg:gap-10">
                <div class="lg:col-span-5" data-reveal>
                    <h2 class="text-pretty text-2xl font-semibold tracking-tight sm:text-3xl">How we work</h2>
                    <p class="mt-4 text-sm leading-relaxed text-zinc-600 sm:text-base">
                        A small process that stays flexible — enough structure to keep momentum, without slowing shipping.
                    </p>
                </div>

                <div class="lg:col-span-7" data-reveal data-reveal-delay="90">
                    <div class="grid gap-4">
                        <div class="card p-5">
                            <div class="flex items-start gap-4">
                                <div class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-amber-400 to-peach-500 text-sm font-semibold text-zinc-950">1</div>
                                <div>
                                    <div class="text-sm font-semibold">Direction</div>
                                    <p class="mt-1 text-sm text-zinc-600">We align on goals, audience, and what “success” looks like.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex items-start gap-4">
                                <div class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-peach-400 to-coral-500 text-sm font-semibold text-zinc-950">2</div>
                                <div>
                                    <div class="text-sm font-semibold">Design + build</div>
                                    <p class="mt-1 text-sm text-zinc-600">We design in components, then implement quickly with Tailwind and Blade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-5">
                            <div class="flex items-start gap-4">
                                <div class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-amber-300 to-coral-400 text-sm font-semibold text-zinc-950">3</div>
                                <div>
                                    <div class="text-sm font-semibold">Polish + launch</div>
                                    <p class="mt-1 text-sm text-zinc-600">Accessibility, performance, micro-interactions — then we ship with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 pt-10 sm:pb-24">
            <div class="card overflow-hidden" data-reveal>
                <div class="grid gap-8 p-6 sm:p-10 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-8">
                        <h2 class="text-pretty text-2xl font-semibold tracking-tight sm:text-3xl">
                            Ready to shape your next release
                            <span class="text-gradient">with intention</span>?
                        </h2>
                        <p class="mt-3 text-sm text-zinc-600 sm:text-base">Let’s discuss scope, timelines, and the best approach.</p>
                    </div>
                    <div class="lg:col-span-4 lg:flex lg:justify-end">
                        <a href="{{ route('contact') }}" class="btn btn-primary w-full lg:w-auto">Contact</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
