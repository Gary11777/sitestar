@extends('layouts.site')

@section('title', 'Contact — SiteStar')

@section('content')
    @php
        $budgetOptions = [
            'Under $1k',
            '$1k–$3k',
            '$3k–$8k',
            '$8k+',
            'Not sure yet',
        ];
    @endphp

    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <section class="pb-10 pt-6 sm:pb-14 sm:pt-10">
            <div class="max-w-3xl" data-reveal>
                <h1 class="text-balance text-4xl font-semibold tracking-tight sm:text-5xl">
                    Let’s build something
                    <span class="text-gradient">clean</span>.
                </h1>
                <p class="mt-6 text-pretty text-base leading-relaxed text-zinc-600 sm:text-lg">
                    Send a short message with your goals. We’ll reply with clear next steps and a suggested scope.
                </p>
            </div>

            @if (session('success'))
                <div class="mt-8" data-reveal data-reveal-delay="90">
                    <div class="card border-amber-200 bg-white/70 p-5 shadow-sm">
                        <div class="text-sm font-semibold">Message sent</div>
                        <div class="mt-1 text-sm text-zinc-600">{{ session('success') }}</div>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-6" data-reveal data-reveal-delay="90">
                    <div class="card border-coral-200 bg-white/70 p-5">
                        <div class="text-sm font-semibold">Please check the form</div>
                        <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-zinc-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </section>

        <section class="pb-20 sm:pb-24">
            <div class="grid gap-8 lg:grid-cols-12 lg:gap-12">
                <div class="lg:col-span-7" data-reveal data-reveal-delay="100">
                    <div class="card p-6 sm:p-8">
                        <form method="POST" action="{{ route('contact.submit') }}" class="grid gap-5">
                            @csrf

                            <div class="hidden">
                                <label class="text-sm font-medium" for="website">Website</label>
                                <input id="website" name="website" type="text" tabindex="-1" autocomplete="off" value="" />
                            </div>

                            <div class="grid gap-2">
                                <label class="text-sm font-medium" for="name">Name</label>
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    autocomplete="name"
                                    @class([
                                        'w-full rounded-xl border bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-amber-400',
                                        'border-zinc-200' => !$errors->has('name'),
                                        'border-coral-400' => $errors->has('name'),
                                    ])
                                    required
                                />
                                @error('name')
                                    <div class="text-xs font-medium text-coral-700">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="grid gap-2 sm:grid-cols-2">
                                <div class="grid gap-2">
                                    <label class="text-sm font-medium" for="email">Email</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        value="{{ old('email') }}"
                                        autocomplete="email"
                                        @class([
                                            'w-full rounded-xl border bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-amber-400',
                                            'border-zinc-200' => !$errors->has('email'),
                                            'border-coral-400' => $errors->has('email'),
                                        ])
                                        required
                                    />
                                    @error('email')
                                        <div class="text-xs font-medium text-coral-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="grid gap-2">
                                    <label class="text-sm font-medium" for="company">Company <span class="text-zinc-400">(optional)</span></label>
                                    <input
                                        id="company"
                                        name="company"
                                        type="text"
                                        value="{{ old('company') }}"
                                        autocomplete="organization"
                                        @class([
                                            'w-full rounded-xl border bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-amber-400',
                                            'border-zinc-200' => !$errors->has('company'),
                                            'border-coral-400' => $errors->has('company'),
                                        ])
                                    />
                                    @error('company')
                                        <div class="text-xs font-medium text-coral-700">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid gap-2">
                                <label class="text-sm font-medium" for="budget">Budget <span class="text-zinc-400">(optional)</span></label>

                                <div
                                    x-data="{ open: false, value: @js(old('budget')), label: @js(old('budget') ?: 'Select a range') }"
                                    class="relative"
                                >
                                    <input type="hidden" name="budget" :value="value" />

                                    <button
                                        id="budget"
                                        type="button"
                                        class="flex w-full items-center justify-between rounded-xl border border-zinc-200 bg-white px-4 py-3 text-left text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-amber-400"
                                        @click="open = !open"
                                        @keydown.escape.window="open = false"
                                        :aria-expanded="open.toString()"
                                    >
                                        <span class="text-zinc-800" x-text="label"></span>
                                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-zinc-500 transition" :class="open ? 'rotate-180' : ''">
                                            <path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>

                                    <div
                                        class="absolute left-0 right-0 top-full z-20 mt-2 overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-[0_24px_50px_rgba(0,0,0,0.12)]"
                                        x-show="open"
                                        x-cloak
                                        x-transition.origin.top.duration.200ms
                                        @click.outside="open = false"
                                    >
                                        <div class="grid">
                                            <button
                                                type="button"
                                                class="px-4 py-2.5 text-left text-sm text-zinc-700 transition hover:bg-zinc-50"
                                                @click="value = null; label = @js('Select a range'); open = false"
                                            >
                                                Select a range
                                            </button>

                                            @foreach ($budgetOptions as $option)
                                                <button
                                                    type="button"
                                                    class="px-4 py-2.5 text-left text-sm text-zinc-700 transition hover:bg-zinc-50"
                                                    @click="value = @js($option); label = @js($option); open = false"
                                                >
                                                    {{ $option }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                @error('budget')
                                    <div class="text-xs font-medium text-coral-700">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="grid gap-2">
                                <label class="text-sm font-medium" for="message">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    @class([
                                        'w-full resize-none rounded-xl border bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-amber-400',
                                        'border-zinc-200' => !$errors->has('message'),
                                        'border-coral-400' => $errors->has('message'),
                                    ])
                                    required
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-xs font-medium text-coral-700">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <button type="submit" class="btn btn-primary">Send message</button>
                                <div class="text-xs text-zinc-500">We typically reply within 1–2 business days.</div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-5" data-reveal data-reveal-delay="160">
                    <div class="grid gap-4">
                        <div class="card p-6">
                            <div class="text-sm font-semibold">Email</div>
                            <div class="mt-2 text-sm text-zinc-600">
                                <a href="mailto:hello@sitestar.dev" class="transition hover:text-zinc-950">hello@sitestar.dev</a>
                            </div>
                        </div>

                        <div class="card p-6">
                            <div class="text-sm font-semibold">What to include</div>
                            <ul class="mt-3 grid gap-2 text-sm text-zinc-600">
                                <li>Goal + audience</li>
                                <li>Rough timeline</li>
                                <li>Links or references (optional)</li>
                            </ul>
                        </div>

                        <div class="card p-6">
                            <div class="text-sm font-semibold">Next steps</div>
                            <p class="mt-2 text-sm text-zinc-600">We’ll propose a direction, milestones, and a clear scope before any work begins.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
