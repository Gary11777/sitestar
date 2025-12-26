<!-- Main Navigation Header -->
<header 
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="scrolled ? 'bg-white/95 backdrop-blur-lg border-b border-surface-700/30 shadow-sm' : 'bg-transparent'"
    x-data="mobileMenu()"
>
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10 flex items-center justify-center">
                    <!-- Animated star logo -->
                    <svg class="w-8 h-8 text-primary-500 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-12" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <div class="absolute inset-0 bg-primary-500/20 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <span class="text-xl font-bold text-surface-100">
                    Site<span class="text-primary-500">Star</span>
                </span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-1">
                @php
                    $navItems = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'about', 'label' => 'About'],
                        ['route' => 'portfolio', 'label' => 'Portfolio'],
                        ['route' => 'contact', 'label' => 'Contact'],
                    ];
                @endphp
                
                @foreach($navItems as $item)
                    <a 
                        href="{{ route($item['route']) }}" 
                        class="relative px-4 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs($item['route']) ? 'text-surface-100' : 'text-surface-400 hover:text-surface-100' }}"
                    >
                        {{ $item['label'] }}
                        @if(request()->routeIs($item['route']))
                            <span class="absolute bottom-0 left-4 right-4 h-0.5 bg-primary-500 rounded-full"></span>
                        @endif
                    </a>
                @endforeach
            </div>
            
            <!-- CTA Button (Desktop) -->
            <div class="hidden md:block">
                <a 
                    href="{{ route('contact') }}" 
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium rounded-xl bg-surface-100 text-white hover:bg-surface-200 transition-all duration-200"
                    x-data="magnetic()"
                    @mousemove="handleMouseMove"
                    @mouseleave="handleMouseLeave"
                    :style="{ transform: `translate(${x}px, ${y}px)` }"
                >
                    Start a Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button 
                @click="toggle()" 
                class="md:hidden p-2 text-surface-400 hover:text-surface-100 transition-colors"
                :aria-expanded="open"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div 
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden absolute top-full left-0 right-0 bg-white/98 backdrop-blur-lg border-b border-surface-700 shadow-lg"
    >
        <div class="px-4 py-6 space-y-1">
            @foreach($navItems as $item)
                <a 
                    href="{{ route($item['route']) }}" 
                    class="block px-4 py-3 rounded-lg text-base font-medium transition-colors {{ request()->routeIs($item['route']) ? 'bg-primary-500/10 text-primary-500' : 'text-surface-100 hover:bg-surface-800' }}"
                    @click="close()"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
            
            <div class="pt-4 mt-4 border-t border-surface-700">
                <a 
                    href="{{ route('contact') }}" 
                    class="btn-primary w-full justify-center"
                    @click="close()"
                >
                    Start a Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
