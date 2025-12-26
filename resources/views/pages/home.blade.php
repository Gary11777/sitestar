@extends('layouts.app')

@section('title', 'Главная')
@section('description', 'SiteStar - Современная студия веб-разработки, создающая исключительный цифровой опыт с помощью инновационного дизайна и передовых технологий.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-1/4 -left-32 w-96 h-96 bg-primary-200/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-accent-300/30 rounded-full blur-3xl"></div>
    
    <!-- Floating geometric shapes -->
    <div class="absolute top-1/3 right-1/4 w-20 h-20 border border-surface-600/20 rounded-2xl animate-float opacity-40" style="animation-delay: 0s;"></div>
    <div class="absolute top-2/3 left-1/4 w-12 h-12 border border-primary-400/40 rounded-xl animate-float opacity-50" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 right-1/3 w-8 h-8 bg-accent-400/30 rounded-lg animate-float opacity-60" style="animation-delay: 4s;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Hero Content -->
            <div class="text-center lg:text-left" x-data="reveal()" class="reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-100 border border-primary-200 rounded-full mb-8">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    <span class="text-sm text-primary-700">Доступны для новых проектов</span>
                </div>
                
                <h1 class="heading-xl text-surface-100 mb-6">
                    Мы создаём
                    <span class="block text-gradient" x-data="typed(['Цифровое совершенство', 'Современные сайты', 'Пользовательский опыт', 'Истории брендов'], 80, 40, 2500)" x-text="text + '|'"></span>
                </h1>
                
                <p class="text-body max-w-xl mx-auto lg:mx-0 mb-10">
                    Студия веб-разработки, специализирующаяся на создании уникальных цифровых решений, которые приносят результаты.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a 
                        href="{{ route('portfolio') }}" 
                        class="btn-primary"
                        x-data="magnetic()"
                        @mousemove="handleMouseMove"
                        @mouseleave="handleMouseLeave"
                        :style="{ transform: `translate(${x}px, ${y}px)` }"
                    >
                        Наши работы
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary">
                        Связаться с нами
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 mt-16 pt-8 border-t border-surface-700">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-surface-100" x-data="counter(50)" x-text="current + '+'"></div>
                        <div class="text-sm text-surface-500">Выполненных проектов</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-surface-100" x-data="counter(5)" x-text="current + '+'"></div>
                        <div class="text-sm text-surface-500">Лет опыта</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-surface-100" x-data="counter(100)" x-text="current + '%'"></div>
                        <div class="text-sm text-surface-500">Довольных клиентов</div>
                    </div>
                </div>
            </div>
            
            <!-- Hero Visual -->
            <div class="relative hidden lg:block" x-data="parallax(0.3)">
                <div class="relative" :style="{ transform: `translateY(${offset}px)` }">
                    <!-- Browser mockup -->
                    <div class="relative bg-white rounded-2xl border border-surface-700 shadow-2xl shadow-surface-500/20 overflow-hidden">
                        <!-- Browser header -->
                        <div class="flex items-center gap-2 px-4 py-3 bg-surface-900 border-b border-surface-700">
                            <div class="flex gap-1.5">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="flex-1 mx-4">
                                <div class="bg-surface-800 rounded-lg px-4 py-1.5 text-xs text-surface-500 text-center">
                                    sitestar.by
                                </div>
                            </div>
                        </div>
                        <!-- Browser content -->
                        <div class="aspect-[4/3] bg-gradient-to-br from-surface-900 to-white p-8">
                            <div class="h-full flex flex-col">
                                <div class="flex gap-4 mb-6">
                                    <div class="w-8 h-8 bg-primary-100 rounded-lg"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-2 bg-surface-700 rounded w-1/3"></div>
                                        <div class="h-2 bg-surface-800 rounded w-1/4"></div>
                                    </div>
                                </div>
                                <div class="flex-1 grid grid-cols-3 gap-4">
                                    <div class="bg-surface-800 rounded-xl p-4 flex flex-col">
                                        <div class="w-10 h-10 bg-primary-100 rounded-lg mb-4"></div>
                                        <div class="h-2 bg-surface-700 rounded w-full mb-2"></div>
                                        <div class="h-2 bg-surface-700/50 rounded w-2/3"></div>
                                    </div>
                                    <div class="bg-surface-800 rounded-xl p-4 flex flex-col">
                                        <div class="w-10 h-10 bg-accent-300/50 rounded-lg mb-4"></div>
                                        <div class="h-2 bg-surface-700 rounded w-full mb-2"></div>
                                        <div class="h-2 bg-surface-700/50 rounded w-3/4"></div>
                                    </div>
                                    <div class="bg-surface-800 rounded-xl p-4 flex flex-col">
                                        <div class="w-10 h-10 bg-primary-200 rounded-lg mb-4"></div>
                                        <div class="h-2 bg-surface-700 rounded w-full mb-2"></div>
                                        <div class="h-2 bg-surface-700/50 rounded w-1/2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-primary-400 to-primary-500 rounded-2xl shadow-lg shadow-primary-500/30 flex items-center justify-center animate-float" style="animation-delay: 1s;">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-br from-accent-400 to-accent-500 rounded-xl shadow-lg shadow-accent-500/30 flex items-center justify-center animate-float" style="animation-delay: 3s;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
        <div class="flex flex-col items-center gap-2 text-surface-500">
            <span class="text-xs uppercase tracking-widest">Листайте</span>
            <div class="w-6 h-10 border-2 border-surface-600 rounded-full p-1">
                <div class="w-1.5 h-1.5 bg-surface-500 rounded-full animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-surface-900">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16" x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-medium rounded-full mb-4">
                Что мы делаем
            </span>
            <h2 class="heading-lg text-surface-100 mb-4">Наши услуги</h2>
            <p class="text-body max-w-2xl mx-auto">
                От идеи до запуска — мы предоставляем комплексные цифровые решения, адаптированные под ваши потребности.
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children" x-data="reveal()" class="reveal">
            <!-- Service Card 1 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">Веб-разработка</h3>
                <p class="text-surface-500 leading-relaxed">
                    Индивидуальные веб-приложения на современных технологиях. От лендингов до сложных платформ — мы создаём быстрые и масштабируемые решения.
                </p>
            </div>
            
            <!-- Service Card 2 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-accent-300/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">UI/UX дизайн</h3>
                <p class="text-surface-500 leading-relaxed">
                    Дизайн, ориентированный на пользователя. Мы создаём интуитивные интерфейсы и бесшовный опыт, превращающий посетителей в клиентов.
                </p>
            </div>
            
            <!-- Service Card 3 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">Интернет-магазины</h3>
                <p class="text-surface-500 leading-relaxed">
                    Мощные онлайн-магазины, которые увеличивают продажи. От каталогов до интеграции платежей — мы создаём полноценные e-commerce решения.
                </p>
            </div>
            
            <!-- Service Card 4 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">Фирменный стиль</h3>
                <p class="text-surface-500 leading-relaxed">
                    Уникальная визуальная идентичность. Дизайн логотипа, цветовые системы и бренд-гайдлайны, рассказывающие вашу историю.
                </p>
            </div>
            
            <!-- Service Card 5 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-pink-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">Адаптивный дизайн</h3>
                <p class="text-surface-500 leading-relaxed">
                    Безупречный опыт на всех устройствах. Mobile-first подход, гарантирующий идеальный вид на любом экране.
                </p>
            </div>
            
            <!-- Service Card 6 -->
            <div class="card card-glow group" x-data="cardGlow()" @mousemove="handleMouseMove">
                <div class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-surface-100 mb-3">SEO-оптимизация</h3>
                <p class="text-surface-500 leading-relaxed">
                    Видимость, которая способствует росту. Техническое SEO, оптимизация производительности и лучшие практики для высоких позиций.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-padding">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16" x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-accent-300/30 text-accent-600 text-sm font-medium rounded-full mb-4">
                Наш процесс
            </span>
            <h2 class="heading-lg text-surface-100 mb-4">Как мы работаем</h2>
            <p class="text-body max-w-2xl mx-auto">
                Проверенная методология, которая приносит результаты каждый раз.
            </p>
        </div>
        
        <!-- Process Steps -->
        <div class="relative">
            <!-- Connection line -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-surface-700 to-transparent -translate-y-1/2"></div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative" x-data="reveal()" class="reveal">
                    <div class="bg-white border border-surface-700 rounded-2xl p-6 relative z-10 hover:shadow-lg hover:shadow-primary-500/10 transition-shadow">
                        <div class="w-12 h-12 bg-primary-500 rounded-xl flex items-center justify-center text-white font-bold text-lg mb-6">
                            01
                        </div>
                        <h3 class="text-lg font-semibold text-surface-100 mb-2">Исследование</h3>
                        <p class="text-surface-500 text-sm">
                            Мы глубоко изучаем ваши цели, аудиторию и рынок, чтобы создать прочную основу для успеха.
                        </p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative" x-data="reveal()" class="reveal" style="transition-delay: 0.1s;">
                    <div class="bg-white border border-surface-700 rounded-2xl p-6 relative z-10 hover:shadow-lg hover:shadow-accent-500/10 transition-shadow">
                        <div class="w-12 h-12 bg-accent-500 rounded-xl flex items-center justify-center text-white font-bold text-lg mb-6">
                            02
                        </div>
                        <h3 class="text-lg font-semibold text-surface-100 mb-2">Дизайн</h3>
                        <p class="text-surface-500 text-sm">
                            Создаём визуальные концепции и пользовательские сценарии, соответствующие вашему бренду.
                        </p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative" x-data="reveal()" class="reveal" style="transition-delay: 0.2s;">
                    <div class="bg-white border border-surface-700 rounded-2xl p-6 relative z-10 hover:shadow-lg hover:shadow-green-500/10 transition-shadow">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center text-white font-bold text-lg mb-6">
                            03
                        </div>
                        <h3 class="text-lg font-semibold text-surface-100 mb-2">Разработка</h3>
                        <p class="text-surface-500 text-sm">
                            Создаём надёжные и масштабируемые решения с чистым кодом и современными практиками.
                        </p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="relative" x-data="reveal()" class="reveal" style="transition-delay: 0.3s;">
                    <div class="bg-white border border-surface-700 rounded-2xl p-6 relative z-10 hover:shadow-lg hover:shadow-pink-500/10 transition-shadow">
                        <div class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center text-white font-bold text-lg mb-6">
                            04
                        </div>
                        <h3 class="text-lg font-semibold text-surface-100 mb-2">Запуск</h3>
                        <p class="text-surface-500 text-sm">
                            Запускаем ваш проект с заботой и обеспечиваем постоянную поддержку для успеха.
                        </p>
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
                    Готовы начать проект?
                </h2>
                <p class="text-body max-w-xl mx-auto mb-10">
                    Давайте сотрудничать, чтобы воплотить вашу идею в жизнь. Свяжитесь с нами, и мы обсудим, как помочь вашему бизнесу расти.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a 
                        href="{{ route('contact') }}" 
                        class="btn-primary"
                        x-data="magnetic()"
                        @mousemove="handleMouseMove"
                        @mouseleave="handleMouseLeave"
                        :style="{ transform: `translate(${x}px, ${y}px)` }"
                    >
                        Начать разговор
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn-secondary">
                        Портфолио
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
