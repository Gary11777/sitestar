@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with SiteStar. Let\'s discuss your project and how we can help bring your vision to life.')

@push('turnstile')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush

@section('content')
<!-- Hero Section -->
<section class="relative section-padding overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Info -->
            <div x-data="reveal()" class="reveal">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-500 text-sm font-medium rounded-full mb-6">
                    Get in Touch
                </span>
                <h1 class="heading-xl text-surface-100 mb-6">
                    Let's Start a <span class="text-gradient">Conversation</span>
                </h1>
                <p class="text-body mb-12">
                    Have a project in mind? We'd love to hear about it. Fill out the form and we'll get back to you within 24 hours.
                </p>
                
                <!-- Contact Details -->
                <div class="space-y-6 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-surface-100 font-medium mb-1">Email Us</h3>
                            <a href="mailto:info@sitestar.by" class="text-surface-400 hover:text-primary-500 transition-colors">
                                info@sitestar.by
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-accent-300/30 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-surface-100 font-medium mb-1">Location</h3>
                            <p class="text-surface-400">Minsk, Belarus</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-surface-100 font-medium mb-1">Response Time</h3>
                            <p class="text-surface-400">Within 24 hours</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div>
                    <h3 class="text-surface-100 font-medium mb-4">Follow Us</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-surface-800 rounded-lg flex items-center justify-center text-surface-400 hover:bg-surface-700 hover:text-surface-100 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-surface-800 rounded-lg flex items-center justify-center text-surface-400 hover:bg-surface-700 hover:text-surface-100 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-surface-800 rounded-lg flex items-center justify-center text-surface-400 hover:bg-surface-700 hover:text-surface-100 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div x-data="reveal()" class="reveal">
                <div class="bg-white border border-surface-700 rounded-3xl p-8 lg:p-10">
                    <div x-data="contactForm()">
                        <!-- Success Message -->
                        <div 
                            x-show="success" 
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="text-center py-12"
                        >
                            <div class="w-20 h-20 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-surface-100 mb-2">Message Sent!</h3>
                            <p class="text-surface-400 mb-6">
                                Thank you for reaching out. We'll get back to you within 24 hours.
                            </p>
                            <button 
                                @click="success = false" 
                                class="btn-secondary"
                            >
                                Send Another Message
                            </button>
                        </div>
                        
                        <!-- Form -->
                        <form 
                            x-show="!success" 
                            @submit.prevent="submit()" 
                            class="space-y-6"
                        >
                            <!-- Error Message -->
                            <div 
                                x-show="errorMessage" 
                                x-cloak
                                class="p-4 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-sm"
                            >
                                <span x-text="errorMessage"></span>
                            </div>
                            
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-surface-300 mb-2">
                                    Name <span class="text-red-400">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    x-model="form.name"
                                    class="input"
                                    :class="errors.name ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : ''"
                                    placeholder="John Doe"
                                >
                                <p x-show="errors.name" x-text="errors.name" class="mt-2 text-sm text-red-400"></p>
                            </div>
                            
                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-surface-300 mb-2">
                                    Email <span class="text-red-400">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    x-model="form.email"
                                    class="input"
                                    :class="errors.email ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : ''"
                                    placeholder="john@example.com"
                                >
                                <p x-show="errors.email" x-text="errors.email" class="mt-2 text-sm text-red-400"></p>
                            </div>
                            
                            <!-- Company Field (Optional) -->
                            <div>
                                <label for="company" class="block text-sm font-medium text-surface-300 mb-2">
                                    Company <span class="text-surface-500">(Optional)</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="company" 
                                    x-model="form.company"
                                    class="input"
                                    placeholder="Your Company"
                                >
                            </div>
                            
                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-surface-300 mb-2">
                                    Message <span class="text-red-400">*</span>
                                </label>
                                <textarea 
                                    id="message" 
                                    x-model="form.message"
                                    rows="5"
                                    class="input resize-none"
                                    :class="errors.message ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : ''"
                                    placeholder="Tell us about your project..."
                                ></textarea>
                                <p x-show="errors.message" x-text="errors.message" class="mt-2 text-sm text-red-400"></p>
                            </div>
                            
                            <!-- Honeypot Field (hidden from users, catches bots) -->
                            <div class="hidden" aria-hidden="true">
                                <label for="website">Website</label>
                                <input 
                                    type="text" 
                                    id="website" 
                                    name="website"
                                    x-model="form.website"
                                    tabindex="-1"
                                    autocomplete="off"
                                >
                            </div>
                            
                            <!-- Cloudflare Turnstile -->
                            @if(config('services.turnstile.site_key'))
                            <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}" data-theme="dark"></div>
                            @endif
                            
                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="btn-primary w-full justify-center"
                                :disabled="loading"
                                :class="loading ? 'opacity-70 cursor-not-allowed' : ''"
                            >
                                <span x-show="!loading">Send Message</span>
                                <span x-show="loading" class="flex items-center gap-2">
                                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Sending...
                                </span>
                                <svg x-show="!loading" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                            
                            <p class="text-xs text-surface-500 text-center">
                                By submitting this form, you agree to our privacy policy.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding bg-surface-900">
    <div class="max-w-4xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12" x-data="reveal()" class="reveal">
            <span class="inline-block px-4 py-1.5 bg-accent-300/30 text-accent-600 text-sm font-medium rounded-full mb-4">
                FAQ
            </span>
            <h2 class="heading-lg text-surface-100 mb-4">Frequently Asked Questions</h2>
        </div>
        
        <!-- FAQ Items -->
        <div class="space-y-4" x-data="{ active: null }" x-init="reveal()">
            <!-- FAQ 1 -->
            <div class="bg-white border border-surface-700 rounded-2xl overflow-hidden">
                <button 
                    @click="active = active === 1 ? null : 1"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4"
                >
                    <span class="font-medium text-surface-100">What is your typical project timeline?</span>
                    <svg 
                        class="w-5 h-5 text-surface-400 transition-transform duration-200"
                        :class="active === 1 ? 'rotate-180' : ''"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div 
                    x-show="active === 1" 
                    x-collapse
                    class="px-6 pb-5"
                >
                    <p class="text-surface-400">
                        Project timelines vary based on complexity and scope. A simple landing page might take 1-2 weeks, while a full web application could take 2-3 months. We'll provide a detailed timeline during our initial consultation.
                    </p>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="bg-white border border-surface-700 rounded-2xl overflow-hidden">
                <button 
                    @click="active = active === 2 ? null : 2"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4"
                >
                    <span class="font-medium text-surface-100">How much does a website cost?</span>
                    <svg 
                        class="w-5 h-5 text-surface-400 transition-transform duration-200"
                        :class="active === 2 ? 'rotate-180' : ''"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div 
                    x-show="active === 2" 
                    x-collapse
                    class="px-6 pb-5"
                >
                    <p class="text-surface-400">
                        Every project is unique, and pricing depends on your specific requirements. We offer competitive rates and provide detailed quotes after understanding your needs. Contact us for a free consultation and estimate.
                    </p>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="bg-white border border-surface-700 rounded-2xl overflow-hidden">
                <button 
                    @click="active = active === 3 ? null : 3"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4"
                >
                    <span class="font-medium text-surface-100">Do you provide ongoing support?</span>
                    <svg 
                        class="w-5 h-5 text-surface-400 transition-transform duration-200"
                        :class="active === 3 ? 'rotate-180' : ''"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div 
                    x-show="active === 3" 
                    x-collapse
                    class="px-6 pb-5"
                >
                    <p class="text-surface-400">
                        Yes! We offer various support packages including maintenance, updates, security monitoring, and feature enhancements. We're committed to your long-term success and are always here to help.
                    </p>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="bg-white border border-surface-700 rounded-2xl overflow-hidden">
                <button 
                    @click="active = active === 4 ? null : 4"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4"
                >
                    <span class="font-medium text-surface-100">What technologies do you use?</span>
                    <svg 
                        class="w-5 h-5 text-surface-400 transition-transform duration-200"
                        :class="active === 4 ? 'rotate-180' : ''"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div 
                    x-show="active === 4" 
                    x-collapse
                    class="px-6 pb-5"
                >
                    <p class="text-surface-400">
                        We specialize in modern web technologies including Laravel, React, Vue.js, Next.js, Tailwind CSS, and more. We choose the best tech stack for each project based on your specific needs and goals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
