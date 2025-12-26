@extends('layouts.app')

@section('title', 'О нас')
@section('description', 'Узнайте больше о SiteStar - команде дизайнеров и разработчиков, создающих исключительный цифровой опыт.')

@section('content')
<!-- Hero Section -->
<section class="relative section-padding overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto">
        <div class="max-w-3xl" x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-500 text-sm font-medium rounded-full mb-6">
                О нас
            </span>
            <h1 class="heading-xl text-surface-100 mb-6">
                Мы — команда
                <span class="text-gradient">цифровых мастеров</span>
            </h1>
            <p class="text-body text-xl">
                Основанная с целью объединить креативность и технологии, SiteStar превратилась в полноценную цифровую студию, превращающую идеи в эффективный цифровой опыт.
            </p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="section-padding bg-surface-900">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image/Visual -->
            <div class="relative" x-data="reveal()" class="reveal">
                <div class="relative aspect-square rounded-3xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/20 via-surface-800 to-accent-500/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-6 relative">
                                <div class="absolute inset-0 bg-primary-500/20 rounded-full animate-pulse-slow"></div>
                                <div class="absolute inset-4 bg-primary-500/30 rounded-full animate-pulse-slow" style="animation-delay: 0.5s;"></div>
                                <div class="absolute inset-8 bg-primary-500 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-surface-100" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-4xl font-bold text-surface-100 mb-2">2019</div>
                            <div class="text-surface-400">Год основания</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating stats -->
                <div class="absolute -bottom-6 -right-6 bg-surface-800 border border-surface-700 rounded-2xl p-6 shadow-xl">
                    <div class="text-3xl font-bold text-surface-100 mb-1" x-data="counter(50)" x-text="current + '+'"></div>
                    <div class="text-surface-400 text-sm">Довольных клиентов</div>
                </div>
            </div>
            
            <!-- Content -->
            <div x-data="reveal()" class="reveal">
                <h2 class="heading-lg text-surface-100 mb-6">Наша история</h2>
                <div class="space-y-4 text-surface-400 leading-relaxed">
                    <p>
                        SiteStar начиналась как небольшой фриланс-проект, основанный на простой идее: каждый бизнес заслуживает мощное онлайн-присутствие. То, что началось как проект одного разработчика, переросло в профессиональную команду креативных специалистов.
                    </p>
                    <p>
                        За эти годы нам посчастливилось работать со стартапами, устоявшимися компаниями и всем, что между ними. Каждый проект научил нас чему-то новому и подтолкнул к совершенствованию.
                    </p>
                    <p>
                        Сегодня мы продолжаем работать с теми же ценностями: прозрачность, качество и искренняя приверженность успеху наших клиентов. Мы не просто создаём сайты — мы строим партнёрские отношения.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16" x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-accent-300/30 text-accent-600 text-sm font-medium rounded-full mb-4">
                Наши ценности
            </span>
            <h2 class="heading-lg text-surface-100 mb-4">Что нас движет</h2>
            <p class="text-body max-w-2xl mx-auto">
                Наши основные ценности определяют каждое решение и каждый проект.
            </p>
        </div>
        
        <!-- Values Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children" x-data="reveal()" class="reveal">
            <!-- Value 1 -->
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto bg-primary-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-surface-100 mb-2">Качество прежде всего</h3>
                <p class="text-surface-400 text-sm">
                    Мы никогда не идём на компромисс в качестве. Каждая строка кода, каждый пиксель создан с заботой.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto bg-accent-300/30 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-surface-100 mb-2">Сотрудничество</h3>
                <p class="text-surface-400 text-sm">
                    Мы работаем с клиентами как партнёры, гарантируя, что их видение определяет каждое решение.
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-surface-100 mb-2">Инновации</h3>
                <p class="text-surface-400 text-sm">
                    Мы идём в ногу со временем, внедряя новые технологии и подходы на благо клиентов.
                </p>
            </div>
            
            <!-- Value 4 -->
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto bg-pink-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-surface-100 mb-2">Страсть</h3>
                <p class="text-surface-400 text-sm">
                    Мы искренне любим своё дело. Эта страсть видна в каждом проекте.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section-padding bg-surface-900">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div x-data="reveal()" class="reveal">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-500 text-sm font-medium rounded-full mb-6">
                    Наша экспертиза
                </span>
                <h2 class="heading-lg text-surface-100 mb-6">Технологии, которыми мы владеем</h2>
                <p class="text-body mb-8">
                    Мы работаем с современными, проверенными технологиями, чтобы ваш проект был построен на прочной основе.
                </p>
                
                <!-- Tech Stack -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#61DAFB]/10 rounded-lg flex items-center justify-center">
                            <span class="text-[#61DAFB] font-bold text-sm">Re</span>
                        </div>
                        <span class="text-surface-100 font-medium">React</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#38BDF8]/10 rounded-lg flex items-center justify-center">
                            <span class="text-[#38BDF8] font-bold text-sm">Tw</span>
                        </div>
                        <span class="text-surface-100 font-medium">Tailwind</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#FF2D20]/10 rounded-lg flex items-center justify-center">
                            <span class="text-[#FF2D20] font-bold text-sm">La</span>
                        </div>
                        <span class="text-surface-100 font-medium">Laravel</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#8CC84B]/10 rounded-lg flex items-center justify-center">
                            <span class="text-[#8CC84B] font-bold text-sm">No</span>
                        </div>
                        <span class="text-surface-100 font-medium">Node.js</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#3178C6]/10 rounded-lg flex items-center justify-center">
                            <span class="text-[#3178C6] font-bold text-sm">Ts</span>
                        </div>
                        <span class="text-surface-100 font-medium">TypeScript</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-surface-800 rounded-xl border border-surface-700">
                        <div class="w-10 h-10 bg-[#000]/10 rounded-lg flex items-center justify-center">
                            <span class="text-surface-100 font-bold text-sm">Nx</span>
                        </div>
                        <span class="text-surface-100 font-medium">Next.js</span>
                    </div>
                </div>
            </div>
            
            <!-- Visual -->
            <div class="relative" x-data="reveal()" class="reveal">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Skill bars -->
                    <div class="col-span-2 bg-surface-800 border border-surface-700 rounded-2xl p-6">
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-surface-100 font-medium">Фронтенд-разработка</span>
                                    <span class="text-primary-500">95%</span>
                                </div>
                                <div class="h-2 bg-surface-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-primary-500 to-primary-400 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-surface-100 font-medium">Бэкенд-разработка</span>
                                    <span class="text-accent-600">90%</span>
                                </div>
                                <div class="h-2 bg-surface-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-accent-500 to-accent-400 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-surface-100 font-medium">UI/UX дизайн</span>
                                    <span class="text-green-400">88%</span>
                                </div>
                                <div class="h-2 bg-surface-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-green-500 to-green-400 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-surface-100 font-medium">DevOps и развёртывание</span>
                                    <span class="text-pink-400">85%</span>
                                </div>
                                <div class="h-2 bg-surface-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-pink-500 to-pink-400 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding">
    <div class="max-w-5xl mx-auto">
        <div 
            class="relative bg-gradient-to-br from-surface-800 to-surface-900 rounded-3xl border border-surface-700 overflow-hidden"
            x-data="reveal()" 
            class="reveal"
        >
            <!-- Background decoration -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary-100 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent-300/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative px-8 py-16 sm:px-16 sm:py-20 text-center">
                <h2 class="heading-lg text-surface-100 mb-4">
                    Давайте создадим что-то великое вместе
                </h2>
                <p class="text-body max-w-xl mx-auto mb-10">
                    Готовы вывести своё цифровое присутствие на новый уровень? Мы будем рады услышать о вашем проекте.
                </p>
                <a 
                    href="{{ route('contact') }}" 
                    class="btn-primary"
                    x-data="magnetic()"
                    @mousemove="handleMouseMove"
                    @mouseleave="handleMouseLeave"
                    :style="{ transform: `translate(${x}px, ${y}px)` }"
                >
                    Связаться с нами
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
