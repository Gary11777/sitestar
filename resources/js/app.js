import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

function initReveals() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const elements = document.querySelectorAll('[data-reveal]');

    if (elements.length === 0) return;

    for (const el of elements) {
        const delay = el.getAttribute('data-reveal-delay');

        if (delay) {
            el.style.transitionDelay = `${delay}ms`;
        }
    }

    if (prefersReducedMotion) {
        for (const el of elements) {
            el.classList.add('is-revealed');
        }

        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            for (const entry of entries) {
                if (!entry.isIntersecting) continue;

                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        },
        { threshold: 0.12 }
    );

    for (const el of elements) {
        observer.observe(el);
    }
}

function initParallax() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    const elements = Array.from(document.querySelectorAll('[data-parallax]'));
    if (elements.length === 0) return;

    let targetX = 0;
    let targetY = 0;
    let currentX = 0;
    let currentY = 0;
    let rafId = null;

    const onMove = (event) => {
        const x = (event.clientX / window.innerWidth - 0.5) * 2;
        const y = (event.clientY / window.innerHeight - 0.5) * 2;

        targetX = x;
        targetY = y;

        if (rafId === null) {
            rafId = window.requestAnimationFrame(update);
        }
    };

    const update = () => {
        rafId = null;

        currentX += (targetX - currentX) * 0.08;
        currentY += (targetY - currentY) * 0.08;

        for (const el of elements) {
            const strength = Number(el.getAttribute('data-parallax') ?? 14);
            const tx = currentX * strength;
            const ty = currentY * strength;

            el.style.setProperty('--parallax-x', `${tx}px`);
            el.style.setProperty('--parallax-y', `${ty}px`);
        }

        const delta = Math.abs(currentX - targetX) + Math.abs(currentY - targetY);
        if (delta > 0.001) {
            rafId = window.requestAnimationFrame(update);
        }
    };

    window.addEventListener('mousemove', onMove, { passive: true });
    window.addEventListener(
        'mouseleave',
        () => {
            targetX = 0;
            targetY = 0;

            if (rafId === null) {
                rafId = window.requestAnimationFrame(update);
            }
        },
        { passive: true }
    );
}

window.addEventListener('DOMContentLoaded', () => {
    initReveals();
    initParallax();
});

Alpine.start();
