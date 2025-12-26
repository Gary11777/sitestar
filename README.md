# SiteStar - Web Development & Design Studio

A modern, responsive Laravel website for SiteStar, a professional web development company. Built with Laravel, Tailwind CSS, and Alpine.js.

## Features

- **Modern Design**: Clean, minimal aesthetic with smooth animations and subtle effects
- **Responsive**: Mobile-first approach, works on all devices
- **Interactive Effects**: Scroll animations, parallax, magnetic buttons, card glow effects
- **Secure Contact Form**: Includes multiple security layers:
  - Cloudflare Turnstile (invisible bot detection)
  - Honeypot field
  - Rate limiting (5 requests/minute)
  - CSRF protection
  - Server-side validation

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Tailwind CSS v4, Alpine.js
- **Build Tool**: Vite

## Pages

- **Home**: Hero section with typing effect, services grid, process section
- **About**: Company story, values, tech stack showcase
- **Portfolio**: Project showcase (dimgent.com, dimgent.by)
- **Contact**: Secure contact form with FAQ section

## Installation

1. Clone the repository
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Install Node dependencies:
   ```bash
   npm install
   ```
4. Copy environment file:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Start development server:
   ```bash
   npm run dev
   ```

## Configuration

### Mail Settings

The contact form uses sendmail by default. Configure in `.env`:

```env
MAIL_MAILER=sendmail
MAIL_SENDMAIL_PATH="/usr/sbin/sendmail -t -i"
MAIL_FROM_ADDRESS="info@sitestar.by"
MAIL_FROM_NAME="SiteStar"
```

### Cloudflare Turnstile (Optional)

For enhanced bot protection, add your Turnstile keys:

```env
TURNSTILE_SITE_KEY=your_site_key
TURNSTILE_SECRET_KEY=your_secret_key
```

Get keys at: https://dash.cloudflare.com/turnstile

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── ContactController.php    # Contact form handling
│   └── Mail/
│       └── ContactFormMail.php      # Email template class
├── resources/
│   ├── css/
│   │   └── app.css                  # Tailwind config & custom styles
│   ├── js/
│   │   └── app.js                   # Alpine.js components
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Main layout
│       ├── partials/
│       │   ├── header.blade.php     # Navigation
│       │   └── footer.blade.php     # Footer
│       ├── pages/
│       │   ├── home.blade.php
│       │   ├── about.blade.php
│       │   ├── portfolio.blade.php
│       │   └── contact.blade.php
│       └── emails/
│           └── contact.blade.php    # Email template
└── routes/
    └── web.php                      # Route definitions
```

## Special Effects

- **Typed Text**: Animated typing effect in hero section
- **Scroll Reveal**: Elements animate in as they enter viewport
- **Parallax**: Subtle depth effect on scroll
- **Magnetic Buttons**: Buttons follow cursor slightly
- **Card Glow**: Interactive gradient follows mouse on cards
- **Counter Animation**: Numbers animate when scrolled into view

## License

This project is open-sourced software.
