import './bootstrap';
import Alpine from 'alpinejs';

// Initialize Alpine.js
window.Alpine = Alpine;

// Scroll reveal observer - triggers animations when elements enter viewport
Alpine.data('reveal', () => ({
    shown: false,
    init() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.shown = true;
                    this.$el.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        
        observer.observe(this.$el);
    }
}));

// Magnetic button effect - subtle cursor-following animation
Alpine.data('magnetic', () => ({
    x: 0,
    y: 0,
    handleMouseMove(e) {
        const rect = this.$el.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        this.x = (e.clientX - centerX) * 0.15;
        this.y = (e.clientY - centerY) * 0.15;
    },
    handleMouseLeave() {
        this.x = 0;
        this.y = 0;
    }
}));

// Card glow effect - tracks mouse position for radial gradient
Alpine.data('cardGlow', () => ({
    handleMouseMove(e) {
        const rect = this.$el.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        this.$el.style.setProperty('--mouse-x', `${x}%`);
        this.$el.style.setProperty('--mouse-y', `${y}%`);
    }
}));

// Counter animation - animates numbers on scroll
Alpine.data('counter', (target, duration = 2000) => ({
    current: 0,
    target: target,
    started: false,
    init() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.started) {
                    this.started = true;
                    this.animate();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(this.$el);
    },
    animate() {
        const start = performance.now();
        const step = (timestamp) => {
            const progress = Math.min((timestamp - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
            this.current = Math.floor(eased * this.target);
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };
        requestAnimationFrame(step);
    }
}));

// Parallax effect - subtle movement on scroll
Alpine.data('parallax', (speed = 0.5) => ({
    offset: 0,
    init() {
        this.updateOffset();
        window.addEventListener('scroll', () => this.updateOffset(), { passive: true });
    },
    updateOffset() {
        const rect = this.$el.getBoundingClientRect();
        const scrolled = window.scrollY;
        const elementTop = rect.top + scrolled;
        const viewportHeight = window.innerHeight;
        
        if (rect.top < viewportHeight && rect.bottom > 0) {
            this.offset = (scrolled - elementTop + viewportHeight) * speed * 0.1;
        }
    }
}));

// Mobile menu
Alpine.data('mobileMenu', () => ({
    open: false,
    toggle() {
        this.open = !this.open;
        document.body.style.overflow = this.open ? 'hidden' : '';
    },
    close() {
        this.open = false;
        document.body.style.overflow = '';
    }
}));

// Contact form with validation
Alpine.data('contactForm', () => ({
    form: {
        name: '',
        email: '',
        company: '',
        message: '',
        website: '' // honeypot
    },
    errors: {},
    loading: false,
    success: false,
    errorMessage: '',
    
    validate() {
        this.errors = {};
        
        if (!this.form.name.trim()) {
            this.errors.name = 'Имя обязательно';
        }
        
        if (!this.form.email.trim()) {
            this.errors.email = 'Email обязателен';
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) {
            this.errors.email = 'Введите корректный email';
        }
        
        if (!this.form.message.trim()) {
            this.errors.message = 'Сообщение обязательно';
        } else if (this.form.message.trim().length < 10) {
            this.errors.message = 'Сообщение должно содержать минимум 10 символов';
        }
        
        return Object.keys(this.errors).length === 0;
    },
    
    async submit() {
        if (!this.validate()) return;
        
        this.loading = true;
        this.errorMessage = '';
        
        try {
            // Get Turnstile token if available
            let turnstileToken = '';
            if (typeof turnstile !== 'undefined') {
                const widget = document.querySelector('.cf-turnstile iframe');
                if (widget) {
                    turnstileToken = turnstile.getResponse() || '';
                }
            }
            
            const response = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    ...this.form,
                    'cf-turnstile-response': turnstileToken
                })
            });
            
            const data = await response.json();
            
            if (response.ok) {
                this.success = true;
                this.form = { name: '', email: '', company: '', message: '', website: '' };
                // Reset Turnstile if available
                if (typeof turnstile !== 'undefined') {
                    turnstile.reset();
                }
            } else {
                if (data.errors) {
                    this.errors = data.errors;
                }
                this.errorMessage = data.message || 'Что-то пошло не так. Попробуйте ещё раз.';
            }
        } catch (error) {
            this.errorMessage = 'Ошибка сети. Проверьте подключение и попробуйте снова.';
        } finally {
            this.loading = false;
        }
    }
}));

// Typed text effect
Alpine.data('typed', (strings, typeSpeed = 100, backSpeed = 50, backDelay = 2000) => ({
    text: '',
    currentString: 0,
    currentChar: 0,
    isDeleting: false,
    strings: strings,
    
    init() {
        this.type();
    },
    
    type() {
        const current = this.strings[this.currentString];
        
        if (this.isDeleting) {
            this.text = current.substring(0, this.currentChar - 1);
            this.currentChar--;
        } else {
            this.text = current.substring(0, this.currentChar + 1);
            this.currentChar++;
        }
        
        let delay = this.isDeleting ? backSpeed : typeSpeed;
        
        if (!this.isDeleting && this.currentChar === current.length) {
            delay = backDelay;
            this.isDeleting = true;
        } else if (this.isDeleting && this.currentChar === 0) {
            this.isDeleting = false;
            this.currentString = (this.currentString + 1) % this.strings.length;
            delay = 500;
        }
        
        setTimeout(() => this.type(), delay);
    }
}));

// Email obfuscation - protects email from spam bots
Alpine.data('obfuscatedEmail', (user, domain) => ({
    user: user,
    domain: domain,
    get displayEmail() {
        return this.user + '@' + this.domain;
    },
    openMailto() {
        window.location.href = 'mailto:' + this.user + '@' + this.domain;
    }
}));

// Phone obfuscation - protects phone number from spam bots
Alpine.data('obfuscatedPhone', (parts) => ({
    parts: parts,
    get displayPhone() {
        return this.parts.join('');
    },
    get telLink() {
        return this.parts.join('').replace(/[\s\-]/g, '');
    },
    call() {
        window.location.href = 'tel:' + this.telLink;
    }
}));

// Start Alpine
Alpine.start();
