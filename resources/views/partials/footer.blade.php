<!-- Footer -->
<footer class="relative bg-surface-900 border-t border-surface-700">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content -->
        <div class="py-16 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                <!-- Brand Column -->
                <div class="lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                        <svg class="w-8 h-8 text-primary-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-xl font-bold text-surface-200">
                            Site<span class="text-primary-500">Star</span>
                        </span>
                    </a>
                    <p class="text-surface-500 text-sm leading-relaxed mb-6">
                        Создаём исключительный цифровой опыт с помощью инновационного дизайна и передовых технологий.
                    </p>
                    <!-- Social Links -->
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-800 text-surface-500 hover:bg-surface-700 hover:text-surface-200 transition-all duration-200" aria-label="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-800 text-surface-500 hover:bg-surface-700 hover:text-surface-200 transition-all duration-200" aria-label="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-800 text-surface-500 hover:bg-surface-700 hover:text-surface-200 transition-all duration-200" aria-label="Twitter">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Services Column -->
                <div>
                    <h3 class="text-sm font-semibold text-surface-200 uppercase tracking-wider mb-6">Услуги</h3>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">Веб-разработка</a></li>
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">UI/UX дизайн</a></li>
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">E-commerce решения</a></li>
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">Фирменный стиль</a></li>
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">SEO-оптимизация</a></li>
                    </ul>
                </div>
                
                <!-- Company Column -->
                <div>
                    <h3 class="text-sm font-semibold text-surface-200 uppercase tracking-wider mb-6">Компания</h3>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">О нас</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">Портфолио</a></li>
                        <li><a href="{{ route('contact') }}" class="text-surface-500 hover:text-surface-200 transition-colors text-sm">Контакты</a></li>
                    </ul>
                </div>
                
                <!-- Contact Column -->
                <div>
                    <h3 class="text-sm font-semibold text-surface-200 uppercase tracking-wider mb-6">Связаться</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="#" x-data="obfuscatedEmail('info', 'sitestar.by')" @click.prevent="openMailto()" x-text="displayEmail" class="text-surface-500 hover:text-surface-200 transition-colors text-sm"></a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="#" x-data="obfuscatedPhone(['+375', ' 29 ', '172', '-58-', '72'])" @click.prevent="call()" x-text="displayPhone" class="text-surface-500 hover:text-surface-200 transition-colors text-sm"></a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-surface-500 text-sm">Минск, Беларусь</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="py-6 border-t border-surface-700">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-surface-500 text-sm">
                    &copy; {{ date('Y') }} SiteStar. Все права защищены.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-surface-500 hover:text-surface-300 text-sm transition-colors">Политика конфиденциальности</a>
                    <a href="#" class="text-surface-500 hover:text-surface-300 text-sm transition-colors">Условия использования</a>
                </div>
            </div>
        </div>
    </div>
</footer>
