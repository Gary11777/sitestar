@extends('layouts.app')

@section('title', 'Portfolio')
@section('description', 'Explore our portfolio of web development projects. See how we\'ve helped businesses create exceptional digital experiences.')

@section('content')
<!-- Hero Section -->
<section class="relative section-padding overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-primary-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto text-center">
        <div x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-500 text-sm font-medium rounded-full mb-6">
                Our Work
            </span>
            <h1 class="heading-xl text-surface-100 mb-6">
                Featured <span class="text-gradient">Projects</span>
            </h1>
            <p class="text-body max-w-2xl mx-auto">
                A curated selection of our recent work, showcasing our expertise in creating impactful digital solutions for diverse industries.
            </p>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="section-padding pt-0">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-8 stagger-children" x-data="reveal()" class="reveal">
            
            <!-- Project 1: DimGent.com -->
            <a 
                href="https://dimgent.com/" 
                target="_blank" 
                rel="noopener noreferrer"
                class="group relative bg-white border border-surface-700 rounded-3xl overflow-hidden transition-all duration-500 hover:border-surface-700 hover:shadow-2xl hover:shadow-primary-500/5"
                x-data="cardGlow()" 
                @mousemove="handleMouseMove"
            >
                <!-- Glow effect overlay -->
                <div class="absolute inset-0 bg-gradient-to-br from-primary-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Project Image/Preview -->
                <div class="relative aspect-[16/10] bg-gradient-to-br from-surface-900 to-white overflow-hidden">
                    <!-- Placeholder visual representing the site -->
                    <div class="absolute inset-0 p-6">
                        <div class="h-full bg-surface-800/50 rounded-xl border border-surface-700/50 p-4 flex flex-col">
                            <!-- Mock header -->
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-8 h-8 bg-primary-500/30 rounded-lg"></div>
                                <div class="flex-1 h-2 bg-surface-700 rounded w-24"></div>
                                <div class="flex gap-2">
                                    <div class="h-2 w-12 bg-surface-700 rounded"></div>
                                    <div class="h-2 w-12 bg-surface-700 rounded"></div>
                                    <div class="h-2 w-12 bg-surface-700 rounded"></div>
                                </div>
                            </div>
                            <!-- Mock hero -->
                            <div class="flex-1 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="h-4 bg-surface-700 rounded w-48 mx-auto mb-3"></div>
                                    <div class="h-2 bg-surface-700/50 rounded w-64 mx-auto mb-2"></div>
                                    <div class="h-2 bg-surface-700/50 rounded w-56 mx-auto mb-4"></div>
                                    <div class="h-8 w-24 bg-primary-500/30 rounded-lg mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hover overlay -->
                    <div class="absolute inset-0 bg-primary-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6 text-surface-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Project Info -->
                <div class="relative p-8">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-surface-100 mb-2 group-hover:text-primary-500 transition-colors">
                                DimGent.com
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Corporate</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Full-Stack</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">International</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 bg-surface-800 rounded-full flex items-center justify-center group-hover:bg-primary-500 transition-colors">
                            <svg class="w-5 h-5 text-surface-400 group-hover:text-surface-100 transition-colors transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-surface-400 leading-relaxed">
                        A sophisticated corporate platform for an international consulting firm. Features a modern, multilingual interface with seamless navigation, dynamic content management, and optimized performance for global audiences.
                    </p>
                </div>
            </a>
            
            <!-- Project 2: DimGent.by -->
            <a 
                href="https://dimgent.by/" 
                target="_blank" 
                rel="noopener noreferrer"
                class="group relative bg-white border border-surface-700 rounded-3xl overflow-hidden transition-all duration-500 hover:border-surface-700 hover:shadow-2xl hover:shadow-accent-500/5"
                x-data="cardGlow()" 
                @mousemove="handleMouseMove"
            >
                <!-- Glow effect overlay -->
                <div class="absolute inset-0 bg-gradient-to-br from-accent-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Project Image/Preview -->
                <div class="relative aspect-[16/10] bg-gradient-to-br from-surface-900 to-white overflow-hidden">
                    <!-- Placeholder visual representing the site -->
                    <div class="absolute inset-0 p-6">
                        <div class="h-full bg-surface-800/50 rounded-xl border border-surface-700/50 p-4 flex flex-col">
                            <!-- Mock header -->
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-8 h-8 bg-accent-500/30 rounded-lg"></div>
                                <div class="flex-1 h-2 bg-surface-700 rounded w-24"></div>
                                <div class="flex gap-2">
                                    <div class="h-2 w-12 bg-surface-700 rounded"></div>
                                    <div class="h-2 w-12 bg-surface-700 rounded"></div>
                                </div>
                            </div>
                            <!-- Mock content grid -->
                            <div class="flex-1 grid grid-cols-3 gap-3">
                                <div class="col-span-2 bg-surface-700/30 rounded-lg p-3">
                                    <div class="h-3 bg-surface-700 rounded w-3/4 mb-2"></div>
                                    <div class="h-2 bg-surface-700/50 rounded w-full mb-1"></div>
                                    <div class="h-2 bg-surface-700/50 rounded w-5/6"></div>
                                </div>
                                <div class="bg-accent-300/30 rounded-lg"></div>
                                <div class="bg-surface-700/30 rounded-lg"></div>
                                <div class="bg-surface-700/30 rounded-lg"></div>
                                <div class="bg-surface-700/30 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hover overlay -->
                    <div class="absolute inset-0 bg-accent-300/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6 text-surface-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Project Info -->
                <div class="relative p-8">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-surface-100 mb-2 group-hover:text-accent-600 transition-colors">
                                DimGent.by
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Business</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Regional</span>
                            </div>
                        </div>
                        <div class="w-10 h-10 bg-surface-800 rounded-full flex items-center justify-center group-hover:bg-accent-500 transition-colors">
                            <svg class="w-5 h-5 text-surface-400 group-hover:text-surface-100 transition-colors transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-surface-400 leading-relaxed">
                        A localized business platform tailored for the Belarusian market. Built with Laravel, featuring clean architecture, responsive design, and streamlined user experience focused on regional accessibility and engagement.
                    </p>
                </div>
            </a>
            
            <!-- Additional placeholder projects to showcase variety -->
            
            <!-- Project 3: E-commerce Platform -->
            <div class="group relative bg-white border border-surface-700 rounded-3xl overflow-hidden transition-all duration-500 hover:border-surface-700">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative aspect-[16/10] bg-gradient-to-br from-surface-900 to-white overflow-hidden">
                    <div class="absolute inset-0 p-6">
                        <div class="h-full bg-surface-800/50 rounded-xl border border-surface-700/50 p-4 flex flex-col">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-8 h-8 bg-green-500/30 rounded-lg"></div>
                                <div class="flex-1"></div>
                                <div class="h-6 w-6 bg-surface-700 rounded-full"></div>
                            </div>
                            <div class="flex-1 grid grid-cols-4 gap-2">
                                @for($i = 0; $i < 8; $i++)
                                <div class="bg-surface-700/30 rounded-lg p-2">
                                    <div class="aspect-square bg-surface-700/50 rounded mb-2"></div>
                                    <div class="h-1.5 bg-surface-700 rounded w-full mb-1"></div>
                                    <div class="h-1.5 bg-green-500/30 rounded w-1/2"></div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative p-8">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-surface-100 mb-2">E-commerce Platform</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">E-commerce</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">React</span>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-surface-800 text-surface-500 text-xs rounded-full">Coming Soon</span>
                    </div>
                    <p class="text-surface-400 leading-relaxed">
                        A high-performance online store with advanced filtering, real-time inventory, and seamless checkout experience. Currently in development.
                    </p>
                </div>
            </div>
            
            <!-- Project 4: SaaS Dashboard -->
            <div class="group relative bg-white border border-surface-700 rounded-3xl overflow-hidden transition-all duration-500 hover:border-surface-700">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative aspect-[16/10] bg-gradient-to-br from-surface-900 to-white overflow-hidden">
                    <div class="absolute inset-0 p-6">
                        <div class="h-full bg-surface-800/50 rounded-xl border border-surface-700/50 flex">
                            <!-- Sidebar -->
                            <div class="w-16 border-r border-surface-700/50 p-2 flex flex-col gap-2">
                                <div class="w-full aspect-square bg-pink-500/30 rounded-lg"></div>
                                <div class="w-full aspect-square bg-surface-700/50 rounded-lg"></div>
                                <div class="w-full aspect-square bg-surface-700/50 rounded-lg"></div>
                                <div class="w-full aspect-square bg-surface-700/50 rounded-lg"></div>
                            </div>
                            <!-- Main content -->
                            <div class="flex-1 p-4">
                                <div class="grid grid-cols-3 gap-3 mb-4">
                                    <div class="bg-surface-700/30 rounded-lg p-3">
                                        <div class="h-2 bg-surface-700 rounded w-1/2 mb-2"></div>
                                        <div class="h-4 bg-pink-500/30 rounded w-3/4"></div>
                                    </div>
                                    <div class="bg-surface-700/30 rounded-lg p-3">
                                        <div class="h-2 bg-surface-700 rounded w-1/2 mb-2"></div>
                                        <div class="h-4 bg-primary-500/30 rounded w-2/3"></div>
                                    </div>
                                    <div class="bg-surface-700/30 rounded-lg p-3">
                                        <div class="h-2 bg-surface-700 rounded w-1/2 mb-2"></div>
                                        <div class="h-4 bg-green-500/30 rounded w-4/5"></div>
                                    </div>
                                </div>
                                <div class="bg-surface-700/30 rounded-lg h-24"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative p-8">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-surface-100 mb-2">Analytics Dashboard</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">SaaS</span>
                                <span class="px-3 py-1 bg-surface-800 text-surface-400 text-xs rounded-full">Vue.js</span>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-surface-800 text-surface-500 text-xs rounded-full">Coming Soon</span>
                    </div>
                    <p class="text-surface-400 leading-relaxed">
                        A comprehensive analytics dashboard with real-time data visualization, custom reports, and intuitive user management.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding bg-surface-900">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8" x-data="reveal()" class="reveal">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-surface-100 mb-2" x-data="counter(50)" x-text="current + '+'"></div>
                <div class="text-surface-400">Projects Completed</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-surface-100 mb-2" x-data="counter(40)" x-text="current + '+'"></div>
                <div class="text-surface-400">Happy Clients</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-surface-100 mb-2" x-data="counter(5)" x-text="current + '+'"></div>
                <div class="text-surface-400">Years Experience</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-surface-100 mb-2" x-data="counter(15)" x-text="current + '+'"></div>
                <div class="text-surface-400">Technologies</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding">
    <div class="max-w-5xl mx-auto">
        <div 
            class="relative bg-gradient-to-br from-surface-900 to-white rounded-3xl border border-surface-700 overflow-hidden"
            x-data="reveal()" 
            class="reveal"
        >
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary-100 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent-300/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative px-8 py-16 sm:px-16 sm:py-20 text-center">
                <h2 class="heading-lg text-surface-100 mb-4">
                    Have a Project in Mind?
                </h2>
                <p class="text-body max-w-xl mx-auto mb-10">
                    We'd love to hear about your next project. Let's create something amazing together.
                </p>
                <a 
                    href="{{ route('contact') }}" 
                    class="btn-primary"
                    x-data="magnetic()"
                    @mousemove="handleMouseMove"
                    @mouseleave="handleMouseLeave"
                    :style="{ transform: `translate(${x}px, ${y}px)` }"
                >
                    Start Your Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
